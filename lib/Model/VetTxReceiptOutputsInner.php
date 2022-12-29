<?php

/**
 * VetTxReceipt_outputs_inner Model
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
 * VetTxReceipt_outputs_inner Model
 */
class VetTxReceiptOutputsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetTxReceipt_outputs_inner";
    protected static $_definition = [
        "events" => ["events", "object[]", null, "getEvents", "setEvents", null, ["r" => 0, "c" => 1]], 
        "transfers" => ["transfers", "\Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]", null, "getTransfers", "setTransfers", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * VetTxReceiptOutputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get events
     *
     * @return object[]|null
     */
    public function getEvents(): ?array {
        return $this->_data["events"];
    }

    /**
     * Set events
     * 
     * @param object[]|null $events events
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEvents(?array $events) {
        return $this->_set("events", $events);
    }

    /**
     * Get transfers
     *
     * @return \Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]|null
     */
    public function getTransfers(): ?array {
        return $this->_data["transfers"];
    }

    /**
     * Set transfers
     * 
     * @param \Tatum\Model\VetTxReceiptOutputsInnerTransfersInner[]|null $transfers transfers
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransfers(?array $transfers) {
        return $this->_set("transfers", $transfers);
    }
}
