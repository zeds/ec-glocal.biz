<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/companies/components/company_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19240975806294b6bc667351-98320272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189a91e2e8de7a5eb0cb1e7bcdc08d558cb8c0be' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/companies/components/company_field.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19240975806294b6bc667351-98320272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'runtime' => 0,
    'selected' => 0,
    'disable_company_picker' => 0,
    'company_field_name' => 0,
    'zero_company_id_name_lang_var' => 0,
    'name' => 0,
    'id' => 0,
    'meta' => 0,
    'url_extra' => 0,
    'onclick' => 0,
    'js_action' => 0,
    'no_wrap' => 0,
    'tooltip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bc6870f3_59709202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bc6870f3_59709202')) {function content_6294b6bc6870f3_59709202($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('owner_company'));
?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['required']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(!$_smarty_tpl->tpl_vars['selected']->value||fn_allowed_for("MULTIVENDOR"))&&!$_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['company_field_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['company_field_name']->value)===null||$tmp==='' ? $_smarty_tpl->__("owner_company") : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['required']->value ? '' : "0", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(fn_get_default_company_id(), null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("c_body", null, null); ob_start(); ?>
    <input type="hidden" class="cm-no-failed-msg" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
            <div class="text-type-value"><?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <div class="text-type-value ajax-select-wrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['url_extra'] = new Smarty_variable("&show_all=Y&default_label=".((string)$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['url_extra'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url_extra']->value)."&search=Y", null, 0);?>
                    <?php }?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?onclick=".((string)$_smarty_tpl->tpl_vars['onclick']->value).((string)$_smarty_tpl->tpl_vars['url_extra']->value),'text'=>fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value),'result_elm'=>(($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp),'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector",'js_action'=>$_smarty_tpl->tpl_vars['js_action']->value), 0);?>

            </div>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?>
        <div class="control-group">
            <label class="control-label <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?>" for="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_field_name']->value, ENT_QUOTES, 'UTF-8');?>
</label>
            <div class="controls">
                <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

                <?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?>
                    <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['tooltip']->value;?>
</p>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

    <?php }?>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

<?php }?><?php }} ?>
