<?php
get_header();
get_template_part('parts/mv-sm')
?>
  <main>
    <section class="news">
      <div class="inner news-inner">
        <h2 class="section-title">NEWS</h2><!-- /.section-title -->
        <?php
          $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $information= new WP_Query( array(
                      'post_type' => 'post',
                      'paged' => $paged,
                      'post_status' => 'publish',
                      'posts_per_page' => 9,
                  ));
          if ( $information -> have_posts() ) :
        ?>
        <ul class="news-list">
          <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
          <li class="news-item">
            <a href="<?php the_permalink(); ?>" class="news-itemLink">
              <figure class="news-itemFig">
                <?php the_post_thumbnail(); ?>
              </figure>
              <div class="news-itemBody">
                <time><?php the_time('Y.n.j'); ?></time>
                <p class="news-itemT bxt">
                  <?php the_title(); ?>
                </p><!-- /.news-itemTxt-->
              </div><!-- /.news-itemBody -->
            </a><!-- /.news-itemLink -->
          </li><!-- /.news-item -->
          <?php endwhile; ?>
        </ul><!-- /.news-list -->
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </div><!-- .inner -->
    </section>

    <div class="pagenation">
    <?php
    if( function_exists('wp_pagenavi') ) {
            wp_pagenavi(array('query' => $information));
     }
    ?>
    </div><!-- /.pagenation -->

<?php get_template_part('parts/schedule'); ?>
  </main>

<?php get_footer(); ?>
