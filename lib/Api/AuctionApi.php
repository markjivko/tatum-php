<?php

/**
 * Implementation of Auction API
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
 * Auction API
 */
class AuctionApi extends AbstractApi {
    /**
     * Allow the NFT auction or marketplace to transfer an asset
     *
     * @param \Tatum\Model\ApproveNftSpending $approve_nft_spending 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function approveNftSpending($approve_nft_spending) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/approve";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $approve_nft_spending
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Allow the NFT auction or marketplace to transfer an asset
     *
     * @param \Tatum\Model\ApproveNftSpendingCelo $approve_nft_spending_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function approveNftSpendingCelo($approve_nft_spending_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/approve";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $approve_nft_spending_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Allow the NFT auction or marketplace to transfer an asset
     *
     * @param \Tatum\Model\ApproveNftSpendingCeloKMS $approve_nft_spending_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function approveNftSpendingCeloKMS($approve_nft_spending_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/approve";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $approve_nft_spending_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Allow the NFT auction or marketplace to transfer an asset
     *
     * @param \Tatum\Model\ApproveNftSpendingKMS $approve_nft_spending_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function approveNftSpendingKMS($approve_nft_spending_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/approve";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $approve_nft_spending_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Bid for an asset at the NFT auction
     *
     * @param \Tatum\Model\BidOnAuction $bid_on_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bidOnAuction($bid_on_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/bid";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $bid_on_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Bid for an asset at the NFT auction
     *
     * @param \Tatum\Model\BidOnAuctionCelo $bid_on_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bidOnAuctionCelo($bid_on_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/bid";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $bid_on_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Bid for an asset at the NFT auction
     *
     * @param \Tatum\Model\BidOnAuctionCeloKMS $bid_on_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bidOnAuctionCeloKMS($bid_on_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/bid";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $bid_on_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Bid for an asset at the NFT auction
     *
     * @param \Tatum\Model\BidOnAuctionKMS $bid_on_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bidOnAuctionKMS($bid_on_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/bid";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $bid_on_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the recipient of the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeRecipient $update_fee_recipient 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bloAucUpdateFeeRecipient($update_fee_recipient) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/recipient";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_recipient
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the recipient of the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeRecipientCelo $update_fee_recipient_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bloAucUpdateFeeRecipientCelo($update_fee_recipient_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/recipient";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_recipient_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the recipient of the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeRecipientCeloKMS $update_fee_recipient_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bloAucUpdateFeeRecipientCeloKMS($update_fee_recipient_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/recipient";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_recipient_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the recipient of the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeRecipientKMS $update_fee_recipient_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function bloAucUpdateFeeRecipientKMS($update_fee_recipient_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/recipient";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_recipient_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Cancel the selling of an asset at the NFT auction
     *
     * @param \Tatum\Model\CancelAuction $cancel_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function cancelAuction($cancel_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/cancel";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $cancel_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Cancel the selling of an asset at the NFT auction
     *
     * @param \Tatum\Model\CancelAuctionCelo $cancel_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function cancelAuctionCelo($cancel_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/cancel";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $cancel_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Cancel the selling of an asset at the NFT auction
     *
     * @param \Tatum\Model\CancelAuctionCeloKMS $cancel_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function cancelAuctionCeloKMS($cancel_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/cancel";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $cancel_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Cancel the selling of an asset at the NFT auction
     *
     * @param \Tatum\Model\CancelAuctionKMS $cancel_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function cancelAuctionKMS($cancel_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/cancel";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $cancel_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Sell an asset at the NFT auction
     *
     * @param \Tatum\Model\CreateAuction $create_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function createAuction($create_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/sell";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Sell an asset at the NFT auction
     *
     * @param \Tatum\Model\CreateAuctionCelo $create_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function createAuctionCelo($create_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/sell";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Sell an asset at the NFT auction
     *
     * @param \Tatum\Model\CreateAuctionCeloKMS $create_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function createAuctionCeloKMS($create_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/sell";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Sell an asset at the NFT auction
     *
     * @param \Tatum\Model\CreateAuctionKMS $create_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function createAuctionKMS($create_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/sell";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $create_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Create an NFT auction
     *
     * @param \Tatum\Model\GenerateAuction $generate_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function generateAuction($generate_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $generate_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Create an NFT auction
     *
     * @param \Tatum\Model\GenerateAuctionCelo $generate_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function generateAuctionCelo($generate_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $generate_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Create an NFT auction
     *
     * @param \Tatum\Model\GenerateAuctionCeloKMS $generate_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function generateAuctionCeloKMS($generate_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $generate_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Create an NFT auction
     *
     * @param \Tatum\Model\GenerateAuctionKMS $generate_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function generateAuctionKMS($generate_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $generate_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Get information about an auctioned asset at the NFT auction
     *
     * @param string $chain Blockchain to work with
     * @param string $contract_address Contract address
     * @param string $id Auction ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetAuction200Response
     */
    public function getAuction($chain, $contract_address, $id) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/auction/{chain}/{contractAddress}/{id}";

