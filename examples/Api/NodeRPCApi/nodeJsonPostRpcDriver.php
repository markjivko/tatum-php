<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NodeRPCApi.md#nodejsonpostrpcdriver
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to communicate with.
$arg_chain = 'ALGO';

$arg_body = array('key' => new \stdClass);

// Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
$arg_x_api_key = 'ea8ce228-6ca3-465c-abb0-fd3c5d35c0d5';

// Type of the node to access for Algorand.
$arg_node_type = 'node_type_example';

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_testnet_type = 'ethereum-sepolia';

// Type of Avalanche network. Defaults to Avalanche C-Chain.
$arg_chain_type = 'avax-c';

// Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
$arg_rpc_path = 'v2/accounts';

try {
    /** @var object $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->nodeRPC()
        ->nodeJsonPostRpcDriver($arg_chain, $arg_body, $arg_x_api_key, $arg_node_type, $arg_testnet_type, $arg_chain_type, $arg_rpc_path);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nodeRPC()->nodeJsonPostRpcDriver(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nodeRPC()->nodeJsonPostRpcDriver(): " . $exc->getMessage() . PHP_EOL;
}