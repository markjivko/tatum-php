<?php

/**
 * TronWallet Model
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
 * TronWallet Model
 */
class TronWallet extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronWallet";
    protected static $_definition = [
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic"], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub"]
    ];

    /**
     * TronWallet
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["mnemonic"=>null, "xpub"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['mnemonic'])) {
            $ip[] = "'mnemonic' can't be null";
        }
        if (is_null($this->_data['xpub'])) {
            $ip[] = "'xpub' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Generated mnemonic for wallet.
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        $this->_data['mnemonic'] = $mnemonic;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string
     */
    public function getXpub(): string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Generated Extended public key for wallet with derivation path according to BIP44. This key can be used to generate addresses.
     * @return $this
     */
    public function setXpub(string $xpub) {
        $this->_data['xpub'] = $xpub;

        return $this;
    }
}
