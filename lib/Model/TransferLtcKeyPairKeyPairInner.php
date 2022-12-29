<?php

/**
 * TransferLtcKeyPair_keyPair_inner Model
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
 * TransferLtcKeyPair_keyPair_inner Model
 */
class TransferLtcKeyPairKeyPairInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferLtcKeyPair_keyPair_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0, "nl" => 30, "xl" => 50]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 0, "nl" => 52, "xl" => 52]]
    ];

    /**
     * TransferLtcKeyPairKeyPairInner
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
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Blockchain address assigned to account withdrawal is made from.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
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
     * @param string|null $private_key Private key of blockchain address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
