<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:06:06
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304822704629e5e2e3d56b3-56355951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a39aa7603d673414ac45f09e62786390282bf22' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/addons/components/detailed_page/sidebar/addon_support.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '304822704629e5e2e3d56b3-56355951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'support' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5e2e3e0046_16667843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5e2e3e0046_16667843')) {function content_629e5e2e3e0046_16667843($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.support'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons_detailed:sidebar_support")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons_detailed:sidebar_support"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['addon']->value['support']||$_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("addons.support");?>
</h6>

        <?php if ($_smarty_tpl->tpl_vars['addon']->value['identified']) {?>
            <div class="control-group">
                <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/support/contact_developer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <?php }?>

        <?php  $_smarty_tpl->tpl_vars['support'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['support']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addon']->value['support']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['support']->key => $_smarty_tpl->tpl_vars['support']->value) {
$_smarty_tpl->tpl_vars['support']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['support']->value['url']) {?>
                <div class="control-group">
                    <p>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['support']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['support']->value['text'];?>

                        </a>
                    </p>
                </div>
            <?php }?>
        <?php } ?>

    </div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons_detailed:sidebar_support"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
