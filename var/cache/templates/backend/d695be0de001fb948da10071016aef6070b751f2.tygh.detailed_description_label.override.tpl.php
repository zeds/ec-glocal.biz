<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9209820956294b6d94e6629-42023858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd695be0de001fb948da10071016aef6070b751f2' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9209820956294b6d94e6629-42023858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6d94e9086_83862907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6d94e9086_83862907')) {function content_6294b6d94e9086_83862907($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }?>
<?php }} ?>
