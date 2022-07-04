<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/header/addon_header_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1129105742629e5e2e3e7164-83775693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524ad80e895654e7e797ba447beda42dcd1521ec' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/header/addon_header_buttons.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1129105742629e5e2e3e7164-83775693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'addon_install_datetime' => 0,
    '_addon' => 0,
    'line' => 0,
    'btn_delete_data' => 0,
    'license_required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e427579_00836048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e427579_00836048')) {function content_629e5e2e427579_00836048($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('refresh','uninstall','addons.install','addons.activate','addons.install'));
?>
<?php if ($_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']&&$_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons_detailed:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons_detailed:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'method'=>"POST",'text'=>$_smarty_tpl->__("refresh"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['refresh_url'])));?>
</li>
            <?php $_smarty_tpl->tpl_vars['line'] = new Smarty_variable(fn_is_lang_var_exists(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['line']->value) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('btn_delete_data', null, 0);
$_smarty_tpl->tpl_vars['btn_delete_data']->value["data-ca-confirm-text"] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['_addon']->value).".confirmation_deleting");?>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm text-error",'method'=>"POST",'text'=>$_smarty_tpl->__("uninstall"),'href'=>((string)$_smarty_tpl->tpl_vars['addon']->value['delete_url']),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons_detailed:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_form",'but_meta'=>"cm-submit hidden cm-addons-save-settings"), 0);?>


        
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[addons.update]",'but_role'=>"action",'but_target_form'=>"update_addon_".((string)$_smarty_tpl->tpl_vars['_addon']->value)."_subs_form",'but_meta'=>"cm-submit hidden cm-addons-save-subscription"), 0);?>


    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']&&!$_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php ob_start();
echo htmlspecialchars(rawurlencode("addons.update&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])), ENT_QUOTES, 'UTF-8');
$_tmp9=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn btn-primary",'method'=>"POST",'text'=>$_smarty_tpl->__("addons.install"),'href'=>"addons.install?addon=".((string)$_smarty_tpl->tpl_vars['_addon']->value)."&return_url=".$_tmp9));?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('key'=>$_smarty_tpl->tpl_vars['_addon']->value), 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['href'], ENT_QUOTES, 'UTF-8');?>

            class="btn btn-primary cm-post cm-dialog-opener cm-dialog-auto-size"
            data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['target_id'], ENT_QUOTES, 'UTF-8');?>

            data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required']->value['promo_popup_title'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
                <?php echo $_smarty_tpl->__("addons.activate");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("addons.install");?>

            <?php }?>
        </a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
