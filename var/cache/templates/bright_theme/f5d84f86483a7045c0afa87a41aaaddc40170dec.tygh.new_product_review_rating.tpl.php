<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9505130426295417e0828b0-49498445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d84f86483a7045c0afa87a41aaaddc40170dec' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9505130426295417e0828b0-49498445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_id' => 0,
    'rate_id' => 0,
    'product_reviews_ratings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e092854_96209427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e092854_96209427')) {function content_6295417e092854_96209427($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.your_rating','product_reviews.your_rating'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0);?>

    </div>
</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<section class="ty-product-review-new-product-review-rating">
    <div class="ty-control-group">
        <?php $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-multiple-radios">
            <?php echo $_smarty_tpl->__("product_reviews.your_rating");?>

        </label>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rate_id'=>$_smarty_tpl->tpl_vars['rate_id']->value,'rate_name'=>"product_review_data[rating_value]",'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value,'size'=>"xlarge"), 0);?>

    </div>
</section>
<?php }?><?php }} ?>
