<?php

/**
 * CallBscSmartContractMethod Model
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
 * CallBscSmartContractMethod Model
 */
class CallBscSmartContractMethod extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CallBscSmartContractMethod";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "method_name" => ["methodName", "string", null, "getMethodName", "setMethodName"], 
        "method_abi" => ["methodABI", "object", null, "getMethodAbi", "setMethodAbi"], 
        "params" => ["params", "string[]", null, "getParams", "setParams"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * CallBscSmartContractMethod
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["contract_address"=>null, "method_name"=>null, "method_abi"=>null, "params"=>null, "amount"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (is_null($this->_data['method_name'])) {
            $ip[] = "'method_name' can't be null";
        }
        if ((mb_strlen($this->_data['method_name']) > 500)) {
            $ip[] = "'method_name' length must be <= 500";
        }
        if ((mb_strlen($this->_data['method_name']) < 1)) {
            $ip[] = "'method_name' length must be >= 1";
        }
        if (is_null($this->_data['method_abi'])) {
            $ip[] = "'method_abi' can't be null";
        }
        if (is_null($this->_data['params'])) {
            $ip[] = "'params' can't be null";
        }
        if (!is_null($this->_data['amount']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        
        return $ip;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The address of the smart contract
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('CallBscSmartContractMethod.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('CallBscSmartContractMethod.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get method_name
     *
     * @return string
     */
    public function getMethodName(): string {
        return $this->_data["method_name"];
    }

    /**
     * Set method_name
     * 
     * @param string $method_name Name of the method to invoke on smart contract.
     * @return $this
     */
    public function setMethodName(string $method_name) {
        if ((mb_strlen($method_name) > 500)) {
            throw new IAE('CallBscSmartContractMethod.setMethodName: $method_name length must be <= 500');
        }
        if ((mb_strlen($method_name) < 1)) {
            throw new IAE('CallBscSmartContractMethod.setMethodName: $method_name length must be >= 1');
        }
        $this->_data['method_name'] = $method_name;

        return $this;
    }

    /**
     * Get method_abi
     *
     * @return object
     */
    public function getMethodAbi(): object {
        return $this->_data["method_abi"];
    }

    /**
     * Set method_abi
     * 
     * @param object $method_abi ABI of the method to invoke.
     * @return $this
     */
    public function setMethodAbi(object $method_abi) {
        $this->_data['method_abi'] = $method_abi;

        return $this;
    }

    /**
     * Get params
     *
     * @return string[]
     */
    public function getParams(): array {
        return $this->_data["params"];
    }

    /**
     * Set params
     * 
     * @param string[] $params params
     * @return $this
     */
    public function setParams(array $params) {
        $this->_data['params'] = $params;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Amount of the assets to be sent.
     * @return $this
     */
    public function setAmount(?string $amount) {
        if (!is_null($amount) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('CallBscSmartContractMethod.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('CallBscSmartContractMethod.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('CallBscSmartContractMethod.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce Nonce to be set to BSC transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('CallBscSmartContractMethod.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
