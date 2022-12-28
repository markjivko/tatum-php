<?php

/**
 * NftGetBalanceScAlgo Model
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
 * NftGetBalanceScAlgo Model
 */
class NftGetBalanceScAlgo extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftGetBalanceScAlgo";
    protected static $_definition = [
        "data" => ["data", "\Tatum\Model\NftGetBalanceScAlgoDataInner[]", null, "getData", "setData", null]
    ];

    /**
     * NftGetBalanceScAlgo
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
     * @return \Tatum\Model\NftGetBalanceScAlgoDataInner[]|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\NftGetBalanceScAlgoDataInner[]|null $data data
     * @return $this
     */
    public function setData(?array $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
