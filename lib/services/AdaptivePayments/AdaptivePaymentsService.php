<?php

/**
 * AUTO GENERATED code for AdaptivePayments
 */
class AdaptivePaymentsService extends PPBaseService {

    // Service Version
    private static $SERVICE_VERSION = "1.8.5";

    // Service Name
    private static $SERVICE_NAME = "AdaptivePayments";

    // SDK Name
    protected static $SDK_NAME = "adaptivepayments-php-sdk";

	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'NV', array('PPPlatformServiceHandler'), $config);
	}

    /**
     * Service Call: CancelPreapproval
     * @param CancelPreapprovalRequest $cancelPreapprovalRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return CancelPreapprovalResponse
     * @throws APIException
     */
    public function CancelPreapproval($cancelPreapprovalRequest, $apiCredential = NULL) {
        $ret = new CancelPreapprovalResponse();
        $resp = $this->call('AdaptivePayments', 'CancelPreapproval', $cancelPreapprovalRequest, $apiCredential, array());
        $ret->init(PPUtils::nvpToMap($resp));
        return $ret;
    }


    /**
     * Service Call: ConfirmPreapproval
     * @param ConfirmPreapprovalRequest $confirmPreapprovalRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return ConfirmPreapprovalResponse
     * @throws APIException
     */
    public function ConfirmPreapproval($confirmPreapprovalRequest, $apiCredential = NULL) {
        $ret = new ConfirmPreapprovalResponse();
        $resp = $this->call('AdaptivePayments', 'ConfirmPreapproval', $confirmPreapprovalRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: ConvertCurrency
     * @param ConvertCurrencyRequest $convertCurrencyRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return ConvertCurrencyResponse
     * @throws APIException
     */
    public function ConvertCurrency($convertCurrencyRequest, $apiCredential = NULL) {
        $ret = new ConvertCurrencyResponse();
        $resp = $this->call('AdaptivePayments', 'ConvertCurrency', $convertCurrencyRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: ExecutePayment
     * @param ExecutePaymentRequest $executePaymentRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return ExecutePaymentResponse
     * @throws APIException
     */
    public function ExecutePayment($executePaymentRequest, $apiCredential = NULL) {
        $ret = new ExecutePaymentResponse();
        $resp = $this->call('AdaptivePayments', 'ExecutePayment', $executePaymentRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetAllowedFundingSources
     * @param GetAllowedFundingSourcesRequest $getAllowedFundingSourcesRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetAllowedFundingSourcesResponse
     * @throws APIException
     */
    public function GetAllowedFundingSources($getAllowedFundingSourcesRequest, $apiCredential = NULL) {
        $ret = new GetAllowedFundingSourcesResponse();
        $resp = $this->call('AdaptivePayments', 'GetAllowedFundingSources', $getAllowedFundingSourcesRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetPaymentOptions
     * @param GetPaymentOptionsRequest $getPaymentOptionsRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetPaymentOptionsResponse
     * @throws APIException
     */
    public function GetPaymentOptions($getPaymentOptionsRequest, $apiCredential = NULL) {
        $ret = new GetPaymentOptionsResponse();
        $resp = $this->call('AdaptivePayments', 'GetPaymentOptions', $getPaymentOptionsRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: PaymentDetails
     * @param PaymentDetailsRequest $paymentDetailsRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return PaymentDetailsResponse
     * @throws APIException
     */
    public function PaymentDetails($paymentDetailsRequest, $apiCredential = NULL) {
        $ret = new PaymentDetailsResponse();
        $resp = $this->call('AdaptivePayments', 'PaymentDetails', $paymentDetailsRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: Pay
     * @param PayRequest $payRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return PayResponse
     * @throws APIException
     */
    public function Pay($payRequest, $apiCredential = NULL) {
        $ret = new PayResponse();
        $resp = $this->call('AdaptivePayments', 'Pay', $payRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: PreapprovalDetails
     * @param PreapprovalDetailsRequest $preapprovalDetailsRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return PreapprovalDetailsResponse
     * @throws APIException
     */
    public function PreapprovalDetails($preapprovalDetailsRequest, $apiCredential = NULL) {
        $ret = new PreapprovalDetailsResponse();
        $resp = $this->call('AdaptivePayments', 'PreapprovalDetails', $preapprovalDetailsRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: Preapproval
     * @param PreapprovalRequest $preapprovalRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return PreapprovalResponse
     * @throws APIException
     */
    public function Preapproval($preapprovalRequest, $apiCredential = NULL) {
        $ret = new PreapprovalResponse();
        $resp = $this->call('AdaptivePayments', 'Preapproval', $preapprovalRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: Refund
     * @param RefundRequest $refundRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return RefundResponse
     * @throws APIException
     */
    public function Refund($refundRequest, $apiCredential = NULL) {
        $ret = new RefundResponse();
        $resp = $this->call('AdaptivePayments', 'Refund', $refundRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: SetPaymentOptions
     * @param SetPaymentOptionsRequest $setPaymentOptionsRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return SetPaymentOptionsResponse
     * @throws APIException
     */
    public function SetPaymentOptions($setPaymentOptionsRequest, $apiCredential = NULL) {
        $ret = new SetPaymentOptionsResponse();
        $resp = $this->call('AdaptivePayments', 'SetPaymentOptions', $setPaymentOptionsRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetFundingPlans
     * @param GetFundingPlansRequest $getFundingPlansRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetFundingPlansResponse
     * @throws APIException
     */
    public function GetFundingPlans($getFundingPlansRequest, $apiCredential = NULL) {
        $ret = new GetFundingPlansResponse();
        $resp = $this->call('AdaptivePayments', 'GetFundingPlans', $getFundingPlansRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetAvailableShippingAddresses
     * @param GetAvailableShippingAddressesRequest $getAvailableShippingAddressesRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetAvailableShippingAddressesResponse
     * @throws APIException
     */
    public function GetAvailableShippingAddresses($getAvailableShippingAddressesRequest, $apiCredential = NULL) {
        $ret = new GetAvailableShippingAddressesResponse();
        $resp = $this->call('AdaptivePayments', 'GetAvailableShippingAddresses', $getAvailableShippingAddressesRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetShippingAddresses
     * @param GetShippingAddressesRequest $getShippingAddressesRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetShippingAddressesResponse
     * @throws APIException
     */
    public function GetShippingAddresses($getShippingAddressesRequest, $apiCredential = NULL) {
        $ret = new GetShippingAddressesResponse();
        $resp = $this->call('AdaptivePayments', 'GetShippingAddresses', $getShippingAddressesRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetUserLimits
     * @param GetUserLimitsRequest $getUserLimitsRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetUserLimitsResponse
     * @throws APIException
     */
    public function GetUserLimits($getUserLimitsRequest, $apiCredential = NULL) {
        $ret = new GetUserLimitsResponse();
        $resp = $this->call('AdaptivePayments', 'GetUserLimits', $getUserLimitsRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}


    /**
     * Service Call: GetPrePaymentDisclosure
     * @param GetPrePaymentDisclosureRequest $getPrePaymentDisclosureRequest
     * @param mixed $apiCredential - Optional API credential - can either be
     * 		a username configured in sdk_config.ini or a ICredential object
     *      created dynamically
     * @return GetPrePaymentDisclosureResponse
     * @throws APIException
     */
    public function GetPrePaymentDisclosure($getPrePaymentDisclosureRequest, $apiCredential = NULL) {
        $ret = new GetPrePaymentDisclosureResponse();
        $resp = $this->call('AdaptivePayments', 'GetPrePaymentDisclosure', $getPrePaymentDisclosureRequest, $apiCredential, array());
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}

}