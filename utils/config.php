<?php
define("BASE_URL", "http://localhost/ppay/");
define("API_STATUS", "UAT"); //LIVE OR UAT
define("MERCHANTIDLIVE", "M22HP5PDF47OV");
define("MERCHANTIDUAT", "PGTESTPAYUAT148");  //Sandbox testing
define("SALTKEYLIVE", "M22HP5PDF47OV_1.json");
define("SALTKEYUAT", "046d9f63-bf3b-4b74-9b8e-93121160573e");
define("SALTINDEX", "1");
define("REDIRECTURL", "paymentstatus.php");
define("SUCCESSURL", "success.php");
define("FAILUREURL", "failure.php");
define("UATURLPAY", "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay");
define("LIVEURLPAY", "https://api.phonepe.com/apis/hermes/pg/v1/pay");
define("STATUSCHECKURL", "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/");
define("LIVESTATUSCHECKURL", "https://api.phonepe.com/apis/hermes/pg/v1/status/");
?>
