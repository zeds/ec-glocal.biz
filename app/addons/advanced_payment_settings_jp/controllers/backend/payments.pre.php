<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2009 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

// $Id: payments.pre.php by tommy from cs-cart.jp 2013

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	// 支払方法の更新時に拡張設定も更新する。
	if ( $mode == 'update' ) {

		$surcharge_min_amount = 0;
		$surcharge_max_amount = 0;
		$charges_by_subtotal = 0;

		if (Registry::get('addons.advanced_payment_settings_jp.jp_enable_min_amount') == 'Y') {
			$surcharge_min_amount = (int)$_REQUEST['payment_data']['surcharge_min_amount'];
		}
		if (Registry::get('addons.advanced_payment_settings_jp.jp_enable_max_amount') == 'Y') {
			$surcharge_max_amount = (int)$_REQUEST['payment_data']['surcharge_max_amount'];
		}
		if (Registry::get('addons.advanced_payment_settings_jp.jp_enable_charge_by_subtotal') == 'Y') {
			// 数値と「:」「,」以外は削除
			$charges_by_subtotal = preg_replace("/[^0-9:,]+/", "", $_REQUEST['payment_data']['charges_by_subtotal']);
		}

		$_data = array('payment_id' => (int)$_REQUEST['payment_id'],
							'min_amount' => $surcharge_min_amount,
							'max_amount' => $surcharge_max_amount,
							'charges_by_subtotal' => $charges_by_subtotal
							);
		db_query("REPLACE INTO ?:jp_adv_payment_settings ?e", $_data);
	}

}else{

	// 支払方法の更新時に拡張設定の内容も取得
	if ($mode == 'update') {

		$payment_advanced_settings = db_get_row("SELECT min_amount, max_amount, charges_by_subtotal FROM ?:jp_adv_payment_settings WHERE payment_id = ?i", $_REQUEST['payment_id']);

		// 新規登録直後は、payment_idが「0」で拡張設定が設定されているのでpayment_idを正しい数値に変更
		if( empty($payment_advanced_settings) ){
			db_query("UPDATE ?:jp_adv_payment_settings SET payment_id = ?i WHERE payment_id = 0", $_REQUEST['payment_id']);
			$payment_advanced_settings = db_get_row("SELECT min_amount, max_amount, charges_by_subtotal FROM ?:jp_adv_payment_settings WHERE payment_id = ?i", $_REQUEST['payment_id']);
		}

		if( !empty($payment_advanced_settings) ){
			Registry::get('view')->assign('payment_advanced_settings', $payment_advanced_settings);
		}
	}

	// 支払方法が削除された場合、その支払方法の拡張設定も削除する。
	if ($mode == 'delete') {
		if (!empty($_REQUEST['payment_id'])) {
			db_query("DELETE FROM ?:jp_adv_payment_settings WHERE payment_id = ?i", $_REQUEST['payment_id']);
		}
	}
}
