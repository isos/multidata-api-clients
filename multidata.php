<?php
/*************************/
/* 	 MultiDATA Account   */
/*************************/
$usr		= "username";
$pwd		= "password";

/*************************/
/* Request configuration */
/*************************/
$format		= "json"; //json or xml
$api		= "getperson"; //getperson, getcar or utils
$value1		= "11111111-1";
$value2		= "info";
$host		= "http://www.multidata.cl";
/******** -*- **********/

$url		= $host."/warpit/".$format."/apicatalogs/".$api."/".$value1."/";
if(trim($value2)!=""){ $url		.= $value2."/"; }
$crl		= curl_init();
curl_setopt($crl, CURLOPT_URL, $url);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLOPT_USERPWD, $usr.":".$pwd);
$rest		= curl_exec($crl);
curl_close($crl);
var_dump($rest);
?>