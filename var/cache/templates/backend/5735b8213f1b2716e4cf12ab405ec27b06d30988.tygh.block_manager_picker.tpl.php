<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 04:48:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/picker/block_manager_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136112132862951f87b9d232-53253604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5735b8213f1b2716e4cf12ab405ec27b06d30988' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/picker/block_manager_picker.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136112132862951f87b9d232-53253604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_ids' => 0,
    'multiple' => 0,
    'view_mode' => 0,
    'show_positions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62951f87ba3395_52745782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62951f87ba3395_52745782')) {function content_62951f87ba3395_52745782($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true), 0);?>

<?php }} ?>
