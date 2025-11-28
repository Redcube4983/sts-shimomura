<?php
/*
Template Name: single
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="information">
<h1 class="indexH1">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/information/page_ttl_bg.jpg" class="img-responsive block-center"></div>
	<div class="copy">インフォメーション<em>Information</em></div>
</h1>
<div class="container">
<div class="breadcrumbs"><div class="container"><a href="/">TOP</a> &gt; 
    <a href="/infomation/">インフォメーション</a> &gt; <?php the_title(); ?></div>
    </div>
<div class="row">
	<div id="sideBar" class="col-xs-12 col-sm-3 col-md-3">
    	<div class="wrapper">
        	<h2><a href="/information/">インフォメーション</a></h2>
            <ul class="sideMenu">
                <?php  wp_list_categories('title_li=&show_count=0');?>
            </ul>
        </div>
    </div>
    <div id="pageContents" class="col-xs-12 col-sm-9 col-md-9">
		<div class="wrapper informationIndex">
			<h1><?php the_title(); ?></h1>
			<div class="p-infoBlock">
				<div class="container">
					<div class="infoBox" id="infomationBlock">	
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <time><?php the_date('Y.m.d'); ?></time>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <!-- 投稿が無い場合の処理 -->
                    <?php endif; ?>
			    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div id="spLocalNav">
    <h2><a href="/information/">インフォメーション</a></h2>
    <ul class="sideMenu">
        <?php  wp_list_categories('title_li=&show_count=0');?>
    </ul>
</div>
</main>
<?php get_footer(); ?>