<?php

/**
 * MultiTokenGetContractAddress_200_response Model
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
 * MultiTokenGetContractAddress_200_response Model
 */
class MultiTokenGetContractAddress200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MultiTokenGetContractAddress_200_response";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null]
    ];

    /**
     * MultiTokenGetContractAddress200Response
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
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address Address of the Multi Token token.
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }
}
