<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/discussion/hooks/orders/detailed_after_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:329879194629541f09e62d2-33719295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fb39095a0ef9b6f358673299931a44dd2b3a74' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/discussion/hooks/orders/detailed_after_content.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '329879194629541f09e62d2-33719295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f09e9af6_98709249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f09e9af6_98709249')) {function content_629541f09e9af6_98709249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
