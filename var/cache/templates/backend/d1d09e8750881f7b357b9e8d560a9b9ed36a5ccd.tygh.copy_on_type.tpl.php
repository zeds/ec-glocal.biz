<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/components/copy_on_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13184485596294b6bcec9323-29679767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d09e8750881f7b357b9e8d560a9b9ed36a5ccd' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/components/copy_on_type.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13184485596294b6bcec9323-29679767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'source_label' => 0,
    'target_label' => 0,
    'type' => 0,
    'source_id' => 0,
    'id' => 0,
    'target_wrapper_id' => 0,
    'target_id' => 0,
    'text_wrapper_id' => 0,
    'text_id' => 0,
    'required' => 0,
    'source_value' => 0,
    'target_value' => 0,
    'source_name' => 0,
    'is_same_value' => 0,
    'is_source_focus' => 0,
    'target_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bcee6322_62711717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bcee6322_62711717')) {function content_6294b6bcee6322_62711717($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','storefront_name','edit'));
?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/copy_on_type.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['source_label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['source_label']->value)===null||$tmp==='' ? $_smarty_tpl->__("name") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target_label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['target_label']->value)===null||$tmp==='' ? $_smarty_tpl->__("storefront_name") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? "name" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['source_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['source_id']->value)===null||$tmp==='' ? "elm_source_".((string)$_smarty_tpl->tpl_vars['type']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target_wrapper_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['target_wrapper_id']->value)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_target_wrapper_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['target_id']->value)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['text_wrapper_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_wrapper_id']->value)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_text_wrapper_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['text_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_id']->value)===null||$tmp==='' ? "elm_".((string)$_smarty_tpl->tpl_vars['type']->value)."_text_".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['required']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['is_same_value'] = new Smarty_variable(($_smarty_tpl->tpl_vars['source_value']->value===$_smarty_tpl->tpl_vars['target_value']->value), null, 0);?>

<div class="control-group">
    <label class="control-label <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_label']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
        <input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="input-large"
            type="text"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_value']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['is_same_value']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-target-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-copy-on-type-text-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['is_source_focus']->value) {?>
                autofocus
            <?php }?>
            />
        <?php if ($_smarty_tpl->tpl_vars['is_same_value']->value) {?>
            <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="muted description">
                <span class="copy-on-type__target-text-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_label']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="copy-on-type__target-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                <button type="button"
                    class="btn-link"
                    data-ca-copy-on-type-source-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-target-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-target-wrapper-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-copy-on-type-text-wrapper-selector="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("edit");?>

                </button>
            </p>
        <?php }?>
    </div>

</div>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_wrapper_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group <?php if ($_smarty_tpl->tpl_vars['is_same_value']->value) {?>hidden<?php }?>">
    <label class="control-label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_label']->value, ENT_QUOTES, 'UTF-8');?>
</label>
    <div class="controls">
        <input class="input-large" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_value']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>
<?php }} ?>
