{* Modified by tommy from cs-cart.jp 2017 *}

{if $completed_steps.step_two}
    <div class="ty-order-info" id="checkout_order_info_{$block.snapping_id}">
        {assign var="profile_fields" value="I"|fn_get_profile_fields}
        {assign var="jp_company_country" value=$settings.Company.company_country|fn_get_country_name}
        {if $profile_fields.B}
            <h4 class="ty-order-info__title">{__("billing_address")}:</h4>

            <ul id="tygh_billing_adress" class="ty-order-info__profile-field clearfix">
                {foreach from=$profile_fields.B item="field"}
                    {assign var="value" value=$cart.user_data|fn_get_profile_field_value:$field}
                    {if $value && $field.class != 'first-name-kana' && $field.class != 'last-name-kana'}
                        {if $field.class != 'billing-country' || $value != $jp_company_country}
                            <li class="ty-order-info__profile-field-item {$field.field_name|replace:"_":"-"}">{$value}{if $field.class == 'billing-last-name'} {__("dear")}{/if}</li>
                        {/if}
                    {/if}
                {/foreach}
            </ul>

            <hr class="shipping-adress__delim" />
        {/if}

        {if $profile_fields.S}
            <h4 class="ty-order-info__title">{__("shipping_address")}:</h4>
            <ul id="tygh_shipping_adress" class="ty-order-info__profile-field clearfix">
                {foreach from=$profile_fields.S item="field"}
                    {assign var="value" value=$cart.user_data|fn_get_profile_field_value:$field}
                    {if $value && $field.class != 'first-name-kana' && $field.class != 'last-name-kana'}
                        {if $field.class != 'shipping-country' || $value != $jp_company_country}
                            <li class="ty-order-info__profile-field-item {$field.field_name|replace:"_":"-"}">{$value}{if $field.class == 'shipping-last-name'} {__("dear")}{/if}</li>
                        {/if}
                    {/if}
                {/foreach}
            </ul>
            <hr class="shipping-adress__delim" />
        {/if}

        {if !$cart.shipping_failed && !empty($cart.chosen_shipping) && $cart.shipping_required}
            <h4>{__("shipping_method")}:</h4>
            <ul id="tygh_shipping_method">
                {foreach from=$cart.chosen_shipping key="group_key" item="shipping_id"}
                    <li>
                    {hook name="checkout:shipping_method_info"}
                        {$product_groups[$group_key].shippings[$shipping_id].shipping}
                    {/hook}
                    </li>
                {/foreach}
            </ul>
        {/if}
    <!--checkout_order_info_{$block.snapping_id}--></div>
{/if}
{assign var="block_wrap" value="checkout_order_info_`$block.snapping_id`_wrap" scope="parent"}
