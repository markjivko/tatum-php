<?php

/**
 * Blockage Model
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
 * Blockage Model
 */
class Blockage extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Blockage";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 0]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0]], 
        "description" => ["description", "string", null, "getDescription", "setDescription", null, ["r" => 0]]
    ];

    /**
     * Blockage
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $id ID of the blockage.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get account_id
     *
     * @return string|null
     */
    public function getAccountId(): ?string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string|null $account_id ID of the account this blockage is for.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(?string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Amount blocked on account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of blockage.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(?string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string|null $description Description of blockage.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDescription(?string $description) {
        return $this->_set("description", $description);
    }
}
