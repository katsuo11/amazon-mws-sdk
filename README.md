Amazon MWS API Installation
========================

Add the reference into your composer.json : 

    "katsuo11/amazon-mws-sdk": "dev-master"

Use in controller :

     $client = new \MwsSearchClient(/* args */);




### Important note about the Fulfillment Inventory API (inventory)

There is a bug in the current API provided by amazon (amazon-mws-v20101001-php-2013-01-01) in the `Client.php` file on line 87.

	$this->_serviceVersion = $applicationVersion;

This tells amazon to send the request with your application version for the service version, the call will fail if you set your application version to anything other than `2010-10-01`.
I added a `SERVICE_VERSION` constant and replaced line 87 by:
	
	$this->_serviceVersion = self::SERVICE_VERSION;
	
Reported [here](https://sellercentral.amazon.com/forums/thread.jspa?messageID=2430689&#2430689)