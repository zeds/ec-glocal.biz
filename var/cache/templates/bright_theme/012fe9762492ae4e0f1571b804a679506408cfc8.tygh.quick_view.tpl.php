<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:55
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/products/quick_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12982155086295421b471154-10472860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012fe9762492ae4e0f1571b804a679506408cfc8' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/products/quick_view.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12982155086295421b471154-10472860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'obj_id' => 0,
    'show_sku' => 0,
    'show_rating' => 0,
    'show_old_price' => 0,
    'show_price' => 0,
    'show_list_discount' => 0,
    'show_clean_price' => 0,
    'show_product_labels' => 0,
    'show_discount_label' => 0,
    'show_shipping_label' => 0,
    'show_product_amount' => 0,
    'show_product_options' => 0,
    'hide_form' => 0,
    'min_qty' => 0,
    'show_edp' => 0,
    'show_add_to_cart' => 0,
    'show_list_buttons' => 0,
    'separate_buttons' => 0,
    'block_width' => 0,
    'show_descr' => 0,
    'settings' => 0,
    'form_open' => 0,
    'no_images' => 0,
    'thumbnail_width' => 0,
    'thumbnail_height' => 0,
    'product_labels' => 0,
    'product_detail_view_url' => 0,
    'hide_title' => 0,
    'prod_descr' => 0,
    'old_price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'price' => 0,
    'capture_options_vs_qty' => 0,
    'product_options' => 0,
    'advanced_options' => 0,
    'sku' => 0,
    'product_amount' => 0,
    'qty' => 0,
    'product_edp' => 0,
    'capture_buttons' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'form_close' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295421b577ce5_53331434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295421b577ce5_53331434')) {function content_6295421b577ce5_53331434($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->tpl_vars["quick_view"] = new Smarty_variable("true", null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_prefix']->value)===null||$tmp==='' ? "ajax" : $tmp), null, 0);?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_rating'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_list_discount'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_clean_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_options'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['min_qty'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_edp'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_list_buttons'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['block_width'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['separate_buttons'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_descr'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['hide_form'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['val_hide_form'], null, 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

                <div class="ty-quick-view-tools">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_view'=>true), 0);?>

                </div>

                <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>$_smarty_tpl->tpl_vars['show_sku']->value,'show_rating'=>$_smarty_tpl->tpl_vars['show_rating']->value,'show_old_price'=>$_smarty_tpl->tpl_vars['show_old_price']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'show_list_discount'=>$_smarty_tpl->tpl_vars['show_list_discount']->value,'show_clean_price'=>$_smarty_tpl->tpl_vars['show_clean_price']->value,'details_page'=>true,'show_product_labels'=>$_smarty_tpl->tpl_vars['show_product_labels']->value,'show_discount_label'=>$_smarty_tpl->tpl_vars['show_discount_label']->value,'show_shipping_label'=>$_smarty_tpl->tpl_vars['show_shipping_label']->value,'show_product_amount'=>$_smarty_tpl->tpl_vars['show_product_amount']->value,'show_product_options'=>$_smarty_tpl->tpl_vars['show_product_options']->value,'hide_form'=>$_smarty_tpl->tpl_vars['hide_form']->value,'min_qty'=>$_smarty_tpl->tpl_vars['min_qty']->value,'show_edp'=>$_smarty_tpl->tpl_vars['show_edp']->value,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['show_add_to_cart']->value,'show_list_buttons'=>$_smarty_tpl->tpl_vars['show_list_buttons']->value,'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>$_smarty_tpl->tpl_vars['separate_buttons']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_descr'=>$_smarty_tpl->tpl_vars['show_descr']->value,'quick_view'=>true), 0);?>


                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                
                <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height'], null, 0);?>

                <div id="product_main_info_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                        <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; max-width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update">
                            <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0);?>

                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update--></div>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="ty-product-block__left">

                    <?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                            <h1 class="ty-product-block-title">
                                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                            </h1>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-brand">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                        </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value])) {?>
                        <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                    <?php }?>

                    <div class="ty-product-block__note">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>

                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                         <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                <div class="ty-float-left ty-product-prices">
                                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                            <?php }?>

                            <div class="ty-product-block__price-actual">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                            </div>

                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                                </div>
                            <?php }?>
                        </div>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value])) {?>
                            <div class="ty-float-left">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>

                            </div>
                        <?php }?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                       <div class="ty-product-block__option">
                            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    <div class="ty-product-block__advanced-option clearfix">
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    </div>

                    <div class="ty-product-block__sku">
                        <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <div class="ty-product-block__field-group">
                        <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                        <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                    <div class="ty-product-block__button">
                            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>
                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

                <!--product_main_info_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
            <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
        <?php }?>
    <!--product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/quick_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/quick_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-quick-view__wrapper">
    <?php $_smarty_tpl->tpl_vars["quick_view"] = new Smarty_variable("true", null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_prefix']->value)===null||$tmp==='' ? "ajax" : $tmp), null, 0);?>
    <div class="ty-product-block" id="product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-block__wrapper clearfix">
        <?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_rating'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_list_discount'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_clean_price'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_product_options'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['min_qty'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_edp'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_list_buttons'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['block_width'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['separate_buttons'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['show_descr'] = new Smarty_variable(true, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['hide_form'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['val_hide_form'], null, 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:view_main_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>

                <div class="ty-quick-view-tools">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_view'=>true), 0);?>

                </div>

                <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_prefix'=>$_smarty_tpl->tpl_vars['obj_prefix']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'add_to_cart_meta'=>"cm-form-dialog-closer",'show_sku'=>$_smarty_tpl->tpl_vars['show_sku']->value,'show_rating'=>$_smarty_tpl->tpl_vars['show_rating']->value,'show_old_price'=>$_smarty_tpl->tpl_vars['show_old_price']->value,'show_price'=>$_smarty_tpl->tpl_vars['show_price']->value,'show_list_discount'=>$_smarty_tpl->tpl_vars['show_list_discount']->value,'show_clean_price'=>$_smarty_tpl->tpl_vars['show_clean_price']->value,'details_page'=>true,'show_product_labels'=>$_smarty_tpl->tpl_vars['show_product_labels']->value,'show_discount_label'=>$_smarty_tpl->tpl_vars['show_discount_label']->value,'show_shipping_label'=>$_smarty_tpl->tpl_vars['show_shipping_label']->value,'show_product_amount'=>$_smarty_tpl->tpl_vars['show_product_amount']->value,'show_product_options'=>$_smarty_tpl->tpl_vars['show_product_options']->value,'hide_form'=>$_smarty_tpl->tpl_vars['hide_form']->value,'min_qty'=>$_smarty_tpl->tpl_vars['min_qty']->value,'show_edp'=>$_smarty_tpl->tpl_vars['show_edp']->value,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['show_add_to_cart']->value,'show_list_buttons'=>$_smarty_tpl->tpl_vars['show_list_buttons']->value,'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>$_smarty_tpl->tpl_vars['separate_buttons']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_descr'=>$_smarty_tpl->tpl_vars['show_descr']->value,'quick_view'=>true), 0);?>


                <?php $_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["product_detail_view_url"] = new Smarty_variable("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                
                <?php $_smarty_tpl->tpl_vars['thumbnail_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['thumbnail_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height'], null, 0);?>

                <div id="product_main_info_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_image_wrap")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                        <div class="ty-product-block__img cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; max-width:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_height']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px; height: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['thumbnail_height']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['thumbnail_width']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
px;" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update">
                            <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>


                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>true,'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']), 0);?>

                        <!--product_images_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_update--></div>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_image_wrap"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <div class="ty-product-block__left">

                    <?php $_smarty_tpl->_capture_stack[0][] = array("product_detail_view_url", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_detail_view_url")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_detail_view_url']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_detail_view_url"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php $_smarty_tpl->tpl_vars['product_detail_view_url'] = new Smarty_variable(trim(Smarty::$_smarty_vars['capture']['product_detail_view_url']), null, 0);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:quick_view_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:quick_view_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                            <h1 class="ty-product-block-title">
                                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['product_detail_view_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-quick-view__title" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></a>
                            </h1>
                        <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:quick_view_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:brand")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <div class="ty-brand">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0);?>

                        </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:brand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <?php $_smarty_tpl->tpl_vars["prod_descr"] = new Smarty_variable("prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value])) {?>
                        <div class="ty-product-block__description"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['prod_descr']->value];?>
</div>
                    <?php }?>

                    <div class="ty-product-block__note">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                    </div>

                    <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                        <?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>

                         <div class="<?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>prices-container <?php }?>price-wrap clearfix">
                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                <div class="ty-float-left ty-product-prices">
                                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];?>
&nbsp;<?php }?>
                            <?php }?>

                            <div class="ty-product-block__price-actual">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];?>

                            </div>

                            <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value])) {?>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];?>

                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>

                                </div>
                            <?php }?>
                        </div>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value])) {?>
                            <div class="ty-float-left">
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>

                            </div>
                        <?php }?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                       <div class="ty-product-block__option">
                            <?php $_smarty_tpl->tpl_vars["product_options"] = new Smarty_variable("product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_options']->value];?>

                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    <div class="ty-product-block__advanced-option clearfix">
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                        <?php $_smarty_tpl->tpl_vars["advanced_options"] = new Smarty_variable("advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['advanced_options']->value];?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    </div>

                    <div class="ty-product-block__sku">
                        <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];?>

                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start();
echo Smarty::$_smarty_vars['capture']['product_options'];
}?>
                    <div class="ty-product-block__field-group">
                        <?php $_smarty_tpl->tpl_vars["product_amount"] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>


                        <?php $_smarty_tpl->tpl_vars["min_qty"] = new Smarty_variable("min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['min_qty']->value];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                    <?php $_smarty_tpl->tpl_vars["product_edp"] = new Smarty_variable("product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_edp']->value];?>


                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start();
}?>
                    <div class="ty-product-block__button">
                            <?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                            <?php $_smarty_tpl->tpl_vars["list_buttons"] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?>
                </div>
                <?php $_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];?>

                <!--product_main_info_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:view_main_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <?php if (Smarty::$_smarty_vars['capture']['hide_form_changed']=="Y") {?>
            <?php $_smarty_tpl->tpl_vars["hide_form"] = new Smarty_variable(Smarty::$_smarty_vars['capture']['orig_val_hide_form'], null, 0);?>
        <?php }?>
    <!--product_main_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div><?php }?><?php }} ?>
