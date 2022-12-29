<?php

/**
 * BtcTransferBlockchain_request Model
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

/**
 * BtcTransferBlockchain_request Model
 */
class BtcTransferBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcTransferBlockchain_request";
    protected static $_definition = [
        "from_address" => ["fromAddress", "\Tatum\Model\BtcTransactionFromAddressKMSSource[]", null, "getFromAddress", "setFromAddress", null, ["r" => 1, "c" => 1]], 
        "to" => ["to", "\Tatum\Model\BtcTransactionFromUTXOKMSTarget[]", null, "getTo", "setTo", null, ["r" => 1, "c" => 1]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0]], 
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress", null, ["r" => 0]], 
        "from_utxo" => ["fromUTXO", "\Tatum\Model\BtcTransactionFromUTXOKMSSource[]", null, "getFromUtxo", "setFromUtxo", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * BtcTransferBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_address
     *
     * @return \Tatum\Model\BtcTransactionFromAddressKMSSource[]
     */
    public function getFromAddress(): array {
        return $this->_data["from_address"];
    }

    /**
     * Set from_address
     * 
     * @param \Tatum\Model\BtcTransactionFromAddressKMSSource[] $from_address The array of blockchain addresses to send the assets from and their signature IDs. For each address, the last 100 transactions are scanned for any UTXO to be included in the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAddress(array $from_address) {
        return $this->_set("from_address", $from_address);
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\BtcTransactionFromUTXOKMSTarget[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\BtcTransactionFromUTXOKMSTarget[] $to The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BTC). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(array $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee The fee to be paid for the transaction (in BTC); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get change_address
     *
     * @return string|null
     */
    public function getChangeAddress(): ?string {
        return $this->_data["change_address"];
    }

    /**
     * Set change_address
     * 
     * @param string|null $change_address The blockchain address to send any extra assets remaning after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChangeAddress(?string $change_address) {
        return $this->_set("change_address", $change_address);
    }

    /**
     * Get from_utxo
     *
     * @return \Tatum\Model\BtcTransactionFromUTXOKMSSource[]
     */
    public function getFromUtxo(): array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\BtcTransactionFromUTXOKMSSource[] $from_utxo The array of transaction hashes, indexes of its UTXOs, and the signature IDs of the associated blockchain addresses
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromUtxo(array $from_utxo) {
        return $this->_set("from_utxo", $from_utxo);
    }
}
