<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211166321362a6632c5eaef1-92605029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcb8bae433a9eea8cda137cc2cfb066f83ba70d0' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/preview.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '211166321362a6632c5eaef1-92605029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c5ff5e4_99513317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c5ff5e4_99513317')) {function content_62a6632c5ff5e4_99513317($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('preview'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
