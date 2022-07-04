<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 13:59:13
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/mail_tpl_jp/views/mail_tpl_jp/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1316071571629edb21179228-33430426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b33f018058690b2602f3685530ffce2e8f3600eb' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/mail_tpl_jp/views/mail_tpl_jp/update.tpl',
      1 => 1543221420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1316071571629edb21179228-33430426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mail_template' => 0,
    'tpl_vars' => 0,
    'p' => 0,
    'p_descr' => 0,
    'tpl_common_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629edb2119c4d2_33409071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629edb2119c4d2_33409071')) {function content_629edb2119c4d2_33409071($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.notes.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mtpl_tpl_vars','mtpl_tpl_common_vars','subject','body','mtpl_use_footer','editing'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="mail_templates_form" class="form-horizontal form-edit">

    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="tpl_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['tpl_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="dispatch" value="" />

    <div id="update_mail_tpl_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['tpl_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['tpl_vars']->value) {?>
        <h5><?php echo $_smarty_tpl->__("mtpl_tpl_vars");?>
</h5>
        <hr />
        <ul>
        <?php  $_smarty_tpl->tpl_vars['p_descr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_descr']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_descr']->key => $_smarty_tpl->tpl_vars['p_descr']->value) {
$_smarty_tpl->tpl_vars['p_descr']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['p_descr']->key;
?>
            <li><strong>{%<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8');?>
%}</strong> : <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p_descr']->value['desc']);?>
</li>
        <?php } ?>
        </ul>
        <hr />
        <br />
        <?php }?>
        <h5><?php echo $_smarty_tpl->__("mtpl_tpl_common_vars");?>
</h5>
        <hr />
        <ul>
        <?php  $_smarty_tpl->tpl_vars['p_descr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_descr']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tpl_common_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_descr']->key => $_smarty_tpl->tpl_vars['p_descr']->value) {
$_smarty_tpl->tpl_vars['p_descr']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['p_descr']->key;
?>
            <li><strong>{%<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8');?>
%}</strong> : <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p_descr']->value['desc']);?>
</li>
        <?php } ?>
        </ul>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['mail_template']->value['tpl_code']!='mtpl_email_footer') {?>
    <div class="control-group">
        <label for="elm_mail_template_subject" class="control-label cm-required"><?php echo $_smarty_tpl->__("subject");?>
:</label>
        <div class="controls">
            <input type="text" name="mail_template_data[subject]" id="elm_mail_template_subject" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['subject'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        </div>
    </div>
    <?php }?>
    <div class="control-group">
        <label for="elm_mail_template_body" class="control-label cm-required"><?php echo $_smarty_tpl->__("body");?>
:</label>
        <div class="controls">
            <textarea name="mail_template_data[body_txt]" id="elm_mail_template_body" cols="35" rows="20" class="input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['body_txt'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['mail_template']->value['tpl_code']!='mtpl_email_footer') {?>
    <div class="control-group">
        <label for="elm_use_footer" class="control-label"><?php echo $_smarty_tpl->__("mtpl_use_footer");?>
:</label>
        <div class="controls">
            <input type="checkbox" id="elm_use_footer" name="mail_template_data[use_footer]" value="Y" class="checkbox cm-item" <?php if ($_smarty_tpl->tpl_vars['mail_template']->value['use_footer']=='Y') {?>checked="checked"<?php }?> />
        </div>
    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"mail_template_data[status]",'id'=>"mail_template_data",'obj'=>$_smarty_tpl->tpl_vars['mail_template']->value), 0);?>

</div>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("add_button", null, null); ob_start(); ?>
    <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['add_button'], ENT_QUOTES, 'UTF-8');?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_target_form'=>"mail_templates_form",'but_name'=>"dispatch[mail_tpl_jp.update]",'save'=>$_smarty_tpl->tpl_vars['mail_template']->value['tpl_id']), 0);?>

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

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->__("editing");?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail_template']->value['tpl_name'], ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>Smarty::$_smarty_vars['capture']['mainbox_title'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
