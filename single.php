<?php
get_header();
get_template_part('parts/mv-sm')
?>


  <section class="news">
    <div class="inner news-inner">
      <h2 class="section-title">NEWS</h2><!-- /.section-title -->
      <?php
      if (have_posts() ):
        while (have_posts() ): the_post();
      ?>
      <div class="card">
        <div class="card-fig">
          <?php the_post_thumbnail(); ?>
        </div><!-- /.card-fig -->
        <div class="card-title">
          <time><?php the_time('Y.n.j'); ?></time>
          <h3><?php the_title(); ?></h3>
        </div><!-- /.card-title -->
        <div class="card-body">
          <?php the_content(); ?>
        </div><!-- /.card-body -->
      </div><!-- /.card -->
      <?php
        endwhile;
      endif;
      ?>
    </div><!-- .inner -->
  </section>

  <div class="link-page inner">
    <div class="link-box">
      <?php
      $next_post = get_next_post();
      $prev_post = get_previous_post();
      if ($prev_post):
      ?>
      <a href="<?php echo esc_url(get_permalink($prev_post->ID) );?>" class="link-prev">
        <time><?php echo get_the_date('Y.n.j',$prev_post->ID); ?></time>
        <h5 class="link-prevTitle"><?php echo get_the_title($prev_post->ID); ?></h5>

      </a><!-- /.link-prev -->
      <?php
      endif;
      ?>
    </div><!-- /.link-box -->
    <div class="link-box">
      <?php
      if ($next_post):
      ?>
      <a href="<?php echo esc_url(get_permalink($next_post->ID) );?>" class="link-next">
        <time><?php echo get_the_date('Y.n.j',$next_post->ID); ?></time>
        <h5 class="link-nextTitle"><?php echo get_the_title($next_post->ID); ?></h5>
      </a><!-- /.link-next -->
      <?php
      endif;
      ?>
    </div><!-- /.link-box -->
  </div><!-- /.linkpage .inner -->

  <section class="schedule">
    <div class="inner schedule-inner">
      <div class="schedule-contents">
        <h2 class="section-title">SCHEDULE</h2><!-- /.section-title -->
        <ul class="schedule-list">
          <li class="schedule-item"><time>2020.07.04</time><span>17:00開演</span><span>中野ZERO大ホール</span><a href="#"
              class="reserve-btn"><u>チケット予約受付中</u></a><!-- /.reseve-btn -->
          </li><!-- /.schedule-item -->
          <li class="schedule-item"><time>2020.07.05</time><span>17:00開演</span><span>中野ZERO大ホール</span><a href="#"
              class="reserve-btn"><u>チケット予約受付中</u></a><!-- /.reseve-btn -->
          </li><!-- /.schedule-item -->
          <li class="schedule-item"><time>2020.07.06</time><span>17:00開演</span><span>中野ZERO大ホール</span><a href="#"
              class="reserve-btn"><u>チケット予約受付中</u></a><!-- /.reseve-btn -->
          </li><!-- /.schedule-item -->
          <li class="schedule-item"><time>2020.07.07</time><span>17:00開演</span><span>中野ZERO大ホール</span><a href="#"
              class="reserve-btn"><u>チケット予約受付中</u></a><!-- /.reseve-btn -->
          </li><!-- /.schedule-item -->
        </ul><!-- /.schedule-list -->
      </div><!-- /.schedule-contents -->
      <div class="btn-inner">
        <a href="#" class="contact-btn">お問い合わせはこちら</a><!-- /.contact-btn -->
        <a href="#" class="btn-primary">チケット予約サイトへ</a><!-- /.btn btn-primary -->
      </div><!-- /.btn-inner -->
    </div><!-- .inner -->
  </section>
<?php get_footer(); ?>
