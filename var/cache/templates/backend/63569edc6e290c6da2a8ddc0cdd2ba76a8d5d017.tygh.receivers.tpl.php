<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 03:39:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:372343978629f9b5bcb36a9-68989566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63569edc6e290c6da2a8ddc0cdd2ba76a8d5d017' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '372343978629f9b5bcb36a9-68989566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_heading' => 0,
    'receivers' => 0,
    'condition' => 0,
    'id' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f9b5bcbf9b8_60879098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f9b5bcbf9b8_60879098')) {function content_629f9b5bcbf9b8_60879098($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('receivers'));
?>
<div class="notification-group__existing-receivers">
    <?php if ($_smarty_tpl->tpl_vars['show_heading']->value) {?>
        <strong><?php echo $_smarty_tpl->__("receivers");?>
:</strong>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['condition'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condition']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['receivers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condition']->key => $_smarty_tpl->tpl_vars['condition']->value) {
$_smarty_tpl->tpl_vars['condition']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['condition']->key;
?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("receiver_value", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"notification_settings:receiver_value")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"notification_settings:receiver_value"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers/".((string)$_smarty_tpl->tpl_vars['condition']->value->getMethod()).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['id']->value]), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"notification_settings:receiver_value"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <span class="notification-group-existing-receivers__item"><?php echo trim(Smarty::$_smarty_vars['capture']['receiver_value']);?>
</span>
    <?php } ?>
</div>
<?php }} ?>
