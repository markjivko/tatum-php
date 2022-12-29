<?php

/**
 * FlowBlock Model
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
 * FlowBlock Model
 */
class FlowBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowBlock";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "parent_id" => ["parentId", "string", null, "getParentId", "setParentId", null, ["r" => 0]], 
        "height" => ["height", "float", null, "getHeight", "setHeight", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "string", null, "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "transactions" => ["transactions", "string[]", null, "getTransactions", "setTransactions", null, ["r" => 0, "c" => 1]], 
        "signatures" => ["signatures", "string[]", null, "getSignatures", "setSignatures", null, ["r" => 0, "c" => 1]], 
        "block_seals" => ["blockSeals", "\Tatum\Model\FlowBlockBlockSealsInner[]", null, "getBlockSeals", "setBlockSeals", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * FlowBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id Hash of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get parent_id
     *
     * @return string|null
     */
    public function getParentId(): ?string {
        return $this->_data["parent_id"];
    }

    /**
     * Set parent_id
     * 
     * @param string|null $parent_id Hash of the parent block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParentId(?string $parent_id) {
        return $this->_set("parent_id", $parent_id);
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The block number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeight(?float $height) {
        return $this->_set("height", $height);
    }

    /**
     * Get timestamp
     *
     * @return string|null
     */
    public function getTimestamp(): ?string {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param string|null $timestamp Timestamp of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?string $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get transactions
     *
     * @return string[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param string[]|null $transactions Array of transaction IDs.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        return $this->_set("transactions", $transactions);
    }

    /**
     * Get signatures
     *
     * @return string[]|null
     */
    public function getSignatures(): ?array {
        return $this->_data["signatures"];
    }

    /**
     * Set signatures
     * 
     * @param string[]|null $signatures Array of signatures.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatures(?array $signatures) {
        return $this->_set("signatures", $signatures);
    }

    /**
     * Get block_seals
     *
     * @return \Tatum\Model\FlowBlockBlockSealsInner[]|null
     */
    public function getBlockSeals(): ?array {
        return $this->_data["block_seals"];
    }

    /**
     * Set block_seals
     * 
     * @param \Tatum\Model\FlowBlockBlockSealsInner[]|null $block_seals Array of block seals.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockSeals(?array $block_seals) {
        return $this->_set("block_seals", $block_seals);
    }
}
