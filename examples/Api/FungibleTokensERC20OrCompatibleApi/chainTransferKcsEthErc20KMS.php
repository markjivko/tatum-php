<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#chaintransferkcsetherc20kms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk(); /* <<< Set your API keys here */

$arg_chain_transfer_kcs_eth_erc20_kms = (new \Tatum\Model\ChainTransferKcsEthErc20KMS())
    
    // The blockchain to work with
    ->setChain('KCS')
    
    // The blockchain address to send the fungible tokens to
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The blockchain address of the fungible token smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The amount of the fungible tokens to be sent
    ->setAmount('100000')
    
    // The number of decimal places that the fungible tokens have
    ->setDigits(18)
    
    // The KMS identifier of the private key of the blockchain address from which the fee will be deducted
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->chainTransferKcsEthErc20KMS($arg_chain_transfer_kcs_eth_erc20_kms, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferKcsEthErc20KMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->fungibleTokensERC20OrCompatible()->chainTransferKcsEthErc20KMS(): %s\n", 
        $exc->getMessage()
    );
}