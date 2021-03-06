<?php /*
  Project: Portfolio site
  Copyright (c) 2014 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?>

<header class="sketchbook_post">
<h1>Gamedev</h1>
by <strong>Atanas Laskov</strong>
</header>

<p>
  Currently, I'm programming autonomous vehicles in C++.
</p>
<p>
  Previously, I wrote 2 games in TypeScript, they both run in the browser:
</p>

<ul>
    <li>
    Explore the <a href="http://www.github.com/latanas/golden/" target="_blank">code</a>
    and <a href="http://www.atanaslaskov.com/golden/" target="_blank">play Golden</a><br/>
  </li>

  <li>
  Explore the <a href="http://www.github.com/latanas/arena/" target="_blank">code</a>
    and <a href="http://www.atanaslaskov.com/arena/" target="_blank">play Arena</a><br/>
  </li>
</ul>

<p class="illustration_block" >
  <?php
  $folder="screens";
  template_illustration("Laskov_golden_a.png", 82,40, 0);

  $folder="color";
  template_illustration("GoldenDragonApple_1100.png", 70,29,0);
  ?>
</p>

<p>
  I also programmed a C++ game engine with OpenGL graphics with
  full <a href="http://www.atanaslaskov.com/jnr/" target="_blank">Docs and Source Code</a>.<br/>
  Short docs are available at the end of this page.
  The animation, environment design and 3D modeling are my own work.<br/>
</p>

<p>
  <?php
  $folder = "illustrations";
  template_video_poster("Laskov_JRA_screen_02.jpg","Laskov_AsteroidBelt_Engine_cut3b4_embed", "Laskov_AsteroidBelt_Engine_cut2b", 170);
  template_video_poster("Laskov_JRA_screen_01.jpg","Laskov_EngineTest_cut4a_embed", "Laskov_EngineTest_cut2", "right","top", 100);
  ?>
</p>

<h3>Informatics</h3>

<p>
  Ever since my school years I have a deep interest in programming. I studied Computer Systems and Technologies
  at TU-Sofia and after that I went on to study Artificial Intelligence at the University of Edinburgh.
</p>
<p style="padding-bottom: 12px;">
  Apart from the engine I also programmed a small OS in C and assembly
  <a href="http://www.laskov.co.uk/epos/" title="http://www.laskov.co.uk/epos/" target="_blank">here</a>.
</p>

<p class="illustration_block" >
  <?php
  $folder="screens";
  template_illustration("Laskov_JRA_screen_01_cut.jpg", 60,21, 0);
  template_illustration("Laskov_JRA_screen_03_cut.jpg", 48,41, 0);
  ?>
</p>

<h3>Documentation</h3>

<p>
  The following section gives an overview of the class hierarchy implemented in the game.
  It describes briefly the responsibilities of each class.
</p>

<div class="src_view">
  <?php
  template_snippet("Helper Classes", "HelperClasses.txt",true);
  template_snippet("Level Structure", "LevelStructure.txt");
  template_snippet("Geometry", "Geometry.txt");
  template_snippet("Renderer", "Renderer.txt");
  template_snippet("Collision Detection", "CollisionDetectionSystem.txt");
  template_snippet("Effects", "Effects.txt");
  template_snippet("Architecture", "SystemArchitecture.txt");
  template_snippet("AI", "AI.txt");
  template_snippet("Objects and Creatures", "ObjectsCreatures.txt");
  ?>
</div>

<p><a href="#engine">Back to top</a></p>
