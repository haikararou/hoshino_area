<?php
// ウィジェットを更新する
function add_custom_widget() { ?>

<dl class="action-wrap">
  <dt>お知らせ</dt>
  <dd>
    <ul class="list-action">
      <li><a href="<?php echo admin_url(); ?>post-new.php?post_type=information" class="dashicons dashicons-edit btn"><span>お知らせの記事を作成する</span></a>
      <a href="<?php echo esc_url(site_url('')); ?>/manual/index.php#information" class="manuallink" target="_blank">記事の作成方法</a>
      </li>
      
      <li><a href="<?php echo admin_url(); ?>edit.php?post_type=information" class="dashicons dashicons-media-document btn"><span>お知らせ情報を修正・削除する</span></a>
        <a href="<?php echo esc_url(site_url('')); ?>/manual/index.php#edit" class="manuallink" target="_blank">記事の修正・削除方法</a>
      </li>
    </ul>
    </dd>
</dl>


<?php
}
function add_my_widget() {
	wp_add_dashboard_widget( 'custom_widget', 'クイックアクセス', 'add_custom_widget' );
}

add_action( 'wp_dashboard_setup', 'add_my_widget' );


add_action( 'wp_enqueue_scripts', 'load_dashicons' );
function load_dashicons() {
  wp_enqueue_style( 'dashicons' );
}


// 管理画面内で自作CSSを適用させる
add_action('admin_head', 'admin_css');

function admin_css() {
   echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/assets/css/dashboard.css">';
}