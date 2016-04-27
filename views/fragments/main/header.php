<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <?php foreach ($css as $key => $add_css):?>
      <link rel="stylesheet" href="<?php echo CSS.$add_css.'.css'; ?>">
    <?php endforeach; ?>
  </head>
  <body>
