<?php

/**
 * TransferEgldBlockchain Model
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
 * TransferEgldBlockchain Model
 */
class TransferEgldBlockchain extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferEgldBlockchain";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "fee" => ["fee", "\Tatum\Model\TransferEgldBlockchainFee", null, "getFee", "setFee"], 
        "data" => ["data", "string", null, "getData", "setData"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"]
    ];

    /**
     * TransferEgldBlockchain
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "to"=>null, "amount"=>null, "fee"=>null, "data"=>null, "from_private_key"=>null] as $k => $v) {
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
        if ((mb_strlen($this->_data['from']) > 62)) {
            $ip[] = "'from' length must be <= 62";
        }
        if ((mb_strlen($this->_data['from']) < 62)) {
            $ip[] = "'from' length must be >= 62";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 62)) {
            $ip[] = "'to' length must be <= 62";
        }
        if ((mb_strlen($this->_data['to']) < 62)) {
            $ip[] = "'to' length must be >= 62";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
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
     * @param string $from Account address of the sender
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 62)) {
            throw new IAE('TransferEgldBlockchain.setFrom: $from length must be <= 62');
        }
        if ((mb_strlen($from) < 62)) {
            throw new IAE('TransferEgldBlockchain.setFrom: $from length must be >= 62');
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
     * @param string $to Account address of the receiver or smart contract
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 62)) {
            throw new IAE('TransferEgldBlockchain.setTo: $to length must be <= 62');
        }
        if ((mb_strlen($to) < 62)) {
            throw new IAE('TransferEgldBlockchain.setTo: $to length must be >= 62');
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
     * @param string $amount Value to be sent.
     * @return $this
     */
    public function setAmount(string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\TransferEgldBlockchainFee|null
     */
    public function getFee(): ?\Tatum\Model\TransferEgldBlockchainFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\TransferEgldBlockchainFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\TransferEgldBlockchainFee $fee) {
        $this->_data['fee'] = $fee;

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
     * @param string|null $data Additional data, that will be passed to blockchain transaction as data property.
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('TransferEgldBlockchain.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('TransferEgldBlockchain.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }
}
