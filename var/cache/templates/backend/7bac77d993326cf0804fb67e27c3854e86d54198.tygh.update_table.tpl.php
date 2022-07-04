<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 20:24:37
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/update_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143488259162ab12f554b239-96590913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac77d993326cf0804fb67e27c3854e86d54198' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/update_table.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143488259162ab12f554b239-96590913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'report_id' => 0,
    'table_id' => 0,
    'table' => 0,
    'element' => 0,
    'report_elements' => 0,
    'parameter' => 0,
    'parameter_name' => 0,
    'element_name' => 0,
    'intervals' => 0,
    'interval' => 0,
    'interval_name' => 0,
    'payments' => 0,
    'payment' => 0,
    'conditions' => 0,
    'payment_processors' => 0,
    'processor' => 0,
    'destinations' => 0,
    'destination' => 0,
    'order_status_descr' => 0,
    'id' => 0,
    'status' => 0,
    'c_ids' => 0,
    'extra_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab12f55d48a8_20632809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab12f55d48a8_20632809')) {function content_62ab12f55d48a8_20632809($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.notes.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sales_reports_side_bar_notes','name','position','type','table','graphic','bar','graphic','pie_3d','parameter','value_to_display','time_interval','tt_views_sales_reports_table_time_interval','limit','tt_views_sales_reports_update_table_limit','dependence','max_item','max_amount','tt_views_sales_reports_update_table_dependence','payment','processor','usergroup','payment','processor','usergroup','all','no_data','name','no_data','status','no_data','no_items','no_items','no_items','no_items','view_report','clear_conditions','new_chart'));
?>
<?php if ($_REQUEST['table_id']) {?>
    <?php $_smarty_tpl->tpl_vars["table_id"] = new Smarty_variable($_REQUEST['table_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["table_id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["report_id"] = new Smarty_variable($_REQUEST['report_id'], null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="statistics_table" class=" form-horizontal form-edit">
<input type="hidden" name="report_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="table_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="table_data[report_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="">

<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->__("sales_reports_side_bar_notes");?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_general">

<fieldset>
<div class="control-group">
    <label for="elm_table_description" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
    <div class="controls">
        <input type="text" name="table_data[description]" id="elm_table_description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="70">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_table_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
    <div class="controls">
        <input type="text" name="table_data[position]" id="elm_table_position" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_table_type"><?php echo $_smarty_tpl->__("type");?>
:</label>
    <div class="controls">
        <select name="table_data[type]" id="elm_table_type">
            <option value="T"><?php echo $_smarty_tpl->__("table");?>
</option>
            <option value="B" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("bar");?>
] </option>
            <option value="P" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("pie_3d");?>
] </option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_update_element_element_id"><?php echo $_smarty_tpl->__("parameter");?>
:</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                <select name="table_data[elements][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_hash'], ENT_QUOTES, 'UTF-8');?>
][element_id]" id="elm_update_element_element_id">
                    <?php  $_smarty_tpl->tpl_vars['parameter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parameter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_elements']->value['parameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parameter']->key => $_smarty_tpl->tpl_vars['parameter']->value) {
$_smarty_tpl->tpl_vars['parameter']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars["element_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['parameter']->value['element_id'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["parameter_name"] = new Smarty_variable("reports_parameter_".((string)$_smarty_tpl->tpl_vars['element_id']->value), null, 0);?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parameter']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element']->value['element_id']==$_smarty_tpl->tpl_vars['parameter']->value['element_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['parameter_name']->value);?>
</option>
                    <?php } ?>
                </select>
            <?php } ?>
        <?php } else { ?>
            <select name="table_data[elements][element_id]" id="elm_update_element_element_id">
                <?php  $_smarty_tpl->tpl_vars['parameter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parameter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_elements']->value['parameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parameter']->key => $_smarty_tpl->tpl_vars['parameter']->value) {
$_smarty_tpl->tpl_vars['parameter']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["element_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['parameter']->value['element_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["parameter_name"] = new Smarty_variable("reports_parameter_".((string)$_smarty_tpl->tpl_vars['element_id']->value), null, 0);?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parameter']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element']->value['element_id']==$_smarty_tpl->tpl_vars['parameter']->value['element_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['parameter_name']->value);?>
</option>
                <?php } ?>
            </select>
        <?php }?>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_table_display"><?php echo $_smarty_tpl->__("value_to_display");?>
