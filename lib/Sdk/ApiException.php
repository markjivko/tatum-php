<?php

/**
 * Api Exception
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

namespace Tatum\Sdk;

use Tatum\Model\ModelInterface;

/**
 * ApiException
 */
class ApiException extends \Exception {
    /**
     * The HTTP body of the server response either as Json or string.
     *
	 * @var \stdClass|string|null
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[][]
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var \Tatum\Model\ModelInterface|string|null
     */
    protected $responseObject = null;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[][]            $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct(string $message = "", int $code = 0, array $responseHeaders = [], $responseBody = null) {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return array<string, string[]> HTTP response header
     */
    public function getResponseHeaders() {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody() {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param \Tatum\Model\ModelInterface|string $obj Deserialized response object
     * @return void
     */
    public function setResponseObject($obj) {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return \Tatum\Model\ModelInterface|string|null the deserialized response object
     */
    public function getResponseObject() {
        return $this->responseObject;
    }
}
