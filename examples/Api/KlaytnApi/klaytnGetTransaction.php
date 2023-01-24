<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @link    https://tatumio.github.io/tatum-php/Api/KlaytnApi/#klaytngettransaction
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

// Transaction hash
$arg_hash = "0xe6e7340394958674cdf8606936d292f565e4ecc476aaa8b258ec8a141f7c75d7";

try {

    /**
     * GET /v3/klaytn/transaction/{hash}
     * 
     * @var \Tatum\Model\KlaytnTx $response
     */
    $response = $sdk->mainnet()
        ->api()
        ->klaytn()
        ->klaytnGetTransaction($arg_hash);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->klaytn()->klaytnGetTransaction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->klaytn()->klaytnGetTransaction(): %s\n", 
        $exc->getMessage()
    );
}