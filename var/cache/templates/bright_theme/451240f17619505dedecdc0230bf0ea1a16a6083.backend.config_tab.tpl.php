<?php /* Smarty version Smarty-3.1.21, created on 2022-06-25 10:16:01
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/config_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54987407062b661d16e3479-83353988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451240f17619505dedecdc0230bf0ea1a16a6083' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/debugger/components/config_tab.tpl',
      1 => 1623231400,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '54987407062b661d16e3479-83353988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'name' => 0,
    'value' => 0,
    'settings' => 0,
    'data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b661d17d3af7_04225972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b661d17d3af7_04225972')) {function content_62b661d17d3af7_04225972($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Config</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object'||$_smarty_tpl->tpl_vars['value']->value==='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource'||$_smarty_tpl->tpl_vars['value']->value==='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/config_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/config_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Config</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <div class="table-wrapper">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td width="200px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object'||$_smarty_tpl->tpl_vars['value']->value==='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource'||$_smarty_tpl->tpl_vars['value']->value==='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php }?><?php }} ?>
