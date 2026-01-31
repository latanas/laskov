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
    <?php include "partial/socials.php"; ?>

    <?php
      $template_name = get_template_name();
      if(is_front_page()) {
        $template_name = "programming";
      }
      else if(is_page("artwork")) {
        $template_name = "artwork";
      }
      else if(is_page("programming")) {
        $template_name = "programming";
      }
      else if(is_page("illustrations")) {
        $template_name = "artwork";
      }

    ?>

    <article class="content_area" id="template_<?= $template_name ?>" >
      <?php include "partial/" . $template_name . ".php"; ?>
    </article>
    
    <h3 class="copy" style="font-size: 25px;">
      <?php posts_nav_link($sep = ' &nbsp; ', $prelabel = '&laquo; See previous sketch', $nxtlabel = 'See next sketch &raquo;'); ?>
    </h3>

	<?php
	  if (is_null($year_of_publishing)) {
        $year_of_publishing = 2026;
      }
      echo "<h3 class='copy'>Copyright &copy; {$year_of_publishing} Atanas Laskov. All Rights Reserved.</h3> <br/>";
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
