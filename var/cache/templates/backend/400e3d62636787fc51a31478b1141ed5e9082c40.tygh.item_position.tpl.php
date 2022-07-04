<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 04:48:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/picker/item_position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112491303562951f87bf7514-97518134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '400e3d62636787fc51a31478b1141ed5e9082c40' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/picker/item_position.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112491303562951f87bf7514-97518134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62951f87bf9b65_53305204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62951f87bf9b65_53305204')) {function content_62951f87bf9b65_53305204($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position'));
?>
<div class="object-picker__products-position" data-th="<?php echo $_smarty_tpl->__("position");?>
:">
    <input type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
    />
</div><?php }} ?>
