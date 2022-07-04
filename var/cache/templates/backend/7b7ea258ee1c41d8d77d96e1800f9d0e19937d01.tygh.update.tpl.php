<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:06:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136711388762a6635820b5d0-37534698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7ea258ee1c41d8d77d96e1800f9d0e19937d01' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/update.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '136711388762a6635820b5d0-37534698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'snippet' => 0,
    'id' => 0,
    'target' => 0,
    'result_ids' => 0,
    'return_url' => 0,
    'type' => 0,
    'config' => 0,
    'r_url' => 0,
    'restore_btn_class' => 0,
    'restore_btn_data' => 0,
    'restore_btn_dropdown_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a663582489e4_87842093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a663582489e4_87842093')) {function content_62a663582489e4_87842093($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','code','text_character_identifier_tooltip','template','text_restore_question','text_restore_question','restore'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/template_editor.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['snippet']->value->getId(), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <div id="content_snippet_general">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              enctype="multipart/form-data"
              name="snippet_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              class="<?php if ($_smarty_tpl->tpl_vars['target']->value=="popup") {?>cm-ajax cm-form-dialog-closer<?php }?> form-horizontal"
        >

            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet[addon]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getAddon(), ENT_QUOTES, 'UTF-8');?>
" />

            <div id="content_tab_snippet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <fieldset>

                    <div class="control-group">
                        <label for="elm_snippet_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-focus control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input id="elm_snippet_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="snippet[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getName(), ENT_QUOTES, 'UTF-8');?>
" class="span9 cm-emltpl-set-active">
                        </div>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                        <div class="control-group">
                            <label for="elm_snippet_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-focus control-label"><?php echo $_smarty_tpl->__("code");?>
:</label>
                            <div class="controls">
                                <input id="elm_snippet_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="snippet[code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
" class="span9 cm-emltpl-set-active">
                                <p class="muted description"><?php echo $_smarty_tpl->__("text_character_identifier_tooltip");?>
</p>
                            </div>
                        </div>
                    <?php }?>

                    <div class="control-group">
                        <label class="cm-required control-label" for="elm_snippet_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("template");?>
:</label>
                        <div class="controls">
                            <textarea id="elm_snippet_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="snippet[template]" cols="55" rows="14" class="span9 cm-emltpl-set-active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getTemplate(), ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </div>
                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"snippet[status]",'id'=>"elm_snippet_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['snippet']->value->toArray(),'hidden'=>false), 0);?>


                </fieldset>
            <!--content_tab_snippet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

            <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['snippet']->value->isModified()) {?>
                    <?php $_smarty_tpl->tpl_vars['r_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['target']->value=="popup") {?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_class'] = new Smarty_variable("cm-confirm cm-ajax", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_data'] = new Smarty_variable(array("data-ca-target-id"=>"content_tab_snippet_".((string)$_smarty_tpl->tpl_vars['id']->value).",content_tab_snippet_buttons_".((string)$_smarty_tpl->tpl_vars['id']->value),"data-ca-confirm-text"=>$_smarty_tpl->__("text_restore_question")), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_dropdown_class'] = new Smarty_variable("droptop", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_class'] = new Smarty_variable("cm-confirm", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_data'] = new Smarty_variable(array("data-ca-confirm-text"=>$_smarty_tpl->__("text_restore_question")), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['restore_btn_dropdown_class'] = new Smarty_variable('', null, 0);?>
                    <?php }?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li>
                            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'href'=>"snippets.restore?snippet_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>$_smarty_tpl->tpl_vars['restore_btn_class']->value,'data'=>$_smarty_tpl->tpl_vars['restore_btn_data']->value,'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"));?>

                        </li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools ".((string)$_smarty_tpl->tpl_vars['restore_btn_dropdown_class']->value),'id'=>"tools_general"));?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['target']->value=="popup") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[snippets.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[snippets.update]",'but_target_form'=>"snippet_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

                <?php }?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if ($_smarty_tpl->tpl_vars['target']->value=="popup") {?>
                <div class="buttons-container" id="content_tab_snippet_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo Smarty::$_smarty_vars['capture']['buttons'];?>

                <!--content_tab_snippet_buttons_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        </form>
    </div>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.formajaxpost_snippet_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', function(response_data, params) {
                if (response_data.failed_request) {
                    return false;
                }

                var $dialog = $.ceDialog('get_last');

                $dialog.ceDialog('destroy');
                $dialog.remove();
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"snippets:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"snippets:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"snippets:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['target']->value=="popup") {?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['snippet']->value->getName(),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>
<?php }} ?>
