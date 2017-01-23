<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title></title>
  <!--Bootstrap-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.min.css"/>
  <!--Font-awesome-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/mdb.min.css"/>
  <!--Animate CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/animate.min.css"/>
  <!--Global Styles-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/global.css"/>
  <?php
    if ($custom_css !== NULL) {
      foreach ($custom_css as $css_file) {
  ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $css_file; ?>"/>
  <?php
      }
    }
  ?>
</head>
