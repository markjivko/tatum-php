<?php

/**
 * SellAssetOnMarketplaceSolanaKMS Model
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
 * SellAssetOnMarketplaceSolanaKMS Model
 */
class SellAssetOnMarketplaceSolanaKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "SellAssetOnMarketplaceSolanaKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null], 
        "from" => ["from", "mixed", null, "getFrom", "setFrom", null], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null], 
        "authority_signature_id" => ["authoritySignatureId", "string", 'uuid', "getAuthoritySignatureId", "setAuthoritySignatureId", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null]
    ];

    /**
     * SellAssetOnMarketplaceSolanaKMS
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
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 44)) {
            $ip[] = "'contract_address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['contract_address']) < 44)) {
            $ip[] = "'contract_address' length must be >= 44";
        }
        if (is_null($this->_data['nft_address'])) {
            $ip[] = "'nft_address' can't be null";
        }
        if ((mb_strlen($this->_data['nft_address']) > 44)) {
            $ip[] = "'nft_address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['nft_address']) < 44)) {
            $ip[] = "'nft_address' length must be >= 44";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 44)) {
            $ip[] = "'from' length must be >= 44";
        }
        if (is_null($this->_data['price'])) {
            $ip[] = "'price' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['price'])) {
            $ip[] = "'price' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("SellAssetOnMarketplaceSolanaKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $contract_address Blockchain address of the smart contract
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setContractAddress: $contract_address length must be <= 44');
        }
        if ((mb_strlen($contract_address) < 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setContractAddress: $contract_address length must be >= 44');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get nft_address
     *
     * @return string
     */
    public function getNftAddress(): string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string $nft_address Blockchain address of the asset to sell
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        if ((mb_strlen($nft_address) > 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setNftAddress: $nft_address length must be <= 44');
        }
        if ((mb_strlen($nft_address) < 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setNftAddress: $nft_address length must be >= 44');
        }
        $this->_data['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Get from
     *
     * @return mixed
     */
    public function getFrom(): mixed {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param mixed $from Blockchain address of the seller
     * @return $this
     */
    public function setFrom(mixed $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 44)) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setFrom: $from length must be >= 44');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice(): string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string $price Price of the asset to sell. Marketplace fee will be obtained on top of this price.
     * @return $this
     */
    public function setPrice(string $price) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $price))) {
            throw new IAE('SellAssetOnMarketplaceSolanaKMS.setPrice: $price must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($price, true) . ' given');
        }
        $this->_data['price'] = $price;

        return $this;
    }

    /**
     * Get authority_signature_id
     *
     * @return string|null
     */
    public function getAuthoritySignatureId(): ?string {
        return $this->_data["authority_signature_id"];
    }

    /**
     * Set authority_signature_id
     * 
     * @param string|null $authority_signature_id The KMS identifier of the private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to \"true\" for the marketplace
     * @return $this
     */
    public function setAuthoritySignatureId(?string $authority_signature_id) {
        $this->_data['authority_signature_id'] = $authority_signature_id;

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
     * @param string $signature_id The KMS identifier of the private key of the seller
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
