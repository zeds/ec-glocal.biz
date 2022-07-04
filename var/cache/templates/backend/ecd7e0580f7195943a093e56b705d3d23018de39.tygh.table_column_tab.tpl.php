<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/table_column_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110452823862a6632c5afaa0-86055382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecd7e0580f7195943a093e56b705d3d23018de39' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/table_column_tab.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110452823862a6632c5afaa0-86055382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'can_update' => 0,
    'snippet' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'return_url' => 0,
    'columns' => 0,
    'column' => 0,
    'edit_link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c5ce4e3_55506756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c5ce4e3_55506756')) {function content_62a6632c5ce4e3_55506756($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','add_table_column','add_table_column','no_data'));
?>
<?php $_smarty_tpl->tpl_vars["can_update"] = new Smarty_variable(fn_check_permissions('snippets','update','admin','POST'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("toolbar", null, null); ob_start(); ?>
    <?php if (fn_check_permissions("documents","update","admin","POST")) {?>
        <div class="cm-tab-tools" id="tools_snippet_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
_table_columns">
            <?php ob_start();
echo $_smarty_tpl->__("add_table_column");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_column",'text'=>$_tmp4,'link_text'=>$_smarty_tpl->__("add_table_column"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update_table_column?snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)), 0);?>

        </div>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="btn-toolbar clearfix cm-toggle-button">
    <?php echo Smarty::$_smarty_vars['capture']['toolbar'];?>

</div>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="table_columns_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal">

    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="content_table_columns_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" />

    <div class="items-container <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>cm-sortable<?php }?>" <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>data-ca-sortable-table="template_table_columns" data-ca-sortable-id-name="column_id"<?php }?> id="content_table_column_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['columns']->value) {?>
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars["column"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["column"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["column"]->key => $_smarty_tpl->tpl_vars["column"]->value) {
$_smarty_tpl->tpl_vars["column"]->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['column']->value->getId(),'text'=>$_smarty_tpl->tpl_vars['column']->value->getName(),'status'=>$_smarty_tpl->tpl_vars['column']->value->getStatus(),'href'=>"snippets.update_table_column?column_id=".((string)$_smarty_tpl->tpl_vars['column']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value),'object_id_name'=>"column_id",'table'=>"template_table_columns",'href_delete'=>"snippets.delete_table_column?column_id=".((string)$_smarty_tpl->tpl_vars['column']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value),'delete_target_id'=>"content_table_column_list_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()),'header_text'=>$_smarty_tpl->tpl_vars['column']->value->getName(),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['column']->value->getId()),'no_table'=>true,'draggable'=>true,'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'nostatus'=>!$_smarty_tpl->tpl_vars['can_update']->value), 0);?>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--content_table_column_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
--></div>
</form><?php }} ?>
