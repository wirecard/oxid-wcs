[{if $sPaymentID == "qcs_pbx"}]
[{ assign var="qmoreCheckoutSeamless_paymentdata_stored" value=$oView->hasQMoreCheckoutSeamlessPaymentData($sPaymentID) }]
[{ assign var="qmoreCheckoutSeamless_paymentdata" value=$oView->getQMoreCheckoutSeamlessPaymentData($sPaymentID) }]
[{oxscript include=$oView->getWirecardStorageJsUrl() priority=1)}]
[{oxscript include=$oViewConf->getModuleUrl('qmorecheckoutseamless','out/src/qenta.js') priority=10}]
<dl>
    <dt>
        <input type="hidden" id="[{$sPaymentID}]_stored" value="[{ $qmoreCheckoutSeamless_paymentdata_stored|intval }]" />
        <input id="payment_[{$sPaymentID}]" type="radio" name="paymentid" value="[{$sPaymentID}]" [{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]checked[{/if}]>
        <label for="payment_[{$sPaymentID}]">[{$oView->getQcsPaymentLogo($sPaymentID)}]<b>[{ $oView->getQcsRawPaymentDesc($paymentmethod->oxpayments__oxdesc->value)}]</b></label>
        [{if $paymentmethod->getPrice()}]
            [{assign var="oPaymentPrice" value=$paymentmethod->getPrice() }]
            [{if $oViewConf->isFunctionalityEnabled('blShowVATForPayCharge') }]
                ( [{oxprice price=$oPaymentPrice->getNettoPrice() currency=$currency}]
                [{if $oPaymentPrice->getVatValue() > 0}]
                    [{ oxmultilang ident="PLUS_VAT" }] [{oxprice price=$oPaymentPrice->getVatValue() currency=$currency }]
                [{/if}])
                [{else}]
                    ([{oxprice price=$oPaymentPrice->getBruttoPrice() currency=$currency}])
                [{/if}]
            [{/if}]

    </dt>
    <dd class="[{if $oView->getCheckedPaymentId() == $paymentmethod->oxpayments__oxid->value}]activePayment[{/if}]">
        <ul class="form">
            <li>
                <label>[{ oxmultilang ident="QMORECHECKOUTSEAMLESS_PHONE_NUMBER" }]</label>
                <input type="text" class="js-oxValidate js-oxValidate_notEmpty" size="20" maxlength="64" name="pbx_payerPayboxNumber" autocomplete="off" value="[{ $qmoreCheckoutSeamless_paymentdata.paybox_payerPayboxNumber }]">
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty">[{ oxmultilang ident="ERROR_MESSAGE_INPUT_NOTALLFIELDS" }]</span>
                </p>
            </li>

        </ul>

        [{block name="checkout_payment_longdesc"}]
        [{if $paymentmethod->oxpayments__oxlongdesc->value|trim}]
            <div class="desc">
                [{ $paymentmethod->oxpayments__oxlongdesc->getRawValue()}]
            </div>
        [{/if}]
        [{/block}]
    </dd>
</dl>
    [{/if}]