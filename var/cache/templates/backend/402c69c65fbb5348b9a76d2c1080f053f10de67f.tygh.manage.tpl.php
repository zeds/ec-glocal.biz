<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/attachments/views/attachments/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:963077326294b6bcc28d39-75426441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402c69c65fbb5348b9a76d2c1080f053f10de67f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/attachments/views/attachments/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '963077326294b6bcc28d39-75426441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'config' => 0,
    'hide_for_vendor' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'attachments' => 0,
    'a' => 0,
    'hide_inputs' => 0,
    'redirect_url' => 0,
    'skip_delete' => 0,
    'edit_link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bcc454e7_11954672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bcc454e7_11954672')) {function content_6294b6bcc454e7_11954672($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view','new_attachment','add_attachment','editing_attachment','no_data'));
?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['shared_product']=="Y"&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']!=$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
        <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars["skip_delete"] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars["hide_inputs"] = new Smarty_variable("cm-hide-inputs", null, 0);?>
        <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<div class="items-container cm-sortable" data-ca-sortable-table="attachments" data-ca-sortable-id-name="attachment_id" id="attachments_list">

<?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
<div class="btn-toolbar clearfix">
    <div class="pull-right">
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('attachment'=>array(),'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_attachments_files",'text'=>$_smarty_tpl->__("new_attachment"),'link_text'=>$_smarty_tpl->__("add_attachment"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['attachments']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
    <?php  $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["a"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["a"]->key => $_smarty_tpl->tpl_vars["a"]->value) {
$_smarty_tpl->tpl_vars["a"]->_loop = true;
?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("object_group", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('attachment'=>$_smarty_tpl->tpl_vars['a']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php ob_start();
echo $_smarty_tpl->__("editing_attachment");
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['object_group'],'id'=>$_smarty_tpl->tpl_vars['a']->value['attachment_id'],'text'=>$_smarty_tpl->tpl_vars['a']->value['description'],'status'=>$_smarty_tpl->tpl_vars['a']->value['status'],'object_id_name'=>"attachment_id",'table'=>"attachments",'href_delete'=>"attachments.delete?attachment_id=".((string)$_smarty_tpl->tpl_vars['a']->value['attachment_id'])."&object_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)."&object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_url']->value),'delete_target_id'=>"attachments_list",'header_text'=>$_tmp5.": ".((string)$_smarty_tpl->tpl_vars['a']->value['description']),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['a']->value['attachment_id']),'id_prefix'=>"_attachments_",'prefix'=>"attachments",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'no_table'=>"true",'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'draggable'=>true), 0);?>

    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<!--attachments_list--></div><?php }} ?>
