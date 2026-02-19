$(function () {

  function setIndexH1() {
    const img = $('.indexH1 .img img')[0];
    if (!img) return;

    const h = img.getBoundingClientRect().height;
    if (h > 0) {
      $('.indexH1').css('height', h + 'px');
    }
  }

  function setSubH1() {
    const img = $('.subH1 .img img')[0];
    if (!img) return;

    const h = img.getBoundingClientRect().height;
    if (h > 0) {
      $('.subH1').css('height', h + 'px');
    }
  }

  // DOM直後 + 1フレーム待ち
  requestAnimationFrame(setIndexH1);
  requestAnimationFrame(setSubH1);

  // リサイズ対応
  $(window).on('resize', function () {
    setIndexH1();
    setSubH1();
  });

});

// ボタン透過
$(function(){
  $(".alpha").hover(function(){
	$(this).fadeTo("normal", 0.5);
  },function(){
	$(this).fadeTo("normal", 1.0);
  });
});


jQuery(function ($) {
  let scrollPos = 0;
  $('.js-sp-btnMenu').on('click', function () {
    const $html = $('html');
    const $body = $('body');
    $('.l-nav').toggleClass('is-open').slideToggle(500);
    $('.l-header__menu-btn').toggleClass('is-open');
    if ($html.hasClass('is-fixed')) {
        $html.removeClass('is-fixed');
        $body.css('top', '');
        window.scrollTo(0, scrollPos);
    } else {
        scrollPos = window.pageYOffset;
        $body.css('top', -scrollPos + 'px');
        $html.addClass('is-fixed');
    }
	if (
    $('.l-header__menu-btn').hasClass('is-open')) {
		$('.l-header__menu-label').html('close');
    $('.l-nav').addClass('is-open');
     
	} else {
		$('body').css('overflow', 'auto'); // ← スクロール復帰
		$('.l-header__menu-label').html('MENU');
    $('.l-nav').removeClass('is-open');
	}
  });
});
$(window).on('load resize', function () {
  let scrollPos = 0;
  const $html = $('html');
  const $body = $('body');
  $('.l-navList__item-title-arrow').off();
  $('.l-footer__nav-title-arrow').off();
  $('.gnav__list__inner').off();
  if (window.matchMedia('(max-width:1023px)').matches) {
   // SPの処理
   if ($('.js-sp-btnMenu').hasClass("is-open")) {
      //open表示中の場合
      scrollPos = window.pageYOffset;
      $body.css('top', -scrollPos + 'px');
      $html.addClass('is-fixed');
        
    } else {
      //open非表示の場合
      $html.removeClass('is-fixed');
      $body.css('top', '');
      window.scrollTo(0, scrollPos);
      
    }
   // サブメニュー開閉
    $('.l-navList__item-title-arrow').on('click', function () {
      const $btn = $(this);
      const $item = $btn.closest('.gnav__list__inner');
      $item.toggleClass('is-open');
      $btn.toggleClass('is-open');
      const $submenu = $item.find('.gnav__child');
      $submenu.slideToggle(500).css('display', 'flex');
    });
    if ($('.l-l-navList__item-title-arrow').hasClass('is-open')) {
      $(this).parent('.l-navList__item-title-area').next('.gnav__child').css('display', 'flex');
    } else {
      $(this).parent('.l-navList__item-title-area').next('.gnav__child').css('display', '');
    }
    // フッターアコーディオン開閉
    // SP 表示
    $('.l-footer__nav-title-arrow').on('click', function () {
      const $arrow = $(this);
      const $titleArea = $arrow.closest('.l-footer__nav-title-area');
      const $targetList = $titleArea.next('.l-footer__nav-list');

      $targetList.slideToggle(500);
      $arrow.toggleClass('is-open');
    });

  } else if (window.matchMedia('(min-width:1024px)').matches) {
    // PCの処理
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      // スマートフォン用コード
    

    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      // タブレット用コード
     

    } else {
      // PC用コード
        if (
          $('.js-sp-btnMenu').hasClass("is-open")) {
        //open表示中の場合
          $html.removeClass('is-fixed');
          $body.css('top', '');
          window.scrollTo(0, scrollPos);
          $('.l-navList__item-title-arrow').removeClass('is-open');
          $('.gnav__child').removeClass('is-open').css('display', '');
        } else {

        }
       // PC 表示
	   if ($('.gnav__list__inner').hasClass('is-open')) {
			$('.gnav__list__inner').removeClass('is-open')
			$('.gnav__list__inner__title-area').find('.l-navList__item-title-arrow').removeClass('is-open');
			$('.gnav__child').removeClass('is-open').slideUp(500).css('display', '');
		} else {
			
	    }
	   // サブメニュー開閉
		$('.gnav__list__inner').on('mouseenter', function () {
        const $item = $(this);
        const $submenu = $item.find('.gnav__child');

        // 他メニューを即閉じ（フェード or 即非表示）
        $('.gnav__list__inner').not($item).each(function () {
          const $other = $(this);
          $other.removeClass('is-open');
          $other.find('.gnav__link').removeClass('active');
          $other.find('.c-btn__arrow').removeClass('is-open');
          $other.find('.gnav__child')
            .stop(true, true)
            .fadeOut(0)
            .removeClass('is-open');
        });

        // 自分を開く
        $item.addClass('is-open');
        $item.find('.gnav__link').addClass('active');
        $item.find('.c-btn__arrow').addClass('is-open');

        $submenu
          .stop(true, true)
          .slideDown(500)
          .css({ display: 'flex', visibility: 'visible' })
          .addClass('is-open');
        });

        $('.gnav__list__inner').on('mouseleave', function () {
          const $item = $(this);
          const $submenu = $item.find('.gnav__child');

          $item.removeClass('is-open');
          $item.find('.gnav__link').removeClass('active');
          $item.find('.c-btn__arrow').removeClass('is-open');

          $submenu
            .stop(true, true)
            .slideUp(300)
            .removeClass('is-open');
        });  
    }
  }
});

