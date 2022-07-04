<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1533653017629e5e2e1a0ae7-12709417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f234721234f4eb2abb753b257a70be2d54adce' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1533653017629e5e2e1a0ae7-12709417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_addon_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e1a7764_38752548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e1a7764_38752548')) {function content_629e5e2e1a7764_38752548($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }} ?>
