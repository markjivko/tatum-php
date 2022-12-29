<?php

/**
 * VirtualCurrencyOperation Model
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

/**
 * VirtualCurrencyOperation Model
 */
class VirtualCurrencyOperation extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VirtualCurrencyOperation";
    protected static $_definition = [
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "reference" => ["reference", "string", null, "getReference", "setReference", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote", null, ["r" => 0, "nl" => 1, "xl" => 500]], 
        "counter_account" => ["counterAccount", "string", null, "getCounterAccount", "setCounterAccount", null, ["r" => 0, "nl" => 24, "xl" => 24]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]]
    ];

    /**
     * VirtualCurrencyOperation
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Ledger account with currency of the virtual currency, on which the operation will be performed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
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
     * @param string $amount Amount of virtual currency to operate within this operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
    }

    /**
     * Get reference
     *
     * @return string|null
     */
    public function getReference(): ?string {
        return $this->_data["reference"];
    }

    /**
     * Set reference
     * 
     * @param string|null $reference Reference of the payment.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReference(?string $reference) {
        return $this->_set("reference", $reference);
    }

    /**
     * Get transaction_code
     *
     * @return string|null
     */
    public function getTransactionCode(): ?string {
        return $this->_data["transaction_code"];
    }

    /**
     * Set transaction_code
     * 
     * @param string|null $transaction_code For bookkeeping to distinct transaction purpose.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionCode(?string $transaction_code) {
        return $this->_set("transaction_code", $transaction_code);
    }

    /**
     * Get recipient_note
     *
     * @return string|null
     */
    public function getRecipientNote(): ?string {
        return $this->_data["recipient_note"];
    }

    /**
     * Set recipient_note
     * 
     * @param string|null $recipient_note Note visible to both, sender and recipient. Available for both Mint and Revoke operations
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        return $this->_set("recipient_note", $recipient_note);
    }

    /**
     * Get counter_account
     *
     * @return string|null
     */
    public function getCounterAccount(): ?string {
        return $this->_data["counter_account"];
    }

    /**
     * Set counter_account
     * 
     * @param string|null $counter_account External account identifier. By default, there is no counterAccount present in the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCounterAccount(?string $counter_account) {
        return $this->_set("counter_account", $counter_account);
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
     * @param string|null $sender_note Note visible to sender. Available in Revoke operation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }
}
