<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 3,
    //'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'news_cat',
        'field' => 'slug',
        'terms' => 'important-news',
        'operator' => 'NOT IN',
        ),
    ),
);
$the_query = new WP_Query( $args );
?>
<section class="l-spacer -medium -both c-border-t">
	<div class="l-container--primary">
		<article class="l-contents--left-title">
			<h2 class="c-title-large -vertical l-contents--left-title__title">ニュース</h2>
			<div class="l-contents--left-title__conts">
                <?php if ($the_query->have_posts()): ?>
				<ul class="p-post-list">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
				</ul>
				<?php endif; wp_reset_postdata(); ?>
				<div class="l-spacer -em3 p-post-list__item__more">
				<p><a href="<?php echo home_url('/news'); ?>" class="c-button-block -lightyellow -arrow -more"><span>もっと見る</span></a></p>
				</div>
			</div>
		</article>
	</div>
</section>