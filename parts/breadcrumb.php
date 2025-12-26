<?php
// 現在のページ情報を取得
$post = get_queried_object();
// 祖先ページのIDを取得
$ancestors = get_post_ancestors($post->ID);
if ($ancestors) {
    echo '<div class="breadcrumbs">';
    // ホーム（トップページ）へ戻るリンク
    echo '<a href="' . esc_url(home_url('/')) . '">TOP</a> ＞ ';
    // 祖先ページを逆順（親→子）で表示
    $ancestors = array_reverse($ancestors);
    foreach ($ancestors as $ancestor_id) {
        $page = get_post($ancestor_id);
        echo '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html($page->post_title) . '</a> ＞ ';
    }
    // 現在のページを表示
    echo esc_html($post->post_title);
    echo '</div>';
} else {
    // 親ページがない（トップレベル）の場合はホームのみ表示
    echo '<div class="breadcrumbs"><div class="container">';
    echo '<a href="' . esc_url(home_url('/')) . '">TOP</a> ＞ ';
    echo esc_html($post->post_title) ;
    echo '</div></div>';
}
?>