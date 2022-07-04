<?php /* Smarty version Smarty-3.1.21, created on 2022-06-05 14:21:20
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sitemap/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1514986105629c3d50c38a78-68865957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91e67c66173ce5f27b557fc62ec56f88b3a5958' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/sitemap/update.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1514986105629c3d50c38a78-68865957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'id' => 0,
    'links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629c3d50c60930_02676413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629c3d50c60930_02676413')) {function content_629c3d50c60930_02676413($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','section_links','name','position_short','name','url','position_short','name','url','tools','position_short','name','url','tools'));
?>
<?php if ($_smarty_tpl->tpl_vars['section']->value['section_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['section']->value['section_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="links_form" class="form-horizontal form-edit">
    <input type="hidden" name="section_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
            <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            <li id="tab_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("section_links");?>
</a></li>
        </ul>
    </div>

    <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="hidden" id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="control-group">
                <label for="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                <div class="controls">
                    <input type="text" name="section" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['section'], ENT_QUOTES, 'UTF-8');?>
" id="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"status",'id'=>"section_status",'obj'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

    </div>

    <div id="content_tab_links_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative hidden-inputs table-responsive">
            <thead>
                <tr>
                    <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="40%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="30%"><?php echo $_smarty_tpl->__("url");?>
</th>
                    <th width="10%">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['keys']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden"></td>
                <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <input type="hidden" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link]" size="25" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="input-xlarge input-hidden"></td>
                <td data-th="<?php echo $_smarty_tpl->__("url");?>
">
                    <input type="text" name="link_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
][link_href]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link_href'], ENT_QUOTES, 'UTF-8');?>
" class="input-xlarge input-hidden"></td>
                <td class="right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>"Y"), 0);?>

                </td>
            </tr>
            <?php } ?>
            <tr id="box_add_link_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="add_link_data[0][position]" size="2" value="" class="input-micro"></td>
                <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <input type="hidden" name="add_link_data[0][link_id]" value="0" />
                    <input type="text" name="add_link_data[0][link]" size="25" value="" class="ïnput-xlarge"></td>
                <td data-th="<?php echo $_smarty_tpl->__("url");?>
">
                    <input type="text" name="add_link_data[0][link_href]" size="35" value="" class="ïnput-xlarge"></td>
                <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_link_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>

                </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>

    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[sitemap.update_sitemap]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>

    </form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
