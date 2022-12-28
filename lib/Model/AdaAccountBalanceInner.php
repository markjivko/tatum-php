<?php

/**
 * AdaAccountBalance_inner Model
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
 * AdaAccountBalance_inner Model
 */
class AdaAccountBalanceInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaAccountBalance_inner";
    protected static $_definition = [
        "currency" => ["currency", "\Tatum\Model\AdaAccountBalanceInnerCurrency", null, "getCurrency", "setCurrency", null], 
        "value" => ["value", "string", null, "getValue", "setValue", null]
    ];

    /**
     * AdaAccountBalanceInner
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
     * Get currency
     *
     * @return \Tatum\Model\AdaAccountBalanceInnerCurrency|null
     */
    public function getCurrency(): ?\Tatum\Model\AdaAccountBalanceInnerCurrency {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param \Tatum\Model\AdaAccountBalanceInnerCurrency|null $currency currency
     * @return $this
     */
    public function setCurrency(?\Tatum\Model\AdaAccountBalanceInnerCurrency $currency) {
        $this->_data['currency'] = $currency;

        return $this;
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Quantity of the asset.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}
