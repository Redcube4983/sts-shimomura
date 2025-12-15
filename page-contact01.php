<?php
/*
Template Name: contact01
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="contact">
<h1 class="subH1">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/page_ttl_bg.jpg" class="img-responsive block-center"></div>
	<div class="copy">本社営業部へのお問い合わせ<em>Contact US</em></div>
</h1>
<div class="container contactContet">
	<div class="breadcrumbs"><div class="container"><a href="/">TOP</a> > <a href="/contact/">お問い合わせ</a> > 本社営業部へのお問い合わせ</div></div>
    <div id="pageContents" class="col-xs-12 col-sm-12 col-md-12">
		<div class="contactIndex">
        	<h2><span>Contact Us</span>どんなことでもお気軽にお問い合わせください。</h2>
            <div id="contactBlock">
                <?php echo do_shortcode('[mwform_formkey key="258"]'); ?>
	        </div>
    </div>
</div>
</section>
</main>
<?php get_footer(); ?>