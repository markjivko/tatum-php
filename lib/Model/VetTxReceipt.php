<?php

/**
 * VetTxReceipt Model
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
 * VetTxReceipt Model
 */
class VetTxReceipt extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetTxReceipt";
    protected static $_definition = [
        "gas_used" => ["gasUsed", "float", null, "getGasUsed", "setGasUsed"], 
        "gas_payer" => ["gasPayer", "string", null, "getGasPayer", "setGasPayer"], 
        "paid" => ["paid", "string", null, "getPaid", "setPaid"], 
        "reward" => ["reward", "string", null, "getReward", "setReward"], 
        "reverted" => ["reverted", "bool", null, "getReverted", "setReverted"], 
        "meta" => ["meta", "\Tatum\Model\VetTxReceiptMeta", null, "getMeta", "setMeta"], 
        "outputs" => ["outputs", "\Tatum\Model\VetTxReceiptOutputsInner[]", null, "getOutputs", "setOutputs"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash"], 
        "transaction_hash" => ["transactionHash", "string", null, "getTransactionHash", "setTransactionHash"], 
        "status" => ["status", "string", null, "getStatus", "setStatus"]
    ];

    /**
     * VetTxReceipt
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["gas_used"=>null, "gas_payer"=>null, "paid"=>null, "reward"=>null, "reverted"=>null, "meta"=>null, "outputs"=>null, "block_number"=>null, "block_hash"=>null, "transaction_hash"=>null, "status"=>null] as $k => $v) {
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
     * @param float|null $gas_used gas_used
     * @return $this
     */
    public function setGasUsed(?float $gas_used) {
        $this->_data['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Get gas_payer
     *
     * @return string|null
     */
    public function getGasPayer(): ?string {
        return $this->_data["gas_payer"];
    }

    /**
     * Set gas_payer
     * 
     * @param string|null $gas_payer gas_payer
     * @return $this
     */
    public function setGasPayer(?string $gas_payer) {
        $this->_data['gas_payer'] = $gas_payer;

        return $this;
    }

    /**
     * Get paid
     *
     * @return string|null
     */
    public function getPaid(): ?string {
        return $this->_data["paid"];
    }

    /**
     * Set paid
     * 
     * @param string|null $paid paid
     * @return $this
     */
    public function setPaid(?string $paid) {
        $this->_data['paid'] = $paid;

        return $this;
    }

    /**
     * Get reward
     *
     * @return string|null
     */
    public function getReward(): ?string {
        return $this->_data["reward"];
    }

    /**
     * Set reward
     * 
     * @param string|null $reward reward
     * @return $this
     */
    public function setReward(?string $reward) {
        $this->_data['reward'] = $reward;

        return $this;
    }

    /**
     * Get reverted
     *
     * @return bool|null
     */
    public function getReverted(): ?bool {
        return $this->_data["reverted"];
    }

    /**
     * Set reverted
     * 
     * @param bool|null $reverted reverted
     * @return $this
     */
    public function setReverted(?bool $reverted) {
        $this->_data['reverted'] = $reverted;

        return $this;
    }

    /**
     * Get meta
     *
     * @return \Tatum\Model\VetTxReceiptMeta|null
     */
    public function getMeta(): ?\Tatum\Model\VetTxReceiptMeta {
        return $this->_data["meta"];
    }

    /**
     * Set meta
     * 
     * @param \Tatum\Model\VetTxReceiptMeta|null $meta meta
     * @return $this
     */
    public function setMeta(?\Tatum\Model\VetTxReceiptMeta $meta) {
        $this->_data['meta'] = $meta;

        return $this;
    }

    /**
     * Get outputs
     *
     * @return \Tatum\Model\VetTxReceiptOutputsInner[]|null
     */
    public function getOutputs(): ?array {
        return $this->_data["outputs"];
    }

    /**
     * Set outputs
     * 
     * @param \Tatum\Model\VetTxReceiptOutputsInner[]|null $outputs List of recipient addresses and amounts to send to each of them.
     * @return $this
     */
    public function setOutputs(?array $outputs) {
        $this->_data['outputs'] = $outputs;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number block_number
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get block_hash
     *
     * @return string|null
     */
    public function getBlockHash(): ?string {
        return $this->_data["block_hash"];
    }

    /**
     * Set block_hash
     * 
     * @param string|null $block_hash block_hash
     * @return $this
     */
    public function setBlockHash(?string $block_hash) {
        $this->_data['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Get transaction_hash
     *
     * @return string|null
     */
    public function getTransactionHash(): ?string {
        return $this->_data["transaction_hash"];
    }

    /**
     * Set transaction_hash
     * 
     * @param string|null $transaction_hash transaction_hash
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash) {
        $this->_data['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string|null $status status
     * @return $this
     */
    public function setStatus(?string $status) {
        $this->_data['status'] = $status;

        return $this;
    }
}
