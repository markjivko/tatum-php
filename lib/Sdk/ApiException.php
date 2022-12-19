<?php

/**
 * Api Exception
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

namespace Tatum\Sdk;

use Tatum\Model\ModelInterface;

/**
 * ApiException
 */
class ApiException extends \Exception {
    /**
     * The HTTP body of the server response either as Json or string.
     */
    protected \stdClass|string|null $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[][]
     */
    protected array $responseHeaders;

    /**
     * The deserialized response object
     */
    protected ModelInterface|string|null $responseObject = null;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[][]            $responseHeaders HTTP response header
     * @param \stdClass|string|null $responseBody    HTTP decoded body of the server response either as \stdClass or string
     */
    public function __construct(
        string $message = "",
        int $code = 0,
        array $responseHeaders = [],
        string|\stdClass $responseBody = null
    ) {
        // @TODO should this allow strings so it can accept weird MS codes like 404.1?
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return array<string, string[]> HTTP response header
     */
    public function getResponseHeaders(): array {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return \stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody(): \stdClass|string|null {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param \Tatum\Model\ModelInterface|string $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject(ModelInterface|string $obj): void {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return \Tatum\Model\ModelInterface|string|null the deserialized response object
     */
    public function getResponseObject(): ModelInterface|string|null {
        return $this->responseObject;
    }
}