        /** @var \Tatum\Model\GetAuction200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain, "contractAddress" => $contract_address, "id" => $id]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\GetAuction200Response"
        );
            
        return $result;
    }

    /**
     * Get the NFT auction fee
     *
     * @param string $chain Blockchain to work with
     * @param string $contract_address Contract address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function getAuctionFee($chain, $contract_address) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/auction/{chain}/{contractAddress}/fee";

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain, "contractAddress" => $contract_address]), $rPath, [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }

    /**
     * Get the recipient of the NFT auction fee
     *
     * @param string $chain Blockchain to work with
     * @param string $contract_address Contract address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GetAuctionFeeRecipient200Response
     */
    public function getAuctionFeeRecipient($chain, $contract_address) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        // Path template
        $rPath = "/v3/blockchain/auction/{chain}/{contractAddress}/recipient";

        /** @var \Tatum\Model\GetAuctionFeeRecipient200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse($rPath, ["chain" => $chain, "contractAddress" => $contract_address]), $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\GetAuctionFeeRecipient200Response"
        );
            
        return $result;
    }

    /**
     * Settle an NFT auction
     *
     * @param \Tatum\Model\SettleAuction $settle_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function settleAuction($settle_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/settle";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $settle_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Settle an NFT auction
     *
     * @param \Tatum\Model\SettleAuctionCelo $settle_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function settleAuctionCelo($settle_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/settle";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $settle_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Settle an NFT auction
     *
     * @param \Tatum\Model\SettleAuctionCeloKMS $settle_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function settleAuctionCeloKMS($settle_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/settle";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $settle_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Settle an NFT auction
     *
     * @param \Tatum\Model\SettleAuctionKMS $settle_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function settleAuctionKMS($settle_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/settle";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, $rPath, [], $rHeaders, [], $settle_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeAuction $update_fee_auction 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function updateFeeAuction($update_fee_auction) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/fee";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_auction
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeAuctionCelo $update_fee_auction_celo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function updateFeeAuctionCelo($update_fee_auction_celo) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/fee";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_auction_celo
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeAuctionCeloKMS $update_fee_auction_celo_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function updateFeeAuctionCeloKMS($update_fee_auction_celo_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/fee";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_auction_celo_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

    /**
     * Update the NFT auction fee
     *
     * @param \Tatum\Model\UpdateFeeAuctionKMS $update_fee_auction_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionSigned
     */
    public function updateFeeAuctionKMS($update_fee_auction_kms) { 
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        // Path template
        $rPath = "/v3/blockchain/auction/fee";

        /** @var \Tatum\Model\TransactionSigned $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, $rPath, [], $rHeaders, [], $update_fee_auction_kms
            ), 
            "\Tatum\Model\TransactionSigned"
        );
            
        return $result;
    }

}
