<?php /* Smarty version Smarty-3.1.21, created on 2022-06-06 19:58:37
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/order_management/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:408044394629dddddebb778-26274182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001d13a095cc871b685e0dc70d0fd6b5bdc5e6d0' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/order_management/update.tpl',
      1 => 1601972810,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '408044394629dddddebb778-26274182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'ORDER_MANAGEMENT' => 0,
    'result_ids' => 0,
    'cart' => 0,
    'is_edit' => 0,
    'cart_products' => 0,
    'is_empty_cart' => 0,
    'selected_storefront_id' => 0,
    'notify_customer_status' => 0,
    'notify_department_status' => 0,
    'notify_vendor_status' => 0,
    'but_text_' => 0,
    '_but_text' => 0,
    '_tabindex' => 0,
    'status_settings' => 0,
    'title_start' => 0,
    'title_end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629dddddf27c69_59806126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629dddddf27c69_59806126')) {function content_629dddddf27c69_59806126($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('products_required','storefront','customer_notes','staff_only_notes','notify_customer','notify_orders_department','notify_vendor','create','create_process_payment','create_new_order','save','save_process_payment','editing_order','cancel','add_new_order','editing_order','total','invoice','credit_memo','by'));
?>



<?php $_smarty_tpl->tpl_vars["result_ids"] = new Smarty_variable("om_ajax_*", null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/order_management.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/order_management_events.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<div class="hidden">
    <?php $_smarty_tpl->tpl_vars['users_shared_force'] = new Smarty_variable(false, null, 0);?>
    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['share_users']=="Y") {?>
            <?php $_smarty_tpl->tpl_vars['users_shared_force'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
<?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/customer_info_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>


<form id="jp_payments_form_id" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="admin-content-external-form" name="om_cart_form" enctype="multipart/form-data">

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ORDER_MANAGEMENT']->value, ENT_QUOTES, 'UTF-8');?>

<input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']||$_smarty_tpl->tpl_vars['cart']->value['user_data']) {?>
        <?php $_smarty_tpl->tpl_vars["is_edit"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <div id="om_ajax_customer_info">
        
        <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/profiles_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tabindex'=>"2",'user_data'=>$_smarty_tpl->tpl_vars['cart']->value['user_data'],'location'=>"O",'is_edit'=>$_smarty_tpl->tpl_vars['is_edit']->value,'allow_reselect_customer'=>!$_smarty_tpl->tpl_vars['cart']->value['order_id']), 0);?>

    <!--om_ajax_customer_info--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div class="row-fluid orders-wrap">
    <div class="span8">
        <div class="buttons-container">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:buttons_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:buttons_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="inline-block mobile-hide" id="button_trash_products">
                    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[order_management.delete]",'form'=>"om_cart_form",'class'=>"cm-skip-validation",'icon'=>"icon-trash"));?>

                    <?php }?>
                <!--button_trash_products--></div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:buttons_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <div class="cm-om-totals" id="om_ajax_update_totals">
        <?php if ($_smarty_tpl->tpl_vars['is_empty_cart']->value) {?>
        <label class="hidden cm-required" for="products_required"><?php echo $_smarty_tpl->__("products_required");?>
</label>
        <input type="hidden" id="products_required" name="products_required" value="" />
        <?php }?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tabindex'=>"1",'autofocus'=>"true"), 0);?>

        <hr>
        <div class="row-fluid">
            <div class="span6">
            <?php if (empty($_smarty_tpl->tpl_vars['cart']->value['disable_promotions'])) {?>
                
                <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:totals_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:totals_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:totals_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

            <div class="span6">
            
            <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
        <!--om_ajax_update_totals--></div>

        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")) {?>
            <div class="clearfix">
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("storefront");?>
</label>
                    <div class="controls">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"storefront_id",'item_ids'=>array($_smarty_tpl->tpl_vars['selected_storefront_id']->value),'show_advanced'=>false), 0);?>

                    </div>
                </div>
            </div>
        <?php }?>

        <div class="note clearfix">
            <div class="span6">
                <label for="customer_notes"><?php echo $_smarty_tpl->__("customer_notes");?>
</label>
                <textarea class="span12" name="customer_notes" id="customer_notes" cols="40" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
            <div class="span6">
                <label for="order_details"><?php echo $_smarty_tpl->__("staff_only_notes");?>
</label>
                <textarea class="span12" name="update_order[details]" id="order_details" cols="40" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['details'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="clearfix">
            <?php $_smarty_tpl->tpl_vars['notify_customer_status'] = new Smarty_variable(false, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['notify_department_status'] = new Smarty_variable(false, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['notify_vendor_status'] = new Smarty_variable(false, null, 0);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:notify_checkboxes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="control-group">
                    <label for="notify_user" class="checkbox"><?php echo $_smarty_tpl->__("notify_customer");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value==true) {?> checked="checked" <?php }?> name="notify_user" id="notify_user" value="Y" /></label>
                </div>
                <div class="control-group">
                    <label for="notify_department" class="checkbox"><?php echo $_smarty_tpl->__("notify_orders_department");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value==true) {?> checked="checked" <?php }?> name="notify_department" id="notify_department" value="Y" /></label>
                </div>
                <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <div class="control-group">
                    <label for="notify_vendor" class="checkbox"><?php echo $_smarty_tpl->__("notify_vendor");?>

                    <input type="checkbox" class="" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value==true) {?> checked="checked" <?php }?> name="notify_vendor" id="notify_vendor" value="Y" /></label>
                </div>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:notify_checkboxes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>

    <div class="span4">
        <div class="well orders-right-pane form-horizontal">
            
            <div class="statuses">
                <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            
            <div class="payments" id="om_ajax_update_payment">
                <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/payment_method.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!--om_ajax_update_payment--></div>

            
            <div class="shippings" id="om_ajax_update_shipping">
                <?php echo $_smarty_tpl->getSubTemplate ("views/order_management/components/shipping_method.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!--om_ajax_update_shipping--></div>
        </div>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']=='') {?>
        <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text_'] = new Smarty_variable($_smarty_tpl->__("create_process_payment"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable($_smarty_tpl->__("create_new_order"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_tabindex'] = new Smarty_variable("3", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->__("save"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_text_'] = new Smarty_variable($_smarty_tpl->__("save_process_payment"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__("editing_order"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['cart']->value['order_id']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_tabindex'] = new Smarty_variable("3", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_check_filter'] = new Smarty_variable("label:not(#om_ajax_update_payment)", null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['but_text_']->value,'dispatch'=>"dispatch[order_management.place_order]",'class'=>"cm-submit",'process'=>true));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']!='') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("cancel"),'but_role'=>"action",'but_href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['cart']->value['order_id'])), 0);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_name'=>"dispatch[order_management.place_order.save]",'but_role'=>"button_main",'tabindex'=>$_smarty_tpl->tpl_vars['_tabindex']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']=='') {?>
        <?php echo $_smarty_tpl->__("add_new_order");?>

    <?php } else { ?>

        <?php echo $_smarty_tpl->__("editing_order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <span class="f-middle"><?php echo $_smarty_tpl->__("total");?>
: <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['total']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['cart']->value['company_id']) {?>, <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['cart']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?></span>

        <span class="f-small">
        /<?php if ($_smarty_tpl->tpl_vars['cart']->value['company_id']) {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['cart']->value['company_id']), ENT_QUOTES, 'UTF-8');?>
)<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="I"&&$_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("invoice");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
        <?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
        (<?php echo $_smarty_tpl->__("credit_memo");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']], ENT_QUOTES, 'UTF-8');?>
)
        <?php }?>
        <?php echo $_smarty_tpl->__("by");?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['user_id']) {
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['user_id']) {
}?>
        / <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cart']->value['order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['cart']->value['order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </span>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="order_update">
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar_position'=>"left",'sidebar_icon'=>"icon-user"), 0);?>

<!--order_update--></div>

</form>
<?php }} ?>
