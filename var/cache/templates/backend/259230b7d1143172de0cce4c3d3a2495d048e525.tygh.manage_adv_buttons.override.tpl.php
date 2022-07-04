<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 13:45:22
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/hooks/companies/manage_adv_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373301963629ed7e2784125-40228234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259230b7d1143172de0cce4c3d3a2495d048e525' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/hooks/companies/manage_adv_buttons.override.tpl',
      1 => 1632712566,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '373301963629ed7e2784125-40228234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_companies_limit_reached' => 0,
    'title_suffix' => 0,
    'add_vendor_text' => 0,
    'promo_popup_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ed7e278f1c5_41450697',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ed7e278f1c5_41450697')) {function content_629ed7e278f1c5_41450697($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ultimate_or_storefront_license_required.'));
?>


<?php if (fn_allowed_for('MULTIVENDOR')) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_companies_limit_reached']->value) {?>
        <?php $_smarty_tpl->tpl_vars['title_suffix'] = new Smarty_variable(fn_get_product_state_suffix(''), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("ultimate_or_storefront_license_required.".((string)$_smarty_tpl->tpl_vars['title_suffix']->value),array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), null, 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_override_meta'=>"btn cm-dialog-opener cm-dialog-auto-height",'tool_href'=>"functionality_restrictions.ultimate_or_storefront_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'icon'=>"icon-plus",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"companies.add",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->tpl_vars['add_vendor_text']->value,'icon'=>"icon-plus"), 0);?>

    <?php }?>
<?php } else { ?>
    <span></span>
<?php }?><?php }} ?>
