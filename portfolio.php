<?php /*
  Project: Portfolio site
  Copyright (c) 2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>

<header class="sketchbook_post">
<h1>Portfolio</h1>
by <strong>Atanas Laskov</strong>
</header>

<p>
Hi there, my name is Atanas Laskov. I'm digital illustrator, mixed-media artist. 
I'm the author of the fantasy adventure <a href="#gn">Wings of Steel</a>
and <a href="#anatomy">Human Anatomy</a> pocket reference for artists.
</p>

<h3>Animation</h3>
My animations are produced in Adobe Animate, Krita and Blender.
<p>
  <?php
   $folder="color";
   template_illustration("ALAskov_Monster1100.gif", 45, 40, 0);
   template_illustration("ALaskov_Girl1100.gif", 53, 21, 0);
   template_illustration("LaskovTeapotAnim.gif", 65, 13, 0);
   template_illustration("LaskovSpriteAnim.gif", 55, 40, 0);
   template_illustration("LaskovFlameAnim.gif", 50, 70, 0);
   template_illustration("LaskovRavenAnim.gif", 50, 40, 0);
   template_illustration("LaskovCompassAnim.gif", 50, 50, 0);
   template_illustration("LaskovTempleAnim.gif", 36, 76, 0);
   template_illustration("ALaskov_Boxer_Showreel_16_9.gif", 63, 89, 0);
   
   /*template_video_poster("ALaskov_Boxer_Showreel_16_9.gif","ALaskov_Boxer_Showreel_16_9", "ALaskov_Boxer_Showreel_16_9", 170);  */
?>
</p>

<h3>Character Designs</h3>
<p>
Here are some examples of my character designs I did for graphic novels and for animation.
</p>
<p class="illustration_block" style="padding-top:6px; text-align: left;">
  <?php
  $folder="color";
  template_illustration("MaldurianPseudopsychicConcept_1100.jpg", 51, 30, 0);
  template_illustration("VenomClownConcept_1100.jpg", 55, 30, 0);
  template_illustration("AtanasLaskov_Dad06.jpg", 17,17,0);
  template_illustration("AtanasLaskov_Kid02.jpg", 43,22,0);
  template_illustration("AtanasLaskov_Monster03.jpg", 8,32,0);



   $folder = "bw";
   template_illustration("ThracianMercenaryGrayscale_1100.jpg", 25,25,0);


  $folder="color";

  template_illustration("ALaskov_Legba_concept_clean_cp.jpg", 13,46,0);
  template_illustration("ALaskov_Ochossi_concept_clean_cp.jpg", 16,42,0);
  template_illustration("ALAskov_BoxerConcept_b.jpg", 13,14,0);


  $folder = "bw";
  template_illustration("Zak.jpg", 31,20);
  template_illustration("Altos.jpg", 51,16,0);
  template_illustration("Zapta.jpg", 76,19,0);

  template_illustration("laskov_inktober_a022a.png", 6,70,0);
  $folder="color";
  template_illustration("laskov_character_015.jpg", 30,18,0);

  $folder = "bw";
  template_illustration("laskov_concept001_clean_up_1100.jpg", 42,20);

$folder="color";
  template_illustration("laskov_portrait_002.jpg", 73,23,0);


  ?>
</p>


<h3>Environment Concepts &amp; Other</h3>
<p>
My illustrations are painted both digitally and traditionally, so I consider them mixed-media. 
Topics that interest me are imaginary architecture, mythology, Edo Japan, the European Renaissance, 
the Ancient Mediterranean and others. 
I strive for creativity and technical excellence in my artwork.
</p>
<p class="illustration_block" style="padding-top:6px;">
  <?php
  $folder="color";
  template_illustration("FusionReactorColour1100.jpg", 80, 55, 0);
  template_illustration("ALAskov_PriateShip_1100.jpg", 23, 57, 0);
  template_illustration("ALaskov_TradingOutpost_1100.jpg", 23, 50, 0);
  /*template_illustration("ALaskov_OutpostAndShip_1100.jpg", 23, 26, 0);*/
  template_illustration("PrisonCitadelColor_portf.jpg", 16,20,0);
  template_illustration("Iteration5_Flat.jpg", 22,11,0);
  template_illustration("laskov_torii-A.jpg", 59,59,0);  
  template_illustration("laskov_reaissance_city_024b.jpg", 59,39,0);
  template_illustration("WaterTowerConcept_1100.jpg", 60, 25, 0);
  $folder = "bw";

  
  /*template_illustration("laskov_persp_1100.jpg", 19, 12);
  template_illustration("laskov_env_001.jpg", 59,39,0);

  $folder="color";
  template_illustration("Daphne_color_1100.jpg", 53,20);
  template_illustration("Laskov_TheRedQueen_1100.png", 11,7,0);*/

  ?>
