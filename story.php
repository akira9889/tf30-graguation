<?php
/*
Template Name: ストーリー
*/
get_header();
?>

  <main>
    <section class="story story_n">
        <div class="story-mv">
          <div class="inner story-mv-inner">
            <div class="mv arc_df">
              <div class="mv-inner">
                <h1 class="mv-title">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png" alt="メインビジュアル画像">
                </h1>
                <div class="mv-scheduled">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mv-scheduled.png" alt="メインビジュアルタイトル">
                </div><!-- /.schedule -->
              </div>
            </div>
            <div class="container">
              <a href="#reserve" class="btn btn-primary">チケット予約サイトへ</a><!-- /.btn btn-primary -->
            </div><!-- /.container -->
            <div class="breadcrumb inner">
            <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div><!-- /breadcrumb -->
            <div class="section-title story-sectionTitle">STORY</div><!-- /.section-title -->
            <div class="story-mvBox">
              <h3 class="story-mvHead">小見出し</h3><!-- /.small-head -->
              <p class="story-mvTxt">
                マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
                世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と
              </p><!-- /.story-mvTxt -->
            </div><!-- /.story-mvBox -->
          </div><!-- /.storyMv-inner -->
        </div><!-- /.story-mv -->
        <?php
        if (have_rows('story') ):
          while(have_rows('story') ): the_row();
        ?>
        <div class="story-container" >
          <div class="story-bg" style="background-image: url(<?php the_sub_field('story-image'); ?>);"></div><!-- /.story-bg -->
          <div class="story-inner">
            <h3 class="story-title"><?php the_sub_field('story-title'); ?></h3><!-- /.story-smallHead -->
            <p class="story-sentence">
              マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
              世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
            </p><!-- /.story-text -->
          </div><!-- /.inner -->
        </div><!-- /.story-container -->
        <?php
          endwhile;
        endif;
        ?>
    </section><!-- /.story -->
  </main>
  <?php get_template_part('parts/schedule'); ?>
<?php get_footer(); ?>
