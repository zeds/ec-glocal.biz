<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 16:20:00
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/widget_copy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:804369461629efc20ef31f4-29017770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3963852fd083ba7831709341616116046dc5bf5' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/common/widget_copy.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '804369461629efc20ef31f4-29017770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_copy_class' => 0,
    'widget_copy_title' => 0,
    'widget_copy_text' => 0,
    'widget_copy_code_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629efc20efb958_31502813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629efc20efb958_31502813')) {function content_629efc20efb958_31502813($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('copied','copy'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/widget_copy.js"),$_smarty_tpl);?>

<div class="cm-widget-copy widget-copy <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_copy_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value||$_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
        <div class="widget-copy__body">
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value) {?>
                <strong class="widget-copy__title"><?php echo $_smarty_tpl->tpl_vars['widget_copy_title']->value;?>
.</strong>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
                <span class="widget-copy__text"><?php echo $_smarty_tpl->tpl_vars['widget_copy_text']->value;?>
</span>
            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_code_text']->value) {?>
        <div class="widget-copy__code">
            <button class="cm-widget-copy__btn widget-copy__btn" data-title="<?php echo $_smarty_tpl->__("copied");?>
" type="button"><?php echo $_smarty_tpl->__("copy");?>
</button>
            <pre class="widget-copy__pre"><code class="cm-widget-copy__code-text widget-copy__code-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_copy_code_text']->value, ENT_QUOTES, 'UTF-8');?>
</code></pre>
        </div>
    <?php }?>
</div><?php }} ?>
