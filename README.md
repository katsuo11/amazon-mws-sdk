Amazon MWS API Installation
========================

Into a symfony2 (or any other composer-aware project) project
-----------------------

Add the reference into your composer.json : 

    "boda2004/amazon-mws-sdk": "dev-master"

Use in controller :

     $client = new \MwsSearchClient(/* args */);
