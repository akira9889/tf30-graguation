<?php
/*
Template Name: お問い合わせ
*/
get_header();
get_template_part('parts/mv-sm');
?>
  <main>
  <?php echo do_shortcode( '[contact-form-7 id="173" title="コンタクトフォーム 1"]' ); ?>

<?php get_template_part('parts/schedule'); ?>
  </main>
<?php get_footer(); ?>
