{* $Id: smartlink_ccreg.tpl by tommy from cs-cart.jp 2014 *}

<div class="clearfix">

    <div class="credit-card">
        {if $payment_method.processor_params.use_cvv == 'true'}
            <div class="control-group cvv-field">
                <label for="cc_cvv2{$id_suffix}" class="control-label cm-integer cm-autocomplete-off">{__("jp_sln_security_code")}</label>
                <div class="controls">
                    <input id="cc_cvv2{$id_suffix}" type="text" name="payment_info[cvv2]" value="" size="4" maxlength="4"/>
                    <div class="cvv2">{__("jp_sln_cc_what_is_security_code")}
                        <div class="popover fade bottom in">
                            <div class="arrow"></div>
                            <h3 class="popover-title">{__("jp_sln_cc_what_is_security_code")}</h3>
                            <div class="popover-content">
                                <div class="cvv2-note">
                                    <div class="card-info clearfix">
                                        <div class="cards-images">
                                            <img src="{$images_dir}/visa_cvv.png" border="0" alt="" />
                                        </div>
                                        <div class="cards-description">
                                            <strong>{__("visa_card_discover")}</strong>
                                            <p>{__("credit_card_info")}</p>
                                        </div>
                                    </div>
                                    <div class="card-info ax clearfix">
                                        <div class="cards-images">
                                            <img src="{$images_dir}/express_cvv.png" border="0" alt="" />
                                        </div>
                                        <div class="cards-description">
                                            <strong>{__("american_express")}</strong>
                                            <p>{__("american_express_info")}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div
                </div>
            </div>
        {/if}

        <div class="control-group">
            <label for="jp_cc_method" class="control-label">{__("jp_cc_method")}</label>
            <div class="controls">
                <select id="jp_cc_method" name="payment_info[jp_cc_method]" onchange="fn_check_sln_ccreg_payment_type(this.value);">

                    {if $payment_method.processor_params.paymode.10 == 'true'}
                        <option value="10">{__("jp_cc_onetime")}</option>
                    {/if}
                    {if $payment_method.processor_params.paymode.61 == 'true'}
                        <option value="61">{__("jp_cc_installment")}</option>
                    {/if}
                    {if $payment_method.processor_params.paymode.80 == 'true'}
                        <option value="80">{__("jp_cc_bonus_onetime")}</option>
                    {/if}
                    {if $payment_method.processor_params.paymode.88 == 'true'}
                        <option value="88">{__("jp_cc_revo")}</option>
                    {/if}
                </select>
            </div>
        </div>

        <div class="control-group hidden" id="display_sln_cc_split_count">
            <label for="jp_cc_installment_times" class="control-label">{__("jp_cc_installment_times")}</label>
            <div class="controls">
                <select id="jp_cc_installment_times" name="payment_info[jp_cc_installment_times]">
                    {foreach from=$payment_method.processor_params.incount item=incount key=incount_key name="incounts"}
                        {if $payment_method.processor_params.incount.$incount_key == 'true'}
                            <option value="{$incount_key}">{$incount_key}{__("jp_paytimes_unit")}</option>
                        {/if}
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</div>


<script>
    function fn_check_sln_ccreg_payment_type(payment_type)
    {
        if (payment_type == '61') {
            (function ($) {
                $(document).ready(function() {
                    $('#display_sln_cc_split_count').switchAvailability(false);
                });
            })(jQuery);
        } else {
            (function ($) {
                $(document).ready(function() {
                    $('#display_sln_cc_split_count').switchAvailability(true);
                });
            })(jQuery);
        }
    }
</script>
