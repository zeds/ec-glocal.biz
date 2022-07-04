<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1313280325629e5e2e0f6785-39992739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe439013de4a9decb0cc4dbd7724eb91839bf9f4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_update.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1313280325629e5e2e0f6785-39992739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actual_change_log' => 0,
    'latest_change_log' => 0,
    'version_compare' => 0,
    'addon' => 0,
    'settings' => 0,
    'compatibility' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e165874_30555824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e165874_30555824')) {function content_629e5e2e165874_30555824($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.latest_version','version','addons.upgrade_to_version','addons.upgrade_to_version','release_date','release_date','compatibility','addon_is_compatible','addon_required_version','addons.upgrade_to_product_version','what_is_new','addons.latest_available_for_installation_version','version','addons.upgrade_to_version','addons.upgrade_to_version','release_date','compatibility','addon_is_compatible','addon_required_version','what_is_new'));
?>
<?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value||$_smarty_tpl->tpl_vars['latest_change_log']->value) {?>
    <div class="hidden cm-hide-save-button" id="content_upgrades">
        <div class="form-horizontal form-edit">

            
            <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value) {?>
                <?php $_smarty_tpl->tpl_vars['version_compare'] = new Smarty_variable(version_compare((defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null),$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.latest_version"),'target'=>"#addon_actual_version"), 0);?>

                <div id="addon_actual_version" class="collapse in collapse-visible">
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("version");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <p class="inline-block">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['actual_change_log']->value['version'], ENT_QUOTES, 'UTF-8');?>

                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['version_compare']->value>=0&$_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
                                    <?php ob_start();
echo htmlspecialchars(fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['version'])),'href'=>$_tmp3));?>

                                <?php } else { ?>
                                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"button",'class'=>"btn disabled",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['version']))));?>

                                <?php }?>
                            </div>
                        </div>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value['available_since']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                            <div class="controls">
                                <p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_change_log']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['actual_change_log']->value['timestamp']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                            <div class="controls">
                                <p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['actual_change_log']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</p>
                            </div>
                        </div>
                    <?php }?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||$_smarty_tpl->tpl_vars['version_compare']->value>=0) {?>
                                    <p class="inline-block">
                                        <?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                                    </p>
                                <?php } elseif ($_smarty_tpl->tpl_vars['version_compare']->value<0) {?>
                                    <p class="inline-block">
                                        <?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility']));?>

                                    </p>
                                    <?php ob_start();
echo htmlspecialchars(fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_product_version",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[version]"=>$_smarty_tpl->tpl_vars['actual_change_log']->value['compatibility'])),'href'=>$_tmp4));?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['actual_change_log']->value['readme']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("what_is_new");?>
:</label>
                            <div class="controls">
                                <?php echo $_smarty_tpl->tpl_vars['actual_change_log']->value['readme'];?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

            
            <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.latest_available_for_installation_version"),'target'=>"#addon_latest_version"), 0);?>

                <div id="addon_latest_version" class="collapse in collapse-visible">
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("version");?>
:</label>
                        <div class="controls">
                            <div class="spaced-child">
                                <p class="inline-block">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['latest_change_log']->value['version'], ENT_QUOTES, 'UTF-8');?>

                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['marketplace']['upgrade_available']) {?>
                                    <?php ob_start();
echo htmlspecialchars(fn_url("upgrade_center.manage"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['latest_change_log']->value['version'])),'href'=>$_tmp5));?>

                                <?php } else { ?>
                                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn disabled",'text'=>$_smarty_tpl->__("addons.upgrade_to_version",array("[version]"=>$_smarty_tpl->tpl_vars['latest_change_log']->value['version']))));?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("release_date");?>
:</label>
                        <div class="controls">
                            <p>
                                <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value['available_since']) {?>
                                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_change_log']->value['available_since'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_change_log']->value['timestamp'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("compatibility");?>
:</label>
                        <div class="controls">
                            <p>
                                <?php $_smarty_tpl->tpl_vars['version_compare'] = new Smarty_variable(version_compare((defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null),$_smarty_tpl->tpl_vars['compatibility']->value), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['is_core_addon']||$_smarty_tpl->tpl_vars['version_compare']->value<=0) {?>
                                    <?php echo $_smarty_tpl->__("addon_is_compatible",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['version_compare']->value>0) {?>
                                    <?php echo $_smarty_tpl->__("addon_required_version",array("[version]"=>$_smarty_tpl->tpl_vars['compatibility']->value));?>

                                <?php }?>
                            </p>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['latest_change_log']->value['readme']) {?>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("what_is_new");?>
:</label>
                            <div class="controls">
                                <?php echo $_smarty_tpl->tpl_vars['latest_change_log']->value['readme'];?>

                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    <!--content_updates--></div>
<?php }?>
<?php }} ?>
