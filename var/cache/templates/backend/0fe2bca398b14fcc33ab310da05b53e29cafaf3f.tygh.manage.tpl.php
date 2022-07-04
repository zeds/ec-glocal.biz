<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 17:43:07
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/newsletters/views/mailing_lists/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1274134308629f0f9b45f720-05806698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe2bca398b14fcc33ab310da05b53e29cafaf3f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/newsletters/views/mailing_lists/manage.tpl',
      1 => 1625815522,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1274134308629f0f9b45f720-05806698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailing_lists' => 0,
    'mailing_list' => 0,
    'is_allow_update_mailing_lists' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f0f9b4843a6_75433207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f0f9b4843a6_75433207')) {function content_629f0f9b4843a6_75433207($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','subscribers_num','status','manage_subscribers','subscribers_num','no_data','new_mailing_lists','add_mailing_lists','mailing_lists'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="mailing_lists_form" id="mailing_lists_form">
    <div class="items-container" id="mailing_lists">
    <?php if ($_smarty_tpl->tpl_vars['mailing_lists']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("mailing_lists_table", null, null); ob_start(); ?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
                    <thead
                            data-ca-bulkedit-default-object="true"
                            data-ca-bulkedit-component="defaultObject"
                    >
                        <tr>
                            <th>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th><?php echo $_smarty_tpl->__("name");?>
</th>
                            <th><?php echo $_smarty_tpl->__("subscribers_num");?>
</th>
                            <th width="5%">&nbsp;</th>
                            <th width="15%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['mailing_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mailing_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mailing_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mailing_list']->key => $_smarty_tpl->tpl_vars['mailing_list']->value) {
$_smarty_tpl->tpl_vars['mailing_list']->_loop = true;
?>

                            <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("manage_subscribers"),'href'=>"subscribers.manage?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id'])));?>
</li>
                                <li class="divider"></li>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                            <?php ob_start();
echo $_smarty_tpl->__("subscribers_num");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_table'=>true,'id'=>$_smarty_tpl->tpl_vars['mailing_list']->value['list_id'],'text'=>$_smarty_tpl->tpl_vars['mailing_list']->value['object'],'status'=>$_smarty_tpl->tpl_vars['mailing_list']->value['status'],'hidden'=>true,'href'=>"mailing_lists.update?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id']),'details'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['subscribers_num']),'object_id_name'=>"list_id",'table'=>"mailing_lists",'href_delete'=>"mailing_lists.delete?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id']),'delete_target_id'=>"mailing_lists",'header_text'=>$_smarty_tpl->tpl_vars['mailing_list']->value['object'],'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"list_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true,'no_padding'=>true), 0);?>


                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"mailing_lists_form",'object'=>"mailing_lists",'items'=>Smarty::$_smarty_vars['capture']['mailing_lists_table']), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--mailing_lists--></div>
</form>

    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['is_allow_update_mailing_lists']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/newsletters/views/mailing_lists/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mailing_list'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_mailing_lists",'text'=>$_smarty_tpl->__("new_mailing_lists"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("add_mailing_lists"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("mailing_lists"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>

<?php }} ?>
