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
		<?php if (is_page('characterprofile')) : ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/magnific-popup.css">
		<?php endif; ?>
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
<?php elseif (is_archive()) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" />
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
		<div id="box">
			<!--?xml version="1.0" encoding="utf-8"?-->
			<!-- Generator: Adobe Illustrator 26.5.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="loading" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 711.4 168.8" style="enable-background:new 0 0 711.4 168.8;" xml:space="preserve" width="711.4000244140625" height="168.8000030517578">
			<style type="text/css">
				.st0{fill:#FFFFFF;}
				.st1{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
			</style>
			<g>
				<path class="st0 svg-elem-1" d="M1.4,68.2L24.8,1h13l23.4,67.2H46.7l-4.1-12.8H20.1L16,68.2H1.4z M23.7,43.9h15.2l-7.6-23.7L23.7,43.9z"></path>
				<path class="st0 svg-elem-2" d="M103.5,60.8c-3.4,5.7-9,8.3-17.7,8.3c-13.9,0-21.7-8.8-21.7-22v-6.6c0-14.2,7.9-21.8,22.4-21.8
					c7.5,0,13.6,2.7,17,8.1l-9.3,6.5c-1.7-2.3-4.1-4.1-8-4.1c-7,0-9.7,4.3-9.7,12.1v5.1c0,7,1.8,12.3,9.7,12.3c3.7,0,6.3-1.3,8.1-4.2
					L103.5,60.8z"></path>
				<path class="st0 svg-elem-3" d="M135.6,33c-1.3-1.8-3-3.7-6.1-3.7c-4.7,0-7.8,3.4-7.8,10.2v28.6h-12.5V19.5h12.2v4.1c1.7-2.4,4.9-5,10.6-5
					c5.8,0,10.2,2.5,13.1,7.6L135.6,33z"></path>
				<path class="st0 svg-elem-4" d="M189.4,46.7c0,13.3-6.3,22.4-21,22.4c-14.1,0-21-8.8-21-22.4v-5.8c0-14.6,7.7-22.2,21-22.2
					c13.5,0,21,7.6,21,22.2V46.7z M177.1,46.3v-5.1c0-7.8-2.5-12.1-8.7-12.1c-6.1,0-8.7,4.3-8.7,12.1v5.1c0,7,1.8,12.3,8.7,12.3
					C175.2,58.5,177.1,53.3,177.1,46.3z"></path>
				<path class="st0 svg-elem-5" d="M224.4,33.2c-2.1-2.5-4.3-3.9-9.5-3.9c-3.2,0-6.1,1-6.1,3.8c0,2.9,2.6,4,7.8,4.8c12,1.8,18,6.4,18,16.1
					c0,9.3-6.5,15.1-19.1,15.1c-9.9,0-16-2.4-20.1-8.1l9.5-6.8c1.9,2.6,4.4,4.2,10.4,4.2c4.3,0,6.9-1.5,6.9-4c0-3-2.1-4-8.3-5
					c-10.1-1.7-17.5-5.9-17.5-15.8c0-9.2,6.6-15,18.8-15c8,0,14.6,1.8,18.4,8.1L224.4,33.2z"></path>
				<path class="st0 svg-elem-6" d="M269.5,33.2c-2.1-2.5-4.3-3.9-9.5-3.9c-3.2,0-6.1,1-6.1,3.8c0,2.9,2.6,4,7.8,4.8c12,1.8,18,6.4,18,16.1
					c0,9.3-6.5,15.1-19.1,15.1c-9.9,0-16-2.4-20.1-8.1l9.5-6.8c1.9,2.6,4.4,4.2,10.4,4.2c4.3,0,6.9-1.5,6.9-4c0-3-2.1-4-8.3-5
					c-10.1-1.7-17.5-5.9-17.5-15.8c0-9.2,6.6-15,18.8-15c8,0,14.6,1.8,18.4,8.1L269.5,33.2z"></path>
				<path class="st0 svg-elem-7" d="M308.8,19.5h6.2V8.8h12.4v10.7h9.5V30h-9.5v20.3c0,4.9,1,6.9,5.5,6.9h4v10.9h-5.3c-11.8,0-16.6-3.3-16.6-15.9
					V30h-6.2V19.5z"></path>
				<path class="st0 svg-elem-8" d="M344.6,1H357v22.3c1.8-2.4,5.3-4.7,10.9-4.7c9.8,0,17.8,4.7,17.8,19.1v30.5h-12.4V39.6
					c0-7.6-2.7-10.3-7.8-10.3c-5.7,0-8.6,3.8-8.6,10.2v28.6h-12.5V1z"></path>
				<path class="st0 svg-elem-9" d="M433.4,60.8c-3.4,5.9-9.1,8.3-17.8,8.3C401,69,394,59.6,394,47v-6.6c0-14.7,7.4-21.8,20.1-21.8
					c13.7,0,20.1,8,20.1,22.8v5.5h-27.7c0.1,6.7,2.2,11.6,9.1,11.6c5.2,0,6.8-1.6,8.7-4.2L433.4,60.8z M406.4,38.1h15.3
					c-0.3-6.3-2.8-9-7.5-9C409.2,29.1,406.9,32.5,406.4,38.1z"></path>
				<path class="st0 svg-elem-10" d="M491.5,68.2h-12.9L463.1,1h14.6l9,44.2L499.4,1h12.3l13.1,44.5L533.7,1h14.7l-15.5,67.2h-13l-14.2-46.2
					L491.5,68.2z"></path>
				<path class="st0 svg-elem-11" d="M594.2,46.7c0,13.3-6.3,22.4-21,22.4c-14.1,0-21-8.8-21-22.4v-5.8c0-14.6,7.7-22.2,21-22.2
					c13.5,0,21,7.6,21,22.2V46.7z M581.9,46.3v-5.1c0-7.8-2.5-12.1-8.7-12.1c-6.1,0-8.7,4.3-8.7,12.1v5.1c0,7,1.8,12.3,8.7,12.3
					C580,58.5,581.9,53.3,581.9,46.3z"></path>
				<path class="st0 svg-elem-12" d="M628.9,33c-1.3-1.8-3-3.7-6.1-3.7c-4.7,0-7.8,3.4-7.8,10.2v28.6h-12.5V19.5h12.2v4.1c1.7-2.4,4.9-5,10.6-5
					c5.8,0,10.2,2.5,13.1,7.6L628.9,33z"></path>
				<path class="st0 svg-elem-13" d="M642.4,1h12.5v48.8c0,5.3,1.6,7.7,6.8,7.7v10.7c-13.1,0-19.3-3.4-19.3-15.6V1z"></path>
				<path class="st0 svg-elem-14" d="M698.1,1h12.4v67.2h-12.4v-2.8c-2.5,2.3-5.8,3.7-10.4,3.7c-12.8,0-19.3-9.1-19.3-22v-6.6
					c0-14.2,7.7-21.8,19.3-21.8c4.2,0,7.7,1.1,10.4,3.4V1z M698.1,46.3v-6.1c0-7.1-2.8-11-8.7-11c-6.1,0-8.7,4.3-8.7,12.1v5.1
					c0,7,1.9,12.3,8.7,12.3C696.4,58.5,698.1,53.3,698.1,46.3z"></path>
			</g>
			<g>
				<path class="st0 svg-elem-15" d="M122.5,117.2c-2.9-4.6-6.4-6.8-13.2-6.8c-6.1,0-9.4,2.8-9.4,7.4c0,5.3,4.3,7.6,13.2,9.8
					c14,3.5,20.3,8.8,20.3,20.6c0,11-7.4,19.6-23.2,19.6c-11.8,0-20-3.2-25.9-11l10.4-7.2c3.6,4.5,7.7,6.7,14.6,6.7
					c7.8,0,10.4-3.4,10.4-7.5c0-4.7-2.8-7.3-13.7-10.1c-13.2-3.5-19.9-9.8-19.9-20.9c0-10.6,7-18.9,23-18.9c10.7,0,18.8,3.6,23.6,11
					L122.5,117.2z"></path>
				<path class="st0 svg-elem-16" d="M157.1,126.4h23.3V99.8H194v67.2h-13.6v-29h-23.3v29h-13.6V99.8h13.6V126.4z"></path>
				<path class="st0 svg-elem-17" d="M222,166.9h-13.6V99.8H222V166.9z"></path>
				<path class="st0 svg-elem-18" d="M267.8,136.4l18.7-36.6h12.9v67.2h-13v-41.7l-14.6,29.6h-8.3l-14.4-29.3v41.4h-12.9V99.8h12.8L267.8,136.4z"></path>
				<path class="st0 svg-elem-19" d="M336.3,167.8c-15.1,0-25.7-9.1-25.7-29.7v-9.5c0-20.7,10.6-29.7,25.7-29.7c15.2,0,25.8,9,25.8,29.7v9.5
					C362.1,158.7,351.5,167.8,336.3,167.8z M324.2,138.1c0,12.8,4.2,18.2,12.1,18.2s12.2-5.4,12.2-18.2v-9.5c0-12.8-4.3-18.2-12.2-18.2
					s-12.1,5.4-12.1,18.2V138.1z"></path>
				<path class="st0 svg-elem-20" d="M404.9,136.4l18.7-36.6h12.9v67.2h-13v-41.7l-14.6,29.6h-8.3l-14.4-29.3v41.4h-12.9V99.8H386L404.9,136.4z"></path>
				<path class="st0 svg-elem-21" d="M501.4,99.8v39.9c0,19.9-10.9,28.1-25.8,28.1s-25.8-8.3-25.8-28v-40h13.6v40c0,11.5,3.8,16.5,12.2,16.5
					s12.2-5.1,12.2-16.5v-40H501.4z"></path>
				<path class="st0 svg-elem-22" d="M551.2,166.9l-12.1-26.4h-10.9v26.4h-13.6V99.8h24c15.5,0,25.1,6.9,25.1,20.5c0,9.1-4.2,15-11.5,18l13.9,28.6
					H551.2z M537.4,129.1c8.1,0,12.8-1.8,12.8-8.8s-4.7-9-12.8-9h-9.1v17.7H537.4z"></path>
				<path class="st0 svg-elem-23" d="M567.7,166.9L591,99.8h13l23.4,67.2h-14.5l-4.1-12.8h-22.5l-4.1,12.8H567.7z M589.9,142.7h15.2l-7.6-23.7
					L589.9,142.7z"></path>
			</g>
			<g>
				<path class="st1 svg-elem-24" d="M1.4,68.2L24.8,1h13l23.4,67.2H46.7l-4.1-12.8H20.1L16,68.2H1.4z M23.7,43.9h15.2l-7.6-23.7L23.7,43.9z"></path>
				<path class="st1 svg-elem-25" d="M103.5,60.8c-3.4,5.7-9,8.3-17.7,8.3c-13.9,0-21.7-8.8-21.7-22v-6.6c0-14.2,7.9-21.8,22.4-21.8
					c7.5,0,13.6,2.7,17,8.1l-9.3,6.5c-1.7-2.3-4.1-4.1-8-4.1c-7,0-9.7,4.3-9.7,12.1v5.1c0,7,1.8,12.3,9.7,12.3c3.7,0,6.3-1.3,8.1-4.2
					L103.5,60.8z"></path>
				<path class="st1 svg-elem-26" d="M135.6,33c-1.3-1.8-3-3.7-6.1-3.7c-4.7,0-7.8,3.4-7.8,10.2v28.6h-12.5V19.5h12.2v4.1c1.7-2.4,4.9-5,10.6-5
					c5.8,0,10.2,2.5,13.1,7.6L135.6,33z"></path>
				<path class="st1 svg-elem-27" d="M189.4,46.7c0,13.3-6.3,22.4-21,22.4c-14.1,0-21-8.8-21-22.4v-5.8c0-14.6,7.7-22.2,21-22.2
					c13.5,0,21,7.6,21,22.2V46.7z M177.1,46.3v-5.1c0-7.8-2.5-12.1-8.7-12.1c-6.1,0-8.7,4.3-8.7,12.1v5.1c0,7,1.8,12.3,8.7,12.3
					C175.2,58.5,177.1,53.3,177.1,46.3z"></path>
				<path class="st1 svg-elem-28" d="M224.4,33.2c-2.1-2.5-4.3-3.9-9.5-3.9c-3.2,0-6.1,1-6.1,3.8c0,2.9,2.6,4,7.8,4.8c12,1.8,18,6.4,18,16.1
					c0,9.3-6.5,15.1-19.1,15.1c-9.9,0-16-2.4-20.1-8.1l9.5-6.8c1.9,2.6,4.4,4.2,10.4,4.2c4.3,0,6.9-1.5,6.9-4c0-3-2.1-4-8.3-5
					c-10.1-1.7-17.5-5.9-17.5-15.8c0-9.2,6.6-15,18.8-15c8,0,14.6,1.8,18.4,8.1L224.4,33.2z"></path>
				<path class="st1 svg-elem-29" d="M269.5,33.2c-2.1-2.5-4.3-3.9-9.5-3.9c-3.2,0-6.1,1-6.1,3.8c0,2.9,2.6,4,7.8,4.8c12,1.8,18,6.4,18,16.1
					c0,9.3-6.5,15.1-19.1,15.1c-9.9,0-16-2.4-20.1-8.1l9.5-6.8c1.9,2.6,4.4,4.2,10.4,4.2c4.3,0,6.9-1.5,6.9-4c0-3-2.1-4-8.3-5
					c-10.1-1.7-17.5-5.9-17.5-15.8c0-9.2,6.6-15,18.8-15c8,0,14.6,1.8,18.4,8.1L269.5,33.2z"></path>
				<path class="st1 svg-elem-30" d="M308.8,19.5h6.2V8.8h12.4v10.7h9.5V30h-9.5v20.3c0,4.9,1,6.9,5.5,6.9h4v10.9h-5.3c-11.8,0-16.6-3.3-16.6-15.9
					V30h-6.2V19.5z"></path>
				<path class="st1 svg-elem-31" d="M344.6,1H357v22.3c1.8-2.4,5.3-4.7,10.9-4.7c9.8,0,17.8,4.7,17.8,19.1v30.5h-12.4V39.6
					c0-7.6-2.7-10.3-7.8-10.3c-5.7,0-8.6,3.8-8.6,10.2v28.6h-12.5V1z"></path>
				<path class="st1 svg-elem-32" d="M433.4,60.8c-3.4,5.9-9.1,8.3-17.8,8.3C401,69,394,59.6,394,47v-6.6c0-14.7,7.4-21.8,20.1-21.8
					c13.7,0,20.1,8,20.1,22.8v5.5h-27.7c0.1,6.7,2.2,11.6,9.1,11.6c5.2,0,6.8-1.6,8.7-4.2L433.4,60.8z M406.4,38.1h15.3
					c-0.3-6.3-2.8-9-7.5-9C409.2,29.1,406.9,32.5,406.4,38.1z"></path>
				<path class="st1 svg-elem-33" d="M491.5,68.2h-12.9L463.1,1h14.6l9,44.2L499.4,1h12.3l13.1,44.5L533.7,1h14.7l-15.5,67.2h-13l-14.2-46.2
					L491.5,68.2z"></path>
				<path class="st1 svg-elem-34" d="M594.2,46.7c0,13.3-6.3,22.4-21,22.4c-14.1,0-21-8.8-21-22.4v-5.8c0-14.6,7.7-22.2,21-22.2
					c13.5,0,21,7.6,21,22.2V46.7z M581.9,46.3v-5.1c0-7.8-2.5-12.1-8.7-12.1c-6.1,0-8.7,4.3-8.7,12.1v5.1c0,7,1.8,12.3,8.7,12.3
					C580,58.5,581.9,53.3,581.9,46.3z"></path>
				<path class="st1 svg-elem-35" d="M628.9,33c-1.3-1.8-3-3.7-6.1-3.7c-4.7,0-7.8,3.4-7.8,10.2v28.6h-12.5V19.5h12.2v4.1c1.7-2.4,4.9-5,10.6-5
					c5.8,0,10.2,2.5,13.1,7.6L628.9,33z"></path>
				<path class="st1 svg-elem-36" d="M642.4,1h12.5v48.8c0,5.3,1.6,7.7,6.8,7.7v10.7c-13.1,0-19.3-3.4-19.3-15.6V1z"></path>
				<path class="st1 svg-elem-37" d="M698.1,1h12.4v67.2h-12.4v-2.8c-2.5,2.3-5.8,3.7-10.4,3.7c-12.8,0-19.3-9.1-19.3-22v-6.6
					c0-14.2,7.7-21.8,19.3-21.8c4.2,0,7.7,1.1,10.4,3.4V1z M698.1,46.3v-6.1c0-7.1-2.8-11-8.7-11c-6.1,0-8.7,4.3-8.7,12.1v5.1
					c0,7,1.9,12.3,8.7,12.3C696.4,58.5,698.1,53.3,698.1,46.3z"></path>
			</g>
			<g>
				<path class="st1 svg-elem-38" d="M122.5,117.2c-2.9-4.6-6.4-6.8-13.2-6.8c-6.1,0-9.4,2.8-9.4,7.4c0,5.3,4.3,7.6,13.2,9.8
					c14,3.5,20.3,8.8,20.3,20.6c0,11-7.4,19.6-23.2,19.6c-11.8,0-20-3.2-25.9-11l10.4-7.2c3.6,4.5,7.7,6.7,14.6,6.7
					c7.8,0,10.4-3.4,10.4-7.5c0-4.7-2.8-7.3-13.7-10.1c-13.2-3.5-19.9-9.8-19.9-20.9c0-10.6,7-18.9,23-18.9c10.7,0,18.8,3.6,23.6,11
					L122.5,117.2z"></path>
				<path class="st1 svg-elem-39" d="M157.1,126.4h23.3V99.8H194v67.2h-13.6v-29h-23.3v29h-13.6V99.8h13.6V126.4z"></path>
				<path class="st1 svg-elem-40" d="M222,166.9h-13.6V99.8H222V166.9z"></path>
				<path class="st1 svg-elem-41" d="M267.8,136.4l18.7-36.6h12.9v67.2h-13v-41.7l-14.6,29.6h-8.3l-14.4-29.3v41.4h-12.9V99.8h12.8L267.8,136.4z"></path>
				<path class="st1 svg-elem-42" d="M336.3,167.8c-15.1,0-25.7-9.1-25.7-29.7v-9.5c0-20.7,10.6-29.7,25.7-29.7c15.2,0,25.8,9,25.8,29.7v9.5
					C362.1,158.7,351.5,167.8,336.3,167.8z M324.2,138.1c0,12.8,4.2,18.2,12.1,18.2s12.2-5.4,12.2-18.2v-9.5c0-12.8-4.3-18.2-12.2-18.2
					s-12.1,5.4-12.1,18.2V138.1z"></path>
				<path class="st1 svg-elem-43" d="M404.9,136.4l18.7-36.6h12.9v67.2h-13v-41.7l-14.6,29.6h-8.3l-14.4-29.3v41.4h-12.9V99.8H386L404.9,136.4z"></path>
				<path class="st1 svg-elem-44" d="M501.4,99.8v39.9c0,19.9-10.9,28.1-25.8,28.1s-25.8-8.3-25.8-28v-40h13.6v40c0,11.5,3.8,16.5,12.2,16.5
					s12.2-5.1,12.2-16.5v-40H501.4z"></path>
				<path class="st1 svg-elem-45" d="M551.2,166.9l-12.1-26.4h-10.9v26.4h-13.6V99.8h24c15.5,0,25.1,6.9,25.1,20.5c0,9.1-4.2,15-11.5,18l13.9,28.6
					H551.2z M537.4,129.1c8.1,0,12.8-1.8,12.8-8.8s-4.7-9-12.8-9h-9.1v17.7H537.4z"></path>
				<path class="st1 svg-elem-46" d="M567.7,166.9L591,99.8h13l23.4,67.2h-14.5l-4.1-12.8h-22.5l-4.1,12.8H567.7z M589.9,142.7h15.2l-7.6-23.7
					L589.9,142.7z"></path>
			</g>
			</svg>
		</div>
	</div>
	<header class="l-header">
		<div class="l-header__top">
			<div class="l-header__top--left leftBox">
				<h1>高品質の快削ステンレス鋼・快削鋼・工具鋼の磨き棒鋼専門メーカー</h1>
				<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/site-logo.svg" alt="下村特殊精工会社" class="alpha"></a></div>
			</div>
			<div class="l-header__top--right rightBox">
				<a href="/" class="languagelink">日本語</a><a href="/en/" class="languagelink">English</a><a href="/cn/" class="languagelinkr">中文</a>
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
							<li class="gnav__child__inner"><a href="/company/outline/?id=groupLink">大同特殊鋼グループ</a></li>
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