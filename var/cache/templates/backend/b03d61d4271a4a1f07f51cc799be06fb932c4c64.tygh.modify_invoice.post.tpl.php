<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 20:58:36
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/pdf_documents/hooks/orders/modify_invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202689392662ab1aec4d6ba6-75506624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03d61d4271a4a1f07f51cc799be06fb932c4c64' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/pdf_documents/hooks/orders/modify_invoice.post.tpl',
      1 => 1625815522,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '202689392662ab1aec4d6ba6-75506624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab1aec4d90a2_52711455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab1aec4d90a2_52711455')) {function content_62ab1aec4d90a2_52711455($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('email_template.params.attach_order_document'));
?>
<div class="control-group">
    <label for="elm_attach_invoice" class="control-label"><?php echo $_smarty_tpl->__("email_template.params.attach_order_document");?>
:</label>
    <div class="controls">
        <input type="hidden" name="invoice[attach]" value="N" />
        <input type="checkbox" id="elm_attach_invoice" name="invoice[attach]" value="Y" />
    </div>
</div>
<?php }} ?>
