{* Modified by tommy from cs-cart.jp 2017 *}

{assign var="id" value=$id|default:"resend_code"}

{capture name="login"}
    <form name="{$id}_form" action="{""|fn_url}" method="post">
        <input type="hidden" name="return_url" value="{$smarty.request.return_url|default:$config.current_url}" />
        <input type="hidden" name="redirect_url" value="{$redirect_url|default:$config.current_url}" />

        <div class="ty-control-group">
            <label for="login_{$id}" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email">{__("email")}</label>
            <input type="text" id="login_{$id}" name="user_email" size="30" value="{$config.demo_username}" class="ty-login__input cm-focus" />
        </div>

        {include file="common/image_verification.tpl" option="login" align="left"}

        <div class="buttons-container clearfix">
            <div class="ty-float-right">
                {include file="buttons/button.tpl" but_text=__("resend_key") but_meta="ty-btn__primary" but_role="submit" but_name="dispatch[profiles.resend]"}
            </div>
        </div>
    </form>
{/capture}

<div class="ty-login">
    {$smarty.capture.login nofilter}
</div>

{capture name="mainbox_title"}{__("resend_verification_key")}{/capture}