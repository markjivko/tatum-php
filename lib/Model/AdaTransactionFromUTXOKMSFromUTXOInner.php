<?php

/**
 * AdaTransactionFromUTXOKMS_fromUTXO_inner Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * AdaTransactionFromUTXOKMS_fromUTXO_inner Model
 */
class AdaTransactionFromUTXOKMSFromUTXOInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaTransactionFromUTXOKMS_fromUTXO_inner";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 1, "n" => [0], "x" => [2147483647]]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * AdaTransactionFromUTXOKMSFromUTXOInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_hash
     *
     * @return string
     */
    public function getTxHash(): string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string $tx_hash The transaction hash of the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxHash(string $tx_hash) {
        return $this->_set("tx_hash", $tx_hash);
    }

    /**
     * Get index
     *
     * @return float
     */
    public function getIndex(): float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float $index The index of the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that holds the UTXO to be spent
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
