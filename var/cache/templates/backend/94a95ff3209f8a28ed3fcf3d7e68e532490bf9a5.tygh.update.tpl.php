<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61932043562a6632c482cb0-52478179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a95ff3209f8a28ed3fcf3d7e68e532490bf9a5' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/update.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61932043562a6632c482cb0-52478179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'return_url' => 0,
    'document' => 0,
    'id' => 0,
    'snippet_type' => 0,
    'text' => 0,
    'snippets' => 0,
    'snippets_tables' => 0,
    'snippet_table' => 0,
    'has_preview' => 0,
    'variables' => 0,
    'variable' => 0,
    'variable_name' => 0,
    'snippet' => 0,
    'email_templates' => 0,
    'email' => 0,
    'email_template' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c4e4751_50119170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c4e4751_50119170')) {function content_62a6632c4e4751_50119170($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet','variables','or','snippets','affected_email_templates','customer_notifications','admin_notifications','import','preview','export','import','import','text_restore_question','restore'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/template_editor.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(0, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['document']->value) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['document']->value->getId(), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<div id="content_general" class="document-editor__wrapper">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="document_form" class="form-horizontal">

        <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="preview_dialog" />

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <input type="hidden" name="document_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <fieldset>
            <div class="control-group ie-redactor">
                <textarea id="elm_document_body_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="document[template]" cols="55" rows="14" class="cm-wysiwyg input-textarea-long cm-emltpl-set-active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->getTemplate(), ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </fieldset>

    </form>

</div>
<div class="hidden" id="content_snippets">
    <div class="btn-toolbar clearfix cm-toggle-button">
        <div class="pull-right">

            <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_smarty_tpl->tpl_vars['snippet_type']->value,'addon'=>$_smarty_tpl->tpl_vars['document']->value->getAddon(),'result_ids'=>"content_snippets,sidebar_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'link_text'=>$_smarty_tpl->__("add_snippet")), 0);?>

        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('snippets'=>$_smarty_tpl->tpl_vars['snippets']->value,'type'=>$_smarty_tpl->tpl_vars['snippet_type']->value,'addon'=>$_smarty_tpl->tpl_vars['document']->value->getAddon(),'result_ids'=>"content_snippets,sidebar_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0);?>

<!--content_snippets--></div>

<?php  $_smarty_tpl->tpl_vars["snippet_table"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet_table"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets_tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet_table"]->key => $_smarty_tpl->tpl_vars["snippet_table"]->value) {
$_smarty_tpl->tpl_vars["snippet_table"]->_loop = true;
?>
    <div class="hidden" id="content_snippet_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet_table']->value['snippet']->getId(), ENT_QUOTES, 'UTF-8');?>
_table_columns">
        <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/table_column_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('snippet'=>$_smarty_tpl->tpl_vars['snippet_table']->value['snippet'],'columns'=>$_smarty_tpl->tpl_vars['snippet_table']->value['columns']), 0);?>

    </div>
<?php } ?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"documents:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"documents:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"documents:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['has_preview']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/documents/preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('preview'=>''), 0);?>

