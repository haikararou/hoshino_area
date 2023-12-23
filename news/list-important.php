<div class="l-footer-important-news">
    <div class="l-container--primary">
        <div class="l-footer-important-news__inner">
            <h2 class="l-footer-important-news__title">重要なお知らせ</h2>
            <!-- ?php
                $args = array (
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news_cat',
                            'field' => 'slug',
                            'terms' => 'important-news',
                            'operator' => 'IN'
                        ),
                    )
                );
                $news = new WP_Query( $args );
                if ($news -> have_posts()):
            ? -->
            <!-- <dl class="c-list-news l-footer-important-news__news">
            < ?php while ($news -> have_posts()): $news -> the_post(); ?>
                <div class="c-list-news__item">
                    <dt class="c-list-news__date">< ?php the_time('Y.m.d') ?></dt>
                    <dt class="c-list-news__conts"><a href="< ?php the_permalink();?>">< ?php the_title(); ?></a></dt>
                </div>
            < ?php endwhile; ?>
            </dl>
            < ?php endif; wp_reset_postdata(); ?>-->
            <?php
                $toplist = array(
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                    'meta_key' => 'important',
                    'meta_value' => 'important',
                    'meta_compare' => 'LIKE'
                );
            ?>
            <?php query_posts($toplist); ?>
            <?php if (have_posts()) : ?>
            <dl class="c-list-news l-footer-important-news__news">
            <?php while(have_posts()) : the_post(); ?>
                <div class="c-list-news__item">
                    <dt class="c-list-news__date"><?php the_time('Y.m.d') ?></dt>
                    <dt class="c-list-news__conts"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></dt>
                </div>
            <?php endwhile; ?>
            </dl>
            <?php endif; wp_reset_query(); ?>
        </div>
        <div class="l-footer-important-news__more">
        <a href="<?php echo home_url('/news'); ?>/important" class="c-button-block -lightyellow -arrow -more"><span>もっと見る</span></a>
        </div>
    </div>
</div>




