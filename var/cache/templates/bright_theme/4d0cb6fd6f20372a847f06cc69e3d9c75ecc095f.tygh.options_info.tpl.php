<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:18:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/common/options_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1506401296295349f4bb025-71999290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d0cb6fd6f20372a847f06cc69e3d9c75ecc095f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/common/options_info.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1506401296295349f4bb025-71999290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_options_title' => 0,
    'product_options' => 0,
    'po' => 0,
    'option_value' => 0,
    'has_option' => 0,
    'no_block' => 0,
    'product' => 0,
    'var' => 0,
    'file' => 0,
    'order_info' => 0,
    'filename' => 0,
    'settings' => 0,
    'inline_option' => 0,
    'fields_prefix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295349f51df68_72481751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295349f51df68_72481751')) {function content_6295349f51df68_72481751($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options','options'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["show_options_title"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_options_title']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        
        
        <?php $_smarty_tpl->tpl_vars['option_value'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['po']->value['value']), null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['option_value']->value)&&strlen($_smarty_tpl->tpl_vars['option_value']->value)) {?>
        
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
            <div class="ty-control-group ty-product-options__info clearfix">
            <?php if ($_smarty_tpl->tpl_vars['show_options_title']->value) {?>
                <label class="ty-product-options__title"><?php echo $_smarty_tpl->__("options");?>
:</label>
            <?php }?>
        <?php }?>
            <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
if (($_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::SELECTBOX")||$_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP"))&&!$_smarty_tpl->tpl_vars['po']->value['value']) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['po']->value['variants']) {
$_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']], null, 0);
} else {
$_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value, null, 0);
}
$_smarty_tpl->_capture_stack[0][] = array("options_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['var']->value['variant_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
$_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
$_smarty_tpl->tpl_vars["filename"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>, <?php }
}
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {
if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['options_content'])!='&nbsp;') {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"options:options_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"options:options_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<bdi><span class="ty-product-options clearfix"><span class="ty-product-options-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="ty-product-options-content"><?php echo Smarty::$_smarty_vars['capture']['options_content'];
if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span></span></bdi><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"options:options_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }
} ?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/options_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/options_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["show_options_title"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_options_title']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        
        
        <?php $_smarty_tpl->tpl_vars['option_value'] = new Smarty_variable(trim($_smarty_tpl->tpl_vars['po']->value['value']), null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['option_value']->value)&&strlen($_smarty_tpl->tpl_vars['option_value']->value)) {?>
        
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
            <div class="ty-control-group ty-product-options__info clearfix">
            <?php if ($_smarty_tpl->tpl_vars['show_options_title']->value) {?>
                <label class="ty-product-options__title"><?php echo $_smarty_tpl->__("options");?>
:</label>
            <?php }?>
        <?php }?>
            <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
if (($_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::SELECTBOX")||$_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP"))&&!$_smarty_tpl->tpl_vars['po']->value['value']) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['po']->value['variants']) {
$_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value['variants'][$_smarty_tpl->tpl_vars['po']->value['value']], null, 0);
} else {
$_smarty_tpl->tpl_vars["var"] = new Smarty_variable($_smarty_tpl->tpl_vars['po']->value, null, 0);
}
$_smarty_tpl->_capture_stack[0][] = array("options_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['var']->value['variant_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['var']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
$_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
$_smarty_tpl->tpl_vars["filename"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['name'],"40"), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>, <?php }
}
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {
if (floatval($_smarty_tpl->tpl_vars['var']->value['modifier'])) {?>&nbsp;(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['var']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['var']->value['modifier'],'display_sign'=>true), 0);?>
)<?php }
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['options_content'])!='&nbsp;') {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"options:options_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"options:options_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<bdi><span class="ty-product-options clearfix"><span class="ty-product-options-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</span><span class="ty-product-options-content"><?php echo Smarty::$_smarty_vars['capture']['options_content'];
if ($_smarty_tpl->tpl_vars['inline_option']->value) {?>;<?php }?>&nbsp;</span></span></bdi><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"options:options_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if ($_smarty_tpl->tpl_vars['fields_prefix']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" /><?php }
} ?>
        <?php if (!$_smarty_tpl->tpl_vars['no_block']->value) {?>
        </div>
        <?php }?>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
