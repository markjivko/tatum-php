<?php

/**
 * Erc20Deploy_request Model
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
 * Erc20Deploy_request Model
 */
class Erc20DeployRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ALGO = 'ALGO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "Erc20Deploy_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "name" => ["name", "string", null, "getName", "setName"], 
        "total_cap" => ["totalCap", "string", null, "getTotalCap", "setTotalCap"], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply"], 
        "digits" => ["digits", "float", null, "getDigits", "setDigits"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\ApproveTransferCustodialWalletFee", null, "getFee", "setFee"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * Erc20DeployRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "symbol"=>null, "name"=>null, "total_cap"=>null, "supply"=>null, "digits"=>null, "address"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null, "from"=>null, "fee_currency"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
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
        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if ((mb_strlen($this->_data['symbol']) > 8)) {
            $ip[] = "'symbol' length must be <= 8";
        }
        if ((mb_strlen($this->_data['symbol']) < 1)) {
            $ip[] = "'symbol' length must be >= 1";
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 32)) {
            $ip[] = "'name' length must be <= 32";
        }
        if ((mb_strlen($this->_data['name']) < 1)) {
            $ip[] = "'name' length must be >= 1";
        }
        if (!preg_match("/^[a-zA-Z0-9_]+$/", $this->_data['name'])) {
            $ip[] = "'name' must match /^[a-zA-Z0-9_]+$/";
        }
        if (!is_null($this->_data['total_cap']) && (mb_strlen($this->_data['total_cap']) > 38)) {
            $ip[] = "'total_cap' length must be <= 38";
        }
        if (!is_null($this->_data['total_cap']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['total_cap'])) {
            $ip[] = "'total_cap' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['supply'])) {
            $ip[] = "'supply' can't be null";
        }
        if ((mb_strlen($this->_data['supply']) > 38)) {
            $ip[] = "'supply' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['supply'])) {
            $ip[] = "'supply' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['digits'])) {
            $ip[] = "'digits' can't be null";
        }
        if (($this->_data['digits'] > 19)) {
            $ip[] = "'digits' must be <= 19";
        }
        if (($this->_data['digits'] < 1)) {
            $ip[] = "'digits' must be >= 1";
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 58)) {
            $ip[] = "'address' length must be <= 58";
        }
        if ((mb_strlen($this->_data['address']) < 42)) {
            $ip[] = "'address' length must be >= 42";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 103)) {
            $ip[] = "'from_private_key' length must be <= 103";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 103)) {
            $ip[] = "'from_private_key' length must be >= 103";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 43)) {
            $ip[] = "'from' length must be <= 43";
        }
        if ((mb_strlen($this->_data['from']) < 44)) {
            $ip[] = "'from' length must be >= 44";
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
            self::CHAIN_ALGO,
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
            throw new IAE(sprintf("Erc20DeployRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Symbol of the ERC20 token
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 8)) {
            throw new IAE('Erc20DeployRequest.setSymbol: $symbol length must be <= 8');
        }
        if ((mb_strlen($symbol) < 1)) {
            throw new IAE('Erc20DeployRequest.setSymbol: $symbol length must be >= 1');
        }
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Name of the ERC20 token
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 32)) {
            throw new IAE('Erc20DeployRequest.setName: $name length must be <= 32');
        }
        if ((mb_strlen($name) < 1)) {
            throw new IAE('Erc20DeployRequest.setName: $name length must be >= 1');
        }
        if ((!preg_match("/^[a-zA-Z0-9_]+$/", $name))) {
            throw new IAE('Erc20DeployRequest.setName: $name must match /^[a-zA-Z0-9_]+$/, ' . var_export($name, true) . ' given');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get total_cap
     *
     * @return string|null
     */
    public function getTotalCap(): ?string {
        return $this->_data["total_cap"];
    }

    /**
     * Set total_cap
     * 
     * @param string|null $total_cap Max supply of ERC20 token.
     * @return $this
     */
    public function setTotalCap(?string $total_cap) {
        if (!is_null($total_cap) && (mb_strlen($total_cap) > 38)) {
            throw new IAE('Erc20DeployRequest.setTotalCap: $total_cap length must be <= 38');
        }
        if (!is_null($total_cap) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $total_cap))) {
            throw new IAE('Erc20DeployRequest.setTotalCap: $total_cap must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($total_cap, true) . ' given');
        }
        $this->_data['total_cap'] = $total_cap;

        return $this;
    }

    /**
     * Get supply
     *
     * @return string
     */
    public function getSupply(): string {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param string $supply Initial supply of ERC20 token. If totalCap is not defined, this will be the total cap.
     * @return $this
     */
    public function setSupply(string $supply) {
        if ((mb_strlen($supply) > 38)) {
            throw new IAE('Erc20DeployRequest.setSupply: $supply length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $supply))) {
            throw new IAE('Erc20DeployRequest.setSupply: $supply must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($supply, true) . ' given');
        }
        $this->_data['supply'] = $supply;

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
     * @param float $digits Number of decimal points
     * @return $this
     */
    public function setDigits(float $digits) {
        if (($digits > 19)) {
            throw new IAE('Erc20DeployRequest.setDigits: $digits must be <=19');
        }
        if (($digits < 1)) {
            throw new IAE('Erc20DeployRequest.setDigits: $digits must be >=1');
        }
        $this->_data['digits'] = $digits;

        return $this;
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
     * @param string $address Address on Ethereum blockchain, where all created ERC20 tokens will be transferred.
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 58)) {
            throw new IAE('Erc20DeployRequest.setAddress: $address length must be <= 58');
        }
        if ((mb_strlen($address) < 42)) {
            throw new IAE('Erc20DeployRequest.setAddress: $address length must be >= 42');
        }
        $this->_data['address'] = $address;

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
     * @param string $from_private_key Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 103)) {
            throw new IAE('Erc20DeployRequest.setFromPrivateKey: $from_private_key length must be <= 103');
        }
        if ((mb_strlen($from_private_key) < 103)) {
            throw new IAE('Erc20DeployRequest.setFromPrivateKey: $from_private_key length must be >= 103');
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
            throw new IAE('Erc20DeployRequest.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\ApproveTransferCustodialWalletFee|null
     */
    public function getFee(): ?\Tatum\Model\ApproveTransferCustodialWalletFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\ApproveTransferCustodialWalletFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\ApproveTransferCustodialWalletFee $fee) {
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
     * @param string $from Address on Solana blockchain, from which the fee for the deployment of SPL will be paid.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 43)) {
            throw new IAE('Erc20DeployRequest.setFrom: $from length must be <= 43');
        }
        if ((mb_strlen($from) < 44)) {
            throw new IAE('Erc20DeployRequest.setFrom: $from length must be >= 44');
        }
        $this->_data['from'] = $from;

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
            throw new IAE(sprintf("Erc20DeployRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
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
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
