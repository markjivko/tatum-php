<?php

/**
 * TronAccount Model
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
 * TronAccount Model
 */
class TronAccount extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronAccount";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "balance" => ["balance", "float", null, "getBalance", "setBalance"], 
        "trc10" => ["trc10", "\Tatum\Model\TronAccountTrc10Inner[]", null, "getTrc10", "setTrc10"], 
        "trc20" => ["trc20", "object[]", null, "getTrc20", "setTrc20"], 
        "create_time" => ["createTime", "float", null, "getCreateTime", "setCreateTime"], 
        "asset_issued_id" => ["assetIssuedId", "string", null, "getAssetIssuedId", "setAssetIssuedId"], 
        "asset_issued_name" => ["assetIssuedName", "float", null, "getAssetIssuedName", "setAssetIssuedName"], 
        "free_net_usage" => ["freeNetUsage", "float", null, "getFreeNetUsage", "setFreeNetUsage"], 
        "free_net_limit" => ["freeNetLimit", "float", null, "getFreeNetLimit", "setFreeNetLimit"], 
        "net_usage" => ["netUsage", "float", null, "getNetUsage", "setNetUsage"], 
        "net_limit" => ["netLimit", "float", null, "getNetLimit", "setNetLimit"], 
        "bandwidth" => ["bandwidth", "float", null, "getBandwidth", "setBandwidth"]
    ];

    /**
     * TronAccount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "balance"=>null, "trc10"=>null, "trc20"=>null, "create_time"=>null, "asset_issued_id"=>null, "asset_issued_name"=>null, "free_net_usage"=>null, "free_net_limit"=>null, "net_usage"=>null, "net_limit"=>null, "bandwidth"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['balance'])) {
            $ip[] = "'balance' can't be null";
        }
        if (is_null($this->_data['trc10'])) {
            $ip[] = "'trc10' can't be null";
        }
        if (is_null($this->_data['trc20'])) {
            $ip[] = "'trc20' can't be null";
        }
        if (is_null($this->_data['create_time'])) {
            $ip[] = "'create_time' can't be null";
        }
        if (is_null($this->_data['free_net_usage'])) {
            $ip[] = "'free_net_usage' can't be null";
        }
        if (is_null($this->_data['bandwidth'])) {
            $ip[] = "'bandwidth' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Account address
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get balance
     *
     * @return float
     */
    public function getBalance(): float {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param float $balance Balance of the TRX, in SUN. SUN is 1/1000000 TRX.
     * @return $this
     */
    public function setBalance(float $balance) {
        $this->_data['balance'] = $balance;

        return $this;
    }

    /**
     * Get trc10
     *
     * @return \Tatum\Model\TronAccountTrc10Inner[]
     */
    public function getTrc10(): array {
        return $this->_data["trc10"];
    }

    /**
     * Set trc10
     * 
     * @param \Tatum\Model\TronAccountTrc10Inner[] $trc10 trc10
     * @return $this
     */
    public function setTrc10(array $trc10) {
        $this->_data['trc10'] = $trc10;

        return $this;
    }

    /**
     * Get trc20
     *
     * @return object[]
     */
    public function getTrc20(): array {
        return $this->_data["trc20"];
    }

    /**
     * Set trc20
     * 
     * @param object[] $trc20 trc20
     * @return $this
     */
    public function setTrc20(array $trc20) {
        $this->_data['trc20'] = $trc20;

        return $this;
    }

    /**
     * Get create_time
     *
     * @return float
     */
    public function getCreateTime(): float {
        return $this->_data["create_time"];
    }

    /**
     * Set create_time
     * 
     * @param float $create_time Date of creation of the account in UTC millis.
     * @return $this
     */
    public function setCreateTime(float $create_time) {
        $this->_data['create_time'] = $create_time;

        return $this;
    }

    /**
     * Get asset_issued_id
     *
     * @return string|null
     */
    public function getAssetIssuedId(): ?string {
        return $this->_data["asset_issued_id"];
    }

    /**
     * Set asset_issued_id
     * 
     * @param string|null $asset_issued_id ID of the issued TRC10 token, if any.
     * @return $this
     */
    public function setAssetIssuedId(?string $asset_issued_id) {
        $this->_data['asset_issued_id'] = $asset_issued_id;

        return $this;
    }

    /**
     * Get asset_issued_name
     *
     * @return float|null
     */
    public function getAssetIssuedName(): ?float {
        return $this->_data["asset_issued_name"];
    }

    /**
     * Set asset_issued_name
     * 
     * @param float|null $asset_issued_name Balance of the issued TRC10 token, if any.
     * @return $this
     */
    public function setAssetIssuedName(?float $asset_issued_name) {
        $this->_data['asset_issued_name'] = $asset_issued_name;

        return $this;
    }

    /**
     * Get free_net_usage
     *
     * @return float
     */
    public function getFreeNetUsage(): float {
        return $this->_data["free_net_usage"];
    }

    /**
     * Set free_net_usage
     * 
     * @param float $free_net_usage Free usage of the network.
     * @return $this
     */
    public function setFreeNetUsage(float $free_net_usage) {
        $this->_data['free_net_usage'] = $free_net_usage;

        return $this;
    }

    /**
     * Get free_net_limit
     *
     * @return float|null
     */
    public function getFreeNetLimit(): ?float {
        return $this->_data["free_net_limit"];
    }

    /**
     * Set free_net_limit
     * 
     * @param float|null $free_net_limit Free usage limit of the network.
     * @return $this
     */
    public function setFreeNetLimit(?float $free_net_limit) {
        $this->_data['free_net_limit'] = $free_net_limit;

        return $this;
    }

    /**
     * Get net_usage
     *
     * @return float|null
     */
    public function getNetUsage(): ?float {
        return $this->_data["net_usage"];
    }

    /**
     * Set net_usage
     * 
     * @param float|null $net_usage Extra usage of the network.
     * @return $this
     */
    public function setNetUsage(?float $net_usage) {
        $this->_data['net_usage'] = $net_usage;

        return $this;
    }

    /**
     * Get net_limit
     *
     * @return float|null
     */
    public function getNetLimit(): ?float {
        return $this->_data["net_limit"];
    }

    /**
     * Set net_limit
     * 
     * @param float|null $net_limit Extra usage limit of the network.
     * @return $this
     */
    public function setNetLimit(?float $net_limit) {
        $this->_data['net_limit'] = $net_limit;

        return $this;
    }

    /**
     * Get bandwidth
     *
     * @return float
     */
    public function getBandwidth(): float {
        return $this->_data["bandwidth"];
    }

    /**
     * Set bandwidth
     * 
     * @param float $bandwidth Remaining usage of the network, equal to freeNetLimit - freeNetUsed + netLimit - netUsed.
     * @return $this
     */
    public function setBandwidth(float $bandwidth) {
        $this->_data['bandwidth'] = $bandwidth;

        return $this;
    }
}
