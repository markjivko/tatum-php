<?php

/**
 * FlowCreateAddressFromPubKeyMnemonic Model
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
 * FlowCreateAddressFromPubKeyMnemonic Model
 */
class FlowCreateAddressFromPubKeyMnemonic extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowCreateAddressFromPubKeyMnemonic";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey", null, ["r" => 1, "nl" => 128, "xl" => 128]], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic", null, ["r" => 1, "nl" => 1, "xl" => 500]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 1, "n" => [0]]]
    ];

    /**
     * FlowCreateAddressFromPubKeyMnemonic
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain account to send from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get public_key
     *
     * @return string
     */
    public function getPublicKey(): string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string $public_key Public key to be used; will be assigned to a newly created address and will have a weight of 1000
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPublicKey(string $public_key) {
        return $this->_set("public_key", $public_key);
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic to generate private key.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        return $this->_set("mnemonic", $mnemonic);
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
     * @param float $index Index to the specific address from mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(float $index) {
        return $this->_set("index", $index);
    }
}
