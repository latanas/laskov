<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/

/*
  Template functions
*/
function get_template_path() {
  $uri = parse_url( get_template_directory_uri() );
  return $uri["path"];
}

function get_template_name() {
  if( is_front_page() ) {
	  return "sketchbook";//"illustration";
  }
  else if( is_page("illustration") ) {
	  return "illustration";
  }
  else if( is_page("essays") ) {
	  return "essays";
  }
  else if( is_page("gamedev") ) {
	  return "gamedev";
  }
  return "sketchbook";
}

function template_video_poster($poster, $video, $video_webm, $poster_zoom) {
  static $id = 1;

  $video_poster_url = get_template_path() . "/asset/video/{$poster}";
  $video_poster_style = "background-image: url('{$video_poster_url}'); " .
                        "background-size: {$poster_zoom}% auto;";

  $video_source_mp4 = get_template_path()."/asset/video/{$video}.mp4";
  $video_source_webm = get_template_path()."/asset/video/{$video_webm}.mp4";

  include "partial/video.php";
  $id++;
}

function template_illustration($file, $view_x, $view_y, $spacing_y = 20, $giffer = false)
{
  global $folder;

  $image_path = "/asset/illustration/{$folder}/{$file}";

  $template     = get_template();
  $theme_root   = get_theme_root( $template );
  $template_dir = "$theme_root/$template";

  $image_size = getimagesize( $template_dir . $image_path );
  $image_w_max = $image_size[0];
  $image_h_max = $image_size[1];

  $image_aspect = $image_w_max / $image_h_max;

  $image_w = 700;
  $image_h = $image_w / $image_aspect;

  $view_size = 100;
  $x = (-1)*($image_w - $view_size) * ( $view_x/100.0 );
  $y = (-1)*($image_h - $view_size) * ( $view_y/100.0 );

  $image_url = get_template_path().$image_path;

  $image_style = "width: {$image_w}px; " .
                 "height: {$image_h}px; " .
                 "left: {$x}px; " .
                 "top: {$y}px;";

  include "partial/picture.php";
}

function template_pagination($page_num = 100, $pagi_style = "")
{
  if( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
    return;
  }
  $link = html_entity_decode(get_pagenum_link());
  $link_parts = explode('?', $link);
  $link_no_query = $link_parts[0];

  $permalinks = $GLOBALS['wp_rewrite']->using_permalinks();
  $total = $GLOBALS['wp_query']->max_num_pages;
  $current = 1;

  if( get_query_var('paged') ) {
    $current = intval(get_query_var('paged'));
  }

  $link_array = array(
    'base' => trailingslashit($link_no_query) . '%_%',
    'format' => $permalinks? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%',
    'total' => $total,
    'current' => $current,
    'mid_size' => $page_num,
	'prev_next' => true
  );

  include "partial/pagination.php";
}

add_action( 'wp_head', function() {
  if ( is_user_logged_in() ) {
    return;
  }
  if( strpos(get_template_directory_uri(), "localhost") !== false ) {
    return;
  }

  if ( file_exists(get_template_directory()."/partial/analytics.php") ) {
    include get_template_directory()."/partial/analytics.php";
  }
});

add_filter('robots_txt', function($robots_txt) {
  $robots_txt = "";

  $robots = [
    "008",
    "Amazonbot", "anthropic-ai", "Applebot-Extended", "AwarioRssBot", "AwarioSmartBot",
    "Bytespider", "bender", "Bingbot"
    "CCBot", "ClaudeBot", "Claude-Web", "cohere-ai",
    "Diffbot", "Discordbot",
    "FacebookBot", "facebookexternalhit",
    "Google-Extended", "GoogleOther-Image", "Gort", "GPTBot", "ChatGPT-User", 
    "MJ12bot", "magpie-crawler",
    "NewsNow", "news-please",
    "omgili", "omgilibot", "OpenAI",
    "peer39_crawler", "peer39_crawler/1.0", "PiplBot", "PerplexityBot",
    "Scrapy",
    "TurnitinBot",
    "voltron"
  ];

  foreach ($robots as $bot) {
    $robots_txt .= "User-agent: {$bot}\n";
    $robots_txt .= "Disallow: /\n\n";
  }

  $robots_txt .= "User-agent: *\n";
  $robots_txt .= "Allow: /wp-content/themes/laskov/style.css\n";
  $robots_txt .= "Disallow: /wp-admin/\n";
  $robots_txt .= "Disallow: /wp-includes/\n";
  $robots_txt .= "Disallow: /wp-content/\n";
  $robots_txt .= "Disallow: /matomo/\n";
  $robots_txt .= "Disallow: /wp-admin/*\n";
  $robots_txt .= "Disallow: /wp-includes/*\n";
  $robots_txt .= "Disallow: /wp-content/*\n";
  $robots_txt .= "Disallow: /matomo/*\n";
  $robots_txt .= "Allow: /\n\n";

  $robots_txt .= "Sitemap: https://www.laskov.co.uk/wp-sitemap.xml\n\n";
  $robots_txt .= "Crawl-delay: 5  \n\n";

  return $robots_txt;

}, 10);