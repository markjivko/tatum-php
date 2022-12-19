<?php

/**
 * KlaytnTx Model
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
 * KlaytnTx Model
 */
class KlaytnTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "KlaytnTx";
    protected static $_definition = [
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "type_int" => ["typeInt", "float", null, "getTypeInt", "setTypeInt"], 
        "status" => ["status", "bool", null, "getStatus", "setStatus"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "gas" => ["gas", "float", null, "getGas", "setGas"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"], 
        "transaction_hash" => ["transactionHash", "string", null, "getTransactionHash", "setTransactionHash"], 
        "input" => ["input", "string", null, "getInput", "setInput"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "transaction_index" => ["transactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex"], 
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "gas_used" => ["gasUsed", "float", null, "getGasUsed", "setGasUsed"], 
        "cumulative_gas_used" => ["cumulativeGasUsed", "float", null, "getCumulativeGasUsed", "setCumulativeGasUsed"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "logs" => ["logs", "\Tatum\Model\BscTxLogsInner[]", null, "getLogs", "setLogs"]
    ];

    /**
     * KlaytnTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["block_hash"=>null, "type"=>null, "type_int"=>null, "status"=>null, "block_number"=>null, "from"=>null, "gas"=>null, "gas_price"=>null, "transaction_hash"=>null, "input"=>null, "nonce"=>null, "to"=>null, "transaction_index"=>null, "value"=>null, "gas_used"=>null, "cumulative_gas_used"=>null, "contract_address"=>null, "logs"=>null] as $k => $v) {
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
     * @param string|null $block_hash Hash of the block where this transaction was in.
     * @return $this
     */
    public function setBlockHash(?string $block_hash) {
        $this->_data['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of Klaytn Transaction
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get type_int
     *
     * @return float|null
     */
    public function getTypeInt(): ?float {
        return $this->_data["type_int"];
    }

    /**
     * Set type_int
     * 
     * @param float|null $type_int Type of Klaytn Transaction
     * @return $this
     */
    public function setTypeInt(?float $type_int) {
        $this->_data['type_int'] = $type_int;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool|null
     */
    public function getStatus(): ?bool {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param bool|null $status TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction.
     * @return $this
     */
    public function setStatus(?bool $status) {
        $this->_data['status'] = $status;

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
     * @param float|null $block_number Block number where this transaction was in.
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string|null $from Address of the sender.
     * @return $this
     */
    public function setFrom(?string $from) {
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get gas
     *
     * @return float|null
     */
    public function getGas(): ?float {
        return $this->_data["gas"];
    }

    /**
     * Set gas
     * 
     * @param float|null $gas Gas provided by the sender.
     * @return $this
     */
    public function setGas(?float $gas) {
        $this->_data['gas'] = $gas;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string|null
     */
    public function getGasPrice(): ?string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string|null $gas_price Gas price provided by the sender in peb.
     * @return $this
     */
    public function setGasPrice(?string $gas_price) {
        $this->_data['gas_price'] = $gas_price;

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
     * @param string|null $transaction_hash Hash of the transaction.
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash) {
        $this->_data['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Get input
     *
     * @return string|null
     */
    public function getInput(): ?string {
        return $this->_data["input"];
    }

    /**
     * Set input
     * 
     * @param string|null $input The data sent along with the transaction.
     * @return $this
     */
    public function setInput(?string $input) {
        $this->_data['input'] = $input;

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
     * @param float|null $nonce The number of transactions made by the sender prior to this one.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string|null $to Address of the receiver. 'null' when its a contract creation transaction.
     * @return $this
     */
    public function setTo(?string $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get transaction_index
     *
     * @return float|null
     */
    public function getTransactionIndex(): ?float {
        return $this->_data["transaction_index"];
    }

    /**
     * Set transaction_index
     * 
     * @param float|null $transaction_index Integer of the transactions index position in the block.
     * @return $this
     */
    public function setTransactionIndex(?float $transaction_index) {
        $this->_data['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Value transferred in peb.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

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
     * @param float|null $gas_used The amount of gas used by this specific transaction alone.
     * @return $this
     */
    public function setGasUsed(?float $gas_used) {
        $this->_data['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Get cumulative_gas_used
     *
     * @return float|null
     */
    public function getCumulativeGasUsed(): ?float {
        return $this->_data["cumulative_gas_used"];
    }

    /**
     * Set cumulative_gas_used
     * 
     * @param float|null $cumulative_gas_used The total amount of gas used when this transaction was executed in the block.
     * @return $this
     */
    public function setCumulativeGasUsed(?float $cumulative_gas_used) {
        $this->_data['cumulative_gas_used'] = $cumulative_gas_used;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address The contract address created, if the transaction was a contract creation, otherwise null.
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get logs
     *
     * @return \Tatum\Model\BscTxLogsInner[]|null
     */
    public function getLogs(): ?array {
        return $this->_data["logs"];
    }

    /**
     * Set logs
     * 
     * @param \Tatum\Model\BscTxLogsInner[]|null $logs Log events, that happened in this transaction.
     * @return $this
     */
    public function setLogs(?array $logs) {
        $this->_data['logs'] = $logs;

        return $this;
    }
}
