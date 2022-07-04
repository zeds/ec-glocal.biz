<?php /* Smarty version Smarty-3.1.21, created on 2022-06-03 14:57:11
         compiled from "7e7f2a89bb10c6c54d7602e2442993196141c759" */ ?>
<?php /*%%SmartyHeaderCode:21359904386299a2b7663da2-45039069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e7f2a89bb10c6c54d7602e2442993196141c759' => 
    array (
      0 => '7e7f2a89bb10c6c54d7602e2442993196141c759',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21359904386299a2b7663da2-45039069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6299a2b76cd3c4_47604527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6299a2b76cd3c4_47604527')) {function content_6299a2b76cd3c4_47604527($_smarty_tpl) {?><div>
宿泊施設を選択してください
</div>
<div>
	<img src="./images/companies/1/施設画像/S-H1.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()">
	<img src="./images/companies/1/施設画像/S-H2.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H2()">
	<img src="./images/companies/1/施設画像/S-H3.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H3()">
	
</div>

<style type="text/css">

img{
  cursor: pointer;
}

</style>

<?php echo '<script'; ?>
>
window.onload = function() {
	document.getElementById('litecheckout_s_zipcode').setAttribute('disabled','');
	document.getElementById('litecheckout_state').setAttribute('disabled','');
	document.getElementById('litecheckout_city').setAttribute('disabled','');
	document.getElementById('litecheckout_s_address').setAttribute('disabled','');
	document.getElementById('litecheckout_s_address_2').setAttribute('disabled','');
	document.getElementById('litecheckout_s_phone').setAttribute('disabled','');

}

function S_H1() {
	document.getElementById('litecheckout_s_zipcode').value='2400112';
	document.getElementById('litecheckout_state').value='神奈川県';
	document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
	document.getElementById('litecheckout_s_address').value='1901';
	document.getElementById('litecheckout_s_address_2').value='S-H1.矢嶋亭 矢嶋様';
	document.getElementById('litecheckout_s_phone').value='050-1751-3162';
}

function S_H2() {
	document.getElementById('litecheckout_s_zipcode').value='???2400112?';
	document.getElementById('litecheckout_state').value='神奈川県';
	document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
	document.getElementById('litecheckout_s_address').value='1815';
	document.getElementById('litecheckout_s_address_2').value='S-H2.海風';
	document.getElementById('litecheckout_s_phone').value='050-1751-3162';
}

function S_H3() {
	document.getElementById('litecheckout_s_zipcode').value='2400112';
	document.getElementById('litecheckout_state').value='神奈川県';
	document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
	document.getElementById('litecheckout_s_address').value='2171-2';
	document.getElementById('litecheckout_s_address_2').value='S-H3.ログハウス  宮内様';
	document.getElementById('litecheckout_s_phone').value='050-1751-3162';
}

<?php echo '</script'; ?>
>
<?php }} ?>
