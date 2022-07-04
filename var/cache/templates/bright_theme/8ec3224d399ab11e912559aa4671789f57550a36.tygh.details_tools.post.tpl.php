<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:59:09
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485797204629b571d935863-33668647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec3224d399ab11e912559aa4671789f57550a36' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1485797204629b571d935863-33668647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'status_settings' => 0,
    'order_info' => 0,
    'print_pdf_order' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b571d94fb33_42191569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b571d94fb33_42191569')) {function content_629b571d94fb33_42191569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('print_pdf_invoice','print_pdf_credit_memo','print_pdf_order_details','print_pdf_invoice','print_pdf_credit_memo','print_pdf_order_details'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/pdf_documents/hooks/orders/details_tools.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/pdf_documents/hooks/orders/details_tools.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"orders-print__pdf ty-btn__text cm-no-ajax",'but_text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'but_href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'but_icon'=>"ty-icon-doc-text orders-print__icon"), 0);?>

<?php }?><?php }} ?>
