<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 08:35:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/select2/components/object_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28474520262a283b495a4d4-55322933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189c000a93a5ecc842b92c79839368458438dd8e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/select2/components/object_result.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '28474520262a283b495a4d4-55322933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'content_pre' => 0,
    'prefix' => 0,
    'content' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a283b495f1a4_40611003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a283b495f1a4_40611003')) {function content_62a283b495f1a4_40611003($_smarty_tpl) {?><div class="object-selector-result-wrapper">
    <span class="object-selector-result">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="object-selector-result__icon-wrapper">
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
 object-selector-result__icon"></i>
            </span>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content_pre']->value;?>

        <span class="object-selector-result__text"><span class="object-selector-result__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span class="object-selector-result__body">[text]</span></span>
        <span class="object-selector-result__append">[append]</span>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
        <div class="object-selector-result__help">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div><?php }} ?>
