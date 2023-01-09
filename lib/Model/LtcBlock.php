<?php

/**
 * LtcBlock Model
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
 * LtcBlock Model
 */
class LtcBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "LtcBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash", null, ["r" => 0]], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber", null, ["r" => 0]], 
        "version" => ["version", "float", null, "getVersion", "setVersion", null, ["r" => 0]], 
        "prev_block" => ["prevBlock", "string", null, "getPrevBlock", "setPrevBlock", null, ["r" => 0]], 
        "merkle_root" => ["merkleRoot", "string", null, "getMerkleRoot", "setMerkleRoot", null, ["r" => 0]], 
        "time" => ["time", "float", null, "getTime", "setTime", null, ["r" => 0]], 
        "bits" => ["bits", "float", null, "getBits", "setBits", null, ["r" => 0]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]], 
        "txs" => ["txs", "\Tatum\Model\LtcTx[]", null, "getTxs", "setTxs", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * LtcBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Hash of block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHash(?string $hash) {
        return $this->_set("hash", $hash);
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number The number of blocks preceding a particular block on a block chain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        return $this->_set("block_number", $block_number);
    }

    /**
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version Block version.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVersion(?float $version) {
        return $this->_set("version", $version);
    }

    /**
     * Get prev_block
     *
     * @return string|null
     */
    public function getPrevBlock(): ?string {
        return $this->_data["prev_block"];
    }

    /**
     * Set prev_block
     * 
     * @param string|null $prev_block Hash of the previous block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrevBlock(?string $prev_block) {
        return $this->_set("prev_block", $prev_block);
    }

    /**
     * Get merkle_root
     *
     * @return string|null
     */
    public function getMerkleRoot(): ?string {
        return $this->_data["merkle_root"];
    }

    /**
     * Set merkle_root
     * 
     * @param string|null $merkle_root The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMerkleRoot(?string $merkle_root) {
        return $this->_set("merkle_root", $merkle_root);
    }

    /**
     * Get time
     *
     * @return float|null
     */
    public function getTime(): ?float {
        return $this->_data["time"];
    }

    /**
     * Set time
     * 
     * @param float|null $time Time of the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTime(?float $time) {
        return $this->_set("time", $time);
    }

    /**
     * Get bits
     *
     * @return float|null
     */
    public function getBits(): ?float {
        return $this->_data["bits"];
    }

    /**
     * Set bits
     * 
     * @param float|null $bits bits
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBits(?float $bits) {
        return $this->_set("bits", $bits);
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce Arbitrary number that is used in Litecoin's proof of work consensus algorithm.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }

    /**
     * Get txs
     *
     * @return \Tatum\Model\LtcTx[]|null
     */
    public function getTxs(): ?array {
        return $this->_data["txs"];
    }

    /**
     * Set txs
     * 
     * @param \Tatum\Model\LtcTx[]|null $txs txs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxs(?array $txs) {
        return $this->_set("txs", $txs);
    }
}
