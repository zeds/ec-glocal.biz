<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 23:36:40
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/promotions/dynamic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26759467262a4a878e354e5-92001740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9986409837325651d9195fb5bcafa793ef010083' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/promotions/dynamic.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26759467262a4a878e354e5-92001740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'picker_selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a4a878e717c5_26733442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a4a878e717c5_26733442')) {function content_62a4a878e717c5_26733442($_smarty_tpl) {?><div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_REQUEST['condition']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value), 0);?>


<?php } elseif ($_REQUEST['group']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_REQUEST['bonus']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
