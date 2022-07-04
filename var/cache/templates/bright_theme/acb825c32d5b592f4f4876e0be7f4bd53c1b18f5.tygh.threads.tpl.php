<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:14:13
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/threads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974634347629541b55725b6-00814988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb825c32d5b592f4f4876e0be7f4bd53c1b18f5' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/threads.tpl',
      1 => 1653909592,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '974634347629541b55725b6-00814988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'addons' => 0,
    'company_id' => 0,
    'threads' => 0,
    'thread' => 0,
    'show_subject_image_column' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'rev' => 0,
    'sort_sign' => 0,
    'c_dummy' => 0,
    'auth' => 0,
    'has_new_message' => 0,
    'settings' => 0,
    'active_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541b5603024_55002443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541b5603024_55002443')) {function content_629541b5603024_55002443($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','message','vendor_communication.subject','date','vendor_communication.thread','vendor_communication.you','vendor_communication.admin','customer','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages','id','message','vendor_communication.subject','date','vendor_communication.thread','vendor_communication.you','vendor_communication.admin','customer','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(false, null, 0);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0);?>

    <?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)||$_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
        <?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
<?php } ?>

<div id="threads_container">
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <table class="ty-table ty-vendor-communication-search" id="threads_table">
        <thead>
        <tr>
            <th width="3%" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
            <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                <th width="7%">&nbsp;</th>
            <?php }?>
            <th width="12%" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="40%"><?php echo $_smarty_tpl->__("message");?>
</th>
            <th width="21%"><?php echo $_smarty_tpl->__("vendor_communication.subject");?>
</th>
            <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==(defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null), null, 0);?>

            <tr>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label"></span>
                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                    <td class="ty-vendor-communication-search__item ty-nowrap">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                    </td>
                <?php }?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                    <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                            <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                        <?php }?>
                        <strong><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</strong>
                    </a>
                </td>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                    <a class="clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>"
                        href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("customer");?>
:
                            <?php }?>
                        </strong>
                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],300,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td class="ty-vendor-communication-search__item">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                </td>
                <td class="ty-vendor-communication-search__item ty-nowrap">
                    <a class="<?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
                </td>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </tr>

            <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php }
if (!$_smarty_tpl->tpl_vars['thread']->_loop) {
?>
            <tr class="ty-table__no-items">
                <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
            </tr>
        <?php } ?>
        <!--threads_table--></table>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--threads_container--></div>

<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("vendor_communication.messages");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/threads.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/threads.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(false, null, 0);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0);?>

    <?php }?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)||$_smarty_tpl->tpl_vars['thread']->value['object_type']===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
        <?php $_smarty_tpl->tpl_vars['show_subject_image_column'] = new Smarty_variable(true, null, 0);?>
    <?php }?>
<?php } ?>

<div id="threads_container">
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <table class="ty-table ty-vendor-communication-search" id="threads_table">
        <thead>
        <tr>
            <th width="3%" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
            <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                <th width="7%">&nbsp;</th>
            <?php }?>
            <th width="12%" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="40%"><?php echo $_smarty_tpl->__("message");?>
</th>
            <th width="21%"><?php echo $_smarty_tpl->__("vendor_communication.subject");?>
</th>
            <th width="17%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thread']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value) {
$_smarty_tpl->tpl_vars['thread']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==(defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null), null, 0);?>

            <tr>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label"></span>
                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['show_subject_image_column']->value) {?>
                    <td class="ty-vendor-communication-search__item ty-nowrap">
                        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                    </td>
                <?php }?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                    <a href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                            <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                        <?php }?>
                        <strong><?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id']));?>
</strong>
                    </a>
                </td>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                    <a class="clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>"
                        href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['last_message'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.you");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.admin");?>
:
                            <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['last_message_user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
:
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("customer");?>
:
                            <?php }?>
                        </strong>
                        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],300,"...",true), ENT_QUOTES, 'UTF-8');?>

                    </a>
                </td>
                <td class="ty-vendor-communication-search__item">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['thread']->value), 0);?>

                </td>
                <td class="ty-vendor-communication-search__item ty-nowrap">
                    <a class="<?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
                </td>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </tr>

            <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php }
if (!$_smarty_tpl->tpl_vars['thread']->_loop) {
?>
            <tr class="ty-table__no-items">
                <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
            </tr>
        <?php } ?>
        <!--threads_table--></table>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--threads_container--></div>

<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("vendor_communication.messages");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php }?><?php }} ?>
