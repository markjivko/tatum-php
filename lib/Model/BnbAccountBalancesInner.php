<?php

/**
 * BnbAccount_balances_inner Model
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
 * BnbAccount_balances_inner Model
 */
class BnbAccountBalancesInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BnbAccount_balances_inner";
    protected static $_definition = [
        "free" => ["free", "string", null, "getFree", "setFree", null], 
        "frozen" => ["frozen", "string", null, "getFrozen", "setFrozen", null], 
        "locked" => ["locked", "string", null, "getLocked", "setLocked", null], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol", null]
    ];

    /**
     * BnbAccountBalancesInner
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
     * Get free
     *
     * @return string|null
     */
    public function getFree(): ?string {
        return $this->_data["free"];
    }

    /**
     * Set free
     * 
     * @param string|null $free free
     * @return $this
     */
    public function setFree(?string $free) {
        $this->_data['free'] = $free;

        return $this;
    }

    /**
     * Get frozen
     *
     * @return string|null
     */
    public function getFrozen(): ?string {
        return $this->_data["frozen"];
    }

    /**
     * Set frozen
     * 
     * @param string|null $frozen frozen
     * @return $this
     */
    public function setFrozen(?string $frozen) {
        $this->_data['frozen'] = $frozen;

        return $this;
    }

    /**
     * Get locked
     *
     * @return string|null
     */
    public function getLocked(): ?string {
        return $this->_data["locked"];
    }

    /**
     * Set locked
     * 
     * @param string|null $locked locked
     * @return $this
     */
    public function setLocked(?string $locked) {
        $this->_data['locked'] = $locked;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string|null
     */
    public function getSymbol(): ?string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string|null $symbol symbol
     * @return $this
     */
    public function setSymbol(?string $symbol) {
        $this->_data['symbol'] = $symbol;

        return $this;
    }
}
