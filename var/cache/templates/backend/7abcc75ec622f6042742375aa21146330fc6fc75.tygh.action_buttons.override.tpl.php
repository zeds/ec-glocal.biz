<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 07:44:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/hooks/addons_detailed/action_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143133999362a277dd63b156-48570583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7abcc75ec622f6042742375aa21146330fc6fc75' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/hooks/addons_detailed/action_buttons.override.tpl',
      1 => 1652057406,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143133999362a277dd63b156-48570583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    '_addon' => 0,
    'line' => 0,
    'btn_delete_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a277dd68bd66_17202489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a277dd68bd66_17202489')) {function content_62a277dd68bd66_17202489($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('jp_addon_refresh','uninstall'));
?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'method'=>"POST",'text'=>$_smarty_tpl->__("jp_addon_refresh"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['refresh_url'])));?>
</li>
<?php $_smarty_tpl->tpl_vars['line'] = new Smarty_variable(fn_is_lang_var_exists(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['line']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('btn_delete_data', null, 0);
$_smarty_tpl->tpl_vars['btn_delete_data']->value["data-ca-confirm-text"] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting");?>
<?php }?>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm text-error",'method'=>"POST",'text'=>$_smarty_tpl->__("uninstall"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['delete_url']),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value));?>
</li><?php }} ?>
