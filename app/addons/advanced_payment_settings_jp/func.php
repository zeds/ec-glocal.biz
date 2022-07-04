<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2009 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  acceptU  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

// $Id: func.php by tommy from cs-cart.jp 2016
//
// *** 関数名の命名ルール ***
// 混乱を避けるため、フックポイントで動作する関数とその他の命名ルールを明確化する。
// (1) init.phpで定義ししたフックポイントで動作する関数：fn_advanced_payment_settings_jp_[フックポイント名]
// (2) (1)以外の関数：fn_advpay_[任意の名称]

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

##########################################################################################
// START フックポイントで動作する関数
##########################################################################################

// 購入金額による支払方法の選択可否を設定
function fn_advanced_payment_settings_jp_prepare_checkout_payment_methods(&$cart, &$auth, &$payment_groups)
{
	// 支払方法が設定されていて注文合計金額が0でない場合
    if( !empty($payment_groups) && $cart['total'] > 0 ){
        // すべての有効な支払方法グループについて処理を実施
        foreach($payment_groups as $tab_key => $vals){
            foreach($vals as $key => $val){
                // 購入金額に応じた支払手数料および購入金額による支払方法の選択可否を取得
                $advanced_settings = fn_advpay_get_advanced_settings($key, $cart);

				// 注文合計金額が購入可能金額の下限未満、または上限よりも大きい場合
                if( $advanced_settings['flg_min_amount'] || $advanced_settings['flg_max_amount'] ){
                    // 支払方法を選択不可にする
                    unset($payment_groups[$tab_key][$key]);

                    // それまで選択されていた支払方法を選択不可にする場合、支払方法の選択状態を管理する要素をクリア
                    if($key == $cart['payment_id']){
                        unset($cart['payment_id']);
                    }
				// 注文合計金額が購入可能金額の下限値と上限の間の場合
                }else{
					// 設定された支払手数料をセット
                    $payment_groups[$tab_key][$key]['surcharge_value'] = $advanced_settings['charges_by_subtotal'];
                }
            }
			// 有効な支払方法が存在しない支払方法グループを削除
			if( empty($payment_groups[$tab_key]) ) unset($payment_groups[$tab_key]);
        }
    }
}




// 購入金額に応じた支払手数料を適用
function fn_advanced_payment_settings_jp_jp_post_update_payment(&$cart, &$auth)
{
	// 購入金額に応じた支払手数料および購入金額による支払方法の選択可否を取得
	$advanced_settings = fn_advpay_get_advanced_settings($cart['payment_id'], $cart);

	// 支払手数料を書き換え
	$cart['payment_surcharge'] = $advanced_settings['charges_by_subtotal'];
}
##########################################################################################
// END フックポイントで動作する関数
##########################################################################################





##########################################################################################
// START アドオンのインストール・アンインストール時に動作する関数
##########################################################################################

##########################################################################################
// END アドオンのインストール・アンインストール時に動作する関数
##########################################################################################





##########################################################################################
// START その他の関数
##########################################################################################

// 購入金額に応じた支払手数料および購入金額による支払方法の選択可否を取得
function fn_advpay_get_advanced_settings($payment_id, $cart)
{
	// 各種変数の初期化
	$advanced_settings = array();
	$payment_surcharge = 0;
	$flg_min_amount = false;
	$flg_max_amount = false;

	// 支払方法の拡張設定に関するデータを取得
	$setting_data = db_get_row("SELECT min_amount, max_amount, charges_by_subtotal FROM ?:jp_adv_payment_settings WHERE payment_id = ?i", $payment_id);

	///////////////////////////////////////////////////
	// 割引適用後の注文小計を算出 BOF
	///////////////////////////////////////////////////
	// 注文小計
	$subtotal = $cart['subtotal'];

	// クーポンや各種キャンペーン割引が適用されたり、ポイントが使用された場合
	if( !empty($cart['subtotal_discount']) ){
		// 注文小計から割引額をマイナス
		$subtotal = $subtotal - $cart['subtotal_discount'];
	}

	// ギフト券利用による割引が適用された場合
	if( !empty($cart['use_gift_certificates']) ){
		$gc_code = key(array_slice($cart['use_gift_certificates'], 0, 1));

		if( !empty($cart['use_gift_certificates'][$gc_code]['cost']) ){
			// 注文小計から割引額をマイナス
			$subtotal = $subtotal - $cart['use_gift_certificates'][$gc_code]['cost'];
		}
	}
	///////////////////////////////////////////////////
	// 割引適用後の注文小計を算出 EOF
	///////////////////////////////////////////////////

	// 注文小計に送料を含める設定の場合
	if( Registry::get('addons.advanced_payment_settings_jp.jp_include_shipping_cost') == 'Y' && !empty($cart['shipping_cost']) ){
		$subtotal = $subtotal + $cart['shipping_cost'];
	}

	// 支払方法を利用できる購入金額下限の判定が必要で、購入金額が設定値より小さい場合
	if( Registry::get('addons.advanced_payment_settings_jp.jp_enable_min_amount') == 'Y' && !empty($setting_data['min_amount']) && ($subtotal < $setting_data['min_amount']) ){
		$flg_min_amount = true;
	}

	// 支払方法を利用できる購入金額上限の判定が必要で、購入金額が設定値より大きい場合
	if( Registry::get('addons.advanced_payment_settings_jp.jp_enable_max_amount') == 'Y' && !empty($setting_data['max_amount']) && ($subtotal > $setting_data['max_amount']) ){
		$flg_max_amount = true;
	}

	// 購入金額に応じた支払手数料に関するデータが存在する場合
	if( Registry::get('addons.advanced_payment_settings_jp.jp_enable_charge_by_subtotal') == 'Y' && !empty($setting_data['charges_by_subtotal']) ){

		// 購入金額に応じた支払手数料に関するデータを配列化
		$charge_data = preg_split("/[:,]/" , $setting_data['charges_by_subtotal']);

		// 適用する支払手数料を取得
		for ($i = 0; $i < count($charge_data); $i+=2){
			$payment_surcharge = $charge_data[$i+1];
			if ($subtotal <= $charge_data[$i]) {
				break;
			}
		}

	// 通常の支払手数料を使用する場合
	}else{

		// 支払方法の拡張設定に関するデータを取得
		$normal_surcharge_data = db_get_row("SELECT a_surcharge, p_surcharge FROM ?:payments WHERE payment_id = ?i", $payment_id);

		// 通常の手数料を取得
		if ( floatval($normal_surcharge_data['a_surcharge']) ) {
			$payment_surcharge = $normal_surcharge_data['a_surcharge'];
		}
		if ( floatval($normal_surcharge_data['p_surcharge']) && !empty($subtotal) ) {
			$payment_surcharge += fn_format_price($cart['total'] * $normal_surcharge_data['p_surcharge'] / 100);
		}
	}

	// 拡張設定の内容を配列にセット
	$advanced_settings = array(
							'flg_min_amount' => $flg_min_amount,
							'flg_max_amount' => $flg_max_amount,
							'charges_by_subtotal' => $payment_surcharge
							);

	return $advanced_settings;
}
##########################################################################################
// END その他の関数
##########################################################################################
