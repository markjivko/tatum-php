<?php

/**
 * MintNftKMS Model
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
 * MintNftKMS Model
 * 
 * @description &lt;p&gt;The &lt;code&gt;MintNftKMS&lt;/code&gt; schema lets you mint NFTs natively on BNB Smart Chain, Ethereum, Harmony, Klaytn, KuCoin Community Chain, and Polygon and sign the transaction with your signature ID.&lt;br/&gt;For more information, see \&quot;Minting NFTs natively on a blockchain\&quot; in &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;Mint an NFT&lt;/a&gt;.&lt;/p&gt;&lt;br/&gt;
 */
class MintNftKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_KCS = 'KCS';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ONE = 'ONE';
    protected static $_name = "MintNftKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "to" => ["to", "string", null, "getTo", "setTo", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null], 
        "erc20" => ["erc20", "string", null, "getErc20", "setErc20", null], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance", null], 
        "author_addresses" => ["authorAddresses", "string[]", null, "getAuthorAddresses", "setAuthorAddresses", null], 
        "cashback_values" => ["cashbackValues", "string[]", null, "getCashbackValues", "setCashbackValues", null], 
        "fixed_values" => ["fixedValues", "string[]", null, "getFixedValues", "setFixedValues", null], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null]
    ];

    /**
     * MintNftKMS
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
        if ((mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
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
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['erc20']) && (mb_strlen($this->_data['erc20']) > 42)) {
            $ip[] = "'erc20' length must be <= 42";
        }
        if (!is_null($this->_data['erc20']) && (mb_strlen($this->_data['erc20']) < 42)) {
            $ip[] = "'erc20' length must be >= 42";
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
            self::CHAIN_BSC,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_KCS,
            self::CHAIN_MATIC,
            self::CHAIN_ONE,
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
            throw new IAE(sprintf("MintNftKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
        if ((mb_strlen($to) > 42)) {
            throw new IAE('MintNftKMS.setTo: $to length must be <= 42');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('MintNftKMS.setTo: $to length must be >= 42');
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
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('MintNftKMS.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('MintNftKMS.setContractAddress: $contract_address length must be >= 42');
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
            throw new IAE('MintNftKMS.setTokenId: $token_id length must be <= 78');
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
            throw new IAE('MintNftKMS.setUrl: $url length must be <= 256');
        }
        $this->_data['url'] = $url;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that will pay the fee for the transaction
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
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the address to pay the transaction fee that was generated from the mnemonic
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('MintNftKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get erc20
     *
     * @return string|null
     */
    public function getErc20(): ?string {
        return $this->_data["erc20"];
    }

    /**
     * Set erc20
     * 
     * @param string|null $erc20 The blockchain address of the custom fungible token
     * @return $this
     */
    public function setErc20(?string $erc20) {
        if (!is_null($erc20) && (mb_strlen($erc20) > 42)) {
            throw new IAE('MintNftKMS.setErc20: $erc20 length must be <= 42');
        }
        if (!is_null($erc20) && (mb_strlen($erc20) < 42)) {
            throw new IAE('MintNftKMS.setErc20: $erc20 length must be >= 42');
        }
        $this->_data['erc20'] = $erc20;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance Set to \"true\" if the NFT smart contract is of the <a href=\"#operation/NftDeployErc721\">provenance type</a>; otherwise, set to \"false\".
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        $this->_data['provenance'] = $provenance;

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
     * @param string[]|null $author_addresses The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in a native blockchain currency such as ETH on Ethereum, MATIC on Polygon, and so on
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
     * @param string[]|null $cashback_values The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for <a href=\"#operation/NftDeployErc721\">cashback smart contracts</a> or as a percentage of the NFT price for <a href=\"#operation/NftDeployErc721\">provenance smart contracts</a>
     * @return $this
     */
    public function setCashbackValues(?array $cashback_values) {
        $this->_data['cashback_values'] = $cashback_values;

        return $this;
    }

    /**
     * Get fixed_values
     *
     * @return string[]|null
     */
    public function getFixedValues(): ?array {
        return $this->_data["fixed_values"];
    }

    /**
     * Set fixed_values
     * 
     * @param string[]|null $fixed_values The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties
     * @return $this
     */
    public function setFixedValues(?array $fixed_values) {
        $this->_data['fixed_values'] = $fixed_values;

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
            throw new IAE('MintNftKMS.setNonce: $nonce must be >=0');
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
