<?php

/**
 * FlowTx_events_inner Model
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
 * FlowTx_events_inner Model
 */
class FlowTxEventsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowTx_events_inner";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "transaction_id" => ["transactionId", "string", null, "getTransactionId", "setTransactionId"], 
        "transaction_index" => ["transactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex"], 
        "event_index" => ["eventIndex", "float", null, "getEventIndex", "setEventIndex"], 
        "data" => ["data", "object", null, "getData", "setData"]
    ];

    /**
     * FlowTxEventsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "transaction_id"=>null, "transaction_index"=>null, "event_index"=>null, "data"=>null] as $k => $v) {
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
     * @param string|null $type type
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get transaction_id
     *
     * @return string|null
     */
    public function getTransactionId(): ?string {
        return $this->_data["transaction_id"];
    }

    /**
     * Set transaction_id
     * 
     * @param string|null $transaction_id transaction_id
     * @return $this
     */
    public function setTransactionId(?string $transaction_id) {
        $this->_data['transaction_id'] = $transaction_id;

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
     * Get event_index
     *
     * @return float|null
     */
    public function getEventIndex(): ?float {
        return $this->_data["event_index"];
    }

    /**
     * Set event_index
     * 
     * @param float|null $event_index event_index
     * @return $this
     */
    public function setEventIndex(?float $event_index) {
        $this->_data['event_index'] = $event_index;

        return $this;
    }

    /**
     * Get data
     *
     * @return object|null
     */
    public function getData(): ?object {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param object|null $data Event specific data. May vary.
     * @return $this
     */
    public function setData(?object $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