:</label>
    <div class="controls">
        <select name="table_data[display]" id="elm_table_display">
            <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_elements']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["element_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars["element_name"] = new Smarty_variable("reports_parameter_".((string)$_smarty_tpl->tpl_vars['element_id']->value), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value['display']==$_smarty_tpl->tpl_vars['element']->value['code']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['element_name']->value);?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['table']->value['type']!="P") {?>
<div class="control-group">
    <label class="control-label" for="elm_table_interval_id"><?php echo $_smarty_tpl->__("time_interval");?>
:</label>
    <div class="controls">
        <select name="table_data[interval_id]" id="elm_table_interval_id">
            <?php  $_smarty_tpl->tpl_vars['interval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['interval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['intervals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['interval']->key => $_smarty_tpl->tpl_vars['interval']->value) {
$_smarty_tpl->tpl_vars['interval']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["interval_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['interval']->value['interval_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars["interval_name"] = new Smarty_variable("reports_interval_".((string)$_smarty_tpl->tpl_vars['interval_id']->value), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['interval']->value['interval_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value['interval_id']==$_smarty_tpl->tpl_vars['interval']->value['interval_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['interval_name']->value);?>
</option>
            <?php } ?>
        </select>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_sales_reports_table_time_interval");?>
</p>
    </div>
</div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table']->value['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
<div class="control-group">
    <label class="control-label" for="elm_limit_auto"><?php echo $_smarty_tpl->__("limit");?>
:</label>
    <div class="controls">
        <input type="text" name="table_data[elements]<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?>[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_hash'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[limit_auto]" value="<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['limit_auto'], ENT_QUOTES, 'UTF-8');
} else { ?>5<?php }?>" size="3" id="elm_limit_auto">
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_sales_reports_update_table_limit");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_dependence"><?php echo $_smarty_tpl->__("dependence");?>
:</label>
    <div class="controls">
        <select name="table_data[elements]<?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?>[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['element_hash'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[dependence]" id="elm_dependence">
            <option value="max_n" <?php if ($_smarty_tpl->tpl_vars['element']->value['dependence']=="max_n") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("max_item");?>
</option>
            <option value="max_p" <?php if ($_smarty_tpl->tpl_vars['element']->value['dependence']=="max_p") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("max_amount");?>
</option>
        </select>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_sales_reports_update_table_dependence");?>
</p>
    </div>
</div>
<?php } ?>
</fieldset>
<!--id="content_general"--></div>


<div id="content_payment" class="hidden">

    <input name="table_data[conditions][payment]" value="" type="hidden">
    <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
        <thead>
            <tr>
                <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"payment"), 0);?>
</th>
                <th width="64%"><?php echo $_smarty_tpl->__("payment");?>
</th>
                <th width="20%"><?php echo $_smarty_tpl->__("processor");?>
</th>
                <th width="15%" class="center"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
            <tr>
                <td data-th="&nbsp;">
                    <input type="checkbox" name="table_data[conditions][payment][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['conditions']->value['payment'][$_smarty_tpl->tpl_vars['payment']->value['payment_id']]) {?>checked="checked"<?php }?> class="cm-item-payment"></td>
                <td data-th="<?php echo $_smarty_tpl->__("payment");?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td data-th="<?php echo $_smarty_tpl->__("processor");?>
">
                        <?php  $_smarty_tpl->tpl_vars["processor"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["processor"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["processor"]->key => $_smarty_tpl->tpl_vars["processor"]->value) {
$_smarty_tpl->tpl_vars["processor"]->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_id']==$_smarty_tpl->tpl_vars['processor']->value['processor_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['processor']->value['processor'], ENT_QUOTES, 'UTF-8');
}?>
                        <?php } ?>
                </td>
                <td class="center" data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['usergroup']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['usergroup'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php echo $_smarty_tpl->__("all");?>
-<?php }?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--id="content_payment"--></div>


