<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:27:40
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/settings/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50950726629536cc4298a1-73387928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72863ea34fff4cf66e956c49911743462f9c135' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/settings/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50950726629536cc4298a1-73387928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_id' => 0,
    'selected_storefront_id' => 0,
    'selected_section' => 0,
    'options' => 0,
    'ukey' => 0,
    'section' => 0,
    'subsections' => 0,
    'subsection' => 0,
    'highlight' => 0,
    'settings_title' => 0,
    'select_storefront' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629536cc441d54_58892557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629536cc441d54_58892557')) {function content_629536cc441d54_58892557($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_component')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.component.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('settings'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php if ($_REQUEST['highlight']) {?>
<?php $_smarty_tpl->tpl_vars["highlight"] = new Smarty_variable(explode(",",$_REQUEST['highlight']), null, 0);?>
<?php }?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="settings_form" class=" form-horizontal form-edit form-setting">
    <input type="hidden" name="section_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="text" class="hidden"> 

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <?php  $_smarty_tpl->tpl_vars['subsection'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsection']->_loop = false;
 $_smarty_tpl->tpl_vars["ukey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsection']->key => $_smarty_tpl->tpl_vars['subsection']->value) {
$_smarty_tpl->tpl_vars['subsection']->_loop = true;
 $_smarty_tpl->tpl_vars["ukey"]->value = $_smarty_tpl->tpl_vars['subsection']->key;
?>
            <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ukey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>class="cm-hide-save-button"<?php }?>>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"settings.settings_section",'subsection'=>$_smarty_tpl->tpl_vars['subsection']->value,'section'=>$_smarty_tpl->tpl_vars['section_id']->value,'html_id_prefix'=>"field_",'html_name'=>"update",'highlight'=>$_smarty_tpl->tpl_vars['highlight']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </div>
        <?php } ?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[settings.update]",'but_role'=>"submit-link",'but_target_form'=>"settings_form"), 0);?>

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
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>


</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->__("settings"),'title_end'=>$_smarty_tpl->tpl_vars['settings_title']->value,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar_position'=>"left",'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0);?>


<?php }} ?>
