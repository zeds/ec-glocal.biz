<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 18:10:55
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/double_selectboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1896695417629b219f6edd31-69876817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3001b3419c11ddaca114b9bda6052e83716a5a33' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/double_selectboxes.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1896695417629b219f6edd31-69876817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'class_name' => 0,
    'first_id' => 0,
    'required' => 0,
    'first_name' => 0,
    'first_data' => 0,
    'key' => 0,
    'value' => 0,
    'sortable' => 0,
    'second_id' => 0,
    'second_name' => 0,
    'second_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b219f6fc257_64668317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b219f6fc257_64668317')) {function content_629b219f6fc257_64668317($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('multiple_selectbox_notice'));
?>
<?php $_smarty_tpl->tpl_vars['first_id'] = new Smarty_variable(uniqid(''), null, 0);?>
<?php $_smarty_tpl->tpl_vars['second_id'] = new Smarty_variable(uniqid(''), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<div class="table-wrapper">
    <table class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
" width="100%">
    <tr>
        <td width="48%">
            <label for="id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?> cm-all hidden"></label>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="10" value="" multiple="multiple" class="input-full">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['first_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>

            <?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?>
            <p>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('up');" class="icon-chevron-up hand" ></span>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('down');" class="icon-chevron-down hand" ></span>
            </p>
            <?php }?>
        </td>
        <td class="center chevron-icons" width="4%">
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-chevron-left hand clear"></span><br/>
                <span onclick="Tygh.$('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="icon-chevron-right hand"></span>
        </td>
        <td width="48%" valign="top">
            <p><select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['second_id']->value, ENT_QUOTES, 'UTF-8');?>
" size="10" value="" multiple="multiple" class="input-full">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['second_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select></p>
        </td>
    </tr>
    </table>
</div>
<div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
<?php }} ?>
