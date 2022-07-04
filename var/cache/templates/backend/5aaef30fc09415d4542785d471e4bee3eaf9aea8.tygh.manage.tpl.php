<?php /* Smarty version Smarty-3.1.21, created on 2022-06-05 14:22:09
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/robots/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418707513629c3d81cc43c8-99461049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aaef30fc09415d4542785d471e4bee3eaf9aea8' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/robots/manage.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '418707513629c3d81cc43c8-99461049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'runtime' => 0,
    'robots' => 0,
    'ftp_access' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629c3d81ce97b2_54842720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629c3d81ce97b2_54842720')) {function content_629c3d81ce97b2_54842720($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_robots','edit_robots','ftp_server_options','host','login','password','ftp_directory','recheck','upload_via_ftp','robots_title'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<div class="items-container" id="manage_robots">

<form id="robots_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="robots_update_form" class="form-horizontal form-edit cm-ajax cm-disable-empty-files">
    <input type="hidden" name="result_ids" value="manage_robots" />

    <div id="manage_robots_content">

    <?php if (fn_allowed_for("ULTIMATE")) {?>
    <div class="control-group disable-overlay-wrap" id="field_robots_content">
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
            <div class="disable-overlay" id="robots_logo_disable_overlay"></div>
        <?php }?>
        <label for="elm_robots_edit" class="control-label"><?php echo $_smarty_tpl->__("edit_robots");?>
:</label>

        <div class="controls" id="robots_content">
            <textarea id="elm_robots_robots" name="robots_data[content]" cols="55" rows="12" class="span12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['robots']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>"robots",'name'=>"robots_data[update_content]",'hide_element'=>"robots_uploader",'component'=>"robots.robots_uploader"), 0);?>

                </div>
            <?php }?>
        </div>
    </div>
    <?php } else { ?>
    <div class="control-group">
        <label for="elm_robots_edit" class="control-label"><?php echo $_smarty_tpl->__("edit_robots");?>
:</label>

        <div class="controls">
            <textarea id="elm_robots_robots" name="robots_data[content]" cols="55" rows="12" class="span12"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['robots']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
    <?php }?>

    <!--manage_robots_content--></div>

    <?php if ($_REQUEST['is_not_writable']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ftp_server_options")), 0);?>

        <div class="control-group">
            <label for="host" class="control-label"><?php echo $_smarty_tpl->__("host");?>
:</label>
            <div class="controls">
                <input id="host" type="text" name="ftp_access[ftp_hostname]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftp_access']->value['ftp_hostname'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="login" class="control-label"><?php echo $_smarty_tpl->__("login");?>
:</label>
            <div class="controls">
                <input id="login" type="text" name="ftp_access[ftp_username]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftp_access']->value['ftp_username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="password" class="control-label"><?php echo $_smarty_tpl->__("password");?>
:</label>
            <div class="controls">
                <input id="password" type="password" name="ftp_access[ftp_password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftp_access']->value['ftp_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="base_path" class="control-label"><?php echo $_smarty_tpl->__("ftp_directory");?>
:</label>
            <div class="controls">
                <input id="base_path" type="text" name="ftp_access[ftp_directory]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftp_access']->value['ftp_directory'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("recheck"),'but_name'=>"dispatch[robots.check]",'but_meta'=>" "), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("upload_via_ftp"),'but_name'=>"dispatch[robots.update_via_ftp]"), 0);?>

        </div>
    <?php }?>

</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $){
        $(_.doc).on('click', '[data-ca-update-for-all="robots.robots_uploader"]', function(e){
            $('#robots_uploader').toggleClass('disable-overlay-wrap');
            $('#robots_logo_disable_overlay').toggleClass('disable-overlay');
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<!--manage_robots--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[robots.update]",'but_role'=>"submit-link",'but_target_form'=>"robots_update_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("robots_title"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_storefront'=>true,'show_all_storefront'=>!(fn_allowed_for("MULTIVENDOR"))), 0);?>

<?php }} ?>
