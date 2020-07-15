<?php
/*
Template Name: 著名人コメント
*/
get_header();
get_template_part('parts/mv-sm')
?>
  <main>
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
        </div><!-- /.comments-contents -->
        <?php if(have_rows('comments') ): ?>
        <ul class="comments-list">
        <?php while(have_rows('comments') ): the_row();?>
          <li class="comments-person">
            <h3 class="comments-personName"><?php the_sub_field('comments-person'); ?></h3><!-- /.comments-pesonName -->
            <div class="comments-personKind"><?php the_sub_field('comments-experience'); ?></div><!-- /.comments-personKind -->
            <p class="comments-personTxt">
            <?php the_sub_field('comments-txt'); ?>
            </p><!-- /.comments-personTxt -->
          </li><!-- /.comments-person -->
        <?php endwhile; ?>
        </ul><!-- /.comments-list -->
        <?php endif; ?>
      </div><!-- .inner -->
    </section>
    <?php get_template_part('parts/schedule'); ?>
  </main>
  <?php get_footer(); ?>
</body>
</html>
