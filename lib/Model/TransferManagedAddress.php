<?php

/**
 * TransferManagedAddress Model
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
 * TransferManagedAddress Model
 */
class TransferManagedAddress extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "TransferManagedAddress";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData", null], 
        "wallet_ids" => ["walletIds", "\Tatum\Model\TransferManagedAddressWalletIdsInner[]", null, "getWalletIds", "setWalletIds", null]
    ];

    /**
     * TransferManagedAddress
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
        if (is_null($this->_data['tx_data'])) {
            $ip[] = "'tx_data' can't be null";
        }
        if ((mb_strlen($this->_data['tx_data']) > 500000)) {
            $ip[] = "'tx_data' length must be <= 500000";
        }
        if ((mb_strlen($this->_data['tx_data']) < 1)) {
            $ip[] = "'tx_data' length must be >= 1";
        }
        if (is_null($this->_data['wallet_ids'])) {
            $ip[] = "'wallet_ids' can't be null";
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
            self::CHAIN_SOL,
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
     * @param string $chain Blockchain to work on
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("TransferManagedAddress.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get tx_data
     *
     * @return string
     */
    public function getTxData(): string {
        return $this->_data["tx_data"];
    }

    /**
     * Set tx_data
     * 
     * @param string $tx_data Hex serialized data representing transaction, which should be signed using one of the managed wallets.
     * @return $this
     */
    public function setTxData(string $tx_data) {
        if ((mb_strlen($tx_data) > 500000)) {
            throw new IAE('TransferManagedAddress.setTxData: $tx_data length must be <= 500000');
        }
        if ((mb_strlen($tx_data) < 1)) {
            throw new IAE('TransferManagedAddress.setTxData: $tx_data length must be >= 1');
        }
        $this->_data['tx_data'] = $tx_data;

        return $this;
    }

    /**
     * Get wallet_ids
     *
     * @return \Tatum\Model\TransferManagedAddressWalletIdsInner[]
     */
    public function getWalletIds(): array {
        return $this->_data["wallet_ids"];
    }

    /**
     * Set wallet_ids
     * 
     * @param \Tatum\Model\TransferManagedAddressWalletIdsInner[] $wallet_ids wallet_ids
     * @return $this
     */
    public function setWalletIds(array $wallet_ids) {
        $this->_data['wallet_ids'] = $wallet_ids;

        return $this;
    }
}
