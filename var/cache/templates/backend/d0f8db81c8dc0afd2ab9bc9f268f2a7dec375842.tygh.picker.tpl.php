<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:17
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/users/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16963685656294b6bd1bbf41-63983066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f8db81c8dc0afd2ab9bc9f268f2a7dec375842' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/users/picker.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16963685656294b6bd1bbf41-63983066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'show_but_text' => 0,
    'item_ids' => 0,
    'display' => 0,
    'extra_var' => 0,
    'but_text' => 0,
    'placement' => 0,
    '_but_text' => 0,
    'picker_for' => 0,
    'shared_force' => 0,
    'extra_url' => 0,
    'but_meta' => 0,
    'but_icon' => 0,
    'user_info' => 0,
    'extra_class' => 0,
    'user_name' => 0,
    'display_input_id' => 0,
    'extra' => 0,
    'checkbox_name' => 0,
    'default_name' => 0,
    'except_id' => 0,
    'input_id' => 0,
    'input_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'user' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bd202ea6_87182039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bd202ea6_87182039')) {function content_6294b6bd202ea6_87182039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_users','choose','choose_user','person_name','no_items'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['data_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['view_mode'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_but_text']->value)===null||$tmp==='' ? "true" : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['display']->value)===null||$tmp==='' ? "checkbox" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list"&&$_smarty_tpl->tpl_vars['view_mode']->value!="single_button") {?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars['extra_var'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['display']->value=="checkbox") {?>
        <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->__("add_users"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="radio") {?>
        <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['placement']->value=='right') {?>
        <div class="clearfix">
            <div class="pull-right">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_but_text']->value) {?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['_but_text']->value, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable('', null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profiles.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)."&shared_force=".((string)$_smarty_tpl->tpl_vars['shared_force']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value), 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['placement']->value=='right') {?>
        </div></div>
    <?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="single_button") {?>
    <?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
        <?php $_smarty_tpl->tpl_vars['user_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_info']->value['user_id'], null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['_but_text'] = new Smarty_variable($_smarty_tpl->__("choose_user"), null, 0);?>
    <div class="mixed-controls">
    <div class="form-inline">
    <span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js-item cm-display-radio">

    <div class="input-append">
    <input class="cm-picker-value-description <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_class']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['display_input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> size="10" name="user_name" readonly="readonly" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("profiles.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&root=".((string)$_smarty_tpl->tpl_vars['default_name']->value)."&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value).((string)$_smarty_tpl->tpl_vars['extra_url']->value)),'but_role'=>"text",'but_icon'=>"icon-plus",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>((string)$_smarty_tpl->tpl_vars['but_meta']->value)." cm-dialog-opener add-on btn"), 0);?>


    <input id="<?php if ($_smarty_tpl->tpl_vars['input_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>u<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids<?php }?>" type="hidden" class="cm-picker-value" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if (is_array($_smarty_tpl->tpl_vars['item_ids']->value)) {
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item_ids']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value, ENT_QUOTES, 'UTF-8');?>
 />

    </div>
    </span>
    </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <?php if ($_smarty_tpl->tpl_vars['display']->value!="radio") {?>
        <input id="u<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {
echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
}?>" />

        <div class="clearfix"></div>
        <div class="table-responsive-wrapper">
            <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
            <thead>
            <tr>
                <th width="100%"><?php echo $_smarty_tpl->__("person_name");?>
</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'email'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."email".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'user_name'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."user_name".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'clone'=>true), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
            <?php  $_smarty_tpl->tpl_vars["user"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["user"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["user"]->key => $_smarty_tpl->tpl_vars["user"]->value) {
$_smarty_tpl->tpl_vars["user"]->_loop = true;
 $_smarty_tpl->tpl_vars["user"]->index++;
 $_smarty_tpl->tpl_vars["user"]->first = $_smarty_tpl->tpl_vars["user"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["user"]->first;
?>
                <?php $_smarty_tpl->tpl_vars['user_info'] = new Smarty_variable(fn_get_user_short_info($_smarty_tpl->tpl_vars['user']->value), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['user']->value,'email'=>$_smarty_tpl->tpl_vars['user_info']->value['email'],'user_name'=>((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname']),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first']), 0);?>

            <?php } ?>
            <?php }?>
            </tbody>
            <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
            <tr class="no-items">
                <td colspan="2" data-th="&nbsp;"><p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p></td>
            </tr>
            </tbody>
            </table>
        </div>
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>
    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_but_text']->value, ENT_QUOTES, 'UTF-8');?>
">
    </div>
<?php }?><?php }} ?>
