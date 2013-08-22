<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PayPal Adaptive Payments - Execute Payment</title>
<link rel="stylesheet" href="Common/sdk.css"/>
<script type="text/javascript">
function getPayKey(){
	document.getElementById("payKey").value = localStorage.getItem("payKey");
	localStorage.removeItem("payKey");
}
</script>
</head>
<body onload="getPayKey();">
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>ExecutePayment</h3>
			<div id="apidetails">The ExecutePayment API operation lets you
				execute a payment set up with the Pay API operation with the
				actionType CREATE.</div>
		</div>
		<form method="post" action="ExecutePaymentReceipt.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">
						Pay Key * (Get PayKey via <a href='Pay'>Pay</a>)
					</div>
					<div class="param_value">
						<input type="text" name="payKey" id="payKey" value="" />
					</div>

				</div>
				<div class="param_name">Action Type *</div>
				<div class="param_value">
					<input name="actionType" value="PAY" />
				</div>
				<div class="params">
					<div class="param_name">Funding Plan ID *</div>
					<div class="param_value">
						<input type="text" name="fundingPlanID" value="0" />
					</div>

				</div>
				<div class="submit">
					<input type="submit" name="ExecutePaymentBtn"
						value="ExecutePayment" /><br />
				</div>
				<a href="index.php">Home</a>
			</div>
		</form>		
	</div>
</body>
</html>