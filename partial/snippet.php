<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<div class="src_title" id="expandable_<?= $id ?>" ><strong><?= $title ?></strong>
  <br/>
  <span class="src_button"><?= $expandable_text ?></span>
</div>

<div class="src_expandable" style="<?= $expandable_style ?>" id="expandable_<?= $id ?>_ex">
  <?= $source ?>
</div>
