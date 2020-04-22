<?php
/**
 * PaymentInstrumentApi
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
 * PaymentInstrumentApi Class Doc Comment
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstrumentApi
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
     * @return PaymentInstrumentApi
     */
    public function setApiClient(\Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPaymentInstrument
     *
     * Create a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\CreatePaymentInstrumentRequest $createPaymentInstrumentRequest Specify the customer&#39;s payment details for card or bank account. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentInstrument($profileId, $createPaymentInstrumentRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->createPaymentInstrumentWithHttpInfo($profileId, $createPaymentInstrumentRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createPaymentInstrumentWithHttpInfo
     *
     * Create a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\CreatePaymentInstrumentRequest $createPaymentInstrumentRequest Specify the customer&#39;s payment details for card or bank account. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentInstrumentWithHttpInfo($profileId, $createPaymentInstrumentRequest)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling createPaymentInstrument');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.createPaymentInstrument, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.createPaymentInstrument, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'createPaymentInstrumentRequest' is set
        if ($createPaymentInstrumentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createPaymentInstrumentRequest when calling createPaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($createPaymentInstrumentRequest)) {
            $_tempBody = $createPaymentInstrumentRequest;
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
                '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments',
                '/tms/v1/paymentinstruments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deletePaymentInstrument
     *
     * Delete a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentInstrument($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->deletePaymentInstrumentWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deletePaymentInstrumentWithHttpInfo
     *
     * Delete a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentInstrumentWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling deletePaymentInstrument');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.deletePaymentInstrument, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.deletePaymentInstrument, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling deletePaymentInstrument');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.deletePaymentInstrument, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.deletePaymentInstrument, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPaymentInstrument
     *
     * Retrieve a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentInstrument($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->getPaymentInstrumentWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getPaymentInstrumentWithHttpInfo
     *
     * Retrieve a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentInstrumentWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling getPaymentInstrument');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.getPaymentInstrument, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.getPaymentInstrument, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling getPaymentInstrument');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.getPaymentInstrument, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.getPaymentInstrument, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments',
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updatePaymentInstrument
     *
     * Update a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\UpdatePaymentInstrumentRequest $updatePaymentInstrumentRequest Specify the customer&#39;s payment details. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePaymentInstrument($profileId, $tokenId, $updatePaymentInstrumentRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->updatePaymentInstrumentWithHttpInfo($profileId, $tokenId, $updatePaymentInstrumentRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation updatePaymentInstrumentWithHttpInfo
     *
     * Update a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @param \Artizan\Cybersource\CybersourceSDK\Model\UpdatePaymentInstrumentRequest $updatePaymentInstrumentRequest Specify the customer&#39;s payment details. (required)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePaymentInstrumentWithHttpInfo($profileId, $tokenId, $updatePaymentInstrumentRequest)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling updatePaymentInstrument');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.updatePaymentInstrument, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentApi.updatePaymentInstrument, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling updatePaymentInstrument');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.updatePaymentInstrument, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentApi.updatePaymentInstrument, must be bigger than or equal to 16.');
        }

        // verify the required parameter 'updatePaymentInstrumentRequest' is set
        if ($updatePaymentInstrumentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $updatePaymentInstrumentRequest when calling updatePaymentInstrument');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($updatePaymentInstrumentRequest)) {
            $_tempBody = $updatePaymentInstrumentRequest;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments',
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedPaymentInstruments', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
