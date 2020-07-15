<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>" >
  <title><?php echo wp_get_document_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header">
      <div class="inner header-inner">
        <nav class="header-nav">
          <?php
          wp_nav_menu(
            array(
              'theme-location' => 'place_global',
              'container' => false,
              'menu_class' => 'header-list'
            )
          );
          ?>
        </nav><!-- /.header-nav -->
        <div id="header-toggle" class="header-toggle">
            <span class="header-toggleInline"></span>
            <span class="header-toggleInline"></span>
            <span class="header-toggleInline"></span>
        </div>
        <div class="header-modal"></div><!-- /.header-modal -->
      </div><!-- /.header-inner -->
    </div><!-- /.header -->
  </header>
