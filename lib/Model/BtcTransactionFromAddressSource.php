<?php

/**
 * BtcTransactionFromAddressSource Model
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
 * BtcTransactionFromAddressSource Model
 */
class BtcTransactionFromAddressSource extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcTransactionFromAddressSource";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1]]
    ];

    /**
     * BtcTransactionFromAddressSource
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address The blockchain address to send the assets from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key The private key of the address to send the assets from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
