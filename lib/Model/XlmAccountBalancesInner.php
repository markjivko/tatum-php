<?php

/**
 * XlmAccount_balances_inner Model
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
 * XlmAccount_balances_inner Model
 */
class XlmAccountBalancesInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XlmAccount_balances_inner";
    protected static $_definition = [
        "balance" => ["balance", "string", null, "getBalance", "setBalance", null], 
        "limit" => ["limit", "string", null, "getLimit", "setLimit", null], 
        "buying_liabilities" => ["buying_liabilities", "string", null, "getBuyingLiabilities", "setBuyingLiabilities", null], 
        "selling_liabilities" => ["selling_liabilities", "string", null, "getSellingLiabilities", "setSellingLiabilities", null], 
        "asset_type" => ["asset_type", "string", null, "getAssetType", "setAssetType", null], 
        "asset_code" => ["asset_code", "string", null, "getAssetCode", "setAssetCode", null], 
        "asset_issuer" => ["asset_issuer", "string", null, "getAssetIssuer", "setAssetIssuer", null]
    ];

    /**
     * XlmAccountBalancesInner
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
     * Get balance
     *
     * @return string|null
     */
    public function getBalance(): ?string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string|null $balance The number of units of an asset held by this account.
     * @return $this
     */
    public function setBalance(?string $balance) {
        $this->_data['balance'] = $balance;

        return $this;
    }

    /**
     * Get limit
     *
     * @return string|null
     */
    public function getLimit(): ?string {
        return $this->_data["limit"];
    }

    /**
     * Set limit
     * 
     * @param string|null $limit The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline.
     * @return $this
     */
    public function setLimit(?string $limit) {
        $this->_data['limit'] = $limit;

        return $this;
    }

    /**
     * Get buying_liabilities
     *
     * @return string|null
     */
    public function getBuyingLiabilities(): ?string {
        return $this->_data["buying_liabilities"];
    }

    /**
     * Set buying_liabilities
     * 
     * @param string|null $buying_liabilities The sum of all buy offers owned by this account for this asset.
     * @return $this
     */
    public function setBuyingLiabilities(?string $buying_liabilities) {
        $this->_data['buying_liabilities'] = $buying_liabilities;

        return $this;
    }

    /**
     * Get selling_liabilities
     *
     * @return string|null
     */
    public function getSellingLiabilities(): ?string {
        return $this->_data["selling_liabilities"];
    }

    /**
     * Set selling_liabilities
     * 
     * @param string|null $selling_liabilities The sum of all sell offers owned by this account for this asset.
     * @return $this
     */
    public function setSellingLiabilities(?string $selling_liabilities) {
        $this->_data['selling_liabilities'] = $selling_liabilities;

        return $this;
    }

    /**
     * Get asset_type
     *
     * @return string|null
     */
    public function getAssetType(): ?string {
        return $this->_data["asset_type"];
    }

    /**
     * Set asset_type
     * 
     * @param string|null $asset_type Either native, credit_alphanum4, or credit_alphanum12.
     * @return $this
     */
    public function setAssetType(?string $asset_type) {
        $this->_data['asset_type'] = $asset_type;

        return $this;
    }

    /**
     * Get asset_code
     *
     * @return string|null
     */
    public function getAssetCode(): ?string {
        return $this->_data["asset_code"];
    }

    /**
     * Set asset_code
     * 
     * @param string|null $asset_code The code for this asset.
     * @return $this
     */
    public function setAssetCode(?string $asset_code) {
        $this->_data['asset_code'] = $asset_code;

        return $this;
    }

    /**
     * Get asset_issuer
     *
     * @return string|null
     */
    public function getAssetIssuer(): ?string {
        return $this->_data["asset_issuer"];
    }

    /**
     * Set asset_issuer
     * 
     * @param string|null $asset_issuer The Stellar address of this asset’s issuer.
     * @return $this
     */
    public function setAssetIssuer(?string $asset_issuer) {
        $this->_data['asset_issuer'] = $asset_issuer;

        return $this;
    }
}
