<?php

/**
 * Implementation of Account API
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
 * Account API
 */
class AccountApi extends AbstractApi {
    /**
     * Activate account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function activateAccount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}/activate";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Block an amount in an account
     *
     * @param string $id Account ID
     * @param \Tatum\Model\BlockAmount $block_amount 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function blockAmount($id, $block_amount) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account/block/{id}";

        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, [], $block_amount
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }

    /**
     * Create a virtual account
     *
     * @param \Tatum\Model\CreateAccount $create_account 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function createAccount($create_account) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account";

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_account
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }

    /**
     * Create multiple accounts in a batch call
     *
     * @param \Tatum\Model\CreateAccountBatch $create_account_batch 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function createAccountBatch($create_account_batch) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account/batch";

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_account_batch
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }

    /**
     * Create a virtual account
     *
     * @param \Tatum\Model\CreateAccountXpub $create_account_xpub 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function createAccountXpub($create_account_xpub) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account";

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_account_xpub
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }

    /**
     * Deactivate account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deactivateAccount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}/deactivate";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Unblock all blocked amounts in an account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteAllBlockAmount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/block/account/{id}";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Unblock a blocked amount in an account
     *
     * @param string $id Blockage ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteBlockAmount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/block/{id}";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Freeze account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function freezeAccount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}/freeze";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Get account balance
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AccountBalance
     */
    public function getAccountBalance($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}/balance";

        /** @var \Tatum\Model\AccountBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\AccountBalance"
        );
            
        return $result;
    }

    /**
     * Get account by ID
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function getAccountByAccountId($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}";

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }

    /**
     * List all accounts
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $sort_by Sort by
     * @param bool|null $active Filter only active or non active accounts
     * @param bool|null $only_non_zero_balance Filter only accounts with non zero balances
     * @param bool|null $frozen Filter only frozen or non frozen accounts
     * @param string|null $currency Filter by currency
     * @param string|null $account_number Filter by account number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function getAccounts($page_size = null, $page = null, $sort = null, $sort_by = null, $active = null, $only_non_zero_balance = null, $frozen = null, $currency = null, $account_number = null) { 
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccounts, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccounts, must be bigger than or equal to 1.');
        }

        if (isset($account_number) && strlen($account_number) > 50) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccounts, must be smaller than or equal to 50');
        }

        if (isset($account_number) && strlen($account_number) < 1) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccounts, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account";

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "sortBy" => isset($sort_by) ? S::toQueryValue($sort_by) : null,
                    "active" => isset($active) ? S::toQueryValue($active) : null,
                    "onlyNonZeroBalance" => isset($only_non_zero_balance) ? S::toQueryValue($only_non_zero_balance) : null,
                    "frozen" => isset($frozen) ? S::toQueryValue($frozen) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "accountNumber" => isset($account_number) ? S::toQueryValue($account_number) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }

    /**
     * List all customer accounts
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string $id Internal customer ID
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $account_code For bookkeeping to distinct account purpose.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function getAccountsByCustomerId($page_size, $id, $offset = null, $account_code = null) { 
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsByCustomerId, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsByCustomerId, must be bigger than or equal to 1.');
        }

        if (isset($account_code) && strlen($account_code) > 50) {
            throw new IAE('Invalid length for "$account_code" when calling AccountApi.getAccountsByCustomerId, must be smaller than or equal to 50');
        }

        if (isset($account_code) && strlen($account_code) < 1) {
            throw new IAE('Invalid length for "$account_code" when calling AccountApi.getAccountsByCustomerId, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/customer/{id}";

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["id" => $id]), $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "accountCode" => isset($account_code) ? S::toQueryValue($account_code) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }

    /**
     * Count of found entities for get accounts request
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $sort_by Sort by
     * @param bool|null $active Filter only active or non active accounts
     * @param bool|null $only_non_zero_balance Filter only accounts with non zero balances
     * @param bool|null $frozen Filter only frozen or non frozen accounts
     * @param string|null $currency Filter by currency
     * @param string|null $account_number Filter by account number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getAccountsCount($page_size = null, $page = null, $sort = null, $sort_by = null, $active = null, $only_non_zero_balance = null, $frozen = null, $currency = null, $account_number = null) { 
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsCount, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsCount, must be bigger than or equal to 1.');
        }

        if (isset($account_number) && strlen($account_number) > 50) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccountsCount, must be smaller than or equal to 50');
        }

        if (isset($account_number) && strlen($account_number) < 1) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccountsCount, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/count";

        /** @var \Tatum\Model\EntitiesCount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, $rPath, [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "sortBy" => isset($sort_by) ? S::toQueryValue($sort_by) : null,
                    "active" => isset($active) ? S::toQueryValue($active) : null,
                    "onlyNonZeroBalance" => isset($only_non_zero_balance) ? S::toQueryValue($only_non_zero_balance) : null,
                    "frozen" => isset($frozen) ? S::toQueryValue($frozen) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "accountNumber" => isset($account_number) ? S::toQueryValue($account_number) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EntitiesCount"
        );
            
        return $result;
    }

    /**
     * Get blocked amounts in an account
     *
     * @param string $id Account ID
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Blockage[]
     */
    public function getBlockAmount($id, $page_size, $offset = null) { 
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getBlockAmount, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getBlockAmount, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/block/{id}";

        /** @var \Tatum\Model\Blockage[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["id" => $id]), $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Blockage[]"
        );
            
        return $result;
    }

    /**
     * Get blocked amount by ID
     *
     * @param string $id Blocked amount ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Blockage
     */
    public function getBlockAmountById($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/block/{id}/detail";

        /** @var \Tatum\Model\Blockage $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\Blockage"
        );
            
        return $result;
    }

    /**
     * Unblock an amount in an account and perform a transaction
     *
     * @param string $id Blockage ID
     * @param \Tatum\Model\UnblockAmount $unblock_amount 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionResult
     */
    public function unblockAmountWithTransaction($id, $unblock_amount) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account/block/{id}";

        /** @var \Tatum\Model\TransactionResult $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, [], $unblock_amount
            ), 
            "\Tatum\Model\TransactionResult"
        );
            
        return $result;
    }

    /**
     * Unfreeze account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function unfreezeAccount($id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/ledger/account/{id}/unfreeze";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, []
            )
        );
    }

    /**
     * Update account
     *
     * @param string $id Account ID
     * @param \Tatum\Model\UpdateAccount $update_account 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function updateAccountByAccountId($id, $update_account) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/ledger/account/{id}";

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse($rPath, ["id" => $id]), $rPath, [], $rHeaders, [], $update_account
            )
        );
    }

}
