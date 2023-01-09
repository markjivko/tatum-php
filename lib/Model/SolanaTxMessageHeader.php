<?php

/**
 * SolanaTxMessageHeader Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * SolanaTxMessageHeader Model
 */
class SolanaTxMessageHeader extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaTxMessageHeader";
    protected static $_definition = [
        "num_readonly_signed_accounts" => ["numReadonlySignedAccounts", "float", null, "getNumReadonlySignedAccounts", "setNumReadonlySignedAccounts", null, ["r" => 0]], 
        "num_readonly_unsigned_accounts" => ["numReadonlyUnsignedAccounts", "float", null, "getNumReadonlyUnsignedAccounts", "setNumReadonlyUnsignedAccounts", null, ["r" => 0]], 
        "num_required_signatures" => ["numRequiredSignatures", "float", null, "getNumRequiredSignatures", "setNumRequiredSignatures", null, ["r" => 0]]
    ];

    /**
     * SolanaTxMessageHeader
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get num_readonly_signed_accounts
     *
     * @return float|null
     */
    public function getNumReadonlySignedAccounts(): ?float {
        return $this->_data["num_readonly_signed_accounts"];
    }

    /**
     * Set num_readonly_signed_accounts
     * 
     * @param float|null $num_readonly_signed_accounts num_readonly_signed_accounts
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumReadonlySignedAccounts(?float $num_readonly_signed_accounts) {
        return $this->_set("num_readonly_signed_accounts", $num_readonly_signed_accounts);
    }

    /**
     * Get num_readonly_unsigned_accounts
     *
     * @return float|null
     */
    public function getNumReadonlyUnsignedAccounts(): ?float {
        return $this->_data["num_readonly_unsigned_accounts"];
    }

    /**
     * Set num_readonly_unsigned_accounts
     * 
     * @param float|null $num_readonly_unsigned_accounts num_readonly_unsigned_accounts
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumReadonlyUnsignedAccounts(?float $num_readonly_unsigned_accounts) {
        return $this->_set("num_readonly_unsigned_accounts", $num_readonly_unsigned_accounts);
    }

    /**
     * Get num_required_signatures
     *
     * @return float|null
     */
    public function getNumRequiredSignatures(): ?float {
        return $this->_data["num_required_signatures"];
    }

    /**
     * Set num_required_signatures
     * 
     * @param float|null $num_required_signatures num_required_signatures
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumRequiredSignatures(?float $num_required_signatures) {
        return $this->_set("num_required_signatures", $num_required_signatures);
    }
}
