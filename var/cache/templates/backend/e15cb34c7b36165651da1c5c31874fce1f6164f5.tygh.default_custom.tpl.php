<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/components/default_custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11934706566294b6bc8b1c60-28642909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e15cb34c7b36165651da1c5c31874fce1f6164f5' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/components/default_custom.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11934706566294b6bc8b1c60-28642909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'variants' => 0,
    'variant' => 0,
    'value' => 0,
    'selected' => 0,
    'show_custom' => 0,
    'component_id' => 0,
    'disable_inputs' => 0,
    'type' => 0,
    'items_count' => 0,
    'item_map' => 0,
    'items' => 0,
    'item' => 0,
    'custom_input_styles' => 0,
    'custom_input_attributes' => 0,
    'data_value' => 0,
    'data_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bc8e2630_25906125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bc8e2630_25906125')) {function content_6294b6bc8e2630_25906125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('default_custom.custom_value','default_custom.custom'));
?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/default_custom.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "default_custom" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['selectbox'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_map'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('variant', null, 0);
$_smarty_tpl->tpl_vars['variant']->value['selected'] = ($_smarty_tpl->tpl_vars['variant']->value['value']===$_smarty_tpl->tpl_vars['value']->value);?>
    <?php $_smarty_tpl->createLocalArrayVariable('item_map', null, 0);
$_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['variant']->value['type']][] = $_smarty_tpl->tpl_vars['variant']->value;?>
    <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>
        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['variant']->value, null, 0);?>
    <?php }?>
<?php } ?>
<?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('item_map', null, 0);
$_smarty_tpl->tpl_vars['item_map']->value['custom'][] = array("type"=>"custom","value"=>$_smarty_tpl->tpl_vars['value']->value,"name"=>$_smarty_tpl->__("default_custom.custom_value",array("value"=>$_smarty_tpl->tpl_vars['value']->value)),"selected"=>true);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_custom']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('item_map', null, 0);
$_smarty_tpl->tpl_vars['item_map']->value['show_custom'][] = array("type"=>"custom_edit","value"=>null,"name"=>$_smarty_tpl->__("default_custom.custom"));?>
<?php }?>

<div class="default-custom"
    data-ca-default-custom="main"
    data-ca-default-custom-selected-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-default-custom-selected-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
>
    <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['component_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-default-custom="select"
        <?php if ($_smarty_tpl->tpl_vars['disable_inputs']->value) {?>disabled="disabled"<?php }?>
    >
        <?php $_smarty_tpl->tpl_vars['items_count'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = array("disabled","inheritance","custom","variant","show_custom","inheritance_edit"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
            <?php if (($_smarty_tpl->tpl_vars['type']->value==="custom"&&$_smarty_tpl->tpl_vars['items_count']->value>0)||($_smarty_tpl->tpl_vars['type']->value==="inheritance_edit"&&!empty($_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value]))) {?>
                <option disabled>─────────────</option>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
                <?php continue 1;?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_map']->value[$_smarty_tpl->tpl_vars['type']->value], null, 0);?>

            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option data-ca-default-custom="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['url']) {?>data-ca-default-custom-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['value']) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?>selected<?php }?>
                >
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </option>

                <?php $_smarty_tpl->tpl_vars['items_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['items_count']->value+1, null, 0);?>
            <?php } ?>
        <?php } ?>
    </select>
    <?php if ($_smarty_tpl->tpl_vars['show_custom']->value) {?>
        <input type="text"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['items']->value['custom']['value'], ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['custom_input_styles']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
            <?php if ($_smarty_tpl->tpl_vars['custom_input_attributes']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['data_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_value']->_loop = false;
 $_smarty_tpl->tpl_vars['data_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['custom_input_attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_value']->key => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->_loop = true;
 $_smarty_tpl->tpl_vars['data_name']->value = $_smarty_tpl->tpl_vars['data_value']->key;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['data_value']->value)) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                <?php } ?>
            <?php }?>
            disabled
            data-ca-default-custom="textbox"
        >
    <?php }?>
</div>
<?php }} ?>
