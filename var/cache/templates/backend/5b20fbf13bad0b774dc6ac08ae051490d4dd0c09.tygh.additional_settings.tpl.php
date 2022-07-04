<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/additional_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820629431629b52cdb755f0-41982349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b20fbf13bad0b774dc6ac08ae051490d4dd0c09' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/additional_settings.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1820629431629b52cdb755f0-41982349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'taxes' => 0,
    'tax' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52cdb90055_81989064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52cdb90055_81989064')) {function content_629b52cdb90055_81989064($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping.pricing','taxes','use_for_free_shipping','tt_views_shippings_update_use_for_free_shipping','customer_information','is_address_required'));
?>
<div id="content_additional_settings">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:additional_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:additional_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shipping.pricing"),'target'=>"#shipping_pricing"), 0);?>

<fieldset id="shipping_pricing" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("taxes");?>
:</label>
        <div class="controls">
            <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
                <label class="checkbox inline" for="elm_shippings_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <input type="checkbox" name="shipping_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
]" id="elm_shippings_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['shipping']->value['tax_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php }
if (!$_smarty_tpl->tpl_vars['tax']->_loop) {
?>
                &ndash;
            <?php } ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="free_shipping"><?php echo $_smarty_tpl->__("use_for_free_shipping");?>
:</label>
        <div class="controls">
            <input type="hidden" name="shipping_data[free_shipping]" value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
 />
            <input type="checkbox" name="shipping_data[free_shipping]" id="free_shipping" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['free_shipping']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
 />
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_use_for_free_shipping");?>
</p>
        </div>
    </div>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("customer_information"),'target'=>"#customer_information"), 0);?>

<fieldset id="customer_information" class="collapse-visible collapse in">

    <div class="control-group">
        <label class="control-label" for="elm_is_address_required"
        ><?php echo $_smarty_tpl->__("is_address_required");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="shipping_data[is_address_required]"
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>

            />
            <input type="checkbox"
                   name="shipping_data[is_address_required]"
                   id="is_address_required"
                   <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['is_address_required'])===null||$tmp==='' ? $_tmp2 : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
                   value=<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

            />
        </div>
    </div>

</fieldset>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:additional_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--content_additional_settings--></div><?php }} ?>
