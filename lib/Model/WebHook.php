<?php

/**
 * WebHook Model
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
 * WebHook Model
 */
class WebHook extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TYPE_INCOMING_BLOCKCHAIN_HOOK = 'INCOMING_BLOCKCHAIN_HOOK';
    public const TYPE_ADDRESS_TRANSACTION = 'ADDRESS_TRANSACTION';
    public const TYPE_CONTRACT_LOG_EVENT = 'CONTRACT_LOG_EVENT';
    public const TYPE_TRADE_MATCH = 'TRADE_MATCH';
    public const TYPE_TRADE_PARTIAL_FILL = 'TRADE_PARTIAL_FILL';
    public const TYPE_PENDING_BLOCKCHAIN_HOOK = 'PENDING_BLOCKCHAIN_HOOK';
    public const TYPE_TRANSACTION_IN_THE_BLOCK = 'TRANSACTION_IN_THE_BLOCK';
    public const TYPE_KMS_FAILED_TX = 'KMS_FAILED_TX';
    public const TYPE_KMS_COMPLETED_TX = 'KMS_COMPLETED_TX';
    protected static $_name = "WebHook";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null], 
        "id" => ["id", "string", null, "getId", "setId", null], 
        "subscription_id" => ["subscriptionId", "string", null, "getSubscriptionId", "setSubscriptionId", null], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null], 
        "data" => ["data", "object", null, "getData", "setData", null], 
        "next_time" => ["nextTime", "float", null, "getNextTime", "setNextTime", null], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null], 
        "retry_count" => ["retryCount", "float", null, "getRetryCount", "setRetryCount", null], 
        "failed" => ["failed", "bool", null, "getFailed", "setFailed", null], 
        "response" => ["response", "\Tatum\Model\WebHookResponse", null, "getResponse", "setResponse", null]
    ];

    /**
     * WebHook
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
        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if (is_null($this->_data['subscription_id'])) {
            $ip[] = "'subscription_id' can't be null";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if (is_null($this->_data['data'])) {
            $ip[] = "'data' can't be null";
        }
        if (is_null($this->_data['failed'])) {
            $ip[] = "'failed' can't be null";
        }
        if (is_null($this->_data['response'])) {
            $ip[] = "'response' can't be null";
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
            self::TYPE_INCOMING_BLOCKCHAIN_HOOK,
            self::TYPE_ADDRESS_TRANSACTION,
            self::TYPE_CONTRACT_LOG_EVENT,
            self::TYPE_TRADE_MATCH,
            self::TYPE_TRADE_PARTIAL_FILL,
            self::TYPE_PENDING_BLOCKCHAIN_HOOK,
            self::TYPE_TRANSACTION_IN_THE_BLOCK,
            self::TYPE_KMS_FAILED_TX,
            self::TYPE_KMS_COMPLETED_TX,
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
     * @param string $type Type of the subscription.
     * @return $this
     */
    public function setType(string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed, true)) {
            throw new IAE(sprintf("WebHook.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the WebHook
     * @return $this
     */
    public function setId(string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get subscription_id
     *
     * @return string
     */
    public function getSubscriptionId(): string {
        return $this->_data["subscription_id"];
    }

    /**
     * Set subscription_id
     * 
     * @param string $subscription_id ID of the subscription
     * @return $this
     */
    public function setSubscriptionId(string $subscription_id) {
        $this->_data['subscription_id'] = $subscription_id;

        return $this;
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
     * @param string $url ID of the subscription
     * @return $this
     */
    public function setUrl(string $url) {
        $this->_data['url'] = $url;

        return $this;
    }

    /**
     * Get data
     *
     * @return object
     */
    public function getData(): object {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param object $data Data of webhook
     * @return $this
     */
    public function setData(object $data) {
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get next_time
     *
     * @return float|null
     */
    public function getNextTime(): ?float {
        return $this->_data["next_time"];
    }

    /**
     * Set next_time
     * 
     * @param float|null $next_time Next webhook execution try time
     * @return $this
     */
    public function setNextTime(?float $next_time) {
        $this->_data['next_time'] = $next_time;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp Webhook execution time
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Get retry_count
     *
     * @return float|null
     */
    public function getRetryCount(): ?float {
        return $this->_data["retry_count"];
    }

    /**
     * Set retry_count
     * 
     * @param float|null $retry_count Number
     * @return $this
     */
    public function setRetryCount(?float $retry_count) {
        $this->_data['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Get failed
     *
     * @return bool
     */
    public function getFailed(): bool {
        return $this->_data["failed"];
    }

    /**
     * Set failed
     * 
     * @param bool $failed Flag indicating whether this webhook was successful or not
     * @return $this
     */
    public function setFailed(bool $failed) {
        $this->_data['failed'] = $failed;

        return $this;
    }

    /**
     * Get response
     *
     * @return \Tatum\Model\WebHookResponse
     */
    public function getResponse(): \Tatum\Model\WebHookResponse {
        return $this->_data["response"];
    }

    /**
     * Set response
     * 
     * @param \Tatum\Model\WebHookResponse $response response
     * @return $this
     */
    public function setResponse(\Tatum\Model\WebHookResponse $response) {
        $this->_data['response'] = $response;

        return $this;
    }
}
