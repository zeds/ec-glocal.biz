<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 18:12:25
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/components/graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:593560141629f16798c1303-63447151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221137d78c4f9cec06a8299b414b8c62d282b6ac' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sales_reports/components/graph_bar.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '593560141629f16798c1303-63447151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value_width' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f16798c9d10_55097701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f16798c9d10_55097701')) {function content_629f16798c9d10_55097701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
