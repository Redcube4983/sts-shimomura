$(function(){
	var myXml = new XMLHttpRequest();
	myXml.onreadystatechange = function() {
		if ((myXml.readyState === 4) && (myXml.status === 200)) {
			if (!$.cookie('shimomura') || $.cookie('shimomura') == '0') {
				let elem = document.getElementsByTagName('body');
				elem[0].insertAdjacentHTML('beforeend', myXml.responseText);
				$('.cookiebox').css({ display:'flex', opacity:0, bottom:'-50px' }).animate({ opacity:1, bottom: 0 });
				$('.cookiebox-btn').on('click', function(){
					$.cookie('shimomura', 1, {expires: 180, path: '/'});
					$('.cookiebox').animate({ opacity:0, bottom:'-50px'}, 'normal', 'linear', function(){
						$(this).hide();
					});
					$('.l-footer').css({ 'padding-bottom': '0' });
				});
			}
			$('.cookiebox-btn-remove').on('click', function(){
				$.removeCookie('shimomura', {path: '/'});
				$('.cookiebox').animate({ opacity:0, bottom:'-50px'}, 'normal', 'linear', function(){
					$(this).hide();
				});
				$('.l-footer').css({ 'padding-bottom': '0', });
			});
			if(!($('.cookiebox').css('display') == 'none')){
				let cookiebox_height = $('.cookiebox').innerHeight();
				$('.l-footer').css({ 'padding-bottom': cookiebox_height + 'px' });
			}
		}
	}
	myXml.open("GET", "https://sts-shimomura.cube-stg.jp/wp-content/themes/shimomura/common/js/permission_cookie.txt", true);
	myXml.send();
});
