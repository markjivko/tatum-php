<?php

/**
 * BtcInfo Model
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
 * BtcInfo Model
 */
class BtcInfo extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcInfo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "blocks" => ["blocks", "float", null, "getBlocks", "setBlocks", null], 
        "headers" => ["headers", "float", null, "getHeaders", "setHeaders", null], 
        "bestblockhash" => ["bestblockhash", "string", null, "getBestblockhash", "setBestblockhash", null], 
        "difficulty" => ["difficulty", "float", null, "getDifficulty", "setDifficulty", null]
    ];

    /**
     * BtcInfo
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
        return $ip;
    }


    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string|null $chain Chain of the blockchain, main or test.
     * @return $this
     */
    public function setChain(?string $chain) {
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return float|null
     */
    public function getBlocks(): ?float {
        return $this->_data["blocks"];
    }

    /**
     * Set blocks
     * 
     * @param float|null $blocks Last block.
     * @return $this
     */
    public function setBlocks(?float $blocks) {
        $this->_data['blocks'] = $blocks;

        return $this;
    }

    /**
     * Get headers
     *
     * @return float|null
     */
    public function getHeaders(): ?float {
        return $this->_data["headers"];
    }

    /**
     * Set headers
     * 
     * @param float|null $headers Last headers.
     * @return $this
     */
    public function setHeaders(?float $headers) {
        $this->_data['headers'] = $headers;

        return $this;
    }

    /**
     * Get bestblockhash
     *
     * @return string|null
     */
    public function getBestblockhash(): ?string {
        return $this->_data["bestblockhash"];
    }

    /**
     * Set bestblockhash
     * 
     * @param string|null $bestblockhash Hash of the last block.
     * @return $this
     */
    public function setBestblockhash(?string $bestblockhash) {
        $this->_data['bestblockhash'] = $bestblockhash;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return float|null
     */
    public function getDifficulty(): ?float {
        return $this->_data["difficulty"];
    }

    /**
     * Set difficulty
     * 
     * @param float|null $difficulty Difficulty of the algorithm.
     * @return $this
     */
    public function setDifficulty(?float $difficulty) {
        $this->_data['difficulty'] = $difficulty;

        return $this;
    }
}
