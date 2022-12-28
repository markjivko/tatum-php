<?php

/**
 * XrpAccountTx_transactions_inner_meta_AffectedNodes_inner Model
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
 * XrpAccountTx_transactions_inner_meta_AffectedNodes_inner Model
 */
class XrpAccountTxTransactionsInnerMetaAffectedNodesInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpAccountTx_transactions_inner_meta_AffectedNodes_inner";
    protected static $_definition = [
        "created_node" => ["CreatedNode", "\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode", null, "getCreatedNode", "setCreatedNode", null]
    ];

    /**
     * XrpAccountTxTransactionsInnerMetaAffectedNodesInner
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
     * Get created_node
     *
     * @return \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode|null
     */
    public function getCreatedNode(): ?\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode {
        return $this->_data["created_node"];
    }

    /**
     * Set created_node
     * 
     * @param \Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode|null $created_node created_node
     * @return $this
     */
    public function setCreatedNode(?\Tatum\Model\XrpAccountTxTransactionsInnerMetaAffectedNodesInnerCreatedNode $created_node) {
        $this->_data['created_node'] = $created_node;

        return $this;
    }
}
