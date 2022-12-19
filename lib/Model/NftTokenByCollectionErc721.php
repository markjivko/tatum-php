<?php

/**
 * NftTokenByCollectionErc721 Model
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
 * NftTokenByCollectionErc721 Model
 */
class NftTokenByCollectionErc721 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftTokenByCollectionErc721";
    protected static $_definition = [
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId"], 
        "metadata" => ["metadata", "\Tatum\Model\NftTokenByCollectionErc721TokenMetadata", null, "getMetadata", "setMetadata"]
    ];

    /**
     * NftTokenByCollectionErc721
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["token_id"=>null, "metadata"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
        }
        
        return $ip;
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
     * @param string $token_id ID of the token.
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 78)) {
            throw new IAE('NftTokenByCollectionErc721.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\NftTokenByCollectionErc721TokenMetadata|null
     */
    public function getMetadata(): ?\Tatum\Model\NftTokenByCollectionErc721TokenMetadata {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\NftTokenByCollectionErc721TokenMetadata|null $metadata metadata
     * @return $this
     */
    public function setMetadata(?\Tatum\Model\NftTokenByCollectionErc721TokenMetadata $metadata) {
        $this->_data['metadata'] = $metadata;

        return $this;
    }
}
