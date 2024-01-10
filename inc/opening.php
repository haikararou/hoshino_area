<?php global $shop_slug; ?>
<?php
$query = new WP_Query(array(
    'post_type' => "opening",
    'order' => 'ASC',
    'orderby' => 'date',
));
if($query->have_posts()): while($query->have_posts()): $query->the_post();
?>
<?php
    if(have_rows('opening_harunireterrace')):
        while(have_rows('opening_harunireterrace')): the_row();
            if(have_rows($shop_slug)):
                while(have_rows($shop_slug)): the_row();
                    $time = get_sub_field('time');
                    $comment = get_sub_field('comment');
                endwhile;
            endif;
        endwhile;
    endif;
?>
<td>
    <?php echo $time; ?><span><?php echo $comment; ?></span>
</td>
<?php endwhile; endif; ?>