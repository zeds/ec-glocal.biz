<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 12:21:03
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1111709905629acf9f29cba6-01236312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10326fc042c95dff9d41e3cd54300545ba8c3847' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/view.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1111709905629acf9f29cba6-01236312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'report' => 0,
    'table' => 0,
    'table_id' => 0,
    'table_prefix' => 0,
    'new_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629acf9f2c3b57_66870241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629acf9f2c3b57_66870241')) {function content_629acf9f2c3b57_66870241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data','no_data','no_data','manage_reports','edit_report','reports'));
?>
<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/amcharts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/pie.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/amcharts/serial.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
                    <?php $_smarty_tpl->tpl_vars["table_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['table']->value['table_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["table_prefix"] = new Smarty_variable("table_".((string)$_smarty_tpl->tpl_vars['table_id']->value), null, 0);?>
                    <div id="content_table_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if (!$_smarty_tpl->tpl_vars['table']->value['elements']||$_smarty_tpl->tpl_vars['table']->value['empty_values']=="Y") {?>
                            <p><?php echo $_smarty_tpl->__("no_data");?>
</p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type']=="T") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type']=="P") {?>
                            <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/amchart_pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['pie_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value), 0);?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
pie--></div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['table']->value['type']=="B") {?>
                            <div id="div_scroll_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="reports-graph-scroll">
                                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar"><?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/amchart_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('chart_data'=>$_smarty_tpl->tpl_vars['new_array']->value['column_data'],'chart_id'=>$_smarty_tpl->tpl_vars['table_prefix']->value), 0);?>
<!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_prefix']->value, ENT_QUOTES, 'UTF-8');?>
bar--></div>
                            </div>
                        <?php }?>
                    <!--content_table_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

                <?php } else { ?>
                    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>"table_".((string)$_smarty_tpl->tpl_vars['table_id']->value),'track'=>true), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("manage_reports"),'href'=>"sales_reports.manage"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit_report"),'href'=>"sales_reports.update?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&selected_section=tables"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/sales_reports/components/sales_reports_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['report']->value['period'],'search'=>$_smarty_tpl->tpl_vars['report']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("reports"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
