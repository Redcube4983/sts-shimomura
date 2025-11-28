<?php
/*
Template Name: archive
*/
?>
<?php get_header(); ?>
 <?php
    // カテゴリーのデータを取得
    $cat = get_the_category();
    $cat = $cat[0];
    $slug = $cat->slug;
?>
<main>
<section id="pages" class="information indexPage">
<h1 class="indexH1">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/information/ttl_bg.jpg" class="img-responsive block-center"></div>
	<div class="copy">インフォメーション<em>Information</em></div>
	<div class="breadcrumbs"><div class="container"><a href="/">TOP</a> &gt; <a href="/infomation/">インフォメーション</a> &gt; <?php echo $cat->cat_name; ?></div>
</h1>
<div class="container infoContent">
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
			<h2><span><?php echo $cat->slug; ?></span><?php echo $cat->cat_name; ?>一覧</h2>
			<div class="p-infoBlock">
				<div class="container">
					<div class="infoBox" id="infomationBlock">	
                    <?php
                        $args = array(
                            'post_type' => array('post'),
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'category_name' => $slug ,
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