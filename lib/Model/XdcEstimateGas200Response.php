<?php

/**
 * XdcEstimateGas_200_response Model
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
 * XdcEstimateGas_200_response Model
 */
class XdcEstimateGas200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XdcEstimateGas_200_response";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"]
    ];

    /**
     * XdcEstimateGas200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["gas_limit"=>null, "gas_price"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' can't be null";
        }
        if (is_null($this->_data['gas_price'])) {
            $ip[] = "'gas_price' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get gas_limit
     *
     * @return string
     */
    public function getGasLimit(): string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string $gas_limit Gas limit for transaction in gas price.
     * @return $this
     */
    public function setGasLimit(string $gas_limit) {
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string
     */
    public function getGasPrice(): string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string $gas_price Gas price in wei.
     * @return $this
     */
    public function setGasPrice(string $gas_price) {
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }
}
