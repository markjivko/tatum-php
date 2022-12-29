<?php

/**
 * XlmTx Model
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
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "paging_token" => ["paging_token", "string", null, "getPagingToken", "setPagingToken", null, ["r" => 0]], 
        "successful" => ["successful", "bool", null, "getSuccessful", "setSuccessful", null, ["r" => 0]], 
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "ledger" => ["ledger", "float", null, "getLedger", "setLedger", null, ["r" => 0]], 
        "created_at" => ["created_at", "string", null, "getCreatedAt", "setCreatedAt", null, ["r" => 0]], 
        "source_account" => ["source_account", "string", null, "getSourceAccount", "setSourceAccount", null, ["r" => 0]], 
        "source_account_sequence" => ["source_account_sequence", "string", null, "getSourceAccountSequence", "setSourceAccountSequence", null, ["r" => 0]], 
        "fee_paid" => ["fee_paid", "float", null, "getFeePaid", "setFeePaid", null, ["r" => 0]], 
        "fee_charged" => ["fee_charged", "float", null, "getFeeCharged", "setFeeCharged", null, ["r" => 0]], 
        "max_fee" => ["max_fee", "float", null, "getMaxFee", "setMaxFee", null, ["r" => 0]], 
        "operation_count" => ["operation_count", "float", null, "getOperationCount", "setOperationCount", null, ["r" => 0]], 
        "envelope_xdr" => ["envelope_xdr", "string", null, "getEnvelopeXdr", "setEnvelopeXdr", null, ["r" => 0]], 
        "result_xdr" => ["result_xdr", "string", null, "getResultXdr", "setResultXdr", null, ["r" => 0]], 
        "result_meta_xdr" => ["result_meta_xdr", "string", null, "getResultMetaXdr", "setResultMetaXdr", null, ["r" => 0]], 
        "fee_meta_xdr" => ["fee_meta_xdr", "string", null, "getFeeMetaXdr", "setFeeMetaXdr", null, ["r" => 0]], 
        "memo" => ["memo", "string", null, "getMemo", "setMemo", null, ["r" => 0]], 
        "memo_type" => ["memo_type", "string", null, "getMemoType", "setMemoType", null, ["r" => 0, "e" => 1]], 
        "signatures" => ["signatures", "string[]", null, "getSignatures", "setSignatures", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * XlmTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPagingToken(?string $paging_token) {
        return $this->_set("paging_token", $paging_token);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSuccessful(?bool $successful) {
        return $this->_set("successful", $successful);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedger(?float $ledger) {
        return $this->_set("ledger", $ledger);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt(?string $created_at) {
        return $this->_set("created_at", $created_at);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSourceAccount(?string $source_account) {
        return $this->_set("source_account", $source_account);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSourceAccountSequence(?string $source_account_sequence) {
        return $this->_set("source_account_sequence", $source_account_sequence);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePaid(?float $fee_paid) {
        return $this->_set("fee_paid", $fee_paid);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCharged(?float $fee_charged) {
        return $this->_set("fee_charged", $fee_charged);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMaxFee(?float $max_fee) {
        return $this->_set("max_fee", $max_fee);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOperationCount(?float $operation_count) {
        return $this->_set("operation_count", $operation_count);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnvelopeXdr(?string $envelope_xdr) {
        return $this->_set("envelope_xdr", $envelope_xdr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setResultXdr(?string $result_xdr) {
        return $this->_set("result_xdr", $result_xdr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setResultMetaXdr(?string $result_meta_xdr) {
        return $this->_set("result_meta_xdr", $result_meta_xdr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeMetaXdr(?string $fee_meta_xdr) {
        return $this->_set("fee_meta_xdr", $fee_meta_xdr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMemo(?string $memo) {
        return $this->_set("memo", $memo);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMemoType(?string $memo_type) {
        return $this->_set("memo_type", $memo_type);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatures(?array $signatures) {
        return $this->_set("signatures", $signatures);
    }
}
