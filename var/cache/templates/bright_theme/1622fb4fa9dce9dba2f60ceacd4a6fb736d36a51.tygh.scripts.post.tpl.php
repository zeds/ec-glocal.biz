<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:04:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/localization_jp/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14202207056294b2c04df507-79068694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1622fb4fa9dce9dba2f60ceacd4a6fb736d36a51' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/localization_jp/hooks/index/scripts.post.tpl',
      1 => 1653909594,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14202207056294b2c04df507-79068694',
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
  'unifunc' => 'content_6294b2c04ee9c6_61817970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b2c04ee9c6_61817970')) {function content_6294b2c04ee9c6_61817970($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('error_validator_cc_exp_jp','error_validator_cc_check_length_jp','error_validator_cc_exp_jp','error_validator_cc_check_length_jp'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>
    (function(_, $) {
        //言語変数を定義
        _.tr({
            'error_validator_cc_exp_jp': '<?php echo strtr($_smarty_tpl->__("error_validator_cc_exp_jp"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            'error_validator_cc_check_length_jp': '<?php echo strtr($_smarty_tpl->__("error_validator_cc_check_length_jp"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });

        // Modified by takahashi from cs-cart.jp 2018
        // 支払方法のラジオボタンで cm-select-payment_submitクラスにするとAjaxではなくSubmitする
        $(_.doc).on('click', '.cm-select-payment_submit', function() {

            // 新チェックアウト方式に対応
            if(document.getElementById('litecheckout_payments_form')) {
                var jelm = $(this);
                document.litecheckout_payments_form.payment_id[0].value = jelm.val();
                document.litecheckout_payments_form.payment_id[1].value = jelm.val();

                $('#litecheckout_payments_form').append('<input type="hidden" name="switch_payment_method" value="Y" />');
            }

            this.form.method = "POST";
            this.form.action = "<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
";
            this.form.submit();
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/localization_jp/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/localization_jp/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>
    (function(_, $) {
        //言語変数を定義
        _.tr({
            'error_validator_cc_exp_jp': '<?php echo strtr($_smarty_tpl->__("error_validator_cc_exp_jp"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            'error_validator_cc_check_length_jp': '<?php echo strtr($_smarty_tpl->__("error_validator_cc_check_length_jp"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });

        // Modified by takahashi from cs-cart.jp 2018
        // 支払方法のラジオボタンで cm-select-payment_submitクラスにするとAjaxではなくSubmitする
        $(_.doc).on('click', '.cm-select-payment_submit', function() {

            // 新チェックアウト方式に対応
            if(document.getElementById('litecheckout_payments_form')) {
                var jelm = $(this);
                document.litecheckout_payments_form.payment_id[0].value = jelm.val();
                document.litecheckout_payments_form.payment_id[1].value = jelm.val();

                $('#litecheckout_payments_form').append('<input type="hidden" name="switch_payment_method" value="Y" />');
            }

            this.form.method = "POST";
            this.form.action = "<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
";
            this.form.submit();
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
