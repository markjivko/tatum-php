<?php

/**
 * Implementation of Bitcoin API
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
 * Bitcoin API
 */
class BitcoinApi extends AbstractApi {
    /**
     * Broadcast a signed Bitcoin transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function btcBroadcast($broadcast_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/broadcast";

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }

    /**
     * Generate a Bitcoin address from the wallet's extended public key
     *
     * @param string $xpub Extended public key of a wallet.
     * @param float $index Derivation index of the desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GeneratedAddressBtc
     */
    public function btcGenerateAddress($xpub, $index) { 
        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling BitcoinApi.btcGenerateAddress, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/address/{xpub}/{index}";

        /** @var \Tatum\Model\GeneratedAddressBtc $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["xpub" => $xpub, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\GeneratedAddressBtc"
        );
            
        return $result;
    }

    /**
     * Generate the private key for a Bitcoin address
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function btcGenerateAddressPrivateKey($priv_key_request) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/wallet/priv";

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }

    /**
     * Generate a Bitcoin wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function btcGenerateWallet($mnemonic = null) { 
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling BitcoinApi.btcGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/wallet";

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }

    /**
     * Get the balance of a Bitcoin address
     *
     * @param string $address The blockchain address to get the balance for
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcBasedBalance
     */
    public function btcGetBalanceOfAddress($address) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/address/balance/{address}";

        /** @var \Tatum\Model\BtcBasedBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcBasedBalance"
        );
            
        return $result;
    }

    /**
     * Get a Bitcoin block by its hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcBlock
     */
    public function btcGetBlock($hash) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/block/{hash}";

        /** @var \Tatum\Model\BtcBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcBlock"
        );
            
        return $result;
    }

    /**
     * Get Bitcoin blockchain information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcInfo
     */
    public function btcGetBlockChainInfo() { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/info";

        /** @var \Tatum\Model\BtcInfo $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcInfo"
        );
            
        return $result;
    }

    /**
     * Get the hash of a Bitcoin block
     *
     * @param float $i The number of blocks preceding a particular block on a blockchain.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcBlockHash
     */
    public function btcGetBlockHash($i) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/block/hash/{i}";

        /** @var \Tatum\Model\BtcBlockHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["i" => $i]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcBlockHash"
        );
            
        return $result;
    }

    /**
     * Get transactions from the Bitcoin mempool
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return string[]
     */
    public function btcGetMempool() { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/mempool";

        /** @var string[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [], $rHeaders, []
            ), 
            "string[]"
        );
            
        return $result;
    }

    /**
     * Get a Bitcoin transaction by its hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTx
     */
    public function btcGetRawTransaction($hash) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/transaction/{hash}";

        /** @var \Tatum\Model\BtcTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcTx"
        );
            
        return $result;
    }

    /**
     * Get all transactions for a Bitcoin address
     *
     * @param string $address Address
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTx[]
     */
    public function btcGetTxByAddress($address, $page_size, $offset = null) { 
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling BitcoinApi.btcGetTxByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling BitcoinApi.btcGetTxByAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/transaction/address/{address}";

        /** @var \Tatum\Model\BtcTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["address" => $address]), $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\BtcTx[]"
        );
            
        return $result;
    }

    /**
     * Get information about a transaction output (UTXO) in a Bitcoin transaction
     *
     * @param string $hash The transaction hash
     * @param float $index The index of the transaction output that you want to check for the UTXO
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcUTXO
     */
    public function btcGetUTXO($hash, $index) { 
        if (strlen($hash) > 64) {
            throw new IAE('Invalid length for "$hash" when calling BitcoinApi.btcGetUTXO, must be smaller than or equal to 64');
        }

        if (strlen($hash) < 64) {
            throw new IAE('Invalid length for "$hash" when calling BitcoinApi.btcGetUTXO, must be bigger than or equal to 64');
        }

        if ($index < 0) {
            throw new IAE('Invalid value for "$index" when calling BitcoinApi.btcGetUTXO, must be bigger than or equal to 0.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/bitcoin/utxo/{hash}/{index}";

        /** @var \Tatum\Model\BtcUTXO $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["hash" => $hash, "index" => $index]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\BtcUTXO"
        );
            
        return $result;
    }

    /**
     * @deprecated
     * Connect to a Bitcoin node through an RPC driver
     *
     * @param \Tatum\Model\BtcRpcDriverRequest $btc_rpc_driver_request 
     * 
     * @return void
     */
    public function btcRpcDriver($btc_rpc_driver_request) {}
    
    /**
     * Send BTC to Bitcoin addresses
     *
     * @param \Tatum\Model\BtcTransactionFromAddress $btc_transaction_from_address 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function btcTransactionFromAddress($btc_transaction_from_address) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/transaction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $btc_transaction_from_address
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Send BTC to Bitcoin addresses
     *
     * @param \Tatum\Model\BtcTransactionFromAddressKMS $btc_transaction_from_address_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function btcTransactionFromAddressKMS($btc_transaction_from_address_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/transaction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $btc_transaction_from_address_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Send BTC to Bitcoin addresses
     *
     * @param \Tatum\Model\BtcTransactionFromUTXO $btc_transaction_from_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function btcTransactionFromUTXO($btc_transaction_from_utxo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/transaction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $btc_transaction_from_utxo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Send BTC to Bitcoin addresses
     *
     * @param \Tatum\Model\BtcTransactionFromUTXOKMS $btc_transaction_from_utxokms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function btcTransactionFromUTXOKMS($btc_transaction_from_utxokms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/bitcoin/transaction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $btc_transaction_from_utxokms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

}
