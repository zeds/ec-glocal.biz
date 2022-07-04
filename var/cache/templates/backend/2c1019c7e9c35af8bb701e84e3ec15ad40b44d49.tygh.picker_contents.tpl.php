<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 20:22:00
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99355025562a0865845e106-55282398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1019c7e9c35af8bb701e84e3ec15ad40b44d49' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/picker_contents.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99355025562a0865845e106-55282398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_fields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a086584783d9_17843180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a086584783d9_17843180')) {function content_62a086584783d9_17843180($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','can_not_add_file_type_profile_field','id','name','id','description','no_data','add_profile_fields','add_profile_fields_and_close'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    _.tr('text_can_not_add_file_type', '<?php echo strtr($_smarty_tpl->__("can_not_add_file_type_profile_field"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_add_profile_fields', function(frm, elm) {
        var max_displayed_qty = <?php echo htmlspecialchars((($tmp = @$_REQUEST['max_displayed_qty'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
;
        var details_url = '<?php echo htmlspecialchars(fn_url("profile_fields.update?field_id="), ENT_QUOTES, 'UTF-8');?>
';
        var profile_fields = {};
        var profile_fields_count = 0;

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var type = $(this).data('type');
                if (type !== '<?php echo htmlspecialchars(smarty_modifier_enum("ProfileFieldTypes::FILE"), ENT_QUOTES, 'UTF-8');?>
') {
                    var id = $(this).val();
                    var item = $(this).parent().parent();
                    profile_fields[id] = {
                        description: item.find('td.cm-profile-field-description').text(),
                    };
                    profile_fields_count ++;
                } else {
                    $.ceNotification('show', {
                        type: 'W',
                        title: _.tr('warning'),
                        message: _.tr('text_can_not_add_file_type'),
                        message_state: 'I'
                    });
                }
            });

            if (profile_fields_count > 0) {
                
                $.cePicker('add_js_item', frm.data('caResultId'), profile_fields, 'pf_', {
                    '{field_id}': '%id',
                    '{description}': '%item.description',
                });
                

                $.cePicker('check_items_qty', frm.data('caResultId'), details_url, max_displayed_qty);

                $.ceNotification('show', {
                    type: 'N',
                    title: _.tr('notice'),
                    message: _.tr('text_items_added'),
                    message_state: 'I'
                });
            }
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_profile_fields">

<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <tr>
        <th class="center" width="1%">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"mrg-check"), 0);?>
</th>
        <th width="10%"><?php echo $_smarty_tpl->__("id");?>
</th>
        <th width="15%"><?php echo $_smarty_tpl->__("name");?>
</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
    <tr>
        <td class="center" width="1%" data-th="">
            <input type="checkbox" name="add_parameter[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" data-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" class="mrg-check cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
            <span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td class="cm-profile-field-description" data-th="<?php echo $_smarty_tpl->__("description");?>
"><input type="hidden" name="origin_statuses[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_profile_fields"),'but_close_text'=>$_smarty_tpl->__("add_profile_fields_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
