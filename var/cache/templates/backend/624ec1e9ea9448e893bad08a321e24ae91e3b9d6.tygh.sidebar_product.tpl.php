<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 04:03:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/sidebar/sidebar_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37841044262a24413e13912-22627875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624ec1e9ea9448e893bad08a321e24ae91e3b9d6' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/sidebar/sidebar_product.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37841044262a24413e13912-22627875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'SIDEBAR_CONTENT_WIDTH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a24413e240d0_63134046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a24413e240d0_63134046')) {function content_62a24413e240d0_63134046($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_details_sidebar'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
<?php $_smarty_tpl->tpl_vars['SIDEBAR_CONTENT_WIDTH'] = new Smarty_variable("192", null, 0);?>

<div class="sidebar-row sidebar-product">
    <h6><?php echo $_smarty_tpl->__("product_details_sidebar");?>
</h6>
    <ul class="unstyled">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:sidebar_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:sidebar_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <p>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product_data']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product_data']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['SIDEBAR_CONTENT_WIDTH']->value,'image_height'=>$_smarty_tpl->tpl_vars['SIDEBAR_CONTENT_WIDTH']->value,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])),'show_detailed_link'=>true), 0);?>

                </p>
            </li>
            <li>
                <?php if (fn_check_permissions("products","update","admin")) {?>
                    <a href=<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php } else { ?>
                    <span>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>

                    </span>
                <?php }?>
            </li>
            <li>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"common:sidebar_product_code")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"common:sidebar_product_code"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <span class="muted">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

                    </span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:sidebar_product_code"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </li>
            <li>
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product_data']->value['price']), 0);?>

            </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"common:sidebar_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
</div>
<?php }?><?php }} ?>
