<?php
get_header();
?>
  <div class="mv">
    <div class="mv-inner">
      <h1 class="mv-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png" alt="メインビジュアル画像">
      </h1>

      <div class="mv-box">
        <div class="mv-scheduled">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mv-scheduled.png" alt="メインビジュアルタイトル">
        </div><!-- /.schedule -->
        <div class="mv-sentence">
          <p class="mv-text">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<b>完全版マハーバーラタ</b>の公演が決定！！</p>
          <p class="mv-text2">アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
        </div><!-- /.mv-sentence -->
      </div><!-- /.mv-box -->
    </div>
  </div>
  <div class="container container-top">
    <a href="<?php echo get_post_meta($page_id, 'reserv', true); ?>" class="btn btn-primary">チケット予約サイトへ</a><!-- /.btn btn-primary -->
  </div><!-- /.container -->
  <main>
    <section class="introduction">
      <div class="inner introduction-inner">
        <div class="introduction-contents">
          <img src="<?php echo get_template_directory_uri(); ?>/img/introduction.png" alt="">
          <h2 class="section-title">INTRODUCTION</h2><!-- /.section-title -->
          <h2 class="section-subTitle">なぜ今「マハーバーラタ」なのか？</h2><!-- /.section-subTitle -->
          <div class="introduction-text">
            <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
            <br class="sp-br">
            それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
            <br class="sp-br">
            平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
            <br class="sp-br">
            <p>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
            <br class="sp-br">
            神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
            <br class="sp-br">
            非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
          </div><!-- /.introduction-text -->
        </div><!-- /.introduction-contents -->
      </div><!-- .inner -->
    </section>
      <?php if( get_field('youtube') ){ ?>
      <div class="VideoWrapper-box inner">
        <div class="VideoWrapper">
          <?php echo $embed_code = wp_oembed_get( get_field('youtube') ); ?>
        </div>
      <?php } ?>
      </div><!-- /. -->
    <section class="news">
      <div class="inner news-inner">
        <h2 class="section-title">NEWS</h2><!-- /.section-title -->
        <a href="<?php echo esc_url(home_url('category/news') ); ?>" class="btn news-btn">ニュース一覧へ</a><!-- /.btn -->
        <ul class="news-cards">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
          );
          $new_posts = new WP_Query($args);
          if ($new_posts->have_posts() ):
            while ($new_posts->have_posts() ): $new_posts->the_post();
          ?>
          <li class="news-card">
            <a href="<?php the_permalink(); ?>" class="news-cardLink">
              <figure class="news-cardFig">
                <?php the_post_thumbnail(); ?>
              </figure>
              <div class="news-cardBody">
                <time><?php the_time('Y.n.j') ?></time>
                <p class="news-cardTxt">
                  <?php the_title() ?>
                </p><!-- /.news-item -->
              </div><!-- /.news-itemBody -->
            </a><!-- /.news-itemLink -->
          </li><!-- /.news-item -->
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul><!-- /.news-list -->
      </div><!-- .inner -->
    </section>

    <section class="story">
      <div class="inner story-frontInner">
        <h2 class="section-title section-titleWhite">STORY</h2><!-- /.section-title -->
        <p class="story-text">
          マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。<br class="sp-br">
          <br class="sp-br">
          神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。<br class="sp-br">
          <br class="sp-br">
          神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
          <br class="sp-br">
          世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。<br class="sp-br">
          <br class="sp-br">
          原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
        </p><!-- /.story-text -->
        <div class="story-contain">
          <a href="#" class="btn story-btn">もっと詳しく</a><!-- /.btn -->
        </div><!-- /.story-container -->
      </div><!-- .inner -->
    </section>

    <section class="comments">
      <div class="inner comments-inner">
        <h2 class="section-title">COMMENTS</h2><!-- /.section-title -->
        <p class="comments-subTitle">舞台関係者のみならず各界著名人から<br class="sp-br">コメントが届いています！</p>
        <div class="comments-contents">
          <div class="comments-contentsInner">
            <h3 class="comments-contentsHead">京都佛立ミュージアム館長<span>長松清潤</span></h3>
            <p class="comments-contentsText">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
            </p>
          </div><!-- /.comments-contentsInner -->
            <div class="comments-btnContainer">
              <a href="<?php echo esc_url(home_url('comments') ); ?>" class="btn comments-btn">もっと見る</a><!-- /.btn -->
            </div><!-- /.cimmments-btnContainer -->
          </div><!-- /.comments-contents -->

      </div><!-- .inner -->
    </section>

    <section class="cast">
      <div class="cast-inner">
        <h2 class="section-title">CAST</h2><!-- /.section-title -->
        <div class="cast-area">
          <ul class="inner cast-members">
          <?php
          $casts_obj = get_page_by_path('casts');
          $casts_ID = $casts_obj->ID;
          if (have_rows('cast',$casts_ID) ):
            while(have_rows('cast',$casts_ID) ): the_row();
          ?>
            <li class="cast-member">
              <div class="cast-header">
                <figure>
                  <?php
                  $image_id = get_sub_field('cast-image');
                  echo wp_get_attachment_image($image_id,'cast-member');
                  ?>
                </figure>
                <p class="cast-from"><?php the_sub_field('cast-from'); ?></p>
                <h3 class="cast-name"><?php the_sub_field('cast-name'); ?></h3><!-- /.cast-name -->
                <p class="cast-experience"><?php the_sub_field('cast-experience'); ?></p><!-- /.cast-experience -->
              </div><!-- /.cast-header -->
              <div class="cast-body">
                <?php  echo nl2br(get_sub_field('cast-profile') ) ; ?>
              </div><!-- /.cast-body -->
            </li><!-- /.cast-member -->
          <?php
              endwhile;
            endif;
          ?>
          </ul><!-- /.castmenbers -->
          <div class="cast-container">
            <a href="<?php echo esc_url(home_url('cast')); ?>" class="btn cast-btn">もっと見る</a><!-- /.btn btn-reverse -->
          </div><!-- /.cast-container -->
        </div>
      </div><!-- .inner -->
    </section>

    <?php get_template_part('parts/schedule'); ?>
  </main>
<?php get_footer(); ?>
