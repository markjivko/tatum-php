<?php

/**
 * GetMarketplaceListing_200_response Model
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
 * GetMarketplaceListing_200_response Model
 */
class GetMarketplaceListing200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const STATE__0 = '0';
    public const STATE__1 = '1';
    public const STATE__2 = '2';
    protected static $_name = "GetMarketplaceListing_200_response";
    protected static $_definition = [
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1]], 
        "buyer" => ["buyer", "string", null, "getBuyer", "setBuyer", null, ["r" => 0]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0]], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721", null, ["r" => 0]], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId", null, ["r" => 1]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 0]], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null, ["r" => 1]], 
        "seller" => ["seller", "string", null, "getSeller", "setSeller", null, ["r" => 1]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 1, "e" => 1]], 
        "nft" => ["nft", "\Tatum\Model\SolanaListingDataNft", null, "getNft", "setNft", null, ["r" => 1]], 
        "created_at" => ["createdAt", "float", null, "getCreatedAt", "setCreatedAt", null, ["r" => 1]], 
        "purchased_at" => ["purchasedAt", "float", null, "getPurchasedAt", "setPurchasedAt", null, ["r" => 0]], 
        "cancelled_at" => ["cancelledAt", "float", null, "getCancelledAt", "setCancelledAt", null, ["r" => 0]]
    ];

    /**
     * GetMarketplaceListing200Response
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
    public function getStateAllowableValues(): array {
        return [
            self::STATE__0,
            self::STATE__1,
            self::STATE__2,
        ];
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
     * @param string $amount Amount of NFTs to sold in this listing.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get buyer
     *
     * @return string|null
     */
    public function getBuyer(): ?string {
        return $this->_data["buyer"];
    }

    /**
     * Set buyer
     * 
     * @param string|null $buyer Address of the buyer, if exists.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBuyer(?string $buyer) {
        return $this->_set("buyer", $buyer);
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
     * @param string|null $erc20_address Address of the ERC20 token smart contract, which should be used for paying for the asset
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        return $this->_set("erc20_address", $erc20_address);
    }

    /**
     * Get is_erc721
     *
     * @return bool|null
     */
    public function getIsErc721(): ?bool {
        return $this->_data["is_erc721"];
    }

    /**
     * Set is_erc721
     * 
     * @param bool|null $is_erc721 True if asset is NFT of type ERC721, false if ERC1155
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsErc721(?bool $is_erc721) {
        return $this->_set("is_erc721", $is_erc721);
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
     * @param string $listing_id ID of the listing
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setListingId(string $listing_id) {
        return $this->_set("listing_id", $listing_id);
    }

    /**
     * Get nft_address
     *
     * @return string|null
     */
    public function getNftAddress(): ?string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string|null $nft_address Address of the NFT smart contract.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        return $this->_set("nft_address", $nft_address);
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
     * @param string $price Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(string $price) {
        return $this->_set("price", $price);
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
     * @param string $seller Address of the seller.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSeller(string $seller) {
        return $this->_set("seller", $seller);
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState(): string {
        return $this->_data["state"];
    }

    /**
     * Set state
     * 
     * @param string $state State of the listing. 0 - available, 1 - sold, 2 - cancelled
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState(string $state) {
        return $this->_set("state", $state);
    }

    /**
     * Get nft
     *
     * @return \Tatum\Model\SolanaListingDataNft
     */
    public function getNft(): \Tatum\Model\SolanaListingDataNft {
        return $this->_data["nft"];
    }

    /**
     * Set nft
     * 
     * @param \Tatum\Model\SolanaListingDataNft $nft nft
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNft(\Tatum\Model\SolanaListingDataNft $nft) {
        return $this->_set("nft", $nft);
    }

    /**
     * Get created_at
     *
     * @return float
     */
    public function getCreatedAt(): float {
        return $this->_data["created_at"];
    }

    /**
     * Set created_at
     * 
     * @param float $created_at Timestamp when this listing was created
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreatedAt(float $created_at) {
        return $this->_set("created_at", $created_at);
    }

    /**
     * Get purchased_at
     *
     * @return float|null
     */
    public function getPurchasedAt(): ?float {
        return $this->_data["purchased_at"];
    }

    /**
     * Set purchased_at
     * 
     * @param float|null $purchased_at Timestamp when this listing was purchased
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPurchasedAt(?float $purchased_at) {
        return $this->_set("purchased_at", $purchased_at);
    }

    /**
     * Get cancelled_at
     *
     * @return float|null
     */
    public function getCancelledAt(): ?float {
        return $this->_data["cancelled_at"];
    }

    /**
     * Set cancelled_at
     * 
     * @param float|null $cancelled_at Timestamp when this listing was cancelled
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCancelledAt(?float $cancelled_at) {
        return $this->_set("cancelled_at", $cancelled_at);
    }
}
