<?php if (is_page(array('company','greeting','outline','history','location','ethic','quality','iso','characterprofile'))) : ?>
<h2><a href="/company/">会社案内</a></h2>
<ul class="sideMenu">
	<li><a href="/company/greeting/">代表挨拶</a></li>
	<li><a href="/company/outline/">会社概要</a></li>
	<li><a href="/company/history/">沿革</a></li>
	<li><a href="/company/location/">国内事業所及び海外拠点</a></li>
	<li><a href="/company/ethic/">企業倫理憲章</a></li>
	<li><a href="/company/quality/">品質環境方針</a></li>
	<li><a href="/company/iso/">ISOの取得について</a></li>
	<li><a href="/company/characterprofile/">マスコットキャラクター</a></li>
	<li><a href="/company/outline/?id=groupLink">大同特殊鋼グループ</a></li>
</ul>
<?php elseif (is_page(array('products','stainless','structual','tool','leadfree','bis','residual-stress','brand','specification','stock','simulation','catalogue'))) : ?>
<h2><a href="/products/">製品紹介</a></h2>
<ul class="sideMenu">
	<li><a href="/products/stainless/">ステンレス鋼</a></li>
	<li><a href="/products/structual/">快削鋼および合金鋼</a></li>
	<li><a href="/products/tool/">工具鋼</a></li>
	<li><a href="/products/leadfree/">非鉛快削鋼シリーズ</a></li>
	<li><a href="/products/bis/">インド向BISライセンス取得</a></li>
	<li><a href="/products/residual-stress/">「残留応力」低減磨棒のご提供</a></li>
	<li><a href="/products/brand/">各種取扱い鋼種と各法規制</a></li>
	<li><a href="/products/specification/">製品規格</a></li>
	<li><a href="/products/stock/">在庫一覧</a></li>
	<li><a href="/products/simulation/">鋼種シミュレーション</a></li>
	<li><a href="/products/catalogue/">製品カタログ</a></li>
</ul>
<?php elseif (is_page(array('mono','material','process','quality-control','smk','sss'))) : ?>
<h2><a href="/mono/">シモムラのこだわり</a></h2>
<ul class="sideMenu">
	<li><a href="/mono/material/">素材・サービス</a></li>
	<li><a href="/mono/process/">製造・生産</a></li>
	<li><a href="/mono/quality-control/">品質管理体制</a></li>
	<li><a href="/mono/smk/">SMK Project</a></li>
	<li><a href="/mono/sss/">シモムラ安全教室</a></li>
</ul>
<?php elseif (is_page('global')) : ?>
<h2><a href="/global/">グローバルネットワーク</a></h2>
<ul class="sideMenu">
	<li><a href="/global/">「シモムラ品質」を世界へ</a></li>
</ul>
<?php else: ?>
<?php endif; ?>