<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ElrondApi.md#egldgettransactionaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

// address
$arg_address = "erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7";

try {

    /** @var object[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->elrond()
        ->egldGetTransactionAddress($arg_address);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->elrond()->egldGetTransactionAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->elrond()->egldGetTransactionAddress(): %s\n", 
        $exc->getMessage()
    );
}