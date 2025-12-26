<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* テーマ側でタイトルまわりを修正 */
add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
} );

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
/* 投稿内のPDFを相対パスに */
function pdfpassshort($arg)
{
  $content = str_replace('"pdf/', '"' . get_bloginfo('template_directory') . '/pdf/', $arg);
  return $content;
}
add_action('the_content', 'pdfpassshort');


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
function get_infomation() {
	get_template_part('parts/infomation');
}
function get_LocalNavi() {
	get_template_part('parts/LocalNavi');
}
function get_breadcrumb() {
	get_template_part('parts/breadcrumb');
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* 同日投稿の日付を表示*/
function same_date() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'same_date' );



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* MW_WP_Form Pタグ消去*/
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* MW_WP_Form バリデーション*/

//全てのフォームにバリデーションを適用する為にフォームを取得
add_action( 'init', function() {
	global $wpdb;

	// MW WP Form の投稿タイプを取得（通常は 'mw-wp-form'）
	$forms = get_posts([
		'post_type' => 'mw-wp-form',
		'post_status' => 'publish',
		'numberposts' => -1,
	]);

	foreach ( $forms as $form ) {
		$hook = 'mwform_validation_mw-wp-form-' . $form->ID;

		add_filter( $hook, 'my_exam_validation_rule', 10, 3 );
	}
});
function my_exam_validation_rule( $Validation, $data, $Data ) {

	// フォームキー → ID（例: "mw-wp-form-17" → 17）
	$form_key = $Data->get_form_key();
	$form_id = (int) str_replace('mw-wp-form-', '', $form_key);

	// フォームの投稿情報を取得
	$form_post = get_post($form_id);
	if ( ! $form_post || $form_post->post_type !== 'mw-wp-form' ) {
		return $Validation;
	}

	// タイトルで分岐（idで上手く行かない）
	$title = $form_post->post_title;
	if ( $title === '本社営業部へのお問い合わせ' ) {
	// ラベル一覧（name属性 → 日本語名）
	$labels = [
    	'company'           => '会社団体名・部署名',
		'name_sei'           => '姓',
		'name_mei'           => '名',
		'kana_sei'      => 'セイ',
		'kana_mei'      => 'メイ',	
    	'select_year'	=> '年',
		'select_month'	=> '月',
		'select_day'	=> '日',
    	'address_zip'     => '郵便番号',
		'address_prefecture'     => '都道府県',
		'address_city'     => '市区町村',
		'address_street'     => '番地',
		'mail'               => 'メールアドレス',
		'mail_check'         => 'メールアドレス確認用',
		'tel'                => '電話番号',
    	'request'                => 'お問い合わせ内容',
	];
	$required = [
    	'company',
		'name_sei',
		'name_mei',
		'kana_sei',
		'kana_mei',
		'select_year',
		'select_month',
		'select_day',
		'address_zip',
		'address_prefecture',
		'address_city',
   		'address_street',
		'mail',
		'mail_check',
		'tel',
    	'request',
	];
	}
  if ( $title === '工場業務部へのお問い合わせ' ) {
	// ラベル一覧（name属性 → 日本語名）
	$labels = [
    	'company'           => '会社団体名・部署名',
		'name_sei'           => '姓',
		'name_mei'           => '名',
		'kana_sei'      => 'セイ',
		'kana_mei'      => 'メイ',	
    	'select_year'	=> '年',
		'select_month'	=> '月',
		'select_day'	=> '日',
    	'address_zip'     => '郵便番号',
		'address_prefecture'     => '都道府県',
		'address_city'     => '市区町村',
		'address_street'     => '番地',
		'mail'               => 'メールアドレス',
		'mail_check'         => 'メールアドレス確認用',
		'tel'                => '電話番号',
    	'request'                => 'お問い合わせ内容',
	];
	$required = [
    	'company',
		'name_sei',
		'name_mei',
		'kana_sei',
		'kana_mei',
		'select_year',
		'select_month',
		'select_day',
		'address_zip',
		'address_prefecture',
		'address_city',
    	'address_street',
		'mail',
		'mail_check',
		'tel',
    	'request',
	];
	}

	foreach ( $required as $key ) {
		$label = $labels[$key];
		if ( $key === 'select_year' ) {
			$message = "「{$label}」は必須項目です。選択してください。";
		}else if ( $key === 'select_month' ) {
			$message = "「{$label}」は必須項目です。選択してください。";
		}else if ( $key === 'select_day' ) {
			$message = "「{$label}」は必須項目です。選択してください。";
		}else if ( $key === 'address_prefecture' ) {
			$message = "「{$label}」は必須項目です。選択してください。";
		}else {
			$message = "「{$label}」は必須項目です。入力してください。";
		}
		$Validation->set_rule( $key, 'noEmpty', [
			'message' => $message
		] );
	}

	// メール形式
	$Validation->set_rule( 'mail', 'mail', [
		'message' => 'メールアドレスの書式に誤りがあります。正しく入力してください。'
	] );

	// メール一致（equal_to: mail）
	$Validation->set_rule( 'mail_check', 'eq', [
		'target' => 'mail',
		'message'  => 'メールアドレスが一致しません。'
	] );

	// 電話番号形式（例：03-1234-5678）
	$Validation->set_rule( 'tel', 'tel', [
		'message' => '電話番号の形式が正しくありません（例：03-1234-5678）。'
	] );

	return $Validation;
}