<?php

/**
 * GenerateCustodialWallet_request Model
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
 * GenerateCustodialWallet_request Model
 */
class GenerateCustodialWalletRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "GenerateCustodialWallet_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "enable_fungible_tokens" => ["enableFungibleTokens", "bool", null, "getEnableFungibleTokens", "setEnableFungibleTokens", null, ["r" => 1]], 
        "enable_non_fungible_tokens" => ["enableNonFungibleTokens", "bool", null, "getEnableNonFungibleTokens", "setEnableNonFungibleTokens", null, ["r" => 1]], 
        "enable_semi_fungible_tokens" => ["enableSemiFungibleTokens", "bool", null, "getEnableSemiFungibleTokens", "setEnableSemiFungibleTokens", null, ["r" => 1]], 
        "enable_batch_transactions" => ["enableBatchTransactions", "bool", null, "getEnableBatchTransactions", "setEnableBatchTransactions", null, ["r" => 1]], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee", null, ["r" => 0]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null, ["r" => 1, "n" => [0]]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 34, "xl" => 34]]
    ];

    /**
     * GenerateCustodialWalletRequest
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
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_TRON,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $from_private_key Private key of account, from which the transaction will be initiated.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get enable_fungible_tokens
     *
     * @return bool
     */
    public function getEnableFungibleTokens(): bool {
        return $this->_data["enable_fungible_tokens"];
    }

    /**
     * Set enable_fungible_tokens
     * 
     * @param bool $enable_fungible_tokens If address should support ERC20 tokens, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableFungibleTokens(bool $enable_fungible_tokens) {
        return $this->_set("enable_fungible_tokens", $enable_fungible_tokens);
    }

    /**
     * Get enable_non_fungible_tokens
     *
     * @return bool
     */
    public function getEnableNonFungibleTokens(): bool {
        return $this->_data["enable_non_fungible_tokens"];
    }

    /**
     * Set enable_non_fungible_tokens
     * 
     * @param bool $enable_non_fungible_tokens If address should support ERC721 tokens, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableNonFungibleTokens(bool $enable_non_fungible_tokens) {
        return $this->_set("enable_non_fungible_tokens", $enable_non_fungible_tokens);
    }

    /**
     * Get enable_semi_fungible_tokens
     *
     * @return bool
     */
    public function getEnableSemiFungibleTokens(): bool {
        return $this->_data["enable_semi_fungible_tokens"];
    }

    /**
     * Set enable_semi_fungible_tokens
     * 
     * @param bool $enable_semi_fungible_tokens If address should support ERC1155 tokens, it should be marked as true. Not supported for TRON.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableSemiFungibleTokens(bool $enable_semi_fungible_tokens) {
        return $this->_set("enable_semi_fungible_tokens", $enable_semi_fungible_tokens);
    }

    /**
     * Get enable_batch_transactions
     *
     * @return bool
     */
    public function getEnableBatchTransactions(): bool {
        return $this->_data["enable_batch_transactions"];
    }

    /**
     * Set enable_batch_transactions
     * 
     * @param bool $enable_batch_transactions If address should support batch transfers of the assets, it should be marked as true.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEnableBatchTransactions(bool $enable_batch_transactions) {
        return $this->_set("enable_batch_transactions", $enable_batch_transactions);
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        return $this->_set("fee", $fee);
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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee in TRX to be paid.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        return $this->_set("fee_limit", $fee_limit);
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender address of TRON account in Base58 format.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }
}
