<?php
/**
 * PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Artizan\Cybersource\CybersourceSDK
 * @author   Swaagger Codegen team
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

namespace Artizan\Cybersource\CybersourceSDK\Model;

use \ArrayAccess;

/**
 * PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2IncrementalAuthorizationPatch201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approvalCode' => 'string',
        'transactionId' => 'string',
        'responseCode' => 'string',
        'systemTraceAuditNumber' => 'string',
        'responseDetails' => 'string',
        'merchantAdvice' => '\Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approvalCode' => null,
        'transactionId' => null,
        'responseCode' => null,
        'systemTraceAuditNumber' => null,
        'responseDetails' => null,
        'merchantAdvice' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'approvalCode' => 'approvalCode',
        'transactionId' => 'transactionId',
        'responseCode' => 'responseCode',
        'systemTraceAuditNumber' => 'systemTraceAuditNumber',
        'responseDetails' => 'responseDetails',
        'merchantAdvice' => 'merchantAdvice'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'approvalCode' => 'setApprovalCode',
        'transactionId' => 'setTransactionId',
        'responseCode' => 'setResponseCode',
        'systemTraceAuditNumber' => 'setSystemTraceAuditNumber',
        'responseDetails' => 'setResponseDetails',
        'merchantAdvice' => 'setMerchantAdvice'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'approvalCode' => 'getApprovalCode',
        'transactionId' => 'getTransactionId',
        'responseCode' => 'getResponseCode',
        'systemTraceAuditNumber' => 'getSystemTraceAuditNumber',
        'responseDetails' => 'getResponseDetails',
        'merchantAdvice' => 'getMerchantAdvice'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }





    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['approvalCode'] = isset($data['approvalCode']) ? $data['approvalCode'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['systemTraceAuditNumber'] = isset($data['systemTraceAuditNumber']) ? $data['systemTraceAuditNumber'] : null;
        $this->container['responseDetails'] = isset($data['responseDetails']) ? $data['responseDetails'] : null;
        $this->container['merchantAdvice'] = isset($data['merchantAdvice']) ? $data['merchantAdvice'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['transactionId']) && (strlen($this->container['transactionId']) > 50)) {
            $invalid_properties[] = "invalid value for 'transactionId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['responseCode']) && (strlen($this->container['responseCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['systemTraceAuditNumber']) && (strlen($this->container['systemTraceAuditNumber']) > 6)) {
            $invalid_properties[] = "invalid value for 'systemTraceAuditNumber', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['responseDetails']) && (strlen($this->container['responseDetails']) > 255)) {
            $invalid_properties[] = "invalid value for 'responseDetails', the character length must be smaller than or equal to 255.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['transactionId']) > 50) {
            return false;
        }
        if (strlen($this->container['responseCode']) > 10) {
            return false;
        }
        if (strlen($this->container['systemTraceAuditNumber']) > 6) {
            return false;
        }
        if (strlen($this->container['responseDetails']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets approvalCode
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approvalCode'];
    }

    /**
     * Sets approvalCode
     * @param string $approvalCode Authorization code. Returned only when the processor returns this value.
     * @return $this
     */
    public function setApprovalCode($approvalCode)
    {
        $this->container['approvalCode'] = $approvalCode;

        return $this;
    }

    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Network transaction identifier (TID). You can use this value to identify a specific transaction when you are discussing the transaction with your processor. Not all processors provide this value.  #### Cielo For Cielo, this value is the non-sequential unit (NSU) and is supported for all transactions. The value is generated by Cielo or the issuing bank.  #### Comercio Latino For Comercio Latino, this value is the proof of sale or non-sequential unit (NSU) number generated by the acquirers Cielo and Rede, or the issuing bank.  #### Artizan\Cybersource\CybersourceSDK through VisaNet and GPN For details about this value for Artizan\Cybersource\CybersourceSDK through VisaNet and GPN, see \"Network Transaction Identifiers\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        if (!is_null($transactionId) && (strlen($transactionId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $transactionId when calling PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation., must be smaller than or equal to 50.');
        }

        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of the authorization.  #### AIBMS If this value is `08`, you can accept the transaction if the customer provides you with identification.  #### Atos This value is the response code sent from Atos and it might also include the response code from the bank. Format: `aa,bb` with the two values separated by a comma and where: - `aa` is the two-digit error message from Atos. - `bb` is the optional two-digit error message from the bank.  #### Comercio Latino This value is the status code and the error or response code received from the processor separated by a colon. Format: [status code]:E[error code] or [status code]:R[response code] Example `2:R06`  #### JCN Gateway Processor-defined detail error code. The associated response category code is in the `responseCategoryCode` field.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        if (!is_null($responseCode) && (strlen($responseCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation., must be smaller than or equal to 10.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets systemTraceAuditNumber
     * @return string
     */
    public function getSystemTraceAuditNumber()
    {
        return $this->container['systemTraceAuditNumber'];
    }

    /**
     * Sets systemTraceAuditNumber
     * @param string $systemTraceAuditNumber This field is returned only for **American Express Direct** and **Artizan\Cybersource\CybersourceSDK through VisaNet**.  #### American Express Direct  System trace audit number (STAN). This value identifies the transaction and is useful when investigating a chargeback dispute.  #### Artizan\Cybersource\CybersourceSDK through VisaNet  System trace number that must be printed on the customer’s receipt.  For details, see `receipt_number` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setSystemTraceAuditNumber($systemTraceAuditNumber)
    {
        if (!is_null($systemTraceAuditNumber) && (strlen($systemTraceAuditNumber) > 6)) {
            throw new \InvalidArgumentException('invalid length for $systemTraceAuditNumber when calling PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation., must be smaller than or equal to 6.');
        }

        $this->container['systemTraceAuditNumber'] = $systemTraceAuditNumber;

        return $this;
    }

    /**
     * Gets responseDetails
     * @return string
     */
    public function getResponseDetails()
    {
        return $this->container['responseDetails'];
    }

    /**
     * Sets responseDetails
     * @param string $responseDetails This field might contain information about a decline. This field is supported only for **Artizan\Cybersource\CybersourceSDK through VisaNet**.
     * @return $this
     */
    public function setResponseDetails($responseDetails)
    {
        if (!is_null($responseDetails) && (strlen($responseDetails) > 255)) {
            throw new \InvalidArgumentException('invalid length for $responseDetails when calling PtsV2IncrementalAuthorizationPatch201ResponseProcessorInformation., must be smaller than or equal to 255.');
        }

        $this->container['responseDetails'] = $responseDetails;

        return $this;
    }

    /**
     * Gets merchantAdvice
     * @return \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice
     */
    public function getMerchantAdvice()
    {
        return $this->container['merchantAdvice'];
    }

    /**
     * Sets merchantAdvice
     * @param \Artizan\Cybersource\CybersourceSDK\Model\PtsV2PaymentsPost201ResponseProcessorInformationMerchantAdvice $merchantAdvice
     * @return $this
     */
    public function setMerchantAdvice($merchantAdvice)
    {
        $this->container['merchantAdvice'] = $merchantAdvice;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Artizan\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Artizan\Cybersource\CybersourceSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}

