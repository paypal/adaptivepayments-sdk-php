<?php
 /**
  * Stub objects for AdaptivePayments 
  * Auto generated code 
  * 
  */
/**
 * 
 */
if(!class_exists('AccountIdentifier', false)) {
class AccountIdentifier  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PhoneNumberType 	 
	 */ 
	public $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;


}
}



/**
 * 
 */
if(!class_exists('BaseAddress', false)) {
class BaseAddress  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $line1;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $line2;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $city;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $state;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $postalCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;

	/**
	 * Constructor with arguments
	 */
	public function __construct($line1 = NULL, $city = NULL, $countryCode = NULL) {
		$this->line1 = $line1;
		$this->city = $city;
		$this->countryCode = $countryCode;
	}


}
}



/**
 * Details about the end user of the application invoking this
 * service. 
 */
if(!class_exists('ClientDetailsType', false)) {
class ClientDetailsType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $deviceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $applicationId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $model;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $geoLocation;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerId;


}
}



/**
 * 
 */
if(!class_exists('CurrencyType', false)) {
class CurrencyType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $code;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $amount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($code = NULL, $amount = NULL) {
		$this->code = $code;
		$this->amount = $amount;
	}


}
}



/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
if(!class_exists('ErrorData', false)) {
class ErrorData  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $errorId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $domain;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $subdomain;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $category;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $message;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $exceptionId;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorParameter 	 
	 */ 
	public $parameter;


}
}



/**
 * @hasAttribute
 * 
 */
if(!class_exists('ErrorParameter', false)) {
class ErrorParameter  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 
	 * @value
	 	 	 	 
	 * @var string 	 
	 */ 
	public $value;


}
}



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
if(!class_exists('FaultMessage', false)) {
class FaultMessage  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
}



/**
 * 
 */
if(!class_exists('PhoneNumberType', false)) {
class PhoneNumberType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $phoneNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $extension;

	/**
	 * Constructor with arguments
	 */
	public function __construct($countryCode = NULL, $phoneNumber = NULL) {
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
	}


}
}



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
if(!class_exists('RequestEnvelope', false)) {
class RequestEnvelope  
  extends PPMessage   {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $errorLanguage;

	/**
	 * Constructor with arguments
	 */
	public function __construct($errorLanguage = NULL) {
		$this->errorLanguage = $errorLanguage;
	}


}
}



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
if(!class_exists('ResponseEnvelope', false)) {
class ResponseEnvelope  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ack;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $correlationId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $build;


}
}



/**
 * 
 */
class Address  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $addresseeName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var BaseAddress 	 
	 */ 
	public $baseAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $addressId;


}



/**
 * 
 */
class AddressList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var Address 	 
	 */ 
	public $address;


}



/**
 * A list of ISO currency codes. 
 */
class CurrencyCodeList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currencyCode = NULL) {
		$this->currencyCode = $currencyCode;
	}


}



/**
 * A list of estimated currency conversions for a base
 * currency. 
 */
class CurrencyConversionList  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $baseAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyList 	 
	 */ 
	public $currencyList;


}



/**
 * A table that contains a list of estimated currency
 * conversions for a base currency in each row. 
 */
class CurrencyConversionTable  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversionList 	 
	 */ 
	public $currencyConversionList;


}



/**
 * A list of ISO currencies. 
 */
class CurrencyList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $currency;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currency = NULL) {
		$this->currency = $currency;
	}


}



/**
 * Customizable options that a client application can specify
 * for display purposes. 
 */
class DisplayOptions  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailHeaderImageUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailMarketingImageUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $headerImageUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessName;


}



/**
 * 
 */
class ErrorList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * 
 */
class FundingConstraint  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingTypeList 	 
	 */ 
	public $allowedFundingType;


}



/**
 * FundingTypeInfo represents one allowed funding type. 
 */
class FundingTypeInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingType = NULL) {
		$this->fundingType = $fundingType;
	}


}



/**
 * 
 */
class FundingTypeList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingTypeInfo 	 
	 */ 
	public $fundingTypeInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingTypeInfo = NULL) {
		$this->fundingTypeInfo = $fundingTypeInfo;
	}


}



