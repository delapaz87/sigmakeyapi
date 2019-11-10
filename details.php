<?php

$ch = curl_init('https://sigmakey.com/ajax/supportedfeatures/details?product_id='.$_GET['product_id']);
//$ch = curl_init('https://fmipalcweb.icloud.com/fmipalcservice/client/checkActivationLock');
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"Host: sigmakey.com",
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
    "Accept-Language: es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3",
    "Content-Type: application/json; charset=UTF-8",

));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//enviamos el array data
//curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 200000);
$data = curl_exec($ch);
// Copia el recurso
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);
curl_close($ch);

echo $data;

?>