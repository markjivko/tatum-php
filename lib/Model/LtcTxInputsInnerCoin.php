<?php

/**
 * LtcTx_inputs_inner_coin Model
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
 * LtcTx_inputs_inner_coin Model
 */
class LtcTxInputsInnerCoin extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcTx_inputs_inner_coin";
    protected static $_definition = [
        "version" => ["version", "float", null, "getVersion", "setVersion", null, ["r" => 0]], 
        "height" => ["height", "float", null, "getHeight", "setHeight", null, ["r" => 0]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]], 
        "script" => ["script", "string", null, "getScript", "setScript", null, ["r" => 0]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "coinbase" => ["coinbase", "bool", null, "getCoinbase", "setCoinbase", null, ["r" => 0]]
    ];

    /**
     * LtcTxInputsInnerCoin
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param float|null $version version
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVersion(?float $version) {
        return $this->_set("version", $version);
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
     * @param float|null $height height
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeight(?float $height) {
        return $this->_set("height", $height);
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
     * @param string|null $value Value of the transaction, in LTC.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
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
     * @param string|null $script script
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setScript(?string $script) {
        return $this->_set("script", $script);
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
     * @param string|null $address Sender address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
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
     * @param bool|null $coinbase Coinbase transaction - miner fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCoinbase(?bool $coinbase) {
        return $this->_set("coinbase", $coinbase);
    }
}
