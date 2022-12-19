<?php

/**
 * GetAuction_200_response Model
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
 * GetAuction_200_response Model
 */
class GetAuction200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "GetAuction_200_response";
    protected static $_definition = [
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "bidder" => ["bidder", "string", null, "getBidder", "setBidder"], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address"], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721"], 
        "started_at" => ["startedAt", "string", null, "getStartedAt", "setStartedAt"], 
        "ended_at" => ["endedAt", "string", null, "getEndedAt", "setEndedAt"], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress"], 
        "ending_price" => ["endingPrice", "string", null, "getEndingPrice", "setEndingPrice"], 
        "seller" => ["seller", "string", null, "getSeller", "setSeller"], 
        "highest_bid" => ["highestBid", "string", null, "getHighestBid", "setHighestBid"]
    ];

    /**
     * GetAuction200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["amount"=>null, "bidder"=>null, "erc20_address"=>null, "is_erc721"=>null, "started_at"=>null, "ended_at"=>null, "nft_address"=>null, "ending_price"=>null, "seller"=>null, "highest_bid"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
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
     * @param string|null $amount Amount of NFTs to sold in this auction. Valid only for ERC1155 listings.
     * @return $this
     */
    public function setAmount(?string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get bidder
     *
     * @return string|null
     */
    public function getBidder(): ?string {
        return $this->_data["bidder"];
    }

    /**
     * Set bidder
     * 
     * @param string|null $bidder Address of the highest buyer, if exists.
     * @return $this
     */
    public function setBidder(?string $bidder) {
        $this->_data['bidder'] = $bidder;

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
     * @param string|null $erc20_address Address of the ERC20 token smart contract, which should be used for paying for the asset..
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
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
     * @param bool|null $is_erc721 If the listing is for ERC721 or ERC1155 token.
     * @return $this
     */
    public function setIsErc721(?bool $is_erc721) {
        $this->_data['is_erc721'] = $is_erc721;

        return $this;
    }

    /**
     * Get started_at
     *
     * @return string|null
     */
    public function getStartedAt(): ?string {
        return $this->_data["started_at"];
    }

    /**
     * Set started_at
     * 
     * @param string|null $started_at Block height this auction started at.
     * @return $this
     */
    public function setStartedAt(?string $started_at) {
        $this->_data['started_at'] = $started_at;

        return $this;
    }

    /**
     * Get ended_at
     *
     * @return string|null
     */
    public function getEndedAt(): ?string {
        return $this->_data["ended_at"];
    }

    /**
     * Set ended_at
     * 
     * @param string|null $ended_at Block height this auction ended at.
     * @return $this
     */
    public function setEndedAt(?string $ended_at) {
        $this->_data['ended_at'] = $ended_at;

        return $this;
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
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        $this->_data['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Get ending_price
     *
     * @return string|null
     */
    public function getEndingPrice(): ?string {
        return $this->_data["ending_price"];
    }

    /**
     * Set ending_price
     * 
     * @param string|null $ending_price Final auction price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @return $this
     */
    public function setEndingPrice(?string $ending_price) {
        $this->_data['ending_price'] = $ending_price;

        return $this;
    }

    /**
     * Get seller
     *
     * @return string|null
     */
    public function getSeller(): ?string {
        return $this->_data["seller"];
    }

    /**
     * Set seller
     * 
     * @param string|null $seller Address of the seller.
     * @return $this
     */
    public function setSeller(?string $seller) {
        $this->_data['seller'] = $seller;

        return $this;
    }

    /**
     * Get highest_bid
     *
     * @return string|null
     */
    public function getHighestBid(): ?string {
        return $this->_data["highest_bid"];
    }

    /**
     * Set highest_bid
     * 
     * @param string|null $highest_bid Current highest bid of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @return $this
     */
    public function setHighestBid(?string $highest_bid) {
        $this->_data['highest_bid'] = $highest_bid;

        return $this;
    }
}
