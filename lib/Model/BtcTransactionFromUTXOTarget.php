<?php

/**
 * BtcTransactionFromUTXOTarget Model
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
 * BtcTransactionFromUTXOTarget Model
 */
class BtcTransactionFromUTXOTarget extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcTransactionFromUTXOTarget";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null], 
        "value" => ["value", "float", null, "getValue", "setValue", null]
    ];

    /**
     * BtcTransactionFromUTXOTarget
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
        if (is_null($this->_data['value'])) {
            $ip[] = "'value' can't be null";
        }
        if (($this->_data['value'] < 0)) {
            $ip[] = "'value' must be >= 0";
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
     * @param string $address The blockchain address to receive the assets
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float $value The amount to receive (in BTC)
     * @return $this
     */
    public function setValue(float $value) {
        if (($value < 0)) {
            throw new IAE('BtcTransactionFromUTXOTarget.setValue: $value must be >=0');
        }
        $this->_data['value'] = $value;

        return $this;
    }
}
