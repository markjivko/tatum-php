<?php

/**
 * BchBlock Model
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
 * BchBlock Model
 */
class BchBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BchBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "size" => ["size", "float", null, "getSize", "setSize"], 
        "height" => ["height", "float", null, "getHeight", "setHeight"], 
        "version" => ["version", "float", null, "getVersion", "setVersion"], 
        "merkleroot" => ["merkleroot", "string", null, "getMerkleroot", "setMerkleroot"], 
        "tx" => ["tx", "\Tatum\Model\BchTx[]", null, "getTx", "setTx"], 
        "time" => ["time", "float", null, "getTime", "setTime"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "difficulty" => ["difficulty", "float", null, "getDifficulty", "setDifficulty"], 
        "confirmations" => ["confirmations", "float", null, "getConfirmations", "setConfirmations"], 
        "previousblockhash" => ["previousblockhash", "string", null, "getPreviousblockhash", "setPreviousblockhash"], 
        "nextblockhash" => ["nextblockhash", "string", null, "getNextblockhash", "setNextblockhash"]
    ];

    /**
     * BchBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "size"=>null, "height"=>null, "version"=>null, "merkleroot"=>null, "tx"=>null, "time"=>null, "nonce"=>null, "difficulty"=>null, "confirmations"=>null, "previousblockhash"=>null, "nextblockhash"=>null] as $k => $v) {
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
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get size
     *
     * @return float|null
     */
    public function getSize(): ?float {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param float|null $size Block size.
     * @return $this
     */
    public function setSize(?float $size) {
        $this->_data['size'] = $size;

        return $this;
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The number of blocks preceding a particular block on a block chain.
     * @return $this
     */
    public function setHeight(?float $height) {
        $this->_data['height'] = $height;

        return $this;
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
     * @return $this
     */
    public function setVersion(?float $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get merkleroot
     *
     * @return string|null
     */
    public function getMerkleroot(): ?string {
        return $this->_data["merkleroot"];
    }

    /**
     * Set merkleroot
     * 
     * @param string|null $merkleroot The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
     * @return $this
     */
    public function setMerkleroot(?string $merkleroot) {
        $this->_data['merkleroot'] = $merkleroot;

        return $this;
    }

    /**
     * Get tx
     *
     * @return \Tatum\Model\BchTx[]|null
     */
    public function getTx(): ?array {
        return $this->_data["tx"];
    }

    /**
     * Set tx
     * 
     * @param \Tatum\Model\BchTx[]|null $tx List of transactions present in the block.
     * @return $this
     */
    public function setTx(?array $tx) {
        $this->_data['tx'] = $tx;

        return $this;
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
     * @return $this
     */
    public function setTime(?float $time) {
        $this->_data['time'] = $time;

        return $this;
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
     * @param float|null $nonce Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

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
     * @param float|null $difficulty difficulty
     * @return $this
     */
    public function setDifficulty(?float $difficulty) {
        $this->_data['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Get confirmations
     *
     * @return float|null
     */
    public function getConfirmations(): ?float {
        return $this->_data["confirmations"];
    }

    /**
     * Set confirmations
     * 
     * @param float|null $confirmations Number of blocks mined after this block.
     * @return $this
     */
    public function setConfirmations(?float $confirmations) {
        $this->_data['confirmations'] = $confirmations;

        return $this;
    }

    /**
     * Get previousblockhash
     *
     * @return string|null
     */
    public function getPreviousblockhash(): ?string {
        return $this->_data["previousblockhash"];
    }

    /**
     * Set previousblockhash
     * 
     * @param string|null $previousblockhash Hash of the previous block.
     * @return $this
     */
    public function setPreviousblockhash(?string $previousblockhash) {
        $this->_data['previousblockhash'] = $previousblockhash;

        return $this;
    }

    /**
     * Get nextblockhash
     *
     * @return string|null
     */
    public function getNextblockhash(): ?string {
        return $this->_data["nextblockhash"];
    }

    /**
     * Set nextblockhash
     * 
     * @param string|null $nextblockhash Hash of the next block.
     * @return $this
     */
    public function setNextblockhash(?string $nextblockhash) {
        $this->_data['nextblockhash'] = $nextblockhash;

        return $this;
    }
}
