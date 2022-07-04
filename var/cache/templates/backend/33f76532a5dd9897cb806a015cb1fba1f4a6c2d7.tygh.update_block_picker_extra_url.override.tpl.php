<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 22:11:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8100033806294c291a91657-59521743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f76532a5dd9897cb806a015cb1fba1f4a6c2d7' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/blog/hooks/block_manager/update_block_picker_extra_url.override.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8100033806294c291a91657-59521743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294c291abab45_78463448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294c291abab45_78463448')) {function content_6294c291abab45_78463448($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
