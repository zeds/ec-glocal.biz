<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20915158556295417e04a181-43049819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9991482b229c50f31d36b508772f3259ebe7455c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20915158556295417e04a181-43049819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'max_images_upload' => 0,
    'product_id' => 0,
    'meta' => 0,
    'post_redirect_url' => 0,
    'product_reviews_ratings' => 0,
    'product_reviews_images_upload_allowed' => 0,
    'user_data' => 0,
    'product_review_data' => 0,
    'countries' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e07c931_14606467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e07c931_14606467')) {function content_6295417e07c931_14606467($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.submit_review','product_reviews.submit_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['max_images_upload'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'])===null||$tmp==='' ? 10 : $tmp), null, 0);?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            max_images_upload: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>


<section id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="ty-product-review-new-product-review <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> ty-product-review-new-product-review__form"
        name="add_post_form"
        enctype="multipart/form-data"
        id="add_post_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >

        <input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
        <input type="hidden" name="product_review_data[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post_redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="selected_section" value="" />

        <div class="ty-product-review-new--review__body" id="new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value), 0);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:add_product_review")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews_images_upload_allowed'=>$_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'post_redirect_url'=>$_smarty_tpl->tpl_vars['post_redirect_url']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!--new_product_review_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <footer class="buttons-container ty-product-review-new-product-review__footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_reviews.submit_review"),'but_meta'=>"ty-btn__primary ty-width-full",'but_role'=>"submit",'but_name'=>"dispatch[product_reviews.add]"), 0);?>

        </footer>
    </form>
<!--new_product_review_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php $_smarty_tpl->tpl_vars['max_images_upload'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value['tweaks']['product_reviews']['max_images_upload'])===null||$tmp==='' ? 10 : $tmp), null, 0);?>

<?php echo '<script'; ?>
>
    (function(_, $) {
        $.extend(_, {
            max_images_upload: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_images_upload']->value, ENT_QUOTES, 'UTF-8');?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>


<section id="new_post_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="ty-product-review-new-product-review <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        class="<?php if (!$_smarty_tpl->tpl_vars['post_redirect_url']->value) {?>cm-ajax cm-form-dialog-closer<?php }?> ty-product-review-new-product-review__form"
        name="add_post_form"
        enctype="multipart/form-data"
        id="add_post_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >

        <input type="hidden" name="result_ids" value="posts_list*,new_post*,average_rating*">
        <input type="hidden" name="product_review_data[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post_redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="selected_section" value="" />

        <div class="ty-product-review-new--review__body" id="new_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_reviews_ratings'=>$_smarty_tpl->tpl_vars['product_reviews_ratings']->value), 0);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_reviews:add_product_review")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews_images_upload_allowed'=>$_smarty_tpl->tpl_vars['product_reviews_images_upload_allowed']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'post_redirect_url'=>$_smarty_tpl->tpl_vars['post_redirect_url']->value,'product_review_data'=>$_smarty_tpl->tpl_vars['product_review_data']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_reviews:add_product_review"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>


            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/new_product_review_captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!--new_product_review_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <footer class="buttons-container ty-product-review-new-product-review__footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("product_reviews.submit_review"),'but_meta'=>"ty-btn__primary ty-width-full",'but_role'=>"submit",'but_name'=>"dispatch[product_reviews.add]"), 0);?>

        </footer>
    </form>
<!--new_product_review_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></section>
<?php }?><?php }} ?>
