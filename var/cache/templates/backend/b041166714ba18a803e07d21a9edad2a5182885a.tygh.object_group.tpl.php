<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:19
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/object_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5751236116294b6bf1b1d15-00402521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b041166714ba18a803e07d21a9edad2a5182885a' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/object_group.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5751236116294b6bf1b1d15-00402521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_responsive_table_without_title' => 0,
    'no_table' => 0,
    'is_responsive_table' => 0,
    'table_striped' => 0,
    'status' => 0,
    'additional_class' => 0,
    'bulkedit_disabled_notice' => 0,
    'row_id' => 0,
    'table' => 0,
    'id' => 0,
    'is_bulkedit_menu' => 0,
    'bulkedit_menu_category_ids' => 0,
    'checkbox_name' => 0,
    'show_checkboxes' => 0,
    'checkbox_col_width' => 0,
    'checkbox_value' => 0,
    'checked' => 0,
    'hidden_checkbox' => 0,
    'no_padding' => 0,
    'draggable' => 0,
    'href_desc' => 0,
    'href_desc_row_hint' => 0,
    'non_editable' => 0,
    'no_popup' => 0,
    'href' => 0,
    'text' => 0,
    'main_link' => 0,
    'link_meta' => 0,
    'is_promo' => 0,
    'text_wrap' => 0,
    'not_clickable' => 0,
    'id_prefix' => 0,
    'show_id' => 0,
    'company_object' => 0,
    'details' => 0,
    'extra_data' => 0,
    'tool_items' => 0,
    'is_view_link' => 0,
    'link_text' => 0,
    'onclick' => 0,
    'header_text' => 0,
    'act' => 0,
    'picker_meta' => 0,
    'href_delete' => 0,
    'skip_delete' => 0,
    'class' => 0,
    'delete_target_id' => 0,
    'delete_data' => 0,
    'links' => 0,
    'nostatus' => 0,
    'status_row_hint' => 0,
    'can_change_status' => 0,
    'hidden' => 0,
    'object_id_name' => 0,
    'hide_for_vendor' => 0,
    'display' => 0,
    'update_controller' => 0,
    'st_result_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bf1ffa21_46858953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bf1ffa21_46858953')) {function content_6294b6bf1ffa21_46858953($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view','edit','delete'));
?>
<?php $_smarty_tpl->tpl_vars['is_responsive_table_without_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_responsive_table_without_title']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['no_table']->value) {?>
<div class="<?php if ($_smarty_tpl->tpl_vars['is_responsive_table']->value) {?>table-responsive-wrapper<?php } else { ?>table-wrapper<?php }?>">
    <table width="100%" class="table table-middle table--relative table-objects <?php if ($_smarty_tpl->tpl_vars['is_responsive_table']->value) {?>table-responsive <?php if ($_smarty_tpl->tpl_vars['is_responsive_table_without_title']->value) {?>table-responsive-w-titles<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['table_striped']->value) {?> table-striped<?php }?>">
        <tbody>
    <?php }?>
        <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-row-item <?php if ($_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value) {?>longtap-selection-disable<?php }?>" 
                <?php if ($_smarty_tpl->tpl_vars['row_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                data-ct-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['is_bulkedit_menu']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['bulkedit_menu_category_ids']->value) {?>
                        data-ca-category-ids="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bulkedit_menu_category_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value) {?>
                        data-ca-bulkedit-disabled-notice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bulkedit_disabled_notice']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                <?php }?>
            >
            <?php if ($_smarty_tpl->tpl_vars['checkbox_name']->value&&$_smarty_tpl->tpl_vars['show_checkboxes']->value) {?>
                <td 
                    <?php if ($_smarty_tpl->tpl_vars['checkbox_col_width']->value) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_col_width']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                    data-th="&nbsp;"
                >
                    <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['checkbox_value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?> class="cm-item<?php if ($_smarty_tpl->tpl_vars['hidden_checkbox']->value) {?> hidden<?php }?> cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                </td>
            <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['no_padding']->value) {?>
                <td width="1%" class="no-padding-td" data-th="&nbsp;">
                    <?php if ($_smarty_tpl->tpl_vars['draggable']->value) {?>
                        <span class="handler cm-sortable-handle"></span>
                    <?php }?>
                </td>
                <?php }?>

                <td width="<?php if ($_smarty_tpl->tpl_vars['href_desc']->value) {?>77<?php } else { ?>28<?php }?>%" <?php if ($_smarty_tpl->tpl_vars['href_desc_row_hint']->value) {?>data-th="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href_desc_row_hint']->value, ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-th="&nbsp;"<?php }?>>
                    <div class="object-group-link-wrap">
                    <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                        <a <?php if ($_smarty_tpl->tpl_vars['no_popup']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-status <?php if (!$_smarty_tpl->tpl_vars['main_link']->value) {?>cm-external-click<?php }
if ($_smarty_tpl->tpl_vars['non_editable']->value) {?> no-underline<?php }
if ($_smarty_tpl->tpl_vars['main_link']->value) {?> link<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_promo']->value) {?>cm-promo-popup<?php }?> <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>row-status--text-wrap<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['non_editable']->value&&!$_smarty_tpl->tpl_vars['not_clickable']->value) {?> data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['main_link']->value) {?> <?php if (!$_smarty_tpl->tpl_vars['is_promo']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['main_link']->value), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php } else { ?>
                        <span class="unedited-element block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? $_smarty_tpl->__("view") : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_id']->value) {?>
                        <span class="muted"><small> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
</small></span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['href_desc']->value) {?><small><?php echo $_smarty_tpl->tpl_vars['href_desc']->value;?>
</small><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['company_object']->value) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['company_object']->value), 0);?>

                    <?php }?>
                    </div>
                </td>
                <td width="<?php if ($_smarty_tpl->tpl_vars['href_desc']->value) {?>0<?php } else { ?>50<?php }?>%" data-th="&nbsp;">
                    <span class="row-status object-group-details"><?php echo $_smarty_tpl->tpl_vars['details']->value;?>
</span>
                </td>

                <?php if ($_smarty_tpl->tpl_vars['extra_data']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['extra_data']->value;?>

                <?php }?>

                <td width="10%" class="right nowrap" data-th="&nbsp;">

                    <div class="pull-right hidden-tools">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("items_tools", null, null); ob_start(); ?>
                        <?php if ($_smarty_tpl->tpl_vars['tool_items']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['tool_items']->value;?>

                        <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value||$_smarty_tpl->tpl_vars['is_view_link']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['no_popup']->value) {?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("edit") : $tmp),'href'=>$_smarty_tpl->tpl_vars['href']->value));?>
</li>
                                <?php } else { ?>
                                   <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['id']->value),'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->tpl_vars['header_text']->value,'act'=>(($tmp = @$_smarty_tpl->tpl_vars['act']->value)===null||$tmp==='' ? "edit" : $tmp),'picker_meta'=>$_smarty_tpl->tpl_vars['picker_meta']->value,'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'is_promo'=>$_smarty_tpl->tpl_vars['is_promo']->value,'no_icon_link'=>true), 0);?>
