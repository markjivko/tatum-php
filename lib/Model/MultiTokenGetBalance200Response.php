<?php

/**
 * MultiTokenGetBalance_200_response Model
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
 * MultiTokenGetBalance_200_response Model
 */
class MultiTokenGetBalance200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MultiTokenGetBalance_200_response";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0]]
    ];

    /**
     * MultiTokenGetBalance200Response
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
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data The amount of the specified Multi Token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
    }
}
