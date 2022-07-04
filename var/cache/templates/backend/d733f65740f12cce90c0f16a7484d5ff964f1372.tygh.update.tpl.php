<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 04:44:04
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_filters/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159739574362951e845d0a15-77834371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd733f65740f12cce90c0f16a7484d5ff964f1372' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_filters/update.tpl',
      1 => 1626227364,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '159739574362951e845d0a15-77834371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter' => 0,
    'id' => 0,
    'allow_save' => 0,
    'in_popup' => 0,
    'config' => 0,
    'redirect_url' => 0,
    'filter_fields' => 0,
    'field' => 0,
    'field_type' => 0,
    'filter_features' => 0,
    'feature' => 0,
    'subfeature' => 0,
    'picker_selected_companies' => 0,
    'hide_first_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62951e84633545_26361705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62951e84633545_26361705')) {function content_62951e84633545_26361705($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','categories','name','position_short','filter_by','product_fields','features','round_to','display_type','expanded','minimized','display_variants_count','text_all_categories_included','filter'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['filter']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['filter_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(true, null, 0);?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters"), null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="update_filter_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" class="form-horizontal form-edit <?php if (fn_check_form_permissions('')||!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>">

<input type="hidden" class="cm-no-hide-input" name="filter_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php $_smarty_tpl->tpl_vars['redirect_url'] = new Smarty_variable(fn_url("product_filters.manage"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['redirect_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php }?>
<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['redirect_url']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label for="elm_filter_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" id="elm_filter_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[filter]" class="span9" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"filter_data[company_id]",'id'=>"elm_filter_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['filter']->value['company_id']), 0);?>

        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_filter_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position_short");?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_position_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['position'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['id']->value) {?>0<?php }?>"/>
            </div>
        </div>

        <div class="control-group object-picker__simple">
            <label class="control-label cm-required" for="elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("filter_by");?>
</label>
            <div class="controls select2-container--mini">
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                
                <select name="filter_data[filter_type]" onchange="fn_check_product_filter_type(this.value, 'tab_feature_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
);" id="elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-object-picker">
                <?php if ($_smarty_tpl->tpl_vars['filter_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("product_fields");?>
">
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_type']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['field']->value['hidden']) {?>
                                <option value="<?php if ($_smarty_tpl->tpl_vars['field']->value['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</option>
                            <?php }?>
                        <?php } ?>
                    </optgroup>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['filter_features']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <option value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
                    <?php  $_smarty_tpl->tpl_vars['subfeature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfeature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['subfeatures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfeature']->key => $_smarty_tpl->tpl_vars['subfeature']->value) {
$_smarty_tpl->tpl_vars['subfeature']->_loop = true;
?>
                        <option value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")||$_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::DATE")) {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subfeature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    <?php }?>
                    <?php } ?>
                    </optgroup>
                <?php }?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="filter_data[filter_type]" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_id']) {?>FF-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');
}?>">
                <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['feature_group']) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_group'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></span>
            <?php }?>
            </div>
        </div>

        <div class="control-group<?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?> hidden<?php }?>" id="round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("round_to");?>
</label>
            <div class="controls">
            <select name="filter_data[round_to]" id="elm_filter_round_to_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <option value="1"  <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==1) {?>   selected="selected"<?php }?>>1</option>
                <option value="10" <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==10) {?>  selected="selected"<?php }?>>10</option>
                <option value="100"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==100) {?> selected="selected"<?php }?>>100</option>
                <option value="1000"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==1000) {?> selected="selected"<?php }?>>1000</option>
                <option value="10000"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to']==10000) {?> selected="selected"<?php }?>>10000</option>

            </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_filter_display_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_type");?>
</label>
            <div class="controls">
            <select name="filter_data[display]" id="elm_filter_display_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=='Y') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("expanded");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display']=='N') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("minimized");?>
</option>
            </select>
            </div>
        </div>

        <div class="control-group <?php if (!($_smarty_tpl->tpl_vars['filter']->value['feature_id']||$_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range']||$_smarty_tpl->tpl_vars['filter']->value['feature']=='Vendor')) {?> hidden<?php }?>" id="display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_variants_count");?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_display_count_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[display_count]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['display_count'])===null||$tmp==='' ? "10" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
    </fieldset>
    </div>

    <div class="hidden" id="content_tab_categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"filter_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['filter']->value['categories_path'],'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>$_smarty_tpl->__("text_all_categories_included"),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['filter']->value['company_id'],'but_meta'=>"pull-right"), 0);?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="buttons-container">
        <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[product_filters.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0);?>

    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters")) {?>
            <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php $_smarty_tpl->tpl_vars["hide_first_button"] = new Smarty_variable(true, null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[product_filters.update]",'but_target_form'=>"update_filter_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    fn_check_product_filter_type(Tygh.$('#elm_filter_filter_by_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').val(), 'tab_feature_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("filter");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp4.": ".((string)$_smarty_tpl->tpl_vars['filter']->value['filter']),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>

<?php }?>
<?php }} ?>
