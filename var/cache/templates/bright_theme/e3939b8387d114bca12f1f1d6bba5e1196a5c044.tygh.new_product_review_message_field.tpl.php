<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085511616295417e181e92-83002444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3939b8387d114bca12f1f1d6bba5e1196a5c044' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2085511616295417e181e92-83002444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'message_title' => 0,
    'required' => 0,
    'id' => 0,
    'name' => 0,
    'autofocus' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e1962c6_02883273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e1962c6_02883273')) {function content_6295417e1962c6_02883273($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
        <label class="hidden
            <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                cm-required
            <?php }?>"
            for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

        </label>
    <?php }?>

    <textarea id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="ty-input-textarea ty-input-textarea--limit ty-input-text-full"
        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            placeholder="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['autofocus']->value) {?>
            autofocus
        <?php }?>
    ></textarea>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_message_field.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
        <label class="hidden
            <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                cm-required
            <?php }?>"
            for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>

        </label>
    <?php }?>

    <textarea id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="ty-input-textarea ty-input-textarea--limit ty-input-text-full"
        <?php if ($_smarty_tpl->tpl_vars['message_title']->value) {?>
            placeholder="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
            title="<?php echo $_smarty_tpl->tpl_vars['message_title']->value;?>
"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['autofocus']->value) {?>
            autofocus
        <?php }?>
    ></textarea>
</div>
<?php }?><?php }} ?>
