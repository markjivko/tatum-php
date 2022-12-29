<?php

/**
 * OffchainAddresses Model
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
 * OffchainAddresses Model
 */
class OffchainAddresses extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "OffchainAddresses";
    protected static $_definition = [
        "addresses" => ["addresses", "\Tatum\Model\OffchainAddressesAddressesInner[]", null, "getAddresses", "setAddresses", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * OffchainAddresses
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get addresses
     *
     * @return \Tatum\Model\OffchainAddressesAddressesInner[]
     */
    public function getAddresses(): array {
        return $this->_data["addresses"];
    }

    /**
     * Set addresses
     * 
     * @param \Tatum\Model\OffchainAddressesAddressesInner[] $addresses addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddresses(array $addresses) {
        return $this->_set("addresses", $addresses);
    }
}
