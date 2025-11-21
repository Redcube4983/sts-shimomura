<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<section id="topContent">
	<!--liの順序の入替え -->
	<ul class="sliderMain">
		<li>
			<a href="/products/leadfree.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_09_bg.jpg" class="mainImg img-responsive mainImg"></a>
			<div class="copyWrapper"><a href="/products/leadfree.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_09_copy.png" class="img-responsive alpha"></a></div>
		</li>
		<li>
			<a href="/company/characterprofile.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_07_bg_80ver.jpg" class="mainImg img-responsive mainImg"></a>
			<div class="copyWrapper"><a href="/company/characterprofile.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_07_copy.png" class="img-responsive alpha"></a></div>
		</li>
		<li>
			<a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_01_bg.jpg" class="mainImg img-responsive mainImg"></a>
			<div class="copyWrapper"><a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_01_copy.png" class="img-responsive alpha"></a></div>
		</li>
		<li>
			<a href="/mono/smk.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_04_bg.jpg" class="mainImg img-responsive mainImg"></a>
			<div class="copyWrapper"><a href="/mono/smk.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_04_copy.png" class="img-responsive alpha"></a></div>
		</li>
		<li>
			<a href="//kenja.jp/8144_20180724" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_08_bg.png" class="mainImg img-responsive mainImg"></a>
			<!--div class="copyWrapper"><a href="/mono/quality.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_03_copy.png" class="img-responsive alpha"></a></div-->
		</li>
		<li>
			<a href="/recruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/mainvisual.jpg" class="mainImg img-responsive mainImg"></a>
			<div class="copyWrapper"><a href="/recruit/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_05_copy.png" class="img-responsive alpha"></a></div>
		</li>
	</ul>

	<div class="spMain">
		<!-- divの順序の入替え -->
		<div><a href="/products/leadfree.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_09.jpg" class="img-responsive"></a></div>
		<div><a href="/company/characterprofile.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_07.jpg" class="img-responsive"></a></div>
		<div><a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_01.jpg" class="img-responsive"></a></div>
		<div><a href="/mono/smk.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_04.jpg" class="img-responsive"></a></div>
		<div><a href="//kenja.jp/8144_20180724" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_08.png" class="img-responsive"></a></div>
		<div><a href="/recruit/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_slideimage.jpg" class="img-responsive"></a></div>
		<!--<div><a href="/mono/process.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_02.jpg" class="img-responsive"></a></div>-->
		<!--div><a href="/mono/quality.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_03.jpg" class="img-responsive"></a></div-->
	</div>

	<div class="container">
		<div class="slider sliderNav">
			<!-- div自体の順序の入替え、data-slide-indexの付け替え 最初のdivのcssをstyleで定義-->
			<div class="thumb">
				<div class="box">
					<a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_09.jpg" class="img-responsive alpha"><span>非鉛快削鋼シリーズ</span></a>
				</div>
			</div>
			<div class="thumb">
				<div class="box">
					<a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_07_80ver.jpg" class="img-responsive alpha"><span>創業８０周年</span></a>
				</div>
			</div>
			<div class="thumb">
					<a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_01.jpg" class="img-responsive alpha"><span>下村特殊精工について</span></a>
				</div>
			<div class="thumb">
				<div class="box">
					<a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_04.jpg" class="img-responsive alpha"><span>SMK PROJECT</span></a>
				</div>
			</div>
			<div class="thumb">
				<div class="box">
					<a data-slide-index="4" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_08.png" class="img-responsive alpha"><span>賢者の選択&nbsp;Leaders</span></a>
				</div>
			</div>
			<div class="thumb">
				<div class="box">
					<a data-slide-index="5" href=""><img src="<?php echo get_template_directory_uri(); ?>/common/images/front_image.jpg" class="img-responsive alpha"><span>採用情報</span></a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div id="linkBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/common/images/ttl_linkblock.png" class="img-responsive"></h2>
			<div class="row flexbox">
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/company/greeting.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_01.jpg" class="img-responsive"></a></div><div class="textBox">代表挨拶<span>Message</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/global/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_02.jpg" class="img-responsive"></a></div><div class="textBox">グローバルネットワーク<span>Gloobal Network</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/csr/environment.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_03.jpg" class="img-responsive"></a></div><div class="textBox">環境への取り組みについて<span>The Commitment to the Environment</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/leadfree.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_09.jpg" class="img-responsive"></a></div><div class="textBox">非鉛快削鋼シリーズ<span>Lead-free free cutting steel Series  </span></div></div></div>
				<!--div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/mono/smk.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_04.jpg" class="img-responsive"></a></div><div class="textBox">SMK PROJECT<span>SMK Project</span></div></div></div-->
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/catalogue.html"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_05.jpg" class="img-responsive"></a></div><div class="textBox">製品カタログ<span>Product catalog</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/recruit/ourwork/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/contents_Interview.jpg" class="img-responsive"></a></div><div class="textBox">社員紹介<span>Interview</span></div></div></div>
			</div>
		</div>
	</div>

	<div id="infoBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/common/images/ttl_topics.png" class="img-responsive"><a href="/information/">INFORMATION一覧を見る</a><div class="clearfix"></div></h2>
			<div class="infoBox" id="infomationBlock">
				<div class="row box">
					<div class="col-xs-12 col-sm-1 col-md-1"><div class="icon topics">トピックス</div></div>
					<div class="col-xs-10 col-sm-11 col-md-11"><span>2016.03</span>ホームページリニューアル</div>
				</div>
				<div class="row box">
					<div class="col-xs-12 col-sm-1 col-md-1"><div class="icon news">ニュース</div></div>
					<div class="col-xs-10 col-sm-11 col-md-11"><span>2016.03</span>下村特殊精工は2016年6月に創業75周年を迎えます</div>
				</div>
				<div class="row box">
					<div class="col-xs-12 col-sm-1 col-md-1"><div class="icon topics">トピックス</div></div>
				<div class="col-xs-10 col-sm-11 col-md-11"><span>2015.12</span>太陽光発電を松尾工場に導入</div>
				</div>
				<div class="row box">
					<div class="col-xs-12 col-sm-1 col-md-1"><div class="icon topics">トピックス</div></div>
					<div class="col-xs-10 col-sm-11 col-md-11"><span>2015.10</span>下村特殊精鋼（蘇州）有限公司にてTS16949認証を取得</div>
				</div>
			</div>
		</div>

		<script src="<?php echo get_template_directory_uri(); ?>/infodata.json"></script>
		<script language="javascript">
			<!--//
			$(function(){
				var cnt = 4; //出力件数制御
				var output = '';
				var infoNum = Object.keys(infoJSON).length;
				for( i = infoNum; i > infoNum - cnt && i > 0; i-- ){
					if( infoJSON[i].link == '' ){
						output = output + '<div class="row box"><div class="col-xs-12 col-sm-1 col-md-1"><div class="icon ' + infoJSON[i].class + '">' + infoJSON[i].subtitle
							+ '</div></div><div class="col-xs-10 col-sm-11 col-md-11"><span>' + infoJSON[i].date + '</span>' + infoJSON[i].explain + "</div></div>\n";
					} else {
						output = output + '<div class="row box"><div class="col-xs-12 col-sm-1 col-md-1"><div class="icon ' + infoJSON[i].class + '">' + infoJSON[i].subtitle
							+ '</div></div><div class="col-xs-10 col-sm-11 col-md-11"><span>' + infoJSON[i].date + '</span><a href="' + infoJSON[i].link + '" style="margin-left: 0px !important;">' + infoJSON[i].explain + "</a></div></div>\n";
					}
				}
				$('#infomationBlock').html(output);
			});
			//-->
		</script>
	</div>
</section>
<?php get_footer(); ?>