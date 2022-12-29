<?php

/**
 * NftGetBalanceErc721_200_response Model
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

/**
 * NftGetBalanceErc721_200_response Model
 */
class NftGetBalanceErc721200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftGetBalanceErc721_200_response";
    protected static $_definition = [
        "data" => ["data", "string[]", 'uint256', "getData", "setData", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * NftGetBalanceErc721200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get data
     *
     * @return string[]|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string[]|null $data The array returning the ID of the NFTs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?array $data) {
        return $this->_set("data", $data);
    }
}
