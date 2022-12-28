<?php

/**
 * MintMultipleNftKMS Model
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
 * MintMultipleNftKMS Model
 */
class MintMultipleNftKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KCS = 'KCS';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "MintMultipleNftKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "to" => ["to", "string[]", null, "getTo", "setTo", null], 
        "token_id" => ["tokenId", "string[]", 'uint256', "getTokenId", "setTokenId", null], 
        "url" => ["url", "string[]", null, "getUrl", "setUrl", null], 
        "author_addresses" => ["authorAddresses", "string[][]", null, "getAuthorAddresses", "setAuthorAddresses", null], 
        "cashback_values" => ["cashbackValues", "string[][]", null, "getCashbackValues", "setCashbackValues", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null]
    ];

    /**
     * MintMultipleNftKMS
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
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
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
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_KCS,
            self::CHAIN_ONE,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
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
            throw new IAE(sprintf("MintMultipleNftKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get to
     *
     * @return string[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string[] $to Blockchain address to send NFT token to.
     * @return $this
     */
    public function setTo(array $to) {
        $this->_data['to'] = $to;

        return $this;
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
     * @param string[] $token_id ID of token to be created.
     * @return $this
     */
    public function setTokenId(array $token_id) {
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get url
     *
     * @return string[]
     */
    public function getUrl(): array {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string[] $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @return $this
     */
    public function setUrl(array $url) {
        $this->_data['url'] = $url;

        return $this;
    }

    /**
     * Get author_addresses
     *
     * @return string[][]|null
     */
    public function getAuthorAddresses(): ?array {
        return $this->_data["author_addresses"];
    }

    /**
     * Set author_addresses
     * 
     * @param string[][]|null $author_addresses List of addresses for every token, where royalty cashback for every transfer of this NFT will be send. Royalties are paid in native blockchain currency, ETH or BSC.
     * @return $this
     */
    public function setAuthorAddresses(?array $author_addresses) {
        $this->_data['author_addresses'] = $author_addresses;

        return $this;
    }

    /**
     * Get cashback_values
     *
     * @return string[][]|null
     */
    public function getCashbackValues(): ?array {
        return $this->_data["cashback_values"];
    }

    /**
     * Set cashback_values
     * 
     * @param string[][]|null $cashback_values List of values for every token, which will be paid as a royalty for author of the NFT token with every token transfer. This is exact value in native blockchain currency.
     * @return $this
     */
    public function setCashbackValues(?array $cashback_values) {
        $this->_data['cashback_values'] = $cashback_values;

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
     * @param string $contract_address Address of NFT token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('MintMultipleNftKMS.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('MintMultipleNftKMS.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

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
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('MintMultipleNftKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
            throw new IAE('MintMultipleNftKMS.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
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
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
