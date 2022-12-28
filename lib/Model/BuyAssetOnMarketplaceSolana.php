<?php

/**
 * BuyAssetOnMarketplaceSolana Model
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
 * BuyAssetOnMarketplaceSolana Model
 */
class BuyAssetOnMarketplaceSolana extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "BuyAssetOnMarketplaceSolana";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null], 
        "listing_id" => ["listingId", "mixed", null, "getListingId", "setListingId", null], 
        "from" => ["from", "mixed", null, "getFrom", "setFrom", null], 
        "authority_private_key" => ["authorityPrivateKey", "string", null, "getAuthorityPrivateKey", "setAuthorityPrivateKey", null], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null]
    ];

    /**
     * BuyAssetOnMarketplaceSolana
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
        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 44)) {
            $ip[] = "'contract_address' length must be <= 44";
        }
        if ((mb_strlen($this->_data['contract_address']) < 44)) {
            $ip[] = "'contract_address' length must be >= 44";
        }
        if (is_null($this->_data['listing_id'])) {
            $ip[] = "'listing_id' can't be null";
        }
        if ((mb_strlen($this->_data['listing_id']) > 44)) {
            $ip[] = "'listing_id' length must be <= 44";
        }
        if ((mb_strlen($this->_data['listing_id']) < 44)) {
            $ip[] = "'listing_id' length must be >= 44";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 44)) {
            $ip[] = "'from' length must be >= 44";
        }
        if (!is_null($this->_data['authority_private_key']) && (mb_strlen($this->_data['authority_private_key']) > 128)) {
            $ip[] = "'authority_private_key' length must be <= 128";
        }
        if (!is_null($this->_data['authority_private_key']) && (mb_strlen($this->_data['authority_private_key']) < 87)) {
            $ip[] = "'authority_private_key' length must be >= 87";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 128)) {
            $ip[] = "'from_private_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 87)) {
            $ip[] = "'from_private_key' length must be >= 87";
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
            self::CHAIN_SOL,
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("BuyAssetOnMarketplaceSolana.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Blockchain address of the smart contract
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setContractAddress: $contract_address length must be <= 44');
        }
        if ((mb_strlen($contract_address) < 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setContractAddress: $contract_address length must be >= 44');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get listing_id
     *
     * @return mixed
     */
    public function getListingId(): mixed {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param mixed $listing_id Blockchain address of the listing
     * @return $this
     */
    public function setListingId(mixed $listing_id) {
        if ((mb_strlen($listing_id) > 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setListingId: $listing_id length must be <= 44');
        }
        if ((mb_strlen($listing_id) < 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setListingId: $listing_id length must be >= 44');
        }
        $this->_data['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Get from
     *
     * @return mixed
     */
    public function getFrom(): mixed {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param mixed $from Blockchain address of the buyer
     * @return $this
     */
    public function setFrom(mixed $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 44)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setFrom: $from length must be >= 44');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get authority_private_key
     *
     * @return string|null
     */
    public function getAuthorityPrivateKey(): ?string {
        return $this->_data["authority_private_key"];
    }

    /**
     * Set authority_private_key
     * 
     * @param string|null $authority_private_key The private key used for signing transactions as authority; required if <code>requiresSignOff</code> is set to \"true\" for the marketplace
     * @return $this
     */
    public function setAuthorityPrivateKey(?string $authority_private_key) {
        if (!is_null($authority_private_key) && (mb_strlen($authority_private_key) > 128)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setAuthorityPrivateKey: $authority_private_key length must be <= 128');
        }
        if (!is_null($authority_private_key) && (mb_strlen($authority_private_key) < 87)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setAuthorityPrivateKey: $authority_private_key length must be >= 87');
        }
        $this->_data['authority_private_key'] = $authority_private_key;

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
     * @param string $from_private_key The private key of the buyer
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 128)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setFromPrivateKey: $from_private_key length must be <= 128');
        }
        if ((mb_strlen($from_private_key) < 87)) {
            throw new IAE('BuyAssetOnMarketplaceSolana.setFromPrivateKey: $from_private_key length must be >= 87');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }
}
