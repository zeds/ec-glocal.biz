<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4014432506294b6d94ee073-72044534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a95496d724d19861b6c83d3010899c6da8fa942c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4014432506294b6d94ee073-72044534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6d94f0626_37624245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6d94f0626_37624245')) {function content_6294b6d94f0626_37624245($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
