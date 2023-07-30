<?php /*
  Project: Portfolio site
  Copyright (c) 2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<?php
$year_of_publishing = null;

if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    if( is_null($year_of_publishing) )
      $year_of_publishing = get_the_date("Y");

    echo "<header class=\"sketchbook_post\">";
    echo "<h3><a href='" . get_permalink() . "'>" . ucwords(get_the_title()) . "</a></h3>";
    echo "<strong> " . get_the_date() . " </strong>";
    echo "<strong> " . get_the_time() . " </strong>";
    echo "</header>";

    echo '<section class="sketchbook_post">';
    //echo wpautop(get_the_content());
    the_content( __( 'Continue reading', 'twentytwenty' ) );
    echo '</section>';
  endwhile;

else :
  // If no content, include the "Not found" page
  include "empty.php";
endif;
