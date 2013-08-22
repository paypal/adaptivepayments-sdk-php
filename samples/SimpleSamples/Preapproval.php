<?php
require_once('../PPBootStrap.php');
define("DEFAULT_SELECT", "- Select -");

/*
 *  # Preapproval API
 Use the Preapproval API operation to set up an agreement between yourself
 and a sender for making payments on the sender's behalf. You set up a
 preapprovals for a specific maximum amount over a specific period of time
 and, optionally, by any of the following constraints:

 * the number of payments
 * a maximum per-payment amount
 * a specific day of the week or the month
 * whether or not a PIN is required for each payment request.
 This sample code uses AdaptivePayments PHP SDK to make API call
 */

/*
 * The code for the language in which errors are returned, which must be en_US. 
 */
$requestEnvelope = new RequestEnvelope("en_US");
/*
 * URL to redirect the sender's browser to after canceling the preapproval 
 */
/*
 * URL to redirect the sender's browser to after the sender has logged into PayPal and confirmed the preapproval 
 */
/*
 * The code for the currency in which the payment is made; you can specify only one currency, regardless of the number of receivers 
 */
/*
 * First date for which the preapproval is valid. It cannot be before today's date or after the ending date. 
 */
$preapprovalRequest = new PreapprovalRequest($requestEnvelope, $_POST['cancelUrl'], 
				$_POST['currencyCode'], $_POST['returnUrl'], $_POST['startingDate']);


/*
 * 	 ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
 */
$service = new AdaptivePaymentsService(Configuration::getAcctAndConfig());
try {
	/* wrap API method calls on the service object with a try catch */
	$response = $service->Preapproval($preapprovalRequest);
} catch(Exception $ex) {
	require_once '../Common/Error.php';
	exit;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Preapproval</title>
<link href="../Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="response_form">
			<h3>Preapproval</h3>
<?php 
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	
	// Redirect to paypal.com here
	$token = $response->preapprovalKey;
	$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_ap-preapproval&preapprovalkey='.$token;
	
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>PreapprovalKey :</td><td><div id='PreapprovalKey'>$token</div> </td></tr>";
	echo "<tr><td><a href=$payPalURL><b>Redirect URL to Complete Preapproval Authorization</b></a></td></tr>";
	echo "</table>";
}
require_once '../Common/Response.php';		
?>
		</div>
	</div>
</body>
</html>