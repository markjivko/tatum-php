<?php

/**
 * AdaBlock Model
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
 * AdaBlock Model
 */
class AdaBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash", null], 
        "number" => ["number", "float", null, "getNumber", "setNumber", null], 
        "epoch_no" => ["epochNo", "float", null, "getEpochNo", "setEpochNo", null], 
        "slot_no" => ["slotNo", "float", null, "getSlotNo", "setSlotNo", null], 
        "forged_at" => ["forgedAt", "string", null, "getForgedAt", "setForgedAt", null], 
        "transactions" => ["transactions", "\Tatum\Model\AdaTx[]", null, "getTransactions", "setTransactions", null]
    ];

    /**
     * AdaBlock
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
        return $ip;
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
     * @param string|null $hash Hash of block.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

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
     * @param float|null $number The number of blocks preceding a particular block on a block chain.
     * @return $this
     */
    public function setNumber(?float $number) {
        $this->_data['number'] = $number;

        return $this;
    }

    /**
     * Get epoch_no
     *
     * @return float|null
     */
    public function getEpochNo(): ?float {
        return $this->_data["epoch_no"];
    }

    /**
     * Set epoch_no
     * 
     * @param float|null $epoch_no Number of the epoch the block is included in.
     * @return $this
     */
    public function setEpochNo(?float $epoch_no) {
        $this->_data['epoch_no'] = $epoch_no;

        return $this;
    }

    /**
     * Get slot_no
     *
     * @return float|null
     */
    public function getSlotNo(): ?float {
        return $this->_data["slot_no"];
    }

    /**
     * Set slot_no
     * 
     * @param float|null $slot_no Number of the slot the block is included in.
     * @return $this
     */
    public function setSlotNo(?float $slot_no) {
        $this->_data['slot_no'] = $slot_no;

        return $this;
    }

    /**
     * Get forged_at
     *
     * @return string|null
     */
    public function getForgedAt(): ?string {
        return $this->_data["forged_at"];
    }

    /**
     * Set forged_at
     * 
     * @param string|null $forged_at Time of the block.
     * @return $this
     */
    public function setForgedAt(?string $forged_at) {
        $this->_data['forged_at'] = $forged_at;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\AdaTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\AdaTx[]|null $transactions transactions
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }
}
