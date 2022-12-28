<?php

/**
 * AdaTransaction_fromAddress_inner Model
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
 * AdaTransaction_fromAddress_inner Model
 */
class AdaTransactionFromAddressInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransaction_fromAddress_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null]
    ];

    /**
     * AdaTransactionFromAddressInner
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
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        return $ip;
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
     * @param string $address Address to send assets from.
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
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
     * @param string|null $private_key Private key of the address to send assets from. Private key, or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        $this->_data['private_key'] = $private_key;

        return $this;
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
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
