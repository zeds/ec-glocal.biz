<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1306272672629e5e2e284983-71063698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a88422261509272ecaf541b2a47083f1f48e1a4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_status.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1306272672629e5e2e284983-71063698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'addon_install_datetime' => 0,
    'submit_url' => 0,
    'addon_version' => 0,
    'license_expires' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e343be7_06569968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e343be7_06569968')) {function content_629e5e2e343be7_06569968($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','addons.disabled','addons.not_installed','favorites','version','upgrade','available','license_expires','never','developer','core_addon','verified'));
?>
<div class="sidebar-row">

    
    <div class="shift-button" id="addon_icon">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addon'=>$_smarty_tpl->tpl_vars['addon']->value,'icon_large'=>true), 0);?>

    <!--addon_icon--></div>

    
        <div class="control-group sidebar__stats" id="addon_status">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value&&$_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php ob_start();
echo htmlspecialchars(rawurlencode("addons.update&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['submit_url'] = new Smarty_variable("addons.update_status?id=".((string)$_smarty_tpl->tpl_vars['addon']->value['addon'])."&return_url=".$_tmp6, null, 0);?>
                    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::DISABLED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button storefront__status",'checked'=>$_smarty_tpl->tpl_vars['addon']->value['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE"),'extra_attrs'=>array("data-ca-submit-url"=>$_smarty_tpl->tpl_vars['submit_url']->value,"data-ca-opened-status"=>$_tmp7,"data-ca-closed-status"=>$_tmp8,"data-ca-result-ids"=>"addon_icon,addon_status")), 0);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['addon_install_datetime']->value&&!$_smarty_tpl->tpl_vars['addon']->value['snapshot_correct']) {?>
                    <?php echo $_smarty_tpl->__("addons.disabled");?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("addons.not_installed");?>

                <?php }?>
        </div>
    <!--addon_status--></div>

    
    <div class="control-group sidebar__stats" id="addon_favorite">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("favorites");?>
:</label>
        <div class="controls sidebar__controls">
            <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/addons/addon_favorite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('a'=>$_smarty_tpl->tpl_vars['addon']->value,'result_ids'=>"addon_favorite",'detailed'=>true), 0);?>

        </div>
    <!--addon_favorite--></div>

    
    <div class="control-group sidebar__stats">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("version");?>
:</label>
        <div class="controls sidebar__controls">
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_version']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("upgrade");?>
:</label>
            <div class="controls sidebar__controls">
                <p class="text-success">
                    <?php echo $_smarty_tpl->__("available");?>

                </p>
            </div>
        </div>
    <?php }?>

    
    <?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&isset($_smarty_tpl->tpl_vars['license_expires']->value)) {?>
    <div class="control-group sidebar__stats">
        <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("license_expires");?>
:</label>
        <div class="controls sidebar__controls">
            <?php if ($_smarty_tpl->tpl_vars['license_expires']->value==="0") {?>
                <p><?php echo $_smarty_tpl->__("never");?>
</p>
            <?php } else { ?>
                <p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['license_expires']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||$_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls sidebar__controls">
                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']) {?>
                    <p><?php echo $_smarty_tpl->__("core_addon");?>
</p>
                <?php } else { ?>
                    <p class="text-success"><?php echo $_smarty_tpl->__("verified");?>
</p>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }} ?>
