<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:19:19
         compiled from "8694c78a31dfa366c318abab51c2e63872ea7ae2" */ ?>
<?php /*%%SmartyHeaderCode:298123276629b31a7293606-71108661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8694c78a31dfa366c318abab51c2e63872ea7ae2' => 
    array (
      0 => '8694c78a31dfa366c318abab51c2e63872ea7ae2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '298123276629b31a7293606-71108661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b31a7296171_46968803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b31a7296171_46968803')) {function content_629b31a7296171_46968803($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<div>
	宿泊施設を選択してください
</div>

<h3>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H1.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()">
	<p>S-H1</p>
</div>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H2.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H2()">
	<p>S-H2</p>
</div>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H3.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H3()">
	<p>S-H3</p>
</div>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H4.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H4()">
	<p>S-H4</p>
</div>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H5.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()">
	<p>S-H5</p>
</div>
<div style="width: 160px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H6.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()">
	<p>S-H6</p>
</div>
<div style="width: 160px; color: red; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H1.jpg" width="160px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H1()">
	ハルちゃん
</div>
	
<div class="box-row">
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
		//document.getElementById('litecheckout_s_phone').setAttribute('disabled','');
	
	}
	
	function S_H1() {
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='1901';
		document.getElementById('litecheckout_s_address_2').value='S-H1.矢嶋亭 矢嶋様';
		//document.getElementById('litecheckout_s_phone').value='050-1751-3162';
	}
	
	function S_H2() {
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='1815';
		document.getElementById('litecheckout_s_address_2').value='S-H2.海風';
		//document.getElementById('litecheckout_s_phone').value='050-1751-3162';
	}
	
	function S_H3() {
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='2171-2';
		document.getElementById('litecheckout_s_address_2').value='S-H3.ログハウス  宮内様';
		//document.getElementById('litecheckout_s_phone').value='050-1751-3162';
	}
	
<?php echo '</script'; ?>
>
			
</body>
</html><?php }} ?>
