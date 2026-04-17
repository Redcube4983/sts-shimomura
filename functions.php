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
function get_LocalNaviPc() {
	get_template_part('parts/LocalNaviPc');
}
function get_LocalNaviSp() {
	get_template_part('parts/LocalNaviSp');
}
function get_breadcrumb() {
	get_template_part('parts/breadcrumb');
}
function get_CompanyProfile() {
	get_template_part('parts/CompanyProfile');
}
function get_history() {
	get_template_part('parts/history');
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

/* MW WP Form バリデーション */

// ==============================
// カスタム関数（外出し）
// ==============================

// 全角カタカナチェック
function mw_validate_kana( $value ) {
    $value = str_replace(array(" ", "　"), "", $value);
    if ( $value === '' ) return true;

    return preg_match("/^[ァ-ヶー]+$/u", $value);
}

// 全角チェック（半角禁止）
function mw_validate_fullwidth( $value ) {
    if ( $value === '' ) return true;

    return preg_match('/^[^ -~｡-ﾟ]+$/u', $value);
}


// ==============================
// メインバリデーション
// ==============================
function my_custom_validation( $Validation, $data ) {

    // ラベル定義
    $labels = [
        'company'    => '会社団体名・部署名',
        'name_sei'   => '姓',
        'name_mei'   => '名',
        'kana_sei'   => 'セイ',
        'kana_mei'   => 'メイ',  
        'naiyou'     => 'お問い合わせの項目',
        'request'    => 'お問い合わせ内容',
        'privacy'    => '個人情報保護方針への同意',
        'tel'        => '電話番号',
        'mail'       => 'メールアドレス',
        'mail_local' => 'メールアドレス(確認用) ローカル部',
        'mail_domain'=> 'メールアドレス(確認用) ドメイン部',
    ];

    // 入力必須
    $required = [
        'company','name_sei','name_mei',
        'kana_sei','kana_mei',
        'request','mail','mail_local','mail_domain',
    ];

    // 選択必須
    $requiredSelect = [
        'naiyou','privacy',
    ];

    // ==============================
    // 必須チェック
    // ==============================
    foreach ( $required as $key ) {
        if ( isset($labels[$key]) ) {
            $Validation->set_rule( $key, 'noempty', [
                'message' => '「'. $labels[$key] . '」は必須項目です。入力してください。'
            ] );
        }
    }

    foreach ( $requiredSelect as $key ) {
        if ( isset($labels[$key]) ) {
            $Validation->set_rule( $key, 'required', [
                'message' => '「'.$labels[$key] . '」は必須項目です。選択してください。'
            ] );
        }
    }

    // ==============================
    // 形式チェック
    // ==============================

    // 電話番号
    $Validation->set_rule( 'tel', 'tel', [
        'message' => '「'.$labels['tel'] . '」の書式に誤りがあります。'
    ] );

    // メール形式
    $Validation->set_rule( 'mail', 'mail', [
        'message' => '「'.$labels['mail'] . '」の書式に誤りがあります。'
    ] );

    // ==============================
    // カナ（※これだけで半角も排除される）
    // ==============================
    foreach ( ['kana_sei','kana_mei'] as $field ) {
        $Validation->set_rule( $field, 'callback', [
            'function' => 'mw_validate_kana',
            'message'  => '「' . $labels[$field] . '」は全角カタカナで入力してください。'
        ] );
    }

    // ==============================
    // 名前（全角のみ）
    // ==============================
    foreach ( ['name_sei','name_mei'] as $field ) {
        $Validation->set_rule( $field, 'callback', [
            'function' => 'mw_validate_fullwidth',
            'message'  => '「' . $labels[$field] . '」は全角で入力してください。'
        ] );
    }

    // ==============================
    // メール一致チェック
    // ==============================
    $input_mail  = isset($data['mail'])        ? trim($data['mail'])        : '';
    $mail_local  = isset($data['mail_local'])  ? trim($data['mail_local'])  : '';
    $mail_domain = isset($data['mail_domain']) ? trim($data['mail_domain']) : '';

    if ( $input_mail && $mail_local && $mail_domain ) {
        if ( $input_mail !== ($mail_local . '@' . $mail_domain) ) {
            $Validation->set_rule( 'mail', 'mail_mismatch', [
                'message' => '「メールアドレス」が一致しません。'
            ] );
        }
    }

    return $Validation;
}


// ==============================
// フック（フォームID）
// ==============================
add_filter( 'mwform_validation_mw-wp-form-258', 'my_custom_validation', 10, 2 );
add_filter( 'mwform_validation_mw-wp-form-315', 'my_custom_validation', 10, 2 );
