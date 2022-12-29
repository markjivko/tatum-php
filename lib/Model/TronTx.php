<?php

/**
 * TronTx Model
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
 * TronTx Model
 */
class TronTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx";
    protected static $_definition = [
        "ret" => ["ret", "\Tatum\Model\TronTxRetInner[]", null, "getRet", "setRet", null, ["r" => 1, "c" => 1]], 
        "signature" => ["signature", "string[]", null, "getSignature", "setSignature", null, ["r" => 1, "c" => 1]], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber", null, ["r" => 1]], 
        "tx_id" => ["txID", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "net_usage" => ["netUsage", "float", null, "getNetUsage", "setNetUsage", null, ["r" => 0]], 
        "raw_data" => ["rawData", "\Tatum\Model\TronTxRawData", null, "getRawData", "setRawData", null, ["r" => 1]]
    ];

    /**
     * TronTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get ret
     *
     * @return \Tatum\Model\TronTxRetInner[]
     */
    public function getRet(): array {
        return $this->_data["ret"];
    }

    /**
     * Set ret
     * 
     * @param \Tatum\Model\TronTxRetInner[] $ret Result of the smart contract invocation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRet(array $ret) {
        return $this->_set("ret", $ret);
    }

    /**
     * Get signature
     *
     * @return string[]
     */
    public function getSignature(): array {
        return $this->_data["signature"];
    }

    /**
     * Set signature
     * 
     * @param string[] $signature List of signatures of the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignature(array $signature) {
        return $this->_set("signature", $signature);
    }

    /**
     * Get block_number
     *
     * @return float
     */
    public function getBlockNumber(): float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float $block_number The block in which the transaction was included.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockNumber(float $block_number) {
        return $this->_set("block_number", $block_number);
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id Transaction ID.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get net_usage
     *
     * @return float|null
     */
    public function getNetUsage(): ?float {
        return $this->_data["net_usage"];
    }

    /**
     * Set net_usage
     * 
     * @param float|null $net_usage Usage of the network.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNetUsage(?float $net_usage) {
        return $this->_set("net_usage", $net_usage);
    }

    /**
     * Get raw_data
     *
     * @return \Tatum\Model\TronTxRawData
     */
    public function getRawData(): \Tatum\Model\TronTxRawData {
        return $this->_data["raw_data"];
    }

    /**
     * Set raw_data
     * 
     * @param \Tatum\Model\TronTxRawData $raw_data raw_data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRawData(\Tatum\Model\TronTxRawData $raw_data) {
        return $this->_set("raw_data", $raw_data);
    }
}
