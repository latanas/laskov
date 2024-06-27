<!DOCTYPE html>
<html lang="en"><head>

  <!-- Copyright (c) 2014-2023 Atanas Laskov -->

  <meta charset="UTF-8">
  <title>Atanas Laskov</title>

  <?php include "scripts.php" ?>
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon_16x16.png">
  <?php wp_head(); ?>

<link rel="alternate" hreflang="en-US" href="https://www.atanaslaskov.com/<?php if($wp_query->queried_object) { echo $wp_query->queried_object->post_name; } ?>" />
<link rel="alternate" hreflang="en-GB" href="https://www.laskov.co.uk/<?php if($wp_query->queried_object) { echo $wp_query->queried_object->post_name; } ?>" />

</head><body>

  <?php include "content.php"; ?>
  <?php wp_footer(); ?>
  <div id="amzn-assoc-ad-8ac0013e-8ba9-4555-89c9-1dcf2636f4bf"></div><script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=8ac0013e-8ba9-4555-89c9-1dcf2636f4bf"></script>
</body></html>
