<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AlgorandApi.md#transferalgorandblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_algorand_blockchain = new \Tatum\Model\TransferAlgorandBlockchain();

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->algorand()
        ->transferAlgorandBlockchain($arg_transfer_algorand_blockchain);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->algorand()->transferAlgorandBlockchain(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->algorand()->transferAlgorandBlockchain(): " . $exc->getMessage() . PHP_EOL;
}