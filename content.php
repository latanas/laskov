<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>

<div class="outer_panel">

  <div class="small_menu">
    <?php include "partial/portrait.php"; ?>
	<h2>Atanas Laskov &#127987;&#65039;&#8205;&#127752;</h2>
    <?php include "partial/navigation.php"; ?>
  </div>

  <main>
    <?php include "partial/zaks_dragonfly.php" ?>
    <?php include "partial/mailchimp.php"; ?>

    <?php
      $template_name = get_template_name();
      if(is_front_page()) {
        $template_name = "portfolio";
      }
      else if(is_page("illustrations")) {
        $template_name = "illustrations";
      }

    ?>

    <article class="content_area" id="template_<?= $template_name ?>" >
      <?php include "partial/" . $template_name . ".php"; ?>
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
    <h2>Atanas Laskov &#127987;&#65039;&#8205;&#127752;</h2>
    <?php include "partial/portrait.php"; ?>
    <?php include "partial/navigation.php"; ?>
  </div>

</div>
