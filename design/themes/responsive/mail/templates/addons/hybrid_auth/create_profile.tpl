{* Modified by tommy from cs-cart.jp 2017 *}

{include file="common/letter_header.tpl"}
{if $smarty.const.CART_LANGUAGE == "ja"}
{__("customer")}<br>
{else}
{__("dear")} {if $user_data.user_name}{$user_data.user_name}{else}{$user_data.user_type|fn_get_user_type_description|lower}{/if},<br>
{/if}
<br>
{__("hybrid_auth.password_generated")}: {$user_data.password}<br>
<br />

{__("hybrid_auth.change_password")}: <br>
<a href="{$url}">{$url|puny_decode}</a>

<br />
{include file="common/letter_footer.tpl"}
