<?php

/**
 * PrivKey Model
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
 * PrivKey Model
 */
class PrivKey extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "PrivKey";
    protected static $_definition = [
        "key" => ["key", "string", null, "getKey", "setKey"]
    ];

    /**
     * PrivKey
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["key"=>null] as $k => $v) {
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
     * Get key
     *
     * @return string|null
     */
    public function getKey(): ?string {
        return $this->_data["key"];
    }

    /**
     * Set key
     * 
     * @param string|null $key Generated private key.
     * @return $this
     */
    public function setKey(?string $key) {
        $this->_data['key'] = $key;

        return $this;
    }
}
