(function($) { 
  $(function(){
    var swiper_mv = new Swiper('.swiper-container.mv', {
      init: false,
      effect: 'fade',
      loop: true,
      speed: 2000,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: 'swiper-container.mv .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    swiper_mv.init();

    var swiper_achievement = new Swiper('.swiper-container.achievement', {
      init: false,
      loop: true,
      speed: 500,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true
      },
      pagination: {
        el: ".swiper-pagination.achievement_pagination",
        type: "bullets",
        clickable: true,
        renderBullet: function(index, className) {
          var names = [];
          $(".swiper-container.achievement .swiper-wrapper .swiper-slide").each(function(i) {
            names.push($(this).data("name"));
          });
          return '<span class="achievement_bullet ' + className + '">' + names[index + 1] + '</span>';
        }
      },
    });
    // swiper_achievement.init();

  });
  // スムーススクロール
  $(function(){
    var windowWidth = window.innerWidth;
    $('a[href^="#"]').on('click', function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - 81;
      if(windowWidth < 767 ) {
        var position = target.offset().top - 31;
      }
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
  // SP時ナビ表示制御
  $(function(){
    var windowWidth = window.innerWidth;
    var position;
    if(windowWidth >= 767 ) return;
    $('.header_nav__toggle').on('click', function(){
      if($(this).hasClass('show')) {
        $('.header_nav').css("transform", "translateY(100%)");
        $('.header_nav__toggle').removeClass('show');
        $('.header_nav__toggle').addClass('hide');
      } else if($(this).hasClass('hide')) {
        $('.header_nav').css("transform", "translateY(0)");
        $('.header_nav__toggle').removeClass('hide');
        $('.header_nav__toggle').addClass('show');
      }
    });
    $(document).on('click touchend', function(event) {
      if (!$(event.target).closest('.header_nav').length) {
        $('.header_nav').css("transform", "translateY(100%)");
        $('.header_nav__toggle').removeClass('show');
        $('.header_nav__toggle').addClass('hide');
      }
    });
    $(window).on('scroll', function(){
      position = $(window).scrollTop();
      var doch = $(document).innerHeight();
      var winh = $(window).innerHeight();
      var bottom = doch - winh - 200;
      if(position < 200 || bottom <= position) {
        $('.header_nav').fadeOut(200);
      } else {
        $('.header_nav').fadeIn(200);
      }
    });
  });
})(jQuery);