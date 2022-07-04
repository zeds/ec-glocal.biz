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

// $Id: order_management.post.php by tommy from cs-cart.jp 2013

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if ($mode == 'update_totals') {

		// カートの内容を取得
		$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
		$cart = & $_SESSION['cart'];

		// 購入金額に応じた支払手数料および購入金額による支払方法の選択可否を取得
		$advanced_settings = fn_advpay_get_advanced_settings($cart['payment_id'], $cart);

		// 支払手数料を書き換え
		$cart['payment_surcharge'] = $advanced_settings['charges_by_subtotal'];
	}

}else{

	if($mode == 'totals'){

		// カートの内容を取得
		$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
		$cart = & $_SESSION['cart'];

		// カートの中身が存在する場合
		if( !empty($cart) ){

			// 登録されている支払方法に関するデータを取得
			$payment_methods = fn_get_payment_methods($customer_auth);

			// すべての支払方法について以下の処理を実施
			foreach ($payment_methods as $key => $val){

				// 購入金額に応じた支払手数料および購入金額による支払方法の選択可否を取得
				$advanced_settings = fn_advpay_get_advanced_settings($key, $cart);

				// 購入金額が設定した下限金額より小さい、もしくは上限金額より大きい場合
				if( $advanced_settings['flg_min_amount'] || $advanced_settings['flg_max_amount'] ){
					// 支払方法を選択不可にする
					unset($payment_methods[$key]);
					continue;
				}

				// 支払手数料を書き換え
				$payment_methods[$key]['surcharge_value'] = $advanced_settings['charges_by_subtotal'];
			}

			// Smarty変数を上書き
            Registry::get('view')->assign('payment_methods', $payment_methods);
		}
	}
}
