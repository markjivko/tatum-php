<?php

/**
 * ReceiveAlgorandAssetKMS Model
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
 * ReceiveAlgorandAssetKMS Model
 */
class ReceiveAlgorandAssetKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "ReceiveAlgorandAssetKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null], 
        "asset_id" => ["assetId", "float", null, "getAssetId", "setAssetId", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null]
    ];

    /**
     * ReceiveAlgorandAssetKMS
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
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 58)) {
            $ip[] = "'from' length must be <= 58";
        }
        if ((mb_strlen($this->_data['from']) < 58)) {
            $ip[] = "'from' length must be >= 58";
        }
        if (is_null($this->_data['asset_id'])) {
            $ip[] = "'asset_id' can't be null";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        return $ip;
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
            throw new IAE('ReceiveAlgorandAssetKMS.setFrom: $from length must be <= 58');
        }
        if ((mb_strlen($from) < 58)) {
            throw new IAE('ReceiveAlgorandAssetKMS.setFrom: $from length must be >= 58');
        }
        $this->_data['from'] = $from;

        return $this;
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
