<?php

/**
 * XlmAccount_flags Model
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
 * XlmAccount_flags Model
 * 
 * @description Flags denote the enabling/disabling of certain asset issuer privileges.
 */
class XlmAccountFlags extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XlmAccount_flags";
    protected static $_definition = [
        "auth_required" => ["auth_required", "bool", null, "getAuthRequired", "setAuthRequired", null], 
        "auth_revocable" => ["auth_revocable", "bool", null, "getAuthRevocable", "setAuthRevocable", null], 
        "auth_immutable" => ["auth_immutable", "bool", null, "getAuthImmutable", "setAuthImmutable", null]
    ];

    /**
     * XlmAccountFlags
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
     * Get auth_required
     *
     * @return bool|null
     */
    public function getAuthRequired(): ?bool {
        return $this->_data["auth_required"];
    }

    /**
     * Set auth_required
     * 
     * @param bool|null $auth_required If set to true, anyone who wants to hold an asset issued by this account must first be approved by this account.
     * @return $this
     */
    public function setAuthRequired(?bool $auth_required) {
        $this->_data['auth_required'] = $auth_required;

        return $this;
    }

    /**
     * Get auth_revocable
     *
     * @return bool|null
     */
    public function getAuthRevocable(): ?bool {
        return $this->_data["auth_revocable"];
    }

    /**
     * Set auth_revocable
     * 
     * @param bool|null $auth_revocable If set to true, this account can freeze the balance of a holder of an asset issued by this account.
     * @return $this
     */
    public function setAuthRevocable(?bool $auth_revocable) {
        $this->_data['auth_revocable'] = $auth_revocable;

        return $this;
    }

    /**
     * Get auth_immutable
     *
     * @return bool|null
     */
    public function getAuthImmutable(): ?bool {
        return $this->_data["auth_immutable"];
    }

    /**
     * Set auth_immutable
     * 
     * @param bool|null $auth_immutable If set to true, none of the following flags can be changed.
     * @return $this
     */
    public function setAuthImmutable(?bool $auth_immutable) {
        $this->_data['auth_immutable'] = $auth_immutable;

        return $this;
    }
}
