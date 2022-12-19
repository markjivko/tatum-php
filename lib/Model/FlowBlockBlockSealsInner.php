<?php

/**
 * FlowBlock_blockSeals_inner Model
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
 * FlowBlock_blockSeals_inner Model
 */
class FlowBlockBlockSealsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowBlock_blockSeals_inner";
    protected static $_definition = [
        "block_id" => ["blockId", "string", null, "getBlockId", "setBlockId"], 
        "execution_receipt_signatures" => ["executionReceiptSignatures", "string[]", null, "getExecutionReceiptSignatures", "setExecutionReceiptSignatures"], 
        "execution_receipt_id" => ["executionReceiptId", "string", null, "getExecutionReceiptId", "setExecutionReceiptId"], 
        "result_approval_signatures" => ["resultApprovalSignatures", "string[]", null, "getResultApprovalSignatures", "setResultApprovalSignatures"]
    ];

    /**
     * FlowBlockBlockSealsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["block_id"=>null, "execution_receipt_signatures"=>null, "execution_receipt_id"=>null, "result_approval_signatures"=>null] as $k => $v) {
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
     * Get block_id
     *
     * @return string|null
     */
    public function getBlockId(): ?string {
        return $this->_data["block_id"];
    }

    /**
     * Set block_id
     * 
     * @param string|null $block_id block_id
     * @return $this
     */
    public function setBlockId(?string $block_id) {
        $this->_data['block_id'] = $block_id;

        return $this;
    }

    /**
     * Get execution_receipt_signatures
     *
     * @return string[]|null
     */
    public function getExecutionReceiptSignatures(): ?array {
        return $this->_data["execution_receipt_signatures"];
    }

    /**
     * Set execution_receipt_signatures
     * 
     * @param string[]|null $execution_receipt_signatures execution_receipt_signatures
     * @return $this
     */
    public function setExecutionReceiptSignatures(?array $execution_receipt_signatures) {
        $this->_data['execution_receipt_signatures'] = $execution_receipt_signatures;

        return $this;
    }

    /**
     * Get execution_receipt_id
     *
     * @return string|null
     */
    public function getExecutionReceiptId(): ?string {
        return $this->_data["execution_receipt_id"];
    }

    /**
     * Set execution_receipt_id
     * 
     * @param string|null $execution_receipt_id execution_receipt_id
     * @return $this
     */
    public function setExecutionReceiptId(?string $execution_receipt_id) {
        $this->_data['execution_receipt_id'] = $execution_receipt_id;

        return $this;
    }

    /**
     * Get result_approval_signatures
     *
     * @return string[]|null
     */
    public function getResultApprovalSignatures(): ?array {
        return $this->_data["result_approval_signatures"];
    }

    /**
     * Set result_approval_signatures
     * 
     * @param string[]|null $result_approval_signatures result_approval_signatures
     * @return $this
     */
    public function setResultApprovalSignatures(?array $result_approval_signatures) {
        $this->_data['result_approval_signatures'] = $result_approval_signatures;

        return $this;
    }
}
