{* $Id: smbc_rb.tpl by tommy from cs-cart.jp 2014 *}

{script src="js/lib/inputmask/jquery.inputmask.min.js"}
{script src="js/lib/creditcardvalidator/jquery.creditCardValidator.js"}

<div class="clearfix">
    <div class="ty-credit-card">
        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_number_{$id_suffix}" class="ty-control-group__title cm-required">{__("card_number")}</label>
            <input size="35" type="text" id="credit_card_number_{$id_suffix}" name="payment_info[card_number]" value="" class="cm-cc-number ty-credit-card__input cm-autocomplete-off" />
            <ul class="ty-cc-icons cm-cc-icons">
                <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
            </ul>
        </div>

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_month_{$id_suffix}" class="ty-control-group__title cm-required">{__("valid_thru")}</label>
            <label for="credit_card_year_{$id_suffix}" class="cm-required hidden"></label>
            <input type="text" id="credit_card_month_{$id_suffix}" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="cm-cc-exp-month ty-credit-card__input-short " />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_{$id_suffix}"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="cm-cc-exp-year ty-credit-card__input-short" />&nbsp;
        </div>
    </div>
</div>

<script>
    (function(_, $) {
        $.ceEvent('on', 'ce.commoninit', function() {

            var icons = $('.cm-cc-icons li');

            if($(".cm-cc-number").data('rawMaskFn') == undefined) {

                $(".cm-cc-number").inputmask("9999 9999 9999 9[999]", {
                    placeholder: ' '
                });

                $(".cm-cc-cvv2").inputmask("999[9]", {
                    placeholder: ''
                });

                $(".cm-cc-exp-month, .cm-cc-exp-year").inputmask("99", {
                    placeholder: ''
                });

                $('.cm-cc-number').validateCreditCard(function(result) {
                    icons.removeClass('active');
                    if (result.card_type) {
                        icons.filter('.cm-cc-' + result.card_type.name).addClass('active');

                        if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                            $('.cm-cc-cvv2').parent('label').removeClass('cm-required');
                        } else {
                            $('.cm-cc-cvv2').parent('label').addClass('cm-required');
                        }
                    }
                });

            }
        });
    })(Tygh, Tygh.$);
</script>