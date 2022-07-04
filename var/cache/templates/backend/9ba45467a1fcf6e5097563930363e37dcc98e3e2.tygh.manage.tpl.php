<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 20:24:13
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172513455562ab12dd95b990-38936396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba45467a1fcf6e5097563930363e37dcc98e3e2' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '172513455562ab12dd95b990-38936396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reports' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab12dd9de855_79756738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab12dd9de855_79756738')) {function content_62ab12dd9de855_79756738($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data','add_report','reports'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="reports_list">
<div class="cm-sortable" data-ca-sortable-table="sales_reports" data-ca-sortable-id-name="report_id" id="manage_reports_list">
    <?php if ($_smarty_tpl->tpl_vars['reports']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['section']->value['report_id'],'text'=>$_smarty_tpl->tpl_vars['section']->value['description'],'href'=>"sales_reports.update?report_id=".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'href_delete'=>"sales_reports.delete?report_id=".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'table'=>"sales_reports",'object_id_name'=>"report_id",'delete_target_id'=>"manage_reports_list",'status'=>$_smarty_tpl->tpl_vars['section']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['section']->value['report_id']),'no_table'=>true,'no_popup'=>true,'is_view_link'=>false,'draggable'=>true), 0);?>

        <?php } ?>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--manage_reports_list--></div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"sales_reports.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_report"),'hide_tools'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("reports"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>
<?php }} ?>
