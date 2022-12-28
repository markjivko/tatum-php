<?php

/**
 * LtcUTXO Model
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
 * LtcUTXO Model
 */
class LtcUTXO extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcUTXO";
    protected static $_definition = [
        "version" => ["version", "float", null, "getVersion", "setVersion", null], 
        "height" => ["height", "float", null, "getHeight", "setHeight", null], 
        "value" => ["value", "float", null, "getValue", "setValue", null], 
        "script" => ["script", "string", null, "getScript", "setScript", null], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null], 
        "coinbase" => ["coinbase", "bool", null, "getCoinbase", "setCoinbase", null], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null]
    ];

    /**
     * LtcUTXO
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
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version The version of the transaction
     * @return $this
     */
    public function setVersion(?float $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The height (number) of the block where the transaction is included in
     * @return $this
     */
    public function setHeight(?float $height) {
        $this->_data['height'] = $height;

        return $this;
    }

    /**
     * Get value
     *
     * @return float|null
     */
    public function getValue(): ?float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float|null $value The amount of the UTXO
     * @return $this
     */
    public function setValue(?float $value) {
        $this->_data['value'] = $value;

        return $this;
    }

    /**
     * Get script
     *
     * @return string|null
     */
    public function getScript(): ?string {
        return $this->_data["script"];
    }

    /**
     * Set script
     * 
     * @param string|null $script Data generated by the spender; is almost always used as variables to satisfy the conditions in the pubkey script
     * @return $this
     */
    public function setScript(?string $script) {
        $this->_data['script'] = $script;

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
     * @param string|null $address The blockchain address of the UTXO owner
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get coinbase
     *
     * @return bool|null
     */
    public function getCoinbase(): ?bool {
        return $this->_data["coinbase"];
    }

    /**
     * Set coinbase
     * 
     * @param bool|null $coinbase If set to \"true\", the transaction is a coinbase transaction (a transaction created by a Bitcoin miner to collect their reward)
     * @return $this
     */
    public function setCoinbase(?bool $coinbase) {
        $this->_data['coinbase'] = $coinbase;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash The hash of the transaction
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

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
     * @param float|null $index The index of the transaction output checked for the UTXO
     * @return $this
     */
    public function setIndex(?float $index) {
        $this->_data['index'] = $index;

        return $this;
    }
}
