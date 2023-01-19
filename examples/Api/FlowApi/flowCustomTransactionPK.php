<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowcustomtransactionpk
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_flow_custom_transaction_pk = (new \Tatum\Model\FlowCustomTransactionPK())
    
    // Blockchain account to send from
    ->setAccount('0x955cd3f17b2fd8ad')
    
    // Transaction string to send to the chain.
    ->setTransaction('transaction(publicKey: String) {
  prepare(signer: AuthAccount) {
    signer.addPublicKey(publicKey.decodeHex())
  }
}
')
    
    // 
    ->setArgs(null)
    
    // Secret for account. Secret, or signature Id must be present.
    ->setPrivateKey('37afa218d41d9cd6a2c6f2b96d9eaa3ad96c598252bc50e4d45d62f9356a51f8');

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowCustomTransactionPK($arg_flow_custom_transaction_pk);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->flow()->flowCustomTransactionPK(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->flow()->flowCustomTransactionPK(): %s\n", 
        $exc->getMessage()
    );
}