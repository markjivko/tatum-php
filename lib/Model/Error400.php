<?php

/**
 * Error400 Model
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
 * Error400 Model
 */
class Error400 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Error400";
    protected static $_definition = [
        "error_code" => ["errorCode", "string", null, "getErrorCode", "setErrorCode"], 
        "message" => ["message", "string", null, "getMessage", "setMessage"], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode"], 
        "data" => ["data", "\Tatum\Model\Error400DataInner[]", null, "getData", "setData"]
    ];

    /**
     * Error400
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["error_code"=>null, "message"=>null, "status_code"=>null, "data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['error_code'])) {
            $ip[] = "'error_code' can't be null";
        }
        if (is_null($this->_data['message'])) {
            $ip[] = "'message' can't be null";
        }
        if (is_null($this->_data['status_code'])) {
            $ip[] = "'status_code' can't be null";
        }
        if (is_null($this->_data['data'])) {
            $ip[] = "'data' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get error_code
     *
     * @return string
     */
    public function getErrorCode(): string {
        return $this->_data["error_code"];
    }

    /**
     * Set error_code
     * 
     * @param string $error_code validation.failed
     * @return $this
     */
    public function setErrorCode(string $error_code) {
        $this->_data['error_code'] = $error_code;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage(): string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string $message Request validation failed. Please see data for additional information.
     * @return $this
     */
    public function setMessage(string $message) {
        $this->_data['message'] = $message;

        return $this;
    }

    /**
     * Get status_code
     *
     * @return float
     */
    public function getStatusCode(): float {
        return $this->_data["status_code"];
    }

    /**
     * Set status_code
     * 
     * @param float $status_code 400
     * @return $this
     */
    public function setStatusCode(float $status_code) {
        $this->_data['status_code'] = $status_code;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Tatum\Model\Error400DataInner[]
     */
    public function getData(): array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\Error400DataInner[] $data data
     * @return $this
     */
    public function setData(array $data) {
        $this->_data['data'] = $data;

        return $this;
    }
}
