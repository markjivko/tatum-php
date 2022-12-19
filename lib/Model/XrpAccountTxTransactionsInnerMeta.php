<?php

/**
 * XrpAccountTx_transactions_inner_meta Model
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
 * XrpAccountTx_transactions_inner_meta Model
 * 
 * @description Transaction metadata included in JSON format.
 */
class XrpAccountTxTransactionsInnerMeta extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpAccountTx_transactions_inner_meta";
    protected static $_definition = [
        "affected_nodes" => ["AffectedNodes", "\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInner[]", null, "getAffectedNodes", "setAffectedNodes"], 
        "transaction_index" => ["TransactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex"], 
        "transaction_result" => ["TransactionResult", "string", null, "getTransactionResult", "setTransactionResult"], 
        "delivered_amount" => ["delivered_amount", "string", null, "getDeliveredAmount", "setDeliveredAmount"]
    ];

    /**
     * XrpAccountTxTransactionsInnerMeta
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["affected_nodes"=>null, "transaction_index"=>null, "transaction_result"=>null, "delivered_amount"=>null] as $k => $v) {
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
     * Get affected_nodes
     *
     * @return \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInner[]|null
     */
    public function getAffectedNodes(): ?array {
        return $this->_data["affected_nodes"];
    }

    /**
     * Set affected_nodes
     * 
     * @param \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInner[]|null $affected_nodes affected_nodes
     * @return $this
     */
    public function setAffectedNodes(?array $affected_nodes) {
        $this->_data['affected_nodes'] = $affected_nodes;

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
     * @param float|null $transaction_index transaction_index
     * @return $this
     */
    public function setTransactionIndex(?float $transaction_index) {
        $this->_data['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Get transaction_result
     *
     * @return string|null
     */
    public function getTransactionResult(): ?string {
        return $this->_data["transaction_result"];
    }

    /**
     * Set transaction_result
     * 
     * @param string|null $transaction_result transaction_result
     * @return $this
     */
    public function setTransactionResult(?string $transaction_result) {
        $this->_data['transaction_result'] = $transaction_result;

        return $this;
    }

    /**
     * Get delivered_amount
     *
     * @return string|null
     */
    public function getDeliveredAmount(): ?string {
        return $this->_data["delivered_amount"];
    }

    /**
     * Set delivered_amount
     * 
     * @param string|null $delivered_amount delivered_amount
     * @return $this
     */
    public function setDeliveredAmount(?string $delivered_amount) {
        $this->_data['delivered_amount'] = $delivered_amount;

        return $this;
    }
}
