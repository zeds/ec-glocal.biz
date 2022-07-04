<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 13:45:22
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765250320629ed7e274a499-43212643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56f12824186707bc94560e3191e882a21c71ce1a' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '765250320629ed7e274a499-43212643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ed7e27520a1_60849734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ed7e27520a1_60849734')) {function content_629ed7e27520a1_60849734($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_tmp2,"data-ca-opened-status"=>$_tmp3,"data-ca-closed-status"=>$_tmp4,"data-ca-return-url"=>$_tmp5)), 0);?>

<?php }} ?>
