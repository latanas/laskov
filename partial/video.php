<?php /*
  Project: Portfolio site
  Copyright (c) 2016 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<a href="<?= $video_poster_url ?>" class="video_poster" id="poster_<?= $id ?>">
  <span class="video_picture" style="<?= $video_poster_style ?>">
    <span class="play">Play this video</span>
  </span>
</a>

<video width="1" height="1" preload="auto" id="poster_<?= $id ?>_video" >
  <source src="<?= $video_source_mp4 ?>" />
  <source src="<?= $video_source_webm ?>" />
</video>
