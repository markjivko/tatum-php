<?php

/**
 * ChainTransferKcsEthErc20KMS Model
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
 * ChainTransferKcsEthErc20KMS Model
 */
class ChainTransferKcsEthErc20KMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_KCS = 'KCS';
    protected static $_name = "ChainTransferKcsEthErc20KMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "digits" => ["digits", "float", null, "getDigits", "setDigits", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null]
    ];

    /**
     * ChainTransferKcsEthErc20KMS
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
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 50)) {
            $ip[] = "'to' length must be <= 50";
        }
        if ((mb_strlen($this->_data['to']) < 1)) {
            $ip[] = "'to' length must be >= 1";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 43)) {
            $ip[] = "'contract_address' length must be <= 43";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['digits'])) {
            $ip[] = "'digits' can't be null";
        }
        if (($this->_data['digits'] > 30)) {
            $ip[] = "'digits' must be <= 30";
        }
        if (($this->_data['digits'] < 1)) {
            $ip[] = "'digits' must be >= 1";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
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
            self::CHAIN_KCS,
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("ChainTransferKcsEthErc20KMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to The blockchain address to send the fungible tokens to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 50)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setTo: $to length must be <= 50');
        }
        if ((mb_strlen($to) < 1)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setTo: $to length must be >= 1');
        }
        $this->_data['to'] = $to;

        return $this;
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
     * @param string $contract_address The blockchain address of the fungible token smart contract
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 43)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setContractAddress: $contract_address length must be <= 43');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount The amount of the fungible tokens to be sent
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get digits
     *
     * @return float
     */
    public function getDigits(): float {
        return $this->_data["digits"];
    }

    /**
     * Set digits
     * 
     * @param float $digits The number of decimal places that the fungible tokens have
     * @return $this
     */
    public function setDigits(float $digits) {
        if (($digits > 30)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setDigits: $digits must be <=30');
        }
        if (($digits < 1)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setDigits: $digits must be >=1');
        }
        $this->_data['digits'] = $digits;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address from which the fee will be deducted
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('ChainTransferKcsEthErc20KMS.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