</li>
                                <?php }?>
                            <?php }?>

                            <?php if (!$_smarty_tpl->tpl_vars['non_editable']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['href_delete']->value&&!$_smarty_tpl->tpl_vars['skip_delete']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['is_promo']->value) {?>
                                        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("cm-promo-popup", null, 0);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("cm-delete-row", null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable($_smarty_tpl->tpl_vars['href_delete']->value, null, 0);?>
                                    <?php }?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("delete"),'href'=>$_smarty_tpl->tpl_vars['href']->value,'class'=>"cm-confirm cm-ajax cm-ajax-force cm-ajax-full-render ".((string)$_smarty_tpl->tpl_vars['class']->value),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['delete_target_id']->value,"data-ca-params"=>$_smarty_tpl->tpl_vars['delete_data']->value),'method'=>"POST"));?>
</li>
                                <?php }?>
                            <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['items_tools'],'class'=>"dropleft"));?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                </td>
                <?php if (!$_smarty_tpl->tpl_vars['nostatus']->value) {?>
                    <td width="12%" <?php if ($_smarty_tpl->tpl_vars['status_row_hint']->value) {?>data-th="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_row_hint']->value, ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-th="&nbsp;"<?php }?>>
                        <div class="pull-right nowrap">
                            <?php if ($_smarty_tpl->tpl_vars['non_editable']->value==true||$_smarty_tpl->tpl_vars['is_promo']->value) {?>
                                <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['can_change_status']->value) {?>
                                <?php $_smarty_tpl->tpl_vars["non_editable"] = new Smarty_variable(false, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable('', null, 0);?>
                            <?php }?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'hidden'=>$_smarty_tpl->tpl_vars['hidden']->value,'object_id_name'=>$_smarty_tpl->tpl_vars['object_id_name']->value,'table'=>$_smarty_tpl->tpl_vars['table']->value,'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'non_editable'=>$_smarty_tpl->tpl_vars['non_editable']->value,'update_controller'=>$_smarty_tpl->tpl_vars['update_controller']->value,'st_result_ids'=>$_smarty_tpl->tpl_vars['st_result_ids']->value), 0);?>

                        </div>
                    </td>
                <?php }?>
            <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_id']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
    <?php if (!$_smarty_tpl->tpl_vars['no_table']->value) {?>
        </tbody>
    </table>
</div>
<?php }?>
<?php }} ?>
