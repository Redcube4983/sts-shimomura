<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
<main>
<section id="topContent">
	<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper p-swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
		<a class="swiper-link" href="/products/leadfree/">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_09.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/main_09_bg.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/main_09_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>
		</a>
		<div class="copyWrapper"><a href="/products/leadfree/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_09_copy.png" class="img-responsive alpha"></a></div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/company/characterprofile/">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_07.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/main_07_bg_80ver.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/main_07_bg_80ver.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper"><a href="/company/characterprofile/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_07_copy.png" class="img-responsive alpha"></a></div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/company/">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_01.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/main_01_bg.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/main_01_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper"><a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_01_copy.png" class="img-responsive alpha"></a></div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/mono/smk/">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_04.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/main_04_bg.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/main_04_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper"><a href="/mono/smk/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_04_copy.png" class="img-responsive alpha"></a></div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="//kenja.jp/8144_20180724" target="_blank">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_main_08.png" type="image/png">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/main_08_bg.png" type="image/png">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/main_08_bg.png" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/recruit/">
			<picture>
				<source media="(max-width: 919px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sp_slideimage.jpg" type="image/png">
				<source srcset="<?php echo get_template_directory_uri(); ?>/common/images/mainvisual.jpg" type="image/png">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/mainvisual.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		<div class="copyWrapper"><a href="/recruit/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/main_05_copy.png" class="img-responsive alpha"></a></div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
	<div class="swiper-pagination"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper2">
    <div class="swiper-wrapper">
		<li class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_09.jpg" class="img-responsive alpha"><span>非鉛快削鋼シリーズ</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_07_80ver.jpg" class="img-responsive alpha"><span>創業８０周年</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_01.jpg" class="img-responsive alpha"><span>下村特殊精工について</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_04.jpg" class="img-responsive alpha"><span>SMK PROJECT</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/slici_nav_08.png" class="img-responsive alpha"><span>賢者の選択&nbsp;Leaders</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/front_image.jpg" class="img-responsive alpha"><span>採用情報</span>
		</li>
    </div>
  </div>
	<div class="container">
		
	</div>
	<div id="linkBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/common/images/ttl_linkblock.png" class="img-responsive"></h2>
			<div class="row flexbox">
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/company/greeting/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_01.jpg" class="img-responsive"></a></div><div class="textBox">代表挨拶<span>Message</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/global/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_02.jpg" class="img-responsive"></a></div><div class="textBox">グローバルネットワーク<span>Gloobal Network</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/csr/environment/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_03.jpg" class="img-responsive"></a></div><div class="textBox">環境への取り組みについて<span>The Commitment to the Environment</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/leadfree/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_09.jpg" class="img-responsive"></a></div><div class="textBox">非鉛快削鋼シリーズ<span>Lead-free free cutting steel Series  </span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/catalogue/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/l_img_05.jpg" class="img-responsive"></a></div><div class="textBox">製品カタログ<span>Product catalog</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/recruit/ourwork/"><img src="<?php echo get_template_directory_uri(); ?>/common/images/contents_Interview.jpg" class="img-responsive"></a></div><div class="textBox">社員紹介<span>Interview</span></div></div></div>
			</div>
		</div>
	</div>

	<div class="p-infoBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/common/images/ttl_topics.png" class="img-responsive"><a href="/information/">INFORMATION一覧を見る</a></h2>
			<div class="infoBox" id="infomationBlock">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
						);
						$news_query = new WP_Query($args);
					?>
					<?php if ($news_query->have_posts()) : ?>
					<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
					<?php
						// カテゴリーのデータを取得
						$cat = get_the_category();
						$cat = $cat[0];
					?>
					<div class="p-infoBlock__box">
						<div class="p-infoBlock__top"><a class="icon <?php echo $cat->slug; ?> p-news__cat" href="/category/<?php echo $cat->category_nicename; ?>"><?php echo $cat->cat_name; ?></a></div>
						<div class="p-infoBlock__bottom">
							<?php if( get_field('pdf') ):?>
								<time><?php the_date('Y.m'); ?></time><a href="<?php the_field('pdf');?>" target="_blank"><?php the_title(); ?></a>
							<?php else: ?>
								<time><?php the_date('Y.m'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php endif; ?>
						</div>
					</div>
						<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else: ?>
					<!-- 投稿が無い場合の処理 -->
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>