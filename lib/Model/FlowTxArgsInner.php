<?php

/**
 * FlowTx_args_inner Model
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
 * FlowTx_args_inner Model
 */
class FlowTxArgsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowTx_args_inner";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "value" => ["value", "string", null, "getValue", "setValue"]
    ];

    /**
     * FlowTxArgsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "value"=>null] as $k => $v) {
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
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type type
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value value
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}
