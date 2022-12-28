<?php

/**
 * CreateSubscriptionKMSSuccess_attr Model
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
 * CreateSubscriptionKMSSuccess_attr Model
 * 
 * @description Additional attributes based on the subscription type.
 */
class CreateSubscriptionKMSSuccessAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateSubscriptionKMSSuccess_attr";
    protected static $_definition = [
        "url" => ["url", "string", null, "getUrl", "setUrl", null]
    ];

    /**
     * CreateSubscriptionKMSSuccessAttr
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
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if ((mb_strlen($this->_data['url']) > 500)) {
            $ip[] = "'url' length must be <= 500";
        }
        return $ip;
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
     * @param string $url URL of the endpoint, where HTTP POST request will be sent, when tx is sucessfully broadcasted using Tatum KMS.
     * @return $this
     */
    public function setUrl(string $url) {
        if ((mb_strlen($url) > 500)) {
            throw new IAE('CreateSubscriptionKMSSuccessAttr.setUrl: $url length must be <= 500');
        }
        $this->_data['url'] = $url;

        return $this;
    }
}
