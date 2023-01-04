<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Harmony#operation/OneGetTransactionCount
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#onegettransactioncount
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// address
$arg_address = '0xdac17f958d2ee523a2206206994597c13d831ec7';

// Shard to read data from
$arg_shard_id = 0;

try {
    /** @var float $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGetTransactionCount($arg_address, $arg_shard_id);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneGetTransactionCount(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneGetTransactionCount(): " . $exc->getMessage() . PHP_EOL;
}