<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:16:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183969601629b310f263676-15589221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e670e7e9a7e6719bb6b8e5a672df31f30cc44ed8' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/manage.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '183969601629b310f263676-15589221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'langs' => 0,
    'is_allow_update_languages' => 0,
    'is_not_only_default_lang' => 0,
    'language_statuses' => 0,
    'language' => 0,
    'countries' => 0,
    'lang_id' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b310f2c4761_06451607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b310f2c4761_06451607')) {function content_629b310f2c4761_06451607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('language_code','name','country','status','language_code','name','Default','country','tools','edit','delete','clone','export','update_translation','update_translation','status','new_language','add_language','on_site_live_editing','more_languages','languages_find_more','languages'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <div id="content_languages">

            <?php $_smarty_tpl->_capture_stack[0][] = array("add_language", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/languages/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('lang_data'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="languages_form" name="languages_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
                <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->tpl_vars['language_statuses'] = new Smarty_variable(fn_get_default_statuses('',true), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_not_only_default_lang'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['langs']->value)>1, null, 0);?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("languages_table", null, null); ob_start(); ?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-responsive">
                        <thead data-ca-bulkedit-default-object="true">
                            <tr class="cm-first-sibling">
                                <th width="6%" class="left" data-th="">
                                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['is_allow_update_languages']->value&&$_smarty_tpl->tpl_vars['is_not_only_default_lang']->value ? $_smarty_tpl->tpl_vars['language_statuses']->value : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['is_not_only_default_lang']->value||!$_smarty_tpl->tpl_vars['is_allow_update_languages']->value), 0);?>


                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="15%"><?php echo $_smarty_tpl->__("language_code");?>
</th>
                                <th width="20%"><?php echo $_smarty_tpl->__("name");?>
</th>
                                <th width="20%"><?php echo $_smarty_tpl->__("country");?>
</th>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                                <th width="8%">&nbsp;</th>
                                <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                            </tr>
                        </thead>
                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['langs']->value)==1) {?>
                            <?php $_smarty_tpl->tpl_vars["disable_change"] = new Smarty_variable(true, null, 0);?>
                        <?php }?>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                        <tr class="cm-longtap-target cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['is_allow_update_languages']->value&&$_smarty_tpl->tpl_vars['is_not_only_default_lang']->value) {?>
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-bulkedit-dispatch-parameter="lang_ids[]"
                            <?php }?>
                        >
                            <td width="6%" class="left" data-th="">
                                <input type="checkbox" name="lang_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide"></td>
                            <td width="15%" data-th="<?php echo $_smarty_tpl->__("language_code");?>
">
                                <input type="hidden" name="update_language[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->tpl_vars['language']->value['lang_code'],'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>

                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']==(defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null)) {?>(<?php echo $_smarty_tpl->__("Default");?>
)<?php }?>
                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("country");?>
">
                                <i class="flag flag-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code']), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                            </td>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                            <td width="8%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->__("edit"),'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']));?>
</li>

                                            <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code']!=(defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null)) {?>
                                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"languages.delete_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"));?>
</li>
                                            <?php }?>

                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-language-name",'text'=>$_smarty_tpl->__("clone"),'href'=>"languages.clone_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"));?>
</li>
                                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export"),'href'=>"languages.export_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"));?>
</li>
                                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->__("update_translation"),'title'=>$_smarty_tpl->__("update_translation"),'href'=>"languages.update_translation?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'class'=>"cm-dialog-auto-size",'prefix'=>((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables"));?>
</li>
                                            <?php }?>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>

                            </td>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("popups", null, null); ob_start(); ?>
                                <?php echo Smarty::$_smarty_vars['capture']['popups'];?>

                                <div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
></div>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                            <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                <?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['lang_id'], null, 0);?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['lang_id']->value,'prefix'=>"lng",'status'=>$_smarty_tpl->tpl_vars['language']->value['status'],'hidden'=>"Y",'object_id_name'=>"lang_id",'table'=>"languages",'update_controller'=>"languages",'st_result_ids'=>"content_languages",'non_editable'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id']), 0);?>

                            </td>

                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('has_permission'=>$_smarty_tpl->tpl_vars['is_allow_update_languages']->value&&$_smarty_tpl->tpl_vars['is_not_only_default_lang']->value,'form'=>"languages_form",'object'=>"languages",'items'=>Smarty::$_smarty_vars['capture']['languages_table']), 0);?>

            </form>
        <!--content_languages--></div>

        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="hidden" id="content_available_languages"></div>
        <?php }?>

        <?php echo Smarty::$_smarty_vars['capture']['popups'];?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_languages']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_language",'text'=>$_smarty_tpl->__("new_language"),'title'=>$_smarty_tpl->__("add_language"),'content'=>Smarty::$_smarty_vars['capture']['add_language'],'act'=>"general",'icon'=>"icon-plus",'link_class'=>"cm-dialog-auto-size"), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("on_site_live_editing"),'href'=>fn_url("customization.update_mode?type=live_editor&status=enable"),'target'=>"_blank",'method'=>"POST"));?>
</li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php echo Smarty::$_smarty_vars['capture']['add_button'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("important", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:important_text")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:important_text"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <p><?php echo $_smarty_tpl->__('important_language_text',array('[link]'=>fn_url('settings.manage?section_id=Appearance')));?>
</p>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:important_text"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['important'],'title'=>$_smarty_tpl->__('important')), 0);?>

    <div class="sidebar-row marketplace">
        <h6><?php echo $_smarty_tpl->__("more_languages");?>
</h6>
        <p><?php echo $_smarty_tpl->__("languages_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['translate']));?>
</p>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("languages"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function($, _){
        $(document).ready(function(){
            $('.cm-language-name').click(function(){
                var lang_code = prompt(_.tr('enter_new_lang_code'));

                if (lang_code == null || lang_code.length == 0) {
                    // Customer hit Cancel button or did not enter lang_code
                    return false;
                }

                var href = $.attachToUrl($(this).attr('href'), 'lang_code=' + lang_code);
                $(this).attr('href', href);
            });
        });
    }(Tygh.$, Tygh));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
