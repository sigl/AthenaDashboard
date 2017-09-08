<?php

require('routeros_api.class.php');

$mikrotikAPI = new RouterosAPI();

if ($mikrotikAPI->connect('192.168.1.1', 'mikrotik_api_username', 'mikrotik_api_password')) {

   $mikrotikAPI->write('/interface/getall');

   $apiRead = $mikrotikAPI->read(false);
   $response = $mikrotikAPI->parseResponse($apiRead);

   header('Content-Type: application/json');
   echo(json_encode($response, JSON_UNESCAPED_UNICODE));

   $mikrotikAPI->disconnect();
}
