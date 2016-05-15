/*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/

var o = null, v = null;
var is_video = false, ibuf_video = null;

/*
  Decide on video support
*/
function hasVideo(v_dom_obj){
  if(!!v_dom_obj.canPlayType){
    if(v_dom_obj.canPlayType('video/mp4; codecs="avc1.4D401E"')==""){
      if(v_dom_obj.canPlayType('video/webm; codecs="vp8.0, vorbis"')=="")
        return false;
    }
    return true;
  }
  return false;
}

/*
  Open illustration/video
*/
function openIllustrationShutter(e){
  e.preventDefault();

  o = $(this);
  is_video = o.hasClass("video_poster");

  var os = o.clone();
  var os_img = os.find("img").first();

  /*
    Prepare animation
  */
  os.css("position", "absolute");
  os.css({top:o.offset().top, left:o.offset().left});
  os.addClass("shutter_img");

  var imgh = 0, imgw = 0, imgtop = 0;

  if(is_video)
  {
    v = $("#" + o.attr("id") + "_video");
    imgh = 394;
    imgw = 705;
  }
  else
  {
    imgw = parseInt( os_img.css('width').replace("px", "") );
    imgh = parseInt( os_img.css('height').replace("px", "") );
    imgtop = parseInt(os_img.css('top').replace("px", ""));
  }

  var aw = $("main").width();
  var ah = imgh * (aw/imgw);

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
    left: "0px", top: (imgtop * (ah/imgh)) + "px"
  }, 940);

  os.animate({ left:al+"px", width:aw+"px" }, 940,"swing",
  function(ee) {
    os_img.animate({ top:"0px" }, 940);

    os.animate({ top:at+"px",height:ah+"px" }, 950,"swing",
    function(ee)
    {
      sh.on("click",closeIllustrationShutter);
      os.on("click",closeIllustrationShutter);

      /*
        Actions for video playback
      */
      if(is_video){
        var osi = os.children().first();

        v.hide();
        v.css("opacity","");
        v.css({top:osi.offset().top, left:osi.offset().left});
        v.css("width", osi.width());
        v.css("height", osi.height());
        v.on("click", closeIllustrationShutter);

        /*
          Launch video ( if supported )
        */
        var v_dom = v.get(0);

        if( hasVideo(v_dom) )
        {
          o.children().first().html('<span class="play">Resume video</span>');

          // Play video function
          //
          var play_video_now = function()
          {
            os.children().first().html('');

            v.bind('ended', function (){
              o.children().first().html('<span class="play">Replay</span>');
              closeIllustrationShutter(e);
            });
            v_dom.play();
            v.fadeIn("slow");
          };

          // Play it when data is preloaded
          //
          if (v_dom.readyState >= v_dom.HAVE_ENOUGH_DATA)  play_video_now();
          else
          {
            var buf_text = "Buffering";
            var buf_dots = "";
            os.children().first().html('<span class="play" id="buf_message">'+buf_text+'</span>');

            ibuf_video = setInterval(function(){
              if (v_dom.readyState >= v_dom.HAVE_ENOUGH_DATA)  { play_video_now(); clearInterval(ibuf_video); ibuf_video=null; }
              else{
                buf_dots = buf_dots.length >= 10 ? "" : buf_dots+" .";
                $("#buf_message").html(buf_text+buf_dots);
              }
            },500);

          }

        }
        else
        {
          os.children().first().html('<span class="play">Video playback is not available.</span>');
          o.children().first().html('<span class="play">Video playback is not available.</span>');
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
function closeIllustrationShutter(e){
  e.preventDefault();

  var close_shutter = function()
  {
    $(".shutter_img").find(".close").hide();
    $(".shutter").fadeOut("fast",function(){$(".shutter").remove();});

    $(".shutter_img").animate(
      {top:o.offset().top+"px",height:o.height()+"px"},
      500,"swing",function(ee)
    {

      $(".shutter_img").animate(
        {left:o.offset().left+"px",width:o.width()+"px",opacity: "0"},
        500,"swing",function(ee2)
        {
          if(is_video){
            if(hasVideo(v.get(0))) v.get(0).pause();
            if(ibuf_video) clearInterval(ibuf_video);
            v.unbind("ended");
            v.off();

          }

          $(".shutter_img").remove();
          o = null;
          v = null;
          is_video = false;
      });
    });
  };

    $(".shutter_img").find(".close").hide();

  if(is_video){
    v.fadeOut("slow",function(){
      close_shutter();
    });
  }
  else {
    close_shutter();
  }
}

/*
  Handle screen size changes
*/
function resizeShutter(){
  if(o)
  {
    var sh = $('.shutter');
    var sh_target = $("main");

    sh.css({top:sh_target.offset().top, left:sh_target.offset().left});
    sh.css("width", sh_target.width());
    sh.css("height", sh_target.height());


    $(".shutter_img").css({left:sh_target.offset().left});
    if(is_video) v.css({left:sh_target.offset().left});
  }
}
