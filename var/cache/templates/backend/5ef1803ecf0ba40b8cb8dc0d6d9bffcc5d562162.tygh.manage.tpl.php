<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 04:44:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_reviews/views/product_reviews/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40560549862951e97174798-89470764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef1803ecf0ba40b8cb8dc0d6d9bffcc5d562162' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_reviews/views/product_reviews/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '40560549862951e97174798-89470764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_reviews' => 0,
    'product_reviews_search' => 0,
    'available_message_types' => 0,
    'select_storefront' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62951e97193ca9_25883500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62951e97193ca9_25883500')) {function content_62951e97193ca9_25883500($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'product_reviews_search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_reviews.manage",'view_type'=>"product_reviews"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/sidebar/sidebar_review_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'available_message_types'=>$_smarty_tpl->tpl_vars['available_message_types']->value,'product_reviews_search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("product_reviews.title"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>fn_allowed_for("MULTIVENDOR"),'storefront_switcher_param_name'=>"storefront_id"), 0);?>

<?php }} ?>
