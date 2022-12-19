<?php

/**
 * BtcTransactionFromAddressKMSSource Model
 *
 * @version   3.17.0
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
 * BtcTransactionFromAddressKMSSource Model
 */
class BtcTransactionFromAddressKMSSource extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcTransactionFromAddressKMSSource";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"]
    ];

    /**
     * BtcTransactionFromAddressKMSSource
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "signature_id"=>null, "index"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
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
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
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
     * @param string $address The blockchain address to send the assets from
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The KMS identifier of the private key of the address to send the assets from
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

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
     * @param float|null $index (Only if the signature ID is mnemonic-based and you run KMS v6.2 or later) The index of the address to send the assets from that was generated from the mnemonic
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index > 2147483647)) {
            throw new IAE('BtcTransactionFromAddressKMSSource.setIndex: $index must be <=2147483647');
        }
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('BtcTransactionFromAddressKMSSource.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }
}
