<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:57:53
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/payments/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140039865629e5c41dc57a8-88501063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aaff7477b47f7ad40a2d88a896f81cb375a8392' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/payments/manage.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1140039865629e5c41dc57a8-88501063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_processors' => 0,
    'payment_category' => 0,
    'p' => 0,
    'is_allow_update_payments' => 0,
    'payments' => 0,
    'draggable' => 0,
    'runtime' => 0,
    'payment' => 0,
    'status' => 0,
    'skip_delete' => 0,
    'can_change_status' => 0,
    'display' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5c41e15149_17431396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5c41e15149_17431396')) {function content_629e5c41e15149_17431396($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_data','new_payments','add_payment','payment_methods'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
var processor_descriptions = [];
<?php  $_smarty_tpl->tpl_vars['payment_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_processors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_category']->key => $_smarty_tpl->tpl_vars['payment_category']->value) {
$_smarty_tpl->tpl_vars['payment_category']->_loop = true;
?>
    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
        processor_descriptions[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['processor_id'], ENT_QUOTES, 'UTF-8');?>
] = '<?php echo strtr($_smarty_tpl->tpl_vars['p']->value['description'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    <?php } ?>
<?php } ?>
function fn_switch_processor(payment_id, processor_id)
{
    Tygh.$('#tab_conf_' + payment_id).toggleBy(processor_id == 0);
    if (processor_id != 0) {
        var url = fn_url('payments.processor?payment_id=' + payment_id + '&processor_id=' + processor_id);
        Tygh.$('#tab_conf_' + payment_id + ' a').prop('href', url);
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', true);
        Tygh.$('#elm_payment_instructions_' + payment_id).ceEditor('destroy');
        if (processor_descriptions[processor_id]) {
            Tygh.$('#elm_processor_description_' + payment_id).html(processor_descriptions[processor_id]).show();
        } else {
            Tygh.$('#elm_processor_description_' + payment_id).hide();
        }

        Tygh.$('#elm_payment_instructions_' + payment_id).ceEditor('recover');

        Tygh.$.ceAjax('request', url, {
            result_ids: 'content_tab_details_*,content_tab_conf_*'
        });
    } else {
        Tygh.$('#elm_payment_tpl_' + payment_id).prop('disabled', false);
        Tygh.$('#content_tab_conf_' + payment_id).html('<!--content_tab_conf_' + payment_id + '-->');
        Tygh.$('#elm_processor_description_' + payment_id).hide();
    }
}
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['draggable'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_allow_update_payments']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_payments_form" id="manage_payments_form">
<?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("payments_table", null, null); ob_start(); ?>
<div class="items-container payment-methods <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>cm-sortable<?php }?>"
     <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>data-ca-sortable-table="payments" data-ca-sortable-id-name="payment_id"<?php }?>
     id="payments_list">
<div class="table-responsive-wrapper longtap-selection">
    <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles payment-methods__list">
        <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
        >
        <tr>
            <th>
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)!=="vendor") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <input type="checkbox"
                           class="bulkedit-toggler hide"
                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                <?php }?>
            </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_smarty_tpl->tpl_vars['pf'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
 $_smarty_tpl->tpl_vars['pf']->value = $_smarty_tpl->tpl_vars['payment']->key;
?>
                <?php if (fn_allowed_for("ULTIMATE")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']!=$_smarty_tpl->tpl_vars['payment']->value['company_id']) {?>
                        <?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(true, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 0);?>

                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(false, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['payment']->value['processor_status']=="D") {?>
                    <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable("D", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(false, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("text", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment']->value['status'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(true, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable('', null, 0);?>
                <?php }?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:extra_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:extra_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:extra_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'text'=>$_smarty_tpl->tpl_vars['payment']->value['payment'],'status'=>$_smarty_tpl->tpl_vars['status']->value,'href'=>"payments.update?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'object_id_name'=>"payment_id",'table'=>"payments",'href_delete'=>"payments.delete?payment_id=".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'delete_target_id'=>"payments_list",'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'header_text'=>$_smarty_tpl->tpl_vars['payment']->value['payment'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['payment']->value['payment_id']),'no_table'=>true,'draggable'=>$_smarty_tpl->tpl_vars['draggable']->value,'can_change_status'=>$_smarty_tpl->tpl_vars['can_change_status']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data'],'is_bulkedit_menu'=>(defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)!=="vendor",'checkbox_col_width'=>"6%",'checkbox_name'=>"payment_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true), 0);?>

            <?php } ?>
        </tbody>
    </table>
</div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_payments_form",'object'=>"payments",'items'=>Smarty::$_smarty_vars['capture']['payments_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
    <!--payments_list--></div>
</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_payments']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/payments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment'=>array(),'hide_for_vendor'=>false), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_payments",'text'=>$_smarty_tpl->__("new_payments"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("add_payment"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("payment_methods"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>

<?php }} ?>
