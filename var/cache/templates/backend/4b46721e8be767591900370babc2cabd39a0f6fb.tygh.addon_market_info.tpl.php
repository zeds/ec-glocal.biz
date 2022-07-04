<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_market_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798686071629e5e2e3c19d8-55340318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b46721e8be767591900370babc2cabd39a0f6fb' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_market_info.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1798686071629e5e2e3c19d8-55340318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'reviews' => 0,
    'average_rating' => 0,
    'addon_developer_url' => 0,
    'addon_category_url' => 0,
    'addon_marketplace_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e3d0bf9_35610856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e3d0bf9_35610856')) {function content_629e5e2e3d0bf9_35610856($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace','rating','addons.no_reviews','developer','category','addons.other_category','view_in_marketplace'));
?>
<?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("cscart_marketplace");?>
</h6>

        
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label" for="addon_rating"><?php echo $_smarty_tpl->__("rating");?>
:</label>
            <div class="controls sidebar__controls">

                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_reviews'=>smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value),'link'=>true), 0);?>

                <?php } else { ?>
                    <span class="muted">
                        <?php echo $_smarty_tpl->__("addons.no_reviews");?>

                    </span>
                <?php }?>

            </div>
        </div>

        
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("developer");?>
:</label>
            <div class="controls sidebar__controls">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_developer_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    target="_blank"
                >
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

                </a>
            </div>
        </div>

        
        <div class="control-group sidebar__stats">
            <label class="control-label sidebar__label"><?php echo $_smarty_tpl->__("category");?>
:</label>
            <div class="controls sidebar__controls">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_category_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    target="_blank"
                >
                    <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon']->value['category_name'])===null||$tmp==='' ? $_smarty_tpl->__("addons.other_category") : $tmp), ENT_QUOTES, 'UTF-8');?>

                </a>
            </div>
        </div>

        
        <div class="control-group">
            <p>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_marketplace_page']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("view_in_marketplace");?>
</a>
            </p>
        </div>
    </div>
<?php }?>
<?php }} ?>
