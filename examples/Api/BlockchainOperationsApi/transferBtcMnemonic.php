<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transferbtcmnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_transfer_btc_mnemonic = (new \Tatum\Model\TransferBtcMnemonic())
    
    // Sender account ID
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    
    // Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of...
    ->setAddress('mpTwPdF8up9kidgcAStriUPwRdnE9MRAg7')
    
    // Amount to be withdrawn to blockchain.
    ->setAmount('0.001')
    
    // (optional) Compliance check, if withdrawal is not compliant, it will not be processed.
    ->setCompliant(false)
    
    // (optional) Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.0005 B...
    ->setFee('0.0005')
    
    // (optional) For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts...
    ->setMultipleAmounts(null)
    
    // (optional) Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr ...
    ->setAttr('null')
    
    // Mnemonic seed - usually 12-24 words with access to whole wallet. Either mnemonic, keyPair or sign...
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    
    // Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mn...
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    
    // (optional) Identifier of the payment, shown for created Transaction within Tatum sender account.
    ->setPaymentId('1234')
    
    // (optional) Note visible to owner of withdrawing account
    ->setSenderNote('Sender note');

try {

    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferBtcMnemonic($arg_transfer_btc_mnemonic);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->blockchainOperations()->transferBtcMnemonic(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->blockchainOperations()->transferBtcMnemonic(): %s\n", 
        $exc->getMessage()
    );
}