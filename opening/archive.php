<?php get_header(); ?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<!-- <section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">営業時間</h1>
        <nav>
            <ul class="c-list-category">
                <li><a href="<?php echo home_url(); ?>/opening/" class="c-list-category__item -act">全期間</a></li>
                <?php
                $terms = get_terms('opening_cat');
                foreach ( $terms as $term ) {
                echo '<li><a class="c-list-category__item '.$term-> slug.'" href="'.get_term_link( $term ).'">'.$term->name.'</a></li>';
                }
                ?>
            </ul>
        </nav>
	</div>
</section> -->

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <div class="p-opening--scroll">
        <table class="p-opening--table">
            <tr>
                <th class="p-opening--fixed01">店舗</th>
                <?php
                    $query = new WP_Query(array(
                        'post_type' => "opening",
                        'order' => 'ASC',
                        'orderby' => 'date',
                    ));
                    if($query->have_posts()): while($query->have_posts()): $query->the_post();
                ?>
                <td class="p-opening--fixed04">
                    <?php if(get_field('opening_start')): ?><?php the_field('opening_start'); ?><?php endif; ?><?php if(get_field('opening_end')): ?>〜<?php the_field('opening_end'); ?><?php endif; ?>
                </td>
                <?php endwhile; endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">星野温泉 トンボの湯</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'tombo';
                    get_template_part('inc/opening2');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">村民食堂</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'sonminsyokudou';
                    get_template_part('inc/opening2');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">カフェ ハングリースポット</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'hungryspot';
                    get_template_part('inc/opening2');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">ケラ池スケートリンク</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'keraike';
                    get_template_part('inc/opening2');
                ?>
            </tr>
        </table>
        </div>
    </div>
</section>


<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <div class="p-opening--scroll">
        <table class="p-opening--table">
            <tr>
                <th class="p-opening--fixed01">店舗</th>
                <?php
                    $query = new WP_Query(array(
                        'post_type' => "opening",
                        'order' => 'ASC',
                        'orderby' => 'date',
                    ));
                    if($query->have_posts()): while($query->have_posts()): $query->the_post();
                ?>
                <td class="p-opening--fixed04">
                    <?php if(get_field('opening_start')): ?><?php the_field('opening_start'); ?><?php endif; ?><?php if(get_field('opening_end')): ?>〜<?php the_field('opening_end'); ?><?php endif; ?>
                </td>
                <?php endwhile; endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">和泉屋 傳兵衛</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'izumiya';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">イル・ソーニョ</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'ilsogno';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">我蘭憧</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'garandou';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">せきれい橋 川上庵</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'kawakamian';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">希須林</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'kisurin';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">ギャラリー樹環</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'ju-kan';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">CRAFY・glänta</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'crafyglanta';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">Karuizawa Vegetable ココぺリ</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'kokoperi';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">サジロカフェ リンデン</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'sajilocafe';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">ベーカリー＆レストラン沢村</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'sawamura';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">CERCLE wine&deli</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'cercle';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">TEAM7 軽井沢</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'team7';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">NATUR TERRACE</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'natur';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">HARVEST NAGAI FARM</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'nagaifarm';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">丸山珈琲</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'maruyamacoffee';
                    get_template_part('inc/opening');
                ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02">モリアソビ</th>
                <?php
                    global $shop_slug;
                    $shop_slug = 'moriasobi';
                    get_template_part('inc/opening');
                ?>
            </tr>

        </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>