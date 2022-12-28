<?php

/**
 * BatchCreateTransaction_transaction_inner Model
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
 * BatchCreateTransaction_transaction_inner Model
 */
class BatchCreateTransactionTransactionInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BatchCreateTransaction_transaction_inner";
    protected static $_definition = [
        "recipient_account_id" => ["recipientAccountId", "string", null, "getRecipientAccountId", "setRecipientAccountId", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "anonymous" => ["anonymous", "bool", null, "getAnonymous", "setAnonymous", false], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant", null], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode", null], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote", null], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate", 1], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null]
    ];

    /**
     * BatchCreateTransactionTransactionInner
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
        if (is_null($this->_data['recipient_account_id'])) {
            $ip[] = "'recipient_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['recipient_account_id']) > 24)) {
            $ip[] = "'recipient_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['recipient_account_id']) < 24)) {
            $ip[] = "'recipient_account_id' length must be >= 24";
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
        if (!is_null($this->_data['transaction_code']) && (mb_strlen($this->_data['transaction_code']) > 100)) {
            $ip[] = "'transaction_code' length must be <= 100";
        }
        if (!is_null($this->_data['transaction_code']) && (mb_strlen($this->_data['transaction_code']) < 1)) {
            $ip[] = "'transaction_code' length must be >= 1";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
        }
        if (!is_null($this->_data['recipient_note']) && (mb_strlen($this->_data['recipient_note']) > 500)) {
            $ip[] = "'recipient_note' length must be <= 500";
        }
        if (!is_null($this->_data['recipient_note']) && (mb_strlen($this->_data['recipient_note']) < 1)) {
            $ip[] = "'recipient_note' length must be >= 1";
        }
        if (!is_null($this->_data['base_rate']) && ($this->_data['base_rate'] < 0)) {
            $ip[] = "'base_rate' must be >= 0";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        return $ip;
    }


    /**
     * Get recipient_account_id
     *
     * @return string
     */
    public function getRecipientAccountId(): string {
        return $this->_data["recipient_account_id"];
    }

    /**
     * Set recipient_account_id
     * 
     * @param string $recipient_account_id Internal recipient account ID within Tatum platform
     * @return $this
     */
    public function setRecipientAccountId(string $recipient_account_id) {
        if ((mb_strlen($recipient_account_id) > 24)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setRecipientAccountId: $recipient_account_id length must be <= 24');
        }
        if ((mb_strlen($recipient_account_id) < 24)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setRecipientAccountId: $recipient_account_id length must be >= 24');
        }
        $this->_data['recipient_account_id'] = $recipient_account_id;

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
            throw new IAE('BatchCreateTransactionTransactionInner.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('BatchCreateTransactionTransactionInner.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return bool|null
     */
    public function getAnonymous(): ?bool {
        return $this->_data["anonymous"];
    }

    /**
     * Set anonymous
     * 
     * @param bool|null $anonymous Anonymous transaction does not show sender account to recipient, default is false
     * @return $this
     */
    public function setAnonymous(?bool $anonymous) {
        $this->_data['anonymous'] = $anonymous;

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
     * @param bool|null $compliant Enable compliant checks. Transaction will not be processed, if compliant check fails.
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        $this->_data['compliant'] = $compliant;

        return $this;
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
     * @return $this
     */
    public function setTransactionCode(?string $transaction_code) {
        if (!is_null($transaction_code) && (mb_strlen($transaction_code) > 100)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setTransactionCode: $transaction_code length must be <= 100');
        }
        if (!is_null($transaction_code) && (mb_strlen($transaction_code) < 1)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setTransactionCode: $transaction_code length must be >= 1');
        }
        $this->_data['transaction_code'] = $transaction_code;

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
     * @param string|null $payment_id Payment ID, External identifier of the payment, which can be used to pair transactions within Tatum accounts.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

        return $this;
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
     * @param string|null $recipient_note Note visible to both, sender and recipient
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        if (!is_null($recipient_note) && (mb_strlen($recipient_note) > 500)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setRecipientNote: $recipient_note length must be <= 500');
        }
        if (!is_null($recipient_note) && (mb_strlen($recipient_note) < 1)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setRecipientNote: $recipient_note length must be >= 1');
        }
        $this->_data['recipient_note'] = $recipient_note;

        return $this;
    }

    /**
     * Get base_rate
     *
     * @return float|null
     */
    public function getBaseRate(): ?float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float|null $base_rate Exchange rate of the base pair. Only applicable for Tatum's Virtual currencies Ledger transactions. Override default exchange rate for the Virtual Currency.
     * @return $this
     */
    public function setBaseRate(?float $base_rate) {
        if (!is_null($base_rate) && ($base_rate < 0)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setBaseRate: $base_rate must be >=0');
        }
        $this->_data['base_rate'] = $base_rate;

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
     * @param string|null $sender_note Note visible to sender
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('BatchCreateTransactionTransactionInner.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}
