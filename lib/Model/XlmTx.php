<?php

/**
 * XlmTx Model
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
 * XlmTx Model
 */
class XlmTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const MEMO_TYPE_TEXT = 'MEMO_TEXT';
    public const MEMO_TYPE_ID = 'MEMO_ID';
    public const MEMO_TYPE_HASH = 'MEMO_HASH';
    public const MEMO_TYPE__RETURN = 'MEMO_RETURN';
    protected static $_name = "XlmTx";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "paging_token" => ["paging_token", "string", null, "getPagingToken", "setPagingToken"], 
        "successful" => ["successful", "bool", null, "getSuccessful", "setSuccessful"], 
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "ledger" => ["ledger", "float", null, "getLedger", "setLedger"], 
        "created_at" => ["created_at", "string", null, "getCreatedAt", "setCreatedAt"], 
        "source_account" => ["source_account", "string", null, "getSourceAccount", "setSourceAccount"], 
        "source_account_sequence" => ["source_account_sequence", "string", null, "getSourceAccountSequence", "setSourceAccountSequence"], 
        "fee_paid" => ["fee_paid", "float", null, "getFeePaid", "setFeePaid"], 
        "fee_charged" => ["fee_charged", "float", null, "getFeeCharged", "setFeeCharged"], 
        "max_fee" => ["max_fee", "float", null, "getMaxFee", "setMaxFee"], 
        "operation_count" => ["operation_count", "float", null, "getOperationCount", "setOperationCount"], 
        "envelope_xdr" => ["envelope_xdr", "string", null, "getEnvelopeXdr", "setEnvelopeXdr"], 
        "result_xdr" => ["result_xdr", "string", null, "getResultXdr", "setResultXdr"], 
        "result_meta_xdr" => ["result_meta_xdr", "string", null, "getResultMetaXdr", "setResultMetaXdr"], 
        "fee_meta_xdr" => ["fee_meta_xdr", "string", null, "getFeeMetaXdr", "setFeeMetaXdr"], 
        "memo" => ["memo", "string", null, "getMemo", "setMemo"], 
        "memo_type" => ["memo_type", "string", null, "getMemoType", "setMemoType"], 
        "signatures" => ["signatures", "string[]", null, "getSignatures", "setSignatures"]
    ];

    /**
     * XlmTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "paging_token"=>null, "successful"=>null, "hash"=>null, "ledger"=>null, "created_at"=>null, "source_account"=>null, "source_account_sequence"=>null, "fee_paid"=>null, "fee_charged"=>null, "max_fee"=>null, "operation_count"=>null, "envelope_xdr"=>null, "result_xdr"=>null, "result_meta_xdr"=>null, "fee_meta_xdr"=>null, "memo"=>null, "memo_type"=>null, "signatures"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        $allowed = $this->getMemoTypeAllowableValues();
        $value = $this->_data['memo_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'memo_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getMemoTypeAllowableValues(): array {
        return [
            self::MEMO_TYPE_TEXT,
            self::MEMO_TYPE_ID,
            self::MEMO_TYPE_HASH,
            self::MEMO_TYPE__RETURN,
        ];
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id A unique identifier for this transaction.
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get paging_token
     *
     * @return string|null
     */
    public function getPagingToken(): ?string {
        return $this->_data["paging_token"];
    }

    /**
     * Set paging_token
     * 
     * @param string|null $paging_token A cursor value for use in pagination.
     * @return $this
     */
    public function setPagingToken(?string $paging_token) {
        $this->_data['paging_token'] = $paging_token;

        return $this;
    }

    /**
     * Get successful
     *
     * @return bool|null
     */
    public function getSuccessful(): ?bool {
        return $this->_data["successful"];
    }

    /**
     * Set successful
     * 
     * @param bool|null $successful Indicates if this transaction was successful or not.
     * @return $this
     */
    public function setSuccessful(?bool $successful) {
        $this->_data['successful'] = $successful;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash A hex-encoded SHA-256 hash of this transaction’s XDR-encoded form.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get ledger
     *
     * @return float|null
     */
    public function getLedger(): ?float {
        return $this->_data["ledger"];
    }

    /**
     * Set ledger
     * 
     * @param float|null $ledger The sequence number of the ledger that this transaction was included in.
     * @return $this
     */
    public function setLedger(?float $ledger) {
        $this->_data['ledger'] = $ledger;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string {
        return $this->_data["created_at"];
    }

    /**
     * Set created_at
     * 
     * @param string|null $created_at The date this transaction was created.
     * @return $this
     */
    public function setCreatedAt(?string $created_at) {
        $this->_data['created_at'] = $created_at;

        return $this;
    }

    /**
     * Get source_account
     *
     * @return string|null
     */
    public function getSourceAccount(): ?string {
        return $this->_data["source_account"];
    }

    /**
     * Set source_account
     * 
     * @param string|null $source_account The account that originates the transaction.
     * @return $this
     */
    public function setSourceAccount(?string $source_account) {
        $this->_data['source_account'] = $source_account;

        return $this;
    }

    /**
     * Get source_account_sequence
     *
     * @return string|null
     */
    public function getSourceAccountSequence(): ?string {
        return $this->_data["source_account_sequence"];
    }

    /**
     * Set source_account_sequence
     * 
     * @param string|null $source_account_sequence The source account’s sequence number that this transaction consumed.
     * @return $this
     */
    public function setSourceAccountSequence(?string $source_account_sequence) {
        $this->_data['source_account_sequence'] = $source_account_sequence;

        return $this;
    }

    /**
     * Get fee_paid
     *
     * @return float|null
     */
    public function getFeePaid(): ?float {
        return $this->_data["fee_paid"];
    }

    /**
     * Set fee_paid
     * 
     * @param float|null $fee_paid The fee (in stroops) paid by the source account to apply this transaction to the ledger.
     * @return $this
     */
    public function setFeePaid(?float $fee_paid) {
        $this->_data['fee_paid'] = $fee_paid;

        return $this;
    }

    /**
     * Get fee_charged
     *
     * @return float|null
     */
    public function getFeeCharged(): ?float {
        return $this->_data["fee_charged"];
    }

    /**
     * Set fee_charged
     * 
     * @param float|null $fee_charged fee_charged
     * @return $this
     */
    public function setFeeCharged(?float $fee_charged) {
        $this->_data['fee_charged'] = $fee_charged;

        return $this;
    }

    /**
     * Get max_fee
     *
     * @return float|null
     */
    public function getMaxFee(): ?float {
        return $this->_data["max_fee"];
    }

    /**
     * Set max_fee
     * 
     * @param float|null $max_fee The maximum fee (in stroops) that the source account was willing to pay.
     * @return $this
     */
    public function setMaxFee(?float $max_fee) {
        $this->_data['max_fee'] = $max_fee;

        return $this;
    }

    /**
     * Get operation_count
     *
     * @return float|null
     */
    public function getOperationCount(): ?float {
        return $this->_data["operation_count"];
    }

    /**
     * Set operation_count
     * 
     * @param float|null $operation_count The number of operations contained within this transaction.
     * @return $this
     */
    public function setOperationCount(?float $operation_count) {
        $this->_data['operation_count'] = $operation_count;

        return $this;
    }

    /**
     * Get envelope_xdr
     *
     * @return string|null
     */
    public function getEnvelopeXdr(): ?string {
        return $this->_data["envelope_xdr"];
    }

    /**
     * Set envelope_xdr
     * 
     * @param string|null $envelope_xdr A base64 encoded string of the raw TransactionEnvelope XDR struct for this transaction.
     * @return $this
     */
    public function setEnvelopeXdr(?string $envelope_xdr) {
        $this->_data['envelope_xdr'] = $envelope_xdr;

        return $this;
    }

    /**
     * Get result_xdr
     *
     * @return string|null
     */
    public function getResultXdr(): ?string {
        return $this->_data["result_xdr"];
    }

    /**
     * Set result_xdr
     * 
     * @param string|null $result_xdr A base64 encoded string of the raw TransactionResult XDR struct for this transaction.
     * @return $this
     */
    public function setResultXdr(?string $result_xdr) {
        $this->_data['result_xdr'] = $result_xdr;

        return $this;
    }

    /**
     * Get result_meta_xdr
     *
     * @return string|null
     */
    public function getResultMetaXdr(): ?string {
        return $this->_data["result_meta_xdr"];
    }

    /**
     * Set result_meta_xdr
     * 
     * @param string|null $result_meta_xdr A base64 encoded string of the raw TransactionMeta XDR struct for this transaction
     * @return $this
     */
    public function setResultMetaXdr(?string $result_meta_xdr) {
        $this->_data['result_meta_xdr'] = $result_meta_xdr;

        return $this;
    }

    /**
     * Get fee_meta_xdr
     *
     * @return string|null
     */
    public function getFeeMetaXdr(): ?string {
        return $this->_data["fee_meta_xdr"];
    }

    /**
     * Set fee_meta_xdr
     * 
     * @param string|null $fee_meta_xdr A base64 encoded string of the raw LedgerEntryChanges XDR struct produced by taking fees for this transaction.
     * @return $this
     */
    public function setFeeMetaXdr(?string $fee_meta_xdr) {
        $this->_data['fee_meta_xdr'] = $fee_meta_xdr;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string|null
     */
    public function getMemo(): ?string {
        return $this->_data["memo"];
    }

    /**
     * Set memo
     * 
     * @param string|null $memo The optional memo attached to a transaction. Usually used as an account distiguisher.
     * @return $this
     */
    public function setMemo(?string $memo) {
        $this->_data['memo'] = $memo;

        return $this;
    }

    /**
     * Get memo_type
     *
     * @return string|null
     */
    public function getMemoType(): ?string {
        return $this->_data["memo_type"];
    }

    /**
     * Set memo_type
     * 
     * @param string|null $memo_type The type of memo.
     * @return $this
     */
    public function setMemoType(?string $memo_type) {
        $allowed = $this->getMemoTypeAllowableValues();
        if (!is_null($memo_type) && !in_array($memo_type, $allowed, true)) {
            throw new IAE(sprintf("XlmTx.setMemoType: memo_type invalid value '%s', must be one of '%s'", $memo_type, implode("', '", $allowed)));
        }
        $this->_data['memo_type'] = $memo_type;

        return $this;
    }

    /**
     * Get signatures
     *
     * @return string[]|null
     */
    public function getSignatures(): ?array {
        return $this->_data["signatures"];
    }

    /**
     * Set signatures
     * 
     * @param string[]|null $signatures An array of signatures used to sign this transaction.
     * @return $this
     */
    public function setSignatures(?array $signatures) {
        $this->_data['signatures'] = $signatures;

        return $this;
    }
}
