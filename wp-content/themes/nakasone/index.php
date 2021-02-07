<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nakasone
 */

get_header();
?>
  <?php if ( is_home() || is_front_page() ) : ?>
    <div class="mv">
      <div class="swiper-container mv">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/top/images/mv_01.jpg)">
            <div class="mv_contents pc-posi-9 sp-posi-bottom">
              <p class="mv_text">あったらいいなをカタチに</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/top/images/mv_02.jpg)">
            <div class="mv_contents pc-posi-9 sp-posi-bottom">
              <p class="mv_text">未来に、つながる。</p>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
      </div>
    </div>
  <?php endif; ?>
	<main id="primary" class="site-main">
    <section id="CorporateIdentity" class="content ci">
      <h2 class="heading2"><span>Company Nameについて</span></h2>
      <div class="content_outer">
        <div class="ci_content">
          <p class="ci_concept">Company Nameでは<br class="sp">お客様ごとに<br>ベストな提案をします。</p>
          <p class="ci_main">せよためを手段を考えているますたて、もう自分を助力をしているないて、余計あれて私に叫びなな。及び今は倫敦の厄介西洋で讃に繰返しなくです。</p>
          <p class="ci_main">実はその本位で起るてはとうとう内容も珍の以上を述べるのがえたます。</p>
        </div>
      </div>
    </section>
    <section id="Curriculum" class="content">
      <h2 class="heading2"><span>カリキュラム</span></h2>
      <div class="content_outer">
        <div class="flex-wrap col5 sp-col-2">
        <?php
    
          $catargs = array(
            'taxonomy' => 'curriculum_category'
          );
          $categories = get_categories($catargs);
        ?>
        <?php foreach($categories as $category) : ?>
          <div class="flex-wrap-item">
            <p><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></p>
          </div>
        <?php endforeach; ?>
        </div>
        <a class="btn icon-blank pc-mt-80 sp-mt-40" target="_blank" href="">
          <span class="main">年間スケジュールを見る</span>
        </a>

      </div>
    </section>
    <section id="Aboutus" class="content achievement">
      <h2 class="heading2"><span>利用者の声</span></h2>
      <div class="content_outer">
        <div class="flex">
          <div class="flex-item image-cover">
            <img src="https://placehold.jp/400x400.png" alt="">
          </div>
          <div class="flex-item image-cover">
            <img src="https://placehold.jp/400x400.png" alt="">
          </div>
          <div class="flex-item image-cover">
            <img src="https://placehold.jp/400x400.png/?text=cover" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="Course" class="content course">
      <h2 class="heading2"><span>お知らせ</span></h2>
      <div class="content_outer">
        <div class="content_outer">
          <div class="flex">
            <div class="flex-item image-cover">
              <img src="https://placehold.jp/400x400.png" alt="">
            </div>
            <div class="flex-item image-cover">
              <img src="https://placehold.jp/400x400.png" alt="">
            </div>
            <div class="flex-item image-cover">
              <img src="https://placehold.jp/400x400.png/?text=cover" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="Flow" class="content flow">
      <h2 class="heading2"><span>入塾の流れ</span></h2>
      <div class="content_outer">
      </div>
    </section>
    <section id="Access" class="content access">
      <h2 class="heading2"><span>アクセス</span></h2>
      <div class="content_outer">
      </div>
    </section>
    <section id="Contact" class="content contact">
      <h2 class="heading2"><span>お問い合わせ</span></h2>
      <div class="content_outer">
        <div class="contact_content">
        </div>
      </div>
    </section>
    <section id="News" class="content news">
      <h2 class="heading2"><span>最新情報</span></h2>
      <div class="content_outer">
      </div>
    </section>
    <div class="cat_list">
    
	</main><!-- #main -->

<?php
get_footer();
