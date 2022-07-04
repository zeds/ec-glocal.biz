<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 05:43:35
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/categories/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132365461462952c77ef23a5-96448809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd90dc2d8bf2bae2531e222061118ed1b90aae7bc' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/categories/picker_contents.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132365461462952c77ef23a5-96448809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'form_id' => 0,
    'categories_tree' => 0,
    'category_id' => 0,
    'direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62952c77f3a035_70418708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62952c77f3a035_70418708')) {function content_62952c77f3a035_70418708($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_updated','tip.quick_select_and_close_category_selector','no_categories_available','manage_categories','choose'));
?>
<?php if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<?php ob_start();
echo htmlspecialchars(rand(0,1024), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['form_id'] = new Smarty_variable("cat_form_".$_tmp1, null, 0);?>

<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
    _.tr('text_items_updated', '<?php echo strtr($_smarty_tpl->__("text_items_updated"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    var selectedCategories = {};
    var isTristateCheckbox = '<?php echo htmlspecialchars($_REQUEST['is_tristate_checkbox'], ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.formpost_categories_form', function(frm, elm) {
        var categories = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                if (display_type != 'radio') {
                    categories[id] = {
                        category: $('#category_' + id).text(),
                        path_items: ''
                    };
                    var parent = $(this).closest('.table-tree').parent().prev('.table-tree');
                    while (parent.length > 0) {
                        var path_id = $('.cm-item', parent).first().val();
                        if (path_id) {
                            var path_name = $('#category_' + path_id).text();
                            categories[id]['path_items'] =
                                '<a class="ty-breadcrumbs__a" target="_blank" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id="), ENT_QUOTES, 'UTF-8');?>
'+path_id+'">'+path_name+'</a> / ' +
                                    categories[id]['path_items'];
                        }
                        parent = parent.parent().prev('.table-tree');
                    }
                }
                else {
                    categories[id] = $('#category_' + id).text()
                }
            });

            if (display_type != 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item.category',
                    '{path_items}': '%item.path_items'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), categories, 'c', {
                    '{category_id}': '%id',
                    '{category}': '%item'
                });
                
            }
        }

        if (!isTristateCheckbox) {
            //delete unselected categories
            var removableCategories = {};
            for (var catId in selectedCategories) {
                if (!(catId in categories) && $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + catId).length) {
                    removableCategories[catId] = selectedCategories[catId];
                }
            }

            if (display_type != 'radio') {
                
                    $.cePicker('delete_js_items', frm.data('caResultId'), removableCategories, 'c');
                
            }
        } else {
            // for bulkedit category picker
            var isAddedCategories = $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 input[type="checkbox"]:checked').length > 0;
            for (var catId in selectedCategories) {
                var $checkbox = $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + catId);

                if ($checkbox.length) {
                    selectedCategories[catId] = {
                        checked: $checkbox.prop('checked'),
                        readonly: $checkbox.prop('readonly'),
                        indeterminate: $checkbox.prop('indeterminate')
                    }
                }
            }

            $.ceEvent('trigger', 'ce.formpost_categories_form_update', [frm.data('caResultId'), selectedCategories, isAddedCategories]);
        }


        if (display_type != 'radio') {
            $.ceNotification('show', {
                type: 'N',
                title: _.tr('notice'),
                message: _.tr('text_items_updated'),
                message_state: 'I'
            });
        }

        return false;
    });

    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', '.cm-click-and-close', function (e) {
        // skip, if event path contains 'hide'-button
        let flag = false;
        $(e.originalEvent.path).each((i, elm) => {
            flag = flag || $(elm).is('[data-ca-categories-hide-target]');
        });
        if (flag) {
            return;
        }

        // skip, if content hidden or not loaded
        if ($(this).hasClass('cm-click-and-close-forced')) {
            let {
                caTargetCombinationContainer,
                caTargetCombinationExpander,
                caTargetCombinationFetchUrl,
                caTargetCombinationFetchId
            } = $(this).data();

            if (caTargetCombinationContainer) {
                // if content is not loaded
                if (!$(caTargetCombinationContainer).children().length) {
                    $.ceAjax(
                        'request',
                        caTargetCombinationFetchUrl,
                        { result_ids: caTargetCombinationFetchId }
                    );
                    return;
                } else {
                    // if content loaded, but container with content is hidden
                    if (!$(caTargetCombinationContainer).is(':visible')) {
                        return;
                    }
                }
            }
        }

        // process, if got metakeys or got forced flag
        if ((e.metaKey || e.ctrlKey) || $(this).hasClass('cm-click-and-close-forced')) {
            let { caTargetCheckbox } = $(this).data();

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                let _target = $(caTargetCheckbox);
                _target.prop('checked', !_target.prop('checked'));
            }

            setTimeout(() => $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
 .cm-process-items.cm-dialog-closer').click(), 100);

            if (caTargetCheckbox && !$(caTargetCheckbox).is(e.target)) {
                e.preventDefault();
                return false;
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        if (display_type !== 'radio' && context && $(context).find('.category-tree-wrapper').length) {
            selectCategories();

            if (isTristateCheckbox) {
                $(context).find('.cm-item').addClass('cm-tristate tristate-checkbox-cursor');
            }
        }
    });

    $.ceEvent('on', 'ce.dialog.before_open', function () {
        if (display_type !== 'radio') {
            selectCategories();
        }
    });

    function selectCategories () {
        var categoriesPickerValue;

        if (isTristateCheckbox) {
            // for bulkedit category picker
            var $container = $('.object-categories-add--bulk-edit');

            if ($container.length) {
                var categoriesPickerValue = $container.find(' .select2__category-status-checkbox:checked, .select2__category-status-checkbox:indeterminate').map(function () {
                    var $self = $(this);

                    return {
                        id: $self.data('caCategoryId'),
                        checked: $self.prop('checked'),
                        readonly: $self.prop('readonly'),
                        indeterminate: $self.prop('indeterminate')
                    }
                }).get();
            }
        } else if ($('[data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').length) {
            categoriesPickerValue = $('[data-ca-object-picker-extended-picker-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').val();
        } else if ($('[data-ca-picker-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').length) {
            // FIXME: Fix when object selector will replaced with object picker
            categoriesPickerValue = $('[data-ca-picker-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"]').val();
        } else {
            categoriesPickerValue = $('#<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 .cm-picker-value').val();
        }

        if (categoriesPickerValue && categoriesPickerValue.length > 0) {
            categories = Array.isArray(categoriesPickerValue) ? categoriesPickerValue : categoriesPickerValue.split(',');

            $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('checked', false);

            // for bulkedit category picker
            if (isTristateCheckbox) {
                $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('readonly', false);
                $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 [name="categories_form"] .cm-item').prop('indeterminate', false);

                for (var i in categories) {
                    var $checkbox = $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + categories[i].id);

                    $checkbox.prop('checked', categories[i].checked)
                             .prop('readonly', categories[i].readonly)
                             .prop('indeterminate', categories[i].indeterminate);

                    selectedCategories[categories[i].id] = {};
                }
            } else {
                for (var i in categories) {
                    var $checkbox = $('#content_<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
 #input_cat_' + categories[i]);

                    $checkbox.prop('checked', true);
                    selectedCategories[categories[i]] = categories[i];
                }
            }
        }

    }

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<form id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="categories_form">

