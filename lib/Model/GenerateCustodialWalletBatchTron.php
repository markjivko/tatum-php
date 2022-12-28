<?php

/**
 * GenerateCustodialWalletBatchTron Model
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
 * GenerateCustodialWalletBatchTron Model
 */
class GenerateCustodialWalletBatchTron extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "GenerateCustodialWalletBatchTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount", null], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null]
    ];

    /**
     * GenerateCustodialWalletBatchTron
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
        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['batch_count'])) {
            $ip[] = "'batch_count' can't be null";
        }
        if (is_null($this->_data['owner'])) {
            $ip[] = "'owner' can't be null";
        }
        if ((mb_strlen($this->_data['owner']) > 34)) {
            $ip[] = "'owner' length must be <= 34";
        }
        if ((mb_strlen($this->_data['owner']) < 34)) {
            $ip[] = "'owner' length must be >= 34";
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 5)) {
            $ip[] = "'fee_limit' must be >= 5";
        }
        return $ip;
    }

    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_TRON,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("GenerateCustodialWalletBatchTron.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $from_private_key Private key of account, from which the transaction will be initiated.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('GenerateCustodialWalletBatchTron.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('GenerateCustodialWalletBatchTron.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to generate.
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        $this->_data['batch_count'] = $batch_count;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner Owner of the addresses.
     * @return $this
     */
    public function setOwner(string $owner) {
        if ((mb_strlen($owner) > 34)) {
            throw new IAE('GenerateCustodialWalletBatchTron.setOwner: $owner length must be <= 34');
        }
        if ((mb_strlen($owner) < 34)) {
            throw new IAE('GenerateCustodialWalletBatchTron.setOwner: $owner length must be >= 34');
        }
        $this->_data['owner'] = $owner;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee limit to be set, in TRX
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 5)) {
            throw new IAE('GenerateCustodialWalletBatchTron.setFeeLimit: $fee_limit must be >=5');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
