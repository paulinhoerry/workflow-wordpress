<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title> 
    <?php
        if (is_home()){ bloginfo('name'); }
        elseif (is_category()){single_cat_title(); echo ' -  ' ; bloginfo('name');}
        elseif (is_single()){   single_post_title();}
        elseif (is_page()){bloginfo('name'); echo ' - '; single_post_title();}
        else {wp_title('',true);} 
    ?>
  </title>
  <?php wp_head() ?>
  <script>
    var siteurl = '<?php echo home_url(); ?>';
  </script>
</head>
<body <?php body_class();?>>
  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="header">   
    
    <!-- PAGE HEADER -->

  </header>

  <main class="main">
  
