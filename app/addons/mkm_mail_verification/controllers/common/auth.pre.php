<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }


if ($mode == 'mail_verification') {

//    $config = Registry::get('config');
//
//    die(fn_print_r(array( $config['current_location'] )));


    $verification_key = !empty($_REQUEST['verification_key']) ? $_REQUEST['verification_key'] : '';
    $redirect_url = fn_url();

    if(empty($verification_key)){
        return array(CONTROLLER_STATUS_NO_PAGE);
    }

    $login = fn_mmveri_by_verification_key($verification_key);

    if($login){
        fn_set_notification('N', __('notice'), __('successful_activate_your_account'));
    }else{
        fn_set_notification('E', __('error'), __('text_verification_key_not_valid'));
        fn_user_logout($auth);
    }
    fn_redirect($redirect_url, true);
    exit();
}