<?php
/*
Template Name: contact01
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="contact">
<div class="subH1">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/page_ttl_bg.jpg" class="img-responsive block-center"></div>
	<div class="copy"><h1>営業部へのお問い合わせ</h1><em>Contact US</em></div>
</div>
<div class="container contactContet">
	<?php get_breadcrumb(); ?>
    <div id="pageContents" class="col-xs-12 col-sm-12 col-md-12">
		<div class="contactIndex">
        	<h2><span>Contact Us</span>どんなことでもお気軽にお問い合わせください。</h2>
            <div id="contactBlock">
				<?php if (have_posts()): ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				<?php else: ?>
				<!-- 投稿が無い場合の処理 -->
				<?php endif; ?>
	        </div>
    </div>
</div>
</section>
</main>
<?php get_footer(); ?>