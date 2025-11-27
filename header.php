<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="content-script-type" content="text/javascript">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="高精度・高品質で世界をリードする大同グループのみがき棒鋼専門メーカー　下村特殊精工株式会社" />
<meta name="keywords" content="下村特殊精工株式会社,シモムラ,快削鋼,ステンレス,快削ステンレス,工具鋼,研磨,引抜,特殊鋼,シャフト,金属,下村特殊精工,BIS,IS6603,ＢＩＳライセンス,非鉛,鉛フリー,Pb,残留応力" />
<title>下村特殊精工株式会社　｜　高品質の快削ステンレス鋼・快削鋼・工具鋼の磨き棒鋼専門メーカー</title>
<link href="<?php echo get_template_directory_uri(); ?>/common/css/normalize.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/common/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/common/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/common/css/common.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet">
<?php if (is_front_page()) : ?>
    <!--swiper-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/front-page.css" rel="stylesheet">
<?php elseif (is_home()) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" />
<?php elseif (is_page()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
        <?php
        // slug名のcssがあれば読み込む
        global $post;
        $slugName = $post->post_name;
        if (isset($slugName)) :
        if (is_file(get_theme_file_path('css/' . $slugName . '.css')) && file_exists(get_theme_file_path('css/' . $slugName . '.css'))) :
        ?>
            <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/' . $slugName . '.css'); ?>" />
        <?php
        endif;
        endif;
        ?>
<?php elseif (is_single()) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" />
<?php endif; ?>
<link href="https://fonts.googleapis.com/css?family=Lora:400italic/" rel="stylesheet" type="text/css">

<!--modify start-->
<link href="<?php echo get_template_directory_uri(); ?>/common/css/modal.css" rel="stylesheet">
<!--modify end-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', '');
	</script>
<?php wp_head(); ?>
</head>


<body id="pageTop" class="animsition">
	<div id="loadingLayer">
		<div id="loadingWrap">
			<div id="box">
				<div class="zoomIn2 zoomIn">Across the World</div>
				<div class="zoomIn2">SHIMOMURA</div>
			</div>
		</div> 
	</div>
	<header class="l-header">
		<div class="l-header__top">
			<div class="l-header__top--left leftBox">
				<h1>高品質の快削ステンレス鋼・快削鋼・工具鋼の磨き棒鋼専門メーカー</h1>
				<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/site-logo.svg" alt="下村特殊精工会社" class="alpha"></a></div>
			</div>
			<div class="l-header__top--right rightBox">
				<a href="http://www.sts-shimomura.com/" class="languagelink">日本語</a><a href="/en/" class="languagelink">English</a><a href="/cn/" class="languagelinkr">中文</a>
				<a href="https://shimomuranet.daido.co.jp//" class="outLink">Web 受注システム</a>
			</div>
			<button class="l-header__menu-btn js-sp-btnMenu">
				<span class="l-header__menu-bar"></span>
				<span class="l-header__menu-bar"></span>
				<span class="l-header__menu-bar"></span>
				<span class="l-header__menu-label">MENU</span>
			</button>
		</div>
		<div class="navWrapper l-nav">
			<nav class="gnav">
				<ul class="gnav__list">
					<li class="gnav__list__inner sp"><a class="gnav__link" href="/"><span>HOME</span></a></li>
					<li class="gnav__list__inner">
						<div class="gnav__list__inner__title-area">
							<a class="gnav__link" href="/company/"><span>会社案内</span></a>
							<span class="c-btn__arrow l-navList__item-title-arrow"></span>
						</div>
						<ul class="gnav__child">
							<li class="gnav__child__inner"><a href="/company/greeting/">代表挨拶</a></li>
							<li class="gnav__child__inner"><a href="/company/outline/">会社概要</a></li>
							<li class="gnav__child__inner"><a href="/company/history/">沿革</a></li>
							<li class="gnav__child__inner"><a href="/company/location/">国内事業所及び海外拠点</a></li>
							<li class="gnav__child__inner"><a href="/company/ethic/">企業倫理憲章</a></li>
							<li class="gnav__child__inner"><a href="/company/quality/">品質環境方針</a></li>
							<li class="gnav__child__inner"><a href="/company/iso/">ISOの取得について</a></li>
							<li class="gnav__child__inner"><a href="/company/characterprofile/">マスコットキャラクター</a></li>
							<li class="gnav__child__inner"><a href="/company/outline.html?id=groupLink">大同特殊鋼グループ</a></li>
						</ul>
					</li>
					<li class="gnav__list__inner">
						<div class="gnav__list__inner__title-area">
							<a class="gnav__link" href="/products/"><span>製品紹介</span></a>
							<span class="c-btn__arrow l-navList__item-title-arrow"></span>
						</div>
						<ul class="gnav__child">
							<li class="gnav__child__inner"><a href="/products/stainless/">ステンレス鋼</a></li>
							<li class="gnav__child__inner"><a href="/products/structual/">快削鋼および合金鋼</a></li>
							<li class="gnav__child__inner"><a href="/products/tool/">工具鋼</a></li>
							<li class="gnav__child__inner"><a href="/products/leadfree/">非鉛快削鋼シリーズ</a></li>
							<li class="gnav__child__inner"><a href="/products/bis/">インド向BISライセンス取得</a></li>
							<li class="gnav__child__inner"><a href="/products/residual-stress/">「残留応力」低減磨棒鋼</a></li>
							<li class="gnav__child__inner"><a href="/products/brand/" >各種取扱い鋼種と各法規制</a></li>
							<li class="gnav__child__inner"><a href="/products/specification/">製品規格</a></li>
							<li class="gnav__child__inner"><a href="/products/stock/">在庫一覧</a></li>
							<li class="gnav__child__inner"><a href="/products/simulation/">鋼種シミュレーション</a></li>
							<li class="gnav__child__inner"><a href="/products/catalogue/">製品カタログ</a></li>
						</ul>
					</li>
					<li class="gnav__list__inner sp"><a class="gnav__link" href="/csr/environment/"><span>CSR活動 環境への取り組み</span></a></li>
					<li class="gnav__list__inner"><a class="gnav__link" href="/global/"><span>グローバルネットワーク<span class="sp">｢シモムラ品質｣を世界へ</span></span></a></li>
					<li class="gnav__list__inner">
						<div class="gnav__list__inner__title-area">
							<a class="gnav__link" href="/mono/"><span>シモムラのこだわり</span></a>
							<span class="c-btn__arrow l-navList__item-title-arrow"></span>
						</div>
						<ul class="gnav__child">
							<li class="gnav__child__inner"><a href="/mono/material/">素材・サービス</a></li>
							<li class="gnav__child__inner"><a href="/mono/process/">製造・生産</a></li>
							<li class="gnav__child__inner"><a href="/mono/quality/">品質</a></li>
							<li class="gnav__child__inner"><a href="/mono/analysis/">解析・分析</a></li>
							<li class="gnav__child__inner"><a href="/mono/smk/">SMK Project</a></li>
							<li class="gnav__child__inner"><a href="/mono/sss/">シモムラ安全教室</a></li>
						</ul>
					</li>
					<li class="gnav__list__inner">
						<div class="gnav__list__inner__title-area">
							<a class="gnav__link" href="/recruit/"><span>採用情報</span></a>
							<span class="c-btn__arrow l-navList__item-title-arrow"></span>
						</div>
						<ul class="gnav__child">
							<li class="gnav__child__inner"><a href="/recruit/outline/">募集要項</a></li>
							<li class="gnav__child__inner"><a href="/recruit/ourwork/">社員紹介</a></li>
							<li class="gnav__child__inner"><a href="/recruit/environment/">仕事紹介</a></li>
							<li class="gnav__child__inner"><a href="/recruit/qa/">Ｑ＆Ａ</a></li>
							<li class="gnav__child__inner"><a href="/recruit/contact/">応募フォーム</a></li>
						</ul>
					</li>
					<li class="gnav__list__inner"><a class="gnav__link" href="/contact/"><span>お問い合わせ</span></a></li>
				</ul>
			</nav>
		</div>
	</header>