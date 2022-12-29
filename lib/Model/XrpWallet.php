<?php

/**
 * XrpWallet Model
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
 * XrpWallet Model
 */
class XrpWallet extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpWallet";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1]], 
        "secret" => ["secret", "string", null, "getSecret", "setSecret", null, ["r" => 1]]
    ];

    /**
     * XrpWallet
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
     * @param string $address Generated account address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret(): string {
        return $this->_data["secret"];
    }

    /**
     * Set secret
     * 
     * @param string $secret Generated secret for account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSecret(string $secret) {
        return $this->_set("secret", $secret);
    }
}