// ページ読込遅延
$(function() {
    var fadeSpeed = 600;
    $('#pages .indexH1')
        .css({opacity: '0.0'})
        .animate({opacity: '1'}, fadeSpeed);
});
$(function() {
    var fadeSpeed = 600;
    $('#pages .subH1')
        .css({opacity: '0.0'})
        .animate({opacity: '1'}, fadeSpeed);
});
$(function() {
    var fadeSpeed = 800;
    $('#pageContents')
        .css({opacity: '0.0'})
        .animate({opacity: '1'}, fadeSpeed);
});

$(function() {
    var fadeSpeed = 800;
    $('#sideBar')
        .css({opacity: '0.0'})
        .animate({opacity: '1'}, fadeSpeed);
});

$(function() {
    var fadeSpeed = 2000;
    $('#topContent')
        .css({opacity: '0.0'})
        .animate({opacity: '1'}, fadeSpeed);
});


//$(function(){
  // 1回目のアクセス
  //$("#loadingLayer").css("display","none");
    //$("#loadingLayer").css("display","block");
    //setTimeout(function() {
			//$('#loadingLayer').fadeOut(400);
		//}, 1800);

//});

$(function(){
  // 1回目のアクセス
  $("#loadingLayer").css("display","none");
  if(jQuery.cookie("access") == undefined) {
    //最初にアクセスしたときにはここに書いたアニメーションのJSが動く
    jQuery.cookie("access","onece");
    $("#loadingLayer").css("display","block");
    setTimeout(function() {
			$('#loadingLayer').fadeOut(400);
		}, 4000);
  // 2回目以降は動かないようにするけど最初は動かす
  } else {
    $("#loadingLayer").css("display","none");
    $('html').addClass('is-hidden');
    // 2回目以降は動かないようにする
  }
});

