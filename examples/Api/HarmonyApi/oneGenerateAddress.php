<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/HarmonyApi.md#onegenerateaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Extended public key of wallet.
$arg_xpub = 'xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid';

// Derivation index of desired address to be generated.
$arg_index = 1;

try {
    /** @var \Tatum\Model\GeneratedAddressOne $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->harmony()
        ->oneGenerateAddress($arg_xpub, $arg_index);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->harmony()->oneGenerateAddress(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->harmony()->oneGenerateAddress(): " . $exc->getMessage() . PHP_EOL;
}