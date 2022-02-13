<?php
function move_jquery(){
   //headerで出力されるjQueryとjQuery-Migrateを外す
   wp_deregister_script('jquery');
   wp_deregister_script('jquery-migrate');

   //改めて閉じbodyの上に読み込む
   wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.min.js'), false, NULL, true);
}

add_action('wp_enqueue_scripts','move_jquery');


function add_my_scripts() {

  //main.js の読み込み※WordPress内蔵jQueryも一緒に。
  wp_enqueue_script( 'mainjs', get_theme_file_uri( '/js/script.js' ),
    array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );

//抜粋の文字数調整
function my_excerpt_length($length){
  return 80;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

//抜粋の省略記号←修正
function my_excerpt_more($more) {
  return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">[...続き]</a>';
}
add_filter('excerpt_more', 'my_excerpt_more');


function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(320, 320, false);
}
add_action('after_setup_theme', 'my_theme_setup');

//heade内にフィードリンクを出力
add_theme_support('automatic-feed-links');


function register_my_menus()
{
  register_nav_menus(array(
    'global-menu' => 'グローバルメニュー',
    'footer-menu' => 'フッターメニュー',
  ));
}
add_action('after_setup_theme', 'register_my_menus');


//sidebar widgit
function side_widgets(){
  register_sidebar(array(
    'name'=>'サイドバー',
    'id'=>'main-sidebar',
    'before_widget'=>'<div class="finder">',
    'after_widget'=>'</div>',
    'before_title' => '<h3 class="sidebar-title">',
    'after_title' => '</h3>',
  ));
  //footer widgit
  register_sidebar(array(
    'name'=>'フッターエリア',
    'id'=>'footer-widget',
    'before_widget'=>'<div class="widget">',
    'after_widget'=>'</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'side_widgets');

function my_archive_title($title) {
	if ( is_category() ) {
    	$title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    $title = $title. 'の記事一覧';
    return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title');
// わざと閉じタグをしない //