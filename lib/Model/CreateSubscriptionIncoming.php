<?php

/**
 * CreateSubscriptionIncoming Model
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
 * CreateSubscriptionIncoming Model
 */
class CreateSubscriptionIncoming extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TYPE_ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION = 'ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION';
    protected static $_name = "CreateSubscriptionIncoming";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "attr" => ["attr", "\Tatum\Model\CreateSubscriptionIncomingAttr", null, "getAttr", "setAttr"]
    ];

    /**
     * CreateSubscriptionIncoming
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "attr"=>null] as $k => $v) {
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
            self::TYPE_ACCOUNT_INCOMING_BLOCKCHAIN_TRANSACTION,
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
            throw new IAE(sprintf("CreateSubscriptionIncoming.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateSubscriptionIncomingAttr
     */
    public function getAttr(): \Tatum\Model\CreateSubscriptionIncomingAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateSubscriptionIncomingAttr $attr attr
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateSubscriptionIncomingAttr $attr) {
        $this->_data['attr'] = $attr;

        return $this;
    }
}
