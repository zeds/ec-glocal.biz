{* $Id: krnkwc_cctkn.tpl by takahashi from cs-cart.jp 2017 *}

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
            <input size="35" type="tel" id="credit_card_number_{$id_suffix}" data-name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off cc-numeric cc-henkan"/>
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

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_name_{$id_suffix}" class="ty-control-group__title cm-required">{__("cardholder_name")}</label>
            <input size="35" type="text" id="credit_card_name_{$id_suffix}" data-name="payment_info[card_owner]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase cm-autocomplete-off" />
        </div>

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_cvv2_{$id_suffix}" class="ty-control-group__title cm-required cm-integer cm-autocomplete-off">{__("jp_kuroneko_webcollect_security_code")}</label>
            <input type="tel" id="credit_card_cvv2_{$id_suffix}" data-name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 ty-credit-card__cvv-field-input cm-autocomplete-off" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title">{__("jp_kuroneko_webcollect_what_is_security_code")}</span>
                <div class="ty-cvv2-about__note">

                    <div class="ty-cvv2-about__info mb30 clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="{$images_dir}/visa_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title">{__("jp_kuroneko_webcollect_except_amex")}</h5>
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

        <input type='hidden' value='' id='token' name=payment_info[token] />
        <input type='hidden' value='' id='card_code_api' name=payment_info[card_code_api] />
        <input type='hidden' value='' id='authKey' name=payment_info[authKey] />
        <input type='hidden' value='' id='errorCode' name=payment_info[errorCd] />
        <input type='hidden' value='' id='errorMsg' name=payment_info[errorMsg] />

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="pay_way" class="ty-control-group__title cm-required">{__('jp_cc_method')}:</label>
            <select id="pay_way" name="payment_info[pay_way]" onchange="fn_check_krnkwc_cc_payment_type(this.value);">
                {if $payment_method.processor_params.pay_way.1 == 'true'}
                    <option value="1">{__("jp_cc_onetime")}</option>
                {/if}
                {if $payment_method.processor_params.pay_way.2 == 'true'}
                    <option value="2">{__("jp_cc_installment")}</option>
                {/if}
                {if $payment_method.processor_params.pay_way.0 == 'true'}
                    <option value="0">{__("jp_cc_revo")}</option>
                {/if}
            </select>
        </div>

        {if $payment_method.processor_params.pay_way.2 == 'true'}
        <div class="ty-credit-card__control-group ty-control-group hidden" id="display_krnkwc_cc_split_count">
            <label for="jp_cc_installment_times" class="ty-control-group__title cm-required">{__('jp_cc_installment_times')}:</label>
            <select id="jp_cc_installment_times" name="payment_info[jp_cc_installment_times]">
                {foreach from=$payment_method.processor_params.paytimes item=paytimes key=paytimes_key name="paytimess"}
                    {if $payment_method.processor_params.paytimes.$paytimes_key == 'true'}
                        <option value="{$paytimes_key}">{$paytimes_key}{__("jp_paytimes_unit")}</option>
                    {/if}
                {/foreach}
            </select>
        </div>
        {/if}

        {if $payment_method.processor_params.use_member_id == 'true' && $auth.user_id && $auth.user_id > 0}
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="use_uid" class="ty-control-group__title cm-required">{__("jp_kuroneko_webcollect_cc_register_card_info_use")}</label>
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

            fn_check_krnkwc_cc_payment_type($('#jp_cc_method').val());
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
                //????????????????????????????????????TRUE
                {if $payment_method.processor_params.mode == "test"}
                flag = true;
                {/if}
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

        var cardNoObj = document.getElementById('credit_card_number_{$id_suffix}');
        var cardYearObj = document.getElementById('credit_card_year_{$id_suffix}');
        var cardMonthObj = document.getElementById('credit_card_month_{$id_suffix}');
        var cardOwnerObj = document.getElementById('credit_card_name_{$id_suffix}');
        var cvvObj = document.getElementById('credit_card_cvv2_{$id_suffix}');
        var ccregObj = document.getElementById('register_yes');
        var tokenObj = document.getElementById('token');
        var cardCdAPIObj = document.getElementById('card_code_api');
        var authKeyObj = document.getElementById('authKey');
        var errCdObj = document.getElementById('errorCode');
        var errMsgObj = document.getElementById('errorMsg');

        // ???????????????????????????????????????????????????
        var callbackSuccess = function(response) {
            //????????????????????????(API ???)????????????
            cardCdAPIObj.value = get_card_code_api(cardNoObj.value.replace(/\s+/g, ""));

            /* ???????????????????????????????????????
            // ?????????????????????????????????????????????????????????????????????????????????
            cardNoObj.value = "";
            cardYearObj.value = "";
            cardMonthObj.value = "";
            cardOwnerObj.value = "";
            cardOwnerObj.value = "";
            cvvObj.value = "";
            */

            // form ??????????????????????????????????????????
            tokenObj.value = response.token;

            // form ????????????????????????
            checkoutForm.get(0).submit();
        };

        // ???????????????????????????????????????????????????
        var callbackFailure = function(response) {
        //????????????????????????
            var errorInfo = response.errorInfo;

            var errCdValue = '';
            var errMsgValue = '';

            //??????????????????????????????????????????
            for (var i = 0; i<errorInfo.length; i++) {
                //????????????????????????
                if(i > 0){
                    errCdValue += "|";
                    errMsgValue += "|";
                }

                errCdValue += errorInfo[i].errorCode;
                errMsgValue += errorInfo[i].errorMsg;
            }

            errCdObj.value = errCdValue;
            errMsgObj.value = errMsgValue;

            // form ????????????????????????
            checkoutForm.get(0).submit();
        };

        // ???????????????Validation????????????
        var isFormVal = checkoutForm.ceFormValidator('check');

        // ???????????????Validation???OK?????????
        // ???????????????????????????????????????
        if(isFormVal && !isSubmit) {
            isSubmit = true;

            // ??????????????? ??????????????????
            var pOptServDiv = '00';
            if(ccregObj){
                if(ccregObj.checked){
                    pOptServDiv = '01';
                }
            }

            // ???????????? (authFlg) ?????????
            // 3D ????????????
            var threeDsecFlg = {$payment_method.processor_params.tdflag};
            // 3D ????????????????????????????????????????????????????????????
            var pAuthFlg = "2";
            // 3D ????????????????????????????????????????????????????????????
            if (threeDsecFlg) {
                pAuthFlg = "3";
            }

            // ???????????????????????????
            var pMemberID = "{$auth.user_id}";
            var pAuthKey = gererate_auth_key();
            authKeyObj.value = pAuthKey;
            var accessKey = "{$addons.kuroneko_webcollect.access_key}";
            var key = pMemberID + pAuthKey + accessKey + pAuthFlg;
            var shaObj = new jsSHA(key, "ASCII");
            var pCheckSum = shaObj.getHash("SHA-256", "HEX");

            // ??????????????????API ????????????????????????
            var createTokenInfo = {
                traderCode: "{$addons.kuroneko_webcollect.trader_code}",
                authDiv: pAuthFlg,
                optServDiv: pOptServDiv,
                memberId: pMemberID,
                authKey: pAuthKey,
                checkSum: pCheckSum,
                cardNo: cardNoObj.value.replace(/\s+/g, ""),
                cardOwner: cardOwnerObj.value,
                cardExp: cardMonthObj.value + cardYearObj.value,
                securityCode: cvvObj.value
            };
            // ????????????????????????????????????JavaScript ???????????????????????????????????????????????????
            WebcollectTokenLib.createToken(createTokenInfo, callbackSuccess, callbackFailure);
        }
    }

    // ???????????????????????? (API ???) ?????????
    function get_card_code_api(card_no) {
        // ????????????????????????12????????????
        var twelve_digit = card_no.substr(0 , 12);

        // ????????????????????????????????????
        if(twelve_digit >= '000000000000' && twelve_digit <= '000000000020' ){
            // VISA?????????????????????
            return 9;
        }

        {literal}
        // VISA
        if( card_no.match(/(^4[0-9]{12}(?:[0-9]{3})?$)/) ){
            return 9;
            // Master
        }else if( card_no.match(/(^5[1-5][0-9]{14}$)/) ) {
            return 10;
            // Amex
        }else if( card_no.match(/(^3[47][0-9]{13}$)/) ) {
            return 12;
            // Diners
        }else if( card_no.match(/(^3(?:0[0-5]|[68][0-9])[0-9]{11}$)/) ) {
            return 2;
            // JCB
        }else if( card_no.match(/(^(?:2131|1800|35\d{3})\d{11}$)/) ) {
            return 3;
            // ?????????
        }else{
            return 0;
        }
        {/literal}
    }

    // ?????????????????????
    function gererate_auth_key()
    {
        // ??????????????????????????????
        var length = 8;

        {literal}
        // ???????????????
        var ransu = function(n){
            var str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
                + '!#$%^&*-+_=(){}@;:?/';
            str = str.split('');
            var s = '';
            for (var i = 0; i < n; i++) {
                s += str[Math.floor(Math.random() * str.length)];
            }
            return s;
        };

        var code = '';
        var i=0;

        while (code=ransu(length)) {
            if(code.match(/^(?=.*?[a-z])(?=.*?\d)(?=.*?[!-\/:-@[-`{-~])[!-~]{8,100}$/i)){
                break;
            }
          i++;
        }
        {/literal}

        return code;
    }

    function fn_check_krnkwc_cc_payment_type(payment_type)
    {
        if (payment_type == '2') {
            (function ($) {
                $(document).ready(function() {
                    $('#display_krnkwc_cc_split_count').switchAvailability(false);
                });
            })(jQuery);
        } else {
            (function ($) {
                $(document).ready(function() {
                    $('#display_krnkwc_cc_split_count').switchAvailability(true);
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
