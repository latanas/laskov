<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<div class="spacer_top"></div>
<div class="out_panel">

  <div class="small_menu">
    <?php include "partial/navigation.php"; ?>
  </div>

  <main>
    <article class="content_area">
      <?php /* Preload photo */ ?>
      <span style="background-image: url('<?=get_template_directory_uri()?>'/asset/image/me3.jpg); display:none;"></span>

      <?php if ( is_front_page() ) {
        include "partial/gamedev.php";
      }
      else if( is_page("illustration") ) {
        include "partial/illustration.php";
      }
      else {
        include "partial/sketchbook.php";
      }?>
    </article>

    <footer class="content_area">
      <?php include "partial/contact.php"; ?>
    </footer>
  </main>

  <div class="side_panel">
    <?php include "partial/navigation.php"; ?>
  </div>

</div>
