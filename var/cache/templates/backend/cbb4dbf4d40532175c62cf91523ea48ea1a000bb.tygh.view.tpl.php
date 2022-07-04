<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 04:03:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21416868162a24413cfe4d4-78679973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb4dbf4d40532175c62cf91523ea48ea1a000bb' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/view.tpl',
      1 => 1623728270,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21416868162a24413cfe4d4-78679973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thread' => 0,
    'thread_id' => 0,
    'messages' => 0,
    'post' => 0,
    'settings' => 0,
    'auth' => 0,
    'show_detailed_link' => 0,
    'allow_send' => 0,
    'object' => 0,
    'object_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a24413de0d61_76944990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a24413de0d61_76944990')) {function content_62a24413de0d61_76944990($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_cycle')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.you','vendor_communication.type_message','refresh','send','send','vendor_communication.ticket','vendor_communication.contact_admin'));
?>
<?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object'], null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div class="vendor_communication__view-thread">
        <div class="messages clearfix" id="messages_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="vendor-communication-post__content vendor-communication-post-item
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type']=="C") {?>
                        vendor-communication-post__customer
                    <?php }?>
                    ">
                    <div class="vendor-communication-post__date">
                        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="vendor-communication-post__img">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type']=="V") {?>
                            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
                                <?php $_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable(true, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['show_detailed_link'] = new Smarty_variable(false, null, 0);?>
                            <?php }?>

                            <?php ob_start();?><?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['post']->value['vendor_info']['logos']['theme']['company_id'])), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['post']->value['vendor_info']['logos']['theme']['image'],'image_width'=>"60",'image_height'=>"60",'show_detailed_link'=>$_smarty_tpl->tpl_vars['show_detailed_link']->value,'href'=>$_tmp1,'class'=>"vendor-communication-logo__image"), 0);?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type']=="A") {?>
                            <i class="icon-user"></i>
                        <?php }?>
                    </div>
                    <div class="vendor-communication-post__info">
                        <div class="vendor-communication-post <?php echo smarty_function_cycle(array('values'=>", vendor-communication-post_even"),$_smarty_tpl);?>
"
                            id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <div class="vendor-communication-post__message"><?php echo nl2br($_smarty_tpl->tpl_vars['post']->value['message']);?>
</div>
                            <span class="icon-caret">
                                <span class="icon-caret-outer"></span>
                                <span class="icon-caret-inner"></span>
                            </span>
                        </div>
                        <div class="vendor-communication-post__author">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id']==$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                                <?php echo $_smarty_tpl->__("vendor_communication.you");?>

                            <?php } else { ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php } ?>
            <div class="vendor-communication-post__bottom"></div>
        <!--messages_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <div class="fixed-bottom">
            <div class="fixed-bottom-wrapper" id="new_message_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-ajax add_message_form" name="add_message_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    id="add_message_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <input type="hidden" name="result_ids" value="messages_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
,new_message_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="communication_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['communication_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                    <input type="hidden" name="message[thread_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
" />

                    <div id="new_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="add_message_form--wrapper">
                        <?php if ($_smarty_tpl->tpl_vars['allow_send']->value) {?>
                            <textarea
                                id="thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                name="message[message]"
                                class="cm-focus add_message_form--textarea"
                                rows="5"
                                autofocus
                                placeholder="<?php echo $_smarty_tpl->__("vendor_communication.type_message");?>
"
                                data-ca-vendor-communication="threadMessage"
                            ></textarea>
                        <?php }?>
                        <div class="buttons-container">
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['thread_id']) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"refresh_thread_".((string)$_smarty_tpl->tpl_vars['thread_id']->value),'but_icon'=>"icon-refresh",'but_text'=>$_smarty_tpl->__("refresh"),'but_role'=>"action",'but_href'=>fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread_id']->value)."&result_ids=messages_list_".((string)$_smarty_tpl->tpl_vars['thread_id']->value)."&communication_type=".((string)$_smarty_tpl->tpl_vars['thread']->value['communication_type'])),'but_target_id'=>"messages_list_".((string)$_smarty_tpl->tpl_vars['thread_id']->value),'but_meta'=>"cm-ajax btn btn-link btn-icon-link animation-rotate add_message_form--refresh-btn",'but_rel'=>"nofollow"), 0);?>

                                <?php if ($_smarty_tpl->tpl_vars['allow_send']->value) {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_meta'=>"btn btn-primary btn-send cm-post pull-right",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.post_message]"), 0);?>

                                <?php }?>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'cancel_action'=>"close",'but_meta'=>"btn btn-primary btn-send cm-post pull-right",'but_role'=>"submit",'but_name'=>"dispatch[vendor_communication.post_message]"), 0);?>

                            <?php }?>
                        </div>
                    </div>
                </form>
            </div>
        <!--new_message_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['thread']->value['thread_id']) {?>
        <?php echo $_smarty_tpl->__("vendor_communication.ticket");?>
 &lrm;#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>

        <span class="f-middle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['thread']->value['company_id']), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="f-small">
            <?php $_smarty_tpl->tpl_vars["last_updated"] = new Smarty_variable(rawurlencode(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']))), null, 0);?> /
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
,
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__("vendor_communication.contact_admin");?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:view_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:view_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/sidebar_thread_object_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['object']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:view_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content_id'=>"view_thread"), 0);?>

<?php }} ?>
