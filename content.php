<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>

<div class="outer_panel">

  <div class="small_menu">
    <?php include "partial/portrait.php"; ?>
    <h2>Atanas Laskov</h2>
    <?php include "partial/navigation.php"; ?>
  </div>

  <main>
    <article class="content_area" id="template_<?= get_template_name() ?>" >
      <?php /* Preload photo */ ?>
      <span style="background-image: url('<?=get_template_directory_uri()?>'/asset/image/laskov.jpg); display:none;"></span>

      <?php include "partial/" . get_template_name() . ".php"; ?>
    </article>

  <?php
    if( !is_null($year_of_publishing) ) {
    echo "<h3 class='copy'>&copy; {$year_of_publishing} Atanas Laskov</h3>";
    }
  ?>

  <?php if( get_template_name() == "sketchbook") {template_pagination();} ?>

    <footer>
      <?php include "partial/contact.php"; ?>
    </footer>
  </main>

  <div class="side_panel">
    <h2>Atanas Laskov</h2>
    <?php include "partial/portrait.php"; ?>
    <?php include "partial/navigation.php"; ?>
  </div>

</div>
