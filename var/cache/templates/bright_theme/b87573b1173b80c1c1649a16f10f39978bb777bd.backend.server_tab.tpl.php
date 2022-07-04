<?php /* Smarty version Smarty-3.1.21, created on 2022-06-25 10:16:02
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/server_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114085333462b661d27b6b14-70538516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87573b1173b80c1c1649a16f10f39978bb777bd' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/server_tab.tpl',
      1 => 1623231400,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '114085333462b661d27b6b14-70538516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b661d27cb0d2_31733855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b661d27cb0d2_31733855')) {function content_62b661d27cb0d2_31733855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/server_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/server_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabServerContent">
    <?php echo fn_get_phpinfo('1');?>


    <?php echo fn_get_phpinfo('2');?>


    <?php echo fn_get_phpinfo('4');?>


    <?php echo fn_get_phpinfo('8');?>

<!--DebugToolbarTabServerContent--></div><?php }?><?php }} ?>
