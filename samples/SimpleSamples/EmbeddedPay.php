<?php

/*
 * An embedded payment is a payment that initiates a visual presentation of the Adaptive Payments payment flow in which the sender appears to never leave your checkout or payment page. Embedded payments make it easier for a sender to make a payment because PayPal may allow the sender to bypass the PayPal login step. 
 * Use the Pay API operation to transfer funds from a sender’s PayPal account to one or more receivers’ PayPal accounts. You can use the Pay API operation to make simple payments, chained payments, or parallel payments; these payments can be explicitly approved, preapproved, or implicitly approved.

Use the Pay API operation to transfer funds from a sender's PayPal account to one or more receivers' PayPal accounts. You can use the Pay API operation to make simple payments, chained payments, or parallel payments; these payments can be explicitly approved, preapproved, or implicitly approved. 
 */

/*
 * Create your PayRequest message by setting the common fields. If you want more than a simple payment, add fields for the specific kind of request, which include parallel payments, chained payments, implicit payments, and preapproved payments.
 */
require_once('../PPBootStrap.php');
require_once('../Common/Constants.php');
define("DEFAULT_SELECT", "- Select -");

if(isset($_POST['receiverEmail'])) {
	$receiver = array();
	/*
	 * A receiver's email address 
	 */

		$receiver = new Receiver();
		$receiver->email = $_POST['receiverEmail'];
		/*
		 *  	Amount to be credited to the receiver's account 
		 */
		$receiver->amount = $_POST['receiverAmount'];
	
	$receiverList = new ReceiverList($receiver);
}

/*
 * The action for this request. Possible values are:

    PAY – Use this option if you are not using the Pay request in combination with ExecutePayment.
    CREATE – Use this option to set up the payment instructions with SetPaymentOptions and then execute the payment at a later time with the ExecutePayment.
    PAY_PRIMARY – For chained payments only, specify this value to delay payments to the secondary receivers; only the payment to the primary receiver is processed.

 */
/*
 * The code for the currency in which the payment is made; you can specify only one currency, regardless of the number of receivers 
 */
/*
 * URL to redirect the sender's browser to after canceling the approval for a payment; it is always required but only used for payments that require approval (explicit payments) 
 */
/*
 * URL to redirect the sender's browser to after the sender has logged into PayPal and approved a payment; it is always required but only used if a payment requires explicit approval 
 */
$payRequest = new PayRequest(new RequestEnvelope("en_US"), $_POST['actionType'], $_POST['cancelUrl'], $_POST['currencyCode'], $receiverList, $_POST['returnUrl']);

/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getSignatureConfig() returns array that contains credential and config parameters
 */
$service = new AdaptivePaymentsService(Configuration::getSignatureConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$response = $service->Pay($payRequest);
} catch(Exception $ex) {
	require_once '../Common/Error.php';
	exit;
}
/* Make the call to PayPal to get the Pay token
 If the API call succeded, then redirect the buyer to PayPal
to begin to authorize payment.  If an error occured, show the
resulting errors */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>PayPal Adaptive Payments - Pay Response</title>
<link href="../Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Common/tooltip.js">
    </script>
   <script src="https://www.paypalobjects.com/js/external/dg.js">
</script>

</head>

<body>	
   <script>
	 dgFlow = top.dgFlow || top.opener.top.dgFlow;
	 dgFlow.closeFlow();
	 top.close();
   
	var dgFlow = new PAYPAL.apps.DGFlow({ trigger: 'submitBtn' });
</script>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="response_form">
			<h3>Pay - Response</h3>			
<?php
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS") {
	echo "<b>Error </b>";
	echo "<pre>";
	echo "</pre>";
} else {
	$payKey = $response->payKey;
	if(($response->paymentExecStatus == "COMPLETED" )) {
		$case ="1";
	} else if(($_POST['actionType']== "PAY") && ($response->paymentExecStatus == "CREATED" )) {
		$case ="2";
	}  
	$token = $response->payKey;
	$payPalURL = 'https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay?paykey=' . $token;
	switch($case) {
		
		case "2" :
			echo "<table>";
			echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
			echo "<tr><td>PayKey :</td><td><div id='PayKey'>$payKey</div> </td></tr>";
			echo "<tr><td><a><b>Login to PayPal Complete Payment </b></a></td></tr>";
?>
<form action = "https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay" target="PPDGFrame">
	<input id="type" type="hidden" name="expType" value="light">
	<input id="paykey" type="hidden" name="paykey" value="<?php echo $payKey;?>"> 
	<input type="submit" id="submitBtn" value="Pay with PayPal">
</form>
<?php
			echo "</table>";
			break;
		case "3" :
			echo "<table>";
			echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
			echo "<tr><td>PayKey :</td><td><div id='PayKey'>$payKey</div> </td></tr>";
			echo "<tr><td><a href=$payPalURL><b>Login to PayPal Complete Payment </b></a></td></tr>";
?>
<form action = "https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay" target="PPDGFrame">
	<input id="type" type="hidden" name="expType" value="light">
	<input id="paykey" type="hidden" name="paykey" value="<?php echo $payKey;?>"> 
	<input type="submit" id="submitBtn" value="Pay with PayPal">
</form>
<?php 
			echo "<tr><td><a href=SetPaymentOptions.php?payKey=$payKey><b>Set Payment Options(optional)</b></a></td></tr>";
			echo "<tr><td><a href=ExecutePayment.php?payKey=$payKey><b>Execute Payment </b></a></td></tr>";
			echo "</table>";
			break;
		default:
			break;
		
	}
	echo "<pre>";
	print_r($response);
	echo "</pre>";	
}
require_once '../Common/Response.php';
?>
		</div>
	</div>
</body>
</html>
