{* $Id: paygent_cctkn.tpl by takahashi from cs-cart.jp 2017 *}

{script src="js/lib/creditcardvalidator_jp/jquery.numeric.min.js"}
{script src="js/lib/creditcardvalidator_jp/jquery.creditCardValidator.js"}
<style>
    .ty-cc-icons {
        bottom: 38px;
    }
</style>
{if $card_id}
    {assign var="id_suffix" value="`$card_id`"}
{else}
    {assign var="id_suffix" value=""}
{/if}

<div class="clearfix">
    <div class="ty-credit-card">
        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_number_{$id_suffix}" class="ty-control-group__title cm-required cm-cc-number cc-number_{$id_suffix} cm-cc-number-check-length-jp cc-numeric">{__("card_number")}</label>
            <input size="35" type="tel" id="credit_card_number_{$id_suffix}" data-name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off cc-numeric cc-henkan" />
            <ul class="ty-cc-icons cm-cc-icons cc-icons_{$id_suffix}">
                <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-jcb"><span class="ty-cc-icons__icon jcb">&nbsp;</span></li>
            </ul>
        </div>

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_month_{$id_suffix}" class="cm-required ty-control-group__title cm-cc-date cc-date_{$id_suffix} cm-cc-exp-month cm-cc-exp-month-jp">{__("valid_thru")}</label>
            <label for="credit_card_year_{$id_suffix}" class="cm-cc-date cm-cc-exp-year cc-year_{$id_suffix} cm-cc-exp-year-jp hidden"></label>
            <input type="tel" id="credit_card_month_{$id_suffix}" data-name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short cc-numeric cc-henkan cm-autocomplete-off" />&nbsp;&nbsp;/&nbsp;&nbsp;
            <input type="tel" id="credit_card_year_{$id_suffix}"  data-name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short cc-numeric cc-henkan cm-autocomplete-off" />&nbsp;
        </div>

        <input type='hidden' value='' id='token' name=payment_info[token] />
        <input type='hidden' value='' id='errorCode' name=payment_info[errorCd] />
        <input type='hidden' value='' id='errorMsg' name=payment_info[errorMsg] />

        {if $payment_method.processor_params.use_cvv == 'true'}
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_cvv2_{$id_suffix}" class="ty-control-group__title cm-required cm-integer cm-autocomplete-off">{__("jp_paygent_security_code")}</label>
                <input type="tel" id="credit_card_cvv2_{$id_suffix}" data-name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 ty-credit-card__cvv-field-input cm-autocomplete-off" />

                <div class="ty-cvv2-about">
                    <span class="ty-cvv2-about__title">{__("jp_paygent_what_is_security_code")}</span>
                    <div class="ty-cvv2-about__note">

                        <div class="ty-cvv2-about__info mb30 clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="{$images_dir}/visa_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title">{__("visa_card_discover")}</h5>
                                <p>{__("credit_card_info")}</p>
                            </div>
                        </div>
                        <div class="ty-cvv2-about__info clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="{$images_dir}/express_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title">{__("american_express")}</h5>
                                <p>{__("american_express_info")}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/if}

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="jp_cc_method" class="ty-control-group__title cm-required">{__('jp_cc_method')}:</label>
            <select id="jp_cc_method" name="payment_info[jp_cc_method]" onchange="fn_check_pygnt_cc_payment_type(this.value);">
                {if $payment_method.processor_params.pygnt_method.10 == 'true'}
                    <option value="10">{__("jp_cc_onetime")}</option>
                {/if}
                {if $payment_method.processor_params.pygnt_method.61 == 'true'}
                    <option value="61">{__("jp_cc_installment")}</option>
                {/if}
                {if $payment_method.processor_params.pygnt_method.23 == 'true'}
                    <option value="23">{__("jp_paygent_cc_bonus")}</option>
                {/if}
                {if $payment_method.processor_params.pygnt_method.80 == 'true'}
                    <option value="80">{__("jp_cc_revo")}</option>
                {/if}
            </select>
        </div>

        {if $payment_method.processor_params.pygnt_method.61 == 'true'}
        <div class="ty-credit-card__control-group ty-control-group hidden" id="display_pygnt_cc_split_count">
            <label for="jp_cc_installment_times" class="ty-control-group__title cm-required">{__("jp_cc_installment_times")}:</label>
            <select id="jp_cc_installment_times" name="payment_info[jp_cc_installment_times]">
                {foreach from=$payment_method.processor_params.split_count item=split_count key=split_count_key name="split_counts"}
                    {if $payment_method.processor_params.split_count.$split_count_key == 'true'}
                        <option value="{$split_count_key}">{$split_count_key}{__("jp_paytimes_unit")}</option>
                    {/if}
                {/foreach}
            </select>
        </div>
        {/if}

        {if $payment_method.processor_params.register_card_info == 'true' && $auth.user_id && $auth.user_id > 0}
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="register_card_info" class="ty-control-group__title cm-required">{__("jp_paygent_register_card_info_use")}</label>
                <p>
                    <input type="radio" name="payment_info[register_card_info]" id="register_yes" value="true" checked="checked" class="radio" />{__("yes")}
                    &nbsp;&nbsp;
                    <input type="radio" name="payment_info[register_card_info]" id="register_no" value="false" class="radio" />{__("no")}
                </p>
            </div>
        {/if}
    </div>
