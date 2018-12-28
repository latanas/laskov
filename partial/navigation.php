<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<nav>
  <?php foreach( array("illustration", "sketchbook", "essays", "gamedev") as $template ): ?>
    <a href="<?= get_home_url() . "/{$template}/" ?>"
      class="<?= (   (($template == "essays") && is_page() && !is_page(array("illustration", "sketchbook", "essays", "gamedev")) ) ||      (is_home() || is_page(array("illustration", "sketchbook", "essays", "gamedev"))) && (get_template_name() == $template)) ? 'activated' : '' ?>" ><?= ucfirst($template) ?></a>
  <?php endforeach ?>
</nav>
