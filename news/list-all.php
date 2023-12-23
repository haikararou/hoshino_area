<section class="l-spacer -medium -both">
    <div class="l-container--primary-l">
        <article class="l-contents">
            <div class="l-contents__conts">
                <ul class="p-post-list">

<?php if (is_paged()) : //2ページ目以降の処理 ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<li class="p-post-list__item">
    <a href="<?php the_permalink();?>">
        <article class="p-post-card">
            <?php if(has_post_thumbnail()): ?>
            <div class="p-post-card__img">
            <?php if(has_post_thumbnail()) : ?>
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            </div>
            <?php else: ?>
            <?php endif; ?>
            <div class="p-post-card__text">
                <?php
                if ($terms = get_the_terms($post->ID, 'news_cat')) {
                foreach ( $terms as $term ):
                if($term->parent) echo '<p class="p-post-card__cat">'.esc_html($term->name).'</p>';
                endforeach;
                } ?>
                <time class="p-post-card__date"><?php the_time('Y.m.d') ?></time>
                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                <p class="p-post-card__info">
                    <?php
                    $terms = get_the_terms($post->ID, 'news_cat');
                    foreach($terms as $term){
                    $term_name = $term->name;
                    echo $term_name; break; };
                    ?>
                </p>
            </div>
        </article>
    </a>
</li>
<?php endwhile; endif; ?>

<?php else: ?>

<?php
//1ページ目の処理
$list_cnt = 12; //表示させたい件数
$sticky = get_option('sticky_posts'); //先頭固定の記事
if ( !empty($sticky) ) $list_cnt -= count($sticky); //もし先頭固定の記事があったら、その件数を「$list_cnt」の値から引く
$the_query = new WP_Query(array(
    'post_type' => array('news'),
    'posts_per_page' => $list_cnt
));?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<li class="p-post-list__item">
    <a href="<?php the_permalink();?>">
        <article class="p-post-card">
            <?php if(has_post_thumbnail()): ?>
            <div class="p-post-card__img">
            <?php if(has_post_thumbnail()) : ?>
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            </div>
            <?php else: ?>
            <?php endif; ?>
            <div class="p-post-card__text">
                <?php
                if ($terms = get_the_terms($post->ID, 'news_cat')) {
                foreach ( $terms as $term ):
                if($term->parent) echo '<p class="p-post-card__cat">'.esc_html($term->name).'</p>';
                endforeach;
                } ?>
                <time class="p-post-card__date"><?php the_time('Y.m.d') ?></time>
                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                <p class="p-post-card__info">
                    <?php
                    $terms = get_the_terms($post->ID, 'news_cat');
                    foreach($terms as $term){
                    $term_name = $term->name;
                    echo $term_name; break; };
                    ?>
                </p>
            </div>
        </article>
    </a>
</li>
<?php endwhile; ?>

<?php endif; ?>

                </ul>
            </div>
        </article>
    </div>
</section>

<div class="l-container--primary-l">
<section class="l-spacer -medium -both">
    <?php wp_pagenavi(); ?>
</section>
</div>