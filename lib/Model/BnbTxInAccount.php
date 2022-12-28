<?php

/**
 * BnbTxInAccount Model
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
 * BnbTxInAccount Model
 */
class BnbTxInAccount extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BnbTxInAccount";
    protected static $_definition = [
        "total" => ["total", "float", null, "getTotal", "setTotal", null], 
        "tx" => ["tx", "\Tatum\Model\BnbTransaction[]", null, "getTx", "setTx", null]
    ];

    /**
     * BnbTxInAccount
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
     * Get total
     *
     * @return float|null
     */
    public function getTotal(): ?float {
        return $this->_data["total"];
    }

    /**
     * Set total
     * 
     * @param float|null $total total
     * @return $this
     */
    public function setTotal(?float $total) {
        $this->_data['total'] = $total;

        return $this;
    }

    /**
     * Get tx
     *
     * @return \Tatum\Model\BnbTransaction[]|null
     */
    public function getTx(): ?array {
        return $this->_data["tx"];
    }

    /**
     * Set tx
     * 
     * @param \Tatum\Model\BnbTransaction[]|null $tx tx
     * @return $this
     */
    public function setTx(?array $tx) {
        $this->_data['tx'] = $tx;

        return $this;
    }
}
