<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:56
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/banners/views/banners/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18606779286294b6e4ddb544-91159533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f849fcdfe044c48b342d20abd0d5c1757037b6' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/banners/views/banners/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18606779286294b6e4ddb544-91159533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'banners' => 0,
    'has_permission' => 0,
    'banner_statuses' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'banner' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'page_title' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6e4e24fe9_98981947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6e4e24fe9_98981947')) {function content_6294b6e4e24fe9_98981947($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('banner','type','status','banner','graphic_banner','text_banner','edit','delete','status','no_data','add_banner','banners'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="banners_form" name="banners_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_banners"), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents_banners" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_icon'] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['c_dummy'] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars['banner_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("banners","update_status","admin","POST"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("banners_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="6%" class="left mobile-hide">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value,'check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['banner_statuses']->value : ''), 0);?>


                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("banner");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                <th width="10%" class="mobile-hide"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=type&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("type");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="type") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <th width="6%" class="mobile-hide">&nbsp;</th>
                <th width="10%" class="right"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['banner']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['banner']->value,"banners"), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable('', null, 0);?>
                <?php }?>

                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="banner_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['banner']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("banner");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("banners.update?banner_id=".((string)$_smarty_tpl->tpl_vars['banner']->value['banner_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value['banner'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['banner']->value), 0);?>

                </td>
                <td width="10%" class="nowrap row-status <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_banner_type")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_banner_type"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G") {
echo $_smarty_tpl->__("graphic_banner");
} else {
echo $_smarty_tpl->__("text_banner");
}?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_banner_type"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </td>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <td width="6%" class="mobile-hide">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"banners.update?banner_id=".((string)$_smarty_tpl->tpl_vars['banner']->value['banner_id'])));?>
</li>
                    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"banners.delete?banner_id=".((string)$_smarty_tpl->tpl_vars['banner']->value['banner_id']),'method'=>"POST"));?>
</li>
                    <?php }?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools">
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                </td>
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['banner']->value['banner_id'],'status'=>$_smarty_tpl->tpl_vars['banner']->value['status'],'hidden'=>true,'object_id_name'=>"banner_id",'table'=>"banners",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0);?>

                </td>
            </tr>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"banners_form",'object'=>"banners",'items'=>Smarty::$_smarty_vars['capture']['banners_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_contents_banners"), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"banners.add",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("add_banner"),'icon'=>"icon-plus"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"banners.manage",'view_type'=>"banners"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/banners/views/banners/components/banners_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"banners.manage"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"banners:manage_mainbox_params")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"banners:manage_mainbox_params"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("banners"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['select_languages'] = new Smarty_variable(true, null, 0);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"banners:manage_mainbox_params"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>


<?php }} ?>
