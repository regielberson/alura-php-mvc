<?php

require __DIR__ . '/../vendor/autoload.php';



$client = new \GuzzleHttp\Client();




$response = $client->request('POST', 'http://192.168.100.240:8380/mge/service.sbr?serviceName=MobileLoginSP.login&outputType=json');

echo $response->getBody();

