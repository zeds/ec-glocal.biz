<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 16:16:14
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/promotions/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705026905629efb3e7b0018-99940663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113e91c01e673c475f7286f188f8bbc660c0098c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/promotions/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1705026905629efb3e7b0018-99940663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'promotions' => 0,
    'promotion_statuses' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'promotion' => 0,
    'allow_save' => 0,
    'additional_class' => 0,
    'link_text' => 0,
    'status_display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629efb3e81c893_48138017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629efb3e81c893_48138017')) {function content_629efb3e81c893_48138017($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','stop_other_rules','priority','zone','status','edit','view','name','stop_other_rules','yes','no','priority','zone','delete','status','no_data','add_catalog_promotion','add_cart_promotion','promotions'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="promotion_form" name="promotion_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_icon'] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_dummy'] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['promotion_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['promotions']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("promotions_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive longtap-selection">
            <thead 
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="5%" class="mobile-hide">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['promotion_statuses']->value), 0);?>


                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th>
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="16%" class="center mobile-hide"><?php echo $_smarty_tpl->__("stop_other_rules");?>
</th>
                <th width="10%" class="nowrap center mobile-hide">
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=priority&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("priority");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="priority") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="10%" class="mobile-hide">
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=zone&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("zone");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="zone") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <th width="8%" class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            </tr>
            </thead>

            <?php  $_smarty_tpl->tpl_vars['promotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->key => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->_loop = true;
?>

                <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['promotion']->value,"promotions"), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['additional_class'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['status_display'] = new Smarty_variable('', null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['additional_class'] = new Smarty_variable("cm-hide-inputs", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['status_display'] = new Smarty_variable("text", null, 0);?>
                <?php }?>

            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['promotion']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td width="5%" class="mobile-hide">
                    <input name="promotion_ids[]" type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['promotion']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['promotion']->value), 0);?>

                <td width="16%" class="center mobile-hide" data-th="<?php echo $_smarty_tpl->__("stop_other_rules");?>
">
                    <span><?php if ($_smarty_tpl->tpl_vars['promotion']->value['stop_other_rules']==smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?></span>
                </td>
                <td width="10%" class="center mobile-hide" data-th="<?php echo $_smarty_tpl->__("priority");?>
">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['priority'], ENT_QUOTES, 'UTF-8');?>
</span>
                </td>
                <td width="10%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("zone");?>
">
                    <span class="row-status"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['promotion']->value['zone']);?>
</span>
                </td>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <td width="8%" class="right mobile-hide">
                    <div class="hidden-tools">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>"promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])));?>
</li>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"promotions.delete?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id']),'method'=>"POST"));?>
</li>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                </td>
                <td width="10%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'display'=>$_smarty_tpl->tpl_vars['status_display']->value,'id'=>$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'],'status'=>$_smarty_tpl->tpl_vars['promotion']->value['status'],'hidden'=>true,'object_id_name'=>"promotion_id",'table'=>"promotions"), 0);?>

                </td>
            </tr>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"promotion_form",'object'=>"promotions",'items'=>Smarty::$_smarty_vars['capture']['promotions_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("add_catalog_promotion"),'href'=>"promotions.add?zone=catalog"));?>
</li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("add_cart_promotion"),'href'=>"promotions.add?zone=cart"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>

    
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
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("promotions"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>
<?php }} ?>
