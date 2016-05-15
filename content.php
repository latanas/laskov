<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>

<div class="outer_panel">

  <div class="small_menu">
    <?php include "partial/navigation.php"; ?>
  </div>

  <main>
    <article class="content_area" id="template_<?= get_template_name() ?>" >
      <?php /* Preload photo */ ?>
      <span style="background-image: url('<?=get_template_directory_uri()?>'/asset/image/me3.jpg); display:none;"></span>

      <?php include "partial/" . get_template_name() . ".php"; ?>
    </article>

    <footer>
      <?php include "partial/contact.php"; ?>
    </footer>
  </main>

  <div class="side_panel">
    <?php include "partial/navigation.php"; ?>
  </div>

</div>
