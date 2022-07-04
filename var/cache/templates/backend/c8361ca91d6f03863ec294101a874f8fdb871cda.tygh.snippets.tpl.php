<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:06:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/email_templates/snippets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74654860462a6635484cb48-33772304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8361ca91d6f03863ec294101a874f8fdb871cda' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/email_templates/snippets.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '74654860462a6635484cb48-33772304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_section' => 0,
    'config' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
    'snippets' => 0,
    'return_url' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a663548623f8_13928176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a663548623f8_13928176')) {function content_62a663548623f8_13928176($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('snippets'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['result_ids'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['result_ids']->value)===null||$tmp==='' ? "content_snippets" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? "mail" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['addon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addon']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="content_snippets">
    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('snippets'=>$_smarty_tpl->tpl_vars['snippets']->value,'type'=>"mail",'addon'=>'','result_ids'=>"content_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0);?>

<!--content_snippets--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('result_ids'=>$_smarty_tpl->tpl_vars['result_ids']->value,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'addon'=>$_smarty_tpl->tpl_vars['addon']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("snippets"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>
<?php }} ?>
