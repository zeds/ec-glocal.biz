<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:57:42
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116173947629e5c363dca58-64016683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ba28fa073503eca9905378b98208c8d425d2854' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/hooks/index/scripts.post.tpl',
      1 => 1654545404,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1116173947629e5c363dca58-64016683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5c363ead71_82041624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5c363ead71_82041624')) {function content_629e5c363ead71_82041624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('stripe.online_payment','stripe.online_payment'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/stripe/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/instant_payment.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_) {
        _.tr({
            'stripe.online_payment': '<?php echo strtr($_smarty_tpl->__("stripe.online_payment"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    })(Tygh);
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/stripe/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/stripe/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/stripe/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/instant_payment.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_) {
        _.tr({
            'stripe.online_payment': '<?php echo strtr($_smarty_tpl->__("stripe.online_payment"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    })(Tygh);
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
