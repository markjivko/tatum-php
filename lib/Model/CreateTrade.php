<?php

/**
 * CreateTrade Model
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
 * CreateTrade Model
 */
class CreateTrade extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TYPE_BUY = 'BUY';
    public const TYPE_SELL = 'SELL';
    public const TYPE_FUTURE_BUY = 'FUTURE_BUY';
    public const TYPE_FUTURE_SELL = 'FUTURE_SELL';
    protected static $_name = "CreateTrade";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "price" => ["price", "string", null, "getPrice", "setPrice"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "pair" => ["pair", "string", null, "getPair", "setPair"], 
        "currency1_account_id" => ["currency1AccountId", "string", null, "getCurrency1AccountId", "setCurrency1AccountId"], 
        "currency2_account_id" => ["currency2AccountId", "string", null, "getCurrency2AccountId", "setCurrency2AccountId"], 
        "fee_account_id" => ["feeAccountId", "string", null, "getFeeAccountId", "setFeeAccountId"], 
        "fee" => ["fee", "float", null, "getFee", "setFee"], 
        "attr" => ["attr", "\Tatum\Model\CreateTradeAttr", null, "getAttr", "setAttr"]
    ];

    /**
     * CreateTrade
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "price"=>null, "amount"=>null, "pair"=>null, "currency1_account_id"=>null, "currency2_account_id"=>null, "fee_account_id"=>null, "fee"=>null, "attr"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['price'])) {
            $ip[] = "'price' can't be null";
        }
        if ((mb_strlen($this->_data['price']) > 38)) {
            $ip[] = "'price' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['price'])) {
            $ip[] = "'price' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['pair'])) {
            $ip[] = "'pair' can't be null";
        }
        if ((mb_strlen($this->_data['pair']) > 30)) {
            $ip[] = "'pair' length must be <= 30";
        }
        if ((mb_strlen($this->_data['pair']) < 3)) {
            $ip[] = "'pair' length must be >= 3";
        }
        if (!preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $this->_data['pair'])) {
            $ip[] = "'pair' must match /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/";
        }
        if (is_null($this->_data['currency1_account_id'])) {
            $ip[] = "'currency1_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['currency1_account_id']) > 24)) {
            $ip[] = "'currency1_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['currency1_account_id']) < 24)) {
            $ip[] = "'currency1_account_id' length must be >= 24";
        }
        if (is_null($this->_data['currency2_account_id'])) {
            $ip[] = "'currency2_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['currency2_account_id']) > 24)) {
            $ip[] = "'currency2_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['currency2_account_id']) < 24)) {
            $ip[] = "'currency2_account_id' length must be >= 24";
        }
        if (!is_null($this->_data['fee_account_id']) && (mb_strlen($this->_data['fee_account_id']) > 24)) {
            $ip[] = "'fee_account_id' length must be <= 24";
        }
        if (!is_null($this->_data['fee_account_id']) && (mb_strlen($this->_data['fee_account_id']) < 24)) {
            $ip[] = "'fee_account_id' length must be >= 24";
        }
        if (!is_null($this->_data['fee']) && ($this->_data['fee'] > 100)) {
            $ip[] = "'fee' must be <= 100";
        }
        if (!is_null($this->_data['fee']) && ($this->_data['fee'] < 0)) {
            $ip[] = "'fee' must be >= 0";
        }
        if (is_null($this->_data['attr'])) {
            $ip[] = "'attr' can't be null";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_BUY,
            self::TYPE_SELL,
            self::TYPE_FUTURE_BUY,
            self::TYPE_FUTURE_SELL,
        ];
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of the trade, BUY, SELL, FUTURE_BUY, FUTURE_SELL
     * @return $this
     */
    public function setType(string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed, true)) {
            throw new IAE(sprintf("CreateTrade.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice(): string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string $price Price to buy / sell
     * @return $this
     */
    public function setPrice(string $price) {
        if ((mb_strlen($price) > 38)) {
            throw new IAE('CreateTrade.setPrice: $price length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $price))) {
            throw new IAE('CreateTrade.setPrice: $price must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($price, true) . ' given');
        }
        $this->_data['price'] = $price;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount of the trade to be bought / sold
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('CreateTrade.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('CreateTrade.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get pair
     *
     * @return string
     */
    public function getPair(): string {
        return $this->_data["pair"];
    }

    /**
     * Set pair
     * 
     * @param string $pair Trading pair
     * @return $this
     */
    public function setPair(string $pair) {
        if ((mb_strlen($pair) > 30)) {
            throw new IAE('CreateTrade.setPair: $pair length must be <= 30');
        }
        if ((mb_strlen($pair) < 3)) {
            throw new IAE('CreateTrade.setPair: $pair length must be >= 3');
        }
        if ((!preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair))) {
            throw new IAE('CreateTrade.setPair: $pair must match /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/, ' . var_export($pair, true) . ' given');
        }
        $this->_data['pair'] = $pair;

        return $this;
    }

    /**
     * Get currency1_account_id
     *
     * @return string
     */
    public function getCurrency1AccountId(): string {
        return $this->_data["currency1_account_id"];
    }

    /**
     * Set currency1_account_id
     * 
     * @param string $currency1_account_id ID of the account of the currency 1 trade currency
     * @return $this
     */
    public function setCurrency1AccountId(string $currency1_account_id) {
        if ((mb_strlen($currency1_account_id) > 24)) {
            throw new IAE('CreateTrade.setCurrency1AccountId: $currency1_account_id length must be <= 24');
        }
        if ((mb_strlen($currency1_account_id) < 24)) {
            throw new IAE('CreateTrade.setCurrency1AccountId: $currency1_account_id length must be >= 24');
        }
        $this->_data['currency1_account_id'] = $currency1_account_id;

        return $this;
    }

    /**
     * Get currency2_account_id
     *
     * @return string
     */
    public function getCurrency2AccountId(): string {
        return $this->_data["currency2_account_id"];
    }

    /**
     * Set currency2_account_id
     * 
     * @param string $currency2_account_id ID of the account of the currency 2 trade currency
     * @return $this
     */
    public function setCurrency2AccountId(string $currency2_account_id) {
        if ((mb_strlen($currency2_account_id) > 24)) {
            throw new IAE('CreateTrade.setCurrency2AccountId: $currency2_account_id length must be <= 24');
        }
        if ((mb_strlen($currency2_account_id) < 24)) {
            throw new IAE('CreateTrade.setCurrency2AccountId: $currency2_account_id length must be >= 24');
        }
        $this->_data['currency2_account_id'] = $currency2_account_id;

        return $this;
    }

    /**
     * Get fee_account_id
     *
     * @return string|null
     */
    public function getFeeAccountId(): ?string {
        return $this->_data["fee_account_id"];
    }

    /**
     * Set fee_account_id
     * 
     * @param string|null $fee_account_id ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId.
     * @return $this
     */
    public function setFeeAccountId(?string $fee_account_id) {
        if (!is_null($fee_account_id) && (mb_strlen($fee_account_id) > 24)) {
            throw new IAE('CreateTrade.setFeeAccountId: $fee_account_id length must be <= 24');
        }
        if (!is_null($fee_account_id) && (mb_strlen($fee_account_id) < 24)) {
            throw new IAE('CreateTrade.setFeeAccountId: $fee_account_id length must be >= 24');
        }
        $this->_data['fee_account_id'] = $fee_account_id;

        return $this;
    }

    /**
     * Get fee
     *
     * @return float|null
     */
    public function getFee(): ?float {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param float|null $fee Percentage of the trade amount to be paid as a fee.
     * @return $this
     */
    public function setFee(?float $fee) {
        if (!is_null($fee) && ($fee > 100)) {
            throw new IAE('CreateTrade.setFee: $fee must be <=100');
        }
        if (!is_null($fee) && ($fee < 0)) {
            throw new IAE('CreateTrade.setFee: $fee must be >=0');
        }
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateTradeAttr
     */
    public function getAttr(): \Tatum\Model\CreateTradeAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateTradeAttr $attr attr
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateTradeAttr $attr) {
        $this->_data['attr'] = $attr;

        return $this;
    }
}
