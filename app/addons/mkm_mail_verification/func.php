<?php
/*
* © 2020 CS-Cart.ie
* 
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  
* IN  THE "LICENSE.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE. 
* 
 * @website: www.cs-cart.ie
*  
*/

if ( !defined('BOOTSTRAP') ) { die('Access denied'); }

use Tygh\Registry;

//fn_set_hook('update_user_pre', $user_id, $user_data, $auth, $ship_to_another, $notify_user);
function fn_mkm_mail_verification_update_user_pre($user_id, &$user_data, $auth, $ship_to_another, $notify_user){
    // 新規登録のみ
    if($user_id == 0 && $auth['area'] == 'C'){
        //ユーザーのステータスを無効にする
        $user_data['status'] = 'D';
        //メール認証用のコードを生成
        $user_data['mkm_verification'] = md5(uniqid(rand(),1));
    }
}

//fn_set_hook('update_profile', $action, $user_data, $current_user_data);
function fn_mkm_mail_verification_update_profile($action, $user_data, $current_user_data){
    //新規登録でステータスが無効のものはメールを送信する
    if ($action == 'add' && $user_data['status'] == 'D'){
        //メールを送信する
        $sent = fn_mmveri_sendmail( $user_data );
        fn_set_notification('I', __('information'), __('check_your_email'));
    }
}

//fn_set_hook('get_addons_mail_tpl', $tpl_code, $filename);
function fn_mkm_mail_verification_get_addons_mail_tpl(&$tpl_code, $filename){
    //profiles_create_profileをスキップする
    if($tpl_code == 'profiles_create_profile'){
        $tpl_code = 'skip_mkm_mail_verification';
    }
}


// メールを送信
function fn_mmveri_sendmail($user_data){

    /** @var \Tygh\Mailer\Mailer $mailer */
    $mailer = Tygh::$app['mailer'];


    $mailer->send(array(
        'to' => $user_data['email'],
        'from' => 'company_users_department',
        'data' => array(
            'user_data' => $user_data
        ),
        'template_code' => 'mkm_mail_verification',
        'tpl' => 'mkm_mail_verification.tpl', // this parameter is obsolete and is used for back compatibility
        'company_id' => $user_data['company_id']
    ), fn_check_user_type_admin_area($user_data['user_type']) ? 'A' : 'C', CART_LANGUAGE);
    
    return true;
}


function fn_mmveri_get_user($email) {
    $user_data = db_get_row("SELECT * FROM ?:users WHERE email = ?s AND user_type = ?s AND status = ?s", $email, 'C', 'D');
    return $user_data;
}


function fn_mmveri_by_verification_key($verification_key) {
    $user_id = db_get_field("SELECT user_id FROM ?:users WHERE mkm_verification = ?s", $verification_key);

    if ($user_id) {
        $_data = array(
            'status'           => 'A',
            'mkm_verification' => md5( uniqid( rand(), 1 ) )//利用できないコードに変える
        );

        //ステータスを有効にしてmkm_verificationを空にする
        db_query( "UPDATE ?:users SET ?u WHERE user_id = ?i", $_data, $user_id );
        $user_status = fn_login_user( $user_id, true );
        return true;
    }else{
        return false;
    }
}


// インストール時
function fn_mmveri_addon_install(){

    $mail_templates = array();
    $mail_templates[] = array(
        'tpl_code' => 'mkm_mail_verification'
    );

    $mail_template_desc = array();
    $mail_template_desc[] = array(
        'tpl_name' => 'メール認証（アドオン）',
        'tpl_trigger' => 'メール認証',
        'subject' => '【{%SP_NAME%}】メール認証を行ってください',
        'body_txt' => "会員登録いただき誠にありがとうございます。\r\nアカウントを有効化するために以下のURLにアクセスしてください。\r\n\r\n----------------------------------------\r\n認証用URL\r\n{%VERIFY_URL%}\r\n----------------------------------------",
    );

    // インストールされた言語を取得
    $languages = db_get_hash_array("SELECT * FROM ?:languages", 'lang_code');

    // メールテンプレートを管理するテーブルにデータをプリセット
    $cnt = 0;
    foreach($mail_templates as $_data){
        $tpl_id = db_query("REPLACE INTO ?:jp_mtpl ?e", $_data);

        foreach ($languages as $lc => $_v) {
            $mail_template_desc[$cnt]['tpl_id'] = $tpl_id;
            $mail_template_desc[$cnt]['lang_code'] = $lc;
            db_query("REPLACE INTO ?:jp_mtpl_descriptions ?e", $mail_template_desc[$cnt]);
        }
        $cnt ++;
    }

    if (fn_allowed_for('ULTIMATE')) {
        // 登録済みのショップ（出品者）のIDを取得
        $company_ids = db_get_fields( "SELECT company_id FROM ?:companies" );

        // インストールされた言語を取得
        $languages = db_get_hash_array("SELECT * FROM ?:languages", 'lang_code');

        // 登録済みのショップ（出品者）が存在する場合
        if( !empty($company_ids) ){
            $default_mtpl_descs = db_get_row("SELECT * FROM ?:jp_mtpl_descriptions WHERE tpl_trigger = ?s AND company_id = ?i", 'メール認証', 0);

            foreach( $company_ids as $company_id){
                if($company_id > 0){
                    foreach ($languages as $lc => $_v) {
                        $_data = $default_mtpl_descs;
                        $_data['company_id'] = $company_id;
                        $_data['lang_code'] = $lc;
                        db_query("REPLACE INTO ?:jp_mtpl_descriptions ?e", $_data);
                    }
                }
            }
        }
    }
}

// アンインストール時
function fn_mmveri_addon_uninstall(){
    db_query("DELETE FROM ?:jp_mtpl WHERE tpl_code = ?s", 'mkm_mail_verification');
    db_query("DELETE FROM ?:jp_mtpl_descriptions WHERE tpl_trigger = ?s", 'メール認証');
}