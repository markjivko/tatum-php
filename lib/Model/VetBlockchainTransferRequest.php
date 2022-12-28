<?php

/**
 * VetBlockchainTransfer_request Model
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
 * VetBlockchainTransfer_request Model
 */
class VetBlockchainTransferRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetBlockchainTransfer_request";
    protected static $_definition = [
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "data" => ["data", "string", null, "getData", "setData", null], 
        "fee" => ["fee", "\Tatum\Model\TransferVetBlockchainFee", null, "getFee", "setFee", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null]
    ];

    /**
     * VetBlockchainTransferRequest
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
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 100)) {
            $ip[] = "'to' length must be <= 100";
        }
        if ((mb_strlen($this->_data['to']) < 1)) {
            $ip[] = "'to' length must be >= 1";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 6)) {
            $ip[] = "'from_private_key' length must be >= 6";
        }
        if (!is_null($this->_data['data']) && (mb_strlen($this->_data['data']) > 10000)) {
            $ip[] = "'data' length must be <= 10000";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        return $ip;
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
        if ((mb_strlen($to) > 100)) {
            throw new IAE('VetBlockchainTransferRequest.setTo: $to length must be <= 100');
        }
        if ((mb_strlen($to) < 1)) {
            throw new IAE('VetBlockchainTransferRequest.setTo: $to length must be >= 1');
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
     * @param string $amount Amount to be sent in VET
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('VetBlockchainTransferRequest.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

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
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('VetBlockchainTransferRequest.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 6)) {
            throw new IAE('VetBlockchainTransferRequest.setFromPrivateKey: $from_private_key length must be >= 6');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
     * @param string|null $data Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
     * @return $this
     */
    public function setData(?string $data) {
        if (!is_null($data) && (mb_strlen($data) > 10000)) {
            throw new IAE('VetBlockchainTransferRequest.setData: $data length must be <= 10000');
        }
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\TransferVetBlockchainFee|null
     */
    public function getFee(): ?\Tatum\Model\TransferVetBlockchainFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\TransferVetBlockchainFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\TransferVetBlockchainFee $fee) {
        $this->_data['fee'] = $fee;

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
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
