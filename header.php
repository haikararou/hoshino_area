<?php
/**
 * ヘッダーテンプレート
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <script src="https://webfont.fontplus.jp/accessor/script/fontplus.js?ISugzJK~YHU%3D&box=mVcnX52C2Ng%3D&aa=1&ab=2"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>

  <?php /*
	<meta name="description" content="<?php print_description(); ?>">

  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja_JP">
	<meta property="og:title" content="<?php echo print_ogp_title(); ?>">
	<meta property="og:description" content="<?php print_description(); ?>">
	<meta property="og:url" content="<?php print_url(); ?>">
	<meta property="og:image" content="<?php echo get_ogpimg_url(); ?>">
  
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php print_ogp_title(); ?>">
  <meta name="twitter:description" content="<?php print_description(); ?>">
  <meta name="twitter:image:src" content="<?php echo get_ogpimg_url(); ?>">
  
  */ ?>
  
  <!--google Analytics -->
  <!--google Analyticsのタグをここに張り付ける -->
  <!-- adobe font -->
  <script>
    (function(d) {
      var config = {
        kitId: 'vnc3pvk',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
</head>

<body <?php body_class('l-body'); ?> id="js-body">
  <header class="l-header" id="js-header">
    <div class="l-header__top" id="js-fixed-header-sp">
      <a href="<?php echo home_url(); ?>"><p class="l-header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-ja.svg" width="215" height="26" alt="軽井沢星野エリア" class="l-header-logo__ja">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-en.png" width="129" height="12" alt="Hoshino resorts" class="l-header-logo__en">
        </p>
      </a>
      
    
      <div class="l-header-menu__tertiary">
        <ul class="c-gmenu-tertiary">
          <li class="c-gmenu-tertiary__item"><a href="" class="c-button-arrow">イベント情報</a></li>
          <li class="c-gmenu-tertiary__item"><a href="" class="c-button-arrow">ニュース</a></li>
        </ul>

        <div class="l-header-menu__lang">
          <?php 
          $args = ['class' => '-header'];
          get_template_part('inc/language', null, $args); ?>
        </div>
      </div>
    </div>
    <div class="l-header-menu" id="js-fixed-header-pc">
      <ul class="c-gmenu-primary l-header-menu__primary" id="js-header-menu-primary">
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/tonbo'); ?>" class="c-gmenu-primary__link">温泉</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/shop'); ?>" class="c-gmenu-primary__link">ショップ&amp;レストラン</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/activity'); ?>" class="c-gmenu-primary__link">アクティビティ</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/church'); ?>" class="c-gmenu-primary__link">教会</a></li>
        <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/staying'); ?>" class="c-gmenu-primary__link">ホテル</a></li>
      </ul>
      
      <div class="c-gmenu-secondary l-header-menu__secondary">
        <a href="" class="c-button-arrow c-gmenu-secondary__textbtn">施設を探す</a>
        <a href="<?php echo home_url('/access'); ?>" class="c-button-block -white -icon c-gmenu-secondary__blockbtn"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-access.svg"></i>アクセス</a>
        <a href="<?php echo home_url('/parking'); ?>" class="c-button-block -white -icon c-gmenu-secondary__blockbtn"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i>駐車場</a>
        </ul>
        <button class="c-button-hamburger c-gmenu-secondary__hamburger" id="js-hamburger">メニュー</button>
      </div>
    </div>
    <div id="js-drawer" class="l-header-drawer">
      <div class="l-header-submenu">
        <div class="l-header-submenu__infomenu">
        <?php  $args = ['class' => '-head-drawer'];
        get_template_part('inc/info-menu', null, $args); ?>
        </div>
        <div class="l-header-submenu__today">
        <?php get_template_part('inc/today', null, $args);  ?>
        </div>
        <div class="l-header-submenu__othermenu">
        <?php get_template_part('inc/other-menu', null, $args); ?>
        </div>
        <div class="l-header-submenu__lang">
        <?php get_template_part('inc/language', null, $args); ?>
        </div>
      </div>
    </div>
  </header>
  
  <a href="" id="js-areamap">
    <div class="c-button-areamap">
      <img class="c-button-areamap__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/areamap.svg" width="71" height="71">
      <p class="c-button-areamap__text">Area Map</p>
    </div>
  </a>
  <main id="js-main00000000" class="l-main">