</div>

<script>
    var checkoutForm = $('#jp_payments_form_id_{$tab_id}');

    (function(_, $) {
        var ccFormId = '{$id_suffix}';
        var ccBrand = '';

        $(function () {
            //??????????????????
            $(".cc-numeric").numeric({
                negative: false
            });
        });


        //?????????????????????
        $('.cc-henkan').change(function(){
            var icons           = $('.cc-icons_' + ccFormId + ' li');
            var ccNumber        = $(".cc-number_" + ccFormId);
            var ccNumberInput   = $("#" + ccNumber.attr("for"));

            var text  = $(this).val();
            var hen = text.replace(/[???-??????-??????-???]/g,function(s){
                return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
            });

            hen = hen.replace(/[^0-9]/g, "");
            $(this).val(hen);

            ccNumberInput.validateCreditCard(function(result) {
                if (result.card_type) {
                    icons.removeClass('active');
                    icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');
                }
            });
        });


        $.ceEvent('on', 'ce.commoninit', function() {

            // ???????????????????????????????????????
            if(document.getElementById('litecheckout_payments_form')){
                checkoutForm = $('#litecheckout_payments_form');
            }
            checkoutForm.off('submit', submitHandler);
            checkoutForm.on('submit', submitHandler);

            var icons           = $('.cc-icons_' + ccFormId + ' li');
            var ccNumber        = $(".cc-number_" + ccFormId);
            var ccNumberInput   = $("#" + ccNumber.attr("for"));
            var ccMax = 0;//?????????????????????????????????
            var ccCv2           = $(".cc-cvv2_" + ccFormId);

            //????????????????????????????????????????????????
            if ($(ccNumberInput).is(':visible')) {
                ccNumberInput.validateCreditCard(function(result) {
                    icons.removeClass('active');
                    //?????????????????????
                    if (result.card_type) {
                        var userInput = ccNumberInput.val();
                        var userInputLenght = userInput.length;
                        ccBrand = result.card_type.name;
                        icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');

                        if(result.card_type.name == 'visa') {
                            ccMax = result.card_type.valid_length[3];//?????????
                        }else{
                            ccMax = result.card_type.valid_length[0];//?????????
                        }

                        if(userInputLenght >= ccMax){
                            userInput = userInput.substring(0, ccMax);//????????????????????????
                            ccNumberInput.val(userInput);	//??????????????????????????????????????????
                        }

                        if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                            ccCv2.removeClass("cm-required");
                        } else {
                            ccCv2.addClass("cm-required");
                        }
                    }
                });
            }

            fn_check_pygnt_cc_payment_type($('#jp_cc_method').val());
        });


        //????????????????????????????????? YY???YY??????????????????????????????
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-cc-exp-year-jp',
            message: _.tr('error_validator_cc_exp_jp'),
            func: function(id) {
                var input = $('#' + id);
                var flag = false;//RETURN

                var yy_val = input.val();
                var mm_val = $('#credit_card_month_{$id_suffix}').val();

                if(yy_val.length == 2 && mm_val.length == 2){
                    flag = check_exp_date(yy_val, mm_val);
                }
                return flag;
            }
        });



        //???????????????????????????
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-cc-number-check-length-jp',
            message: _.tr('error_validator_cc_check_length_jp'),
            func: function(id) {
                var input = $('#' + id);
                var flag = false;//RETURN
                var valid_length = 16;
                $(input).validateCreditCard(function(result) {
                    if (result.card_type) {
                        //??????
                        if(result.card_type.name == 'amex'){
                            valid_length = 15;
                        }else if(result.card_type.name == 'diners_club_international') {
                            valid_length = 14;
                        }

                        if(input.val().length == valid_length){
                            flag = true;
                        }else{
                            flag = false;
                        }
                    }
                });
				if(flag){
                    $('.ty-cc-icons').css('bottom', '38px');
                }
                else{
                    $('.ty-cc-icons').css('bottom', '64px');
                }
                return flag;
            }
        });
    })(Tygh, Tygh.$);

    // ???????????????????????????????????????
    var isSubmit = false;

    // ????????????????????????????????????submit????????????????????????
    function submitHandler(event) {
        // ???????????????????????????????????????
        if(!document.getElementById('credit_card_number_{$id_suffix}')) {
            return;
        }

        event.preventDefault();

        // ???????????????Validation????????????
        var isFormVal = checkoutForm.ceFormValidator('check');

        var cardNoVal = document.getElementById('credit_card_number_{$id_suffix}').value.replace(/\s+/g, "");
        var cardYearVal = document.getElementById('credit_card_year_{$id_suffix}').value;
        var cardMonthVal = document.getElementById('credit_card_month_{$id_suffix}').value;

        var scCdObj = document.getElementById('credit_card_cvv2_{$id_suffix}');
        var scCdVal = '';

        // ?????????????????????????????????????????????????????????
        if(scCdObj) {
            scCdVal = scCdObj.value;
        }

        // ???????????????Validation???OK?????????
        // ???????????????????????????????????????
        if(isFormVal && !isSubmit){
            isSubmit = true;

            var paygentToken = new PaygentToken(); //PaygentToken???????????????????????????
            paygentToken.createToken(
                '{$addons.paygent.merchant_id}',
                '{$payment_method.processor_params.token_key}',
                {
                    card_number:cardNoVal,
                    expire_year:cardYearVal,
                    expire_month: cardMonthVal,
                    cvc:scCdVal
                },execPurchase //???????????????????????????????????????(??????????????????????????????)
            );
        }
    }

    function execPurchase(response) {

        if (response.result == '0000') { //??????????????????????????????????????????

            /* ???????????????????????????????????????
            document.getElementById('credit_card_number_{$id_suffix}').value = '';
            document.getElementById('credit_card_year_{$id_suffix}').value = '';
            document.getElementById('credit_card_month_{$id_suffix}').value = '';

            var scCdObj = document.getElementById('credit_card_cvv2_{$id_suffix}');
            // ?????????????????????????????????????????????????????????
            if(scCdObj) {
                scCdObj.value = '';
            }
            */

            document.getElementById('token').value = response.tokenizedCardObject.token;

        }
        else  {
            var message_code = response.result;
            var message_text = '??????????????????????????????';

            if(message_code == '1502') {
                message_text = '????????????(??????)???????????????';
            }

            // ????????????????????????????????????????????????
            document.getElementById('errorCode').value = message_code;
            document.getElementById('errorMsg').value = message_text;
        }

        checkoutForm.get(0).submit();
    }

    function fn_check_pygnt_cc_payment_type(payment_type)
    {
        if (payment_type == '61') {
            (function ($) {
                $(document).ready(function() {
                    $('#display_pygnt_cc_split_count').switchAvailability(false);
                });
            })(jQuery);
        } else {
            (function ($) {
                $(document).ready(function() {
                    $('#display_pygnt_cc_split_count').switchAvailability(true);
                });
            })(jQuery);
        }
    }

    //??????YYMM
    function get_now_yymm() {
        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var yy = y.toString().slice(-2);
        var mm = ("0" + m).slice(-2);

        return yy + mm;
    }

    //????????????????????????????????????
    function check_exp_date(yy, mm) {
        var yymm_val = yy + mm;
        var now_yymm = get_now_yymm();
        //var now_mm = get_now_yymm("mm");
        if(mm < 13 && yymm_val >= now_yymm){
            return true;
        }else{
            return false;
        }
        return true;
    }
</script>

