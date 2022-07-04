<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 10:13:27
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/users_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1415284539629ab1b75fe7e3-63051367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da1b72be8312ba73dc06ef2f5e74da375c9f899' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/users_search_form.tpl',
      1 => 1600313784,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1415284539629ab1b75fe7e3-63051367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'in_popup' => 0,
    'form_meta' => 0,
    'selected_section' => 0,
    'search' => 0,
    'put_request_vars' => 0,
    'extra' => 0,
    'auth' => 0,
    'usergroups' => 0,
    'usergroup' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ab1b766d1f8_77494463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ab1b766d1f8_77494463')) {function content_629ab1b766d1f8_77494463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_array_to_fields')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.array_to_fields.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','person_name','phone','email','usergroup','not_a_member','tax_exempt','yes','no','phone','country','select_country','zip_postal_code','state','select_state','city','address','city','country','select_country','company','state','select_state','address','zip_postal_code','ordered_products'));
?>


<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<?php }?>
<form name="user_search_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_REQUEST['redirect_url']) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!='') {?>
<input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']) {?>
<input type="hidden" name="user_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['user_type'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape'=>array("data_id")),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

<div class="sidebar-field">
    <label for="elm_name"><?php echo $_smarty_tpl->__("person_name");?>
</label>
    <div class="break">
        <input type="text" name="name" id="elm_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")&&$_smarty_tpl->tpl_vars['search']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <div class="sidebar-field">
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php } else { ?>
    <div class="sidebar-field">
        <label for="elm_phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
        <div class="break">
            <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
<?php }?>
<div class="sidebar-field">
    <label for="elm_email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <div class="break">
        <input type="text" name="email" id="elm_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("advanced_search", null, null); ob_start(); ?>
    <div class="row-fluid">
        <div class="group span6 form-horizontal">
            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_usergroup_id"><?php echo $_smarty_tpl->__("usergroup");?>
</label>
                    <div class="controls">
                    <select name="usergroup_id" id="elm_usergroup_id">
                        <option value="<?php echo htmlspecialchars((defined('ALL_USERGROUPS') ? constant('ALL_USERGROUPS') : null), ENT_QUOTES, 'UTF-8');?>
"> -- </option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['search']->value['usergroup_id']==="0") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_a_member");?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['usergroup_id']==$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
            <?php }?>
            <div class="control-group">
                <label class="control-label" for="elm_tax_exempt"><?php echo $_smarty_tpl->__("tax_exempt");?>
</label>
                <div class="controls">
                <select name="tax_exempt" id="elm_tax_exempt">
                    <option value="">--</option>
                    <option value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt']==smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
                    <option value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['tax_exempt']==smarty_modifier_enum("YesNO::NO")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
                </select>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:search_form")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:search_form"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:search_form"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div class="group span6 form-horizontal">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")&&$_smarty_tpl->tpl_vars['search']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <div class="control-group">
            <label class="control-label" for="elm_phone"><?php echo $_smarty_tpl->__("phone");?>
</label>
            <div class="controls">
                <input type="text" name="phone" id="elm_phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['phone'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <?php }?>
        <?php if ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)=='ja') {?>
        <div class="control-group">
            <label for="srch_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
            <div class="controls">
                <select id="srch_country" name="country" class="cm-country cm-location-search">
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_zipcode"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <div class="controls">
                <input type="text" name="zipcode" id="elm_zipcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label for="srch_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
            <div class="controls">
                <select id="srch_state" class="cm-state cm-location-search hidden" name="state">
                    <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <input class="cm-state cm-location-search" type="text" id="srch_state_d" name="state" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
            <div class="controls">
                <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_address"><?php echo $_smarty_tpl->__("address");?>
</label>
            <div class="controls">
                <input type="text" name="address" id="elm_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <?php } else { ?>
        <div class="control-group">
            <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
</label>
            <div class="controls">
                <input type="text" name="city" id="elm_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['city'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label for="srch_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
            <div class="controls">
            <select id="srch_country" name="country" class="cm-country cm-location-search">
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_company"><?php echo $_smarty_tpl->__("company");?>
</label>
            <div class="controls">
                <input type="text" name="company" id="elm_company" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['company'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label for="srch_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
            <div class="controls">
                <select id="srch_state" class="cm-state cm-location-search hidden" name="state_code">
                    <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <input class="cm-state cm-location-search" type="text" id="srch_state_d" name="state" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_address"><?php echo $_smarty_tpl->__("address");?>
</label>
            <div class="controls">
                <input type="text" name="address" id="elm_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['address'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="elm_zipcode"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
            <div class="controls">
                <input type="text" name="zipcode" id="elm_zipcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
        <?php }?>
    </div>
</div>

<div class="group">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("ordered_products");?>
</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('placement'=>"right"), 0);?>

        </div>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'advanced_search'=>Smarty::$_smarty_vars['capture']['advanced_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"users",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
</div></div>
<?php } else { ?>
</div><hr>
<?php }?>
<?php }} ?>
