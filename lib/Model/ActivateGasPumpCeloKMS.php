<?php

/**
 * ActivateGasPumpCeloKMS Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * ActivateGasPumpCeloKMS Model
 */
class ActivateGasPumpCeloKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "ActivateGasPumpCeloKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null, ["r" => 1]], 
        "from" => ["from", "int", null, "getFrom", "setFrom", null, ["r" => 1, "n" => [0]]], 
        "to" => ["to", "int", null, "getTo", "setTo", null, ["r" => 1, "n" => [0]]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 0, "e" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]]
    ];

    /**
     * ActivateGasPumpCeloKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_CELO,
        ];
    }
    /**
     * Get allowable values
     *
     * @return string[]
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $owner The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as \"master address\"
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwner(string $owner) {
        return $this->_set("owner", $owner);
    }

    /**
     * Get from
     *
     * @return int
     */
    public function getFrom(): int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int $from The start index of the range of gas pump addresses to activate
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(int $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get to
     *
     * @return int
     */
    public function getTo(): int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int $to The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(int $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency(): ?string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string|null $fee_currency The currency to pay for the gas fee; if not set, defaults to CELO
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(?string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }
}
