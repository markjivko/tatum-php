<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#createfuturetrade
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_create_future_trade = (new \Tatum\Model\CreateFutureTrade())
    
    // Type of future the trade, FUTURE_BUY, FUTURE_SELL
    ->setType('BUY')
    
    // Price to buy / sell
    ->setPrice('8650.4')
    
    // Amount of the trade to be bought / sold
    ->setAmount('15000')
    
    // Trading pair
    ->setPair('BTC/EUR')
    
    // ID of the account of the currency 1 trade currency
    ->setCurrency1AccountId('7c21ed165e294db78b95f0f1')
    
    // ID of the account of the currency 2 trade currency
    ->setCurrency2AccountId('7c21ed165e294db78b95f0f1')
    
    // (optional) ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccoun...
    ->setFeeAccountId('7c21ed165e294db78b95f0f1')
    
    // (optional) Percentage of the trade amount to be paid as a fee.
    ->setFee(1.5)
    
    // 
    ->setAttr(null);

try {

    /** @var \Tatum\Model\Id $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->createFutureTrade($arg_create_future_trade);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->orderBook()->createFutureTrade(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->orderBook()->createFutureTrade(): %s\n", 
        $exc->getMessage()
    );
}