<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 13:30:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/currencies/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107377244962a41a5a8067a7-64710864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d23c51415309e48371d7f4c704558dc18dc74aa' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/currencies/update.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107377244962a41a5a8067a7-64710864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'id' => 0,
    'is_sharing_enabled' => 0,
    'add_storefront_text' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a41a5a8556e9_97526489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a41a5a8556e9_97526489')) {function content_62a41a5a8556e9_97526489($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','storefronts','name','code','primary_currency','currency_rate','currency_sign','after_sum','tt_views_currencies_update_after_sum','ths_sign','tt_views_currencies_update_ths_sign','dec_sign','tt_views_currencies_update_dec_sign','decimals','tt_views_currencies_update_decimals','add_storefronts','all_storefronts'));
?>
<?php if ($_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['currency']->value['currency_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable("0", null, 0);?>    
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" name="update_currency_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class=" form-horizontal<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

    <input type="hidden" name="currency_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")||$_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
            <li id="tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("storefronts");?>
</a></li>
        <?php }?>
    </ul>
</div>

<div class="cm-tabs-content" id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<fieldset>
    <div class="control-group">
        <label class="control-label cm-required" for="description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[description]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
" id="description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" size="18">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required" for="currency_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("code");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[currency_code]" size="8" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
" id="currency_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" onkeyup="var matches = this.value.match(/^(\w*)/gi);  if (matches) this.value = matches;">
        </div>
    </div>
    
    
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label class="control-label" for="is_primary_currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[coefficient]" value="1" />
            <input type="checkbox" name="currency_data[is_primary]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$('.cm-coefficient').prop('disabled', Tygh.$(this).prop('checked'))" id="is_primary_currency_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label cm-required" for="coefficient_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency_rate");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[coefficient]" size="7" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['coefficient'], ENT_QUOTES, 'UTF-8');?>
" id="coefficient_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-coefficient" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>disabled="disabled"<?php }?>>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="symbol_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[symbol]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['symbol'], ENT_QUOTES, 'UTF-8');?>
" id="symbol_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:autoupdate")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:autoupdate"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:autoupdate"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="control-group">
        <label class="control-label" for="after_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("after_sum");?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[after]" value="N" />
            <input type="checkbox" name="currency_data[after]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['after']=="Y") {?>checked="checked"<?php }?> id="after_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_after_sum");?>
</p>
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['id']->value&&!fn_allowed_for("ULTIMATE:FREE")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"currency_data[status]",'id'=>"add_currency",'hidden'=>true), 0);?>

    <?php }?>

    <div class="control-group">
        <label class="control-label" for="thousands_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ths_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[thousands_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['thousands_separator'], ENT_QUOTES, 'UTF-8');?>
" id="thousands_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_ths_sign");?>
</p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimal_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("dec_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[decimals_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
" id="decimal_separator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_dec_sign");?>
</p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimals_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("decimals");?>
:</label>
       <div class="controls">
            <input type="text" name="currency_data[decimals]" size="1" maxlength="2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['decimals'], ENT_QUOTES, 'UTF-8');?>
" id="decimals_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
           <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_decimals");?>
</p>
       </div>
    </div>
    </fieldset>
<!--content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")||$_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
        <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_storefronts"), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"currency_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['currency']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0);?>

        <!--content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (fn_allow_save_object('','',true)) {?>
    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[currencies.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
<?php }?>

</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
