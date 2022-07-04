{if !$auth.user_id}
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="{"profiles.resend"|fn_url}" rel="nofollow" >{__("resend_verification_key")}</a></li>
{/if}