<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="document-editor__list">
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("variables");?>
</h6>
            <ul class="nav nav-list" id="sidebar_variables">
                <?php  $_smarty_tpl->tpl_vars["variable"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["variable"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["variable"]->key => $_smarty_tpl->tpl_vars["variable"]->value) {
$_smarty_tpl->tpl_vars["variable"]->_loop = true;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAttributes()) {?>style="white-space:nowrap;"<?php }?>>
                        <span class="label hand cm-emltpl-insert-variable" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value->getName(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php $_smarty_tpl->tpl_vars['variable_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['variable']->value->getName(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAlias()) {?>
                            <?php $_smarty_tpl->tpl_vars['variable_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['variable']->value->getAlias(), null, 0);?>
                            <?php echo $_smarty_tpl->__("or");?>

                            <span class="label hand cm-emltpl-insert-variable" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value->getAlias(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value->getAlias(), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAttributes()) {?>
                            <span class="icon-plus hand nav-opener"></span>
                            <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable_name']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/documents/components/variable_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('attributes'=>$_smarty_tpl->tpl_vars['variable']->value->getAttributes(),'variable'=>$_tmp1,'template'=>"elm_document_body_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

                        <?php }?>
                    </li>
                <?php } ?>
            </ul>
        </div>


    <div class="sidebar-row" id="sidebar_snippets">
        <h6><?php echo $_smarty_tpl->__("snippets");?>
</h6>
        <ul class="nav nav-list">
            <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value) {
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['snippet']->value->getStatus()=="A") {?>
                    <li><span class="cm-emltpl-insert-variable label label-info hand" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCallTag(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
</span></li>
                <?php }?>
            <?php } ?>
        </ul>
    <!--sidebar_snippets--></div>


    <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['C']||$_smarty_tpl->tpl_vars['email']->value['templates']['A']) {?>
    <div class="sidebar-row document-editor__email-templates" id="sidebar_email_templates">
        <h6><?php echo $_smarty_tpl->__("affected_email_templates");?>
</h6>
        <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['C']) {?>
            <strong class="document-editor__email-templates__header"><?php echo $_smarty_tpl->__("customer_notifications");?>
</strong>
            <ul class="nav nav-list document-editor__email-templates__list">
                <?php  $_smarty_tpl->tpl_vars['email_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['email_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['email_templates']->value['C']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['email_template']->key => $_smarty_tpl->tpl_vars['email_template']->value) {
$_smarty_tpl->tpl_vars['email_template']->_loop = true;
?>
                    <li class="document-editor__email-templates__list__item">
                        <a href="<?php echo htmlspecialchars(fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId())), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_template']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['A']) {?>
            <strong class="document-editor__email-templates__header"><?php echo $_smarty_tpl->__("admin_notifications");?>
</strong>
            <ul class="nav nav-list document-editor__email-templates__list">
                <?php  $_smarty_tpl->tpl_vars['email_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['email_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['email_templates']->value['A']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['email_template']->key => $_smarty_tpl->tpl_vars['email_template']->value) {
$_smarty_tpl->tpl_vars['email_template']->_loop = true;
?>
                    <li class="document-editor__email-templates__list__item">
                        <a href="<?php echo htmlspecialchars(fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId())), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email_template']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <!--sidebar_email_templates--></div>
    <?php }?>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        (function(_, $) {
            $(document).ready(function () {
                $('#sidebar_variables').on('click', '.nav-opener', function(e) {
                    var list = $(this).parent().find('ul.nav:first');
                    list.toggleClass('hidden');

                    if ($(this).hasClass('icon-minus')) { //close child lists
                        list.find('ul').addClass('hidden');
                        list.find('.icon-minus').toggleClass('icon-plus icon-minus');
                    }

                    $(this).toggleClass('icon-plus icon-minus');
                });

                $.ceEvent('on', 'ce.update_object_status_callback', function(data, params) {
                    if (typeof data.snippet_id == 'undefined') {
                        return;
                    }

                    var $tab = $('#snippet_content_' + data.snippet_id + '_table_columns');

                    if (data.success && $tab.length) {
                        if (data.new_status != 'A') {
                            $tab.addClass('hidden');
                        } else {
                            $tab.removeClass('hidden');
                        }
                    }
                });
            });
        }(Tygh, Tygh.$));

    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("import_form", null, null); ob_start(); ?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_documents" enctype="multipart/form-data">
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0);?>

            </div>
            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[documents.import]",'cancel_action'=>"close"), 0);?>

            </div>
        </form>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"documents:update_tools_list_general")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"documents:update_tools_list_general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['has_preview']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-ajax cm-form-dialog-opener cm-dialog-auto-size",'dispatch'=>"dispatch[documents.preview]",'form'=>"document_form"));?>
</li>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("export"),'href'=>"documents.export?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId()),'method'=>"POST"));?>
</li>

            <?php if (fn_check_permissions("documents","import","admin","POST")) {?>
                <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"import_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'text'=>$_smarty_tpl->__("import"),'content'=>Smarty::$_smarty_vars['capture']['import_form'],'general_class'=>"action-btn"), 0);?>
</li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['document']->value->isModified()) {?>
                <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                <li><?php ob_start();
echo $_smarty_tpl->__("text_restore_question");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'href'=>"documents.restore?document_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp2),'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"));?>
</li>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"documents:update_tools_list_general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools",'id'=>"tools_general"));?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"documents:update_buttons_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"documents:update_buttons_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"documents:update_buttons_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_id'=>"document_save",'but_name'=>"dispatch[documents.update]",'but_target_form'=>"document_form",'but_meta'=>"cm-submit btn-primary",'save'=>$_smarty_tpl->tpl_vars['document']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"documents:update_adv_buttons_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"documents:update_adv_buttons_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"documents:update_adv_buttons_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['document']->value->getName(),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left",'select_languages'=>true), 0);?>

<?php }} ?>
