<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 21:29:51
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96113446062ab223f22e513-52894122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e077738da8d3259d32ec2cfe2ba5152267ff44e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96113446062ab223f22e513-52894122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab223f24c283_57164766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab223f24c283_57164766')) {function content_62ab223f24c283_57164766($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value) {
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
} ?><?php }} ?>
