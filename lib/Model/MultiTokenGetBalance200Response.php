<?php

/**
 * MultiTokenGetBalance_200_response Model
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
 * MultiTokenGetBalance_200_response Model
 */
class MultiTokenGetBalance200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MultiTokenGetBalance_200_response";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData"]
    ];

    /**
     * MultiTokenGetBalance200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["data"=>null] as $k => $v) {
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
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
