<?php

/**
 * DeployErc20SignatureResponse Model
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
 * DeployErc20SignatureResponse Model
 */
class DeployErc20SignatureResponse extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "DeployErc20SignatureResponse";
    protected static $_definition = [
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * DeployErc20SignatureResponse
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Account ID with the type of currency as created ERC20/BEP20 token symbol. Account will be unfrozen when ERC20/BEP20 contract address will be set.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
