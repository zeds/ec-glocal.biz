<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/orders/components/context_menu/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:748414633629541ec7147a4-16031643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae4b7764b07a908974a71d2f2a164d38c9f85d0' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/orders/components/context_menu/status.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '748414633629541ec7147a4-16031643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541ec71ea31_10938167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541ec71ea31_10938167')) {function content_629541ec71ea31_10938167($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','change_to_status'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_status_descr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
            <li>
                <a class="cm-ajax cm-post cm-ajax-send-form"
                    href="<?php echo htmlspecialchars(fn_url("orders.m_update?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="pagination_contents"
                    data-ca-target-form="#orders_list_form"
                >
                    <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

                </a>
            </li>
        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify_customer_status'=>true,'notify_department_status'=>true,'notify_vendor_status'=>true,'name_prefix'=>"notify"), 0);?>

    </ul>
</li>
<?php }} ?>
