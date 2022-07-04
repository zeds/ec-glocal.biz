<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:16:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1784907916629b310f2cedc3-36852815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f59cc5c37f7040161ddfcf6c4dbf8dee5ba235' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/update.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1784907916629b310f2cedc3-36852815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_data' => 0,
    'id' => 0,
    'is_sharing_enabled' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'hidden' => 0,
    'language' => 0,
    'add_storefront_text' => 0,
    'runtime' => 0,
    'hide_inputs' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b310f3011e6_60593490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b310f3011e6_60593490')) {function content_629b310f3011e6_60593490($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','storefronts','language_code','tt_views_languages_manage_language_code','name','country','tt_views_languages_update_country','clone_from','add_storefronts','all_storefronts','install'));
?>
<?php if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang_data']->value['lang_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable("0", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable(!fn_allow_save_object('',"languages"), null, 0);?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="add_language_form" class="form-horizontal<?php if (!fn_allow_save_object('',"languages")) {?> cm-hide-inputs<?php }?>">
    <input type="hidden" name="selected_section" value="languages" />
    <input type="hidden" name="lang_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
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
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:tabs_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:tabs_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:tabs_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>

    <div class="cm-tabs-content">
        <div id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div class="control-group">
                    <label for="elm_to_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("language_code");?>
:</label>
                    <div class="controls">
                        <input id="elm_to_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[lang_code]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_data']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" size="6" maxlength="2">
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_languages_manage_language_code");?>
</p>
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input id="elm_lang_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" maxlength="64">
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
:</label>
                    <div class="controls">
                        <select id="elm_lang_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="language_data[country_code]">
                            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['lang_data']->value['country_code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_languages_update_country");?>
</p>
                    </div>
                </div>

                <?php if (fn_allowed_for("ULTIMATE:FREE")) {?>
                    <?php $_smarty_tpl->tpl_vars['hidden'] = new Smarty_variable(false, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['hidden'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj'=>$_smarty_tpl->tpl_vars['lang_data']->value,'display'=>"radio",'input_name'=>"language_data[status]",'hidden'=>$_smarty_tpl->tpl_vars['hidden']->value), 0);?>


                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <div class="control-group">
                    <label for="elm_from_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("clone_from");?>
:</label>
                    <div class="controls">
                        <select name="language_data[from_lang_code]" id="elm_from_lang_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = fn_get_translation_languages(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </fieldset>
        <!--content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")||$_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
            <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_storefronts"), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"language_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['lang_data']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0);?>

                <!--content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"languages:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"languages:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"languages:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0);?>

        </div>
    <?php }?>

    </form>
<?php } else { ?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_language_form" class="form-horizontal<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">

            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"language_data[po_file]",'allowed_ext'=>"po, zip"), 0);?>

            </div>

            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.install_from_po]",'but_text'=>$_smarty_tpl->__("install"),'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

                </div>
            <?php }?>
        </form>
    </div>
<?php }?>

<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
