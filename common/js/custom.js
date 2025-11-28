$(window).load(function () {
		hsize = $("h1 .img img").height();
		$("h1.indexH1").css("height", hsize + "px");
	});
	$(window).resize(function () {
		  hsize = $("h1 .img img").height();
		  $("h1.indexH1").css("height", hsize + "px");
	});


// 先行
$(function() {
	$(".img img").on('load', function(){
		var hsize = $(this).height();
		$("h1.subH1").css("height", hsize + "px");
	})
});
// 保険
$(window).load(function () {
	hsize = $(".img img").height();
	$("h1.subH1").css("height", hsize + "px");
});

// ボタン透過
$(function(){
  $(".alpha").hover(function(){
	$(this).fadeTo("normal", 0.5);
  },function(){
	$(this).fadeTo("normal", 1.0);
  });
});


// ツールチップ
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})

$(window).resize(function () {
	hsize = $(".img img").height();
	$("h1.subH1").css("height", hsize + "px");
});
jQuery(function ($) {
  var scrollPos;//グローバルで初期かしておかないと上にもどっちゃう
  $('.js-sp-btnMenu').on('click', function () {
    $('.l-nav').toggleClass('is-open').slideToggle(500);
    $('.l-header__menu-btn').toggleClass('is-open');
    if ($('body').hasClass('fixed')) {
      $('body').removeClass('fixed').css('top', 0 + 'px');
      window.scrollTo(0, scrollPos);//初期化
    } else {
      scrollPos = $(window).scrollTop();//現在のスクロール位置
      $('body').addClass('fixed').css('top', -scrollPos + 'px');
    }
	if ($('.l-header__menu-btn').hasClass('is-open')) {
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
  $('.l-navList__item-title-arrow').off();
  $('.l-footer__nav-title-arrow').off();
  $('.gnav__list__inner').off();
  if (window.matchMedia('(max-width:919px)').matches) {
   // SPの処理
   if ($('.js-sp-btnMenu').hasClass("is-open")) {
      //open表示中の場合
      scrollPos = $(window).scrollTop();//現在のスクロール位置
       $('body').addClass('fixed').css('top', -scrollPos + 'px');
        
    } else {
      //open非表示の場合
      $('.l-nav').css('display', '');
      $('body').removeClass('fixed').css('top', 0 + 'px');
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

  } else if (window.matchMedia('(min-width:920px)').matches) {
    // PCの処理
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      // スマートフォン用コード
    

    } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      // タブレット用コード
     

    } else {
      // PC用コード
        $('.l-nav').css('display', 'block');
        if ($('.js-sp-btnMenu').hasClass("is-open")) {
        //open表示中の場合
        $('body').removeClass('fixed').css('top', 0 + 'px');
		$('.l-header__menu-btn').removeClass('is-open');
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
		$('.gnav__list__inner').hover( function () {
		const $btn = $(this);
		const $item = $btn.closest('.gnav__list__inner');
		$(this).toggleClass('is-open');
		$item.toggleClass('is-open');
		$btn.toggleClass('is-open');
		const $submenu = $item.find('.gnav__child');
		$(this).children('.gnav__list__inner__title-area').find('.gnav__link').toggleClass('active');
		$(this).children('.gnav__list__inner__title-area').find('.gnav__link').next('.c-btn__arrow').toggleClass('is-open');
		$submenu.slideToggle(500).css('display', 'flex').toggleClass('is-open');
		});    
    }
  }
});

// ページ読込遅延
$(function() {
    var fadeSpeed = 600;
    $('#pages h1')
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


$(window).load(function() {
    $('.cataBlock .box').tile();
});


$(function(){
  // 1回目のアクセス
  if($.cookie("access") == undefined) {
    //最初にアクセスしたときにはここに書いたアニメーションのJSが動く
    $.cookie("access","onece");
    $("#loadingLayer").css("display","block");
    setTimeout(function() {
			$('#loadingLayer').fadeOut(400);
		}, 6500);
  // 2回目以降は動かないようにするけど最初は動かす
  } else {
    $("#loadingLayer").css("display","none");
        // 2回目以降は動かないようにする
  }
});

// モーダル youtube 停止
$(function(){
	$('a, .btn').click(function () { 
	  var idname = $(this).attr('data-target'),
	  	  myFrame = $(idname).find('iframe'),
	      src = myFrame.attr('src');

	  $(idname).on('shown.bs.modal', function () {
		myFrame.attr('src', src + "?autoplay=1" );
	  });
			
	  $(idname).on('hidden.bs.modal', function () {
		// myFrame.removeAttr('src');
		myFrame.attr('src', src);
		$(idname).off('shown.bs.modal');
		$(idname).off('hidden.bs.modal');
	  });
	});
});

