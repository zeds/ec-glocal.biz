<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 02:09:23
         compiled from "c96b3303d60a0ce306339d5e97396952793d48ad" */ ?>
<?php /*%%SmartyHeaderCode:1790734040629a404360a093-59226273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96b3303d60a0ce306339d5e97396952793d48ad' => 
    array (
      0 => 'c96b3303d60a0ce306339d5e97396952793d48ad',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1790734040629a404360a093-59226273',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629a404360c677_28289148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629a404360c677_28289148')) {function content_629a404360c677_28289148($_smarty_tpl) {?><div>
宿泊施設を選択してください
</div>

<div>
<ul>
   <li>
	<img src="./images/companies/1/施設画像/S-H1.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()"><p>作業風景</p>
   </li>
   <li>
	<img src="./images/companies/1/施設画像/S-H2.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H2()">
   </li>
   <li>
	<img src="./images/companies/1/施設画像/S-H3.jpg" width="200px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H3()">
   </li>
	
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
	document.getElementById('litecheckout_s_zipcode').value='2400112';
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
