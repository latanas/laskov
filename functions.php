<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

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
    return "gamedev";
  }
  else if( is_page("illustration") ) {
    return "illustration";
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

function template_illustration($file, $view_x, $view_y, $spacing_y = 20)
{
  global $folder;

  $image_path = "/asset/illustration/{$folder}/{$file}";
  $image_url = get_template_path().$image_path;
  $image_size = getimagesize( get_template_directory_uri() . $image_path );

  $image_w_max = $image_size[0];
  $image_h_max = $image_size[1];
  $image_aspect = $image_w_max / $image_h_max;

  $image_w = 700;
  $image_h = $image_w / $image_aspect;

  $view_size = 100;
  $x = (-1)*($image_w - $view_size) * ( $view_x/100.0 );
  $y = (-1)*($image_h - $view_size) * ( $view_y/100.0 );

  $image_style = "width: {$image_w}px; " .
                 "height: {$image_h}px; " .
                 //"max-width: {$image_w_max}px; " .
                 //"max-height: {$image_h_max}px; " .
                 "left: {$x}px; " .
                 "top: {$y}px;";

  include "partial/picture.php";
}

function template_snippet($title, $document_name, $expanded=false)
{
  static $id=0;
  $source = file_get_contents( get_template_directory_uri()."/asset/document/{$document_name}" );

  $template = '<span class="src_class">$1</span> <span class="src_class_name">$2</span>';
  $source = preg_replace("/\n(class) (\w+)/", $template, $source);
  $source = preg_replace("/(public) (\w+)/", $template, $source);
  $source = wpautop( $source );

  if( $expanded ) {
    $expandable_text = "[-] contract";
    $expandable_style = "";
  }
  else {
    $expandable_text = '[+] expand';
    $expandable_style = 'display: none;';
  }

  include "partial/snippet.php";
  $id++;
}

function template_pagination()
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
    'prev_text' => "&larr; Previous",
    'next_text' => "Next &rarr;",
    'base' => trailingslashit($link_no_query) . '%_%',
    'format' => $permalinks? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%',
    'total' => $total,
    'current' => $current,
    'mid_size' => 1,
  );

  include "partial/pagination.php";
}
