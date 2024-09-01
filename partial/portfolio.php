<?php /*
  Project: Portfolio site
  Copyright (c) 2014-2023 Atanas Laskov

  License: BSD License, see LICENSE file for more details
  www.atanaslaskov.com
*/ ?> 

<header class="sketchbook_post">
<h1>Portfolio</h1>
by <strong>Atanas Laskov</strong>
</header>

<p>Hi there, my name is Atanas Laskov.
My professional work experience includes TypeScript, JavaScript, Java and C++. I studied Computer Systems at Technical University Sofia.
After that I went on to study Artificial Intelligence at Edinburgh University, graduating with Distinction.
Further, I studied Computer Arts at Abertay University and graduated in July 2024 with 1<sup>st</sup> class degree (TIGA accredited).
</p>

<p>
In the past I haven't used generative AI for artwork, but I studied the mathematical foundations of artificial inteligence.
I did multi-agent systems, genetic algorithms, optimization, reinforcement learning, and natural language processing, including LLMs.
<p>

<h3 id="city">City Design App</h3>
<p>
My final project at Abertay was to design a web app that allows the user to make their own Surrealist city.
Each building represents in some way the user’s emotions, and the city is a psychological landscape they can share with others.
Beauty creates positive emotional affects, thus enhancing creativity and sociability, and as result making people more tolerant. 
</p>

<p>
<ul>
    <li>
      You can see the <a href="/wp-content/themes/laskov/asset/document/Laskov Case Study.pdf" target="_blank">case study here</a> in PDF format.
   </li>
   <li>
     The video below shows my Figma prototype of the case study.
   </li>
   <li>
      I'm now implementing the app in Angular, explore the code <a href="http://www.github.com/latanas/city-client/" target="_blank">on GitHub</a>.
   </li>
   <li>
        You can also <a href="http://www.atanaslaskov.com/city/" target="_blank">try the app in your browser</a>.
   </li>
</ul>
</p>

<iframe width="550" height="400" frameborder="0" allowfullscreen src="https://www.youtube.com/embed/nlSantuzmDs?si=2RT-c4Ednjn2pJ0k" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<h3 id="british_red_cross">Supporting the British Red Cross (UI/UX Design, Animation)</h3>
<p>
In this  game you explore a beautiful town threatened by a dangerous storm. 
I did the UI design and icon design in Adobe Illustrator, the character animation in Adobe Animate.
</p><p>
The project gave me the opportunity to do visual effects animation for wind, rain and sparkles in Unity Engine.
Some of the Unity Engine prefabs for the UI also are my work.
</p>


<iframe title="vimeo-player" src="https://player.vimeo.com/video/827318432?h=671a249412" width="550" height="300" frameborder="0" allowfullscreen></iframe>

<br/><br/>
UI Screenshots
<p class="illustration_block" >
  <?php
  $folder="screens";  
  template_illustration("MenuFlowScreenshot.jpg", 13,0, 0);
  template_illustration("Capture 2023-03-13 082032.jpg", 47,43, 0);
  template_illustration("Capture 2023-03-13 084715.jpg", 50,44, 0);
  template_illustration("Capture 2023-03-13 084527.jpg", 54,51, 0);
  template_illustration("Capture 2023-05-03 080327.jpg", 35,5, 0);
  template_illustration("ALaskov_Icons1100.jpg", 40,35, 0);
  /*template_illustration("Capture 2023-03-13 124508.jpg", 2,5, 0);*/

  ?>
</p>

<h3 id="blob">Web Games</h3>

<p>
  Previously, I wrote 2 games in TypeScript, using ThreeJS and the &lt;canvas&gt; element. They both run in the browser:
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

<h3 id="engine">C++ Game Engine</h3>

<p>
  One of my previous game projects was a C++ game engine with
  <a href="http://www.atanaslaskov.com/jnr/" target="_blank">Docs and Source Code</a> available on the Doxygen pages:
  <br/>

<ul>
    <li>State-machine agent model for the monster AI</li>
    <li>Level representation suitable for action-adventure games</li>
    <li>Extracting 2D cross-section from 3D geometry</li>
    <li>Collision detection with line segments</li>
    <li>Twisting the level in 3D</li>
    <li>Rendering animated 3D models (with morph targets, not skeletal)</li>
    <li>Smooth interpolation between character states (walk, jump, attack)</li>
    <li>Particle effects for fire, smoke, glow</li>
    <li>The animation, environment design and 3D modeling are my own work</li>
</ul>

</p>

<p>
  <?php
  $folder = "illustrations";
  template_video_poster("Laskov_JRA_screen_01.jpg","Laskov_EngineTest_cut4a_embed", "Laskov_EngineTest_cut2", "right","top", 100);
  template_video_poster("Laskov_JRA_screen_02.jpg","Laskov_AsteroidBelt_Engine_cut3b4_embed", "Laskov_AsteroidBelt_Engine_cut2b", 170);
  ?>
</p>

<p class="illustration_block" >
  <?php
  $folder="screens";
  template_illustration("Laskov_JRA_screen_01_cut.jpg", 60,21, 0);
  template_illustration("Laskov_JRA_screen_03_cut.jpg", 48,41, 0);
  ?>
</p>

<h3 id="epos">Experimental Protected-Mode Operating System (EPOS)</h3>

<p>Another of my side projects was a small OS in C and assembly for the Intel Architecture (IA-32) processors.


<p>Feature Summary:</p>
<ul>

<li>It's BSD-licensed, you can see the <a href="http://www.laskov.co.uk/epos/" title="http://www.laskov.co.uk/epos/" target="_blank">source code and docs here</a>;</li>
<li>EPOS is a multi-tasking OS;</li>
<li>EPOS executables run in separate virtual address spaces;</li>
<li>EPOS implements inter-process communication as message passing;</li>
<li>EPOS implements synchronisation with events and blocking message passing;</li>
<li>EPOS has a basic file system, keyboard and RS-232 mouse drivers;</li>
<li>There is a command line shell.</li>

</ul>

<div class="src_view">
</div>

<p><a href="#engine">Back to top</a></p>