/**
 * Describes the conversion between 2 currencies. 
 */
class CurrencyConversion  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $from;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $to;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $exchangeRate;


}



/**
 * Funding source information. 
 */
class FundingSource  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $lastFourOfAccountNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $displayName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $allowed;


}



/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $charge;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingSource 	 
	 */ 
	public $fundingSource;


}



/**
 * FundingPlan describes the funding sources to be used for a
 * specific payment. 
 */
class FundingPlan  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingPlanId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $fundingAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingSource 	 
	 */ 
	public $backupFundingSource;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $senderFees;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversion 	 
	 */ 
	public $currencyConversion;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlanCharge 	 
	 */ 
	public $charge;


}



/**
 * Details about the party that initiated this payment. The API
 * user is making this payment on behalf of the initiator. The
 * initiator can simply be an institution or a customer of the
 * institution. 
 */
class InitiatingEntity  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var InstitutionCustomer 	 
	 */ 
	public $institutionCustomer;


}



/**
 * The customer of the initiating institution 
 */
class InstitutionCustomer  
  extends PPMessage   {

	/**
	 * The unique identifier as assigned to the institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $institutionId;

	/**
	 * The first (given) name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $firstName;

	/**
	 * The last (family) name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $lastName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $middleName;

	/**
	 * The full name of the end consumer as known by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $displayName;

	/**
	 * The unique identifier as assigned to the end consumer by the
	 * institution. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $institutionCustomerId;

	/**
	 * The two-character ISO country code of the home country of
	 * the end consumer 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $dateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var BaseAddress 	 
	 */ 
	public $address;

	/**
	 * Constructor with arguments
	 */
	public function __construct($institutionId = NULL, $firstName = NULL, $lastName = NULL, $displayName = NULL, $institutionCustomerId = NULL, $countryCode = NULL) {
		$this->institutionId = $institutionId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->displayName = $displayName;
		$this->institutionCustomerId = $institutionCustomerId;
		$this->countryCode = $countryCode;
	}


}



/**
 * Describes an individual item for an invoice. 
 */
class InvoiceItem  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $identifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $price;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $itemPrice;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $itemCount;


}



/**
 * Describes a payment for a particular receiver (merchant),
 * contains list of additional per item details. 
 */
class InvoiceData  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var InvoiceItem 	 
	 */ 
	public $item;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $totalTax;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $totalShipping;


}



/**
 * The error that resulted from an attempt to make a payment to
 * a receiver. 
 */
class PayError  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * 
 */
class PayErrorList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayError 	 
	 */ 
	public $payError;


}



/**
 * PaymentInfo represents the payment attempt made to a
 * Receiver of a PayRequest. If the execution of the payment
 * has not yet completed, there will not be any transaction
 * details. 
 */
class PaymentInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundedAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $pendingRefund;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderTransactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderTransactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pendingReason;


}



/**
 * 
 */
class PaymentInfoList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PaymentInfo 	 
	 */ 
	public $paymentInfo;


}



/**
 * Receiver is the party where funds are transferred to. A
 * primary receiver receives a payment directly from the sender
 * in a chained split payment. A primary receiver should not be
 * specified when making a single or parallel split payment. 
 */
class Receiver  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $amount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PhoneNumberType 	 
	 */ 
	public $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $primary;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $invoiceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentSubType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($amount = NULL) {
		$this->amount = $amount;
	}


}



/**
 * 
 */
class ReceiverList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = NULL) {
		$this->receiver = $receiver;
	}


}



/**
 * The sender identifier type contains information to identify
 * a PayPal account. 
 */
class ReceiverIdentifier  extends AccountIdentifier  
  {


}



/**
 * Options that apply to the receiver of a payment, allows
 * setting additional details for payment using invoice. 
 */
class ReceiverOptions  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $description;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var InvoiceData 	 
	 */ 
	public $invoiceData;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverIdentifier 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $referrerCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = NULL) {
		$this->receiver = $receiver;
	}


}



/**
 * RefundInfo represents the refund attempt made to a Receiver
 * of a PayRequest. 
 */
class RefundInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $refundStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundNetAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundFeeAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundGrossAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $totalOfAllRefunds;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $refundHasBecomeFull;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $encryptedRefundTransactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $refundTransactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ErrorList 	 
	 */ 
	public $errorList;


}



/**
 * 
 */
class RefundInfoList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var RefundInfo 	 
	 */ 
	public $refundInfo;


}



/**
 * Options that apply to the sender of a payment. 
 */
class SenderOptions  
  extends PPMessage   {

	/**
	 * Require the user to select a shipping address during the web
	 * flow. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $requireShippingAddressSelection;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $referrerCode;


}



/**
 * Details about the payer's tax info passed in by the merchant
 * or partner. 
 */
class TaxIdDetails  
  extends PPMessage   {

	/**
	 * Tax id of the merchant/business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxId;

	/**
	 * Tax type of the Tax Id. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxIdType;


}



/**
 * The sender identifier type contains information to identify
 * a PayPal account. 
 */
class SenderIdentifier  extends AccountIdentifier  
  {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $useCredentials;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var TaxIdDetails 	 
	 */ 
	public $taxIdDetails;


}



/**
 * 
 */
class UserLimit  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $limitType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $limitAmount;


}



/**
 * This type contains the detailed warning information
 * resulting from the service operation. 
 */
class WarningData  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $warningId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $message;


}



/**
 * 
 */
class WarningDataList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var WarningData 	 
	 */ 
	public $warningData;


}



/**
 * The request to cancel a Preapproval. 
 */
class CancelPreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}



/**
 * The result of the CancelPreapprovalRequest. 
 */
class CancelPreapprovalResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to confirm a Preapproval. 
 */
class ConfirmPreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pin;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}



/**
 * The result of the ConfirmPreapprovalRequest. 
 */
class ConfirmPreapprovalResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * A request to convert one or more currencies into their
 * estimated values in other currencies. 
 */
class ConvertCurrencyRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyList 	 
	 */ 
	public $baseAmountList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyCodeList 	 
	 */ 
	public $convertToCurrencyList;

	/**
	 * The two-character ISO country code where fx suppposed to
	 * happen 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $conversionType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $baseAmountList = NULL, $convertToCurrencyList = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->baseAmountList = $baseAmountList;
		$this->convertToCurrencyList = $convertToCurrencyList;
	}


}



/**
 * A response that contains a table of estimated converted
 * currencies based on the Convert Currency Request. 
 */
class ConvertCurrencyResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversionTable 	 
	 */ 
	public $estimatedAmountTable;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to execute the payment request. 
 */
class ExecutePaymentRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * Describes the action that is performed by this API 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $actionType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingPlanId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}



/**
 * Contains information related to Post Payment Disclosure
 * Details This contains 1.Receivers information 2.Funds
 * Avalibility Date 
 */
class PostPaymentDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifier 	 
	 */ 
	public $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $fundsAvailabilityDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundsAvailabilityDateDisclaimerText;


}



/**
 * 
 */
class PostPaymentDisclosureList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PostPaymentDisclosure 	 
	 */ 
	public $postPaymentDisclosure;


}



/**
 * The result of a payment execution. 
 */
class ExecutePaymentResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayErrorList 	 
	 */ 
	public $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PostPaymentDisclosureList 	 
	 */ 
	public $postPaymentDisclosureList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the allowed funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}



/**
 * The response to get the backup funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingSource 	 
	 */ 
	public $fundingSource;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the options of a payment request. 
 */
class GetPaymentOptionsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}



/**
 * The response message for the GetPaymentOption request 
 */
class GetPaymentOptionsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var InitiatingEntity 	 
	 */ 
	public $initiatingEntity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var DisplayOptions 	 
	 */ 
	public $displayOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $shippingAddressId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderOptions 	 
	 */ 
	public $senderOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverOptions 	 
	 */ 
	public $receiverOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to look up the details of a PayRequest. The
 * PaymentDetailsRequest can be made with either a payKey,
 * trackingId, or a transactionId of the PayRequest. 
 */
class PaymentDetailsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $trackingId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


}



