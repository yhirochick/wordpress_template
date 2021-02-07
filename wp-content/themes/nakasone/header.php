<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nakasone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!-- 独自CSSをここで読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common_sp.css?t=1611759248341" type="text/css" media="screen and (max-width: 767px)">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/common_pc.css?t=1611759248341" type="text/css" media="screen and (min-width: 768px)">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/components/style_sp.css?t=1611759248341" type="text/css" media="screen and (max-width: 767px)">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/components/style_pc.css?t=1611759248341" type="text/css" media="screen and (min-width: 768px)">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/utility_sp.css?t=1611759248341" type="text/css" media="screen and (max-width: 767px)">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/utility_pc.css?t=1611759248341" type="text/css" media="screen and (min-width: 768px)">
  <?php if ( is_home() || is_front_page() ) : ?>
    <!-- トップのみ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/common/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/top/css/style_sp.css?t=1611759248341" type="text/css" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/top/css/style_pc.css?t=1611759248341" type="text/css" media="screen and (min-width: 768px)">
  <?php endif; ?>
  <!-- /独自CSSをここで読み込み -->
  <!-- 独自JSをここで読み込み -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <?php if ( is_home() || is_front_page() ) : ?>
    <!-- トップのみ -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/common/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/top/js/script.js?t=1611759248341"></script>
  <?php endif; ?>
  <!-- /独自JSをここで読み込み -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nakasone' ); ?></a>
  <header>
    <div class="header_logo">
      <?php if ( is_home() || is_front_page() ) : ?>
        <!-- トップのみ -->
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/common/images/logo.png" alt="XXXX"></h1>
      <?php else : ?>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/common/images/logo.png" alt="XXXX"></a>
      <?php endif; ?>
    </div>
    <?php if ( is_home() || is_front_page() ) : ?>
      <!-- トップのみ -->
      <div class="header_nav">
        <div class="header_nav__inner">
          <div class="header_nav__toggle hide">MENU</div>
          <a class="header_nav__item wide" href="#CorporateIdentity">
            <span class="header_nav__text">Company Nameについて</span>
          </a>
          <a class="header_nav__item" href="#Aboutus">
            <span class="header_nav__text">会社概要</span>
          </a>
          <a class="header_nav__item" href="#Product">
            <span class="header_nav__text">商品</span>
          </a>
          <a class="header_nav__item" href="#Access">
            <span class="header_nav__text">アクセス</span>
          </a>
          <a class="header_nav__item" href="#Contact">
            <span class="header_nav__text">お問い合わせ</span>
          </a>
        </div>
      </div>
    <?php endif; ?>
    <div class="header_contact">
      <a class="header_contact__phone" href="tel:03XXXXXXXX">
        <span class="header_contact__phone--text">TEL:03-XXXX-XXXX</span>
        <span class="header_contact__phone--sub">平日9:00〜18:00</span>
      </a>
    </div>
  </header>

	