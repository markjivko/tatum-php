<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Marketplace#operation/GetMarketplaceFeeRecipient
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#getmarketplacefeerecipient
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// Blockchain to work with
$arg_chain = 'chain_example';

// Contract address
$arg_contract_address = '0xe6e7340394958674cdf8606936d292f565e4ecc4';

try {
    /** @var \Tatum\Model\GetMarketplaceFeeRecipient200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->marketplace()
        ->getMarketplaceFeeRecipient($arg_chain, $arg_contract_address);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->getMarketplaceFeeRecipient(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->getMarketplaceFeeRecipient(): " . $exc->getMessage() . PHP_EOL;
}