<div class="items-container multi-level">
    <?php if ($_smarty_tpl->tpl_vars['categories_tree']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/categories_tree_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('header'=>true,'checkbox_name'=>(($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "categories_ids" : $tmp),'parent_id'=>$_smarty_tpl->tpl_vars['category_id']->value,'display'=>$_REQUEST['display'],'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'radio_class'=>"hidden",'is_tristate_checkbox'=>(($tmp = @$_REQUEST['is_tristate_checkbox'])===null||$tmp==='' ? false : $tmp)), 0);?>


        <?php if ($_REQUEST['display']!="radio") {?>
            <br />
            <p class="text-center mobile-hide quick-select-protip"><?php echo $_smarty_tpl->__("tip.quick_select_and_close_category_selector");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="no-items center">
            <?php echo $_smarty_tpl->__("no_categories_available");?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <a href="<?php echo htmlspecialchars(fn_url("categories.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("manage_categories");?>
.</a>
            <?php }?>
        </p>
    <?php }?>
</div>

<div class="buttons-container buttons-container--hidden-cancel">
    <?php if ($_REQUEST['display']==="radio") {?>
        <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit",'but_meta'=>"cm-dialog-closer btn-primary cm-form-dialog-closer"), 0);?>

    <?php }?>
</div>

</form>
<?php }} ?>
