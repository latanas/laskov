/*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/

$(function()
{
  // Illustrations and video
  //
  $(".illustration").click(openIllustrationShutter);
  $(".video_poster").click(openIllustrationShutter);
  $(window).resize(resizeShutter);

  // Expandable code sections
  //
  var expand_code_fn = function(e)
  {
    var expandable_id = $(this).attr("id") + "_ex";
    var ex = $("#"+expandable_id);

    if(ex.is(":hidden"))
    {
      ex.slideDown("slow");
      var code = $(this).html();

      code = code.replace("[+] expand", "[-] contract")
      $(this).html(code);
    }
    else
    {
      ex.hide();//slideUp("fast");
      var code = $(this).html();

      code = code.replace("[-] contract", "[+] expand")
      $(this).html(code);
    }
  };

  $(".src_title").click(expand_code_fn);
});
