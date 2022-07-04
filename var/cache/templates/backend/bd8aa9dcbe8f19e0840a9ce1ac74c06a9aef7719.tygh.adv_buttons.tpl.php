<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182783814262a6632c4f2af2-31011550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8aa9dcbe8f19e0840a9ce1ac74c06a9aef7719' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/adv_buttons.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182783814262a6632c4f2af2-31011550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'link_text' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c50c144_10128784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c50c144_10128784')) {function content_62a6632c50c144_10128784($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet'));
?>
<?php if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->tpl_vars['return_url_escape'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_tmp3,'link_text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? '' : $tmp),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0);?>

<?php }?><?php }} ?>
