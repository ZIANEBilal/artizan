<?php
/**
 * PurchaseAndRefundDetailsApi
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
 * PurchaseAndRefundDetailsApi Class Doc Comment
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseAndRefundDetailsApi
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
     * @return PurchaseAndRefundDetailsApi
     */
    public function setApiClient(\Artizan\Cybersource\CybersourceSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getPurchaseAndRefundDetails
     *
     * Get Purchase and Refund Details
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @param string $paymentSubtype Payment Subtypes.   - **ALL**:  All Payment Subtypes   - **VI** :  Visa   - **MC** :  Master Card   - **AX** :  American Express   - **DI** :  Discover   - **DP** :  Pinless Debit (optional, default to ALL)
     * @param string $viewBy View results by Request Date or Submission Date.   - **requestDate** : Request Date   - **submissionDate**: Submission Date (optional, default to requestDate)
     * @param string $groupName Valid Artizan\Cybersource\CybersourceSDK Group Name.User can define groups using CBAPI and Group Management Module in EBC2. Groups are collection of organizationIds (optional)
     * @param int $offset Offset of the Purchase and Refund Results. (optional)
     * @param int $limit Results count per page. Range(1-2000) (optional, default to 2000)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3PurchaseRefundDetailsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPurchaseAndRefundDetails($startTime, $endTime, $organizationId = null, $paymentSubtype = 'ALL', $viewBy = 'requestDate', $groupName = null, $offset = null, $limit = '2000')
    {
        list($response, $statusCode, $httpHeader) = $this->getPurchaseAndRefundDetailsWithHttpInfo($startTime, $endTime, $organizationId, $paymentSubtype, $viewBy, $groupName, $offset, $limit);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getPurchaseAndRefundDetailsWithHttpInfo
     *
     * Get Purchase and Refund Details
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @param string $paymentSubtype Payment Subtypes.   - **ALL**:  All Payment Subtypes   - **VI** :  Visa   - **MC** :  Master Card   - **AX** :  American Express   - **DI** :  Discover   - **DP** :  Pinless Debit (optional, default to ALL)
     * @param string $viewBy View results by Request Date or Submission Date.   - **requestDate** : Request Date   - **submissionDate**: Submission Date (optional, default to requestDate)
     * @param string $groupName Valid Artizan\Cybersource\CybersourceSDK Group Name.User can define groups using CBAPI and Group Management Module in EBC2. Groups are collection of organizationIds (optional)
     * @param int $offset Offset of the Purchase and Refund Results. (optional)
     * @param int $limit Results count per page. Range(1-2000) (optional, default to 2000)
     * @throws \Artizan\Cybersource\CybersourceSDK\ApiException on non-2xx response
     * @return array of \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3PurchaseRefundDetailsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPurchaseAndRefundDetailsWithHttpInfo($startTime, $endTime, $organizationId = null, $paymentSubtype = 'ALL', $viewBy = 'requestDate', $groupName = null, $offset = null, $limit = '2000')
    {
        // verify the required parameter 'startTime' is set
        if ($startTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $startTime when calling getPurchaseAndRefundDetails');
        }
        // verify the required parameter 'endTime' is set
        if ($endTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endTime when calling getPurchaseAndRefundDetails');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling PurchaseAndRefundDetailsApi.getPurchaseAndRefundDetails, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling PurchaseAndRefundDetailsApi.getPurchaseAndRefundDetails, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling PurchaseAndRefundDetailsApi.getPurchaseAndRefundDetails, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        if (!is_null($limit) && ($limit > 2000)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PurchaseAndRefundDetailsApi.getPurchaseAndRefundDetails, must be smaller than or equal to 2000.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PurchaseAndRefundDetailsApi.getPurchaseAndRefundDetails, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/reporting/v3/purchase-refund-details";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($startTime !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($startTime);
        }
        // query params
        if ($endTime !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($endTime);
        }
        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // query params
        if ($paymentSubtype !== null) {
            $queryParams['paymentSubtype'] = $this->apiClient->getSerializer()->toQueryValue($paymentSubtype);
        }
        // query params
        if ($viewBy !== null) {
            $queryParams['viewBy'] = $this->apiClient->getSerializer()->toQueryValue($viewBy);
        }
        // query params
        if ($groupName !== null) {
            $queryParams['groupName'] = $this->apiClient->getSerializer()->toQueryValue($groupName);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
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
                '\Artizan\Cybersource\CybersourceSDK\Model\ReportingV3PurchaseRefundDetailsGet200Response',
                '/reporting/v3/purchase-refund-details'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Artizan\Cybersource\CybersourceSDK\Model\ReportingV3PurchaseRefundDetailsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\ReportingV3PurchaseRefundDetailsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Artizan\Cybersource\CybersourceSDK\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
