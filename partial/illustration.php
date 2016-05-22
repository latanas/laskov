<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>
<h1>Laskov / Illustration</h1>

<p class="illustration_block" style="padding-top:6px;">
  <?php
  $folder="color";
  template_illustration("Laskov_RedQueen_1100.jpg", 10,10);
  template_illustration("Laskov_Monastery_1100.jpg", 80,82,0);
  ?>

  <?php
  $folder = "bw1";
  template_illustration("Laskov_Arha_1100.jpg", 37,40);
  template_illustration("Laskov_PeterAndWendy_1100.png", 56,16);
  template_illustration("LaskovGargoyleCliff_1000.jpg", 75,65);
  template_illustration("laskov_town_650.png", 40,85);
  template_illustration("laskov_tpe_1.png", 37,35);

  $folder="bw2";
  template_illustration("Laskov_HornedIdol.gif", 80,80,0);
  template_illustration("VampKnightSkc.png", 24,20);

  $folder = "sketches";
  template_illustration("laskov-ed-sk-01a.png", 81,5);

  $folder="bw1";
  template_illustration("tpe_laskov-11.png", 70,92);

  $folder = "sketches";
  template_illustration("Laskov_Greek_Head.png", 55,45);
  ?>
</p>

<br>
<div style="width: 540px; height: 300px;"> &nbsp; </div>
<p>&nbsp;</p>
