<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341043624629e5e2e0b2c23-40193665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34d8377c521a2dc3908c8b767e8665bb7008e9ac' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_information.tpl',
      1 => 1623923032,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1341043624629e5e2e0b2c23-40193665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'version_compare' => 0,
    'compatibility' => 0,
    'addon_languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e0eedc2_80430890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e0eedc2_80430890')) {function content_629e5e2e0eedc2_80430890($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','developer','show_all_developer_addons','developer_page','category','addons.other_category','show_all_category_addons','compatibility','addons.mve_ult_or_plus_required','addons.ult_required','addon_is_compatible','addon_is_compatible','addon_required_version','unknown','languages','addons.no_information','addon_id'));
?>

<div class="hidden cm-hide-save-button" id="content_information">
    <div class="form-horizontal form-edit">

        
        <div class="control-group">
            <label class="control-label" for="addon_name"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
                <p id="addon_name"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['name'])===null||$tmp==='' ? "–" : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>

        
        <div class="control-group">
            <label class="control-label" for="addon_developer"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls">
                <p class="spaced-child" id="addon_developer">
                    <span>
                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['supplier'])===null||$tmp==='' ? "–" : $tmp), ENT_QUOTES, 'UTF-8');?>

                    </span>
                    <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['addon']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_all_developer_addons");?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['supplier_page']) {?>
                        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['addon']->value['supplier_page']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("developer_page");?>
</a>
                    <?php }?>
                </p>
            </div>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['category']) {?>
            <div class="control-group">
                <label class="control-label" for="addon_category"><?php echo $_smarty_tpl->__("category");?>
:</label>
                <div class="controls">
                    <p class="spaced-child">
                        <span id="addon_category">
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['category_name'])===null||$tmp==='' ? $_smarty_tpl->__("addons.other_category") : $tmp), ENT_QUOTES, 'UTF-8');?>

                        </span>
                        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&category_id=".((string)$_smarty_tpl->tpl_vars['addon']->value['category'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_all_category_addons",array("[category]"=>mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['category_name'], 'UTF-8')));?>
</a>
                    </p>
                </div>
            </div>
        <?php }?>


        
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
            <div class="controls">
                <?php if (!$_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_addon_snapshot($_smarty_tpl->tpl_vars['addon']->value['addon'],"plus")) {?>
                        <p class="text-warning"><?php echo $_smarty_tpl->__("addons.mve_ult_or_plus_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                    <?php } else { ?>
                        <p class="text-warning"><?php echo $_smarty_tpl->__("addons.ult_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||$_smarty_tpl->tpl_vars['version_compare']->value) {?>
                    <p><?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['addon']->value['supplier']=='CS-Cart.jp'||$_smarty_tpl->tpl_vars['addon']->value['supplier']=='ANDPLUS') {?>
                    <p><?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</p>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['compatibility']->value&&!$_smarty_tpl->tpl_vars['version_compare']->value) {?>
                    <p class="text-warning"><?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['compatibility']->value));?>
</p>
                <?php } else { ?>
                    <p class="muted"><?php echo $_smarty_tpl->__("unknown");?>
</p>
                <?php }?>
            </div>
        </div>

        
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("languages");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['addon_languages']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addon_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['language']->value['variant'])) {?>
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php } else { ?>
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                    <?php } ?>
                <?php } else { ?>
                    <p class="muted"><?php echo $_smarty_tpl->__("addons.no_information");?>
</p>
                <?php }?>
            </div>
        </div>

        
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("addon_id");?>
:</label>
            <div class="controls">
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['addon'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    
    </div>
<!--content_information--></div>
<?php }} ?>
