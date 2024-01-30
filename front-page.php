<?php
/**
 * トップページのテンプレート
 */
get_header(); ?>

<p><br></p>
<p><br></p>

<?
$today = date_i18n('Ymd');
$today2 = date_i18n('Ymd-H:i:s');
?>
現在時刻：<?php echo $today2;?>

<p><br></p>
<p><br></p>

営業日（個別取得テスト）
<?php
$args = array(
  'post_type'=> 'business-hours',
  'meta_key' => 'opening_start', //ACFのフィールド名
  'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
    'relation' => 'AND',
    array(
    'key'     => 'opening_start',
    'value'   => $today,
    'type'    => 'date',
    'compare' => '<=',
    ),
    array(
    'key' => 'opening_end',
    'value' => $today,
    'type'    => 'date',
    'compare' => '>=',
    ),
  ),
  'posts_per_page' => 1,
);
$wp_query = new WP_Query( $args );
?>
<section class="l-spacer -medium -both">
  <div class="l-container--primary">
  <?php if ( $wp_query->have_posts() ): ?>
    <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
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
      <?php echo $content; ?><span><?php echo $style; ?></span>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  </div>
</section>

<p><br></p>
<p><br></p>



<p><br></p>
<p><br></p>

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
    <dl>
      <?php if ( $wp_query->have_posts() ): ?>
        <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); $loopcounter++; ?>
          <div>
            <dt>投稿日：<?php the_time('Y年m月d日'); ?></dt>
            <dd>
              <?php if(get_field('event_start')): ?>イベント開始日：<?php the_field('event_start'); ?><br><?php endif; ?>
              <?php if(get_field('event_end')): ?>イベント終了日：<?php the_field('event_end'); ?><br><?php endif; ?>
              <a href="<?php the_permalink(); ?>">期間中 : <?php the_title(); ?></a>
            </dd>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事が見つかりませんでした。</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
      <?php
        $counter = (3 - $loopcounter);
      ;?>
      <?php
        $args = array(
          'post_type' => 'event',
          'post_status' => 'publish',
          'meta_value'    => $today,// dateで現在の日時を取得
          'meta_key'      => 'event_start',
          'meta_compare'  => '>',// meta_valueとmeta_keyを比較して過去の場合のみ表示
          'posts_per_page' => $counter,
        );
        $wp_query = new WP_Query( $args );
      ?>
      <?php if ( $wp_query->have_posts() ): ?>
        <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
          <div>
            <dt>投稿日：<?php the_time('Y年m月d日'); ?></dt>
            <dd>
              <?php if(get_field('event_start')): ?>イベント開始日：<?php the_field('event_start'); ?><br><?php endif; ?>
              <?php if(get_field('event_end')): ?>イベント終了日：<?php the_field('event_end'); ?><br><?php endif; ?>
              <a href="<?php the_permalink(); ?>">開催前 : <?php the_title(); ?></a>
            </dd>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事が見つかりませんでした。</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </dl>
<?php /*postSingle：END*/ ?>



<div class="s_0900000000">
  <div class="accordion_area">
    <div class="-block">
      <div class="accordion_header open">
        <div>自然との共生</div>
      </div>
      <div class="accordion_inner">
        <div>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <p>星野エリアは遥か昔から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約80種類の野鳥が見られ、ムササビやニホンカモシカなど、多くの野生動植物が生息しています。浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。ずっと変わらない森の情景が、訪れる人たちを、優しく包み込みます。</p>
        </div>
      </div>
    </div>
    <div class="-block -2nd">
      <div class="accordion_header">
        <div>今に続く歴史の足跡</div>
      </div>
      <div class="accordion_inner">
        <div>
          <p>星野エリアは遥か昔から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約80種類の野鳥が見られ、ムササビやニホンカモシカなど、多くの野生動植物が生息しています。浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。ずっと変わらない森の情景が、訪れる人たちを、優しく包み込みます。</p>
        </div>
      </div>
    </div>
    <div class="-block">
      <div class="accordion_header">
        <div>暮らすような滞在</div>
      </div>
      <div class="accordion_inner">
        <div>
          <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
