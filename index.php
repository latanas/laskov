<!DOCTYPE html>
<html lang="en"><head>

  <!-- Copyright (c) 2016, Atanas Laskov -->

  <meta charset="UTF-8">
  <title>Atanas Laskov</title>

  <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
  <link rel='stylesheet' href='<?= get_url_path(); ?>/normalize.css' type='text/css' media='all'>
  <link rel='stylesheet' href='<?= get_url_path(); ?>/style.css?v=1.9' type='text/css' media='all'>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?= get_url_path(); ?>/js/interaction.js?v=1.4"></script>
  <script src="<?= get_url_path(); ?>/js/main.js?v=1.7"></script>

  <?php wp_head(); ?>
</head><body>

  <?php include "content.php"; ?>
  <?php wp_footer(); ?>
</body></html>
