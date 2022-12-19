<?php

/**
 * NftGetBalanceScAlgo_data_inner_metadata_inner Model
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
 * NftGetBalanceScAlgo_data_inner_metadata_inner Model
 */
class NftGetBalanceScAlgoDataInnerMetadataInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftGetBalanceScAlgo_data_inner_metadata_inner";
    protected static $_definition = [
        "url" => ["url", "string", null, "getUrl", "setUrl"]
    ];

    /**
     * NftGetBalanceScAlgoDataInnerMetadataInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["url"=>null] as $k => $v) {
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
     * @param string|null $url The URL pointing to the NFT metadata; may not be present
     * @return $this
     */
    public function setUrl(?string $url) {
        $this->_data['url'] = $url;

        return $this;
    }
}
