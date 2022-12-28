<?php

/**
 * NftTokenByAddressErc721TokenMetadata Model
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
 * NftTokenByAddressErc721TokenMetadata Model
 */
class NftTokenByAddressErc721TokenMetadata extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftTokenByAddressErc721TokenMetadata";
    protected static $_definition = [
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null], 
        "metadata" => ["metadata", "object", null, "getMetadata", "setMetadata", null]
    ];

    /**
     * NftTokenByAddressErc721TokenMetadata
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
        if (!is_null($this->_data['token_id']) && (mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
        }
        return $ip;
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
     * @param string|null $token_id (EVM-based blockchains only) The ID of the NFT owned by this address
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        if (!is_null($token_id) && (mb_strlen($token_id) > 78)) {
            throw new IAE('NftTokenByAddressErc721TokenMetadata.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string|null $url The URL pointing to the NFT metadata; the URL may not be present, and if it is not returned, you can get it by calling the NFT Contract.tokenURI() method
     * @return $this
     */
    public function setUrl(?string $url) {
        $this->_data['url'] = $url;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return object|null
     */
    public function getMetadata(): ?object {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param object|null $metadata The metadata scheme obtained from the metadata URL; the scheme may not be present, and if it is not returned, you can get it using the <a href=\"#operation/NftGetMetadataErc721\">NFT metadata API</a>
     * @return $this
     */
    public function setMetadata(?object $metadata) {
        $this->_data['metadata'] = $metadata;

        return $this;
    }
}
