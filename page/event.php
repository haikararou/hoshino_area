<?php
/*Template Name: 開催終了したイベント */
?>
<?php get_header(); ?>

<p><br></p>
<p><br></p>

<?
$today = date('Ymd');
$today2 = date('Ymd-H:i:s');
?>
現在時刻：<?php echo $today2;?>

<p><br></p>

<h2>終了済</h2><br>
<?php /*postSingle：START*/ ?>
    <?php
        $args = array(
            'paged' => $paged,
            'post_type' => 'event',
            'post_status' => 'publish',
            'meta_value'    => date('Ymd'),// dateで現在の日時を取得
            'meta_key'      => 'event_end',
            'meta_compare'  => '<',// meta_valueとmeta_keyを比較して過去の場合のみ表示
            'posts_per_page' => 10,
        );
        $wp_query = new WP_Query( $args );
    ?>
    <dl>
        <?php if ( $wp_query->have_posts() ): ?>
            <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                <div>
                    <dt>投稿日：<?php the_time('Y年m月d日'); ?></dt>
                    <dd>
                        <?php if(get_field('event_start')): ?>イベント開始日：<?php the_field('event_start'); ?><br><?php endif; ?>
                        <?php if(get_field('event_end')): ?>イベント終了日：<?php the_field('event_end'); ?><br><?php endif; ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </dd>
                </div>
            <?php endwhile; ?>
            <?php wp_pagenavi(); ?>
        <?php else : ?>
            <p>記事が見つかりませんでした。</p>
        <!-- ?php endif; ? -->
        <?php endif; wp_reset_postdata(); ?>

        <?php wp_reset_query(); ?>
    </dl>
<?php /*postSingle：END*/ ?>

<p><br></p>
<p><br></p>

<?php get_footer(); ?>