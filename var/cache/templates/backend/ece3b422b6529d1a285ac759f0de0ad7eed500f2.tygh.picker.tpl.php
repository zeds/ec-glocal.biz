<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:21:34
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1691711723629b322e76fc53-79047824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece3b422b6529d1a285ac759f0de0ad7eed500f2' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/picker.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1691711723629b322e76fc53-79047824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'item_ids' => 0,
    'extra_var' => 0,
    'no_container' => 0,
    'picker_view' => 0,
    'exclude_names' => 0,
    'include_names' => 0,
    'exclude_types' => 0,
    'section' => 0,
    'but_text' => 0,
    'input_name' => 0,
    'adjust_requireability' => 0,
    'view_only' => 0,
    'sortable' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'field_id' => 0,
    'profile_field' => 0,
    'disable_required' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b322e7a4124_03548006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b322e7a4124_03548006')) {function content_629b322e7a4124_03548006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_profile_fields','add_profile_fields','id','description','required','no_items'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>
    <div class="clearfix">
        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container pull-right"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
            <?php $_smarty_tpl->tpl_vars['exclude_names'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['exclude_names']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['include_names'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_names']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['exclude_types'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['exclude_types']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
            <?php ob_start();
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['exclude_names']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['include_names']->value), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['exclude_types']->value), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profile_fields.picker?section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&exclude_names=".$_tmp1."&include_names=".$_tmp2."&exclude_types=".$_tmp3."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_profile_fields") : $tmp),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn cm-dialog-opener",'but_icon'=>"icon-plus"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
        <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_profile_fields") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
<?php }?>

<input id="pf_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />
<div class="clearfix"></div>
<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive">
        <thead>
            <tr>
                <td width="1%"></td>
                <th width="15%"><?php echo $_smarty_tpl->__("id");?>
</th>
                <th width="60%"><?php echo $_smarty_tpl->__("description");?>
</th>
                <th width="15%" <?php if ($_smarty_tpl->tpl_vars['adjust_requireability']->value===false) {?>class="hidden"<?php }?>><?php echo $_smarty_tpl->__("required");?>
</th>
                <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?><th>&nbsp;</th><?php }?>
            </tr>
        </thead>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }
if ($_smarty_tpl->tpl_vars['sortable']->value) {?> data-cm-sortable-profile-fields-picker-container="true" data-ca-sortable-item-class="profile-field-picker__sortable-row" data-ca-data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/profile_fields/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."field_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'description'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."description".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0);?>

        <?php  $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_id']->key => $_smarty_tpl->tpl_vars['field_id']->value) {
$_smarty_tpl->tpl_vars['field_id']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['profile_field'] = new Smarty_variable(fn_get_profile_field($_smarty_tpl->tpl_vars['field_id']->value), null, 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("pickers/profile_fields/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field_id'=>$_smarty_tpl->tpl_vars['field_id']->value,'field_name'=>$_smarty_tpl->tpl_vars['profile_field']->value['field_name'],'description'=>$_smarty_tpl->tpl_vars['profile_field']->value['description'],'required'=>$_smarty_tpl->tpl_vars['profile_field']->value['checkout_required'],'disable_required'=>$_smarty_tpl->tpl_vars['disable_required']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value), 0);?>

        <?php } ?>
        </tbody>
        <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
        <tr class="no-items">
            <td colspan="<?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>5<?php } else { ?>4<?php }?>" data-th="&nbsp;"><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p></td>
        </tr>
        </tbody>
    </table>
</div>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/pickers/profile_fields.js"),$_smarty_tpl);?>

<?php }} ?>
