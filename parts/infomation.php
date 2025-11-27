<?php
	$args = array(
		'post_type' => array('post'),
		'posts_per_page' => -1,
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
			<time><?php the_date('Y.M'); ?></time><a href="<?php the_field('pdf');?>" target="_blank"><?php the_title(); ?></a>
		<?php else: ?>
			<time><?php the_date('Y.M'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endif; ?>
	</div>
</div>
	<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>