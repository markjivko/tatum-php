<?php

/**
 * TransferKlay20Blockchain_fee Model
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
 * TransferKlay20Blockchain_fee Model
 * 
 * @description Custom defined fee. If not present, it will be calculated automatically.
 */
class TransferKlay20BlockchainFee extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferKlay20Blockchain_fee";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit", null, ["r" => 1, "p" => "/^[+]?\\d+$/"]], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice", null, ["r" => 1, "p" => "/^[+]?\\d+$/"]]
    ];

    /**
     * TransferKlay20BlockchainFee
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get gas_limit
     *
     * @return string
     */
    public function getGasLimit(): string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string $gas_limit Gas limit for transaction in gas price.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasLimit(string $gas_limit) {
        return $this->_set("gas_limit", $gas_limit);
    }

    /**
     * Get gas_price
     *
     * @return string
     */
    public function getGasPrice(): string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string $gas_price Gas price in Gpeb.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGasPrice(string $gas_price) {
        return $this->_set("gas_price", $gas_price);
    }
}
