<?php
$plate		= "ABCD00"; //Patente
$key		= "56a68fe7c962eb000100012aab161bd8837b468955b01b03sde847ab"; //Se otorga en el portal de desarrolladores
$api		= "cars"; //persons, cars, services
$method		= "getplateinfo"; //Ver catalogo de APIs

$headr		= array();
$headr[]	= 'Authorization: '.$key;
$url		= "http://api.multidatachile.com/".$api."/".$method."/".$plate;

$crl		= curl_init();
curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
curl_setopt($crl, CURLOPT_URL, $url);
curl_setopt($crl, CURLOPT_POST, false);
$rest		= curl_exec($crl);
curl_close($crl);
print_r($rest);
