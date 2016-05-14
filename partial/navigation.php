<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<h2>Atanas Laskov</h2>

<div class="portrait" ><div class="portrait_in" style="background-image: url(<?php echo get_url_path();?>/asset/image/me3.jpg);"></div></div>

<nav>
  <a href="<?php bloginfo( 'url' ); ?>/gamedev/" <?php if(is_front_page()) echo 'class="activated"'; ?> >Gamedev</a>
  <a href="<?php bloginfo( 'url' ); ?>/illustration/" <?php if(is_page("illustration")) echo 'class="activated"'; ?> >Illustration</a>
  <a href="<?php bloginfo( 'url' ); ?>/sketchbook/" <?php if( (!is_front_page()) && (!is_page("illustration"))) echo 'class="activated"'; ?> >Sketchbook</a>
</nav>
