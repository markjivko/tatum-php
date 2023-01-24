<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/MarketplaceApi/#generatemarketplacecelokms
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

$arg_generate_marketplace_celo_kms = (new \Tatum\Model\GenerateMarketplaceCeloKMS())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // Address of the recipient of the fee for the trade.
    ->setFeeRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // The percentage of the amount that an NFT was sold for that will be sent to the marketplace as a f...
    ->setMarketplaceFee(150)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) \Tatum\Model\DeployErc20Fee
    ->setFee(null);

try {

    /**
     * POST /v3/blockchain/marketplace/listing
     * 
     * @var \Tatum\Model\GenerateMarketplace200Response $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->generateMarketplaceCeloKMS($arg_generate_marketplace_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->generateMarketplaceCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->generateMarketplaceCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}