<?php

/**
 * BnbTx_tx_value_msg_inner_value_outputs_inner Model
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
 * BnbTx_tx_value_msg_inner_value_outputs_inner Model
 */
class BnbTxTxValueMsgInnerValueOutputsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BnbTx_tx_value_msg_inner_value_outputs_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "coins" => ["coins", "\Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]", null, "getCoins", "setCoins"]
    ];

    /**
     * BnbTxTxValueMsgInnerValueOutputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "coins"=>null] as $k => $v) {
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
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address address
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get coins
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]|null
     */
    public function getCoins(): ?array {
        return $this->_data["coins"];
    }

    /**
     * Set coins
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]|null $coins coins
     * @return $this
     */
    public function setCoins(?array $coins) {
        $this->_data['coins'] = $coins;

        return $this;
    }
}
