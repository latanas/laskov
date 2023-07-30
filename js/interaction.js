/*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/
function interaction() {
  var self = this;

  self.o = null;
  self.video = null;

  self.is_video = false;
  self.ibuf_video = null;

  self.img_w = 0;
  self.img_h = 0;
  self.img_top = 0;
  self.img_left = 0;
}

/*
  Decide on video support
*/
interaction.hasVideo = function( dom_obj ) {
  if( !!dom_obj.canPlayType ) {
    if( dom_obj.canPlayType('video/mp4; codecs="avc1.4D401E"')=="" ) {
      if( dom_obj.canPlayType('video/webm; codecs="vp8.0, vorbis"')=="" )
        return false;
    }
    return true;
  }
  return false;
}

/*
  Open illustration/video
*/
interaction.openIllustrationShutter = function( dom_obj, e ) {
  var self = this;
  e.preventDefault();

  self.o = $(dom_obj);
  self.is_video = self.o.hasClass("video_poster");

  var os = self.o.clone();
  var os_img = os.find("img").first();

  /*
    Prepare animation
  */
  os.css("position", "absolute");
  os.css({ top: self.o.offset().top, left: self.o.offset().left });
  os.addClass("shutter_img");

  if( self.is_video )
  {
    self.video = $( "#" + self.o.attr("id") + "_video" );
    self.img_h = 394;
    self.img_w = 705;
    self.img_top = 0;
    self.img_left = 0;
  }
  else
  {
    self.img_w = parseInt( os_img.css('width').replace("px", "") );
    self.img_h = parseInt( os_img.css('height').replace("px", "") );
    self.img_top = parseInt(os_img.css('top').replace("px", ""));
    self.img_left = parseInt(os_img.css('left').replace("px", ""));
  }

  var aw = $("main").width() - 20;
  var ah = self.img_h * (aw/self.img_w);

  var miny = $("main").offset().top-7;
  var maxy = $("main").height()+miny-ah-50;

  var at = $(window).scrollTop() + ($(window).height()-ah)/2;
  var al = $("main").offset().left;

  if( at > maxy ) {
    at = maxy;
  }

  if( at < miny ) {
    at = miny;
  }

  if( $(".outer_panel").height() < at + ah ) {
    $(".outer_panel").css("min-height", (at + ah + 100) + "px")
  }

  var sh = $('<div class="shutter"></div>').first();
  var sh_target = $("main");

  sh.css("position", "absolute");
  sh.css({top:sh_target.offset().top, left:sh_target.offset().left});
  sh.css("width", sh_target.width());
  sh.css("height", sh_target.height() );

  sh.appendTo("body");
  os.appendTo("body");
  sh.on("click",function(e){e.preventDefault();});
  os.on("click",function(e){e.preventDefault();});

  /*
    Animate
  */
  sh.fadeIn("fast");

  os_img.animate({
    width: aw + "px", height: ah + "px",
    left: "0px", top: (self.img_top * (ah/self.img_h)) + "px"
  }, 940);

  os.animate({ left:al+"px", width:aw+"px" }, 940,"swing",
  function(ee) {
    os_img.animate({ top:"0px" }, 940);

    os.animate({ top:at+"px",height:ah+"px" }, 950,"swing",
    function(ee)
    {
      sh.on("click", function(e) {
        self.closeIllustrationShutter(e);
      });
      os.on("click", function(e) {
        self.closeIllustrationShutter(e);
      });

      /*
        Actions for video playback
      */
      if( self.is_video ) {
        var osi = os.children().first();

        self.video.hide();
        self.video.css("opacity","");
        self.video.css({top:osi.offset().top, left:osi.offset().left});
        self.video.css("width", osi.width());
        self.video.css("height", osi.height());

        self.video.on("click", function(e) {
          self.closeIllustrationShutter(e);
        });

        /*
          Launch video ( if supported )
        */
        var v_dom = self.video.get(0);

        if( self.hasVideo(v_dom) )
        {
          self.o.children().first().html('<span class="play">Resume video</span>');

          // Play video function
          //
          var _play_video = function()
          {
            os.children().first().html('');

            self.video.bind('ended', function (){
              self.o.children().first().html('<span class="play">Replay</span>');
              self.closeIllustrationShutter(e);
            });
            v_dom.play();
            self.video.fadeIn("fast", function(){
               v_dom.play();
            });
          };

          // Play it when data is preloaded
          //
          if (v_dom.readyState >= v_dom.HAVE_ENOUGH_DATA)  _play_video();
          else
          {
            var buf_text = "Buffering";
            var buf_dots = "";
            os.children().first().html('<span class="play" id="buf_message">'+buf_text+'</span>');

            self.ibuf_video = setInterval(function(){
              if (v_dom.readyState >= v_dom.HAVE_ENOUGH_DATA) {
                _play_video();
                clearInterval( self.ibuf_video );
                self.ibuf_video = null;
              }
              else {
                buf_dots = buf_dots.length >= 10 ? "" : buf_dots+" .";
                $("#buf_message").html(buf_text+buf_dots);
              }
            },500);
          }
        }
        else
        {
          os.children().first().html('<span class="play">Video playback is not available.</span>');
          self.o.children().first().html('<span class="play">Video playback is not available.</span>');
        }

        var msg_at = os.offset().top - $("main").offset().top + ah + 50;
        $(".shutter").html('<div style="position: relative; top: '+msg_at+'px; left: 300px; width: 120px;">(click to return)</div>');
      }
      else {
        os.append('<p class="close">Close</p>');
      }

    });
  });
}

/*
  Close illustration/video
*/
interaction.closeIllustrationShutter = function( e ) {
  var self = this;
  e.preventDefault();

  var _close = function()
  {
    var os = $(".shutter_img");
    var os_img = os.find("img").first();

    $(".shutter").fadeOut("fast", function(){
      $(".shutter").remove();
    });
    os.find(".close").hide();

    var img_h_max = 0;

    if( !self.is_video ) {
      img_h_max = parseInt( os_img.css('height').replace("px", "") );
    }

    os_img.animate({ top: (self.img_top*(img_h_max/self.img_h)) + "px" }, 500);
    os.animate(
      { top: self.o.offset().top+"px", height: self.o.height()+"px" },
      500,"swing",
      function(ee)
      {
        os_img.animate({
          width: self.img_w + "px",
          height: self.img_h + "px",
          left: self.img_left + "px",
          top: self.img_top + "px"
        }, 500);

        os.animate(
          { left: self.o.offset().left+"px", width: self.o.width()+"px" },
          500,"swing",
          function(ee2)
          {
            if( self.is_video ) {
              if( self.hasVideo( self.video.get(0)) ) {
                self.video.get(0).pause();
              }
              if( self.ibuf_video ) {
                clearInterval( self.ibuf_video );
              }
              self.video.unbind("ended");
              self.video.off();
            }

            os.remove();
            self.o = null;
            self.video = null;
            self.is_video = false;
        });
    });
  };

  if( self.is_video ) {
    self.video.fadeOut( "slow", _close );
  }
  else {
    _close();
  }
}

/*
  Handle screen size changes
*/
interaction.resizeShutter = function() {
  var self = this;

  if( self.o )
  {
    var sh = $('.shutter');
    var sh_target = $("main");

    sh.css({top:sh_target.offset().top, left:sh_target.offset().left});
    sh.css("width", sh_target.width());
    sh.css("height", sh_target.height());

    $(".shutter_img").css({left:sh_target.offset().left});

    if( self.is_video ) {
      self.video.css({ left:sh_target.offset().left });
    }
  }
}
