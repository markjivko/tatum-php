<?php

/**
 * CreateSubscriptionInterval_attr Model
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
 * CreateSubscriptionInterval_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionIntervalAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateSubscriptionInterval_attr";
    protected static $_definition = [
        "interval" => ["interval", "float", null, "getInterval", "setInterval", null, ["r" => 1, "n" => [1], "x" => [720]]]
    ];

    /**
     * CreateSubscriptionIntervalAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get interval
     *
     * @return float
     */
    public function getInterval(): float {
        return $this->_data["interval"];
    }

    /**
     * Set interval
     * 
     * @param float $interval Number of hours to obtain transactions for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInterval(float $interval) {
        return $this->_set("interval", $interval);
    }
}
