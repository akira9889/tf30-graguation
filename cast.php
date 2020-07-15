<?php
/*
Template Name: キャスト一覧
*/
get_header();
get_template_part('parts/mv-sm')
?>
  <main>
    <section class="cast">
      <div class="cast-inner">
        <h2 class="section-title">CAST</h2><!-- /.section-title -->
        <div class="cast-area">
          <ul class="inner cast-members">
          <?php
          if (have_rows('cast') ):
            while(have_rows('cast') ): the_row();
          ?>
            <li class="cast-member">
              <div class="cast-header">
                <figure>
                <?php
                $image_id = get_sub_field('cast-image');
                echo wp_get_attachment_image($image_id,'cast-member');
                ?>
                </figure>
                <p class="cast-from"><?php the_sub_field('cast-from'); ?></p><!-- /.from -->
                <h3 class="cast-name"><?php the_sub_field('cast-name'); ?></h3><!-- /.cast-name -->
                <p class="cast-experience"><?php the_sub_field('cast-experience'); ?></p><!-- /.cast-experience -->
              </div><!-- /.cast-header -->
              <div class="cast-body">
                <?php the_sub_field('cast-profile'); ?>
              </div><!-- /.cast-body -->
            </li><!-- /.cast-member -->
          <?php
            endwhile;
          endif;
          ?>
          </ul><!-- /.castmenbers -->
        </div><!-- /.cast-area -->
        <ul class="inner subCast-members">
          <?php
          if (have_rows('sub-cast') ):
            while(have_rows('sub-cast') ): the_row();
          ?>
          <li class="subCast-member">
            <figure class="subCast-memberImg">
              <?php
              $image_id = get_sub_field('cast-image');
              echo wp_get_attachment_image($image_id,'sub-cast-member');
              ?>
            </figure><!-- /.subCast-memberImg -->
            <p class="subCast-from"><?php the_sub_field('cast-from'); ?></p><!-- /.from -->
            <h3 class="subCast-name"><?php the_sub_field('cast-name'); ?></h3><!-- /.cast-name -->
            <p class="subCast-experience"><?php the_sub_field('cast-experience'); ?></p><!-- /.cast-experience -->
            <div class="subCast-body">
              <?php the_sub_field('cast-profile'); ?>
            </div><!-- /.cast-body -->
          </li><!-- /.subCast-member -->
          <?php
            endwhile;
          endif;
          ?>
        </ul><!-- /.subCast-members -->
        <div class="otherCast-area">
          <ul class="inner otherCast-members">
          <?php
          if (have_rows('staff') ):
            while(have_rows('staff') ): the_row();
          ?>
            <li class="otherCast-member">
              <figure class="otherCast-memberImg">
                <?php
                $image_id = get_sub_field('cast-image');
                echo wp_get_attachment_image($image_id,'sub-cast-member');
                ?>
              </figure><!-- /.otherCast-memberImg -->
              <p class="otherCast-from"><?php the_sub_field('cast-from'); ?></p><!-- /.otherCast-from -->
              <h3 class="otherCast-name"><?php the_sub_field('cast-name'); ?></h3><!-- /.otherCast-name -->
              <p class="otherCast-experience"><?php the_sub_field('cast-experience'); ?></p><!-- /.otherCast-experience -->
              <div class="subCast-body">
              <?php the_sub_field('cast-profile'); ?>
            </div><!-- /.cast-body -->
            </li><!-- /.otherCast-member -->
          <?php
            endwhile;
          endif;
          ?>
          </ul><!-- /.inner otherCast -->
        </div><!-- /.otherCast-area -->
      </div><!-- .inner -->
    </section>

  <?php
  get_template_part('parts/schedule')
  ?>
  </main>
<?php
get_footer();
?>
