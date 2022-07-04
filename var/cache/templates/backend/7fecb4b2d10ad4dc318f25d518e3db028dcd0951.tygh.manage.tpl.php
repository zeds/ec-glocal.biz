<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 00:34:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/shipping_rates_jp/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1143940190629f6ff0b847a0-98538440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fecb4b2d10ad4dc318f25d518e3db028dcd0951' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/shipping_rates_jp/manage.tpl',
      1 => 1626244484,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1143940190629f6ff0b847a0-98538440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier_id' => 0,
    'jp_carriers' => 0,
    'ukey' => 0,
    'user_info' => 0,
    'config' => 0,
    'jp_carrier_services' => 0,
    'skey' => 0,
    'services' => 0,
    'default_carrier' => 0,
    'sitem' => 0,
    'default_service' => 0,
    'jp_carrier_zones' => 0,
    'zones' => 0,
    'zitem' => 0,
    'default_zone' => 0,
    't_id' => 0,
    'settings_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f6ff0c16529_00142285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f6ff0c16529_00142285')) {function content_629f6ff0c16529_00142285($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('jp_shipping_service_name','jp_shipping_origination','show'));
?>


<?php if ($_REQUEST['highlight']) {?>
<?php $_smarty_tpl->tpl_vars["highlight"] = new Smarty_variable(explode(",",$_REQUEST['highlight']), null, 0);?>
<?php }?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
//<![CDATA[
function fn_create_link(carrier) {
	var service_id, zone_id;
	service_id = $("#"+carrier+"_service_id").val();
	zone_id = $("#"+carrier+"_shipping_zone").val();
	jQuery.ajaxRequest(index_script + '?dispatch=shipping_rates_jp.manage' + 
		'&carrier=' + carrier +
		'&service=' + service_id +
		'&zone=' + zone_id, {result_ids: 'ajax_service_zone', force_exec: true}
	);
}
//]]>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["t_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['carrier_id']->value, null, 0);?>

<?php  $_smarty_tpl->tpl_vars['carriers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carriers']->_loop = false;
 $_smarty_tpl->tpl_vars["ukey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jp_carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carriers']->key => $_smarty_tpl->tpl_vars['carriers']->value) {
$_smarty_tpl->tpl_vars['carriers']->_loop = true;
 $_smarty_tpl->tpl_vars["ukey"]->value = $_smarty_tpl->tpl_vars['carriers']->key;
?>
<div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
">
<form class="cm-ajax" action="<?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_type']=='V') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['vendor_index'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');
}?>" method="GET" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_service_rate" target="_self">
	<input type="hidden" name="result_ids" value="ajax_service_zone_rate" />
	<input type="hidden" id="carrier" name="carrier" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
" />
	<table class="table-middle">
		<tr>
			<th class="left">
				<?php echo $_smarty_tpl->__("jp_shipping_service_name");?>
:
				<?php  $_smarty_tpl->tpl_vars['services'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['services']->_loop = false;
 $_smarty_tpl->tpl_vars["skey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jp_carrier_services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['services']->key => $_smarty_tpl->tpl_vars['services']->value) {
$_smarty_tpl->tpl_vars['services']->_loop = true;
 $_smarty_tpl->tpl_vars["skey"]->value = $_smarty_tpl->tpl_vars['services']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['ukey']->value) {?>
					<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_service_id" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_service_id" class="jp_shipping_service_id">
					<?php  $_smarty_tpl->tpl_vars['sitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sitem']->key => $_smarty_tpl->tpl_vars['sitem']->value) {
$_smarty_tpl->tpl_vars['sitem']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['default_carrier']->value) {?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sitem']->value['service_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_service']->value==$_smarty_tpl->tpl_vars['sitem']->value['service_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sitem']->value['service_name'], ENT_QUOTES, 'UTF-8');?>
</option>
						<?php } else { ?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sitem']->value['service_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sitem']->value['service_name'], ENT_QUOTES, 'UTF-8');?>
</option>
						<?php }?>
					<?php } ?>
					</select>
					<?php }?>
				<?php } ?>
				<?php echo $_smarty_tpl->__("jp_shipping_origination");?>
:
				<?php  $_smarty_tpl->tpl_vars['zones'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zones']->_loop = false;
 $_smarty_tpl->tpl_vars["skey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['jp_carrier_zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zones']->key => $_smarty_tpl->tpl_vars['zones']->value) {
$_smarty_tpl->tpl_vars['zones']->_loop = true;
 $_smarty_tpl->tpl_vars["skey"]->value = $_smarty_tpl->tpl_vars['zones']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['ukey']->value) {?>
						
						<?php if ($_smarty_tpl->tpl_vars['skey']->value!='jpems') {?>
							<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_shipping_zone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_shipping_zone" class="jp_shipping_zone">
							<?php  $_smarty_tpl->tpl_vars['zitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zitem']->key => $_smarty_tpl->tpl_vars['zitem']->value) {
$_smarty_tpl->tpl_vars['zitem']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['default_carrier']->value) {?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_zone']->value==$_smarty_tpl->tpl_vars['zitem']->value['zone_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_name'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php } else { ?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_name'], ENT_QUOTES, 'UTF-8');?>
</option>
								<?php }?>
							<?php } ?>
							</select>
						<?php } else { ?>
							
							<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_shipping_zone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_shipping_zone">
							<?php  $_smarty_tpl->tpl_vars['zitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zitem']->key => $_smarty_tpl->tpl_vars['zitem']->value) {
$_smarty_tpl->tpl_vars['zitem']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['zitem']->value['zone_id']==52) {?>
									<?php if ($_smarty_tpl->tpl_vars['skey']->value==$_smarty_tpl->tpl_vars['default_carrier']->value) {?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_zone']->value==$_smarty_tpl->tpl_vars['zitem']->value['zone_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_name'], ENT_QUOTES, 'UTF-8');?>
</option>
									<?php } else { ?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zitem']->value['zone_name'], ENT_QUOTES, 'UTF-8');?>
</option>
									<?php }?>
								<?php }?>
							<?php } ?>
							</select>
						<?php }?>
					<?php }?>
				<?php } ?>			
				<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
_load_button" class="btn" type="submit" name="dispatch[shipping_rates_jp.manage]" value=<?php echo $_smarty_tpl->__("show");?>
 />
			</th>
		</tr>
	</table>
</form>
</div>
<?php } ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true,'active_tab'=>$_smarty_tpl->tpl_vars['t_id']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("addons/localization_jp/views/shipping_rates_jp/ajax_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("add_button", null, null); ob_start(); ?>
    <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['add_button'], ENT_QUOTES, 'UTF-8');?>

    <span class="btn-group" id="tools_translations_save_button">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[shipping_rates_jp.update]",'but_role'=>"submit-link",'but_target_form'=>"rate_form"), 0);?>

        </span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['settings_title']->value),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
