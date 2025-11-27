<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* 投稿内の画像を相対パスに */
function delete_domain_from_attachment_url($url)
{
  if (preg_match('/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match)) {
    $url = $match[2];
  }
  return $url;
}
add_filter('wp_get_attachment_url', 'delete_domain_from_attachment_url');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* 投稿内の画像を相対パスに */
function imagepassshort($arg)
{
  $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
  return $content;
}
add_action('the_content', 'imagepassshort');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* 固定ページでショートコードを利用 */
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
 
    include(get_stylesheet_directory() . "/parts/$file.php");
    return ob_get_clean();
}
add_shortcode('php', 'Include_my_php');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* テンプレ呼び出し関数*/
function get_contact() {
	get_template_part('parts/infomation');
  get_template_part('parts/company');
}