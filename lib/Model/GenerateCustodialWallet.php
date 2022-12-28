<?php

/**
 * GenerateCustodialWallet Model
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
 * GenerateCustodialWallet Model
 */
class GenerateCustodialWallet extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_MATIC = 'MATIC';
    protected static $_name = "GenerateCustodialWallet";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "enable_fungible_tokens" => ["enableFungibleTokens", "bool", null, "getEnableFungibleTokens", "setEnableFungibleTokens", null], 
        "enable_non_fungible_tokens" => ["enableNonFungibleTokens", "bool", null, "getEnableNonFungibleTokens", "setEnableNonFungibleTokens", null], 
        "enable_semi_fungible_tokens" => ["enableSemiFungibleTokens", "bool", null, "getEnableSemiFungibleTokens", "setEnableSemiFungibleTokens", null], 
        "enable_batch_transactions" => ["enableBatchTransactions", "bool", null, "getEnableBatchTransactions", "setEnableBatchTransactions", null], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null]
    ];

    /**
     * GenerateCustodialWallet
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
        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        if (is_null($this->_data['enable_fungible_tokens'])) {
            $ip[] = "'enable_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_non_fungible_tokens'])) {
            $ip[] = "'enable_non_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_semi_fungible_tokens'])) {
            $ip[] = "'enable_semi_fungible_tokens' can't be null";
        }
        if (is_null($this->_data['enable_batch_transactions'])) {
            $ip[] = "'enable_batch_transactions' can't be null";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        return $ip;
    }

    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_ONE,
            self::CHAIN_BSC,
            self::CHAIN_MATIC,
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
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateCustodialWallet.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
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
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('GenerateCustodialWallet.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('GenerateCustodialWallet.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
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
     * @return $this
     */
    public function setEnableFungibleTokens(bool $enable_fungible_tokens) {
        $this->_data['enable_fungible_tokens'] = $enable_fungible_tokens;

        return $this;
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
     * @return $this
     */
    public function setEnableNonFungibleTokens(bool $enable_non_fungible_tokens) {
        $this->_data['enable_non_fungible_tokens'] = $enable_non_fungible_tokens;

        return $this;
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
     * @param bool $enable_semi_fungible_tokens If address should support ERC1155 tokens, it should be marked as true.
     * @return $this
     */
    public function setEnableSemiFungibleTokens(bool $enable_semi_fungible_tokens) {
        $this->_data['enable_semi_fungible_tokens'] = $enable_semi_fungible_tokens;

        return $this;
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
     * @return $this
     */
    public function setEnableBatchTransactions(bool $enable_batch_transactions) {
        $this->_data['enable_batch_transactions'] = $enable_batch_transactions;

        return $this;
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
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
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
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('GenerateCustodialWallet.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }
}
