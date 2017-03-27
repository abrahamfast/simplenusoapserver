<?php


        $url = "http://vas.dev/index.php?wsdl";

        $client = new soapclient($url, array( 'soap_version'=>SOAP_1_1, 
                'exceptions'=>true, 
                'trace'=>1, 
                'cache_wsdl'=>WSDL_CACHE_NONE )); 

        echo $client->demo();

     





