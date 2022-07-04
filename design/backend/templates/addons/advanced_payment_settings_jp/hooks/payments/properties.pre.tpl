{* $Id: properties.pre.tpl by tommy from cs-cart.jp 2013 *}

{if $addons.advanced_payment_settings_jp.jp_enable_min_amount == "Y"}
    <div class="control-group">
        <label class="control-label">{__("jp_advpay_min_amount")}:</label>
        <div class="controls">
            <input id="elm_surcharge_min_amount_{$id}" type="text" name="payment_data[surcharge_min_amount]" value="{$payment_advanced_settings.min_amount}" class="input-text-medium"/> {$currencies.$primary_currency.symbol}
        </div>
    </div>
{/if}
{if $addons.advanced_payment_settings_jp.jp_enable_max_amount == "Y"}
    <div class="control-group">
        <label class="control-label">{__("jp_advpay_max_amount")}:</label>
        <div class="controls">
            <input id="elm_surcharge_max_amount_{$id}" type="text" name="payment_data[surcharge_max_amount]" value="{$payment_advanced_settings.max_amount}" class="input-text-medium"/> {$currencies.$primary_currency.symbol}
        </div>
    </div>
{/if}
{if $addons.advanced_payment_settings_jp.jp_enable_charge_by_subtotal == "Y"}
    <div class="control-group">
        <label class="control-label">{__("jp_advpay_charges")}:</label>
        <div class="controls">
            <input id="elm_paycharge_by_subtotal_{$id}" type="text" name="payment_data[charges_by_subtotal]" value="{$payment_advanced_settings.charges_by_subtotal}" class="input-text-large main-input" />
            <br />{__("jp_advpay_charges_instruction")}
        </div>
    </div>
{/if}
