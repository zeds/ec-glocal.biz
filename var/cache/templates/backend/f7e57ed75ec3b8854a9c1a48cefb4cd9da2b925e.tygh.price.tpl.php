<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:25:42
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/context_menu/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16466225826294b7c6ee7a74-87945498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7e57ed75ec3b8854a9c1a48cefb4cd9da2b925e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/products/components/context_menu/price.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16466225826294b7c6ee7a74-87945498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'show_stock_control_in_bulk_edit' => 0,
    'params' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b7c6eff359_51673517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b7c6eff359_51673517')) {function content_6294b7c6eff359_51673517($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price','list_price','in_stock','bulk_edit.decrease_hint','bulk_edit.example_of_modified_value','price','list_price','in_stock','reset','apply'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "content", null); ob_start(); ?>
    <div class="bulk-edit-inner__header">
        <span>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_prices_block_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    </div>

    <div class="bulk-edit-inner__body">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_prices_block_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_inputs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       step="any"
                       class="input-group__text"
                       placeholder="<?php echo $_smarty_tpl->__("price");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-price]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-p]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][price]']"
                       data-ca-name="price"
                />
                <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-p>
                    <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                    <option value="percent">%</option>
                </select>
            </div>

            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       step="any"
                       class="input-group__text"
                       placeholder="<?php echo $_smarty_tpl->__("list_price");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-listprice]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-lp]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][list_price]']"
                       data-ca-name="list_price"
                />
                <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-lp>
                    <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                    <option value="percent">%</option>
                </select>
            </div>

        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value)===null||$tmp==='' ? true : $tmp)) {?>
            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       class="input-group__text input-group__text--full"
                       placeholder="<?php echo $_smarty_tpl->__("in_stock");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-instock]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-is]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][amount]']"
                       data-ca-name="amount"
                />
                <input type="hidden" value="number" data-ca-bulkedit-mod-price-filter-is/>
            </div>
        <?php }?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="bulk-edit-inner__hint">
                <span><?php echo $_smarty_tpl->__("bulk_edit.decrease_hint");?>
</span>
            </div>

            <div class="bulk-edit-inner__example">
                <p class="bulk-edit-inner__example-title"><?php echo $_smarty_tpl->__("bulk_edit.example_of_modified_value");?>
</p>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_price_examples")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("price");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="30.00"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-price
                        >
                            <span class="bulk-edit-inner__example-line--green">30.00</span>
                            <span class="bulk-edit-inner__example-line--red"></span>
                        </span>
                    </p>

                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("list_price");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="31.00"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-listprice
                        >
                            <span class="bulk-edit-inner__example-line--green">31.00</span>
                            <span class="bulk-edit-inner__example-line--red"></span>
                        </span>
                    </p>

                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value)===null||$tmp==='' ? true : $tmp)) {?>
                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("in_stock");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="10"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-instock
                        >
                                <span class="bulk-edit-inner__example-line--green">10</span>
                                <span class="bulk-edit-inner__example-line--red"></span>
                            </span>
                    </p>
                <?php }?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-mod-cancel"
                role="button"
                data-ca-bulkedit-mod-cancel
                data-ca-bulkedit-mod-reset-changer="[data-ca-bulkedit-mod-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-mod-update"
                role="button"
                data-ca-bulkedit-mod-update
                data-ca-bulkedit-mod-values="[data-ca-bulkedit-mod-changer]"
                data-ca-bulkedit-mod-target-form="[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="products.m_update_prices"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>"price"), 0);?>

<?php }} ?>
