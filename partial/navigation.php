<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com

  illustration-prints"
*/ ?>
<nav>
  <?php foreach( array("portfolio", /*"fine-art",*/ "gamedev", "sketchbook") as $template ): ?>
    <a href="<?= get_home_url() . "/" . ($template == "portfolio"? "" : $template) ?>"
      class="<?= (
        (is_front_page() && ($template == "portfolio")) )
        || (is_home() && ($template == "sketchbook"))
        || ( is_page(array("sketchbook", "essays", "gamedev")) && (get_template_name() == $template) )
        || ( is_page(array("fine-art")) && ($template == "fine-art") )
        ? 'activated' : '' ?>" ><?= $template == "fine-art" ? "Art & Prints" :  ucfirst($template) ?></a>
  <?php endforeach ?>
</nav>
