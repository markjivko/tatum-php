<?php

/**
 * AdaUTXO Model
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

use InvalidArgumentException as IAE;

/**
 * AdaUTXO Model
 */
class AdaUTXO extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaUTXO";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null], 
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null]
    ];

    /**
     * AdaUTXO
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];
        return $ip;
    }


    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Sent amount in Lovelace - 1/1000000 of ADA.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index Index of the output in the transaction.
     * @return $this
     */
    public function setIndex(?float $index) {
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get tx_hash
     *
     * @return string|null
     */
    public function getTxHash(): ?string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string|null $tx_hash Transaction hash.
     * @return $this
     */
    public function setTxHash(?string $tx_hash) {
        $this->_data['tx_hash'] = $tx_hash;

        return $this;
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Recipient address.
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }
}
