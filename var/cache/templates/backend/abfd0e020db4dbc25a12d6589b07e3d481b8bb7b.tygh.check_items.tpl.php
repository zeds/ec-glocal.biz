<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:17
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/check_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:762697546294b6bd101739-47480810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abfd0e020db4dbc25a12d6589b07e3d481b8bb7b' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/check_items.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '762697546294b6bd101739-47480810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elms_container' => 0,
    'check_target' => 0,
    'style' => 0,
    'check_link' => 0,
    'check_data' => 0,
    'check_statuses' => 0,
    'class' => 0,
    'check_onclick' => 0,
    'checked' => 0,
    'is_check_disabled' => 0,
    'is_check_all_shown' => 0,
    'wrap_select_actions_into_dropdown' => 0,
    'dropdown_menu_class' => 0,
    'container' => 0,
    'status' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bd12af40_69872740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bd12af40_69872740')) {function content_6294b6bd12af40_69872740($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_all','unselect_all','check_uncheck_all','check_all','check_none'));
?>
<?php $_smarty_tpl->tpl_vars['check_data'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['container'] = new Smarty_variable($_smarty_tpl->tpl_vars['elms_container']->value ? "data-ca-container=".((string)$_smarty_tpl->tpl_vars['elms_container']->value) : '', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['check_target']->value) {?>
    <?php $_smarty_tpl->tpl_vars['check_data'] = new Smarty_variable("data-ca-target=\"".((string)$_smarty_tpl->tpl_vars['check_target']->value)."\"", null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("check_items_checkbox", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['style']->value=="links") {?>
        <a 
            <?php if ($_smarty_tpl->tpl_vars['check_link']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['check_link']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-on underlined" 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

        >
            <?php echo $_smarty_tpl->__("select_all");?>

        </a> | <a 
            <?php if ($_smarty_tpl->tpl_vars['check_link']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['check_link']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-off underlined" 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

        >
            <?php echo $_smarty_tpl->__("unselect_all");?>

        </a>
    <?php } else { ?>
        <input 
            type="checkbox" 
            name="check_all" 
            value="Y" 
            title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" 
            class="<?php if ($_smarty_tpl->tpl_vars['check_statuses']->value) {?>pull-left<?php }?> cm-check-items <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" 
            <?php if ($_smarty_tpl->tpl_vars['check_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['check_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_check_disabled']->value) {?>disabled="disabled"<?php }?> 
        />
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (($_smarty_tpl->tpl_vars['check_statuses']->value||$_smarty_tpl->tpl_vars['is_check_all_shown']->value)&&!$_smarty_tpl->tpl_vars['is_check_disabled']->value) {?> 
    <?php if (!$_smarty_tpl->tpl_vars['wrap_select_actions_into_dropdown']->value) {?>
    <div class="btn-group btn-checkbox cm-check-items">
        <a href="" data-toggle="dropdown" class="btn dropdown-toggle">
            <span class="caret"></span>
        </a>
        <?php echo Smarty::$_smarty_vars['capture']['check_items_checkbox'];?>

    <?php }?>
        <ul class="dropdown-menu <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <li><a class="cm-on" <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->__("check_all");?>
</a></li>
            <li><a class="cm-off" <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->__("check_none");?>
</a></li>
            <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['check_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
            <li><a <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 data-ca-status="<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } ?>
        </ul>
    <?php if (!$_smarty_tpl->tpl_vars['wrap_select_actions_into_dropdown']->value) {?>
    </div>
    <?php }?>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['check_items_checkbox'];?>

<?php }?>
<?php }} ?>
