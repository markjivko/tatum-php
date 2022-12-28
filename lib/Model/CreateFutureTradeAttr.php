<?php

/**
 * CreateFutureTrade_attr Model
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
 * CreateFutureTrade_attr Model
 * 
 * @description Additional attributes for the future type.
 */
class CreateFutureTradeAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateFutureTrade_attr";
    protected static $_definition = [
        "seal_date" => ["sealDate", "float", null, "getSealDate", "setSealDate", null], 
        "percent_block" => ["percentBlock", "mixed", null, "getPercentBlock", "setPercentBlock", null], 
        "percent_penalty" => ["percentPenalty", "mixed", null, "getPercentPenalty", "setPercentPenalty", null]
    ];

    /**
     * CreateFutureTradeAttr
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
        if (is_null($this->_data['seal_date'])) {
            $ip[] = "'seal_date' can't be null";
        }
        if (($this->_data['seal_date'] < 0)) {
            $ip[] = "'seal_date' must be >= 0";
        }
        if (!is_null($this->_data['percent_block']) && ($this->_data['percent_block'] > 100)) {
            $ip[] = "'percent_block' must be <= 100";
        }
        if (!is_null($this->_data['percent_block']) && ($this->_data['percent_block'] < 0)) {
            $ip[] = "'percent_block' must be >= 0";
        }
        if (!is_null($this->_data['percent_penalty']) && ($this->_data['percent_penalty'] > 100)) {
            $ip[] = "'percent_penalty' must be <= 100";
        }
        if (!is_null($this->_data['percent_penalty']) && ($this->_data['percent_penalty'] < 0)) {
            $ip[] = "'percent_penalty' must be >= 0";
        }
        return $ip;
    }


    /**
     * Get seal_date
     *
     * @return float
     */
    public function getSealDate(): float {
        return $this->_data["seal_date"];
    }

    /**
     * Set seal_date
     * 
     * @param float $seal_date Time in UTC when the future will be filled.
     * @return $this
     */
    public function setSealDate(float $seal_date) {
        if (($seal_date < 0)) {
            throw new IAE('CreateFutureTradeAttr.setSealDate: $seal_date must be >=0');
        }
        $this->_data['seal_date'] = $seal_date;

        return $this;
    }

    /**
     * Get percent_block
     *
     * @return mixed|null
     */
    public function getPercentBlock(): ?mixed {
        return $this->_data["percent_block"];
    }

    /**
     * Set percent_block
     * 
     * @param mixed|null $percent_block Percentage of the future amount which selling or buying account must have available on future creation. This amount will be blocked till future is filled or expires.
     * @return $this
     */
    public function setPercentBlock(?mixed $percent_block) {
        if (!is_null($percent_block) && ($percent_block > 100)) {
            throw new IAE('CreateFutureTradeAttr.setPercentBlock: $percent_block must be <=100');
        }
        if (!is_null($percent_block) && ($percent_block < 0)) {
            throw new IAE('CreateFutureTradeAttr.setPercentBlock: $percent_block must be >=0');
        }
        $this->_data['percent_block'] = $percent_block;

        return $this;
    }

    /**
     * Get percent_penalty
     *
     * @return mixed|null
     */
    public function getPercentPenalty(): ?mixed {
        return $this->_data["percent_penalty"];
    }

    /**
     * Set percent_penalty
     * 
     * @param mixed|null $percent_penalty If one of the parties dont have filled full amount of the future at the time of expiration, the party will be penalized. Penalty is sent to opposite party in exchanged crypto.
     * @return $this
     */
    public function setPercentPenalty(?mixed $percent_penalty) {
        if (!is_null($percent_penalty) && ($percent_penalty > 100)) {
            throw new IAE('CreateFutureTradeAttr.setPercentPenalty: $percent_penalty must be <=100');
        }
        if (!is_null($percent_penalty) && ($percent_penalty < 0)) {
            throw new IAE('CreateFutureTradeAttr.setPercentPenalty: $percent_penalty must be >=0');
        }
        $this->_data['percent_penalty'] = $percent_penalty;

        return $this;
    }
}
