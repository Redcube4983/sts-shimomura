<?php
/*
Template Name: page-environment
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="company indexPage">
	<div class="indexH1">
		<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/environment/ttl_bg.jpg" class="img-responsive block-center"></div>
		<div class="copy"><h1>環境への取り組み</h1><em>Environmental Initiatives</em></div>
		<!--[php file='breadcrumb']-->
         <?php get_breadcrumb(); ?>
	</div>

	<div class="container">
		<div class="row">
            <?php get_LocalNaviPc(); ?>
			<div id="pageContents" class="col-xs-12 col-sm-9 col-md-9">
				<div class="wrapper sustainability">
					<div class="leadBox">
						<h2>全ての生産活動を通じてカーボンニュートラル実現へ</h2>
					</div>
					<div class="copyBox">
						<p>当社は、全ての生産活動と製品及びサービスが及ぼす環境への影響を重要課題として、環境マネジメントに取り組んでいます。省エネルギー、資源の有効活用やリサイクル化、環境に優しい製品の開発などを通じて、2030年に2013年対比50％のCO<small>2</small>削減目標を設定。2050年に向けたカーボンニュートラルを前倒しで達成することをめざしています。</p>
					</div>
                    <section class="blueBgArea">
                        <h3>品質環境方針</h3>
                        <h4>理念</h4>
                        <ul class="listStyle">
                            <li class="listStyleSquare">当社は環境問題が人類共通の重要課題であることを認識し、環境との調和をスローガンに、地球環境の保全と社会への貢献を目指して活動する。</li>
                            <li class="listStyleSquare">当社は品質重視を第一とした技術の研鑽を行うとともに、常にお客様目線で品質の造り込みとサービスの向上に向けて活動を行う。</li>
                        </ul>
						<h4>方針</h4>
						<p>当社の生産活動、製品およびサービスが及ぼす環境影響に対して適切に対処するとともに、顧客満足度(CS)を高めるために以下の方針に基づきマネジメントを行う。</p>
						<ol class="listStyle">
                            <li class="listStyleNumber">環境関連の法律、条例等を順守するとともに、マネジメントシステムの継続的改善と汚染の予防を図る。</li>
                            <li class="listStyleNumber">節電・省エネルギーの推進と資源の有効活用のため、3R(リユース、リデュース、リサイクル)の推進を図る。</li>
							<li class="listStyleNumber">資材を含め規制物質不使用の調達管理を行い、製品からの地球環境汚染の防止を図る。</li>
							<li class="listStyleNumber">お客様に信頼される製品の提供とサービスの充実を図るため、継続的な品質改善と高付加価値製品の開発を行う。</li>
							<li class="listStyleNumber">継続的な人材育成と品質保証機器の充実および品質保証精度の向上を行うとと　もに品質造り込み技術の向上を図る。</li>
						</ol>
						<p class="signature">下村特殊精工株式会社<p>
                    </section>
			</div>
		</div>
	</div>
</section>
<?php get_LocalNaviSp(); ?>
<!--[php file='LocalNaviSp']-->
</main>
<?php get_footer(); ?>