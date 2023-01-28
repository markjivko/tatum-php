<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/XRPApi/#transferxrpblockchainasset
 * @license MIT
 * @author  Mark Jivko
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Set your API Keys 👇 here
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_blockchain_asset = (new \Tatum\Model\TransferXrpBlockchainAsset())
    
    // XRP account address. Must be the one used for generating deposit tags.
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Blockchain address to send assets
    ->setTo('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    
    // Amount to be sent, in XRP.
    ->setAmount('10000')
    
    // Secret for account. Secret, or signature Id must be present.
    ->setFromSecret('snSFTHdvSYQKKkYntvEt8cnmZuPJB')
    
    // (optional) Fee to be paid, in XRP. If omitted, current fee will be calculated.
    ->setFee('10000')
    
    // (optional) Source tag of sender account, if any.
    ->setSourceTag(12355)
    
    // (optional) Destination tag of recipient account, if any.
    ->setDestinationTag(12355)
    
    // Blockchain address of the issuer of the assets to create trust line for.
    ->setIssuerAccount('rsP3mgGb2tcYUrxiLFiHJiQXhsziegtwBc')
    
    // Asset name. Must be 160bit HEX string, e.g. SHA1.
    ->setToken('DA39A3EE5E6B4B0D3255BFEF95601890AFD80709');

try {

    // 🐛 Enable debugging on the MainNet
    $sdk->mainnet()->config()->setDebug(true);

    /**
     * POST /v3/xrp/transaction
     * 
     * @var \Tatum\Model\TransactionSigned $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->transferXrpBlockchainAsset($arg_transfer_xrp_blockchain_asset);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->xRP()->transferXrpBlockchainAsset(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->xRP()->transferXrpBlockchainAsset(): %s\n", 
        $exc->getMessage()
    );
}