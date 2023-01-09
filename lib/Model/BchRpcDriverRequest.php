<?php

/**
 * BchRpcDriver_request Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * BchRpcDriver_request Model
 * 
 * @description Any valid JSON RPC method content body.
 */
class BchRpcDriverRequest extends AbstractModel {

    public const _D = null;
    protected static $_name = "BchRpcDriver_request";
    protected static $_definition = [
        "jsonrpc" => ["jsonrpc", "string", null, "getJsonrpc", "setJsonrpc", null, ["r" => 0]], 
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "method" => ["method", "string", null, "getMethod", "setMethod", null, ["r" => 0]], 
        "params" => ["params", "array", null, "getParams", "setParams", null, ["r" => 0]]
    ];

    /**
     * BchRpcDriverRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get jsonrpc
     *
     * @return string|null
     */
    public function getJsonrpc(): ?string {
        return $this->_data["jsonrpc"];
    }

    /**
     * Set jsonrpc
     * 
     * @param string|null $jsonrpc Version of the JSON RPC.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setJsonrpc(?string $jsonrpc) {
        return $this->_set("jsonrpc", $jsonrpc);
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
     * @param string|null $id ID of the request, could be any arbitrary identifier.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get method
     *
     * @return string|null
     */
    public function getMethod(): ?string {
        return $this->_data["method"];
    }

    /**
     * Set method
     * 
     * @param string|null $method Method to invoke on the node.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMethod(?string $method) {
        return $this->_set("method", $method);
    }

    /**
     * Get params
     *
     * @return array|null
     */
    public function getParams(): ?array {
        return $this->_data["params"];
    }

    /**
     * Set params
     * 
     * @param array|null $params Params to the method call, if required.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setParams(?array $params) {
        return $this->_set("params", $params);
    }
}
