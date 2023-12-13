<?php get_header(); ?>
<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">ニュース.....</h1>
        <!-- ?php
        $term = array_pop(get_the_terms($post->ID, 'news_cat'));
        $term_p = $term->parent;
        if ( ! $term_p == 0 ){
        $term = array_shift(get_the_terms($post->ID, 'news_cat'));
        }
        echo esc_html($term->name);
        ? -->
        <nav>
            <ul class="c-list-category tab-<?php echo get_queried_object()->slug; ?>">
                <li><a href="<?php echo home_url(); ?>/news/" class="c-list-category__item">すべて</a></li>
                <?php
                    $args = array(
                        'exclude' => array(31), //除外したいタームのIDを指定。
                        'parent' => 0,
                    );
                    $terms = get_terms('news_cat', $args);
                    foreach ( $terms as $term ) {
                        echo '<li><a class="c-list-category__item '.$term-> slug.'" href="'.get_term_link( $term ).'">'.$term->name.'</a></li>';
                    }
                ?>
            </ul>
        </nav>
	</div>
</section>

<?php get_template_part('news/list-all'); ?>

<section class="l-spacer -medium -both">
    <?php wp_pagenavi(); ?>
</section>



<?php get_footer(); ?>