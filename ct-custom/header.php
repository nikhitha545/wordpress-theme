<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; }

    /* TOP BAR */
    .top-bar {
      background: #E8450A;
      color: white;
      padding: 8px 30px;
      display: flex;
      justify-content: space-between;
      font-size: 13px;
    }

    /* HEADER */
    .site-header {
      background: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #eee;
    }

    .site-header .logo {
      font-size: 28px;
      font-weight: bold;
      color: #1a1a2e;
    }

    .site-header .logo span {
      color: #E8450A;
    }

    /* NAVIGATION */
    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-size: 14px;
    }

    nav ul li a:hover {
      color: #E8450A;
    }
  </style>
</head>
<body <?php body_class(); ?>>

  <!-- TOP BAR -->
  <div class="top-bar">
    <span>CALL US NOW! 385.154.11.28.35</span>
    <span>LOGIN | SIGNUP</span>
  </div>

  <!-- HEADER -->
  <header class="site-header">
    <div class="logo">YOUR<span>LOGO</span></div>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </nav>
  </header>