<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 12:48:53
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62344246262a410a555ff83-93560228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fcf534b87cbd7f9c834c98306cb9899e36e7455' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/tags/hooks/products/search_form.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '62344246262a410a555ff83-93560228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a410a557f786_59693084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a410a557f786_59693084')) {function content_62a410a557f786_59693084($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
