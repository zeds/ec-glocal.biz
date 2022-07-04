<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 20:58:36
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/orders/modify_invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99984796062ab1aec4b9885-98971760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd462587ee1ee74ec28a44a8ad09600e5134ff88' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/orders/modify_invoice.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99984796062ab1aec4b9885-98971760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'company_data' => 0,
    'invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab1aec4cbd78_17284412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab1aec4cbd78_17284412')) {function content_62ab1aec4cbd78_17284412($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('subject','email_order_invoice_subject','email','invoice','send'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="edit_order_invoice_form" class="form-horizontal form-edit">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:modify_invoice")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:modify_invoice"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" name="order_id" />
        <div class="control-group">
            <label for="elm_subject" class="cm-required control-label"><?php echo $_smarty_tpl->__("subject");?>
:</label>
            <div class="controls">
                <input id="elm_subject" type="text" name="invoice[subject]" value="<?php echo $_smarty_tpl->__("email_order_invoice_subject",array("[company_name]"=>$_smarty_tpl->tpl_vars['company_data']->value['company_name'],"[order_id]"=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']));?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_email" class="cm-required cm-email control-label"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <div class="controls">
                <input id="elm_email" type="text" name="invoice[email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_invoice" class="cm-required control-label"><?php echo $_smarty_tpl->__("invoice");?>
:</label>
            <div class="controls">
                <textarea id="elm_invoice" name="invoice[body]" cols="55" rows="14" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:modify_invoice"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[orders.modify_invoice]",'but_target_form'=>"edit_order_invoice_form",'but_role'=>"submit-link"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->__('editing_order_invoice_responsive'),'title_end'=>"#".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
