<?php

/**
 * Erc20Transfer_request Model
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
 * Erc20Transfer_request Model
 */
class Erc20TransferRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_KCS = 'KCS';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "Erc20Transfer_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "digits" => ["digits", "float", null, "getDigits", "setDigits", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null], 
        "fee_payer" => ["feePayer", "string", null, "getFeePayer", "setFeePayer", null], 
        "fee_payer_private_key" => ["feePayerPrivateKey", "string", null, "getFeePayerPrivateKey", "setFeePayerPrivateKey", null], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "fee_payer_signature_id" => ["feePayerSignatureId", "string", 'uuid', "getFeePayerSignatureId", "setFeePayerSignatureId", null]
    ];

    /**
     * Erc20TransferRequest
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
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 58)) {
            $ip[] = "'from' length must be <= 58";
        }
        if ((mb_strlen($this->_data['from']) < 42)) {
            $ip[] = "'from' length must be >= 42";
        }
        if (!is_null($this->_data['fee_payer']) && (mb_strlen($this->_data['fee_payer']) > 44)) {
            $ip[] = "'fee_payer' length must be <= 44";
        }
        if (!is_null($this->_data['fee_payer']) && (mb_strlen($this->_data['fee_payer']) < 43)) {
            $ip[] = "'fee_payer' length must be >= 43";
        }
        if (!is_null($this->_data['fee_payer_private_key']) && (mb_strlen($this->_data['fee_payer_private_key']) > 87)) {
            $ip[] = "'fee_payer_private_key' length must be <= 87";
        }
        if (!is_null($this->_data['fee_payer_private_key']) && (mb_strlen($this->_data['fee_payer_private_key']) < 128)) {
            $ip[] = "'fee_payer_private_key' length must be >= 128";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
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
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
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
            throw new IAE(sprintf("Erc20TransferRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
            throw new IAE('Erc20TransferRequest.setTo: $to length must be <= 50');
        }
        if ((mb_strlen($to) < 1)) {
            throw new IAE('Erc20TransferRequest.setTo: $to length must be >= 1');
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
            throw new IAE('Erc20TransferRequest.setContractAddress: $contract_address length must be <= 43');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('Erc20TransferRequest.setContractAddress: $contract_address length must be >= 42');
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
            throw new IAE('Erc20TransferRequest.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
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
            throw new IAE('Erc20TransferRequest.setDigits: $digits must be <=30');
        }
        if (($digits < 1)) {
            throw new IAE('Erc20TransferRequest.setDigits: $digits must be >=1');
        }
        $this->_data['digits'] = $digits;

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
     * @param string $from_private_key The private key of the blockchain address from which the fee will be deducted
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('Erc20TransferRequest.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('Erc20TransferRequest.setFromPrivateKey: $from_private_key length must be >= 66');
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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('Erc20TransferRequest.setNonce: $nonce must be >=0');
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
     * @param string $from The blockchain address to send the fungible tokens from
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 58)) {
            throw new IAE('Erc20TransferRequest.setFrom: $from length must be <= 58');
        }
        if ((mb_strlen($from) < 42)) {
            throw new IAE('Erc20TransferRequest.setFrom: $from length must be >= 42');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get fee_payer
     *
     * @return string|null
     */
    public function getFeePayer(): ?string {
        return $this->_data["fee_payer"];
    }

    /**
     * Set fee_payer
     * 
     * @param string|null $fee_payer The blockchain address from which the fee will be deducted; if not set, defaults to the address that you specified in the <code>from</code> parameter
     * @return $this
     */
    public function setFeePayer(?string $fee_payer) {
        if (!is_null($fee_payer) && (mb_strlen($fee_payer) > 44)) {
            throw new IAE('Erc20TransferRequest.setFeePayer: $fee_payer length must be <= 44');
        }
        if (!is_null($fee_payer) && (mb_strlen($fee_payer) < 43)) {
            throw new IAE('Erc20TransferRequest.setFeePayer: $fee_payer length must be >= 43');
        }
        $this->_data['fee_payer'] = $fee_payer;

        return $this;
    }

    /**
     * Get fee_payer_private_key
     *
     * @return string|null
     */
    public function getFeePayerPrivateKey(): ?string {
        return $this->_data["fee_payer_private_key"];
    }

    /**
     * Set fee_payer_private_key
     * 
     * @param string|null $fee_payer_private_key The private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the private key that you specified in the <code>fromPrivateKey</code> parameter
     * @return $this
     */
    public function setFeePayerPrivateKey(?string $fee_payer_private_key) {
        if (!is_null($fee_payer_private_key) && (mb_strlen($fee_payer_private_key) > 87)) {
            throw new IAE('Erc20TransferRequest.setFeePayerPrivateKey: $fee_payer_private_key length must be <= 87');
        }
        if (!is_null($fee_payer_private_key) && (mb_strlen($fee_payer_private_key) < 128)) {
            throw new IAE('Erc20TransferRequest.setFeePayerPrivateKey: $fee_payer_private_key length must be >= 128');
        }
        $this->_data['fee_payer_private_key'] = $fee_payer_private_key;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("Erc20TransferRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * Get fee_payer_signature_id
     *
     * @return string|null
     */
    public function getFeePayerSignatureId(): ?string {
        return $this->_data["fee_payer_signature_id"];
    }

    /**
     * Set fee_payer_signature_id
     * 
     * @param string|null $fee_payer_signature_id The KMS identifier of the private key of the blockchain address that you specified in the <code>feePayer</code> parameter; if not set, defaults to the signature ID that you specified in the <code>signatureId</code> parameter
     * @return $this
     */
    public function setFeePayerSignatureId(?string $fee_payer_signature_id) {
        $this->_data['fee_payer_signature_id'] = $fee_payer_signature_id;

        return $this;
    }
}
