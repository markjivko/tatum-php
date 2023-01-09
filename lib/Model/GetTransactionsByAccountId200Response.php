<?php

/**
 * getTransactionsByAccountId_200_response Model
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
 * getTransactionsByAccountId_200_response Model
 */
class GetTransactionsByAccountId200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "getTransactionsByAccountId_200_response";
    protected static $_definition = [
    ];

    /**
     * GetTransactionsByAccountId200Response
     *
     * @param mixed $data Model data
     */
    public function __construct($data = null) {
        $this->_data = $data;
    }

    /**
     * Get data
     * 
     * @return mixed OneOfArrayNumber
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * Set data
     * 
     * @param mixed $data OneOfArrayNumber
     * @return $this
     */
    public function setData($data) {
        $this->_data = $data;

        return $this;
    }
    
}
