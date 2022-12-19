<?php

/**
 * ListOderBookHistoryBody Model
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
 * ListOderBookHistoryBody Model
 */
class ListOderBookHistoryBody extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TYPES_FUTURE_BUY = 'FUTURE_BUY';
    public const TYPES_FUTURE_SELL = 'FUTURE_SELL';
    public const TYPES_BUY = 'BUY';
    public const TYPES_SELL = 'SELL';
    public const SORT_PRICE_ASC = 'PRICE_ASC';
    public const SORT_PRICE_DESC = 'PRICE_DESC';
    public const SORT_CREATED_ASC = 'CREATED_ASC';
    public const SORT_CREATED_DESC = 'CREATED_DESC';
    public const SORT_AMOUNT_ASC = 'AMOUNT_ASC';
    public const SORT_AMOUNT_DESC = 'AMOUNT_DESC';
    public const SORT_FILL_ASC = 'FILL_ASC';
    public const SORT_FILL_DESC = 'FILL_DESC';
    public const SORT_FEE_ASC = 'FEE_ASC';
    public const SORT_FEE_DESC = 'FEE_DESC';
    protected static $_name = "ListOderBookHistoryBody";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "customer_id" => ["customerId", "string", null, "getCustomerId", "setCustomerId"], 
        "page_size" => ["pageSize", "float", null, "getPageSize", "setPageSize"], 
        "offset" => ["offset", "float", null, "getOffset", "setOffset"], 
        "pair" => ["pair", "string", null, "getPair", "setPair"], 
        "count" => ["count", "bool", null, "getCount", "setCount"], 
        "types" => ["types", "string[]", null, "getTypes", "setTypes"], 
        "amount" => ["amount", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getAmount", "setAmount"], 
        "fill" => ["fill", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getFill", "setFill"], 
        "price" => ["price", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getPrice", "setPrice"], 
        "created" => ["created", "\Tatum\Model\TransactionFilterAmountInner[]", null, "getCreated", "setCreated"], 
        "sort" => ["sort", "string[]", null, "getSort", "setSort"]
    ];

    /**
     * ListOderBookHistoryBody
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "customer_id"=>null, "page_size"=>null, "offset"=>null, "pair"=>null, "count"=>null, "types"=>null, "amount"=>null, "fill"=>null, "price"=>null, "created"=>null, "sort"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['page_size'])) {
            $ip[] = "'page_size' can't be null";
        }
        if (($this->_data['page_size'] > 50)) {
            $ip[] = "'page_size' must be <= 50";
        }
        if (($this->_data['page_size'] < 1)) {
            $ip[] = "'page_size' must be >= 1";
        }
        if (!is_null($this->_data['pair']) && (mb_strlen($this->_data['pair']) > 30)) {
            $ip[] = "'pair' length must be <= 30";
        }
        if (!is_null($this->_data['pair']) && (mb_strlen($this->_data['pair']) < 3)) {
            $ip[] = "'pair' length must be >= 3";
        }
        if (!is_null($this->_data['pair']) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $this->_data['pair'])) {
            $ip[] = "'pair' must match /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypesAllowableValues(): array {
        return [
            self::TYPES_FUTURE_BUY,
            self::TYPES_FUTURE_SELL,
            self::TYPES_BUY,
            self::TYPES_SELL,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getSortAllowableValues(): array {
        return [
            self::SORT_PRICE_ASC,
            self::SORT_PRICE_DESC,
            self::SORT_CREATED_ASC,
            self::SORT_CREATED_DESC,
            self::SORT_AMOUNT_ASC,
            self::SORT_AMOUNT_DESC,
            self::SORT_FILL_ASC,
            self::SORT_FILL_DESC,
            self::SORT_FEE_ASC,
            self::SORT_FEE_DESC,
        ];
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id Account ID. If present, only closed trades for given account will be present.
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get customer_id
     *
     * @return string|null
     */
    public function getCustomerId(): ?string {
        return $this->_data["customer_id"];
    }

    /**
     * Set customer_id
     * 
     * @param string|null $customer_id Customer ID. If present, only closed trades for given customer will be present.
     * @return $this
     */
    public function setCustomerId(?string $customer_id) {
        $this->_data['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Get page_size
     *
     * @return float
     */
    public function getPageSize(): float {
        return $this->_data["page_size"];
    }

    /**
     * Set page_size
     * 
     * @param float $page_size Max number of items per page is 50.
     * @return $this
     */
    public function setPageSize(float $page_size) {
        if (($page_size > 50)) {
            throw new IAE('ListOderBookHistoryBody.setPageSize: $page_size must be <=50');
        }
        if (($page_size < 1)) {
            throw new IAE('ListOderBookHistoryBody.setPageSize: $page_size must be >=1');
        }
        $this->_data['page_size'] = $page_size;

        return $this;
    }

    /**
     * Get offset
     *
     * @return float|null
     */
    public function getOffset(): ?float {
        return $this->_data["offset"];
    }

    /**
     * Set offset
     * 
     * @param float|null $offset Offset to obtain next page of the data.
     * @return $this
     */
    public function setOffset(?float $offset) {
        $this->_data['offset'] = $offset;

        return $this;
    }

    /**
     * Get pair
     *
     * @return string|null
     */
    public function getPair(): ?string {
        return $this->_data["pair"];
    }

    /**
     * Set pair
     * 
     * @param string|null $pair Trade pair. If present, list historical trades for that pair.
     * @return $this
     */
    public function setPair(?string $pair) {
        if (!is_null($pair) && (mb_strlen($pair) > 30)) {
            throw new IAE('ListOderBookHistoryBody.setPair: $pair length must be <= 30');
        }
        if (!is_null($pair) && (mb_strlen($pair) < 3)) {
            throw new IAE('ListOderBookHistoryBody.setPair: $pair length must be >= 3');
        }
        if (!is_null($pair) && (!preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair))) {
            throw new IAE('ListOderBookHistoryBody.setPair: $pair must match /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/, ' . var_export($pair, true) . ' given');
        }
        $this->_data['pair'] = $pair;

        return $this;
    }

    /**
     * Get count
     *
     * @return bool|null
     */
    public function getCount(): ?bool {
        return $this->_data["count"];
    }

    /**
     * Set count
     * 
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @return $this
     */
    public function setCount(?bool $count) {
        $this->_data['count'] = $count;

        return $this;
    }

    /**
     * Get types
     *
     * @return string[]|null
     */
    public function getTypes(): ?array {
        return $this->_data["types"];
    }

    /**
     * Set types
     * 
     * @param string[]|null $types Trade types.
     * @return $this
     */
    public function setTypes(?array $types) {
        $allowed = $this->getTypesAllowableValues();
        if (!is_null($types) && array_diff($types, $allowed)) {
            throw new IAE(sprintf("ListOderBookHistoryBody.setTypes: types must be one of '%s'", implode("', '", $allowed)));
        }
        $this->_data['types'] = $types;

        return $this;
    }

    /**
     * Get amount
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getAmount(): ?array {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $amount Amount of the trade. AND is used between filter options.
     * @return $this
     */
    public function setAmount(?array $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get fill
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getFill(): ?array {
        return $this->_data["fill"];
    }

    /**
     * Set fill
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $fill Fill of the trade. AND is used between filter options.
     * @return $this
     */
    public function setFill(?array $fill) {
        $this->_data['fill'] = $fill;

        return $this;
    }

    /**
     * Get price
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getPrice(): ?array {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $price Price of the trade. AND is used between filter options.
     * @return $this
     */
    public function setPrice(?array $price) {
        $this->_data['price'] = $price;

        return $this;
    }

    /**
     * Get created
     *
     * @return \Tatum\Model\TransactionFilterAmountInner[]|null
     */
    public function getCreated(): ?array {
        return $this->_data["created"];
    }

    /**
     * Set created
     * 
     * @param \Tatum\Model\TransactionFilterAmountInner[]|null $created Created date of the trade. AND is used between filter options.
     * @return $this
     */
    public function setCreated(?array $created) {
        $this->_data['created'] = $created;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string[]|null
     */
    public function getSort(): ?array {
        return $this->_data["sort"];
    }

    /**
     * Set sort
     * 
     * @param string[]|null $sort Sorts the result by selected property. The priority of the items is determined by order of the sort properties in array.
     * @return $this
     */
    public function setSort(?array $sort) {
        $allowed = $this->getSortAllowableValues();
        if (!is_null($sort) && array_diff($sort, $allowed)) {
            throw new IAE(sprintf("ListOderBookHistoryBody.setSort: sort must be one of '%s'", implode("', '", $allowed)));
        }
        $this->_data['sort'] = $sort;

        return $this;
    }
}
