<?php

/**
 * BnbTx_tx_value_msg_inner_value Model
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
 * BnbTx_tx_value_msg_inner_value Model
 */
class BnbTxTxValueMsgInnerValue extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BnbTx_tx_value_msg_inner_value";
    protected static $_definition = [
        "inputs" => ["inputs", "\Tatum\Model\BnbTxTxValueMsgInnerValueInputsInner[]", null, "getInputs", "setInputs", null, ["r" => 0, "c" => 1]], 
        "outputs" => ["outputs", "\Tatum\Model\BnbTxTxValueMsgInnerValueOutputsInner[]", null, "getOutputs", "setOutputs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * BnbTxTxValueMsgInnerValue
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get inputs
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInner[]|null
     */
    public function getInputs(): ?array {
        return $this->_data["inputs"];
    }

    /**
     * Set inputs
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInner[]|null $inputs List of transactions, from which assets are being sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInputs(?array $inputs) {
        return $this->_set("inputs", $inputs);
    }

    /**
     * Get outputs
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValueOutputsInner[]|null
     */
    public function getOutputs(): ?array {
        return $this->_data["outputs"];
    }

    /**
     * Set outputs
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValueOutputsInner[]|null $outputs List of recipient addresses and amounts to send to each of them.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOutputs(?array $outputs) {
        return $this->_set("outputs", $outputs);
    }
}
