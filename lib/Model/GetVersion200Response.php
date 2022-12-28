<?php

/**
 * getVersion_200_response Model
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
 * getVersion_200_response Model
 */
class GetVersion200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "getVersion_200_response";
    protected static $_definition = [
        "version" => ["version", "string", null, "getVersion", "setVersion", null], 
        "status" => ["status", "string", null, "getStatus", "setStatus", null], 
        "testnet" => ["testnet", "bool", null, "getTestnet", "setTestnet", null], 
        "plan_name" => ["planName", "string", null, "getPlanName", "setPlanName", null], 
        "plan_code" => ["planCode", "string", null, "getPlanCode", "setPlanCode", null], 
        "price" => ["price", "float", null, "getPrice", "setPrice", null], 
        "expiration" => ["expiration", "float", null, "getExpiration", "setExpiration", null], 
        "credit_limit" => ["creditLimit", "float", null, "getCreditLimit", "setCreditLimit", null], 
        "usage" => ["usage", "float", null, "getUsage", "setUsage", null], 
        "rollover_day" => ["rolloverDay", "float", null, "getRolloverDay", "setRolloverDay", null]
    ];

    /**
     * GetVersion200Response
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
     * Get version
     *
     * @return string|null
     */
    public function getVersion(): ?string {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param string|null $version version
     * @return $this
     */
    public function setVersion(?string $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string|null $status status
     * @return $this
     */
    public function setStatus(?string $status) {
        $this->_data['status'] = $status;

        return $this;
    }

    /**
     * Get testnet
     *
     * @return bool|null
     */
    public function getTestnet(): ?bool {
        return $this->_data["testnet"];
    }

    /**
     * Set testnet
     * 
     * @param bool|null $testnet testnet
     * @return $this
     */
    public function setTestnet(?bool $testnet) {
        $this->_data['testnet'] = $testnet;

        return $this;
    }

    /**
     * Get plan_name
     *
     * @return string|null
     */
    public function getPlanName(): ?string {
        return $this->_data["plan_name"];
    }

    /**
     * Set plan_name
     * 
     * @param string|null $plan_name plan_name
     * @return $this
     */
    public function setPlanName(?string $plan_name) {
        $this->_data['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Get plan_code
     *
     * @return string|null
     */
    public function getPlanCode(): ?string {
        return $this->_data["plan_code"];
    }

    /**
     * Set plan_code
     * 
     * @param string|null $plan_code plan_code
     * @return $this
     */
    public function setPlanCode(?string $plan_code) {
        $this->_data['plan_code'] = $plan_code;

        return $this;
    }

    /**
     * Get price
     *
     * @return float|null
     */
    public function getPrice(): ?float {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param float|null $price price
     * @return $this
     */
    public function setPrice(?float $price) {
        $this->_data['price'] = $price;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return float|null
     */
    public function getExpiration(): ?float {
        return $this->_data["expiration"];
    }

    /**
     * Set expiration
     * 
     * @param float|null $expiration expiration
     * @return $this
     */
    public function setExpiration(?float $expiration) {
        $this->_data['expiration'] = $expiration;

        return $this;
    }

    /**
     * Get credit_limit
     *
     * @return float|null
     */
    public function getCreditLimit(): ?float {
        return $this->_data["credit_limit"];
    }

    /**
     * Set credit_limit
     * 
     * @param float|null $credit_limit credit_limit
     * @return $this
     */
    public function setCreditLimit(?float $credit_limit) {
        $this->_data['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Get usage
     *
     * @return float|null
     */
    public function getUsage(): ?float {
        return $this->_data["usage"];
    }

    /**
     * Set usage
     * 
     * @param float|null $usage usage
     * @return $this
     */
    public function setUsage(?float $usage) {
        $this->_data['usage'] = $usage;

        return $this;
    }

    /**
     * Get rollover_day
     *
     * @return float|null
     */
    public function getRolloverDay(): ?float {
        return $this->_data["rollover_day"];
    }

    /**
     * Set rollover_day
     * 
     * @param float|null $rollover_day rollover_day
     * @return $this
     */
    public function setRolloverDay(?float $rollover_day) {
        $this->_data['rollover_day'] = $rollover_day;

        return $this;
    }
}
