<?php
$post = get_queried_object();
$ancestors = get_post_ancestors($post->ID);

// sustainability ページID
$sustainability = get_page_by_path('sustainability');
$sustainability_id = $sustainability ? $sustainability->ID : 0;

// container を使うか
$use_container = false;

// ① TOPレベルページ
if ( empty($ancestors) ) {
	$use_container = true;
}

// ② sustainability 配下（自身含む）
if ( $sustainability_id && ( is_page('sustainability') || in_array($sustainability_id, $ancestors) ) ) {
	$use_container = true;
}

// breadcrumbs 開始
if ( $use_container ) {
	echo '<div class="breadcrumbs"><div class="container">';
} else {
	echo '<div class="breadcrumbs">';
}

// ===== パンくず本体 =====
echo '<a href="' . esc_url(home_url('/')) . '">TOP</a> ＞ ';

if ($ancestors) {

	$ancestors = array_reverse($ancestors);
	foreach ($ancestors as $ancestor_id) {
		$page = get_post($ancestor_id);
		echo '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html($page->post_title) . '</a> ＞ ';
	}

	echo esc_html($post->post_title);

} else {

	echo esc_html($post->post_title);
}

// 閉じ
if ( $use_container ) {
	echo '</div></div>';
} else {
	echo '</div>';
}
?>
