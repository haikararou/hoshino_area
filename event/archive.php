<?php get_header(); ?>

<?php
$today = date('Ymd');
?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">イベント情報</h1>
        <?php $class= isset($args['class']) ? $args['class'] : ''; ?>
        <div><?php get_template_part('inc/today'); ?></div>
	</div>
</section>

<?php
$args = array(
    'post_type'=> 'event',
    'meta_key' => 'event_start', //ACFのフィールド名
    'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
        'relation' => 'AND',
        array(
        'key'     => 'event_start',
        'value'   => $today,
        'type'    => 'date',
        'compare' => '<=',
        ),
        array(
        'key' => 'event_end',
        'value' => $today,
        'type'    => 'date',
        'compare' => '>',
        ),
    ),
    'posts_per_page' => 3,
);
$wp_query = new WP_Query( $args );
?>
<section class="l-spacer -medium -both">
    <div class="l-container--primary">
        <article class="l-contents--left-title">
            <h2 class="c-title-large -vertical l-contents--left-title__title">開催中のイベント</h2>
            <?php if ( $wp_query->have_posts() ): ?>
            <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
            <div class="l-contents--left-title__conts">
                <div class="l-contents-2column">
                    <div class="l-contents-2column__block -w-1_2--left">
                    <?php if(has_post_thumbnail()) : ?>
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="l-contents-2column__block -w-1_2--right">
                        <h3 class="c-title-small"><span><?php $terms = get_the_terms($post->ID,'event_cat'); if($terms){echo $terms[0]->name;} ?></span><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <?php if(get_field('event_period')): ?><p>⚫︎開催中<span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </article>
    </div>
</section>

<?php
$args = array(
    'post_type' => 'event',
    'post_status' => 'publish',
    'meta_value'    => $today,// dateで現在の日時を取得
    'meta_key'      => 'event_start',
    'meta_compare'  => '>',// meta_valueとmeta_keyを比較して過去の場合のみ表示
    'posts_per_page' => -1,
);
$wp_query = new WP_Query( $args );
?>
<section class="l-spacer -medium -both">
    <div class="l-container--primary">
        <article class="l-contents--left-title">
            <h2 class="c-title-large -vertical l-contents--left-title__title">近日開催予定のイベント</h2>
            <div class="l-contents--left-title__conts">
                <?php if ( $wp_query->have_posts() ): ?>
                <ul class="p-post-list">
                <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                    <li class="p-post-list__item">
                        <a href="<?php the_permalink(); ?>">
                            <article class="p-post-card">
                                <div class="p-post-card__img">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                                </div>
                                <div class="p-post-card__text">
                                    <p class="p-post-card__cat"><?php $terms = get_the_terms($post->ID,'event_cat'); if($terms){echo $terms[0]->name;} ?></p>
                                    <time class="p-post-card__date"><?php the_time('Y.m.d') ?></time>
                                    <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                                    <?php if(get_field('event_period')): ?><p class="p-post-card__info">開催予定　<span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php else : ?>
                <p>記事が見つかりませんでした。</p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

                <div class="l-spacer -em3 p-post-list__item__more">
                <p><a href="<?php echo home_url('/event/ended'); ?>" class="c-button-block -lightyellow -arrow -more"><span>開催終了したイベント</span></a></p>
                </div>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>