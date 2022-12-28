<?php

/**
 * VerifySolanaNFT Model
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
 * VerifySolanaNFT Model
 */
class VerifySolanaNFT extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "VerifySolanaNFT";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null], 
        "collection_address" => ["collectionAddress", "string", null, "getCollectionAddress", "setCollectionAddress", null], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null]
    ];

    /**
     * VerifySolanaNFT
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
        if (is_null($this->_data['nft_address'])) {
            $ip[] = "'nft_address' can't be null";
        }
        if ((mb_strlen($this->_data['nft_address']) > 44)) {
            $ip[] = "'nft_address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['nft_address']) < 43)) {
            $ip[] = "'nft_address' length must be >= 43";
        }
        if (is_null($this->_data['collection_address'])) {
            $ip[] = "'collection_address' can't be null";
        }
        if ((mb_strlen($this->_data['collection_address']) > 44)) {
            $ip[] = "'collection_address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['collection_address']) < 43)) {
            $ip[] = "'collection_address' length must be >= 43";
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
            throw new IAE(sprintf("VerifySolanaNFT.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $nft_address The blockchain address of the NFT to verify
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        if ((mb_strlen($nft_address) > 44)) {
            throw new IAE('VerifySolanaNFT.setNftAddress: $nft_address length must be <= 44');
        }
        if ((mb_strlen($nft_address) < 43)) {
            throw new IAE('VerifySolanaNFT.setNftAddress: $nft_address length must be >= 43');
        }
        $this->_data['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Get collection_address
     *
     * @return string
     */
    public function getCollectionAddress(): string {
        return $this->_data["collection_address"];
    }

    /**
     * Set collection_address
     * 
     * @param string $collection_address The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href=\"https://docs.metaplex.com/programs/token-metadata/changelog/v1.3\" target=\"_blank\">Version 1.3</a> of the Metaplex Token Metadata program.
     * @return $this
     */
    public function setCollectionAddress(string $collection_address) {
        if ((mb_strlen($collection_address) > 44)) {
            throw new IAE('VerifySolanaNFT.setCollectionAddress: $collection_address length must be <= 44');
        }
        if ((mb_strlen($collection_address) < 43)) {
            throw new IAE('VerifySolanaNFT.setCollectionAddress: $collection_address length must be >= 43');
        }
        $this->_data['collection_address'] = $collection_address;

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
     * @param string $from The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('VerifySolanaNFT.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 43)) {
            throw new IAE('VerifySolanaNFT.setFrom: $from length must be >= 43');
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
     * @param string $from_private_key The private key of the collection verifier's address
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 128)) {
            throw new IAE('VerifySolanaNFT.setFromPrivateKey: $from_private_key length must be <= 128');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('VerifySolanaNFT.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }
}
