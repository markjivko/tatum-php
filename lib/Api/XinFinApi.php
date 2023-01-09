<?php

/**
 * Implementation of XinFin API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * XinFin API
 */
class XinFinApi extends AbstractApi {
    /**
     * Invoke a method in a smart contract on XinFin
     *
     * @param \Tatum\Model\CallXdcReadSmartContractMethod $call_xdc_read_smart_contract_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callXdcReadSmartContractMethod(\Tatum\Model\CallXdcReadSmartContractMethod $call_xdc_read_smart_contract_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/smartcontract", [], $rHeaders, [], $call_xdc_read_smart_contract_method
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on XinFin
     *
     * @param \Tatum\Model\CallXdcSmartContractMethod $call_xdc_smart_contract_method 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callXdcSmartContractMethod(\Tatum\Model\CallXdcSmartContractMethod $call_xdc_smart_contract_method) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/smartcontract", [], $rHeaders, [], $call_xdc_smart_contract_method
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on XinFin
     *
     * @param \Tatum\Model\CallXdcSmartContractMethodKMS $call_xdc_smart_contract_method_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CallSmartContractMethod200Response
     */
    public function callXdcSmartContractMethodKMS(\Tatum\Model\CallXdcSmartContractMethodKMS $call_xdc_smart_contract_method_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\CallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/smartcontract", [], $rHeaders, [], $call_xdc_smart_contract_method_kms
            ), 
            "\Tatum\Model\CallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Send XDC / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferXdcBlockchain $transfer_xdc_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXdcBlockchain(\Tatum\Model\TransferXdcBlockchain $transfer_xdc_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/transaction", [], $rHeaders, [], $transfer_xdc_blockchain
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send XDC / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferXdcBlockchainKMS $transfer_xdc_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function transferXdcBlockchainKMS(\Tatum\Model\TransferXdcBlockchainKMS $transfer_xdc_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/transaction", [], $rHeaders, [], $transfer_xdc_blockchain_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed XDC transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function xdcBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate XDC account address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XdcGenerateAddress200Response
     */
    public function xdcGenerateAddress(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\XdcGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/xdc/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\XdcGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate XDC private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function xdcGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate XDC wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function xdcGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling XinFinApi.xdcGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/xdc/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get XDC Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XdcGetBalance200Response
     */
    public function xdcGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\XdcGetBalance200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/xdc/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\XdcGetBalance200Response"
        );
            
        return $result;
    }
    
    /**
     * Get XDC block by hash
     *
     * @param string $hash Block hash or block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XdcBlock
     */
    public function xdcGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\XdcBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/xdc/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\XdcBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function xdcGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/xdc/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get XDC Transaction
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XdcTx
     */
    public function xdcGetTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\XdcTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/xdc/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\XdcTx"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing XDC transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function xdcGetTransactionCount(string $address) {
        if (strlen($address) > 42) {
            throw new IAE('Invalid length for "$address" when calling XinFinApi.xdcGetTransactionCount, must be smaller than or equal to 42');
        }

        if (strlen($address) < 42) {
            throw new IAE('Invalid length for "$address" when calling XinFinApi.xdcGetTransactionCount, must be bigger than or equal to 42');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/xdc/transaction/count/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Web3 HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function xdcWeb3Driver(string $x_api_key, object $body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/xdc/web3/{xApiKey}", ["xApiKey" => $x_api_key]), [], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
