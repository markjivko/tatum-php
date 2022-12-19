<?php

/**
 * CreateAccountBatch Model
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
 * CreateAccountBatch Model
 */
class CreateAccountBatch extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateAccountBatch";
    protected static $_definition = [
        "accounts" => ["accounts", "\Tatum\Model\CreateAccount[]", null, "getAccounts", "setAccounts"]
    ];

    /**
     * CreateAccountBatch
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["accounts"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['accounts'])) {
            $ip[] = "'accounts' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get accounts
     *
     * @return \Tatum\Model\CreateAccount[]
     */
    public function getAccounts(): array {
        return $this->_data["accounts"];
    }

    /**
     * Set accounts
     * 
     * @param \Tatum\Model\CreateAccount[] $accounts accounts
     * @return $this
     */
    public function setAccounts(array $accounts) {
        $this->_data['accounts'] = $accounts;

        return $this;
    }
}
