<?php /* Smarty version Smarty-3.1.21, created on 2022-06-05 12:20:51
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/orders/components/orders_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434800072629c21131c2db3-49445164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1131cd315097d0cb9c05540642f38bf1e4680cb' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/orders/components/orders_search_form.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1434800072629c21131c2db3-49445164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'search' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629c21132121f1_68075543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629c21132121f1_68075543')) {function content_629c21132121f1_68075543($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order_id','total','order_status','search','order_id','total','order_status','search'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_sec_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_sec_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0);?>

</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), 0);?>

</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("search"),'but_name'=>"dispatch[orders.search]"), 0);?>

</div>
</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/orders_search_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/orders_search_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" class="ty-orders-search-options" name="orders_search_form" method="get">

<div class="clearfix">
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_id");?>
</label>
        <input type="text" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" size="10" class="ty-search-form__input" />
    </div>
    <?php }?>

    <div class="span4 ty-control-group">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'];?>
)</label>
        <input type="text" name="total_sec_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_sec_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />&nbsp;&#8211;&nbsp;<input type="text" name="total_sec_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['total_sec_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="ty-control-group__price" />
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"orders_search_form"), 0);?>

</div>

<hr>

<div class="ty-control-group">
    <label class="ty-control-group__title"><?php echo $_smarty_tpl->__("order_status");?>
</label>
    <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['search']->value['status'],'display'=>"checkboxes",'name'=>"status",'checkboxes_meta'=>"ty-orders-search__options-status"), 0);?>

</div>

<div class="buttons-container ty-search-form__buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__secondary",'but_text'=>$_smarty_tpl->__("search"),'but_name'=>"dispatch[orders.search]"), 0);?>

</div>
</form><?php }?><?php }} ?>