/**
 * The details of the PayRequest as specified in the Pay
 * operation. 
 */
class PaymentDetailsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PaymentInfoList 	 
	 */ 
	public $paymentInfoList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $trackingId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $actionType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $reverseAllParallelPaymentsOnError;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingConstraint 	 
	 */ 
	public $fundingConstraint;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The PayRequest contains the payment instructions to make
 * from sender to receivers. 
 */
class PayRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ClientDetailsType 	 
	 */ 
	public $clientDetails;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $actionType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pin;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverList 	 
	 */ 
	public $receiverList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $reverseAllParallelPaymentsOnError;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $trackingId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingConstraint 	 
	 */ 
	public $fundingConstraint;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $actionType = NULL, $cancelUrl = NULL, $currencyCode = NULL, $receiverList = NULL, $returnUrl = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->actionType = $actionType;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->receiverList = $receiverList;
		$this->returnUrl = $returnUrl;
	}


}



/**
 * The PayResponse contains the result of the Pay operation.
 * The payKey and execution status of the request should always
 * be provided. 
 */
class PayResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayErrorList 	 
	 */ 
	public $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PaymentInfoList 	 
	 */ 
	public $paymentInfoList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlan 	 
	 */ 
	public $defaultFundingPlan;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var WarningDataList 	 
	 */ 
	public $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to look up the details of a Preapproval. 
 */
class PreapprovalDetailsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $getBillingAddress;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}



/**
 * The details of the Preapproval as specified in the
 * Preapproval operation. 
 */
class PreapprovalDetailsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $approved;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $curPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $curPaymentsAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $curPeriodAttempts;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $curPeriodEndingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $dateOfMonth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $dayOfWeek;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $endingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $maxAmountPerPayment;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $maxNumberOfPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $maxTotalAmountOfAllPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentPeriod;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pinType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $startingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressList 	 
	 */ 
	public $addressList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $displayMaxTotalAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * A request to create a Preapproval. A Preapproval is an
 * agreement between a Paypal account holder (the sender) and
 * the API caller (the service invoker) to make payment(s) on
 * the the sender's behalf with various limitations defined. 
 */
class PreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ClientDetailsType 	 
	 */ 
	public $clientDetails;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $dateOfMonth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $dayOfWeek;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $endingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $maxAmountPerPayment;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $maxNumberOfPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $maxTotalAmountOfAllPayments;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentPeriod;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $memo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipnNotificationUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $startingDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pinType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $displayMaxTotalAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $requireInstantFundingSource;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $cancelUrl = NULL, $currencyCode = NULL, $returnUrl = NULL, $startingDate = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->returnUrl = $returnUrl;
		$this->startingDate = $startingDate;
	}


}



/**
 * The result of the PreapprovalRequest is a preapprovalKey. 
 */
class PreapprovalResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * A request to make a refund based on various criteria. A
 * refund can be made against the entire payKey, an individual
 * transaction belonging to a payKey, a tracking id, or a
 * specific receiver of a payKey. 
 */
class RefundRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $trackingId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverList 	 
	 */ 
	public $receiverList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


}



/**
 * The result of a Refund request. 
 */
class RefundResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RefundInfoList 	 
	 */ 
	public $refundInfoList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to set the options of a payment request. 
 */
class SetPaymentOptionsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var InitiatingEntity 	 
	 */ 
	public $initiatingEntity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var DisplayOptions 	 
	 */ 
	public $displayOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $shippingAddressId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderOptions 	 
	 */ 
	public $senderOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverOptions 	 
	 */ 
	public $receiverOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}



/**
 * The response message for the SetPaymentOption request 
 */
class SetPaymentOptionsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}



/**
 * The response to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlan 	 
	 */ 
	public $fundingPlan;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the addresses available for a payment. 
 */
class GetAvailableShippingAddressesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}



/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetAvailableShippingAddressesResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var Address 	 
	 */ 
	public $availableAddress;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the addresses available for a payment. 
 */
class GetShippingAddressesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}



/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetShippingAddressesResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Address 	 
	 */ 
	public $selectedAddress;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * The request to get the remaining limits for a user 
 */
class GetUserLimitsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * The account identifier for the user 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifier 	 
	 */ 
	public $user;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $country;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * List of limit types 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $limitType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $user = NULL, $country = NULL, $currencyCode = NULL, $limitType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->user = $user;
		$this->country = $country;
		$this->currencyCode = $currencyCode;
		$this->limitType = $limitType;
	}


}



/**
 * A response that contains a list of remaining limits 
 */
class GetUserLimitsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var UserLimit 	 
	 */ 
	public $userLimit;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var WarningDataList 	 
	 */ 
	public $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * ReceiverInfo needs to be populate for the receiver who
 * doesn't have paypal account. 
 */
class ReceiverInfo  extends AccountIdentifier  
  {

	/**
	 * The two-character ISO country code of the home country of
	 * the Receiver 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $firstName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $lastName;


}



/**
 * FeeDisclosure contains the information related to Fees and
 * taxes. 
 */
class FeeDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $fee;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $taxes;


}



/**
 * SenderDisclosure contains the disclosure related to Sender 
 */
class SenderDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $amountToTransfer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FeeDisclosure 	 
	 */ 
	public $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $totalAmountToTransfer;


}



/**
 * This holds the conversion rate from "Sender currency for one
 * bucks to equivalent value in the receivers currency" 
 */
class ConversionRate  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderCurrency;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $receiverCurrency;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $exchangeRate;


}



/**
 * ReceiverDisclosure contains the disclosure related to
 * Receiver/Receivers. 
 */
class ReceiverDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifier 	 
	 */ 
	public $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $amountReceivedFromSender;

	/**
	 * The two-character ISO country code of the home country of
	 * the Receiver 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ConversionRate 	 
	 */ 
	public $conversionRate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FeeDisclosure 	 
	 */ 
	public $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $totalAmountReceived;


}



/**
 * 
 */
class ReceiverDisclosureList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverDisclosure 	 
	 */ 
	public $receiverDisclosure;


}



/**
 * 
 */
class ReceiverInfoList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverInfo 	 
	 */ 
	public $receiverInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiverInfo = NULL) {
		$this->receiverInfo = $receiverInfo;
	}


}



/**
 * GetPrePaymentDisclosureRequest is used to get the PrePayment
 * Disclosure.; GetPrePaymentDisclosureRequest contains
 * following parameters payKey :The pay key that identifies the
 * payment for which you want to retrieve details. this is the
 * pay key returned in the PayResponse message.
 * receiverInfoList : This is an optional.This needs to be
 * provided in case of Unilateral scenario. receiverInfoList
 * has a list of ReceiverInfo type. List is provided here to
 * support in future for Parallel/Chained Payemnts. Each
 * ReceiverInfo has following variables firstName : firstName
 * of recipient.  lastName : lastName of recipient. 
 * countryCode : CountryCode of Recipient. 
 */
class GetPrePaymentDisclosureRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverInfoList 	 
	 */ 
	public $receiverInfoList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $payKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


}



/**
 * GetPrePaymentDisclosureResponse contains the information
 * related to PrePayment disclosure. status : indicates the
 * status of response. If Status = RTR then it means that this
 * is RTR transaction. If Status = NON_RTR then it means that
 * this is non RTR transaction. If Status =
 * MISSING_RECEIVER_COUNTRY_INFORMATION then it means the
 * Receiver country information is not found in PayPal
 * database. So merchant has to call the API again with same
 * set of parameter along with Receiver country code.This is
 * useful in case of Unilateral scenario. where receiver is not
 * holding paypal account. feePayer:Indicates who has agreed to
 * Pay a Fee for the RTR transaction. Merchant can use this
 * information to decide who actually has to pay the fee .
 * senderDisclosure : This Variable Holds the disclosure
 * related to sender. receiverDisclosureList : This list
 * contains the disclosure information related to receivers.
 * Merchant can just parse the details what ever is avaliable
 * in the response and display the same to user. 
 */
class GetPrePaymentDisclosureResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $feesPayer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderDisclosure 	 
	 */ 
	public $senderDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverDisclosureList 	 
	 */ 
	public $receiverDisclosureList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $disclaimer;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



