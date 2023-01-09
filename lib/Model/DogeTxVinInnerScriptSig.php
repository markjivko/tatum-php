<?php

/**
 * DogeTx_vin_inner_scriptSig Model
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
 * DogeTx_vin_inner_scriptSig Model
 */
class DogeTxVinInnerScriptSig extends AbstractModel {

    public const _D = null;
    protected static $_name = "DogeTx_vin_inner_scriptSig";
    protected static $_definition = [
        "asm" => ["asm", "string", null, "getAsm", "setAsm", null, ["r" => 0]], 
        "hex" => ["hex", "string", null, "getHex", "setHex", null, ["r" => 0]]
    ];

    /**
     * DogeTxVinInnerScriptSig
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get asm
     *
     * @return string|null
     */
    public function getAsm(): ?string {
        return $this->_data["asm"];
    }

    /**
     * Set asm
     * 
     * @param string|null $asm asm
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAsm(?string $asm) {
        return $this->_set("asm", $asm);
    }

    /**
     * Get hex
     *
     * @return string|null
     */
    public function getHex(): ?string {
        return $this->_data["hex"];
    }

    /**
     * Set hex
     * 
     * @param string|null $hex hex
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHex(?string $hex) {
        return $this->_set("hex", $hex);
    }
}
