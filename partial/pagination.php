<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<div class="paging-navigation" style="<?= $pagi_style ?>" >
	<?= paginate_links($link_array); ?>
</div>
