<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 21:06:39
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/sorter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102440826962ab1ccf28f880-79243257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d8cdb44ef8bf2a903793e58b22b02b75093c73' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/sorter.tpl',
      1 => 1623231400,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '102440826962ab1ccf28f880-79243257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'order_by' => 0,
    'direction' => 0,
    'url' => 0,
    'order_direction' => 0,
    'debugger_hash' => 0,
    'target_id' => 0,
    'text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab1ccf2af660_07319931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab1ccf2af660_07319931')) {function content_62ab1ccf2af660_07319931($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['field']->value!=$_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("none", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value=="asc") {?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("desc", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
    <?php }?>
<?php }?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value=="none") {?><i class="icon-asc"></i><i class="icon-desc" style="margin-left: -7px;"></i><?php } else { ?><i class="icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_direction']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/sorter.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/sorter.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['field']->value!=$_smarty_tpl->tpl_vars['order_by']->value) {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("none", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['direction']->value=="asc") {?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("desc", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['order_direction'] = new Smarty_variable("asc", null, 0);?>
    <?php }?>
<?php }?>
<a class="cm-ajax cm-ajax-cache" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['url']->value)."?order_by=".((string)$_smarty_tpl->tpl_vars['field']->value).",".((string)$_smarty_tpl->tpl_vars['order_direction']->value)."&debugger_hash=".((string)$_smarty_tpl->tpl_vars['debugger_hash']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['direction']->value=="none") {?><i class="icon-asc"></i><i class="icon-desc" style="margin-left: -7px;"></i><?php } else { ?><i class="icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_direction']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?></a><?php }?><?php }} ?>
