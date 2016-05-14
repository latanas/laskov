<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/

/*
  Template functions
*/
function get_url_path() {
  $uri = parse_url( get_template_directory_uri() );
  return $uri["path"];
}

function template_video_poster($poster, $video, $video_webm, $x, $y) {
  static $id = 1;

  $video_poster_url = get_url_path() . "/asset/video/{$poster}";
  $video_poster_style = "background-image: url('{$video_poster_url}'); " .
                        "background-position: {$x} {$y};";

  $video_source_mp4 = get_url_path()."/asset/video/{$video}.mp4";
  $video_source_webm = get_url_path()."/asset/video/{$video_webm}.mp4";

  include "partial/video.php";
  $id++;
}

function template_illustration($file, $x, $y, $spacing_y = 20)
{
  global $folder;

  $image_path = "/asset/illustration/{$folder}/{$file}";
  $image_url = get_url_path().$image_path;

  $image_size = getimagesize( get_template_directory_uri() . $image_path );
  $image_height = $image_size[1] + $spacing_y*2;

  $image_style = "background-image:url('{$image_url}'); " .
                 "background-position: {$x}% {$y}%; " .
                 "max-height: {$image_height}px;";

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
