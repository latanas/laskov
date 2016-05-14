<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<h2>Atanas Laskov</h2>

<div class="portrait" ><div class="portrait_in" style="background-image: url(<?= get_template_path() ?>/asset/image/me3.jpg);"></div></div>

<nav>
  <a href="<?= get_home_url() ?>/gamedev/" <?= is_front_page()? 'class="activated"' : '' ?> >Gamedev</a>
  <a href="<?= get_home_url() ?>/illustration/" <?= is_page("illustration")? 'class="activated"' : '' ?> >Illustration</a>
  <a href="<?= get_home_url() ?>/sketchbook/" <?= (!is_front_page() && !is_page("illustration"))? 'class="activated"' : '' ?> >Sketchbook</a>
</nav>
