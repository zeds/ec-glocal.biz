<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 03:39:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:917228310629f9b5bcffb06-87946675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72157c26e33fb389e2023b3c7441388872f9310f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers_picker.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '917228310629f9b5bcffb06-87946675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_disabled' => 0,
    'receiver_search_method' => 0,
    'object_type' => 0,
    'object_id' => 0,
    'label_text' => 0,
    'load_items_url' => 0,
    'placeholder' => 0,
    'allow_add' => 0,
    'template_result_new_selector' => 0,
    'template_result_selector' => 0,
    'selected_items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f9b5bd15318_31857510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f9b5bd15318_31857510')) {function content_629f9b5bd15318_31857510($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search'));
?>

<?php $_smarty_tpl->tpl_vars['is_disabled'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_disabled']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable($_smarty_tpl->__("type_to_search"), null, 0);?>

<div class="notification-group-editor__input-group">
    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="notification-group-editor__label"
    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</label>

    <select multiple
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select notification-group-editor__picker"
            data-ca-notification-receivers-editor-picker
            data-ca-notification-receivers-editor-receiver-search-method="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_search_method']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-escape-html="false"
            <?php if ($_smarty_tpl->tpl_vars['load_items_url']->value) {?>
                data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['load_items_url']->value), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-ajax-delay="250"
            <?php }?>
            data-ca-object-picker-autofocus="false"
            data-ca-object-picker-autoopen="false"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-allow-clear="<?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>false<?php } else { ?>true<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_new_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['template_result_selector']->value) {?>
                data-ca-object-picker-template-result-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_result_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>
                disabled
            <?php }?>
    >
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selected_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
" selected><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>
<?php }} ?>
