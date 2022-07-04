<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/block_manager/components/device_switch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14503211866294b6beaf0ec3-03212426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abbb91cc3393635482bc7648a60a7fec1a954206' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/block_manager/components/device_switch.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14503211866294b6beaf0ec3-03212426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'devices' => 0,
    'device' => 0,
    'device_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6beb006b2_67490893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6beb006b2_67490893')) {function content_6294b6beb006b2_67490893($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.view_layout.phone','block_manager.view_layout.tablet','block_manager.view_layout.desktop','block_manager.view_layout.reset_filter'));
?>
<?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.phone");
$_tmp4=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.tablet");
$_tmp5=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.view_layout.desktop");
$_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable(array(''=>array("name"=>$_smarty_tpl->__("block_manager.view_layout.reset_filter"),"icon_class"=>'',"btn_class"=>"btn btn-primary cm-reset-device-availability"),"phone"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp4."</span>","icon_class"=>"icon-mobile-phone","btn_class"=>"btn cm-switch-device-availability"),"tablet"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp5."</span>","icon_class"=>"icon-tablet","btn_class"=>"btn cm-switch-device-availability"),"desktop"=>array("name"=>"<span class=\"mobile-hidden\">".$_tmp6."</span>","icon_class"=>"icon-desktop","btn_class"=>"btn cm-switch-device-availability")), null, 0);?>

<div class="device-switch-wrap" id="device_switch">
    <div class="btn-group device-switch">
        <?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_smarty_tpl->tpl_vars['device_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->_loop = true;
 $_smarty_tpl->tpl_vars['device_id']->value = $_smarty_tpl->tpl_vars['device']->key;
?>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['device']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['device']->value['icon_class'],'icon_first'=>true,'raw'=>true,'class'=>"device-switch__device ".((string)$_smarty_tpl->tpl_vars['device']->value['btn_class']),'data'=>array("data-ca-device-availability-device"=>$_smarty_tpl->tpl_vars['device_id']->value)));?>

        <?php } ?>
    </div>
<!--device_switch--></div>
<?php }} ?>
