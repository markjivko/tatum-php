<?php

/**
 * TransferXlmBlockchainKMSAsset Model
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
 * TransferXlmBlockchainKMSAsset Model
 */
class TransferXlmBlockchainKMSAsset extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferXlmBlockchainKMSAsset";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount", null], 
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "initialize" => ["initialize", "bool", null, "getInitialize", "setInitialize", false], 
        "token" => ["token", "string", null, "getToken", "setToken", null], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount", null], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null]
    ];

    /**
     * TransferXlmBlockchainKMSAsset
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
        if (is_null($this->_data['from_account'])) {
            $ip[] = "'from_account' can't be null";
        }
        if ((mb_strlen($this->_data['from_account']) > 56)) {
            $ip[] = "'from_account' length must be <= 56";
        }
        if ((mb_strlen($this->_data['from_account']) < 56)) {
            $ip[] = "'from_account' length must be >= 56";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 56)) {
            $ip[] = "'to' length must be <= 56";
        }
        if ((mb_strlen($this->_data['to']) < 56)) {
            $ip[] = "'to' length must be >= 56";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (is_null($this->_data['token'])) {
            $ip[] = "'token' can't be null";
        }
        if ((mb_strlen($this->_data['token']) > 12)) {
            $ip[] = "'token' length must be <= 12";
        }
        if ((mb_strlen($this->_data['token']) < 1)) {
            $ip[] = "'token' length must be >= 1";
        }
        if (!preg_match("/^[a-zA-Z0-9]{1,12}$/", $this->_data['token'])) {
            $ip[] = "'token' must match /^[a-zA-Z0-9]{1,12}$/";
        }
        if (is_null($this->_data['issuer_account'])) {
            $ip[] = "'issuer_account' can't be null";
        }
        if ((mb_strlen($this->_data['issuer_account']) > 56)) {
            $ip[] = "'issuer_account' length must be <= 56";
        }
        if ((mb_strlen($this->_data['issuer_account']) < 56)) {
            $ip[] = "'issuer_account' length must be >= 56";
        }
        if (!is_null($this->_data['message']) && (mb_strlen($this->_data['message']) > 64)) {
            $ip[] = "'message' length must be <= 64";
        }
        if (!is_null($this->_data['message']) && !preg_match("/^[ -~]{0,64}$/", $this->_data['message'])) {
            $ip[] = "'message' must match /^[ -~]{0,64}$/";
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
     * @param string $from_account Blockchain account to send assets from
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        if ((mb_strlen($from_account) > 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setFromAccount: $from_account length must be <= 56');
        }
        if ((mb_strlen($from_account) < 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setFromAccount: $from_account length must be >= 56');
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
        if ((mb_strlen($to) > 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setTo: $to length must be <= 56');
        }
        if ((mb_strlen($to) < 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setTo: $to length must be >= 56');
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
     * @param string $amount Amount to be sent, in XLM.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

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

    /**
     * Get initialize
     *
     * @return bool|null
     */
    public function getInitialize(): ?bool {
        return $this->_data["initialize"];
    }

    /**
     * Set initialize
     * 
     * @param bool|null $initialize Set to true, if the destination address is not yet initialized and should be funded for the first time.
     * @return $this
     */
    public function setInitialize(?bool $initialize) {
        $this->_data['initialize'] = $initialize;

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
     * @param string $token Asset name. If not defined, transaction is being sent in native XLM asset.
     * @return $this
     */
    public function setToken(string $token) {
        if ((mb_strlen($token) > 12)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setToken: $token length must be <= 12');
        }
        if ((mb_strlen($token) < 1)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setToken: $token length must be >= 1');
        }
        if ((!preg_match("/^[a-zA-Z0-9]{1,12}$/", $token))) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setToken: $token must match /^[a-zA-Z0-9]{1,12}$/, ' . var_export($token, true) . ' given');
        }
        $this->_data['token'] = $token;

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
     * @param string $issuer_account Blockchain address of the issuer of the assets to send, if not native XLM asset.
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        if ((mb_strlen($issuer_account) > 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setIssuerAccount: $issuer_account length must be <= 56');
        }
        if ((mb_strlen($issuer_account) < 56)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setIssuerAccount: $issuer_account length must be >= 56');
        }
        $this->_data['issuer_account'] = $issuer_account;

        return $this;
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string|null $message Short message to recipient. It can be either 28 characters long ASCII text, 64 characters long HEX string or uint64 number.
     * @return $this
     */
    public function setMessage(?string $message) {
        if (!is_null($message) && (mb_strlen($message) > 64)) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setMessage: $message length must be <= 64');
        }
        if (!is_null($message) && (!preg_match("/^[ -~]{0,64}$/", $message))) {
            throw new IAE('TransferXlmBlockchainKMSAsset.setMessage: $message must match /^[ -~]{0,64}$/, ' . var_export($message, true) . ' given');
        }
        $this->_data['message'] = $message;

        return $this;
    }
}
