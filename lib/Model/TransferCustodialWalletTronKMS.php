<?php

/**
 * TransferCustodialWalletTronKMS Model
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
 * TransferCustodialWalletTronKMS Model
 */
class TransferCustodialWalletTronKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const CONTRACT_TYPE_0 = 0;
    public const CONTRACT_TYPE_1 = 1;
    public const CONTRACT_TYPE_3 = 3;
    protected static $_name = "TransferCustodialWalletTronKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress", null], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient", null], 
        "contract_type" => ["contractType", "float", null, "getContractType", "setContractType", null], 
        "token_address" => ["tokenAddress", "string", null, "getTokenAddress", "setTokenAddress", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null]
    ];

    /**
     * TransferCustodialWalletTronKMS
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
        if ((mb_strlen($this->_data['custodial_address']) > 34)) {
            $ip[] = "'custodial_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['custodial_address']) < 34)) {
            $ip[] = "'custodial_address' length must be >= 34";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 34)) {
            $ip[] = "'from' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from']) < 34)) {
            $ip[] = "'from' length must be >= 34";
        }
        if (is_null($this->_data['recipient'])) {
            $ip[] = "'recipient' can't be null";
        }
        if ((mb_strlen($this->_data['recipient']) > 34)) {
            $ip[] = "'recipient' length must be <= 34";
        }
        if ((mb_strlen($this->_data['recipient']) < 34)) {
            $ip[] = "'recipient' length must be >= 34";
        }
        if (is_null($this->_data['contract_type'])) {
            $ip[] = "'contract_type' can't be null";
        }
        $allowed = $this->getContractTypeAllowableValues();
        $value = $this->_data['contract_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'contract_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (!is_null($this->_data['token_address']) && (mb_strlen($this->_data['token_address']) > 34)) {
            $ip[] = "'token_address' length must be <= 34";
        }
        if (!is_null($this->_data['token_address']) && (mb_strlen($this->_data['token_address']) < 34)) {
            $ip[] = "'token_address' length must be >= 34";
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
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 0)) {
            $ip[] = "'fee_limit' must be >= 0";
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
            throw new IAE(sprintf("TransferCustodialWalletTronKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
     * @param string $custodial_address The gas pump address that transfers the asset; this is the address that you <a href=\"#operation/PrecalculateGasPumpAddresses\">precalculated</a> and <a href=\"#operation/ActivateGasPumpAddresses\">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the \"master address\"
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        if ((mb_strlen($custodial_address) > 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setCustodialAddress: $custodial_address length must be <= 34');
        }
        if ((mb_strlen($custodial_address) < 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setCustodialAddress: $custodial_address length must be >= 34');
        }
        $this->_data['custodial_address'] = $custodial_address;

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
     * @param string $from The blockchain address that owns the gas pump address (\"master address\") in the Base58 format
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setFrom: $from length must be <= 34');
        }
        if ((mb_strlen($from) < 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setFrom: $from length must be >= 34');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient The blockchain address that receives the asset
     * @return $this
     */
    public function setRecipient(string $recipient) {
        if ((mb_strlen($recipient) > 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setRecipient: $recipient length must be <= 34');
        }
        if ((mb_strlen($recipient) < 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setRecipient: $recipient length must be >= 34');
        }
        $this->_data['recipient'] = $recipient;

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
     * @param float $contract_type The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), or <code>3</code> for native blockchain currencies.
     * @return $this
     */
    public function setContractType(float $contract_type) {
        $allowed = $this->getContractTypeAllowableValues();
        if (!in_array($contract_type, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletTronKMS.setContractType: contract_type invalid value '%s', must be one of '%s'", $contract_type, implode("', '", $allowed)));
        }
        $this->_data['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Get token_address
     *
     * @return string|null
     */
    public function getTokenAddress(): ?string {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string|null $token_address (Only if the asset is a fungible token or NFT) The address of the token to transfer. Do not use if the asset is a native blockchain currency.
     * @return $this
     */
    public function setTokenAddress(?string $token_address) {
        if (!is_null($token_address) && (mb_strlen($token_address) > 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setTokenAddress: $token_address length must be <= 34');
        }
        if (!is_null($token_address) && (mb_strlen($token_address) < 34)) {
            throw new IAE('TransferCustodialWalletTronKMS.setTokenAddress: $token_address length must be >= 34');
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
     * @param string|null $amount (Only if the asset is a fungible token or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT.
     * @return $this
     */
    public function setAmount(?string $amount) {
        if (!is_null($amount) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferCustodialWalletTronKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
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
     * @param string|null $token_id (Only if the asset is an NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency.
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        if (!is_null($token_id) && (mb_strlen($token_id) > 256)) {
            throw new IAE('TransferCustodialWalletTronKMS.setTokenId: $token_id length must be <= 256');
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
            throw new IAE('TransferCustodialWalletTronKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
     * @param float $fee_limit The maximum amount to be paid as the gas fee (in TRX)
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('TransferCustodialWalletTronKMS.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
