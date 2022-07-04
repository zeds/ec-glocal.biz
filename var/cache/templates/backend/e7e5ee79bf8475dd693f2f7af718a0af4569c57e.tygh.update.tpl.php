<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:03
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444855701629e5e2b51f5b8-63992480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e5ee79bf8475dd693f2f7af718a0af4569c57e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/update.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1444855701629e5e2b51f5b8-63992480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
    'runtime' => 0,
    'addon' => 0,
    'show_all_storefront' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2b61d640_67115875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2b61d640_67115875')) {function content_629e5e2b61d640_67115875($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->tpl_vars['_addon'] = new Smarty_variable($_REQUEST['addon'], null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/addons/update.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('states'=>fn_get_all_states(1)), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_subscription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/tabs/addon_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/header/addon_header_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['addon']->value['name'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>($_tmp1),'buttons'=>($_tmp2),'select_storefront'=>true,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'storefront_switcher_param_name'=>"storefront_id"), 0);?>

<?php }} ?>
