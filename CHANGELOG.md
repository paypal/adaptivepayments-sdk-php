### CHANGELOG

#### Version 2.4.103 - June 11, 2013
 
	- Updated stubs for 103 release.
	- Removed deprecated methods like setAccessToken, getAccessToken from baseService in core.
    - Added correct thirdparty auth header in core.
	- Updated install script in samples to handle wildcard tag names. 
	
You can see source code of this release in github under https://github.com/paypal/adaptivepayments-sdk-php/tree/v2.4.103.

--------------------------------------------------------------------------------------------------

#### Version 2.3.101 - April 30, 2013

   - Updated stubs for 101 release

You can see source code of this release in github under https://github.com/paypal/adaptivepayments-sdk-php/tree/v2.3.101

--------------------------------------------------------------------------------------------------

#### Version 2.3.100 - March 25, 2013
 
   - Updated stubs for 100 release
   - Added dynamic configuration support by passing configuration parameters using hash map.
	
You can see source code of this release in github under https://github.com/paypal/adaptivepayments-sdk-php/tree/v2.3.100.

--------------------------------------------------------------------------------------------------

#### Version 2.2.98 - February 05, 2013
 
   - Added support for composer.
   - Added installation script that fetches the dependencies and installs sdk if composer not present, contributed by: https://github.com/rrehbeindoi.
   - Added loading the static configuration from a different source.
	
You can see source code of this release in github under https://github.com/paypal/adaptivepayments-sdk-php/tree/v2.2.98.

--------------------------------------------------------------------------------------------------

#### Version 2.1.96 - December 14, 2012
 
   - Added support for Instant Payment Notification (Refer IPN-README.md for more details)
   - Added new feature for supporting multiple endpoints based on portname for using different sdks together.
	
You can see source code of this release in github under https://github.com/paypal/adaptivepayments-sdk-php/tree/v2.1.96.

--------------------------------------------------------------------------------------------------

#### Version 2.0.96 - December 06, 2012
 
   - SDK refreshed to Release 96
   - Application ID is not mandatory now.
   - Added support for passing in credentials dynamically for Authentication, now the call 
     wrappers have an argument for passing credentials
   - New type ThirdPartyAuthorization has been added to support Subject and Token based Authorizations. The earlier
     setAccessToken and setTokenSecret have been deprecated. You can set an instance of ThirdPartyAuthorization to an 
     ICredntial and pass ICredential as a parameter to  API call
   - Fixes to deserialization issues.(https://github.com/paypal/SDKs/issues/37) 
   - Fixes to validating SSL Cert in curl requests.(https://github.com/paypal/SDKs/issues/35) 
	
--------------------------------------------------------------------------------------------------

#### Version 1.2.95 - September 28, 2012
 
   - Sender details (eg:email,phno) serialization bug fixed(https://github.com/paypal/SDKs/issues/30)
   - Bug fixed for 'PPLoggingManager.php' to pickup configuration entries.(https://github.com/paypal/SDKs/issues/28)
   - Updated SDK sample
	
--------------------------------------------------------------------------------------------------

#### Version 1.1.93 - August 13, 2012
 
   - SDK refreshed to Release 1.8.1. Please refer https://www.x.com/developers/paypal/documentation-tools/release-notes#AdaptivePaymentsAPI
   - SDK Core - Deserialization Logic Change

--------------------------------------------------------------------------------------------------

#### Version 1.0.92 - July 30, 2012
 
   - Stable release

-------------------------------------------------------------------------------------------------

#### Version 0.7.92 - July 17, 2012 

   - wsdl update version 0.7.92

-------------------------------------------------------------------------------------------------
	
#### Version 0.6.88 - Apr 17, 2012

   - Fix to get SDK working with Permissions API token
   - wsdl update version 88.0

-------------------------------------------------------------------------------------------------------

#### Version 0.6.86  - Feb 27, 2012

   - Initial release