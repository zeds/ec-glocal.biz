<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:12:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/pages/components/pages_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486188466295413840cbf6-95868488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3395e8f6e3da054265c0d456d071f83cc5a8d39d' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/pages/components/pages_tree.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1486188466295413840cbf6-95868488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'root' => 0,
    'tree' => 0,
    'not_root' => 0,
    'page' => 0,
    'direction' => 0,
    'shift' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62954138434ae0_56630828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62954138434ae0_56630828')) {function content_62954138434ae0_56630828($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['root']->value) {?>

<?php $_smarty_tpl->tpl_vars["not_root"] = new Smarty_variable("_", null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['page_id']) {
$_smarty_tpl->tpl_vars["path"] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['id_path'], null, 0);
}?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php echo smarty_function_math(array('equation'=>"x*10",'x'=>$_smarty_tpl->tpl_vars['page']->value['level'],'assign'=>"shift"),$_smarty_tpl);?>

    <li>
        <a href="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?> target="_blank"<?php }
if ($_smarty_tpl->tpl_vars['page']->value['level']!="0") {?> style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/pages/components/pages_tree.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/pages/components/pages_tree.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['root']->value) {?>

<?php $_smarty_tpl->tpl_vars["not_root"] = new Smarty_variable("_", null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['page_id']) {
$_smarty_tpl->tpl_vars["path"] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['id_path'], null, 0);
}?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["page"]->key;
?>
    <?php echo smarty_function_math(array('equation'=>"x*10",'x'=>$_smarty_tpl->tpl_vars['page']->value['level'],'assign'=>"shift"),$_smarty_tpl);?>

    <li>
        <a href="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_type']==(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['page']->value['link']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['page']->value['new_window']) {?> target="_blank"<?php }
if ($_smarty_tpl->tpl_vars['page']->value['level']!="0") {?> style="padding-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shift']->value, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a>
    </li>
<?php }
}?><?php }} ?>
