<?php

/**
 * SellAssetOnMarketplaceTron Model
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
 * SellAssetOnMarketplaceTron Model
 */
class SellAssetOnMarketplaceTron extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "SellAssetOnMarketplaceTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null], 
        "seller" => ["seller", "string", null, "getSeller", "setSeller", null], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId", null], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId", null], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null]
    ];

    /**
     * SellAssetOnMarketplaceTron
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
        if ((mb_strlen($this->_data['contract_address']) > 34)) {
            $ip[] = "'contract_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['contract_address']) < 34)) {
            $ip[] = "'contract_address' length must be >= 34";
        }
        if (is_null($this->_data['nft_address'])) {
            $ip[] = "'nft_address' can't be null";
        }
        if ((mb_strlen($this->_data['nft_address']) > 34)) {
            $ip[] = "'nft_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['nft_address']) < 34)) {
            $ip[] = "'nft_address' length must be >= 34";
        }
        if (is_null($this->_data['seller'])) {
            $ip[] = "'seller' can't be null";
        }
        if ((mb_strlen($this->_data['seller']) > 34)) {
            $ip[] = "'seller' length must be <= 34";
        }
        if ((mb_strlen($this->_data['seller']) < 34)) {
            $ip[] = "'seller' length must be >= 34";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) > 34)) {
            $ip[] = "'erc20_address' length must be <= 34";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) < 34)) {
            $ip[] = "'erc20_address' length must be >= 34";
        }
        if (is_null($this->_data['listing_id'])) {
            $ip[] = "'listing_id' can't be null";
        }
        if ((mb_strlen($this->_data['listing_id']) > 200)) {
            $ip[] = "'listing_id' length must be <= 200";
        }
        if ((mb_strlen($this->_data['listing_id']) < 1)) {
            $ip[] = "'listing_id' length must be >= 1";
        }
        if (!is_null($this->_data['amount']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 256)) {
            $ip[] = "'token_id' length must be <= 256";
        }
        if (is_null($this->_data['price'])) {
            $ip[] = "'price' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['price'])) {
            $ip[] = "'price' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['is_erc721'])) {
            $ip[] = "'is_erc721' can't be null";
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
            throw new IAE(sprintf("SellAssetOnMarketplaceTron.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
     * @param string $contract_address Address of the marketplace smart contract.
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setContractAddress: $contract_address length must be <= 34');
        }
        if ((mb_strlen($contract_address) < 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setContractAddress: $contract_address length must be >= 34');
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
     * @param string $nft_address Address of the NFT asset to sell smart contract.
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        if ((mb_strlen($nft_address) > 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setNftAddress: $nft_address length must be <= 34');
        }
        if ((mb_strlen($nft_address) < 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setNftAddress: $nft_address length must be >= 34');
        }
        $this->_data['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Get seller
     *
     * @return string
     */
    public function getSeller(): string {
        return $this->_data["seller"];
    }

    /**
     * Set seller
     * 
     * @param string $seller Address of the seller of the NFT asset.
     * @return $this
     */
    public function setSeller(string $seller) {
        if ((mb_strlen($seller) > 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setSeller: $seller length must be <= 34');
        }
        if ((mb_strlen($seller) < 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setSeller: $seller length must be >= 34');
        }
        $this->_data['seller'] = $seller;

        return $this;
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Optional address of the TRC20 token, which will be used as a selling currency of the NFT.
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) > 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setErc20Address: $erc20_address length must be <= 34');
        }
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) < 34)) {
            throw new IAE('SellAssetOnMarketplaceTron.setErc20Address: $erc20_address length must be >= 34');
        }
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
    }

    /**
     * Get listing_id
     *
     * @return string
     */
    public function getListingId(): string {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param string $listing_id ID of the listing. It's up to the developer to generate unique ID
     * @return $this
     */
    public function setListingId(string $listing_id) {
        if ((mb_strlen($listing_id) > 200)) {
            throw new IAE('SellAssetOnMarketplaceTron.setListingId: $listing_id length must be <= 200');
        }
        if ((mb_strlen($listing_id) < 1)) {
            throw new IAE('SellAssetOnMarketplaceTron.setListingId: $listing_id length must be >= 1');
        }
        $this->_data['listing_id'] = $listing_id;

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
     * @param string|null $amount Amount of the assets to be sent. For ERC-721 tokens, enter 1.
     * @return $this
     */
    public function setAmount(?string $amount) {
        if (!is_null($amount) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('SellAssetOnMarketplaceTron.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of token, if transaction is for ERC-721 or ERC-1155.
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 256)) {
            throw new IAE('SellAssetOnMarketplaceTron.setTokenId: $token_id length must be <= 256');
        }
        $this->_data['token_id'] = $token_id;

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
            throw new IAE('SellAssetOnMarketplaceTron.setPrice: $price must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($price, true) . ' given');
        }
        $this->_data['price'] = $price;

        return $this;
    }

    /**
     * Get is_erc721
     *
     * @return bool
     */
    public function getIsErc721(): bool {
        return $this->_data["is_erc721"];
    }

    /**
     * Set is_erc721
     * 
     * @param bool $is_erc721 True if asset is NFT of type ERC721, false if ERC1155.
     * @return $this
     */
    public function setIsErc721(bool $is_erc721) {
        $this->_data['is_erc721'] = $is_erc721;

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
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('SellAssetOnMarketplaceTron.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('SellAssetOnMarketplaceTron.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
     * @param float $fee_limit Fee in TRX to be paid.
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('SellAssetOnMarketplaceTron.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
