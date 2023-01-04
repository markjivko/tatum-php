<?php

/**
 * TransferCustodialWalletBatch_request Model
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

/**
 * TransferCustodialWalletBatch_request Model
 */
class TransferCustodialWalletBatchRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const CONTRACT_TYPE_0 = 0;
    public const CONTRACT_TYPE_1 = 1;
    public const CONTRACT_TYPE_3 = 3;
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "TransferCustodialWalletBatch_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "recipient" => ["recipient", "string[]", null, "getRecipient", "setRecipient", null, ["r" => 1, "c" => 1]], 
        "contract_type" => ["contractType", "float[]", null, "getContractType", "setContractType", null, ["r" => 1, "e" => 1, "c" => 1]], 
        "token_address" => ["tokenAddress", "string[]", null, "getTokenAddress", "setTokenAddress", null, ["r" => 1, "c" => 1]], 
        "amount" => ["amount", "string[]", null, "getAmount", "setAmount", null, ["r" => 1, "c" => 1]], 
        "token_id" => ["tokenId", "string[]", null, "getTokenId", "setTokenId", null, ["r" => 1, "c" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null, ["r" => 0]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null, ["r" => 1, "n" => [0]]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 34, "xl" => 34]]
    ];

    /**
     * TransferCustodialWalletBatchRequest
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
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_TRON,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getContractTypeAllowableValues(): array {
        return [
            self::CONTRACT_TYPE_0,
            self::CONTRACT_TYPE_1,
            self::CONTRACT_TYPE_3,
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address The gas pump address that transfers the assets; this is the address that you <a href=\"#operation/PrecalculateGasPumpAddresses\">precalculated</a> and <a href=\"#operation/ActivateGasPumpAddresses\">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the \"master address\"
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        return $this->_set("custodial_address", $custodial_address);
    }

    /**
     * Get recipient
     *
     * @return string[]
     */
    public function getRecipient(): array {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string[] $recipient The blockchain address that receives the assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipient(array $recipient) {
        return $this->_set("recipient", $recipient);
    }

    /**
     * Get contract_type
     *
     * @return float[]
     */
    public function getContractType(): array {
        return $this->_data["contract_type"];
    }

    /**
     * Set contract_type
     * 
     * @param float[] $contract_type The type of the assets to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractType(array $contract_type) {
        return $this->_set("contract_type", $contract_type);
    }

    /**
     * Get token_address
     *
     * @return string[]
     */
    public function getTokenAddress(): array {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string[] $token_address <ul> <li> If the assets are fungible tokens or NFTs, set this parameter to the array of the addresses of the tokens to transfer:<br/> <code>\"tokenAddress\": [\"0x782919AFc85eEA2cB736874225456bB5d3e242bA\",\"0x74225456bB5d3e242bA782919AFc85eEA2cB7368\",...,\"0x3e242bA78274225456bB52cB7368d919AFc85eEA\"]</code> </li> <li> If the assets are a native blockchain currency, set this parameter to the array of zeros, a zero per currency:<br/> <code>\"tokenAddress\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenAddress(array $token_address) {
        return $this->_set("token_address", $token_address);
    }

    /**
     * Get amount
     *
     * @return string[]
     */
    public function getAmount(): array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string[] $amount <ul> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of the amounts of the assets to transfer:<br/> <code>\"amount\": [\"100000\",\"15000\",...,\"250000\"]</code> </li> <li> If the assets are NFTs, set this parameter to the array of zeros, a zero per NFT:<br/> <code>\"amount\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(array $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get token_id
     *
     * @return string[]
     */
    public function getTokenId(): array {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string[] $token_id <ul> <li> If the assets are NFTs, set this parameter to the array of the IDs of the tokens to transfer:<br/> <code>\"tokenId\": [\"12\",\"13\",...,\"24\"]</code>  </li> <li> If the assets are fungible tokens or a native blockchain currency, set this parameter to the array of zeros, a zero per fungible token/currency:<br/> <code>\"tokenId\": [\"0\",\"0\",...,\"0\"]</code> </li> </ul>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(array $token_id) {
        return $this->_set("token_id", $token_id);
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
     * @param string $from_private_key The private key of the blockchain address that owns the gas pump address (\"master address\")
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
     * @param float|null $nonce The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        return $this->_set("fee", $fee);
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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that owns the gas pump address key (\"master address\")
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
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the \"master address\" that was generated from the mnemonic
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
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
     * @param string $fee_currency The currency to pay for the gas fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
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
     * @param float $fee_limit The maximum amount to be paid as the gas fee (in TRX)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        return $this->_set("fee_limit", $fee_limit);
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
     * @param string $from The blockchain address that owns the gas pump address (\"master address\") in the Base58 format
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }
}
