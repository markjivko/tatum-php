<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#sellassetonmarketplacesolana
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_sell_asset_on_marketplace_solana = (new \Tatum\Model\SellAssetOnMarketplaceSolana())
    
    // Blockchain to work with.
    ->setChain('SOL')
    
    // Blockchain address of the smart contract
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the asset to sell
    ->setNftAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    
    // Blockchain address of the seller
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    
    // Price of the asset to sell. Marketplace fee will be obtained on top of this price.
    ->setPrice('100000')
    
    // (optional) The private key used for signing transactions as authority; required if <code>requiresSignOff</co...
    ->setAuthorityPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv')
    
    // The private key of the seller
    ->setFromPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv');

try {

    /** @var \Tatum\Model\SellAssetOnMarketplace200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplaceSolana($arg_sell_asset_on_marketplace_solana);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolana(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolana(): %s\n", 
        $exc->getMessage()
    );
}