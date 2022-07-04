<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 08:35:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_features/quick_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180042106962a283b48ba773-96026015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7544e82e687b3644f54639536825a64c7c0fc00' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_features/quick_add.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180042106962a283b48ba773-96026015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_header' => 0,
    'enable_popover' => 0,
    'form_id' => 0,
    'action_context' => 0,
    'feature' => 0,
    'meta' => 0,
    'event_id' => 0,
    'is_name_focus' => 0,
    'runtime' => 0,
    'company_id' => 0,
    'show_purposes' => 0,
    'purposes' => 0,
    'purpose' => 0,
    'picker_id' => 0,
    'is_variants_focus' => 0,
    'category_tabindex' => 0,
    'rnd' => 0,
    'category_id' => 0,
    'category_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a283b490db19_51906644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a283b490db19_51906644')) {function content_62a283b490db19_51906644($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('new_feature','product_feature.purpose','product_feature.purpose.','variants','type_to_create','use_comma_enter_to_separate_variants','feature_category','advanced_feature_creation','new_feature','create'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/product_features/quick_add.js"),$_smarty_tpl);?>




<?php $_smarty_tpl->tpl_vars['show_header'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_header']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['enable_popover'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['enable_popover']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['form_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['form_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['action_context'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['action_context']->value)===null||$tmp==='' ? $_REQUEST['_action_context'] : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value['description']) {?>
    <?php $_smarty_tpl->tpl_vars['is_variants_focus'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['is_name_focus'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<div class="features-create__block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['enable_popover']->value) {?>well<?php }?>"
    data-ca-features-create-elem="block"
    data-ca-features-create-variants-selector="#elm_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-features-create-variants-data-selector="[data-ca-features-create-elem='variantsData']"
    data-ca-features-create-request-form="quick_add_feature_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-features-create-event-id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['event_id']->value)===null||$tmp==='' ? "product_feature_created" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
>
    <?php if ($_smarty_tpl->tpl_vars['show_header']->value) {?>
        <div class="features-create__header">
            <h4 class="subheader features-create__subheader"><?php echo $_smarty_tpl->__("new_feature");?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['enable_popover']->value) {?>
                <button type="button" class="close flex-vertical-centered cm-inline-dialog-closer" data-ca-features-create-elem="close">
                    <i class="icon-remove"></i>
                </button>
            <?php }?>
        </div>
    <?php }?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="quick_add_feature_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="quick_add_feature_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['action_context']->value) {?>data-ca-ajax-done-event="ce.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action_context']->value, ENT_QUOTES, 'UTF-8');?>
.product_feature_save"<?php }?>
        class="cm-ajax form-horizontal form-edit" enctype="multipart/form-data"
    >
        <input type="hidden" name="feature_id" value="0" />
        <input type="hidden" name="feature_data[feature_id]" value="0" />
        <input type="hidden" name="feature_data[parent_id]" value="0">

        
        <?php echo $_smarty_tpl->getSubTemplate ("components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['form_id']->value,'source_value'=>$_smarty_tpl->tpl_vars['feature']->value['internal_name'],'source_name'=>"feature_data[internal_name]",'target_value'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'target_name'=>"feature_data[description]",'type'=>"feature_name",'is_source_focus'=>$_smarty_tpl->tpl_vars['is_name_focus']->value), 0);?>

        

        
        <?php if (fn_allowed_for("MULTIVENDOR")||$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable(fn_get_default_company_id(), null, 0);?>
        <?php }?>
        <input type="hidden" name="feature_data[company_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        

        <input type="hidden" name="feature_data[feature_type]" value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['show_purposes']->value) {?>            
            
            <div class="control-group">
                <label class="control-label cm-required cm-multiple-radios" for="elm_feature_purpose_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_feature.purpose");?>
</label>
                <div class="controls">
                    <ul class="unstyled">
                        <?php  $_smarty_tpl->tpl_vars['purpose_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purpose_data']->_loop = false;
 $_smarty_tpl->tpl_vars['purpose'] = new Smarty_Variable;
 $_from = array_reverse($_smarty_tpl->tpl_vars['purposes']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['purpose_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['purpose_data']->key => $_smarty_tpl->tpl_vars['purpose_data']->value) {
$_smarty_tpl->tpl_vars['purpose_data']->_loop = true;
 $_smarty_tpl->tpl_vars['purpose']->value = $_smarty_tpl->tpl_vars['purpose_data']->key;
 $_smarty_tpl->tpl_vars['purpose_data']->index++;
 $_smarty_tpl->tpl_vars['purpose_data']->first = $_smarty_tpl->tpl_vars['purpose_data']->index === 0;
?>
                            <li>
                                <label for="elm_feature_purpose_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio inline"><?php echo $_smarty_tpl->__("product_feature.purpose.".((string)$_smarty_tpl->tpl_vars['purpose']->value));?>
<input
                                        type="radio"
                                        name="feature_data[purpose]"
                                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        id="elm_feature_purpose_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['purpose_data']->first) {?>checked="checked"<?php }?>>
                                </label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            
            <input type="hidden" name="feature_data[purpose]" value="find_products">
            <input type="hidden" name="feature_data[filter_style]" value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductFilterStyles::CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
">
            
        <?php }?>

        

        
        <div class="control-group">
            <label class="control-label" for="elm_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("variants");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable(uniqid(), null, 0);?>
                <div class="object-picker object-picker--product-features-variants-add" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="object-picker__select-group object-picker__select-group--product-features-variants-add">
                        <div class="object-picker__simple object-picker__simple--product-features-variants-add">
                            <select multiple
                                    id="elm_variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-object-picker object-picker__select object-picker__select--product-features-variants-add"
                                    data-ca-object-picker-object-type="productFeaturesVariants"
                                    data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("type_to_create");?>
"
                                    data-ca-object-picker-allow-clear="true"
                                    data-ca-object-picker-has-strict-compliance-matcher="true"
                                    data-ca-object-picker-enable-create-object="true"
                                    data-ca-object-picker-token-separators="[',']"
                                    data-ca-object-picker-container-css-class="object-picker__selection-simple object-picker__selection-simple--full-width object-picker__selection-simple--product-features-variants-add"
                                    data-ca-object-picker-show-dropdown="false"
                                    data-ca-object-picker-select-on-close="true"
                                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_variants_focus']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-object-picker-has-removable-items="true"
                            ></select>
                            <div class="hidden" data-ca-features-create-elem="variantsData"></div>
                            <p class="muted description"><?php echo $_smarty_tpl->__("use_comma_enter_to_separate_variants");?>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        
        <div class="control-group">
            <label class="control-label" for="elm_feature_category_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_category");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->tpl_vars['rnd'] = new Smarty_variable(uniqid(), null, 0);?>
                <?php ob_start();
echo htmlspecialchars(http_build_query(array("restricted_by_ids"=>array_values((($tmp = @$_smarty_tpl->tpl_vars['category_ids']->value)===null||$tmp==='' ? array() : $tmp)))), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/select2/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select2_tabindex'=>$_smarty_tpl->tpl_vars['category_tabindex']->value,'select2_select_id'=>"product_features_categories_path_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'select2_name'=>"feature_data[categories_path]",'select2_category_ids'=>array($_smarty_tpl->tpl_vars['category_id']->value),'select2_wrapper_meta'=>"cm-field-container",'select2_select_meta'=>"input-large",'select2_required'=>"true",'select2_show_advanced'=>false,'select2_close_on_select'=>true,'select2_data_url'=>fn_url("categories.get_categories_list?".$_tmp1),'select2_allow_clear'=>true,'select2_enable_add'=>false), 0);?>

            </div>
        </div>
        

        <div class="features-create__footer">
            <?php ob_start();
echo htmlspecialchars(fn_url("product_features.add"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"advanced_feature_creation_".((string)$_smarty_tpl->tpl_vars['form_id']->value),'text'=>$_smarty_tpl->__("advanced_feature_creation"),'title'=>$_smarty_tpl->__("new_feature"),'href'=>$_tmp2,'class'=>"btn cm-dialog-opener cm-dialog-destroy-on-close",'target_id'=>"add_product_feature_popup_".((string)$_smarty_tpl->tpl_vars['form_id']->value),'data'=>array("data-ca-target-id"=>"add_product_feature_popup","data-ca-dialog-content-request-form"=>"quick_add_feature_form_".((string)$_smarty_tpl->tpl_vars['form_id']->value),"data-ca-dialog-action-context"=>$_smarty_tpl->tpl_vars['action_context']->value)));?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("create"),'but_name'=>"dispatch[product_features.update]"), 0);?>

        </div>
    </form>
</div><?php }} ?>