</p>

<h3 id="anatomy">Anatomy</h3>
<p>
In order to draw character designs, human anatomy is an important topic for artists. For this reason, I published a pocket reference "Human Anatomy." This is intended to help artists and illustrators by giving them a "key" to use while working on graphic novels, comics, games, animation, and in other types of media projects.  Included are the proportions, head drawing, torso, upper and lower extremity. All parts of the body are covered in multiple views, allowing the artist to follow through, understanding and memorizing the anatomy. The ultimate objective is to be able to draw the human body from imagination. As a graphic novel author, I'm using this book when working on my own projects.</p>
<p>
<a class="illustration_outer_larger" href="https://www.amazon.co.uk/dp/B08DC84HF8" target="_blank" rel="nofollow">
 <img src="<?= get_template_path() ?>/asset/image/Laskov_Anatomy.jpg" alt="Human Anatomy Pocket Reference for Artists" />
</a>
</p>

<p class="illustration_block" style="padding-top:6px; text-align: left;">
  <?php
  $folder="color";

  $folder = "bw";
  template_illustration("laskov_master_study_009_proportions_a.jpg", 50, 8);
  template_illustration("laskov_ultra_simplified_front_047_port.jpg", 9, 14);
  ?>
</p>

<h3 id="gn">Graphic Novels</h3>
<p>
I published 3 volumes of the graphic novel "Wings of Steel". Check it out if you wanna sink your teeth into dystopian Sci-Fi with some funny bits and some horror bits.
</p>

<p>
Zak is a talented engineer oppressed by the Inquisitors of the Mage Altos. What's worse, pesky acolytes Sue and Zoe don't acknowledge the boy's talent and mock his crude ways. A mysterious organization is spying on him from vantage point in the sky, and a powerful Priestess wants him thrown in a dungeon...
</p>
<p>
You can find the graphic novel paperbacks, and Kindle e-books, in the Amazon store.
</p>
<p>
<a class="illustration_outer_larger" href="https://www.amazon.co.uk/dp/B07X8FT2C8" target="_blank">
 <img src="<?= get_template_path() ?>/asset/image/Laskov_WoS_1.jpg" alt="Wings of Steel: Young-adult steampunk adventure" />
</a>

<a class="illustration_outer_larger" href="https://www.amazon.co.uk/dp/B08LTSDQNS" target="_blank">
 <img src="<?= get_template_path() ?>/asset/image/Laskov_WoS_2.jpg" alt="Wings of Steel: Shards of Jade" />
</a>

<a class="illustration_outer_larger" href="https://www.amazon.co.uk/dp/B08V8W1W8J" target="_blank">
 <img src="<?= get_template_path() ?>/asset/image/Laskov_WoS_3.jpg" alt="Wings of Steel: Dreamer of the Void" />
</a>
</p>

<h3>3D Modelling</h3>

<p>
  <?php
   $folder="color";
   template_illustration("ALaskov_Ra_FinalVertical_1100.jpg", 44, 5, 0);
   template_illustration("ALaskov_Ra_Sculpt_1100.jpg", 20, 15, 0);
   template_illustration("ALaslov_Ra_HeadSculptComposed_1100.jpg", 30, 20, 0);
   template_illustration("ALaskov_HeadSculpt_VerticalComposed_1100.jpg", 20, 45, 0);

   template_illustration("Trees.jpg", 50, 5, 0);
   template_illustration("ALaskov_4_ExusCave.jpg", 50, 9, 0);
   template_illustration("Exu.jpg", 18, 6, 0);
   template_illustration("MariaPadilha.jpg", 21, 3, 0);
   template_illustration("LaskovBoat.jpg", 85, 8, 0);
   template_illustration("Composition.jpg", 86, 23, 0);
?>
</p>


<br>
<div style="width: 540px; height: 300px;"> &nbsp; </div>
<p>&nbsp;</p>
