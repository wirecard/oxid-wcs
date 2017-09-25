<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Wirecard Central Eastern Europe GmbH
 * (abbreviated to Wirecard CEE) and are explicitly not part of the Wirecard CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Wirecard CEE does not guarantee their full
 * functionality neither does Wirecard CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Wirecard CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

$sLangName = "English";

$aLang = array(
    "charset" => "UTF-8",
    "wirecardcheckoutseamless" => "Wirecard Checkout Seamless",
    'SHOP_MODULE_GROUP_wcs_params' => 'General Settings',
    'SHOP_MODULE_GROUP_wcs_plugin' => 'Plugin Settings',
    'SHOP_MODULE_GROUP_wcs_risk_settings' => 'Fraud Prevention Suite',
    'SHOP_MODULE_GROUP_wcs_invoice_settings' => 'Invoice Settings',
    'SHOP_MODULE_GROUP_wcs_installment_settings' => 'Installment Settings',
    'SHOP_MODULE_GROUP_wcs_pci_dss' => 'PCI DSS/Credit Card Settings',
    'SHOP_MODULE_sCustomerId' => 'Customer ID',
    'HELP_SHOP_MODULE_sCustomerId' => 'Customer number you received from Wirecard (customerId, i.e. D2#####).<br /><a href="https://guides.wirecard.at/request_parameters#customerid" target="_blank">More information: customerId</a>',
    'SHOP_MODULE_sShopId' => 'Shop ID',
    'HELP_SHOP_MODULE_sShopId' => 'Shop identifier (<a href="https://guides.wirecard.at/request_parameters#shopid" target="_blank">shopId</a>) in case of more than one shop. Please contact our <a href="https://guides.wirecard.at/sales" target="_blank">sales teams</a> to activate this feature.',
    'SHOP_MODULE_sSecret' => 'Secret',
    'HELP_SHOP_MODULE_sSecret' => 'String which you received from Wirecard for signing and validating data to prove their authenticity.<br /><a href="https://guides.wirecard.at/security:start#secret_and_fingerprint" target="_blank">More information: secret</a>',
    'SHOP_MODULE_sPassword' => 'Back-end password',
    'HELP_SHOP_MODULE_sPassword' => 'Password for back-end operations (Toolkit).',
    'SHOP_MODULE_sServiceUrl' => 'URL to imprint page',
    'HELP_SHOP_MODULE_sServiceUrl' => 'URL on the payment page which leads to the imprint page of the online shop.<a href="https://guides.wirecard.at/request_parameters#serviceurl" target="_blank">More information: serviceUrl</a>',
    'SHOP_MODULE_bAutoDeposit' => 'Automated deposit',
    'HELP_SHOP_MODULE_bAutoDeposit' => 'Enabling an automated deposit of payments. <a href="https://guides.wirecard.at/request_parameters#autodeposit" target="_blank">More information</a>. Please contact our <a href="https://guides.wirecard.at/sales" target="_blank">sales teams</a> to activate this feature.',
    'SHOP_MODULE_sIframeCssUrl' => 'Iframe CSS-URL',
    'HELP_SHOP_MODULE_sIframeCssUrl' => 'Entry of a full URL to a CSS file in order to customize the iframe input fields when the "PCI DSS SAQ A Compliance" feature is used. <a href="https://guides.wirecard.at/wcs:pci3_fallback:start#customization_via_css" target="_blank">More information</a>',
    'SHOP_MODULE_sConfirmMail' => 'Notification e-mail',
    'HELP_SHOP_MODULE_sConfirmMail' => 'Receiving notification by e-mail regarding the orders of your consumers if an error occurred in the communication between Wirecard and your online shop. <a href="https://guides.wirecard.at/request_parameters#confirmMail" target="_blank">More information</a>. Please contact our <a href="https://guides.wirecard.at/sales" target="_blank">sales teams</a> to activate this feature.',
    'SHOP_MODULE_bDuplicateRequestCheck' => 'Check for duplicate requests',
    'HELP_SHOP_MODULE_bDuplicateRequestCheck' => 'Checking duplicate requests made by your consumer.<a href="https://guides.wirecard.at/request_parameters#duplicaterequestcheck" target="_blank">More information: duplicateRequestCheck</a>',
    'SHOP_MODULE_sPluginMode' => 'Plugin Mode',
    'SHOP_MODULE_sPluginMode_Demo' => 'Demo',
    'SHOP_MODULE_sPluginMode_Test' => 'Test',
    'SHOP_MODULE_sPluginMode_Live' => 'Production',
    'HELP_SHOP_MODULE_sPluginMode' => 'For integration, select predefined configuration settings or "Production" for live systems.',
    'SHOP_MODULE_bUseIframe' => 'Display page from financial service provides in an iframe',
    'HELP_SHOP_MODULE_bUseIframe' => 'Otherwise your consumer will be forwarded to this page and then redirected to your online shop.',
    'SHOP_MODULE_sDeleteFailedOrCanceledOrders' => 'Delete orders if payment fails or is canceled',
    'HELP_SHOP_MODULE_sDeleteFailedOrCanceledOrders' => 'If enabled, pending orders will be deleted in the order list if payment fails or if payment gets canceled. Note that this setting applies to all Wirecard payment methods.',
    'SHOP_MODULE_bDssSaqAEnable' => 'SAQ A compliance',
    'HELP_SHOP_MODULE_bDssSaqAEnable' => 'Not checked, the stringent SAQ A-EP is applicable. Checked, Wirecard Checkout Seamless is integrated with the "PCI DSS SAQ A Compliance" feature and SAQ A is applicable. <a href="https://guides.wirecard.at/wcs:pci3_fallback:start" target="_blank">More information</a>',
    'SHOP_MODULE_bShowCreditcardCardholder' => 'Display card holder field',
    'HELP_SHOP_MODULE_bShowCreditcardCardholder' => 'Display input field to enter the card holder name in your credit card form during the checkout process.',
    'SHOP_MODULE_bShowCreditcardCvc' => 'Display CVC field',
    'HELP_SHOP_MODULE_bShowCreditcardCvc' => 'Display input field to enter the CVC in your credit card form during the checkout process.',
    'SHOP_MODULE_bShowCreditcardIssueDate' => 'Display issue date field',
    'HELP_SHOP_MODULE_bShowCreditcardIssueDate' => 'Display input field to enter the credit card issue date in your credit card form during the checkout process. Some credit cards do not have an issue date.',
    'SHOP_MODULE_bShowCreditcardIssueNumber' => 'Display issue number field',
    'HELP_SHOP_MODULE_bShowCreditcardIssueNumber' => 'Display input field to enter the credit card issue number in your credit card form during the checkout process. Some credit cards do not have an issue number.',
    'SHOP_MODULE_bSendAdditionalCustomerBilling' => 'Forward consumer billing data',
    'HELP_SHOP_MODULE_bSendAdditionalCustomerBilling' => 'Forwarding billing data about your consumer to the respective financial service provider.',
    'SHOP_MODULE_bSendAdditionalCustomerShipping' => 'Forward consumer shipping data',
    'HELP_SHOP_MODULE_bSendAdditionalCustomerShipping' => 'Forwarding shipping data about your consumer to the respective financial service provider.',
    'SHOP_MODULE_bSendAdditionalBasketData' => 'Forward basket data',
    'HELP_SHOP_MODULE_bSendAdditionalBasketData' => 'Forwarding basket data to the respective financial service provider.',
    'SHOP_MODULE_sShopName' => 'Shop prefix in posting text',
    'HELP_SHOP_MODULE_sShopName' => 'Reference to your online shop on your consumer\'s invoice, limited to 9 characters (used together with the order number to create the parameter).<br /><a href="https://guides.wirecard.at/request_parameters#customerstatement" target="_blank">More information: customerStatement</a>',
    'SHOP_MODULE_sInvoicePayolutionMId' => 'payolution mID',
    'HELP_SHOP_MODULE_sInvoicePayolutionMId' => 'Your payolution merchant ID, non-base64-encoded.',
    'SHOP_MODULE_bInvoiceAllowDifferingAddresses' => 'Billing/shipping address must be identical',
    'SHOP_MODULE_bInvoiceb2bTrustedShopsCheckbox' => 'payolution terms for invoice B2B',
    'SHOP_MODULE_bInvoiceb2cTrustedShopsCheckbox' => 'payolution terms for invoice B2C',
    'SHOP_MODULE_bInstallmentTrustedShopsCheckbox' => 'payolution terms for installment',
    'SHOP_MODULE_sInvoiceProvider' => 'Invoice Provider',
    'SHOP_MODULE_sInvoiceProvider_RATEPAY' => 'Ratepay',
    'SHOP_MODULE_sInvoiceProvider_PAYOLUTION' => 'payolution',
    'SHOP_MODULE_sInvoiceProvider_WIRECARD' => 'Wirecard',
    'SHOP_MODULE_sInstallmentProvider' => 'Installment Provider',
    'SHOP_MODULE_sInstallmentProvider_RATEPAY' => 'Ratepay',
    'SHOP_MODULE_sInstallmentProvider_PAYOLUTION' => 'payolution',
    'SHOP_MODULE_sInstallmentPayolutionMId' => 'payolution mID',
    'HELP_SHOP_MODULE_sInstallmentPayolutionMId' => 'Your payolution merchant ID, non-base64-encoded.',
    'SHOP_MODULE_bInstallmentAllowDifferingAddresses' => 'Billing/shipping address must be identical',
    'SHOP_MODULE_bRiskSuppress' => 'Enable Fraud Prevention Suite',
    'HELP_SHOP_MODULE_bRiskSuppress' => 'Disabling the Fraud Prevention Suite (FPS) for transactions. The FPS needs to be explicitly enabled by our <a href="https://guides.wirecard.at/support" target="_blank">sales teams</a>.<br /><a href="https://guides.wirecard.at/request_parameters#risksuppress" target="_blank">More information: riskSuppress</a>',
    'SHOP_MODULE_sRiskConfigAlias' => 'Risk rule for Fraud Prevention Suite',
    'HELP_SHOP_MODULE_sRiskConfigAlias' => 'Selecting a specific risk rule for the Wirecard Fraud Prevention Suite (FPS). <a href="https://guides.wirecard.at/request_parameters#riskconfigalias" target="_blank">More information: riskConfigAlias</a> <br />Please contact our <a href="https://guides.wirecard.at/support" target="_blank">sales teams</a> to activate this feature.',
    'WIRECARD_CHECKOUT_SEAMLESS_BANCONTACT_MISTERCASH_LABEL' => 'Bancontact',
    'WIRECARD_CHECKOUT_SEAMLESS_CCARD_LABEL' => 'Credit Card',
    'WIRECARD_CHECKOUT_SEAMLESS_CCARD-MOTO_LABEL' => 'Credit Card Mail Order / Telephone Order',
    'WIRECARD_CHECKOUT_SEAMLESS_EKONTO_LABEL' => 'eKonto',
    'WIRECARD_CHECKOUT_SEAMLESS_EPAY_BG_LABEL' => 'ePay.bg',
    'WIRECARD_CHECKOUT_SEAMLESS_EPS_LABEL' => 'Online bank transfer.',
    'WIRECARD_CHECKOUT_SEAMLESS_GIROPAY_LABEL' => 'giropay',
    'WIRECARD_CHECKOUT_SEAMLESS_IDL_LABEL' => 'iDEAL',
    'WIRECARD_CHECKOUT_SEAMLESS_INSTALLMENT_LABEL' => 'Installment',
    'WIRECARD_CHECKOUT_SEAMLESS_INVOICE_B2B_LABEL' => 'Invoice B2B',
    'WIRECARD_CHECKOUT_SEAMLESS_INVOICE_B2C_LABEL' => 'Invoice B2C',
    'WIRECARD_CHECKOUT_SEAMLESS_MONETA_LABEL' => 'moneta.ru',
    'WIRECARD_CHECKOUT_SEAMLESS_PAYPAL_LABEL' => 'PayPal',
    'WIRECARD_CHECKOUT_SEAMLESS_PBX_LABEL' => 'paybox',
    'WIRECARD_CHECKOUT_SEAMLESS_POLI_LABEL' => 'POLi',
    'WIRECARD_CHECKOUT_SEAMLESS_PRZELEWY24_LABEL' => 'Przelewy24',
    'WIRECARD_CHECKOUT_SEAMLESS_PSC_LABEL' => 'paysafecard',
    'WIRECARD_CHECKOUT_SEAMLESS_QUICK_LABEL' => '@Quick',
    'WIRECARD_CHECKOUT_SEAMLESS_SELECT_LABEL' => 'payment selection',
    'WIRECARD_CHECKOUT_SEAMLESS_SEPA-DD_LABEL' => 'SEPA Direct Debit',
    'WIRECARD_CHECKOUT_SEAMLESS_SKRILLWALLET_LABEL' => 'Skrill Digital Wallet',
    'WIRECARD_CHECKOUT_SEAMLESS_SOFORTUEBERWEISUNG_LABEL' => 'Online bank transfer.',
    'WIRECARD_CHECKOUT_SEAMLESS_TATRAPAY_LABEL' => 'TatraPay',
    'WIRECARD_CHECKOUT_SEAMLESS_TRUSTLY_LABEL' => 'Trustly',
    'WIRECARD_CHECKOUT_SEAMLESS_VOUCHER_LABEL' => 'My Voucher',
    'WIRECARD_CHECKOUT_SEAMLESS_TRUSTPAY_LABEL' => 'TrustPay',
    'WIRECARD_CHECKOUT_SEAMLESS_BANCONTACT_MISTERCASH_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_CCARD_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_CCARD-MOTO_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_EKONTO_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_EPAY_BG_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_EPS_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_GIROPAY_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_IDL_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_INSTALLMENT_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_INVOICE_B2B_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_INVOICE_B2C_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_MONETA_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_MPASS_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_PAYPAL_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_PBX_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_POLI_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_PRZELEWY24_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_PSC_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_QUICK_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_SELECT_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_SEPA-DD_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_SKRILLDIRECT_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_SKRILLWALLET_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_SOFORTUEBERWEISUNG_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_TATRAPAY_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_TRUSTLY_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_VOUCHER_DESC' => '',
    'WIRECARD_CHECKOUT_SEAMLESS_TRUSTPAY_DESC' => '',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CONSUMERCOMPANYNAME' => 'Company name of consumer',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AMOUNT' => 'Amount',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CURRENCY' => 'Currency',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_FINANCIALINSTITUTION' => 'Financial institution',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_ORDERNUMBER' => 'Wirecard order number',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYMENTSTATE' => 'Payment state',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_GATEWAYCONTRACTNUMBER' => 'Gateway contract number',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_GATEWAYREFERENCENUMBER' => 'Gateway reference number',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_MASKEDPAN' => 'Credit card masked PAN',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_EXPIRY' => 'Credit card expiration date',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CARDHOLDER' => 'Card holder name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AUTHENTICATED' => 'Authenticated',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERID' => 'PayPal payer ID',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYEREMAIL' => 'PayPal payer e-mail',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERFIRSTNAME' => 'PayPal payer first name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERLASTNAME' => 'PayPal payer last name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSNAME' => 'PayPal payer address name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSCOUNTRY' => 'PayPal payer address country',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSCOUNTRYCODE' => 'PayPal payer country code',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSCITY' => 'PayPal payer address city',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSSTATE' => 'PayPal payer address state',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSSTREET1' => 'PayPal payer address street1',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSSTREET2' => 'PayPal payer address street2',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_PAYPALPAYERADDRESSZIP' => 'PayPal payer address zip',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CONSUMERNAME' => 'iDEAL consumer name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CONSUMERACCOUNTNUMBER' => 'iDEAL consumer account number',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CONSUMERCITY' => 'iDEAL consumer city',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERACCOUNTNUMBER' => 'Online bank transfer. sender account number',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERBANKNUMBER' => 'Online bank transfer. sender bank sorting code',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERBANKNAME' => 'Online bank transfer. sender bank name',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERBIC' => 'Online bank transfer. sender BIC',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERIBAN' => 'Online bank transfer. sender IBAN',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERCOUNTRY' => 'Online bank transfer. sender country',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERCRITERIA' => 'Online bank transfer. sender criteria',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_MANDATEID' => 'SEPA mandate ID',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_MANDATESIGNATUREDATE' => 'SEPA mandate signature date',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CREDITORID' => 'SEPA creditor ID',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_DUEDATE' => 'SEPA due date',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_LANGUAGE' => 'language',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_MESSAGE' => 'message',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_LIABILITYSHIFTINDICATOR' => 'liabilityShiftIndicator',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_INSTRUMENTCOUNTRY' => 'instrumentCountry',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_RISKINTERCEPT' => 'riskIntercept',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_RISKREASONCODE' => 'riskReasonCode',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_RISKREASONMESSAGE' => 'riskReasonMessage',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_RISKRETURNCODE' => 'riskReturnCode',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_RISKRETURNMESSAGE' => 'riskReturnMessage',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_CHECKOUTTYPE' => 'checkoutType',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AVSRESPONSECODE' => 'avsResponseCode',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AVSRESPONSEMESSAGE' => 'avsResponseMessage',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AVSPROVIDERRESULTCODE' => 'avsProviderResultCode',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_AVSPROVIDERRESULTMESSAGE' => 'avsProviderResultMessage',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_IDEALCONSUMERNAME' => 'idealConsumerName',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_IDEALCONSUMERBIC' => 'idealConsumerBIC',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_IDEALCONSUMERCITY' => 'idealConsumerCity',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_IDEALCONSUMERIBAN' => 'idealConsumerIBAN',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_IDEALCONSUMERACCOUNTNUMBER' => 'idealConsumerAccountNumber',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SENDERACCOUNTOWNER' => 'senderAccountOwner',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_SECURITYCRITERIA' => 'securityCriteria',
    'ORDER_OVERVIEW_WIRECARD_CHECKOUT_SEAMLESS_ANONYMOUSPAN' => 'anonymousPan',
    'WCS_SUBMIT' => 'Submit',
    'WCS_SUBMIT_CONFIG' => 'Submit Wirecard Checkout Seamless configuration',
    'MODULE_PAYMENT_WCS_EXPORT_CONFIG_RECEIVER' => 'Send to',
    'MODULE_PAYMENT_WCS_EXPORT_CONFIG_CONFIG_STRING' => 'Configuration',
    'MODULE_PAYMENT_WCS_EXPORT_CONFIG_DESC_TEXT' => 'Comment',
    'MODULE_PAYMENT_WCS_EXPORT_CONFIG_RETURN_MAIL' => 'Reply to e-mail address',
);
