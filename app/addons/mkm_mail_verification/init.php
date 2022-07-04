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

fn_register_hooks(
    'get_addons_mail_tpl',
    'update_user_pre',
    'update_profile'
);
