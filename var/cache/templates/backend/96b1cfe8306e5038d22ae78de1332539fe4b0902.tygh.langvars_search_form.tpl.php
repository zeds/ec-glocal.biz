<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:16:37
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/components/langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50008169629b31059fb211-87238509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96b1cfe8306e5038d22ae78de1332539fe4b0902' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/languages/components/langvars_search_form.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50008169629b31059fb211-87238509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b3105a02890_28517743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b3105a02890_28517743')) {function content_629b3105a02890_28517743($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text"/>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

    </form>
</div><?php }} ?>
