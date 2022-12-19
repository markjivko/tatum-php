<?php

/**
 * DeployNftTron Model
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
 * DeployNftTron Model
 */
class DeployNftTron extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "DeployNftTron";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "name" => ["name", "string", null, "getName", "setName"], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"]
    ];

    /**
     * DeployNftTron
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "name"=>null, "symbol"=>null, "from_private_key"=>null, "fee_limit"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 100)) {
            $ip[] = "'name' length must be <= 100";
        }
        if ((mb_strlen($this->_data['name']) < 1)) {
            $ip[] = "'name' length must be >= 1";
        }
        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if ((mb_strlen($this->_data['symbol']) > 30)) {
            $ip[] = "'symbol' length must be <= 30";
        }
        if ((mb_strlen($this->_data['symbol']) < 1)) {
            $ip[] = "'symbol' length must be >= 1";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_TRON,
        ];
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("DeployNftTron.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Name of the NFT token
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 100)) {
            throw new IAE('DeployNftTron.setName: $name length must be <= 100');
        }
        if ((mb_strlen($name) < 1)) {
            throw new IAE('DeployNftTron.setName: $name length must be >= 1');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Symbol of the NFT token
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 30)) {
            throw new IAE('DeployNftTron.setSymbol: $symbol length must be <= 30');
        }
        if ((mb_strlen($symbol) < 1)) {
            throw new IAE('DeployNftTron.setSymbol: $symbol length must be >= 1');
        }
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('DeployNftTron.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('DeployNftTron.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit The maximum amount to be paid as the transaction fee (in TRX); deployment of a smart contract on TRON costs around 580 TRX
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
