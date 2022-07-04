<?php /* Smarty version Smarty-3.1.21, created on 2022-06-16 21:08:07
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/cache_queries_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61170926462ab1d27db9d14-62174730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a73db8c040d1f68d66607611a95381f1442cd9f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/cache_queries_tab.tpl',
      1 => 1623231400,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '61170926462ab1d27db9d14-62174730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data' => 0,
    'order_by' => 0,
    'direction' => 0,
    'debugger_hash' => 0,
    'query' => 0,
    'long_query_time' => 0,
    'medium_query_time' => 0,
    'color' => 0,
    'key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62ab1d27e993b5_14452773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ab1d27e993b5_14452773')) {function content_62ab1d27e993b5_14452773($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
    <?php $_smarty_tpl->_capture_stack[0][] = array("cache_queries_tabs", null, null); ob_start(); ?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabCacheQueriesList">
        <?php $_smarty_tpl->_capture_stack[0][] = array("cache_queries_list_table", null, null); ob_start(); ?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabCacheQueriesListTable">
                <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
                <tr>
                    <th style="width: 35px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0);?>
</th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0);?>
</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["query"]->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light-red", null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light2-red", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo Smarty::$_smarty_vars['capture']['cache_queries_list_table'];?>

    </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabCacheQueriesList">Queries list</a></li>
        </ul>
    </div>
    <?php echo Smarty::$_smarty_vars['capture']['cache_queries_tabs'];?>

    <!--DebugToolbarTabCacheQueriesContent--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/cache_queries_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/cache_queries_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
    <?php $_smarty_tpl->_capture_stack[0][] = array("cache_queries_tabs", null, null); ob_start(); ?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabCacheQueriesList">
        <?php $_smarty_tpl->_capture_stack[0][] = array("cache_queries_list_table", null, null); ob_start(); ?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabCacheQueriesListTable">
                <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
                <tr>
                    <th style="width: 35px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0);?>
</th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php echo $_smarty_tpl->getSubTemplate ("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0);?>
</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars["query"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["query"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["query"]->key => $_smarty_tpl->tpl_vars["query"]->value) {
$_smarty_tpl->tpl_vars["query"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["query"]->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light-red", null, 0);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time']>$_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("deb-light2-red", null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable(false, null, 0);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><pre><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo Smarty::$_smarty_vars['capture']['cache_queries_list_table'];?>

    </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabCacheQueriesList">Queries list</a></li>
        </ul>
    </div>
    <?php echo Smarty::$_smarty_vars['capture']['cache_queries_tabs'];?>

    <!--DebugToolbarTabCacheQueriesContent--></div>
<?php }?><?php }} ?>
