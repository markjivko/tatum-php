<?php

/**
 * TransferBscKMS Model
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
 * TransferBscKMS Model
 */
class TransferBscKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferBscKMS";
    protected static $_definition = [
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "int", null, "getIndex", "setIndex"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"], 
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"]
    ];

    /**
     * TransferBscKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["nonce"=>null, "address"=>null, "amount"=>null, "compliant"=>null, "signature_id"=>null, "index"=>null, "payment_id"=>null, "sender_account_id"=>null, "sender_note"=>null, "gas_limit"=>null, "gas_price"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 42)) {
            $ip[] = "'address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['address']) < 42)) {
            $ip[] = "'address' length must be >= 42";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
        }
        if (is_null($this->_data['sender_account_id'])) {
            $ip[] = "'sender_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['sender_account_id']) > 24)) {
            $ip[] = "'sender_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['sender_account_id']) < 24)) {
            $ip[] = "'sender_account_id' length must be >= 24";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        if (!is_null($this->_data['gas_limit']) && !preg_match("/^[+]?\\d+$/", $this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' must match /^[+]?\\d+$/";
        }
        if (!is_null($this->_data['gas_price']) && !preg_match("/^[+]?\\d+$/", $this->_data['gas_price'])) {
            $ip[] = "'gas_price' must match /^[+]?\\d+$/";
        }
        
        return $ip;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce Nonce to be set to Binance Smart Chain transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('TransferBscKMS.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
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
     * @param string $address Blockchain address to send assets
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 42)) {
            throw new IAE('TransferBscKMS.setAddress: $address length must be <= 42');
        }
        if ((mb_strlen($address) < 42)) {
            throw new IAE('TransferBscKMS.setAddress: $address length must be >= 42');
        }
        $this->_data['address'] = $address;

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
     * @param string $amount Amount to be sent.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('TransferBscKMS.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferBscKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get compliant
     *
     * @return bool|null
     */
    public function getCompliant(): ?bool {
        return $this->_data["compliant"];
    }

    /**
     * Set compliant
     * 
     * @param bool|null $compliant Compliance check, if withdrawal is not compliant, it will not be processed.
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        $this->_data['compliant'] = $compliant;

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
     * @param string $signature_id Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get index
     *
     * @return int|null
     */
    public function getIndex(): ?int {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param int|null $index Derivation index of sender address.
     * @return $this
     */
    public function setIndex(?int $index) {
        if (!is_null($index) && ($index > 2147483647)) {
            throw new IAE('TransferBscKMS.setIndex: $index must be <=2147483647');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Identifier of the payment, shown for created Transaction within Tatum sender account.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('TransferBscKMS.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('TransferBscKMS.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Get sender_account_id
     *
     * @return string
     */
    public function getSenderAccountId(): string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Sender account ID
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        if ((mb_strlen($sender_account_id) > 24)) {
            throw new IAE('TransferBscKMS.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('TransferBscKMS.setSenderAccountId: $sender_account_id length must be >= 24');
        }
        $this->_data['sender_account_id'] = $sender_account_id;

        return $this;
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible to owner of withdrawing account
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('TransferBscKMS.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('TransferBscKMS.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }

    /**
     * Get gas_limit
     *
     * @return string|null
     */
    public function getGasLimit(): ?string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string|null $gas_limit Gas limit for transaction in gas price. If not set, automatic calculation will be used.
     * @return $this
     */
    public function setGasLimit(?string $gas_limit) {
        if (!is_null($gas_limit) && (!preg_match("/^[+]?\\d+$/", $gas_limit))) {
            throw new IAE('TransferBscKMS.setGasLimit: $gas_limit must match /^[+]?\\d+$/, ' . var_export($gas_limit, true) . ' given');
        }
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string|null
     */
    public function getGasPrice(): ?string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string|null $gas_price Gas price in Gwei. If not set, automatic calculation will be used.
     * @return $this
     */
    public function setGasPrice(?string $gas_price) {
        if (!is_null($gas_price) && (!preg_match("/^[+]?\\d+$/", $gas_price))) {
            throw new IAE('TransferBscKMS.setGasPrice: $gas_price must match /^[+]?\\d+$/, ' . var_export($gas_price, true) . ' given');
        }
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }
}
