<?php
/**
 * ReversalApi
 * PHP version 5
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Artizan\Cybersource\CybersourceSDK Merged Spec
 *
 * All Artizan\Cybersource\CybersourceSDK API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Artizan\Cybersource\CybersourceSDK\Api;

use \Artizan\Cybersource\CybersourceSDK\ApiClient;
use \Artizan\Cybersource\CybersourceSDK\ApiException;
use \Artizan\Cybersource\CybersourceSDK\Configuration;
use \Artizan\Cybersource\CybersourceSDK\ObjectSerializer;

/**
 * ReversalApi Class Doc Comment
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReversalApi
{
    /**
     * API Client
     *
     * @var \Artizan\Cybersource\CybersourceSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Artizan\Cybersource\CybersourceSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Artizan\Cybersource\CybersourceSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient set the API client
     *
     * @return ReversalApi
     */
    public function setApiClient(\Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation authReversal
     *
     * Process an Authorization Reversal
     *
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\AuthReversalRequest $authReversalRequest  (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function authReversal($id, $authReversalRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->authReversalWithHttpInfo($id, $authReversalRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation authReversalWithHttpInfo
     *
     * Process an Authorization Reversal
     *
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\AuthReversalRequest $authReversalRequest  (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function authReversalWithHttpInfo($id, $authReversalRequest)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling authReversal');
        }
        // verify the required parameter 'authReversalRequest' is set
        if ($authReversalRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authReversalRequest when calling authReversal');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}/reversals";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($authReversalRequest)) {
            $_tempBody = $authReversalRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response',
                '/pts/v2/payments/{id}/reversals'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation mitReversal
     *
     * Merchant Initiated Reversal
     *
     * @param \Artizan\Cybersource\CybersourceSDK\Model\MitReversalRequest $mitReversalRequest  (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mitReversal($mitReversalRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->mitReversalWithHttpInfo($mitReversalRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation mitReversalWithHttpInfo
     *
     * Merchant Initiated Reversal
     *
     * @param \Artizan\Cybersource\CybersourceSDK\Model\MitReversalRequest $mitReversalRequest  (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mitReversalWithHttpInfo($mitReversalRequest)
    {
        // verify the required parameter 'mitReversalRequest' is set
        if ($mitReversalRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mitReversalRequest when calling mitReversal');
        }
        // parse inputs
        $resourcePath = "/pts/v2/reversals/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($mitReversalRequest)) {
            $_tempBody = $mitReversalRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response',
                '/pts/v2/reversals/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsReversalsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}