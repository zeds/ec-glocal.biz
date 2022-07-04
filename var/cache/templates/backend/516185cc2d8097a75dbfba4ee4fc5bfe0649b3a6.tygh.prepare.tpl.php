<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 11:31:05
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/feedback/prepare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147673581562a6a1695f22b7-30605095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516185cc2d8097a75dbfba4ee4fc5bfe0649b3a6' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/feedback/prepare.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147673581562a6a1695f22b7-30605095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fdata' => 0,
    'section' => 0,
    'lang_section' => 0,
    'data' => 0,
    'value' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6a16961c2f2_14071456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6a16961c2f2_14071456')) {function content_62a6a16961c2f2_14071456($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_feedback_notice','section','param','value','options_for','yes','no','send'));
?>
<div id="content_groupfeedback">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="feedback_form" class="">

<p><?php echo $_smarty_tpl->__("text_feedback_notice");?>
</p>
<div class="table-wrapper">
    <table  width="100%" class="table">
        <thead>
            <tr>
                <th width="15%"><?php echo $_smarty_tpl->__("section");?>
</th>
                <th width="20%"><?php echo $_smarty_tpl->__("param");?>
</th>
                <th width="65%"><?php echo $_smarty_tpl->__("value");?>
</th>
            </tr>
        </thead>
    <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
    <tr>
        <td colspan="3" class="row-gray strong">
            <?php $_smarty_tpl->tpl_vars["lang_section"] = new Smarty_variable($_smarty_tpl->__($_smarty_tpl->tpl_vars['section']->value), null, 0);?>
            <?php if (strpos($_smarty_tpl->tpl_vars['section']->value,$_smarty_tpl->__("options_for"))===false) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_section']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');
}?></td>
    </tr>
        <?php if (in_array($_smarty_tpl->tpl_vars['section']->value,array("payments","currencies","taxes","shippings","promotions","addons","local_modifications","installed_upgrades"))) {?>
        <tr>
        <td>&nbsp;</td>
        <td colspan="2">
            <div id="parameters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
">
            <table width="80%" class="table table-condensed table--relative">
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["value"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["value"]->key;
 $_smarty_tpl->tpl_vars["value"]->index++;
 $_smarty_tpl->tpl_vars["value"]->first = $_smarty_tpl->tpl_vars["value"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["section"]['first'] = $_smarty_tpl->tpl_vars["value"]->first;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['section']['first']) {?>
                <thead><tr>
                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</th>
                <?php } ?>
                </tr></thead>
                <?php }?>
                <tr>
                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value==="Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['item']->value==="N") {
echo $_smarty_tpl->__("no");
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');
}?></td>
                <?php } ?>
                </tr>
            <?php } ?>
            </table>
            <!--parameters_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        </td>
        </tr>
        <?php } else { ?>
        <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["value"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["value"]->key;
 $_smarty_tpl->tpl_vars["value"]->index++;
 $_smarty_tpl->tpl_vars["value"]->first = $_smarty_tpl->tpl_vars["value"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["section"]['first'] = $_smarty_tpl->tpl_vars["value"]->first;
?>
            <tr>
            <?php if ($_smarty_tpl->tpl_vars['section']->value=='settings'||$_smarty_tpl->tpl_vars['section']->value=='first_company_settings') {?>
                <td class="nowrap">&nbsp;</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['value'],'&amp;','&amp; '), ENT_QUOTES, 'UTF-8');?>
</td>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=='addons') {?>
                <td class="nowrap"></td>
                <td class="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['addon'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['status'], ENT_QUOTES, 'UTF-8');?>
</td>
            <?php } elseif ($_smarty_tpl->tpl_vars['section']->value=='languages') {?>
                <td class="nowrap"></td>
                <td class="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['status'], ENT_QUOTES, 'UTF-8');?>
</td>
            <?php } else { ?>
                <td class="nowrap"></td>
                <td class="nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                <td  width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
            <?php }?>
            </tr>
        <?php } ?>
        <?php }?>
    <?php } ?>
    </table>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[feedback.send]",'but_text'=>$_smarty_tpl->__("send"),'but_role'=>"button_main"), 0);?>

</div>
</form>
<!--content_groupfeedback--></div><?php }} ?>
