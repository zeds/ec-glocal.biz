<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6063567376295417e0cc384-53835446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de0dbe2a98bb3ca3c0a262feffed4a5ee6535e46' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6063567376295417e0cc384-53835446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'server_env' => 0,
    'max_upload_filesize' => 0,
    'post_max_size' => 0,
    'upload_max_filesize' => 0,
    'max_images_upload' => 0,
    'id_var_name' => 0,
    'multiupload' => 0,
    'label_id' => 0,
    'location' => 0,
    'images' => 0,
    'var_name' => 0,
    'image_name' => 0,
    'disabled_param' => 0,
    'upload_another_file_text' => 0,
    'upload_file_text' => 0,
    'allow_url_uploading' => 0,
    'hidden_name' => 0,
    'hidden_value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e128911_44062781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e128911_44062781')) {function content_6295417e128911_44062781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','save','product_reviews.uploader_drop_zone_description','or','upload_another_file','upload_file','product_reviews.uploader_drop_zone_info','or','specify_url','file_is_too_large','files_are_too_large','remove_this_item','save','product_reviews.uploader_drop_zone_description','or','upload_another_file','upload_file','product_reviews.uploader_drop_zone_info','or','specify_url'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',
            max_images_upload: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden">
            <i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links(this.id, 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle ty-fileuploader__icon"></i>
            <span class="ty-fileuploader__filename ty-filename-link"></span>
            <?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>
                <br />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0);?>

            <?php }?>
        </p>
    </div>

    <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local ty-fileuploader__drop-zone ty-fileuploader__drop-zone--visible"data-ca-product-review="fileuploaderDropZone"><div class="ty-fileuploader__drop-zone-description"><i class="ty-icon-image"></i><div class="ty-fileuploader__drop-zone-text"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_description");?>
</br><?php echo $_smarty_tpl->__("or");?>
</div></div><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><div class="ty-fileuploader__drop-zone-buttons ty-fileuploader__drop-zone-buttons--visible"data-ca-product-review="fileuploaderDropZoneButtons"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="ty-fileuploader__a-another hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><div class="ty-fileuploader__drop-zone-description"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_info",array('[max_size]'=>$_smarty_tpl->tpl_vars['upload_max_filesize']->value));?>
</div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
<?php }?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',
            max_images_upload: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden">
            <i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links(this.id, 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle ty-fileuploader__icon"></i>
            <span class="ty-fileuploader__filename ty-filename-link"></span>
            <?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>
                <br />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0);?>

            <?php }?>
        </p>
    </div>

    <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local ty-fileuploader__drop-zone ty-fileuploader__drop-zone--visible"data-ca-product-review="fileuploaderDropZone"><div class="ty-fileuploader__drop-zone-description"><i class="ty-icon-image"></i><div class="ty-fileuploader__drop-zone-text"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_description");?>
</br><?php echo $_smarty_tpl->__("or");?>
</div></div><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><div class="ty-fileuploader__drop-zone-buttons ty-fileuploader__drop-zone-buttons--visible"data-ca-product-review="fileuploaderDropZoneButtons"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="ty-fileuploader__a-another hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><div class="ty-fileuploader__drop-zone-description"><?php echo $_smarty_tpl->__("product_reviews.uploader_drop_zone_info",array('[max_size]'=>$_smarty_tpl->tpl_vars['upload_max_filesize']->value));?>
</div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
</div>
<?php }?><?php }} ?>
