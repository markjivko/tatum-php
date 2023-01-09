<?php

/**
 * Implementation of Tron API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Tron API
 */
class TronApi extends AbstractApi {
    /**
     * Create a TRC-10 token
     *
     * @param \Tatum\Model\CreateTronTrc10Blockchain $create_tron_trc10_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createTronTrc10Blockchain(\Tatum\Model\CreateTronTrc10Blockchain $create_tron_trc10_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc10/deploy", [], $rHeaders, [], $create_tron_trc10_blockchain
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Create a TRC-10 token
     *
     * @param \Tatum\Model\CreateTronTrc10BlockchainKMS $create_tron_trc10_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createTronTrc10BlockchainKMS(\Tatum\Model\CreateTronTrc10BlockchainKMS $create_tron_trc10_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc10/deploy", [], $rHeaders, [], $create_tron_trc10_blockchain_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Create a TRC-20 token
     *
     * @param \Tatum\Model\CreateTronTrc20Blockchain $create_tron_trc20_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createTronTrc20Blockchain(\Tatum\Model\CreateTronTrc20Blockchain $create_tron_trc20_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc20/deploy", [], $rHeaders, [], $create_tron_trc20_blockchain
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Create a TRC-20 token
     *
     * @param \Tatum\Model\CreateTronTrc20BlockchainKMS $create_tron_trc20_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createTronTrc20BlockchainKMS(\Tatum\Model\CreateTronTrc20BlockchainKMS $create_tron_trc20_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc20/deploy", [], $rHeaders, [], $create_tron_trc20_blockchain_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Freeze the balance of a TRON account
     *
     * @param \Tatum\Model\FreezeTron $freeze_tron 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function freezeTron(\Tatum\Model\FreezeTron $freeze_tron) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/freezeBalance", [], $rHeaders, [], $freeze_tron
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Freeze the balance of a TRON account
     *
     * @param \Tatum\Model\FreezeTronKMS $freeze_tron_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function freezeTronKMS(\Tatum\Model\FreezeTronKMS $freeze_tron_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/freezeBalance", [], $rHeaders, [], $freeze_tron_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate a TRON wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronWallet
     */
    public function generateTronwallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling TronApi.generateTronwallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronWallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/tron/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\TronWallet"
        );
            
        return $result;
    }
    
    /**
     * Send TRX to a TRON account
     *
     * @param \Tatum\Model\TransferTronBlockchain $transfer_tron_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronBlockchain(\Tatum\Model\TransferTronBlockchain $transfer_tron_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/transaction", [], $rHeaders, [], $transfer_tron_blockchain
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Send TRX to a TRON account
     *
     * @param \Tatum\Model\TransferTronBlockchainKMS $transfer_tron_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronBlockchainKMS(\Tatum\Model\TransferTronBlockchainKMS $transfer_tron_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/transaction", [], $rHeaders, [], $transfer_tron_blockchain_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Send TRC-10 tokens to a TRON account
     *
     * @param \Tatum\Model\TransferTronTrc10Blockchain $transfer_tron_trc10_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronTrc10Blockchain(\Tatum\Model\TransferTronTrc10Blockchain $transfer_tron_trc10_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc10/transaction", [], $rHeaders, [], $transfer_tron_trc10_blockchain
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Send TRC-10 tokens to a TRON account
     *
     * @param \Tatum\Model\TransferTronTrc10BlockchainKMS $transfer_tron_trc10_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronTrc10BlockchainKMS(\Tatum\Model\TransferTronTrc10BlockchainKMS $transfer_tron_trc10_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc10/transaction", [], $rHeaders, [], $transfer_tron_trc10_blockchain_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Send TRC-20 tokens to a TRON account
     *
     * @param \Tatum\Model\TransferTronTrc20Blockchain $transfer_tron_trc20_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronTrc20Blockchain(\Tatum\Model\TransferTronTrc20Blockchain $transfer_tron_trc20_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc20/transaction", [], $rHeaders, [], $transfer_tron_trc20_blockchain
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Send TRC-20 tokens to a TRON account
     *
     * @param \Tatum\Model\TransferTronTrc20BlockchainKMS $transfer_tron_trc20_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function transferTronTrc20BlockchainKMS(\Tatum\Model\TransferTronTrc20BlockchainKMS $transfer_tron_trc20_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/trc20/transaction", [], $rHeaders, [], $transfer_tron_trc20_blockchain_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Get all transactions for a TRON account
     *
     * @param string $address The address of the TRON account to get all transactions for
     * @param string|null $next The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccountTx200Response
     */
    public function tronAccountTx(string $address, string $next = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronAccountTx200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/transaction/account/{address}", ["address" => $address]), [
                    "next" => isset($next) ? S::toQueryValue($next) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\TronAccountTx200Response"
        );
            
        return $result;
    }
    
    /**
     * Get TRC-20 transactions for a TRON account
     *
     * @param string $address The address of the TRON account to get TRC-20 transactions for
     * @param string|null $next The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccountTx20200Response
     */
    public function tronAccountTx20(string $address, string $next = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronAccountTx20200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/transaction/account/{address}/trc20", ["address" => $address]), [
                    "next" => isset($next) ? S::toQueryValue($next) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\TronAccountTx20200Response"
        );
            
        return $result;
    }
    
    /**
     * Broadcast a TRON transaction
     *
     * @param \Tatum\Model\TronBroadcast $tron_broadcast 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronBroadcast(\Tatum\Model\TronBroadcast $tron_broadcast) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/broadcast", [], $rHeaders, [], $tron_broadcast
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate a TRON address from the wallet's extended public key
     *
     * @param string $xpub The extended public key of the wallet; can be in the base58 format (111 characters) or the hexadecimal format (130 characters)
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronGenerateAddress200Response
     */
    public function tronGenerateAddress(string $xpub, float $index) {
        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling TronApi.tronGenerateAddress, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\TronGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate the private key for a TRON address
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function tronGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/tron/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Get the TRON account by its address
     *
     * @param string $address Account address.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccount
     */
    public function tronGetAccount(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/account/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\TronAccount"
        );
            
        return $result;
    }
    
    /**
     * Get a TRON block by its hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronBlock
     */
    public function tronGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\TronBlock"
        );
            
        return $result;
    }
    
    /**
     * Get the current TRON block
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronGetCurrentBlock200Response
     */
    public function tronGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronGetCurrentBlock200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/tron/info", [], $rHeaders, []
            ), 
            "\Tatum\Model\TronGetCurrentBlock200Response"
        );
            
        return $result;
    }
    
    /**
     * Get a TRON transaction by its hash
     *
     * @param string $hash Transaction hash.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronTx
     */
    public function tronGetTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\TronTx"
        );
            
        return $result;
    }
    
    /**
     * Get information about a TRC-10 token
     *
     * @param string $id_or_owner_address The ID of the TRC-10 token or the address of the token&#39;s owner
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TronTrc10Detail
     */
    public function tronTrc10Detail(string $id_or_owner_address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\TronTrc10Detail $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/tron/trc10/detail/{idOrOwnerAddress}", ["idOrOwnerAddress" => $id_or_owner_address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\TronTrc10Detail"
        );
            
        return $result;
    }
    
}
