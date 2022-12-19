<?php

/**
 * XlmAccount Model
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
 * XlmAccount Model
 */
class XlmAccount extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XlmAccount";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "account_id" => ["account_id", "string", null, "getAccountId", "setAccountId"], 
        "sequence" => ["sequence", "string", null, "getSequence", "setSequence"], 
        "subentry_count" => ["subentry_count", "float", null, "getSubentryCount", "setSubentryCount"], 
        "last_modified_ledger" => ["last_modified_ledger", "float", null, "getLastModifiedLedger", "setLastModifiedLedger"], 
        "thresholds" => ["thresholds", "\Tatum\Model\XlmAccountThresholds", null, "getThresholds", "setThresholds"], 
        "flags" => ["flags", "\Tatum\Model\XlmAccountFlags", null, "getFlags", "setFlags"], 
        "balances" => ["balances", "\Tatum\Model\XlmAccountBalancesInner[]", null, "getBalances", "setBalances"], 
        "signers" => ["signers", "\Tatum\Model\XlmAccountSignersInner[]", null, "getSigners", "setSigners"], 
        "data" => ["data", "object", null, "getData", "setData"]
    ];

    /**
     * XlmAccount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "account_id"=>null, "sequence"=>null, "subentry_count"=>null, "last_modified_ledger"=>null, "thresholds"=>null, "flags"=>null, "balances"=>null, "signers"=>null, "data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
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
     * @param string|null $id A unique identifier for this account.
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
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
     * @param string|null $account_id This account’s public key encoded in a base32 string representation.
     * @return $this
     */
    public function setAccountId(?string $account_id) {
        $this->_data['account_id'] = $account_id;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return string|null
     */
    public function getSequence(): ?string {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param string|null $sequence This account’s current sequence number. For use when submitting this account’s next transaction.
     * @return $this
     */
    public function setSequence(?string $sequence) {
        $this->_data['sequence'] = $sequence;

        return $this;
    }

    /**
     * Get subentry_count
     *
     * @return float|null
     */
    public function getSubentryCount(): ?float {
        return $this->_data["subentry_count"];
    }

    /**
     * Set subentry_count
     * 
     * @param float|null $subentry_count The number of subentries on this account.
     * @return $this
     */
    public function setSubentryCount(?float $subentry_count) {
        $this->_data['subentry_count'] = $subentry_count;

        return $this;
    }

    /**
     * Get last_modified_ledger
     *
     * @return float|null
     */
    public function getLastModifiedLedger(): ?float {
        return $this->_data["last_modified_ledger"];
    }

    /**
     * Set last_modified_ledger
     * 
     * @param float|null $last_modified_ledger The ID of the last ledger that included changes to this account.
     * @return $this
     */
    public function setLastModifiedLedger(?float $last_modified_ledger) {
        $this->_data['last_modified_ledger'] = $last_modified_ledger;

        return $this;
    }

    /**
     * Get thresholds
     *
     * @return \Tatum\Model\XlmAccountThresholds|null
     */
    public function getThresholds(): ?\Tatum\Model\XlmAccountThresholds {
        return $this->_data["thresholds"];
    }

    /**
     * Set thresholds
     * 
     * @param \Tatum\Model\XlmAccountThresholds|null $thresholds thresholds
     * @return $this
     */
    public function setThresholds(?\Tatum\Model\XlmAccountThresholds $thresholds) {
        $this->_data['thresholds'] = $thresholds;

        return $this;
    }

    /**
     * Get flags
     *
     * @return \Tatum\Model\XlmAccountFlags|null
     */
    public function getFlags(): ?\Tatum\Model\XlmAccountFlags {
        return $this->_data["flags"];
    }

    /**
     * Set flags
     * 
     * @param \Tatum\Model\XlmAccountFlags|null $flags flags
     * @return $this
     */
    public function setFlags(?\Tatum\Model\XlmAccountFlags $flags) {
        $this->_data['flags'] = $flags;

        return $this;
    }

    /**
     * Get balances
     *
     * @return \Tatum\Model\XlmAccountBalancesInner[]|null
     */
    public function getBalances(): ?array {
        return $this->_data["balances"];
    }

    /**
     * Set balances
     * 
     * @param \Tatum\Model\XlmAccountBalancesInner[]|null $balances The assets this account holds.
     * @return $this
     */
    public function setBalances(?array $balances) {
        $this->_data['balances'] = $balances;

        return $this;
    }

    /**
     * Get signers
     *
     * @return \Tatum\Model\XlmAccountSignersInner[]|null
     */
    public function getSigners(): ?array {
        return $this->_data["signers"];
    }

    /**
     * Set signers
     * 
     * @param \Tatum\Model\XlmAccountSignersInner[]|null $signers The public keys and associated weights that can be used to authorize transactions for this account. Used for multi-sig.
     * @return $this
     */
    public function setSigners(?array $signers) {
        $this->_data['signers'] = $signers;

        return $this;
    }

    /**
     * Get data
     *
     * @return object|null
     */
    public function getData(): ?object {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param object|null $data An array of account data fields.
     * @return $this
     */
    public function setData(?object $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
