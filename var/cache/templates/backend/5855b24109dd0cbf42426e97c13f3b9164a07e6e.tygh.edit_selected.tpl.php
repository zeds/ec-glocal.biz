<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 04:43:50
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94820459362951e769eb4d8-52992055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5855b24109dd0cbf42426e97c13f3b9164a07e6e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94820459362951e769eb4d8-52992055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62951e769ee7c2_30040228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62951e769ee7c2_30040228')) {function content_62951e769ee7c2_30040228($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form"));?>

    </span>
</li>
<?php }} ?>
