<?php

/**
 * XrpTransferBlockchain_request Model
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
 * XrpTransferBlockchain_request Model
 */
class XrpTransferBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTransferBlockchain_request";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "from_secret" => ["fromSecret", "string", null, "getFromSecret", "setFromSecret"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "source_tag" => ["sourceTag", "int", null, "getSourceTag", "setSourceTag"], 
        "destination_tag" => ["destinationTag", "int", null, "getDestinationTag", "setDestinationTag"], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount"], 
        "token" => ["token", "string", null, "getToken", "setToken"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * XrpTransferBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_account"=>null, "to"=>null, "amount"=>null, "from_secret"=>null, "fee"=>null, "source_tag"=>null, "destination_tag"=>null, "issuer_account"=>null, "token"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_account'])) {
            $ip[] = "'from_account' can't be null";
        }
        if ((mb_strlen($this->_data['from_account']) > 34)) {
            $ip[] = "'from_account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from_account']) < 33)) {
            $ip[] = "'from_account' length must be >= 33";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 34)) {
            $ip[] = "'to' length must be <= 34";
        }
        if ((mb_strlen($this->_data['to']) < 33)) {
            $ip[] = "'to' length must be >= 33";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['from_secret'])) {
            $ip[] = "'from_secret' can't be null";
        }
        if ((mb_strlen($this->_data['from_secret']) > 29)) {
            $ip[] = "'from_secret' length must be <= 29";
        }
        if ((mb_strlen($this->_data['from_secret']) < 29)) {
            $ip[] = "'from_secret' length must be >= 29";
        }
        if (!is_null($this->_data['fee']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['issuer_account'])) {
            $ip[] = "'issuer_account' can't be null";
        }
        if ((mb_strlen($this->_data['issuer_account']) > 34)) {
            $ip[] = "'issuer_account' length must be <= 34";
        }
        if ((mb_strlen($this->_data['issuer_account']) < 33)) {
            $ip[] = "'issuer_account' length must be >= 33";
        }
        if (is_null($this->_data['token'])) {
            $ip[] = "'token' can't be null";
        }
        if ((mb_strlen($this->_data['token']) > 40)) {
            $ip[] = "'token' length must be <= 40";
        }
        if ((mb_strlen($this->_data['token']) < 40)) {
            $ip[] = "'token' length must be >= 40";
        }
        if (!preg_match("/^[A-F0-9]{40}$/", $this->_data['token'])) {
            $ip[] = "'token' must match /^[A-F0-9]{40}$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XRP account address. Must be the one used for generating deposit tags.
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        if ((mb_strlen($from_account) > 34)) {
            throw new IAE('XrpTransferBlockchainRequest.setFromAccount: $from_account length must be <= 34');
        }
        if ((mb_strlen($from_account) < 33)) {
            throw new IAE('XrpTransferBlockchainRequest.setFromAccount: $from_account length must be >= 33');
        }
        $this->_data['from_account'] = $from_account;

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
        if ((mb_strlen($to) > 34)) {
            throw new IAE('XrpTransferBlockchainRequest.setTo: $to length must be <= 34');
        }
        if ((mb_strlen($to) < 33)) {
            throw new IAE('XrpTransferBlockchainRequest.setTo: $to length must be >= 33');
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
     * @param string $amount Amount to be sent, in XRP.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('XrpTransferBlockchainRequest.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get from_secret
     *
     * @return string
     */
    public function getFromSecret(): string {
        return $this->_data["from_secret"];
    }

    /**
     * Set from_secret
     * 
     * @param string $from_secret Secret for account. Secret, or signature Id must be present.
     * @return $this
     */
    public function setFromSecret(string $from_secret) {
        if ((mb_strlen($from_secret) > 29)) {
            throw new IAE('XrpTransferBlockchainRequest.setFromSecret: $from_secret length must be <= 29');
        }
        if ((mb_strlen($from_secret) < 29)) {
            throw new IAE('XrpTransferBlockchainRequest.setFromSecret: $from_secret length must be >= 29');
        }
        $this->_data['from_secret'] = $from_secret;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be paid, in XRP. If omitted, current fee will be calculated.
     * @return $this
     */
    public function setFee(?string $fee) {
        if (!is_null($fee) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('XrpTransferBlockchainRequest.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get source_tag
     *
     * @return int|null
     */
    public function getSourceTag(): ?int {
        return $this->_data["source_tag"];
    }

    /**
     * Set source_tag
     * 
     * @param int|null $source_tag Source tag of sender account, if any.
     * @return $this
     */
    public function setSourceTag(?int $source_tag) {
        $this->_data['source_tag'] = $source_tag;

        return $this;
    }

    /**
     * Get destination_tag
     *
     * @return int|null
     */
    public function getDestinationTag(): ?int {
        return $this->_data["destination_tag"];
    }

    /**
     * Set destination_tag
     * 
     * @param int|null $destination_tag Destination tag of recipient account, if any.
     * @return $this
     */
    public function setDestinationTag(?int $destination_tag) {
        $this->_data['destination_tag'] = $destination_tag;

        return $this;
    }

    /**
     * Get issuer_account
     *
     * @return string
     */
    public function getIssuerAccount(): string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string $issuer_account Blockchain address of the issuer of the assets to create trust line for.
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        if ((mb_strlen($issuer_account) > 34)) {
            throw new IAE('XrpTransferBlockchainRequest.setIssuerAccount: $issuer_account length must be <= 34');
        }
        if ((mb_strlen($issuer_account) < 33)) {
            throw new IAE('XrpTransferBlockchainRequest.setIssuerAccount: $issuer_account length must be >= 33');
        }
        $this->_data['issuer_account'] = $issuer_account;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken(): string {
        return $this->_data["token"];
    }

    /**
     * Set token
     * 
     * @param string $token Asset name. Must be 160bit HEX string, e.g. SHA1.
     * @return $this
     */
    public function setToken(string $token) {
        if ((mb_strlen($token) > 40)) {
            throw new IAE('XrpTransferBlockchainRequest.setToken: $token length must be <= 40');
        }
        if ((mb_strlen($token) < 40)) {
            throw new IAE('XrpTransferBlockchainRequest.setToken: $token length must be >= 40');
        }
        if ((!preg_match("/^[A-F0-9]{40}$/", $token))) {
            throw new IAE('XrpTransferBlockchainRequest.setToken: $token must match /^[A-F0-9]{40}$/, ' . var_export($token, true) . ' given');
        }
        $this->_data['token'] = $token;

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
     * @param string $signature_id Identifier of the secret associated in signing application. Secret, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
