<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 04:03:48
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_reviews/hooks/common/sidebar_product.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18024092862a24414331ce0-80239660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84414c1fe83c8228530825161c7bba4d2a74bfa' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_reviews/hooks/common/sidebar_product.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18024092862a24414331ce0-80239660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'total_product_reviews' => 0,
    'product_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a2441434a420_57218853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a2441434a420_57218853')) {function content_62a2441434a420_57218853($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_data']->value) {?>
    <li>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'link'=>true), 0);?>

    </li>
    <?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
        <li>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_review']->value['product']['product_id'],'link'=>true), 0);?>

        </li>
    <?php }?>
<?php }?>
<?php }} ?>
