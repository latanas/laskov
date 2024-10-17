<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com

  illustration-prints"
*/ ?>
<nav>
  <?php foreach( array("artwork", "programming", "sketchbook") as $template ): ?>
    <a href="<?= get_home_url() . "/" . ($template == "artwork"? "" : $template) ?>"
      class="<?=
        ( is_front_page() && ($template == "artwork") )
        || ( is_page("programming") && ($template == "programming") )
        || ( is_home() && ($template == "sketchbook") )
        ? 'activated' : '' ?>"><?= ucfirst($template) ?></a>
  <?php endforeach ?>
</nav>
