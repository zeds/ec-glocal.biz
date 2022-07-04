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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'resend') {


        $user_data = fn_mmveri_get_user( $_REQUEST['user_email'] );
//        die(fn_print_r(array( $user_data )));
        if(empty($user_data)){
            fn_set_notification('E', __('error'), __('user_no_exist'));
        }else{
			fn_mmveri_sendmail($user_data);
            // コードを再送する
            fn_set_notification('N', __('information'), __('sent_verification_key'));
        }

//        die(fn_print_r(array( $user_data )));

//        fn_set_notification('W', __('warning'), __('access_denied'));
//
//        fn_set_notification('E', __('error'), __('access_denied'));
//
//        fn_set_notification('N', __('information'), __('text_profile_is_created'));


    }
}


if ($mode == 'resend') {

}
