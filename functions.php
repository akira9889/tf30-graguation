
<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

function my_enqueue_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_script', get_template_directory_uri().'/js/index.js',array() );
  wp_enqueue_style('my_styles', get_template_directory_uri().'/css/style.css',array() );
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

//ヘッダーカスタムメニュー化

register_nav_menus (
  array(
    'place_global' => 'グローバル'
  )
);
function prefix_nav_description( $item_output, $item, $depth, $args ) {
 if ( !empty( $item->description ) ) {
 $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
 }
 return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

//castsページのキャスト画像のサイズ設定

add_image_size('cast-member',220,220);
add_image_size('sub-cast-member',130,130);

// bcn_breadcrumb_titleコールバックを定義します
function filter_bcn_breadcrumb_title($title) {
    //ここでフィルターマジックを実行します...
    if(is_page('casts')):
      $title = 'キャスト';
    elseif(is_page('comments')):
      $title = '著名人コメント';
    elseif(is_page('story')):
      $title = 'story';
    elseif(is_page('inquiry')):
      $title = 'お問い合わせ';

    endif;

    return $title;
};

//フィルターを追加します
add_filter( 'bcn_breadcrumb_title', 'filter_bcn_breadcrumb_title', 10, 3 );
