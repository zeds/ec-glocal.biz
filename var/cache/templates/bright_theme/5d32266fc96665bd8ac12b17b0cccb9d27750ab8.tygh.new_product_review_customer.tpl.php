<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6517082206295417e198380-09634223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d32266fc96665bd8ac12b17b0cccb9d27750ab8' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6517082206295417e198380-09634223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'product_id' => 0,
    'post_redirect_url' => 0,
    'product_review_data' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e1b02c4_94649333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e1b02c4_94649333')) {function content_6295417e1b02c4_94649333($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer','sign_in','sign_in','customer','sign_in','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<section class="ty-product-review-new-product-review-customer">
    <div class="ty-product-review-new-product-review-customer__header">
        <label class="ty-product-review-new-product-review-customer__title ty-strong cm-required"
            data-ca-product-review="newProductReviewCustomerTitle"
        >
            <?php echo $_smarty_tpl->__("customer");?>

        </label>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'but_href'=>fn_url("product_reviews.get_user_login_form?return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['post_redirect_url']->value))),'but_text'=>$_smarty_tpl->__("sign_in"),'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>"new_product_review_post_login_form_popup",'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-product-review-write-product-review-button ty-btn__secondary",'but_rel'=>"nofollow"), 0);?>

        <?php }?>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0);?>

</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<section class="ty-product-review-new-product-review-customer">
    <div class="ty-product-review-new-product-review-customer__header">
        <label class="ty-product-review-new-product-review-customer__title ty-strong cm-required"
            data-ca-product-review="newProductReviewCustomerTitle"
        >
            <?php echo $_smarty_tpl->__("customer");?>

        </label>

        <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'but_href'=>fn_url("product_reviews.get_user_login_form?return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['post_redirect_url']->value))),'but_text'=>$_smarty_tpl->__("sign_in"),'but_title'=>$_smarty_tpl->__("sign_in"),'but_role'=>"submit",'but_target_id'=>"new_product_review_post_login_form_popup",'but_meta'=>"cm-dialog-opener cm-dialog-auto-size ty-product-review-write-product-review-button ty-btn__secondary",'but_rel'=>"nofollow"), 0);?>

        <?php }?>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0);?>

</section>
<?php }?><?php }} ?>
