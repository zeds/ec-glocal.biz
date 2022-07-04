<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480985819629e5e2e00a2e2-34725839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a7df59a40d5d1428715f7f468aa7cdd6b2ddf7' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_general.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '480985819629e5e2e00a2e2-34725839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_package' => 0,
    'settings' => 0,
    'addon_install_datetime' => 0,
    'addon' => 0,
    'href' => 0,
    'menu_item' => 0,
    'parent' => 0,
    'unsafe_addon_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e068492_52914053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e068492_52914053')) {function content_629e5e2e068492_52914053($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_sanitize_html')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.sanitize_html.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('what_is_new','version','addons.no_changelog','where_access_addon','menu_items','description'));
?>
<div class="hidden cm-hide-save-button " id="content_detailed">
    <div class="form-horizontal form-edit">

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/notification/requires_upgrade.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        
        <?php if ($_smarty_tpl->tpl_vars['current_package']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("what_is_new"),'target'=>"#acc_what_new"), 0);?>

            <div id="acc_what_new" class="collapse in collapse-visible">
                <div class="control-group">
                    <label class="control-label" for="addon_what_new">
                        <?php echo $_smarty_tpl->__("version");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_package']->value['file_name'], ENT_QUOTES, 'UTF-8');?>

                        <div class="muted">
                            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['current_package']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['current_package']->value['readme']) {?>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['current_package']->value['readme'];?>

                            </p>
                        <?php } else { ?>
                            <p class="muted">
                                <?php echo $_smarty_tpl->__("addons.no_changelog");?>
.
                            </p>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value&&$_smarty_tpl->tpl_vars['addon']->value['menu_items']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("where_access_addon"),'target'=>"#acc_where_access_addon"), 0);?>

            <div id="acc_where_access_addon" class="collapse in collapse-visible">
                <div class="control-group">
                    <label class="control-label" for="addon_name"><?php echo $_smarty_tpl->__("menu_items");?>
:</label>
                    <div class="controls">
                        <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addon']->value['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
 $_smarty_tpl->tpl_vars['href']->value = $_smarty_tpl->tpl_vars['menu_item']->key;
?>
                            <p>
                                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_item']->value['title'] ? $_smarty_tpl->tpl_vars['menu_item']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['menu_item']->value['id']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->tpl_vars['menu_item']->value['parents']) {?>
                                        (<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_item']->value['parents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['parent']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['parent']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
 $_smarty_tpl->tpl_vars['parent']->iteration++;
 $_smarty_tpl->tpl_vars['parent']->last = $_smarty_tpl->tpl_vars['parent']->iteration === $_smarty_tpl->tpl_vars['parent']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["addon_menu_item_parents"]['last'] = $_smarty_tpl->tpl_vars['parent']->last;
echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['title'] ? $_smarty_tpl->tpl_vars['parent']->value['title'] : $_smarty_tpl->__($_smarty_tpl->tpl_vars['parent']->value['id']), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['addon_menu_item_parents']['last']) {?> / <?php }
} ?>)
                                    <?php }?>
                                </a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("description"),'target'=>"#acc_description"), 0);?>

        <div id="acc_description" class="collapse in collapse-visible">

            
            <div>
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['product']['full_description']) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "unsafe_addon_description", null); ob_start(); ?>
                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['marketplace']['product']['full_description'];?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <p><?php echo smarty_modifier_sanitize_html($_smarty_tpl->tpl_vars['unsafe_addon_description']->value);?>
</p>
                <?php } else { ?>
                    <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                <?php }?>
            </div>
        </div>
    </div>
<!--content_detailed--></div>
<?php }} ?>
