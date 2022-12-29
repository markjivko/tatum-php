<?php

/**
 * AdaTransaction_fromUTXO_inner Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

/**
 * AdaTransaction_fromUTXO_inner Model
 */
class AdaTransactionFromUTXOInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransaction_fromUTXO_inner";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 1, "n" => [0], "x" => [2147483647]]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 0, "nl" => 192, "xl" => 192]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 0]]
    ];

    /**
     * AdaTransactionFromUTXOInner
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
     * @param string $tx_hash Transaction hash of the UTXO to be spent.
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
     * @param float $index Index of the UTXO to be spent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get private_key
     *
     * @return string|null
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string|null $private_key Private key of the UTXO to be spent. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        return $this->_set("private_key", $private_key);
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string|null $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
