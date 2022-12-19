<?php

/**
 * EthBlock Model
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
 * EthBlock Model
 */
class EthBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EthBlock";
    protected static $_definition = [
        "difficulty" => ["difficulty", "string", null, "getDifficulty", "setDifficulty"], 
        "extra_data" => ["extraData", "string", null, "getExtraData", "setExtraData"], 
        "gas_limit" => ["gasLimit", "float", null, "getGasLimit", "setGasLimit"], 
        "gas_used" => ["gasUsed", "float", null, "getGasUsed", "setGasUsed"], 
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "logs_bloom" => ["logsBloom", "string", null, "getLogsBloom", "setLogsBloom"], 
        "miner" => ["miner", "string", null, "getMiner", "setMiner"], 
        "mix_hash" => ["mixHash", "string", null, "getMixHash", "setMixHash"], 
        "nonce" => ["nonce", "string", null, "getNonce", "setNonce"], 
        "number" => ["number", "float", null, "getNumber", "setNumber"], 
        "parent_hash" => ["parentHash", "string", null, "getParentHash", "setParentHash"], 
        "receipts_root" => ["receiptsRoot", "string", null, "getReceiptsRoot", "setReceiptsRoot"], 
        "sha3_uncles" => ["sha3Uncles", "string", null, "getSha3Uncles", "setSha3Uncles"], 
        "size" => ["size", "float", null, "getSize", "setSize"], 
        "state_root" => ["stateRoot", "string", null, "getStateRoot", "setStateRoot"], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp"], 
        "total_difficulty" => ["totalDifficulty", "string", null, "getTotalDifficulty", "setTotalDifficulty"], 
        "transactions" => ["transactions", "\Tatum\Model\EthTx[]", null, "getTransactions", "setTransactions"], 
        "transactions_root" => ["transactionsRoot", "string", null, "getTransactionsRoot", "setTransactionsRoot"]
    ];

    /**
     * EthBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["difficulty"=>null, "extra_data"=>null, "gas_limit"=>null, "gas_used"=>null, "hash"=>null, "logs_bloom"=>null, "miner"=>null, "mix_hash"=>null, "nonce"=>null, "number"=>null, "parent_hash"=>null, "receipts_root"=>null, "sha3_uncles"=>null, "size"=>null, "state_root"=>null, "timestamp"=>null, "total_difficulty"=>null, "transactions"=>null, "transactions_root"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get difficulty
     *
     * @return string|null
     */
    public function getDifficulty(): ?string {
        return $this->_data["difficulty"];
    }

    /**
     * Set difficulty
     * 
     * @param string|null $difficulty Difficulty for this block.
     * @return $this
     */
    public function setDifficulty(?string $difficulty) {
        $this->_data['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Get extra_data
     *
     * @return string|null
     */
    public function getExtraData(): ?string {
        return $this->_data["extra_data"];
    }

    /**
     * Set extra_data
     * 
     * @param string|null $extra_data The 'extra data' field of this block.
     * @return $this
     */
    public function setExtraData(?string $extra_data) {
        $this->_data['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Get gas_limit
     *
     * @return float|null
     */
    public function getGasLimit(): ?float {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param float|null $gas_limit The maximum gas allowed in this block.
     * @return $this
     */
    public function setGasLimit(?float $gas_limit) {
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get gas_used
     *
     * @return float|null
     */
    public function getGasUsed(): ?float {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param float|null $gas_used The total used gas by all transactions in this block.
     * @return $this
     */
    public function setGasUsed(?float $gas_used) {
        $this->_data['gas_used'] = $gas_used;

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
     * @param string|null $hash Hash of the block. 'null' when its pending block.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get logs_bloom
     *
     * @return string|null
     */
    public function getLogsBloom(): ?string {
        return $this->_data["logs_bloom"];
    }

    /**
     * Set logs_bloom
     * 
     * @param string|null $logs_bloom The bloom filter for the logs of the block. 'null' when its pending block.
     * @return $this
     */
    public function setLogsBloom(?string $logs_bloom) {
        $this->_data['logs_bloom'] = $logs_bloom;

        return $this;
    }

    /**
     * Get miner
     *
     * @return string|null
     */
    public function getMiner(): ?string {
        return $this->_data["miner"];
    }

    /**
     * Set miner
     * 
     * @param string|null $miner The address of the beneficiary to whom the mining rewards were given.
     * @return $this
     */
    public function setMiner(?string $miner) {
        $this->_data['miner'] = $miner;

        return $this;
    }

    /**
     * Get mix_hash
     *
     * @return string|null
     */
    public function getMixHash(): ?string {
        return $this->_data["mix_hash"];
    }

    /**
     * Set mix_hash
     * 
     * @param string|null $mix_hash 
     * @return $this
     */
    public function setMixHash(?string $mix_hash) {
        $this->_data['mix_hash'] = $mix_hash;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return string|null
     */
    public function getNonce(): ?string {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param string|null $nonce Hash of the generated proof-of-work. 'null' when its pending block.
     * @return $this
     */
    public function setNonce(?string $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number The block number. 'null' when its pending block.
     * @return $this
     */
    public function setNumber(?float $number) {
        $this->_data['number'] = $number;

        return $this;
    }

    /**
     * Get parent_hash
     *
     * @return string|null
     */
    public function getParentHash(): ?string {
        return $this->_data["parent_hash"];
    }

    /**
     * Set parent_hash
     * 
     * @param string|null $parent_hash Hash of the parent block.
     * @return $this
     */
    public function setParentHash(?string $parent_hash) {
        $this->_data['parent_hash'] = $parent_hash;

        return $this;
    }

    /**
     * Get receipts_root
     *
     * @return string|null
     */
    public function getReceiptsRoot(): ?string {
        return $this->_data["receipts_root"];
    }

    /**
     * Set receipts_root
     * 
     * @param string|null $receipts_root 
     * @return $this
     */
    public function setReceiptsRoot(?string $receipts_root) {
        $this->_data['receipts_root'] = $receipts_root;

        return $this;
    }

    /**
     * Get sha3_uncles
     *
     * @return string|null
     */
    public function getSha3Uncles(): ?string {
        return $this->_data["sha3_uncles"];
    }

    /**
     * Set sha3_uncles
     * 
     * @param string|null $sha3_uncles SHA3 of the uncles data in the block.
     * @return $this
     */
    public function setSha3Uncles(?string $sha3_uncles) {
        $this->_data['sha3_uncles'] = $sha3_uncles;

        return $this;
    }

    /**
     * Get size
     *
     * @return float|null
     */
    public function getSize(): ?float {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param float|null $size The size of this block in bytes.
     * @return $this
     */
    public function setSize(?float $size) {
        $this->_data['size'] = $size;

        return $this;
    }

    /**
     * Get state_root
     *
     * @return string|null
     */
    public function getStateRoot(): ?string {
        return $this->_data["state_root"];
    }

    /**
     * Set state_root
     * 
     * @param string|null $state_root The root of the final state trie of the block.
     * @return $this
     */
    public function setStateRoot(?string $state_root) {
        $this->_data['state_root'] = $state_root;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp The unix timestamp for when the block was collated.
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Get total_difficulty
     *
     * @return string|null
     */
    public function getTotalDifficulty(): ?string {
        return $this->_data["total_difficulty"];
    }

    /**
     * Set total_difficulty
     * 
     * @param string|null $total_difficulty Total difficulty of the chain until this block.
     * @return $this
     */
    public function setTotalDifficulty(?string $total_difficulty) {
        $this->_data['total_difficulty'] = $total_difficulty;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\EthTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\EthTx[]|null $transactions Array of transactions.
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }

    /**
     * Get transactions_root
     *
     * @return string|null
     */
    public function getTransactionsRoot(): ?string {
        return $this->_data["transactions_root"];
    }

    /**
     * Set transactions_root
     * 
     * @param string|null $transactions_root The root of the transaction trie of the block.
     * @return $this
     */
    public function setTransactionsRoot(?string $transactions_root) {
        $this->_data['transactions_root'] = $transactions_root;

        return $this;
    }
}
