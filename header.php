<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">Grewa AI Training</a>
    <nav class="site-nav">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/training/')); ?>">研修について</a></li>
        <li><a href="<?php echo esc_url(home_url('/cases/')); ?>">活用事例</a></li>
        <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">考え方・FAQ</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">相談</a></li>
      </ul>
    </nav>
  </div>
</header>
<main>
