<?php
/*
Template Name: page-society
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="company indexPage">
	<div class="indexH1">
		<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/society/ttl_bg.jpg" class="img-responsive block-center"></div>
		<div class="copy"><h1>社会への取り組</h1><em>Social Initiatives</em></div>
		<!--[php file='breadcrumb']-->
         <?php get_breadcrumb(); ?>
	</div>

	<div class="container">
		<div class="row">
            <?php get_LocalNaviPc(); ?>
			<div id="pageContents" class="col-xs-12 col-sm-9 col-md-9">
				<div class="wrapper sustainability">
					<div class="leadBox">
						<h2>多様な人財をつくり、地域社会との共創をめざして</h2>
					</div>
					<div class="copyBox">
						<p>「人財（社員）は会社の宝」だという理念のもと、当社は多様な人財がいきいきと働き、成長できる環境づくりに取り組んでいます。そして、社員一人ひとりが創造的な活動をすることで、地域社会に貢献し、信頼される「良き企業市民」をめざしています。</p>
					</div>
                    <section class="contentsArea">
                        <h3>地域社会と共に</h3>
                    </section>
			</div>
		</div>
	</div>
</section>
<?php get_LocalNaviSp(); ?>
<!--[php file='LocalNaviSp']-->
</main>
<?php get_footer(); ?>