<div id="content_location" class="hidden">

    <input name="table_data[conditions][location]" value="" type="hidden">
    <?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
    <div class="table-wrapper">
        <table class="table table-middle table--relative">
        <thead>
            <tr>
                <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"location"), 0);?>
</th>
                <th><?php echo $_smarty_tpl->__("name");?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
            <tr>
                <td class="center">
                    <input name="table_data[conditions][location][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['conditions']->value['location'][$_smarty_tpl->tpl_vars['destination']->value['destination_id']]) {?>checked="checked"<?php }?> class="cm-item-location"></td>
                <td>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--id="content_location"--></div>


<div id="content_status" class="hidden">
    <input name="table_data[conditions][status]" value="" type="hidden">
    <?php if ($_smarty_tpl->tpl_vars['order_status_descr']->value) {?>
    <div class="table-wrapper">
        <table class="table table-middle table--relative">
        <thead>
            <tr>
                <th width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"status"), 0);?>
</th>
                <th><?php echo $_smarty_tpl->__("status");?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_status_descr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
            <tr>
                <td class="center">
                    <input name="table_data[conditions][status][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['conditions']->value['status'][$_smarty_tpl->tpl_vars['id']->value]) {?>checked="checked"<?php }?> class="cm-item-status"></td>
                <td>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--id="content_status"--></div>


<div id="content_category" class="hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"table_data[conditions][category]",'data_id'=>"categories_list",'item_ids'=>$_smarty_tpl->tpl_vars['conditions']->value['category'],'no_item_text'=>$_smarty_tpl->__("no_items"),'category_id'=>$_smarty_tpl->tpl_vars['c_ids']->value,'multiple'=>true,'placement'=>'right'), 0);?>

</div>



<div id="content_order" class="hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/orders/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>$_smarty_tpl->tpl_vars['conditions']->value['order'],'no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"order_items",'input_name'=>"table_data[conditions][order]"), 0);?>

</div>



<div id="content_product" class="hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"table_data[conditions][product]",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['conditions']->value['product'],'type'=>"links",'placement'=>'right'), 0);?>

</div>



<div id="content_user" class="hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"sales_rep_users",'input_name'=>"table_data[conditions][user]",'item_ids'=>$_smarty_tpl->tpl_vars['conditions']->value['user'],'placement'=>"right",'but_meta'=>"btn",'but_icon'=>"icon-plus"), 0);?>

</div>


<div id="content_issuer" class="hidden">

    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['extra_url'] = new Smarty_variable("&user_type=V", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['extra_url'] = new Smarty_variable("&user_type=A", null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"sales_rep_issuers",'input_name'=>"table_data[conditions][issuer]",'item_ids'=>$_smarty_tpl->tpl_vars['conditions']->value['issuer'],'placement'=>"right",'but_meta'=>"btn",'but_icon'=>"icon-plus",'extra_url'=>$_smarty_tpl->tpl_vars['extra_url']->value), 0);?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['table_id']->value) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_report"),'href'=>"sales_reports.view?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table_id']->value)));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("clear_conditions"),'href'=>"sales_reports.clear_conditions?table_id=".((string)$_smarty_tpl->tpl_vars['table_id']->value)."&report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value),'method'=>"POST"));?>
</li>
            <?php $_smarty_tpl->tpl_vars["select_languages"] = new Smarty_variable("true", null, 0);?>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[sales_reports.update_table]",'hide_second_button'=>true,'save'=>$_smarty_tpl->tpl_vars['table_id']->value,'but_target_form'=>"statistics_table",'but_role'=>"submit-link"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['table_id']->value ? $_smarty_tpl->tpl_vars['table']->value['description'] : $_smarty_tpl->__("new_chart"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
