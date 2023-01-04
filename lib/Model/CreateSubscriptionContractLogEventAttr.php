<?php

/**
 * CreateSubscriptionContractLogEvent_attr Model
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
 * CreateSubscriptionContractLogEvent_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionContractLogEventAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "CreateSubscriptionContractLogEvent_attr";
    protected static $_definition = [
        "event" => ["event", "string", null, "getEvent", "setEvent", null, ["r" => 1, "nl" => 66, "xl" => 66]], 
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 500]]
    ];

    /**
     * CreateSubscriptionContractLogEventAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_CELO,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
        ];
    }

    /**
     * Get event
     *
     * @return string
     */
    public function getEvent(): string {
        return $this->_data["event"];
    }

    /**
     * Set event
     * 
     * @param string $event Hexadecimal data representing the event emitted from the smart contract; represents \"topic[0]\" from the event log.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEvent(string $event) {
        return $this->_set("event", $event);
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain on which events should be monitored.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url The URL of the endpoint where an HTTP POST request will be sent when the block where the events from the smart contracts are reflected gets completed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }
}
