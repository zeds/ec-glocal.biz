<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 13:59:04
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/mail_tpl_jp/views/mail_tpl_jp/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1780237541629edb18ca2aa3-01126554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d86f3bbd64dec06c25805a678900f15b07acc4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/mail_tpl_jp/views/mail_tpl_jp/manage.tpl',
      1 => 1530170532,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1780237541629edb18ca2aa3-01126554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index_script' => 0,
    'mail_templates' => 0,
    'mail_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629edb18cbab16_44105521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629edb18cbab16_44105521')) {function content_629edb18cbab16_44105521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_cycle')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('template','mtpl_trigger','status','no_items','mtpl_mail_tpl'));
?>


<?php echo smarty_function_script(array('src'=>"js/picker.js"),$_smarty_tpl);?>




<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_script']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" name="mtpl_form" class="cm-form-highlight">
<input type="hidden" name="fake" value="1" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>

<table class="table">
    <thead>
    <tr>
	<th><?php echo $_smarty_tpl->__("template");?>
</th>
	<th><?php echo $_smarty_tpl->__("mtpl_trigger");?>
</th>
	<th><?php echo $_smarty_tpl->__("status");?>
</th>
    <th class="cm-non-cb">&nbsp;</th>
    </tr>
    </thead>
<?php  $_smarty_tpl->tpl_vars['mail_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mail_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mail_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mail_template']->key => $_smarty_tpl->tpl_vars['mail_template']->value) {
$_smarty_tpl->tpl_vars['mail_template']->_loop = true;
?>
<tr <?php echo smarty_function_cycle(array('values'=>"class=\"table-row\", "),$_smarty_tpl);?>
 valign="top" >
	<td><a href="<?php echo htmlspecialchars(fn_url("mail_tpl_jp.update&tpl_id=".((string)$_smarty_tpl->tpl_vars['mail_template']->value['tpl_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['tpl_name'], ENT_QUOTES, 'UTF-8');?>
</a></td>

	<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['tpl_trigger'], ENT_QUOTES, 'UTF-8');?>
</td>
	<td>
		<?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['mail_template']->value['tpl_code'],'status'=>$_smarty_tpl->tpl_vars['mail_template']->value['status'],'hidden'=>'','object_id_name'=>"tpl_code",'table'=>"jp_mtpl"), 0);?>

	</td>
	<td class="nowrap">
		<?php ob_start();
echo htmlspecialchars(fn_url("mail_tpl_jp.update&tpl_id=".((string)$_smarty_tpl->tpl_vars['mail_template']->value['tpl_id'])), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/table_tools_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>$_smarty_tpl->tpl_vars['mail_template']->value['tpl_id'],'href'=>$_tmp1), 0);?>

	</td>
</tr>

<?php }
if (!$_smarty_tpl->tpl_vars['mail_template']->_loop) {
?>
<tr class="no-items">
	<td colspan="6"><p><?php echo $_smarty_tpl->__("no_items");?>
</p></td>
</tr>
<?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mtpl_mail_tpl"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'select_languages'=>true), 0);?>

<?php }} ?>
