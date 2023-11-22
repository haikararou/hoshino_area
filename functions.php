<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/* ---------------------------------------------------------------------
ビジュアルエディタ内のテキストにCSSを適用

適用するときは、以下のコメントアウトを外してください。
この例は、テーマフォルダ内の/css/editor-style.cssに
ビジュアルエディタ用のCSSを記述し、読み込んでいます。
-------------------------------------------------------------------------*/
//add_editor_style(get_template_directory_uri().'/css/editor-style.css' );

/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );


/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
function register_files() {
  
  wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css');
  wp_register_style( 'theme-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300:600&display=swap');
  wp_register_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
  wp_register_style( 'wpadminbar', get_template_directory_uri().'/assets/css/wpadminbar.css', array(), filemtime( get_template_directory().'/assets/css/wpadminbar.css') );
  wp_register_style( 'theme-common', get_template_directory_uri().'/assets/css/common.css', array(), filemtime( get_template_directory().'/assets/css/common.css') );

	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_register_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js');
	wp_register_script( 'function', get_template_directory_uri() . '/assets/js/common.js', array(), filemtime( get_template_directory().'/assets/js/common.js') );
	wp_register_script( 'weather', get_template_directory_uri() . '/assets/js/weather.js');


}
function my_enqueue_files() {
    register_files();
		wp_enqueue_style( 'fontawesome' );
		wp_enqueue_style( 'theme-font' );
		wp_enqueue_style( 'swiper' );
		wp_enqueue_style( 'wpadminbar' );
		wp_enqueue_style( 'theme-common' );
    
		wp_enqueue_script( 'swiper' );
		wp_enqueue_script( 'function' );
		wp_enqueue_script( 'weather' );
  }

add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );


/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/

/*初期設定*/
include_once( get_template_directory().'/functions/initial-setting.php' );

/*メタタグ類の設定*/
include_once( get_template_directory().'/functions/meta-setting.php' );

/*カスタム投稿タイプを追加*/
include_once( get_template_directory().'/functions/custompost.php' );

/*便利な関数*/
//include_once( get_template_directory().'/functions/utility.php' );

/*ダッシュボードのカスタマイズ*/
//include_once( get_template_directory().'/functions/dashboard.php' );
