<?php

/**
 * TransactionFilterCustomer Model
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
 * TransactionFilterCustomer Model
 */
class TransactionFilterCustomer extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TRANSACTION_TYPE_FAILED = 'FAILED';
    public const TRANSACTION_TYPE_DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    public const TRANSACTION_TYPE_CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    public const TRANSACTION_TYPE_DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    public const TRANSACTION_TYPE_CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    public const TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    public const TRANSACTION_TYPE_EXCHANGE_BUY = 'EXCHANGE_BUY';
    public const TRANSACTION_TYPE_EXCHANGE_SELL = 'EXCHANGE_SELL';
    public const TRANSACTION_TYPE_DEBIT_TRANSACTION = 'DEBIT_TRANSACTION';
    public const TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    public const TRANSACTION_TYPES_FAILED = 'FAILED';
    public const TRANSACTION_TYPES_DEBIT_PAYMENT = 'DEBIT_PAYMENT';
    public const TRANSACTION_TYPES_CREDIT_PAYMENT = 'CREDIT_PAYMENT';
    public const TRANSACTION_TYPES_CREDIT_DEPOSIT = 'CREDIT_DEPOSIT';
    public const TRANSACTION_TYPES_DEBIT_WITHDRAWAL = 'DEBIT_WITHDRAWAL';
    public const TRANSACTION_TYPES_CANCEL_WITHDRAWAL = 'CANCEL_WITHDRAWAL';
    public const TRANSACTION_TYPES_DEBIT_OUTGOING_PAYMENT = 'DEBIT_OUTGOING_PAYMENT';
    public const TRANSACTION_TYPES_EXCHANGE_BUY = 'EXCHANGE_BUY';
    public const TRANSACTION_TYPES_EXCHANGE_SELL = 'EXCHANGE_SELL';
    public const TRANSACTION_TYPES_DEBIT_TRANSACTION = 'DEBIT_TRANSACTION';
    public const TRANSACTION_TYPES_CREDIT_INCOMING_PAYMENT = 'CREDIT_INCOMING_PAYMENT';
    public const OP_TYPE_PAYMENT = 'PAYMENT';
    public const OP_TYPE_WITHDRAWAL = 'WITHDRAWAL';
    public const OP_TYPE_BLOCKCHAIN_TRANSACTION = 'BLOCKCHAIN_TRANSACTION';
    public const OP_TYPE_EXCHANGE = 'EXCHANGE';
    public const OP_TYPE_FAILED = 'FAILED';
    public const OP_TYPE_DEPOSIT = 'DEPOSIT';
    public const OP_TYPE_MINT = 'MINT';
    public const OP_TYPE_REVOKE = 'REVOKE';
    protected static $_name = "TransactionFilterCustomer";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "counter_account" => ["counterAccount", "string", null, "getCounterAccount", "setCounterAccount"], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency"], 
        "from" => ["from", "int", 'int64', "getFrom", "setFrom"], 
        "to" => ["to", "int", 'int64', "getTo", "setTo"], 
        "amount" => ["amount", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getAmount", "setAmount"], 
        "currencies" => ["currencies", "string[]", null, "getCurrencies", "setCurrencies"], 
        "transaction_type" => ["transactionType", "string", null, "getTransactionType", "setTransactionType"], 
        "transaction_types" => ["transactionTypes", "string[]", null, "getTransactionTypes", "setTransactionTypes"], 
        "op_type" => ["opType", "string", null, "getOpType", "setOpType"], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"]
    ];

    /**
     * TransactionFilterCustomer
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "account"=>null, "counter_account"=>null, "currency"=>null, "from"=>null, "to"=>null, "amount"=>null, "currencies"=>null, "transaction_type"=>null, "transaction_types"=>null, "op_type"=>null, "transaction_code"=>null, "payment_id"=>null, "recipient_note"=>null, "sender_note"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if ((mb_strlen($this->_data['id']) > 24)) {
            $ip[] = "'id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['id']) < 24)) {
            $ip[] = "'id' length must be >= 24";
        }
        if (!is_null($this->_data['account']) && (mb_strlen($this->_data['account']) > 24)) {
            $ip[] = "'account' length must be <= 24";
        }
        if (!is_null($this->_data['account']) && (mb_strlen($this->_data['account']) < 24)) {
            $ip[] = "'account' length must be >= 24";
        }
        if (!is_null($this->_data['counter_account']) && (mb_strlen($this->_data['counter_account']) > 24)) {
            $ip[] = "'counter_account' length must be <= 24";
        }
        if (!is_null($this->_data['counter_account']) && (mb_strlen($this->_data['counter_account']) < 24)) {
            $ip[] = "'counter_account' length must be >= 24";
        }
        if (!is_null($this->_data['currency']) && (mb_strlen($this->_data['currency']) > 50)) {
            $ip[] = "'currency' length must be <= 50";
        }
        if (!is_null($this->_data['currency']) && (mb_strlen($this->_data['currency']) < 1)) {
            $ip[] = "'currency' length must be >= 1";
        }
        if (!is_null($this->_data['from']) && ($this->_data['from'] < 0)) {
            $ip[] = "'from' must be >= 0";
        }
        if (!is_null($this->_data['to']) && ($this->_data['to'] < 0)) {
            $ip[] = "'to' must be >= 0";
        }
        $allowed = $this->getTransactionTypeAllowableValues();
        $value = $this->_data['transaction_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'transaction_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        $allowed = $this->getOpTypeAllowableValues();
        $value = $this->_data['op_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'op_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTransactionTypeAllowableValues(): array {
        return [
            self::TRANSACTION_TYPE_FAILED,
            self::TRANSACTION_TYPE_DEBIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_PAYMENT,
            self::TRANSACTION_TYPE_CREDIT_DEPOSIT,
            self::TRANSACTION_TYPE_DEBIT_WITHDRAWAL,
            self::TRANSACTION_TYPE_CANCEL_WITHDRAWAL,
            self::TRANSACTION_TYPE_DEBIT_OUTGOING_PAYMENT,
            self::TRANSACTION_TYPE_EXCHANGE_BUY,
            self::TRANSACTION_TYPE_EXCHANGE_SELL,
            self::TRANSACTION_TYPE_DEBIT_TRANSACTION,
            self::TRANSACTION_TYPE_CREDIT_INCOMING_PAYMENT,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTransactionTypesAllowableValues(): array {
        return [
            self::TRANSACTION_TYPES_FAILED,
            self::TRANSACTION_TYPES_DEBIT_PAYMENT,
            self::TRANSACTION_TYPES_CREDIT_PAYMENT,
            self::TRANSACTION_TYPES_CREDIT_DEPOSIT,
            self::TRANSACTION_TYPES_DEBIT_WITHDRAWAL,
            self::TRANSACTION_TYPES_CANCEL_WITHDRAWAL,
            self::TRANSACTION_TYPES_DEBIT_OUTGOING_PAYMENT,
            self::TRANSACTION_TYPES_EXCHANGE_BUY,
            self::TRANSACTION_TYPES_EXCHANGE_SELL,
            self::TRANSACTION_TYPES_DEBIT_TRANSACTION,
            self::TRANSACTION_TYPES_CREDIT_INCOMING_PAYMENT,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getOpTypeAllowableValues(): array {
        return [
            self::OP_TYPE_PAYMENT,
            self::OP_TYPE_WITHDRAWAL,
            self::OP_TYPE_BLOCKCHAIN_TRANSACTION,
            self::OP_TYPE_EXCHANGE,
            self::OP_TYPE_FAILED,
            self::OP_TYPE_DEPOSIT,
            self::OP_TYPE_MINT,
            self::OP_TYPE_REVOKE,
        ];
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id Customer internal ID to search for.
     * @return $this
     */
    public function setId(string $id) {
        if ((mb_strlen($id) > 24)) {
            throw new IAE('TransactionFilterCustomer.setId: $id length must be <= 24');
        }
        if ((mb_strlen($id) < 24)) {
            throw new IAE('TransactionFilterCustomer.setId: $id length must be >= 24');
        }
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get account
     *
     * @return string|null
     */
    public function getAccount(): ?string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string|null $account Source account - source of transaction(s).
     * @return $this
     */
    public function setAccount(?string $account) {
        if (!is_null($account) && (mb_strlen($account) > 24)) {
            throw new IAE('TransactionFilterCustomer.setAccount: $account length must be <= 24');
        }
        if (!is_null($account) && (mb_strlen($account) < 24)) {
            throw new IAE('TransactionFilterCustomer.setAccount: $account length must be >= 24');
        }
        $this->_data['account'] = $account;

        return $this;
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
     * @param string|null $counter_account Counter account - transaction(s) destination account.
     * @return $this
     */
    public function setCounterAccount(?string $counter_account) {
        if (!is_null($counter_account) && (mb_strlen($counter_account) > 24)) {
            throw new IAE('TransactionFilterCustomer.setCounterAccount: $counter_account length must be <= 24');
        }
        if (!is_null($counter_account) && (mb_strlen($counter_account) < 24)) {
            throw new IAE('TransactionFilterCustomer.setCounterAccount: $counter_account length must be >= 24');
        }
        $this->_data['counter_account'] = $counter_account;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string|null
     */
    public function getCurrency(): ?string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string|null $currency Currency of the transactions.
     * @return $this
     */
    public function setCurrency(?string $currency) {
        if (!is_null($currency) && (mb_strlen($currency) > 50)) {
            throw new IAE('TransactionFilterCustomer.setCurrency: $currency length must be <= 50');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 1)) {
            throw new IAE('TransactionFilterCustomer.setCurrency: $currency length must be >= 1');
        }
        $this->_data['currency'] = $currency;

        return $this;
    }

    /**
     * Get from
     *
     * @return int|null
     */
    public function getFrom(): ?int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int|null $from Starting date to search for transactions from in UTC millis. If not present, search all history.
     * @return $this
     */
    public function setFrom(?int $from) {
        if (!is_null($from) && ($from < 0)) {
            throw new IAE('TransactionFilterCustomer.setFrom: $from must be >=0');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get to
     *
     * @return int|null
     */
    public function getTo(): ?int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int|null $to Date until to search for transactions in UTC millis. If not present, search up till now.
     * @return $this
     */
    public function setTo(?int $to) {
        if (!is_null($to) && ($to < 0)) {
            throw new IAE('TransactionFilterCustomer.setTo: $to must be >=0');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get amount
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getAmount(): ?array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $amount Amount of the transaction. AND is used between filter options.
     * @return $this
     */
    public function setAmount(?array $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get currencies
     *
     * @return string[]|null
     */
    public function getCurrencies(): ?array {
        return $this->_data["currencies"];
    }

    /**
     * Set currencies
     * 
     * @param string[]|null $currencies List of currencies of the transactions.
     * @return $this
     */
    public function setCurrencies(?array $currencies) {
        $this->_data['currencies'] = $currencies;

        return $this;
    }

    /**
     * Get transaction_type
     *
     * @return string|null
     */
    public function getTransactionType(): ?string {
        return $this->_data["transaction_type"];
    }

    /**
     * Set transaction_type
     * 
     * @param string|null $transaction_type Type of payment
     * @return $this
     */
    public function setTransactionType(?string $transaction_type) {
        $allowed = $this->getTransactionTypeAllowableValues();
        if (!is_null($transaction_type) && !in_array($transaction_type, $allowed, true)) {
            throw new IAE(sprintf("TransactionFilterCustomer.setTransactionType: transaction_type invalid value '%s', must be one of '%s'", $transaction_type, implode("', '", $allowed)));
        }
        $this->_data['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Get transaction_types
     *
     * @return string[]|null
     */
    public function getTransactionTypes(): ?array {
        return $this->_data["transaction_types"];
    }

    /**
     * Set transaction_types
     * 
     * @param string[]|null $transaction_types Types of payment
     * @return $this
     */
    public function setTransactionTypes(?array $transaction_types) {
        $allowed = $this->getTransactionTypesAllowableValues();
        if (!is_null($transaction_types) && array_diff($transaction_types, $allowed)) {
            throw new IAE(sprintf("TransactionFilterCustomer.setTransactionTypes: transaction_types must be one of '%s'", implode("', '", $allowed)));
        }
        $this->_data['transaction_types'] = $transaction_types;

        return $this;
    }

    /**
     * Get op_type
     *
     * @return string|null
     */
    public function getOpType(): ?string {
        return $this->_data["op_type"];
    }

    /**
     * Set op_type
     * 
     * @param string|null $op_type Type of operation.
     * @return $this
     */
    public function setOpType(?string $op_type) {
        $allowed = $this->getOpTypeAllowableValues();
        if (!is_null($op_type) && !in_array($op_type, $allowed, true)) {
            throw new IAE(sprintf("TransactionFilterCustomer.setOpType: op_type invalid value '%s', must be one of '%s'", $op_type, implode("', '", $allowed)));
        }
        $this->_data['op_type'] = $op_type;

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
            throw new IAE('TransactionFilterCustomer.setTransactionCode: $transaction_code length must be <= 100');
        }
        if (!is_null($transaction_code) && (mb_strlen($transaction_code) < 1)) {
            throw new IAE('TransactionFilterCustomer.setTransactionCode: $transaction_code length must be >= 1');
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
     * @param string|null $payment_id Payment ID defined in payment order by sender.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('TransactionFilterCustomer.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('TransactionFilterCustomer.setPaymentId: $payment_id length must be >= 1');
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
     * @param string|null $recipient_note Recipient note defined in payment order by sender.
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        if (!is_null($recipient_note) && (mb_strlen($recipient_note) > 500)) {
            throw new IAE('TransactionFilterCustomer.setRecipientNote: $recipient_note length must be <= 500');
        }
        if (!is_null($recipient_note) && (mb_strlen($recipient_note) < 1)) {
            throw new IAE('TransactionFilterCustomer.setRecipientNote: $recipient_note length must be >= 1');
        }
        $this->_data['recipient_note'] = $recipient_note;

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
     * @param string|null $sender_note Sender note defined in payment order by sender.
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('TransactionFilterCustomer.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('TransactionFilterCustomer.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}
