<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<h2>Atanas Laskov</h2>

<div class="portrait" ><div class="portrait_in" style="background-image: url(<?= get_template_path() ?>/asset/image/me3.jpg);"></div></div>

<nav>
  <?php foreach( array("gamedev", "illustration", "sketchbook") as $template ): ?>
    <a href="<?= get_home_url() . "/{$template}/" ?>"
      class="<?= (get_template_name() == $template)? 'activated' : '' ?>" ><?= ucfirst($template) ?></a>
  <?php endforeach ?>
</nav>
