<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<main>
<section id="pages" class="contact indexPage">
<div class="indexH1">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/ttl_bg.jpg" class="img-responsive block-center"></div>
	<div class="copy"><h1>お問い合わせ</h1><em>Contact US</em></div>
	<?php get_breadcrumb(); ?>
</div>
<div class="container contactContet">
<div class="row">
    <div id="pageContents" class="col-xs-12 col-sm-12 col-md-12">
		<div class="wrapper contactIndex">
        	<h2><span>Contact Us</span>どんなことでもお気軽にお問い合わせください。</h2>
            <div id="contactBlock">
                <div class="">
                    <div class="contactBox">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th colspan="3">下村特殊精工株式会社</th>
                        </tr>
                        <tr>
                          <td class="name">本社営業部</td>
                          <td nowrap class="form"><a href="/contact01/">お問い合わせフォーム</a></td>
                          <td nowrap class="number">TEL <strong>047-321-3821</strong></td>
                        </tr>
                        <tr>
                          <td class="name">工場業務部</td>
                          <td nowrap class="form"><a href="/contact02/">お問い合わせフォーム</a></td>
                          <td nowrap class="number">TEL <strong>0479-80-7210</strong></td>
                        </tr>
                      </tbody>
					          </table>
					<div class="commentBlock">
                   	  <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/tel.png">他の事業部へ電話にてお問い合わせの方は<a href="/company/location/">こちら</a></div>
                    	<div class="box"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/web.png">弊社はＷebにて見積りが出来ます。ご希望の方は<a href="/company/location/"></a><a href="https://shimomuranet.daido.co.jp/ASP/GMWPA060.asp" target="_blank">こちら</a><a href="/company/location/"></a></div>
                    </div>
                    </div>
                </div>
            </div>
            
		</div>
    </div>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>