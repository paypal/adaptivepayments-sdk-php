<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Preapproval</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
</head>
<?php
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnUrl = $url."/Preapproval.php";
$cancelUrl =  $url."/CancelPreapproval.php";
?>
<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Preapproval</h3>
			<div id="apidetails">A request to create a Preapproval. A Preapproval
				is an agreement between a Paypal account holder (the sender) and the
				API caller (the service invoker) to make payment(s) on the the
				sender's behalf with various limitations defined.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="Preapproval.php">
				<div class="params">
					<div class="param_name">Return URL *</div>
					<div class="param_value">
						<input name="returnUrl" id="returnUrl" value="<?php echo $returnUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Cancel Url *</div>
					<div class="param_value">
						<input name="cancelUrl" id="cancelUrl" value="<?php echo $cancelUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency code *</div>
					<div class="param_value">
						<input name="currencyCode" value="USD" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Preapproval start date *</div>
					<div class="param_value">
						<input name="startingDate" id="startingDate" value="<?php echo date("Y-m-d");?>" />
					</div>
				</div>			
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
		<a href="../index.php">Home</a>
	</div>
</body>
</html>