<?php
/**
 * CaptureApi
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
 * CaptureApi Class Doc Comment
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CaptureApi
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
     * @return CaptureApi
     */
    public function setApiClient(\Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation capturePayment
     *
     * Capture a Payment
     *
     * @param \Artizan\Cybersource\CybersourceSDK\Model\CapturePaymentRequest $capturePaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. This ID links the capture to the payment. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function capturePayment($capturePaymentRequest, $id)
    {
        list($response, $statusCode, $httpHeader) = $this->capturePaymentWithHttpInfo($capturePaymentRequest, $id);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation capturePaymentWithHttpInfo
     *
     * Capture a Payment
     *
     * @param \Artizan\Cybersource\CybersourceSDK\Model\CapturePaymentRequest $capturePaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. This ID links the capture to the payment. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function capturePaymentWithHttpInfo($capturePaymentRequest, $id)
    {
        // verify the required parameter 'capturePaymentRequest' is set
        if ($capturePaymentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $capturePaymentRequest when calling capturePayment');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling capturePayment');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}/captures";
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
        if (isset($capturePaymentRequest)) {
            $_tempBody = $capturePaymentRequest;
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
                '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost201Response',
                '/pts/v2/payments/{id}/captures'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsCapturesPost400Response', $e->getResponseHeaders());
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
