<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166678592629541f099dd37-46039751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4160bd3d93a44bd3eb666bc12ef649be06edafc' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/pdf_documents/hooks/orders/details_tools.post.tpl',
      1 => 1625815522,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166678592629541f099dd37-46039751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_settings' => 0,
    'order_info' => 0,
    'print_pdf_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f09aa9f1_67223531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f09aa9f1_67223531')) {function content_629541f09aa9f1_67223531($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('print_pdf_invoice','print_pdf_credit_memo','print_pdf_order_details','print_pdf_packing_slip'));
?>
<?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars['print_pdf_order'] = new Smarty_variable($_smarty_tpl->__("print_pdf_order_details"), null, 0);?>
<?php }?>

<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['print_pdf_order']->value,'href'=>"orders.print_invoice?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'class'=>"cm-new-window"));?>
</li>
<li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("print_pdf_packing_slip"),'href'=>"orders.print_packing_slip?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&pdf=1",'class'=>"cm-new-window"));?>
</li>
<?php }} ?>
