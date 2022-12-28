<?php

/**
 * MintNftTron Model
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
 * MintNftTron Model
 * 
 * @description &lt;p&gt;The &lt;code&gt;MintNftTron&lt;/code&gt; schema lets you mint NFTs natively on TRON and sign the transaction with your private key.&lt;br/&gt;For more information, see \&quot;Minting NFTs natively on a blockchain\&quot; in &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;Mint an NFT&lt;/a&gt;.&lt;/p&gt;&lt;br/&gt;
 */
class MintNftTron extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "MintNftTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null], 
        "author_addresses" => ["authorAddresses", "string[]", null, "getAuthorAddresses", "setAuthorAddresses", null], 
        "cashback_values" => ["cashbackValues", "string[]", null, "getCashbackValues", "setCashbackValues", null]
    ];

    /**
     * MintNftTron
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
        if ((mb_strlen($this->_data['to']) > 34)) {
            $ip[] = "'to' length must be <= 34";
        }
        if ((mb_strlen($this->_data['to']) < 34)) {
            $ip[] = "'to' length must be >= 34";
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
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if ((mb_strlen($this->_data['url']) > 256)) {
            $ip[] = "'url' length must be <= 256";
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("MintNftTron.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
     * @param string $to The blockchain address to send the NFT to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 34)) {
            throw new IAE('MintNftTron.setTo: $to length must be <= 34');
        }
        if ((mb_strlen($to) < 34)) {
            throw new IAE('MintNftTron.setTo: $to length must be >= 34');
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
     * @param string $contract_address The blockchain address of the smart contract to build the NFT on
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 34)) {
            throw new IAE('MintNftTron.setContractAddress: $contract_address length must be <= 34');
        }
        if ((mb_strlen($contract_address) < 34)) {
            throw new IAE('MintNftTron.setContractAddress: $contract_address length must be >= 34');
        }
        $this->_data['contract_address'] = $contract_address;

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
     * @param string $token_id The ID of the NFT
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 78)) {
            throw new IAE('MintNftTron.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @return $this
     */
    public function setUrl(string $url) {
        if ((mb_strlen($url) > 256)) {
            throw new IAE('MintNftTron.setUrl: $url length must be <= 256');
        }
        $this->_data['url'] = $url;

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
     * @param float $fee_limit The maximum amount to be paid as the transaction fee (in TRX)
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        $this->_data['fee_limit'] = $fee_limit;

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
     * @param string $from_private_key The private key of the blockchain address that will pay the fee for the transaction
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('MintNftTron.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('MintNftTron.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get author_addresses
     *
     * @return string[]|null
     */
    public function getAuthorAddresses(): ?array {
        return $this->_data["author_addresses"];
    }

    /**
     * Set author_addresses
     * 
     * @param string[]|null $author_addresses The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, TRX
     * @return $this
     */
    public function setAuthorAddresses(?array $author_addresses) {
        $this->_data['author_addresses'] = $author_addresses;

        return $this;
    }

    /**
     * Get cashback_values
     *
     * @return string[]|null
     */
    public function getCashbackValues(): ?array {
        return $this->_data["cashback_values"];
    }

    /**
     * Set cashback_values
     * 
     * @param string[]|null $cashback_values The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency
     * @return $this
     */
    public function setCashbackValues(?array $cashback_values) {
        $this->_data['cashback_values'] = $cashback_values;

        return $this;
    }
}
