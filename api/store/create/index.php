<?php

// Crea una store

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id, $integrator_id_test, $country_id;

 // REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder   
 // crear una store en base a su collector_id y el JSON enviado?
 // Sustituye el método por su correspondiente: get, put, post, delete
 // Pista: Revisa detenidamente el endpoint y encuentra el fallo


$json = $_POST["json"];
$access_token = "APP_USR-7026946692817220-061822-8b7c9e20631faac22d9e4cfa92a37265-586728271";
$collector_id ="586728271";
$url="";

curl_call("post","https://api.mercadopago.com/users/$collector_id/store?access_token=$access_token",$json);

?>
