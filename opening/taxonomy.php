<?php get_header(); ?>

<p><br></p>
<p><br></p>

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
.navi {
    margin: 0 0 40px;
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}
</style>

<div class="wrapper">

    <div class="navi">
    <a href="https://test.ultra-l.net/a/hoshino-area/cms/opening">全期間</a>
    <?php
    $terms = get_terms('opening_cat');
    foreach ( $terms as $term ) {
    echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
    }
    ?>
    </div>
    <div class="flxA">
        <div class="flx01"></div>
        <div class="flxC">
            <div class="flxB">
                <div class="flx02">期間</div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="flx03">
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
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="flxA">
        <div class="flx flx01">
            レストラン
        </div>
        <div class="flxC">
            <div class="flxB">
                <div class="flx02">イル・ソーニョ</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flxB">
                <div class="flx02">希須林</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flxB">
                <div class="flx02">川上庵</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flxB">
                <div class="flx02">サジロカフェ</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="flxA">
        <div class="flx flx01">
            カフェ＆スイーツ
        </div>
        <div class="flxC">
            <div class="flxB">
                <div class="flx02">丸山珈琲</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="flxB">
                <div class="flx02">ナガイファーム</div>
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
                    <div class="flx03">
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<p><br></p>
<p><br></p>

<?php get_footer(); ?>