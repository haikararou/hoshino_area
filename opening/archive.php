<?php get_header(); ?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
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
</section>


<style>
.wrapper {
    padding: 0 5vw;
}
.flxA {
    display: flex;
    flex-wrap: wrap;
    border-left: 1px solid #ccc;
}
.flxA:last-child .flxC,
.flxA:last-child .flx01 {
    border-bottom: 1px solid #ccc;
}
.flxB {
    display: flex;
    flex-wrap: wrap;
    border-top: 1px solid #ccc;
}
.flxC {
    display:flex;
    flex-direction:column;
    border-right: 1px solid #ccc;
}
.flx01 {
    width: 160px;
    border-top: 1px solid #ccc;
    padding: 0.8rem;
}
.flx02 {
    width: 160px;
    border-left: 1px solid #ccc;
    padding: 0.8rem;
    line-height: 1.6;
}
.flx03 {
    width: 400px;
    border-left: 1px solid #ccc;
    padding: 0.8rem;
    line-height: 1.6;
}
.flx03 span {
    display: block;
    font-size: 14px;
}
table {
    border-top: 1px solid #ccc;
    border-left: 1px solid #ccc;
    /* margin: 0 0 80px 0; */
    position: relative;
    table-layout: fixed;
}
th,td {
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    padding: 1rem;
    line-height: 1.6;
}
td span {
    display: block;
    font-size: 14px;
}
.navi {
    margin: 0 0 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}
.fixed01{
position: sticky;
top: 0;
left: 0;
z-index: 2;
color: #fff;
background: #333;
/* width: 30vw; */
min-width: 20vw;
}
.fixed01:before{
    content: "";
    position: absolute;
    top: 1px;
    left: -1px;
    width: 100%;
    height: 100%;
    border-bottom: 1px solid #ccc;
}
.fixed01:after{
    content: "";
    position: absolute;
    top: -1px;
    right: -1px;
    width: 100%;
    height: 100%;
    border-right: 1px solid #ccc;
}
.fixed02{
position: sticky;
left: 0;
color: #fff;
background: #333;
width: 10vw;
min-width: 10vw;

}
.fixed02:before{
    content: "";
    position: absolute;
    top: -1px;
    left: -1px;
    width: 100%;
    height: 100%;
    border-left: 1px solid #ccc;
}
.fixed03{
position: sticky;
left: 10vw;
color: #fff;
background: #333;
/* width: 12vw; */
}
.fixed03:before{
    content: "";
    position: absolute;
    top: -1px;
    left: -1px;
    width: 100%;
    height: 100%;
    border-left: 1px solid #ccc;
}
.fixed04{
position: sticky;
top: 0;
left: 0;
color: #fff;
background: #333;
/* width: 12vw; */
}
.scroll {
    overflow: scroll;
    height: 80vh;
}
@media print{
    header,
    footer,
    .c-breadcrumb,
    .c-button-areamap {
        display: none;
    }
    .l-main {
        padding: 0;
    }
    .l-spacer.-medium {
        margin: 0;
        padding: 0;
    }
    .l-spacer.-medium.-both {
        padding: 0;
    }
    table {
        margin-top:32px;
    }
    .scroll {
        overflow: initial;
        height: auto;
    }
    .fixed01{
        position: static;
        color: #000;
        background: none;
        min-width: none;
    }
    .fixed01:before{
        display: none;
    }
    .fixed01:after{
        display: none;
    }
    .fixed02{
        position: static;
        color: #000;
        background: none;
        min-width: none;
    }
    .fixed02:before{
        display: none;
    }
    .fixed03{
        position: static;
        color: #000;
        background: none;
    }
    .fixed03:before{
        display: none;
    }
    .fixed04{
        position: static;
        color: #000;
        background: none;
    }
    .c-list-category__item {
        background: none;
        color: #000;
    }
    .c-list-category__item.-act {
        background: none;
        color: #000 !important;
        border: 1px solid #000;
    }
}
</style>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <div class="scroll">
        <table>
            <tr>
                <th class="fixed01" colspan="2">期間</th>
                <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <td class="fixed04">
                            <?php
                                if ( have_rows( 'opening_restaurant' ) ) :
                                    while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                        if ( have_rows( 'ilsogno' ) ) :
                                            while ( have_rows( 'ilsogno' ) ) : the_row();
                                                $content = get_sub_field( 'time' );
                                                $style = get_sub_field( 'comment' );
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                            ?>
                            <!-- <?php the_title(); ?><br> -->
                            <?php if(get_field('opening_start')): ?><?php the_field('opening_start'); ?><?php endif; ?>
                            <?php if(get_field('opening_end')): ?>〜<?php the_field('opening_end'); ?><?php endif; ?>
                        </td>
                        <?php endwhile; ?>
                    <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed02" rowspan="4">レストラン</th>
                <th class="fixed03">イル・ソーニョ</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'ilsogno' ) ) :
                                    while ( have_rows( 'ilsogno' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed03">希須林</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'kisurin' ) ) :
                                    while ( have_rows( 'kisurin' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed03">川上庵</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'kawakamian' ) ) :
                                    while ( have_rows( 'kawakamian' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed03">サジロカフェ</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'sajilocafe' ) ) :
                                    while ( have_rows( 'sajilocafe' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed02" rowspan="4">カフェ＆スイーツ</th>
                <th class="fixed03">丸山珈琲</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_cafe' ) ) :
                            while ( have_rows( 'opening_cafe' ) ) : the_row();
                                if ( have_rows( 'maruyamacoffee' ) ) :
                                    while ( have_rows( 'maruyamacoffee' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="fixed03">ナガイファーム</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_cafe' ) ) :
                            while ( have_rows( 'opening_cafe' ) ) : the_row();
                                if ( have_rows( 'nagaifarm' ) ) :
                                    while ( have_rows( 'nagaifarm' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
        </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>