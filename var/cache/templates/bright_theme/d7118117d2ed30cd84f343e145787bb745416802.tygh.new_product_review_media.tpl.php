<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18579200126295417e0b3c73-32527864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7118117d2ed30cd84f343e145787bb745416802' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18579200126295417e0b3c73-32527864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_reviews_images_upload_allowed' => 0,
    'config' => 0,
    'max_images_upload' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e0c8801_34741266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e0c8801_34741266')) {function content_6295417e0c8801_34741266($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.add_images','product_reviews.max_number_image_message','product_reviews.add_images','product_reviews.max_number_image_message'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value===smarty_modifier_enum("YesNo::YES")) {?>

    <?php $_smarty_tpl->tpl_vars['max_images_upload'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'])===null||$tmp==='' ? 10 : $tmp), null, 0);?>

    <section class="ty-product-review-new-product-review__media" data-ca-product-review="newProductReviewMedia">
        <div class="ty-control-group">
            <?php echo $_smarty_tpl->__("product_reviews.add_images");?>
:
            <div>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"product_review_data[0]",'multiupload'=>"Y"), 0);?>


                <div class="ty-product-review-new-product-review__media-info hidden"
                    data-ca-product-review="newProductReviewMediaInfo"
                >
                    <small class="ty-product-review-new-product-review__media-info-text ty-muted">
                        <?php echo $_smarty_tpl->__("product_reviews.max_number_image_message",array('[max_image_number]'=>$_smarty_tpl->tpl_vars['max_images_upload']->value));?>

                    </small>
                </div>
            </div>
        </div>
    </section>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value===smarty_modifier_enum("YesNo::YES")) {?>

    <?php $_smarty_tpl->tpl_vars['max_images_upload'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'])===null||$tmp==='' ? 10 : $tmp), null, 0);?>

    <section class="ty-product-review-new-product-review__media" data-ca-product-review="newProductReviewMedia">
        <div class="ty-control-group">
            <?php echo $_smarty_tpl->__("product_reviews.add_images");?>
:
            <div>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"product_review_data[0]",'multiupload'=>"Y"), 0);?>


                <div class="ty-product-review-new-product-review__media-info hidden"
                    data-ca-product-review="newProductReviewMediaInfo"
                >
                    <small class="ty-product-review-new-product-review__media-info-text ty-muted">
                        <?php echo $_smarty_tpl->__("product_reviews.max_number_image_message",array('[max_image_number]'=>$_smarty_tpl->tpl_vars['max_images_upload']->value));?>

                    </small>
                </div>
            </div>
        </div>
    </section>

<?php }
}?><?php }} ?>
