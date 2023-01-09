<?php

/**
 * Implementation of BlockchainStorage API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * BlockchainStorage API
 */
class BlockchainStorageApi extends AbstractApi {
    /**
     * Store a log record
     *
     * @param \Tatum\Model\CreateRecord $create_record 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createRecord(\Tatum\Model\CreateRecord $create_record) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/record", [], $rHeaders, [], $create_record
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Store a log record
     *
     * @param \Tatum\Model\CreateRecordCelo $create_record_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function createRecordCelo(\Tatum\Model\CreateRecordCelo $create_record_celo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/record", [], $rHeaders, [], $create_record_celo
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Get a log record
     *
     * @param string $chain The blockchain to get the log record from
     * @param string $id The ID of the log record or transaction to get from the blockchain
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetLog200Response
     */
    public function getLog(string $chain, string $id) {
        if (strlen($id) > 100) {
            throw new IAE('Invalid length for "$id" when calling BlockchainStorageApi.getLog, must be smaller than or equal to 100');
        }

        if (strlen($id) < 1) {
            throw new IAE('Invalid length for "$id" when calling BlockchainStorageApi.getLog, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\GetLog200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/record", [
                    "chain" => S::toQueryValue($chain),
                    "id" => S::toQueryValue($id),
                ], $rHeaders, []
            ), 
            "\Tatum\Model\GetLog200Response"
        );
            
        return $result;
    }
    
}
