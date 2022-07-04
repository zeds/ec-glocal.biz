<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 05:15:55
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/block_manager/block_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:979904517629525fb5a12f5-41102173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '843cb4a5f21bd8945253c2c9f9d54f177c54b585' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/block_manager/block_type_list.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '979904517629525fb5a12f5-41102173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extra_id' => 0,
    'block_types' => 0,
    'block' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629525fb6a6419_18270113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629525fb6a6419_18270113')) {function content_629525fb6a6419_18270113($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_block'));
?>
<div id="block_type_list">
    <div id="content_block_type_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("block_edit_link", null, null); ob_start(); ?>
                <div class="select-block-box">
                    <i class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></i>
                </div>
                <div class="select-block-description">
                    <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if ($_smarty_tpl->tpl_vars['block']->value['is_manageable']) {?>
                <div class="select-block">
                        <?php ob_start();
echo htmlspecialchars(rawurlencode($_REQUEST['r_url']), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['block_edit_link'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"block_properties_".((string)$_smarty_tpl->tpl_vars['block']->value['type']),'title_start'=>$_smarty_tpl->__("add_block"),'title_end'=>$_smarty_tpl->tpl_vars['block']->value['name'],'act'=>"link",'href'=>"block_manager.update_block?block_data[type]=".((string)$_smarty_tpl->tpl_vars['type']->value)."&r_url=".$_tmp1,'opener_ajax_class'=>"cm-ajax cm-ajax-force",'content'=>'','link_text'=>$_tmp2), 0);?>

                </div>
            <?php }?>
        <?php } ?>
        <!--content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <!--add_new_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
