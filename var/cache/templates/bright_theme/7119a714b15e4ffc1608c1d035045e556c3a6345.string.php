<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 10:50:52
         compiled from "7119a714b15e4ffc1608c1d035045e556c3a6345" */ ?>
<?php /*%%SmartyHeaderCode:142080946762a0007c42ccf1-09844960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7119a714b15e4ffc1608c1d035045e556c3a6345' => 
    array (
      0 => '7119a714b15e4ffc1608c1d035045e556c3a6345',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '142080946762a0007c42ccf1-09844960',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a0007c471d47_61031532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a0007c471d47_61031532')) {function content_62a0007c471d47_61031532($_smarty_tpl) {?><div>
	<h3>宿泊施設を選択すると、配送先住所が自動入力されます</h3>
</div>

<h3>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H1.jpg" width="170px" height="auto" alt="S-H1.矢嶋邸  矢嶋様" onclick="S_H1(this)">
	<p>葉山 庭付きゲストハウス</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H3.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H3(this)">
	<p>葉山 ログハウス</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H4.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H4(this)">
	<p>葉山 古民家ゲストハウス</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H5.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H5(this)">
	<p>葉山 GUEST HOUSE</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-H6.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_H6(this)">
	<p>葉山 OCEAN VIEW HOUSE</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-Z1.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_Z1(this)">
	<p>逗子ビーチハウス</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-Z2.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_Z2(this)">
	<p>逗子ワーケーションハウス</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-Z3.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_Z3(this)">
	<p>逗子 NAGISA HOUSE</p>
</div>
<div style="width: 170px; color: gray; display: inline-block; _display: inline;">
	<img src="./images/companies/1/施設画像/S-Z4.jpg" width="170px" height="auto" alt="S-H1.矢嶋亭 矢嶋様" onclick="S_Z4(this)">
	<p>ハルちゃん</p>
</div>

			
<style type="text/css">
img{
	cursor: pointer;
}
</style>
		
<?php echo '<script'; ?>
>
	window.onload = function() {
		//document.getElementById('litecheckout_s_zipcode').setAttribute('disabled','');
		//document.getElementById('litecheckout_state').setAttribute('disabled','');
		//document.getElementById('litecheckout_city').setAttribute('disabled','');
		//document.getElementById('litecheckout_s_address').setAttribute('disabled','');
		//document.getElementById('litecheckout_s_address_2').setAttribute('disabled','');

		document.getElementById('litecheckout_s_zipcode').value='';
		document.getElementById('litecheckout_state').value='';
		document.getElementById('litecheckout_city').value='';
		document.getElementById('litecheckout_s_address').value='';
		document.getElementById('litecheckout_s_address_2').value='';

		//お届け希望日の先頭を選択
		var select = document.getElementById("delivery_date_selected_0_8");
		select.remove(0);
		select.options[0].selected = true;
	}
	
	function reset_border(el) {
		let images = document.getElementsByTagName('img');
		for (image of images){
			image.style.border = 0;
		}
		el.style.border = "3px solid red";

	}

	function S_H1(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='1911-1';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 葉山 庭付きゲストハウス';
	}
	
	function S_H2(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='1815';
		document.getElementById('litecheckout_s_address_2').value='S-H2.海風';
	}
	
	function S_H3(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='2171-2';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 葉山 サーファーズログハウス';
	}
	
	function S_H4(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400112';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町堀内';
		document.getElementById('litecheckout_s_address').value='2171-2';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 葉山 囲炉裏付古民家ゲストハウス';
	}
	function S_H5(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400111';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='三浦郡葉山町一色';
		document.getElementById('litecheckout_s_address').value='1432-2';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 葉山 GUEST HOUSE';
	}
	function S_H6(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2400105';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市秋谷';
		document.getElementById('litecheckout_s_address').value='4290';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 葉山 OCEAN VIEW HOUSE';
	}
	function S_Y1(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2380041';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市本町';
		document.getElementById('litecheckout_s_address').value='1-6';
		document.getElementById('litecheckout_s_address_2').value='S-Y1.第6  杉崎様';
	}
	function S_Y2(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2380041';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市本町';
		document.getElementById('litecheckout_s_address').value='1-9';
		document.getElementById('litecheckout_s_address_2').value='S-Y2.第1ルームA  杉崎様';
	}
	function S_Y3(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2380041';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市本町';
		document.getElementById('litecheckout_s_address').value='1-9';
		document.getElementById('litecheckout_s_address_2').value='S-Y3.第1ルームB  杉崎様';
	}
	function S_Y4(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2380012';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市安浦';
		document.getElementById('litecheckout_s_address').value='1-20-3';
		document.getElementById('litecheckout_s_address_2').value='S-Y4.県立103  杉崎様';
	}
	function S_Y5(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2380012';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='横須賀市安浦';
		document.getElementById('litecheckout_s_address').value='1-20-3';
		document.getElementById('litecheckout_s_address_2').value='S-Y5.県立104  杉崎様';
	}
	function S_Z1(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2490005';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='逗子市桜山';
		document.getElementById('litecheckout_s_address').value='9-1-14';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 逗子ビーチハウス';
	}
	function S_Z2(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2490006';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='逗子市逗子';
		document.getElementById('litecheckout_s_address').value='1-3-23';
		document.getElementById('litecheckout_s_address_2').value='GLOCE 逗子ワーケーションハウス「なぎさ」';
	}
	function S_Z3(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2490005';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='逗子市桜山';
		document.getElementById('litecheckout_s_address').value='9-1-15';
		document.getElementById('litecheckout_s_address_2').value='逗子 NAGISA HOUSE';
	}
	function S_Z4(el) {
		reset_border(el);
		document.getElementById('litecheckout_s_zipcode').value='2490008';
		document.getElementById('litecheckout_state').value='神奈川県';
		document.getElementById('litecheckout_city').value='逗子市小坪';
		document.getElementById('litecheckout_s_address').value='5-10-8';
		document.getElementById('litecheckout_s_address_2').value='ベーグル屋企画の民泊「ハルちゃん」';
	}
<?php echo '</script'; ?>
><?php }} ?>
