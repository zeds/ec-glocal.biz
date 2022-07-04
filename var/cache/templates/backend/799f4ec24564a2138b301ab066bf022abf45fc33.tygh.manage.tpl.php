<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 10:27:01
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/localization_jp/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147802867762a69265a5c525-12873758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799f4ec24564a2138b301ab066bf022abf45fc33' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/localization_jp/manage.tpl',
      1 => 1624606850,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147802867762a69265a5c525-12873758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lcjp' => 0,
    'addons' => 0,
    'id' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a69265a8d1a7_21405403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a69265a8d1a7_21405403')) {function content_62a69265a8d1a7_21405403($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('localization_jp','jp_elm_prod_search','jp_prod_search_mode','jp_prod_search_mode.tooltip','jp_prod_srch_all','jp_prod_srch_any','jp_elm_checkout','jp_checkout_fullname_mode','jp_checkout_fullname_mode.tooltip','jp_checkout_fullname_yes','jp_checkout_fullname_no'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

	<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" name="localization_jp_form" class="form-horizontal form-edit">

		<?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable($_smarty_tpl->__("localization_jp"), null, 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("jp_elm_prod_search"),'target'=>"#jp_elm_prod_search"), 0);?>

		<div id="jp_elm_prod_search" class="in collapse">
			<fieldset>
				<div class="control-group">
					<label for="jp_prod_search_mode" class="control-label"><?php echo $_smarty_tpl->__("jp_prod_search_mode");?>
:<i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("jp_prod_search_mode.tooltip");?>
"></i></label>
					<div class="controls">
						<select name="lcjp[jp_prod_search_mode]" id="jp_prod_search_mode">
							<option value="jp_prod_srch_all" <?php if ($_smarty_tpl->tpl_vars['lcjp']->value['jp_prod_search_mode']=="jp_prod_srch_all") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("jp_prod_srch_all");?>
</option>
							<option value="jp_prod_srch_any" <?php if (($_smarty_tpl->tpl_vars['lcjp']->value['jp_prod_search_mode']==''&&$_smarty_tpl->tpl_vars['addons']->value['localization_jp']['jp_prod_search_mode']=="jp_prod_srch_any")||$_smarty_tpl->tpl_vars['lcjp']->value['jp_prod_search_mode']=="jp_prod_srch_any") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("jp_prod_srch_any");?>
</option>
						</select>
					</div>
				</div>

			</fieldset>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("jp_elm_checkout"),'target'=>"#jp_elm_checkout"), 0);?>

		<div id="jp_elm_checkout" class="in collapse">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="jp_checkout_fullname_mode"><?php echo $_smarty_tpl->__("jp_checkout_fullname_mode");?>
:<i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("jp_checkout_fullname_mode.tooltip");?>
"></i></label>
					<div class="controls">
						<select name="lcjp[jp_checkout_fullname_mode]" id="jp_checkout_fullname_mode">
							<option value="jp_checkout_fullname_yes" <?php if ($_smarty_tpl->tpl_vars['lcjp']->value['jp_checkout_fullname_mode']=="jp_checkout_fullname_yes") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("jp_checkout_fullname_yes");?>
</option>
							<option value="jp_checkout_fullname_no" <?php if ($_smarty_tpl->tpl_vars['lcjp']->value['jp_checkout_fullname_mode']=="jp_checkout_fullname_no") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("jp_checkout_fullname_no");?>
</option>
						</select>
					</div>
				</div>
			</fieldset>
		</div>
	</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
	<?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-product-save-buttons",'but_role'=>"submit-link",'but_name'=>"dispatch[localization_jp.manage]",'but_target_form'=>"localization_jp_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_orders"), 0);?>

<?php }} ?>
