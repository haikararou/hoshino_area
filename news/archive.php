<?php get_header(); ?>
<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">ニュース</h1>
    <nav>
        <ul>
            <li><a href="" class="-active">すべて</a></li>
            <li><a href="">交通情報</a></li>
            <li><a href="">星野コミュニティベース</a></li>
            <li><a href="">店舗からのご案内</a></li>
            <li><a href="">トピックス</a></li>
        </ul>
    </nav>
	</div>
</section>

<section class="l-spacer -medium -both">
    <div class="l-container--primary-l">
        <article class="l-contents">
            <div class="l-contents__conts">
            <?php if (have_posts()) : ?>
                <ul class="p-post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li class="p-post-list__item">
                        <a href="">
                            <article class="p-post-card">
                                <div class="p-post-card__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                                </div>
                                <div class="p-post-card__text">
                                    <p class="p-post-card__cat">ギャラリー樹環</p>
                                    <time class="p-post-card__date">2023.08.21</time>
                                    <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                                    <p class="p-post-card__info">期間 : 2023.10.15</p>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            </div>
        </article>
    </div>
</section>

<section class="l-spacer -medium -both">
    <?php wp_pagenavi(); ?>
</section>



<?php get_footer(); ?>