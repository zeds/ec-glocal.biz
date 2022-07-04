<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1734347572629e5e2e07f710-43488051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc1f798fdc758727cd92b1e2db5d0f9f76b87c99' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_settings.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1734347572629e5e2e07f710-43488051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subsections' => 0,
    '_addon' => 0,
    'section' => 0,
    'tab_id' => 0,
    'subs' => 0,
    'options' => 0,
    'field_item' => 0,
    'sep_sections' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e09e455_20922486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e09e455_20922486')) {function content_629e5e2e09e455_20922486($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_block_component')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.component.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><div class="hidden" data-ca-addons="tabsSetting" id="content_settings">

    <div class="tabs cm-j-tabs <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subsections']->value)==1) {?>hidden<?php } else { ?>cm-track<?php }?>" data-ca-addons="tabsSettingNested" data-ca-tabs-input-name="selected_sub_section">
        <ul class="nav nav-tabs">
            <?php  $_smarty_tpl->tpl_vars["subs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subs"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subsections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subs"]->key => $_smarty_tpl->tpl_vars["subs"]->value) {
$_smarty_tpl->tpl_vars["subs"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["subs"]->key;
?>
                <?php $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_addon']->value)."_".((string)$_smarty_tpl->tpl_vars['section']->value), null, 0);?>
                <li class="cm-js <?php if ($_REQUEST['selected_sub_section']===$_smarty_tpl->tpl_vars['tab_id']->value) {?>active<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subs']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_form" class=" form-edit form-horizontal" enctype="multipart/form-data">

            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_sub_section" value="<?php echo htmlspecialchars($_REQUEST['selected_sub_section'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="addon" value="<?php echo htmlspecialchars($_REQUEST['addon'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars($_REQUEST['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["field_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_item"]->_loop = false;
 $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_item"]->key => $_smarty_tpl->tpl_vars["field_item"]->value) {
$_smarty_tpl->tpl_vars["field_item"]->_loop = true;
 $_smarty_tpl->tpl_vars["section"]->value = $_smarty_tpl->tpl_vars["field_item"]->key;
?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("separate_section", null, null); ob_start(); ?>
                    <div id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_addon']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="settings cm-hide-save-button">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("header_first", null, null); ob_start(); ?>false<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide")); $_block_repeat=true; echo smarty_block_component(array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"settings.settings_section",'allow_global_individual_settings'=>true,'subsection'=>$_smarty_tpl->tpl_vars['field_item']->value,'section_name'=>$_smarty_tpl->tpl_vars['_addon']->value,'html_id_prefix'=>"addon_option",'html_name'=>"addon_data[options]",'class'=>"setting-wide"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>
                    <?php $_smarty_tpl->tpl_vars['sep_sections'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['sep_sections']->value)." ".((string)Smarty::$_smarty_vars['capture']['separate_section']), null, 0);?>
                <?php } else { ?>
                    <?php echo Smarty::$_smarty_vars['capture']['separate_section'];?>

                <?php }?>
            <?php } ?>

        </form>

        <?php  $_smarty_tpl->tpl_vars['subs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subs']->_loop = false;
 $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subsections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subs']->key => $_smarty_tpl->tpl_vars['subs']->value) {
$_smarty_tpl->tpl_vars['subs']->_loop = true;
 $_smarty_tpl->tpl_vars['section']->value = $_smarty_tpl->tpl_vars['subs']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['subsections']->value[$_smarty_tpl->tpl_vars['section']->value]['type']=="SEPARATE_TAB") {?>
                <?php echo $_smarty_tpl->tpl_vars['sep_sections']->value;?>

            <?php }?>
        <?php } ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:addon_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:addon_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:addon_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

<!--content_settings--></div>
<?php }} ?>
