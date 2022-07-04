<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:13:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6620215236295417e1b3ba6-33115242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8533650a91c2024d372e96e577f19d205196bd39' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl',
      1 => 1653909593,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6620215236295417e1b3ba6-33115242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'user_data' => 0,
    'user_info' => 0,
    'product_id' => 0,
    'product_review_data' => 0,
    'user_name' => 0,
    'addons' => 0,
    'countries' => 0,
    'code' => 0,
    '_country' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295417e1f0496_99535022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295417e1f0496_99535022')) {function content_6295417e1f0496_99535022($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','city','city','city','city','city','country','country','country','country','select_country','select_country','select_country','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','product_reviews.first_and_last_name','city','city','city','city','city','country','country','country','country','select_country','select_country','select_country'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id'] ? $_smarty_tpl->tpl_vars['user_data']->value['s_country'] : '', null, 0);?>
<?php $_smarty_tpl->tpl_vars['user_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_info']->value['lastname'] ? ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']) : $_smarty_tpl->tpl_vars['user_info']->value['firstname'], null, 0);?>

<div class="ty-product-review-new-product-review-customer-profile">

    <div class="ty-product-review-new-product-review-customer-profile__name ty-width-full">
        <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__name-label"
            data-ca-product-review="newProductReviewCustomerProfileNameLabel"
            for="product_review_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>

        </label>
        <input type="text"
            id="product_review_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="product_review_data[name]"
            value="<?php if ($_smarty_tpl->tpl_vars['product_review_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_data']->value['name'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');
}?>"
            class="ty-product-review-new-product-review-customer-profile__name-input ty-input-text-full"
            data-ca-product-review="newProductReviewCustomerProfileNameInput"
            data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            data-ca-product-review-label="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
"
            placeholder="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            title="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
        />
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']!=="none") {?>
        <div class="ty-product-review-new-product-review-customer-profile__location">
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="city") {?>
                <div class="ty-product-review-new-product-review-customer-profile__city ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__city-label"
                        data-ca-product-review="newProductReviewCustomerProfileCityLabel"
                        for="product_review_city_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("city");?>

                    </label>
                    <input type="text"
                        id="product_review_city_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="product_review_data[city]"
                        value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="ty-product-review-new-product-review-customer-profile__city-input ty-input-text-full"
                        placeholder="<?php echo $_smarty_tpl->__("city");?>
 *"
                        title="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCityInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("city");?>
"
                    />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="country") {?>
                <div class="ty-product-review-new-product-review-customer-profile__country ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__country-label"
                        data-ca-product-review="newProductReviewCustomerProfileCountryLabel"
                        for="product_review_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("country");?>

                    </label>
                    <select id="product_review_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="ty-product-review-new-product-review-customer-profile__country-input ty-input-text-full ty-input-height cm-country cm-location-shipping"
                        name="product_review_data[country_code]"
                        title="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCountryInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("country");?>
"
                        data-ca-product-review-option-required="— <?php echo $_smarty_tpl->__("select_country");?>
 — *"
                        data-ca-product-review-option="— <?php echo $_smarty_tpl->__("select_country");?>
 —"
                    >
                        <option value="">— <?php echo $_smarty_tpl->__("select_country");?>
 — *</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value===$_smarty_tpl->tpl_vars['_country']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/new_product_review_customer_profile.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id'] ? $_smarty_tpl->tpl_vars['user_data']->value['s_country'] : '', null, 0);?>
<?php $_smarty_tpl->tpl_vars['user_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_info']->value['lastname'] ? ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']) : $_smarty_tpl->tpl_vars['user_info']->value['firstname'], null, 0);?>

<div class="ty-product-review-new-product-review-customer-profile">

    <div class="ty-product-review-new-product-review-customer-profile__name ty-width-full">
        <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__name-label"
            data-ca-product-review="newProductReviewCustomerProfileNameLabel"
            for="product_review_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>

        </label>
        <input type="text"
            id="product_review_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="product_review_data[name]"
            value="<?php if ($_smarty_tpl->tpl_vars['product_review_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_data']->value['name'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');
}?>"
            class="ty-product-review-new-product-review-customer-profile__name-input ty-input-text-full"
            data-ca-product-review="newProductReviewCustomerProfileNameInput"
            data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            data-ca-product-review-label="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
"
            placeholder="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
            title="<?php echo $_smarty_tpl->__("product_reviews.first_and_last_name");?>
 *"
        />
    </div>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']!=="none") {?>
        <div class="ty-product-review-new-product-review-customer-profile__location">
            <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="city") {?>
                <div class="ty-product-review-new-product-review-customer-profile__city ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__city-label"
                        data-ca-product-review="newProductReviewCustomerProfileCityLabel"
                        for="product_review_city_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("city");?>

                    </label>
                    <input type="text"
                        id="product_review_city_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="product_review_data[city]"
                        value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="ty-product-review-new-product-review-customer-profile__city-input ty-input-text-full"
                        placeholder="<?php echo $_smarty_tpl->__("city");?>
 *"
                        title="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCityInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("city");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("city");?>
"
                    />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_ask_for_customer_location']==="country") {?>
                <div class="ty-product-review-new-product-review-customer-profile__country ty-width-full">
                    <label class="cm-required hidden ty-product-review-new-product-review-customer-profile__country-label"
                        data-ca-product-review="newProductReviewCustomerProfileCountryLabel"
                        for="product_review_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("country");?>

                    </label>
                    <select id="product_review_country_code_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="ty-product-review-new-product-review-customer-profile__country-input ty-input-text-full ty-input-height cm-country cm-location-shipping"
                        name="product_review_data[country_code]"
                        title="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review="newProductReviewCustomerProfileCountryInput"
                        data-ca-product-review-label-required="<?php echo $_smarty_tpl->__("country");?>
 *"
                        data-ca-product-review-label="<?php echo $_smarty_tpl->__("country");?>
"
                        data-ca-product-review-option-required="— <?php echo $_smarty_tpl->__("select_country");?>
 — *"
                        data-ca-product-review-option="— <?php echo $_smarty_tpl->__("select_country");?>
 —"
                    >
                        <option value="">— <?php echo $_smarty_tpl->__("select_country");?>
 — *</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value===$_smarty_tpl->tpl_vars['_country']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            <?php }?>
        </div>
    <?php }?>
</div>
<?php }?><?php }} ?>
