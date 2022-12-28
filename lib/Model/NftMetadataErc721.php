<?php

/**
 * NftMetadataErc721 Model
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
 * NftMetadataErc721 Model
 */
class NftMetadataErc721 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftMetadataErc721";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null]
    ];

    /**
     * NftMetadataErc721
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
        return $ip;
    }


    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Metadata associated with token.
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
