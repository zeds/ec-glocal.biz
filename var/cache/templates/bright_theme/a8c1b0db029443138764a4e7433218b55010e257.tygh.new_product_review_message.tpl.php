<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12252627236295417e130603-10725599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c1b0db029443138764a4e7433218b55010e257' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12252627236295417e130603-10725599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'is_advanced' => 0,
    'product_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e17d567_21070056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e17d567_21070056')) {function content_6295417e17d567_21070056($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment','product_reviews.write_your_review','product_reviews.advantages','product_reviews.disadvantages','product_reviews.comment'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['is_advanced'] = new Smarty_variable(($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields']==="advanced"), null, 0);?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]",'autofocus'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0);?>


    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_tmp1." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value,'autofocus'=>!$_smarty_tpl->tpl_vars['is_advanced']->value), 0);?>


</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['is_advanced'] = new Smarty_variable(($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields']==="advanced"), null, 0);?>

<section class="ty-product-review-new-product-review-message">
    <div class="ty-control-group ty-product-review-new-product-review-message__title">
        <label class="ty-control-group__title ty-product-review-new-product-review-message__title-label
            <?php if (!$_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                cm-required
            <?php }?>
        "
            <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>
                for="product_review_advantages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
                for="product_review_comment_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        >
            <?php echo $_smarty_tpl->__("product_reviews.write_your_review");?>

        </label>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_advanced']->value) {?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'id'=>"product_review_advantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[advantages]",'autofocus'=>$_smarty_tpl->tpl_vars['is_advanced']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'id'=>"product_review_disadvantages_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[disadvantages]"), 0);?>


    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.comment");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>($_smarty_tpl->tpl_vars['is_advanced']->value ? $_tmp2." *" : false),'id'=>"product_review_comment_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'name'=>"product_review_data[comment]",'required'=>$_smarty_tpl->tpl_vars['is_advanced']->value,'autofocus'=>!$_smarty_tpl->tpl_vars['is_advanced']->value), 0);?>


</section>
<?php }?><?php }} ?>
