<?php

/**
 * AlgorandBlockchainReceiveAsset_request Model
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
 * AlgorandBlockchainReceiveAsset_request Model
 */
class AlgorandBlockchainReceiveAssetRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgorandBlockchainReceiveAsset_request";
    protected static $_definition = [
        "asset_id" => ["assetId", "float", null, "getAssetId", "setAssetId"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * AlgorandBlockchainReceiveAssetRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["asset_id"=>null, "from_private_key"=>null, "from"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['asset_id'])) {
            $ip[] = "'asset_id' can't be null";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 58)) {
            $ip[] = "'from' length must be <= 58";
        }
        if ((mb_strlen($this->_data['from']) < 58)) {
            $ip[] = "'from' length must be >= 58";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get asset_id
     *
     * @return float
     */
    public function getAssetId(): float {
        return $this->_data["asset_id"];
    }

    /**
     * Set asset_id
     * 
     * @param float $asset_id AssetID of the asset you wanna enable for the sender.
     * @return $this
     */
    public function setAssetId(float $asset_id) {
        $this->_data['asset_id'] = $asset_id;

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
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Blockchain sender address.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 58)) {
            throw new IAE('AlgorandBlockchainReceiveAssetRequest.setFrom: $from length must be <= 58');
        }
        if ((mb_strlen($from) < 58)) {
            throw new IAE('AlgorandBlockchainReceiveAssetRequest.setFrom: $from length must be >= 58');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
