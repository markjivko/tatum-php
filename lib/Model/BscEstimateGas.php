<?php

/**
 * BscEstimateGas Model
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
 * BscEstimateGas Model
 */
class BscEstimateGas extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BscEstimateGas";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "data" => ["data", "string", null, "getData", "setData"]
    ];

    /**
     * BscEstimateGas
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "to"=>null, "amount"=>null, "data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 42)) {
            $ip[] = "'from' length must be <= 42";
        }
        if ((mb_strlen($this->_data['from']) < 42)) {
            $ip[] = "'from' length must be >= 42";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['data']) && (mb_strlen($this->_data['data']) > 50000)) {
            $ip[] = "'data' length must be <= 50000";
        }
        if (!is_null($this->_data['data']) && !preg_match("/^(0x|0h)?[0-9A-F]+$/", $this->_data['data'])) {
            $ip[] = "'data' must match /^(0x|0h)?[0-9A-F]+$/";
        }
        
        return $ip;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender address.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 42)) {
            throw new IAE('BscEstimateGas.setFrom: $from length must be <= 42');
        }
        if ((mb_strlen($from) < 42)) {
            throw new IAE('BscEstimateGas.setFrom: $from length must be >= 42');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 42)) {
            throw new IAE('BscEstimateGas.setTo: $to length must be <= 42');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('BscEstimateGas.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in BSC.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('BscEstimateGas.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Additional data, that can be passed to blockchain transaction as data property.
     * @return $this
     */
    public function setData(?string $data) {
        if (!is_null($data) && (mb_strlen($data) > 50000)) {
            throw new IAE('BscEstimateGas.setData: $data length must be <= 50000');
        }
        if (!is_null($data) && (!preg_match("/^(0x|0h)?[0-9A-F]+$/", $data))) {
            throw new IAE('BscEstimateGas.setData: $data must match /^(0x|0h)?[0-9A-F]+$/, ' . var_export($data, true) . ' given');
        }
        $this->_data['data'] = $data;

        return $this;
    }
}
