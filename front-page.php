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
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/main_09_bg.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_main_09n.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/main_09_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>
		</a>
		<div class="copyWrapper">
			<a class="slider__textArea" href="/products/leadfree/">
				<h2 class="slider__title__en">For the environment</h2>
				<h3 class="slider__title">環境にやさしい、下村の非鉛快削鋼シリーズ</h3>
				<p class="slider__text">確かな品質を保ちながら、環境にも配慮した非鉛快削鋼を開発。<br>お客様のニーズにお応えする多彩な製品をラインアップしています。</p>
				<span class="slider__block">下村の非鉛快削鋼</span>
			</a>
		</div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/global/">
			<picture>
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/main_02_bg.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_main_02n.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/main_02_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper">
			<a class="slider__textArea" href="/global/">
				<h2 class="slider__title__en">Global Network</h2>
				<h3 class="slider__title">「シモムラ品質」を世界へ。</h3>
				<p class="slider__text">国内工場と同等の生産環境を海外に構築。日本と同じ品質レベルの製品供給を実現し、<br>「シモムラ品質」の製品とサービスを、世界中のお客様にお届けしています。</p>
				<span class="slider__block">グローバルネットワーク</span>
			</a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/global-image.jpg" alt="" class="global-image">
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/company/">
			<picture>
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/main_01_bg.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_main_01n.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/main_01_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper">
			<a class="slider__textArea" href="/company/">
				<h2 class="slider__title__en">“SHIMOMURA”Across the World,<br>with High-quality and High-precision.</h2>
				<h3 class="slider__title">高精度・高品質で世界に羽ばたくシモムラブランド</h3>
				<p class="slider__text">1941年の創業以来、棒鋼の専門メーカーとして日本の「ものづくり」の発展に貢献を続けてきました。<br>品質、環境、人材、あらゆる面から一切の妥協を排し、世界No.1の特殊鋼二次加工メーカーを目指します。</p>
				<span class="slider__block">下村特殊精工について</span>
			</a>
		</div>
      </div>
      <div class="swiper-slide">
        <a class="swiper-link" href="/mono/smk/">
			<picture>
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/main_04_bg.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_main_04n.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/main_04_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper">
			<a class="slider__textArea" href="/mono/smk/">
				<h2 class="slider__title__en">SMK PROJECT</h2>
				<h3 class="slider__title">モノづくりの真価を徹底追求。</h3>
				<p class="slider__text">さらなる生産性向上・品質向上を実現させ、ブランドの価値を高めるべく発足させたSMK PROJECT（シモムラ見える化活動）。<br>モノづくりの革新を試みるPROJECTをご紹介します。</p>
				<span class="slider__block">SMK PROJECTについて</span>
			</a>
		</div>
      </div>
	  <div class="swiper-slide">
        <a class="swiper-link" href="/sustainability/">
			<picture>
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/main_05_bg.jpg" type="image/jpg">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_main_05n.jpg" type="image/jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/main_05_bg.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		</a>
		<div class="copyWrapper">
			<a class="slider__textArea" href="/sustainability/">
				<h2 class="slider__title__en">Sustainability</h2>
				<h3 class="slider__title">サステナブルな社会の実現をめざして。</h3>
				<p class="slider__text">地球社会の一員として、サステナブルな社会の実現をめざして事業活動を展開、<br>会社の持続的な成長に向けてサステナビリティ経営を推進しています。</p>
				<span class="slider__block">サステナビリティ</span>
			</a>
		</div>
		<p class="sustainability-text">下村特殊精工が環境保全活動を支援している北海道クッチャロ湖</p>
      </div>   
      <div class="swiper-slide">
        <a class="swiper-link" href="/recruit/">
			<picture>
				<source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/mainvisual.jpg" type="image/png">
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/front-page/sp_slideimage_n.jpg" type="image/png">
				<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/mainvisual.jpg" alt="" class="mainImg img-responsive mainImg">
			</picture>	
		<div class="copyWrapper">
			<a class="slider__textArea" href="/recruit/">
				<h2 class="slider__title__en">SHIMOMURA RECRUITMENT</h2>
				<h3 class="slider__title">世界のモノづくりを支える。その担い手となる。</h3>
				<p class="slider__text">世界に欠かせない特殊鋼業界における磨き棒鋼専門メーカーとして、<br>ゆるぎない評価を得ています。<br>そんな高精度・高品質なシモムラブランドの価値を共に高めていきませんか。</p>
				<span class="slider__block">採用情報</span>
			</a>
		</div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
	<div class="swiper-pagination"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper2">
    <div class="swiper-wrapper">
		<li class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/slici_nav_09.jpg" class="img-responsive alpha"><span>非鉛快削鋼シリーズ</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/slici_nav_02.jpg" class="img-responsive alpha"><span>グローバルネットワーク</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/slici_nav_01.jpg" class="img-responsive alpha"><span>下村特殊精工について</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/slici_nav_04.jpg" class="img-responsive alpha"><span>SMK PROJECT</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/slici_nav_05.jpg" class="img-responsive alpha"><span>サステナビリティ</span>
		</li>
		<li class="swiper-slide">
		<img src="<?php echo get_template_directory_uri(); ?>/images/front-page/front_image.jpg" class="img-responsive alpha"><span>採用情報</span>
		</li>
    </div>
  </div>
	<div class="container">
		
	</div>
	<div id="linkBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/ttl_linkblock.png" class="img-responsive" alt="CONTENTS"></h2>
			<div class="row flexbox">
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/company/greeting/"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/l_img_01.jpg" class="img-responsive"></a></div><div class="textBox">代表挨拶<span>Message</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/global/"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/l_img_02.jpg" class="img-responsive"></a></div><div class="textBox">グローバルネットワーク<span>Gloobal Network</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/csr/environment/"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/l_img_03.jpg" class="img-responsive"></a></div><div class="textBox">環境への取り組みについて<span>The Commitment to the Environment</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/leadfree/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/l_img_09.jpg" class="img-responsive"></a></div><div class="textBox">非鉛快削鋼シリーズ<span>Lead-free free cutting steel Series  </span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/products/catalogue/"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/l_img_05.jpg" class="img-responsive"></a></div><div class="textBox">製品カタログ<span>Product catalog</span></div></div></div>
				<div class="col-xs-6 col-sm-4 col-md-4"><div class="box"><div class="imgBox"><a href="/recruit/ourwork/"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/contents_Interview.jpg" class="img-responsive"></a></div><div class="textBox">社員紹介<span>Interview</span></div></div></div>
			</div>
		</div>
	</div>

	<div class="p-infoBlock">
		<div class="container">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/ttl_topics.png" class="img-responsive" alt="INFOMATION"><a href="/information/">INFORMATION一覧を見る</a></h2>
			<div class="infoBox" id="infomationBlock">
					<?php
						$args = array(
							'post_type' => array('post'),
							'posts_per_page' => 6,
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