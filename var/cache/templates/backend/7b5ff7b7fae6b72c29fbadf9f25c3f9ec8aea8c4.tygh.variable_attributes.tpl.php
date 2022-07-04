<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/components/variable_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193163546462a6632c6010d1-36075090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5ff7b7fae6b72c29fbadf9f25c3f9ec8aea8c4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/documents/components/variable_attributes.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '193163546462a6632c6010d1-36075090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributes' => 0,
    'variable' => 0,
    'attribute' => 0,
    'template' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c60a133_13014642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c60a133_13014642')) {function content_62a6632c60a133_13014642($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['attributes']->value) {?>
<ul class="hidden nav nav-list" >
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
        <li><span class="cm-emltpl-insert-variable label hand" data-ca-template-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-template="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
                <span class="icon-plus hand nav-opener" <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>style="white-space:nowrap;"<?php }?>></span>
                <?php echo $_smarty_tpl->getSubTemplate ("views/documents/components/variable_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('attributes'=>$_smarty_tpl->tpl_vars['item']->value,'variable'=>((string)$_smarty_tpl->tpl_vars['variable']->value).".".((string)$_smarty_tpl->tpl_vars['attribute']->value),'template'=>$_smarty_tpl->tpl_vars['template']->value), 0);?>

            <?php }?>
        </li>
    <?php } ?>
</ul>
<?php }?><?php }} ?>
