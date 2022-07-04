<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 08:43:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/common/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159036877562a285b1d06508-49564420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b444e26b476ad3f75c12477b964a4fdbc03a2d71' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/common/help.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '159036877562a285b1d06508-49564420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'link_only' => 0,
    'id' => 0,
    'text' => 0,
    'link_text' => 0,
    'show_brackets' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a285b1d2b1d4_84061888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a285b1d2b1d4_84061888')) {function content_62a285b1d2b1d4_84061888($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['content']->value) {?>

<?php if (!$_smarty_tpl->tpl_vars['link_only']->value) {?><div class="ty-help-info"><?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>$_smarty_tpl->tpl_vars['text']->value,'content'=>Smarty::$_smarty_vars['capture']['notes_picker'],'link_text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? "?" : $tmp),'show_brackets'=>$_smarty_tpl->tpl_vars['show_brackets']->value), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['link_only']->value) {?></div><?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/help.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/help.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['content']->value) {?>

<?php if (!$_smarty_tpl->tpl_vars['link_only']->value) {?><div class="ty-help-info"><?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("notes_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>$_smarty_tpl->tpl_vars['text']->value,'content'=>Smarty::$_smarty_vars['capture']['notes_picker'],'link_text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? "?" : $tmp),'show_brackets'=>$_smarty_tpl->tpl_vars['show_brackets']->value), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['link_only']->value) {?></div><?php }?>
<?php }
}?><?php }} ?>
