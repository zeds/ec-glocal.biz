<?php /* Smarty version Smarty-3.1.21, created on 2022-06-13 07:05:32
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54646916562a6632c517245-87538809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf7c13fef70740de9dc3a2fa3acddfaa67ccad7' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/snippets/components/list.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54646916562a6632c517245-87538809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'can_update' => 0,
    'result_ids' => 0,
    'snippets' => 0,
    'snippet' => 0,
    'edit_link_text' => 0,
    'return_url_escape' => 0,
    'snippet_result_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a6632c5436d5_17661776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a6632c5436d5_17661776')) {function content_62a6632c5436d5_17661776($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','name','code','status','name','code','tools','delete','status','no_data'));
?>
<?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["can_update"] = new Smarty_variable(fn_check_permissions('snippets','update','admin','POST'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<div id="snippet_list">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="snippets_form" class="form-horizontal" id="snippets_form">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['snippets']->value) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("snippets_table", null, null); ob_start(); ?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative table-responsive" width="100%">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                            <tr>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <th width="1%" class="center mobile-hide">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                        <input type="checkbox"
                                               class="bulkedit-toggler hide"
                                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    </th>
                                <?php }?>
                                <th width="40%">
                                    <?php echo $_smarty_tpl->__("name");?>

                                </th>
                                <th width="20%">
                                    <?php echo $_smarty_tpl->__("code");?>

                                </th>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <th class="right">&nbsp;</th>
                                    <th width="10%" class="right">
                                        <?php echo $_smarty_tpl->__("status");?>

                                    </th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['snippet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['snippet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->key => $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['snippet_result_ids'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['result_ids']->value).",snippet_content_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."_*", null, 0);?>

                            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['snippet']->value->getStatus(), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 row-snippet cm-longtap-target"
                                data-snippet-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <td class="center mobile-hide">
                                        <input type="checkbox" name="snippet_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['snippet']->value->getStatus(), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                                    </td>
                                <?php }?>
                                <td class="row-status" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                    <a class="cm-external-click" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars("opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                                </td>
                                <td class="row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                                    <a class="cm-external-click" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars("opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
</a>
                                </td>
                                <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <li>
                                            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()),'text'=>$_smarty_tpl->tpl_vars['snippet']->value->getName(),'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'act'=>"link",'href'=>"snippets.update?snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value)), 0);?>

                                        </li>
                                        <li>
                                            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'method'=>"post",'class'=>"cm-confirm cm-ajax",'href'=>"snippets.delete?snippet_ids=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['result_ids']->value)));?>

                                        </li>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <div class="hidden-tools">
                                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                    </div>
                                </td>
                                <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                    <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['snippet']->value->getId(),'status'=>$_smarty_tpl->tpl_vars['snippet']->value->getStatus(),'table'=>"template_snippets",'object_id_name'=>"snippet_id",'update_controller'=>"snippets",'st_return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'st_result_ids'=>$_smarty_tpl->tpl_vars['snippet_result_ids']->value), 0);?>

                                    </td>
                                <?php }?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"snippets_form",'object'=>"snippets",'items'=>Smarty::$_smarty_vars['capture']['snippets_table']), 0);?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

    </form>

<!--content_snippets--></div><?php }} ?>
