<?php

/**
 * BtcBlockHash Model
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
 * BtcBlockHash Model
 */
class BtcBlockHash extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcBlockHash";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"]
    ];

    /**
     * BtcBlockHash
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null] as $k => $v) {
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
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Block hash
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }
}
