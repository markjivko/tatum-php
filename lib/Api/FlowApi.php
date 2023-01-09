<?php

/**
 * Implementation of Flow API
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
 * Flow API
 */
class FlowApi extends AbstractApi {
    /**
     * Add public key to Flow address
     *
     * @param \Tatum\Model\FlowAddPubKeyMnemonic $flow_add_pub_key_mnemonic 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowAddPubKeyMnemonic(\Tatum\Model\FlowAddPubKeyMnemonic $flow_add_pub_key_mnemonic) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", "/v3/flow/account", [], $rHeaders, [], $flow_add_pub_key_mnemonic
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Add public key to Flow address
     *
     * @param \Tatum\Model\FlowAddPubKeySecret $flow_add_pub_key_secret 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowAddPubKeySecret(\Tatum\Model\FlowAddPubKeySecret $flow_add_pub_key_secret) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", "/v3/flow/account", [], $rHeaders, [], $flow_add_pub_key_secret
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Add public key to Flow address
     *
     * @param \Tatum\Model\FlowAddPubKeySecretKMS $flow_add_pub_key_secret_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowAddPubKeySecretKMS(\Tatum\Model\FlowAddPubKeySecretKMS $flow_add_pub_key_secret_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", "/v3/flow/account", [], $rHeaders, [], $flow_add_pub_key_secret_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Create Flow address from public key
     *
     * @param \Tatum\Model\FlowCreateAddressFromPubKeyKMS $flow_create_address_from_pub_key_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
     */
    public function flowCreateAddressFromPubKeyKMS(\Tatum\Model\FlowCreateAddressFromPubKeyKMS $flow_create_address_from_pub_key_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/account", [], $rHeaders, [], $flow_create_address_from_pub_key_kms
            ), 
            "\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response"
        );
            
        return $result;
    }
    
    /**
     * Create Flow address from public key
     *
     * @param \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic $flow_create_address_from_pub_key_mnemonic 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
     */
    public function flowCreateAddressFromPubKeyMnemonic(\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic $flow_create_address_from_pub_key_mnemonic) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/account", [], $rHeaders, [], $flow_create_address_from_pub_key_mnemonic
            ), 
            "\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response"
        );
            
        return $result;
    }
    
    /**
     * Create Flow address from public key
     *
     * @param \Tatum\Model\FlowCreateAddressFromPubKeySecret $flow_create_address_from_pub_key_secret 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response
     */
    public function flowCreateAddressFromPubKeySecret(\Tatum\Model\FlowCreateAddressFromPubKeySecret $flow_create_address_from_pub_key_secret) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/account", [], $rHeaders, [], $flow_create_address_from_pub_key_secret
            ), 
            "\Tatum\Model\FlowCreateAddressFromPubKeyMnemonic200Response"
        );
            
        return $result;
    }
    
    /**
     * Send arbitrary transaction to blockchain
     *
     * @param \Tatum\Model\FlowCustomTransactionKMS $flow_custom_transaction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowCustomTransactionKMS(\Tatum\Model\FlowCustomTransactionKMS $flow_custom_transaction_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction/custom", [], $rHeaders, [], $flow_custom_transaction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send arbitrary transaction to blockchain
     *
     * @param \Tatum\Model\FlowCustomTransactionMnemonic $flow_custom_transaction_mnemonic 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowCustomTransactionMnemonic(\Tatum\Model\FlowCustomTransactionMnemonic $flow_custom_transaction_mnemonic) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction/custom", [], $rHeaders, [], $flow_custom_transaction_mnemonic
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send arbitrary transaction to blockchain
     *
     * @param \Tatum\Model\FlowCustomTransactionPK $flow_custom_transaction_pk 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowCustomTransactionPK(\Tatum\Model\FlowCustomTransactionPK $flow_custom_transaction_pk) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction/custom", [], $rHeaders, [], $flow_custom_transaction_pk
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Generate Flow address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowGenerateAddress200Response
     */
    public function flowGenerateAddress(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/flow/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\FlowGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Flow public key from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowGeneratePubKey200Response
     */
    public function flowGeneratePubKey(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowGeneratePubKey200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/flow/pubkey/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\FlowGeneratePubKey200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Flow private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function flowGeneratePubKeyPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Flow wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function flowGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling FlowApi.flowGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/flow/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get the balance of a Flow account
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowAccount
     */
    public function flowGetAccount(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowAccount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/flow/account/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\FlowAccount"
        );
            
        return $result;
    }
    
    /**
     * Get Flow Block by hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowBlock
     */
    public function flowGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/flow/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\FlowBlock"
        );
            
        return $result;
    }
    
    /**
     * Get Flow current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function flowGetBlockChainInfo() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/flow/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Flow events from blocks
     *
     * @param string $type Event type to search for
     * @param float $from Block height to start searching
     * @param float $to Block height to end searching
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowEvent[]
     */
    public function flowGetBlockEvents(string $type, float $from, float $to) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowEvent[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/flow/block/events", [
                    "type" => S::toQueryValue($type),
                    "from" => S::toQueryValue($from),
                    "to" => S::toQueryValue($to),
                ], $rHeaders, []
            ), 
            "\Tatum\Model\FlowEvent[]"
        );
            
        return $result;
    }
    
    /**
     * Get Flow Transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\FlowTx
     */
    public function flowGetRawTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\FlowTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/flow/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\FlowTx"
        );
            
        return $result;
    }
    
    /**
     * Send Flow to blockchain addresses
     *
     * @param \Tatum\Model\FlowTransactionKMS $flow_transaction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowTransactionKMS(\Tatum\Model\FlowTransactionKMS $flow_transaction_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction", [], $rHeaders, [], $flow_transaction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send Flow to blockchain addresses
     *
     * @param \Tatum\Model\FlowTransactionMnemonic $flow_transaction_mnemonic 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowTransactionMnemonic(\Tatum\Model\FlowTransactionMnemonic $flow_transaction_mnemonic) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction", [], $rHeaders, [], $flow_transaction_mnemonic
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
    /**
     * Send Flow to blockchain addresses
     *
     * @param \Tatum\Model\FlowTransactionPK $flow_transaction_pk 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function flowTransactionPK(\Tatum\Model\FlowTransactionPK $flow_transaction_pk) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/flow/transaction", [], $rHeaders, [], $flow_transaction_pk
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }
    
}
