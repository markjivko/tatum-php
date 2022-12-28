<?php

/**
 * ApproveTransferCustodialWalletCeloKMS Model
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
 * ApproveTransferCustodialWalletCeloKMS Model
 */
class ApproveTransferCustodialWalletCeloKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const CONTRACT_TYPE_0 = 0;
    public const CONTRACT_TYPE_1 = 1;
    public const CONTRACT_TYPE_2 = 2;
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "ApproveTransferCustodialWalletCeloKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress", null], 
        "spender" => ["spender", "string", null, "getSpender", "setSpender", null], 
        "contract_type" => ["contractType", "float", null, "getContractType", "setContractType", null], 
        "token_address" => ["tokenAddress", "string", null, "getTokenAddress", "setTokenAddress", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null], 
        "fee" => ["fee", "\Tatum\Model\ApproveTransferCustodialWalletFee", null, "getFee", "setFee", null]
    ];

    /**
     * ApproveTransferCustodialWalletCeloKMS
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
        if (is_null($this->_data['custodial_address'])) {
            $ip[] = "'custodial_address' can't be null";
        }
        if ((mb_strlen($this->_data['custodial_address']) > 42)) {
            $ip[] = "'custodial_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['custodial_address']) < 42)) {
            $ip[] = "'custodial_address' length must be >= 42";
        }
        if (is_null($this->_data['spender'])) {
            $ip[] = "'spender' can't be null";
        }
        if ((mb_strlen($this->_data['spender']) > 42)) {
            $ip[] = "'spender' length must be <= 42";
        }
        if ((mb_strlen($this->_data['spender']) < 42)) {
            $ip[] = "'spender' length must be >= 42";
        }
        if (is_null($this->_data['contract_type'])) {
            $ip[] = "'contract_type' can't be null";
        }
        $allowed = $this->getContractTypeAllowableValues();
        $value = $this->_data['contract_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'contract_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['token_address'])) {
            $ip[] = "'token_address' can't be null";
        }
        if ((mb_strlen($this->_data['token_address']) > 42)) {
            $ip[] = "'token_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['token_address']) < 42)) {
            $ip[] = "'token_address' length must be >= 42";
        }
        if (!is_null($this->_data['amount']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['token_id']) && (mb_strlen($this->_data['token_id']) > 256)) {
            $ip[] = "'token_id' length must be <= 256";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
            self::CHAIN_CELO,
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
            self::CONTRACT_TYPE_2,
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
            throw new IAE(sprintf("ApproveTransferCustodialWalletCeloKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
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
     * @param string $custodial_address The gas pump address that holds the asset
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        if ((mb_strlen($custodial_address) > 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setCustodialAddress: $custodial_address length must be <= 42');
        }
        if ((mb_strlen($custodial_address) < 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setCustodialAddress: $custodial_address length must be >= 42');
        }
        $this->_data['custodial_address'] = $custodial_address;

        return $this;
    }

    /**
     * Get spender
     *
     * @return string
     */
    public function getSpender(): string {
        return $this->_data["spender"];
    }

    /**
     * Set spender
     * 
     * @param string $spender The blockchain address to allow the transfer of the asset from the gas pump address
     * @return $this
     */
    public function setSpender(string $spender) {
        if ((mb_strlen($spender) > 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setSpender: $spender length must be <= 42');
        }
        if ((mb_strlen($spender) < 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setSpender: $spender length must be >= 42');
        }
        $this->_data['spender'] = $spender;

        return $this;
    }

    /**
     * Get contract_type
     *
     * @return float
     */
    public function getContractType(): float {
        return $this->_data["contract_type"];
    }

    /**
     * Set contract_type
     * 
     * @param float $contract_type The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>2</code> for Multi Tokens (ERC-1155 or equivalent).
     * @return $this
     */
    public function setContractType(float $contract_type) {
        $allowed = $this->getContractTypeAllowableValues();
        if (!in_array($contract_type, $allowed, true)) {
            throw new IAE(sprintf("ApproveTransferCustodialWalletCeloKMS.setContractType: contract_type invalid value '%s', must be one of '%s'", $contract_type, implode("', '", $allowed)));
        }
        $this->_data['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Get token_address
     *
     * @return string
     */
    public function getTokenAddress(): string {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string $token_address The address of the asset to transfer
     * @return $this
     */
    public function setTokenAddress(string $token_address) {
        if ((mb_strlen($token_address) > 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setTokenAddress: $token_address length must be <= 42');
        }
        if ((mb_strlen($token_address) < 42)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setTokenAddress: $token_address length must be >= 42');
        }
        $this->_data['token_address'] = $token_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount (Only if the asset is a fungible token or Multi Token) The amount of the asset to transfer. Do not use if the asset is an NFT.
     * @return $this
     */
    public function setAmount(?string $amount) {
        if (!is_null($amount) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string|null $token_id (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token.
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        if (!is_null($token_id) && (mb_strlen($token_id) > 256)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setTokenId: $token_id length must be <= 256');
        }
        $this->_data['token_id'] = $token_id;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that owns the gas pump address key (\"master address\")
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
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
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('ApproveTransferCustodialWalletCeloKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
     * @param string $fee_currency The currency to pay for the gas fee
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("ApproveTransferCustodialWalletCeloKMS.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * @param float|null $nonce The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
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
}
