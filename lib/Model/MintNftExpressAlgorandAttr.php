<?php

/**
 * MintNftExpressAlgorand_attr Model
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
 * MintNftExpressAlgorand_attr Model
 */
class MintNftExpressAlgorandAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MintNftExpressAlgorand_attr";
    protected static $_definition = [
        "asset_unit" => ["assetUnit", "string", null, "getAssetUnit", "setAssetUnit", null], 
        "clawback" => ["clawback", "string", null, "getClawback", "setClawback", null], 
        "manager" => ["manager", "string", null, "getManager", "setManager", null], 
        "reserve" => ["reserve", "string", null, "getReserve", "setReserve", null], 
        "freeze" => ["freeze", "string", null, "getFreeze", "setFreeze", null], 
        "total" => ["total", "float", null, "getTotal", "setTotal", 1], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals", 0]
    ];

    /**
     * MintNftExpressAlgorandAttr
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
        if (!is_null($this->_data['asset_unit']) && (mb_strlen($this->_data['asset_unit']) > 8)) {
            $ip[] = "'asset_unit' length must be <= 8";
        }
        if (!is_null($this->_data['asset_unit']) && (mb_strlen($this->_data['asset_unit']) < 1)) {
            $ip[] = "'asset_unit' length must be >= 1";
        }
        if (!is_null($this->_data['clawback']) && (mb_strlen($this->_data['clawback']) > 58)) {
            $ip[] = "'clawback' length must be <= 58";
        }
        if (!is_null($this->_data['clawback']) && (mb_strlen($this->_data['clawback']) < 58)) {
            $ip[] = "'clawback' length must be >= 58";
        }
        if (!is_null($this->_data['manager']) && (mb_strlen($this->_data['manager']) > 58)) {
            $ip[] = "'manager' length must be <= 58";
        }
        if (!is_null($this->_data['manager']) && (mb_strlen($this->_data['manager']) < 58)) {
            $ip[] = "'manager' length must be >= 58";
        }
        if (!is_null($this->_data['reserve']) && (mb_strlen($this->_data['reserve']) > 58)) {
            $ip[] = "'reserve' length must be <= 58";
        }
        if (!is_null($this->_data['reserve']) && (mb_strlen($this->_data['reserve']) < 58)) {
            $ip[] = "'reserve' length must be >= 58";
        }
        if (!is_null($this->_data['freeze']) && (mb_strlen($this->_data['freeze']) > 58)) {
            $ip[] = "'freeze' length must be <= 58";
        }
        if (!is_null($this->_data['freeze']) && (mb_strlen($this->_data['freeze']) < 58)) {
            $ip[] = "'freeze' length must be >= 58";
        }
        if (!is_null($this->_data['total']) && ($this->_data['total'] < 10)) {
            $ip[] = "'total' must be >= 10";
        }
        if (!is_null($this->_data['decimals']) && ($this->_data['decimals'] > 15)) {
            $ip[] = "'decimals' must be <= 15";
        }
        if (!is_null($this->_data['decimals']) && ($this->_data['decimals'] < 1)) {
            $ip[] = "'decimals' must be >= 1";
        }
        return $ip;
    }


    /**
     * Get asset_unit
     *
     * @return string|null
     */
    public function getAssetUnit(): ?string {
        return $this->_data["asset_unit"];
    }

    /**
     * Set asset_unit
     * 
     * @param string|null $asset_unit The unit name of the NFT
     * @return $this
     */
    public function setAssetUnit(?string $asset_unit) {
        if (!is_null($asset_unit) && (mb_strlen($asset_unit) > 8)) {
            throw new IAE('MintNftExpressAlgorandAttr.setAssetUnit: $asset_unit length must be <= 8');
        }
        if (!is_null($asset_unit) && (mb_strlen($asset_unit) < 1)) {
            throw new IAE('MintNftExpressAlgorandAttr.setAssetUnit: $asset_unit length must be >= 1');
        }
        $this->_data['asset_unit'] = $asset_unit;

        return $this;
    }

    /**
     * Get clawback
     *
     * @return string|null
     */
    public function getClawback(): ?string {
        return $this->_data["clawback"];
    }

    /**
     * Set clawback
     * 
     * @param string|null $clawback The address of the clawback account that can claw back holdings of the NFT
     * @return $this
     */
    public function setClawback(?string $clawback) {
        if (!is_null($clawback) && (mb_strlen($clawback) > 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setClawback: $clawback length must be <= 58');
        }
        if (!is_null($clawback) && (mb_strlen($clawback) < 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setClawback: $clawback length must be >= 58');
        }
        $this->_data['clawback'] = $clawback;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string|null
     */
    public function getManager(): ?string {
        return $this->_data["manager"];
    }

    /**
     * Set manager
     * 
     * @param string|null $manager The address of the manager account that can manage the configuration of the NFT or burn it; specify this parameter if you want to be able to <a href=\"#operation/NftBurnErc721\">burn the minted NFT</a> any time later
     * @return $this
     */
    public function setManager(?string $manager) {
        if (!is_null($manager) && (mb_strlen($manager) > 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setManager: $manager length must be <= 58');
        }
        if (!is_null($manager) && (mb_strlen($manager) < 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setManager: $manager length must be >= 58');
        }
        $this->_data['manager'] = $manager;

        return $this;
    }

    /**
     * Get reserve
     *
     * @return string|null
     */
    public function getReserve(): ?string {
        return $this->_data["reserve"];
    }

    /**
     * Set reserve
     * 
     * @param string|null $reserve The address of the reserve account that holds the reserve (non-minted) units of the NFT
     * @return $this
     */
    public function setReserve(?string $reserve) {
        if (!is_null($reserve) && (mb_strlen($reserve) > 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setReserve: $reserve length must be <= 58');
        }
        if (!is_null($reserve) && (mb_strlen($reserve) < 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setReserve: $reserve length must be >= 58');
        }
        $this->_data['reserve'] = $reserve;

        return $this;
    }

    /**
     * Get freeze
     *
     * @return string|null
     */
    public function getFreeze(): ?string {
        return $this->_data["freeze"];
    }

    /**
     * Set freeze
     * 
     * @param string|null $freeze The address of the freeze account that is used to freeze holdings of the NFT
     * @return $this
     */
    public function setFreeze(?string $freeze) {
        if (!is_null($freeze) && (mb_strlen($freeze) > 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setFreeze: $freeze length must be <= 58');
        }
        if (!is_null($freeze) && (mb_strlen($freeze) < 58)) {
            throw new IAE('MintNftExpressAlgorandAttr.setFreeze: $freeze length must be >= 58');
        }
        $this->_data['freeze'] = $freeze;

        return $this;
    }

    /**
     * Get total
     *
     * @return float|null
     */
    public function getTotal(): ?float {
        return $this->_data["total"];
    }

    /**
     * Set total
     * 
     * @param float|null $total (For minting the NFT as a <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFT</a>) The number of fractions that the minted NFT should be divided into<br/>The number must be a power of 10 and greater that 1, for example, 10, 100, 1000...<br/>If not set, the parameter defaults to 1, which means that one regular (not fractional) NFT will be minted.
     * @return $this
     */
    public function setTotal(?float $total) {
        if (!is_null($total) && ($total < 10)) {
            throw new IAE('MintNftExpressAlgorandAttr.setTotal: $total must be >=10');
        }
        $this->_data['total'] = $total;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float|null $decimals (For minting the NFT as a <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFT</a>) The number of decimal places in a fraction of the minted NFT<br/>The number must be greater that 0 and equal to the logarithm in base 10 of the number of the fractions (see the <code>total</code> parameter); for example, if <code>total</code> is set to 10, <code>decimals</code> must be set to 1.<br/>If not set, the parameter defaults to 0, which means that one regular (not fractional) NFT will be minted.
     * @return $this
     */
    public function setDecimals(?float $decimals) {
        if (!is_null($decimals) && ($decimals > 15)) {
            throw new IAE('MintNftExpressAlgorandAttr.setDecimals: $decimals must be <=15');
        }
        if (!is_null($decimals) && ($decimals < 1)) {
            throw new IAE('MintNftExpressAlgorandAttr.setDecimals: $decimals must be >=1');
        }
        $this->_data['decimals'] = $decimals;

        return $this;
    }
}
