<?php

/**
 * MintNftSolana Model
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
 * MintNftSolana Model
 * 
 * @description &lt;p&gt;The &lt;code&gt;MintNftSolana&lt;/code&gt; schema lets you mint NFTs natively on Solana and sign the transaction with your private key.&lt;br/&gt;For more information, see \&quot;Minting NFTs natively on a blockchain\&quot; in &lt;a href&#x3D;\&quot;#operation/NftMintErc721\&quot;&gt;Mint an NFT&lt;/a&gt;.&lt;/p&gt;&lt;br/&gt;
 */
class MintNftSolana extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "MintNftSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "collection_verifier_private_key" => ["collectionVerifierPrivateKey", "string", null, "getCollectionVerifierPrivateKey", "setCollectionVerifierPrivateKey"], 
        "metadata" => ["metadata", "\Tatum\Model\SolanaNftMetadata", null, "getMetadata", "setMetadata"]
    ];

    /**
     * MintNftSolana
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "to"=>null, "from"=>null, "from_private_key"=>null, "collection_verifier_private_key"=>null, "metadata"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
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
        if ((mb_strlen($this->_data['to']) > 44)) {
            $ip[] = "'to' length must be <= 44";
        }
        if ((mb_strlen($this->_data['to']) < 43)) {
            $ip[] = "'to' length must be >= 43";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 43)) {
            $ip[] = "'from' length must be >= 43";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 128)) {
            $ip[] = "'from_private_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (!is_null($this->_data['collection_verifier_private_key']) && (mb_strlen($this->_data['collection_verifier_private_key']) > 128)) {
            $ip[] = "'collection_verifier_private_key' length must be <= 128";
        }
        if (!is_null($this->_data['collection_verifier_private_key']) && (mb_strlen($this->_data['collection_verifier_private_key']) < 64)) {
            $ip[] = "'collection_verifier_private_key' length must be >= 64";
        }
        if (is_null($this->_data['metadata'])) {
            $ip[] = "'metadata' can't be null";
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("MintNftSolana.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
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
        if ((mb_strlen($to) > 44)) {
            throw new IAE('MintNftSolana.setTo: $to length must be <= 44');
        }
        if ((mb_strlen($to) < 43)) {
            throw new IAE('MintNftSolana.setTo: $to length must be >= 43');
        }
        $this->_data['to'] = $to;

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
     * @param string $from The blockchain address that will pay the fee for the transaction
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('MintNftSolana.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 43)) {
            throw new IAE('MintNftSolana.setFrom: $from length must be >= 43');
        }
        $this->_data['from'] = $from;

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
        if ((mb_strlen($from_private_key) > 128)) {
            throw new IAE('MintNftSolana.setFromPrivateKey: $from_private_key length must be <= 128');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('MintNftSolana.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get collection_verifier_private_key
     *
     * @return string|null
     */
    public function getCollectionVerifierPrivateKey(): ?string {
        return $this->_data["collection_verifier_private_key"];
    }

    /**
     * Set collection_verifier_private_key
     * 
     * @param string|null $collection_verifier_private_key The private key of the collection verifier (owner) who will verify the NFT in the NFT collection where the NFT is minted in. The blockchain address of this collection is specified in the <code>collection</code> parameter in the <code>metadata</code> section of the request body. To know more about Solana collections and verification, refer to the <a href=\"https://docs.metaplex.com/programs/token-metadata/certified-collections\" target=\"_blank\">Solana user documentation</a>.
     * @return $this
     */
    public function setCollectionVerifierPrivateKey(?string $collection_verifier_private_key) {
        if (!is_null($collection_verifier_private_key) && (mb_strlen($collection_verifier_private_key) > 128)) {
            throw new IAE('MintNftSolana.setCollectionVerifierPrivateKey: $collection_verifier_private_key length must be <= 128');
        }
        if (!is_null($collection_verifier_private_key) && (mb_strlen($collection_verifier_private_key) < 64)) {
            throw new IAE('MintNftSolana.setCollectionVerifierPrivateKey: $collection_verifier_private_key length must be >= 64');
        }
        $this->_data['collection_verifier_private_key'] = $collection_verifier_private_key;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\SolanaNftMetadata
     */
    public function getMetadata(): \Tatum\Model\SolanaNftMetadata {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\SolanaNftMetadata $metadata metadata
     * @return $this
     */
    public function setMetadata(\Tatum\Model\SolanaNftMetadata $metadata) {
        $this->_data['metadata'] = $metadata;

        return $this;
    }
}
