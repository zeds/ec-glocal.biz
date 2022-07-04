<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1233746869629541f080fe49-49022882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2358c86b83603d4a5fa8e722956919f5e8dc225c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1233746869629541f080fe49-49022882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f0831734_17220639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f0831734_17220639')) {function content_629541f0831734_17220639($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>
<?php }} ?>
