<?php

/**
 * TronAccountTx_200_response Model
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
 * TronAccountTx_200_response Model
 */
class TronAccountTx200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronAccountTx_200_response";
    protected static $_definition = [
        "next" => ["next", "string", null, "getNext", "setNext", null, ["r" => 0]], 
        "transactions" => ["transactions", "\Tatum\Model\TronTx[]", null, "getTransactions", "setTransactions", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * TronAccountTx200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get next
     *
     * @return string|null
     */
    public function getNext(): ?string {
        return $this->_data["next"];
    }

    /**
     * Set next
     * 
     * @param string|null $next If present, there are more transactions for the TRON account than the 200 transactions returned in the response, and this parameter specifies the ID of the transaction that follows the last (200<sup>th</sup>) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNext(?string $next) {
        return $this->_set("next", $next);
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\TronTx[]
     */
    public function getTransactions(): array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\TronTx[] $transactions The list of transactions for the specified TRON account
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactions(array $transactions) {
        return $this->_set("transactions", $transactions);
    }
}
