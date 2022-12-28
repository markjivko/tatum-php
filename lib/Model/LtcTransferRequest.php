<?php

/**
 * LtcTransfer_request Model
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
 * LtcTransfer_request Model
 */
class LtcTransferRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcTransfer_request";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId", null], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant", null], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null], 
        "multiple_amounts" => ["multipleAmounts", "string[]", null, "getMultipleAmounts", "setMultipleAmounts", null], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr", null], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic", null], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub", null], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null], 
        "key_pair" => ["keyPair", "\Tatum\Model\TransferLtcKeyPairKeyPairInner[]", null, "getKeyPair", "setKeyPair", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null]
    ];

    /**
     * LtcTransferRequest
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
        if (is_null($this->_data['sender_account_id'])) {
            $ip[] = "'sender_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['sender_account_id']) > 24)) {
            $ip[] = "'sender_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['sender_account_id']) < 24)) {
            $ip[] = "'sender_account_id' length must be >= 24";
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 10000)) {
            $ip[] = "'address' length must be <= 10000";
        }
        if ((mb_strlen($this->_data['address']) < 1)) {
            $ip[] = "'address' length must be >= 1";
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
        if (!is_null($this->_data['fee']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['attr'])) {
            $ip[] = "'attr' can't be null";
        }
        if ((mb_strlen($this->_data['attr']) > 256)) {
            $ip[] = "'attr' length must be <= 256";
        }
        if ((mb_strlen($this->_data['attr']) < 1)) {
            $ip[] = "'attr' length must be >= 1";
        }
        if (is_null($this->_data['mnemonic'])) {
            $ip[] = "'mnemonic' can't be null";
        }
        if ((mb_strlen($this->_data['mnemonic']) > 500)) {
            $ip[] = "'mnemonic' length must be <= 500";
        }
        if ((mb_strlen($this->_data['mnemonic']) < 1)) {
            $ip[] = "'mnemonic' length must be >= 1";
        }
        if (is_null($this->_data['xpub'])) {
            $ip[] = "'xpub' can't be null";
        }
        if ((mb_strlen($this->_data['xpub']) > 150)) {
            $ip[] = "'xpub' length must be <= 150";
        }
        if ((mb_strlen($this->_data['xpub']) < 1)) {
            $ip[] = "'xpub' length must be >= 1";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        if (is_null($this->_data['key_pair'])) {
            $ip[] = "'key_pair' can't be null";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        return $ip;
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
            throw new IAE('LtcTransferRequest.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('LtcTransferRequest.setSenderAccountId: $sender_account_id length must be >= 24');
        }
        $this->_data['sender_account_id'] = $sender_account_id;

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
     * @param string $address Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string.
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 10000)) {
            throw new IAE('LtcTransferRequest.setAddress: $address length must be <= 10000');
        }
        if ((mb_strlen($address) < 1)) {
            throw new IAE('LtcTransferRequest.setAddress: $address length must be >= 1');
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
     * @param string $amount Amount to be withdrawn to blockchain.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('LtcTransferRequest.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('LtcTransferRequest.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
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
     * @param string|null $fee Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 0.0005 LTC is used. Minimum fee is 0.00001 LTC.
     * @return $this
     */
    public function setFee(?string $fee) {
        if (!is_null($fee) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('LtcTransferRequest.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get multiple_amounts
     *
     * @return string[]|null
     */
    public function getMultipleAmounts(): ?array {
        return $this->_data["multiple_amounts"];
    }

    /**
     * Set multiple_amounts
     * 
     * @param string[]|null $multiple_amounts For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field.
     * @return $this
     */
    public function setMultipleAmounts(?array $multiple_amounts) {
        $this->_data['multiple_amounts'] = $multiple_amounts;

        return $this;
    }

    /**
     * Get attr
     *
     * @return string
     */
    public function getAttr(): string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string $attr Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
     * @return $this
     */
    public function setAttr(string $attr) {
        if ((mb_strlen($attr) > 256)) {
            throw new IAE('LtcTransferRequest.setAttr: $attr length must be <= 256');
        }
        if ((mb_strlen($attr) < 1)) {
            throw new IAE('LtcTransferRequest.setAttr: $attr length must be >= 1');
        }
        $this->_data['attr'] = $attr;

        return $this;
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
     * @param string $mnemonic Mnemonic seed - usually 12-24 words with access to whole wallet. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        if ((mb_strlen($mnemonic) > 500)) {
            throw new IAE('LtcTransferRequest.setMnemonic: $mnemonic length must be <= 500');
        }
        if ((mb_strlen($mnemonic) < 1)) {
            throw new IAE('LtcTransferRequest.setMnemonic: $mnemonic length must be >= 1');
        }
        $this->_data['mnemonic'] = $mnemonic;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string
     */
    public function getXpub(): string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Extended public key (xpub) of the wallet associated with the accounts. Should be present, when mnemonic is used.
     * @return $this
     */
    public function setXpub(string $xpub) {
        if ((mb_strlen($xpub) > 150)) {
            throw new IAE('LtcTransferRequest.setXpub: $xpub length must be <= 150');
        }
        if ((mb_strlen($xpub) < 1)) {
            throw new IAE('LtcTransferRequest.setXpub: $xpub length must be >= 1');
        }
        $this->_data['xpub'] = $xpub;

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
            throw new IAE('LtcTransferRequest.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('LtcTransferRequest.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

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
            throw new IAE('LtcTransferRequest.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('LtcTransferRequest.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }

    /**
     * Get key_pair
     *
     * @return \Tatum\Model\TransferLtcKeyPairKeyPairInner[]
     */
    public function getKeyPair(): array {
        return $this->_data["key_pair"];
    }

    /**
     * Set key_pair
     * 
     * @param \Tatum\Model\TransferLtcKeyPairKeyPairInner[] $key_pair Array of assigned blockchain addresses with their private keys. Either mnemonic, keyPair or signature Id must be present - depends on the type of account and xpub. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
     * @return $this
     */
    public function setKeyPair(array $key_pair) {
        $this->_data['key_pair'] = $key_pair;

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
     * @param string $signature_id Signature hash of the mnemonic, which will be used to sign transactions locally. All signature Ids should be present, which might be used to sign transaction. Tatum KMS does not support keyPair type of off-chain transaction, only mnemonic based.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
