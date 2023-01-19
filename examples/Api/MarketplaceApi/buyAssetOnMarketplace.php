<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#buyassetonmarketplace
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_buy_asset_on_marketplace = (new \Tatum\Model\BuyAssetOnMarketplace())
    
    // The blockchain to work with
    ->setChain('ETH')
    
    // The blockchain address of the marketplace smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The ID of the listing with the asset that you want to buy
    ->setListingId('null')
    
    // The private key of the blockchain address from which the fee will be deducted
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) (Only if you pay with the native blockchain currency) The price of the asset that you want to buy...
    ->setAmount('1')
    
    // (optional) (Only if you pay with the fungible tokens) The blockchain address of the fungible tokens. Do not ...
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) (Only if you want to buy the asset on behalf of someone else and this person wants to pay with th...
    ->setBuyer('0x587422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->buyAssetOnMarketplace($arg_buy_asset_on_marketplace);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->marketplace()->buyAssetOnMarketplace(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->marketplace()->buyAssetOnMarketplace(): %s\n", 
        $exc->getMessage()
    );
}