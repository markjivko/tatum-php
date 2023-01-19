<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/ElrondApi.md#transferegldblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_transfer_egld_blockchain = (new \Tatum\Model\TransferEgldBlockchain())
    
    // Account address of the sender
    ->setFrom('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq7')
    
    // Account address of the receiver or smart contract
    ->setTo('erd17k95m339aqzxzyvjjjfa3lka0yyeqgcsda50tw5z9g73ycfe2caq9e6jq6')
    
    // Value to be sent.
    ->setAmount('0')
    
    // (optional) 
    ->setFee(null)
    
    // (optional) Additional data that can be passed to a blockchain transaction as a data property; must be in the...
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0cd8e6217b4a218807b858ffb508483cdcdadbb7a21196727f764a510a692760');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->elrond()
        ->transferEgldBlockchain($arg_transfer_egld_blockchain);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->elrond()->transferEgldBlockchain(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->elrond()->transferEgldBlockchain(): %s\n", 
        $exc->getMessage()
    );
}