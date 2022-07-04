<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 17:46:10
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_features/groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781362459629f1052204ef2-76041805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc51cd4b712ccf2b9895f44d77326484e0fb26c4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_features/groups.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '781362459629f1052204ef2-76041805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'runtime' => 0,
    'features' => 0,
    'has_available_features' => 0,
    'p_feature' => 0,
    'r_url' => 0,
    'top_feature' => 0,
    'non_editable' => 0,
    'feature_category_ids' => 0,
    'top_features_names' => 0,
    'included_features_href' => 0,
    'href_edit' => 0,
    'href_delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f1052257019_76255854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f1052257019_76255854')) {function content_629f1052257019_76255854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_to_json')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.to_json.php';
if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','internal_feature_group_name_tooltip','storefront_name','features','categories','status','product_feature_groups_are_not_selectable_for_context_menu','name','view','features','categories','delete','view','status','no_data','new_group','new_group','feature_groups'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['r_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(false, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['has_available_features'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['runtime']->value['company_id'])||in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['features']->value,'company_id')), null, 0);?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_features_form" id="manage_product_features_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="update_features_list">
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_features_groups_table", null, null); ob_start(); ?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive">
                    <thead
                            data-ca-bulkedit-default-object="true"
                            data-ca-bulkedit-component="defaultObject"
                    >
                    <tr>
                        <th class="left" width="6%">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>fn_get_default_status_filters('',true),'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_features']->value), 0);?>


                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="20%"><?php echo $_smarty_tpl->__("name");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("internal_feature_group_name_tooltip")), 0);?>
 / <?php echo $_smarty_tpl->__("storefront_name");?>
</th>
                        <th width="30%"><?php echo $_smarty_tpl->__("features");?>
</th>
                        <th width="30%"><?php echo $_smarty_tpl->__("categories");?>
</th>
                        <th width="5%">&nbsp;</th>
                        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['p_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_feature']->key => $_smarty_tpl->tpl_vars['p_feature']->value) {
$_smarty_tpl->tpl_vars['p_feature']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(!fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features"), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['feature_category_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['p_feature']->value['categories_path'] ? (explode(",",$_smarty_tpl->tpl_vars['p_feature']->value['categories_path'])) : (array()), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['href_edit'] = new Smarty_variable("product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['href_delete'] = new Smarty_variable("product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['included_features_href'] = new Smarty_variable(fn_url("product_features.manage?parent_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])), null, 0);?>

                        <?php $_smarty_tpl->tpl_vars['top_features_names'] = new Smarty_variable(array(), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['top_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_feature']->_loop = false;
 $_smarty_tpl->tpl_vars['top_feature_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p_feature']->value['top_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_feature']->key => $_smarty_tpl->tpl_vars['top_feature']->value) {
$_smarty_tpl->tpl_vars['top_feature']->_loop = true;
 $_smarty_tpl->tpl_vars['top_feature_id']->value = $_smarty_tpl->tpl_vars['top_feature']->key;
?>
                            <?php $_smarty_tpl->createLocalArrayVariable('top_features_names', null, 0);
$_smarty_tpl->tpl_vars['top_features_names']->value[] = $_smarty_tpl->tpl_vars['top_feature']->value['internal_name'];?>
                        <?php } ?>

                        <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target<?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> longtap-selection-disable<?php }?>"
                            data-ct-product_features="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-category-ids="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['feature_category_ids']->value), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-feature-group="false"
                            <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("product_feature_groups_are_not_selectable_for_context_menu");?>
"<?php }?>
                        >
                            <td width="6%" class="left" data-th="&nbsp;">
                                <input type="checkbox" name="feature_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['p_feature']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                <div class="object-group-link-wrap">
                                    <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                        <a class="row-status cm-external-click <?php if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?> data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php } else { ?>
                                        <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['p_feature']->value['internal_name'])===null||$tmp==='' ? $_smarty_tpl->__("view") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                    <span class="muted"><small> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
</small></span>
                                    <div><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</small></div>
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['p_feature']->value), 0);?>

                                </div>
                            </td>
                            <td width="30%" data-th="<?php echo $_smarty_tpl->__("features");?>
">
                                <div class="row-status object-group-details">
                                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['top_features_names']->value)>0) {?>
                                        <span>
                                            <?php echo htmlspecialchars(implode(", ",$_smarty_tpl->tpl_vars['top_features_names']->value), ENT_QUOTES, 'UTF-8');
if (smarty_modifier_count($_smarty_tpl->tpl_vars['p_feature']->value['top_features'])<$_smarty_tpl->tpl_vars['p_feature']->value['features_count']) {?>,...<?php }?>
                                        </span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['included_features_href']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php echo $_smarty_tpl->tpl_vars['p_feature']->value['features_count'];?>
)</a>
                                    <?php }?>
                                </div>
                            </td>
                            <td width="30%" data-th="<?php echo $_smarty_tpl->__("categories");?>
">
                                <div class="row-status object-group-details">
                                    <?php echo $_smarty_tpl->tpl_vars['p_feature']->value['feature_description'];?>

                                </div>
                            </td>
                            <td width="5%" class="nowrap" data-th="&nbsp;">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0);?>
</li>
                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("delete"),'href'=>$_smarty_tpl->tpl_vars['href_delete']->value,'class'=>"cm-confirm cm-ajax cm-ajax-force cm-ajax-full-render cm-delete-row",'data'=>array("data-ca-target-id"=>"pagination_contents"),'method'=>"POST"));?>
</li>
                                        <?php } else { ?>
                                            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'act'=>"edit",'link_text'=>$_smarty_tpl->__("view"),'href'=>$_smarty_tpl->tpl_vars['href_edit']->value,'no_icon_link'=>true), 0);?>
</li>
                                        <?php }?>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>
                            </td>
                            <td width="10%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'],'status'=>$_smarty_tpl->tpl_vars['p_feature']->value['status'],'hidden'=>true,'object_id_name'=>"feature_id",'table'=>"product_features",'update_controller'=>"product_features"), 0);?>

                            </td>
                        </tr>
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

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_product_features_form",'object'=>"product_features_groups",'items'=>Smarty::$_smarty_vars['capture']['product_features_groups_table']), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--update_features_list--></div>
    </form>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>array(),'in_popup'=>true,'is_group'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_feature",'text'=>$_smarty_tpl->__("new_group"),'title'=>$_smarty_tpl->__("new_group"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/product_feature_groups_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.groups"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("feature_groups"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
