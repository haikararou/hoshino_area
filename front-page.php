<?php
/**
 * トップページのテンプレート
 */
get_header(); ?>
  <main class="l-main">
      <div class="c-title-page-main">
        <h2 class="c-title-page-main__title">Informationの記事一覧</h2>
        <p class="c-title-page">表示中のテンプレート：front-page.php</p>
      </div>
    
    <div class="l-container -primary">
      <div class="l-spacer -small">
          <?php
          // カスタム投稿の記事（最新3件）を表示
          $args = array(
            'post_type'      => 'information',
            'posts_per_page' => 3
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
          ?>
          <ul class="p-news-list">
          <?php //ループ
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
            <li class="p-news-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="p-news-card">
                <img src="<?php echo get_my_post_thumbnail_url(); ?>" class="p-news-card__thumbnail">

                 <h3 class="p-news-card__title"><?php the_title(); ?></h3>
                 <p class="p-news-card__date"><?php the_time('Y年m月d日'); ?></p>
                 <div class=""><?php echo get_custom_excerpt(120); ?>

                 <div class="p-news-card__info">
                   <p>リンク有カテゴリ：<?php echo get_post_category_with_link('information_cat'); ?></p>
                   <p>リンク無カテゴリ：<?php echo get_post_category_without_link('information_cat'); ?></p>
                   </p>
                   <p>この記事の投稿タイプは「<?php echo get_current_post_type_label(); ?> (slug: <?php echo get_current_post_type_slug(); ?>)」です。</p>
                 </div>
                </div>
              </a>
            </li>
           <?php endwhile; ?>
           </ul>

           <div class="p-news-card__bottom-links c-button--more">
             <a href="<?php echo get_post_type_archive_link('information'); ?>">もっと見る</a>
           </div>

           <?php else: ?>
           <p>記事はありません</p>
         <?php endif;
         // 投稿データをリセット
          wp_reset_postdata();
        ?>
     </div>
    </div>
  </main>

<?php get_footer(); ?>
