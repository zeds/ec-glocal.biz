<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16076578586295417e1f62d7-36447697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c547b198aacf6529b682ba2780b86e7557d88b' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16076578586295417e1f62d7-36447697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e20cc42_27138715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e20cc42_27138715')) {function content_6295417e20cc42_27138715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.hide_name','product_reviews.terms_n_conditions_name','product_reviews.terms_n_conditions','product_reviews.terms_and_conditions_content','product_reviews.moderation_rules','product_reviews.hide_name','product_reviews.terms_n_conditions_name','product_reviews.terms_n_conditions','product_reviews.terms_and_conditions_content','product_reviews.moderation_rules'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<section class="ty-product-review-new-product-review-additional">
    <div class="ty-control-group ty-product-review-new-product-review-additional__write-anonymously">
        <label class="ty-product-review-new-product-review-additional__write-anonymously-label">
            <input type="checkbox"
                name="product_review_data[is_anon]"
                value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-new-product-review-additional__write-anonymously-checkbox"
                data-ca-product-review="newProductReviewAdditionalWriteAnonymouslyCheckbox"
            >
            <span class="ty-product-review-new-product-review-additional__write-anonymously-text">
                <?php echo $_smarty_tpl->__("product_reviews.hide_name");?>

            </span>
        </label>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__terms-and-conditions">
        <div class="cm-field-container ty-product-review-new-product-review-additional__terms-and-conditions-container">
            <label class="cm-required ty-product-review-new-product-review-additional__terms-and-conditions-label"
                for="product_reviews_terms_and_conditions"
            >
                <input type="checkbox"
                    id="product_reviews_terms_and_conditions"
                    name="product_review_data[terms]"
                    value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-review-new-product-review-additional__terms-and-conditions-checkbox"
                >
                <span class="ty-product-review-new-product-review-additional__terms-and-conditions-text">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("product_reviews_terms_link", null, null); ob_start(); ?>
                        <a id="sw_product_reviews_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link">
                            <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions_name");?>

                        </a>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions",array("[terms_href]"=>Smarty::$_smarty_vars['capture']['product_reviews_terms_link']));?>

                </span>
            </label>


            <div class="hidden" id="product_reviews_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("product_reviews.terms_and_conditions_content");?>

            </div>
        </div>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__moderation-rules">
        <small class="ty-product-review-new-product-review-additional__moderation-rules-text ty-muted">
            <?php echo $_smarty_tpl->__("product_reviews.moderation_rules");?>

        </small>
    </div>

</section>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_additional.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<section class="ty-product-review-new-product-review-additional">
    <div class="ty-control-group ty-product-review-new-product-review-additional__write-anonymously">
        <label class="ty-product-review-new-product-review-additional__write-anonymously-label">
            <input type="checkbox"
                name="product_review_data[is_anon]"
                value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-new-product-review-additional__write-anonymously-checkbox"
                data-ca-product-review="newProductReviewAdditionalWriteAnonymouslyCheckbox"
            >
            <span class="ty-product-review-new-product-review-additional__write-anonymously-text">
                <?php echo $_smarty_tpl->__("product_reviews.hide_name");?>

            </span>
        </label>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__terms-and-conditions">
        <div class="cm-field-container ty-product-review-new-product-review-additional__terms-and-conditions-container">
            <label class="cm-required ty-product-review-new-product-review-additional__terms-and-conditions-label"
                for="product_reviews_terms_and_conditions"
            >
                <input type="checkbox"
                    id="product_reviews_terms_and_conditions"
                    name="product_review_data[terms]"
                    value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                    class="ty-product-review-new-product-review-additional__terms-and-conditions-checkbox"
                >
                <span class="ty-product-review-new-product-review-additional__terms-and-conditions-text">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("product_reviews_terms_link", null, null); ob_start(); ?>
                        <a id="sw_product_reviews_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination ty-dashed-link">
                            <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions_name");?>

                        </a>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php echo $_smarty_tpl->__("product_reviews.terms_n_conditions",array("[terms_href]"=>Smarty::$_smarty_vars['capture']['product_reviews_terms_link']));?>

                </span>
            </label>


            <div class="hidden" id="product_reviews_terms_and_conditions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("product_reviews.terms_and_conditions_content");?>

            </div>
        </div>
    </div>

    <div class="ty-control-group ty-product-review-new-product-review-additional__moderation-rules">
        <small class="ty-product-review-new-product-review-additional__moderation-rules-text ty-muted">
            <?php echo $_smarty_tpl->__("product_reviews.moderation_rules");?>

        </small>
    </div>

</section>
<?php }?><?php }} ?>
