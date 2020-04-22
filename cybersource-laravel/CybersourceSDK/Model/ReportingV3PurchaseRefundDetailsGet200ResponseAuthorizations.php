<?php
/**
 * ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations
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
 * ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations Class Doc Comment
 *
 * @category    Class
 * @description Authorization Info Values
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PurchaseRefundDetailsGet200ResponseAuthorizations implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PurchaseRefundDetailsGet200Response_authorizations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requestId' => 'string',
        'transactionReferenceNumber' => 'string',
        'time' => '\DateTime',
        'authorizationRequestId' => 'string',
        'amount' => 'string',
        'currencyCode' => 'string',
        'code' => 'string',
        'rcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requestId' => null,
        'transactionReferenceNumber' => null,
        'time' => 'date-time',
        'authorizationRequestId' => null,
        'amount' => null,
        'currencyCode' => null,
        'code' => null,
        'rcode' => null
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
        'requestId' => 'requestId',
        'transactionReferenceNumber' => 'transactionReferenceNumber',
        'time' => 'time',
        'authorizationRequestId' => 'authorizationRequestId',
        'amount' => 'amount',
        'currencyCode' => 'currencyCode',
        'code' => 'code',
        'rcode' => 'rcode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'requestId' => 'setRequestId',
        'transactionReferenceNumber' => 'setTransactionReferenceNumber',
        'time' => 'setTime',
        'authorizationRequestId' => 'setAuthorizationRequestId',
        'amount' => 'setAmount',
        'currencyCode' => 'setCurrencyCode',
        'code' => 'setCode',
        'rcode' => 'setRcode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'requestId' => 'getRequestId',
        'transactionReferenceNumber' => 'getTransactionReferenceNumber',
        'time' => 'getTime',
        'authorizationRequestId' => 'getAuthorizationRequestId',
        'amount' => 'getAmount',
        'currencyCode' => 'getCurrencyCode',
        'code' => 'getCode',
        'rcode' => 'getRcode'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['transactionReferenceNumber'] = isset($data['transactionReferenceNumber']) ? $data['transactionReferenceNumber'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['authorizationRequestId'] = isset($data['authorizationRequestId']) ? $data['authorizationRequestId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['rcode'] = isset($data['rcode']) ? $data['rcode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets requestId
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     * @param string $requestId An unique identification number assigned by Artizan\Cybersource\CybersourceSDK to identify the submitted request.
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets transactionReferenceNumber
     * @return string
     */
    public function getTransactionReferenceNumber()
    {
        return $this->container['transactionReferenceNumber'];
    }

    /**
     * Sets transactionReferenceNumber
     * @param string $transactionReferenceNumber Authorization Transaction Reference Number
     * @return $this
     */
    public function setTransactionReferenceNumber($transactionReferenceNumber)
    {
        $this->container['transactionReferenceNumber'] = $transactionReferenceNumber;

        return $this;
    }

    /**
     * Gets time
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     * @param \DateTime $time Authorization Date
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets authorizationRequestId
     * @return string
     */
    public function getAuthorizationRequestId()
    {
        return $this->container['authorizationRequestId'];
    }

    /**
     * Sets authorizationRequestId
     * @param string $authorizationRequestId Authorization Request Id
     * @return $this
     */
    public function setAuthorizationRequestId($authorizationRequestId)
    {
        $this->container['authorizationRequestId'] = $authorizationRequestId;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount Authorization Amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     * @param string $currencyCode Valid ISO 4217 ALPHA-3 currency code
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Authorization Code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets rcode
     * @return string
     */
    public function getRcode()
    {
        return $this->container['rcode'];
    }

    /**
     * Sets rcode
     * @param string $rcode Authorization RCode
     * @return $this
     */
    public function setRcode($rcode)
    {
        $this->container['rcode'] = $rcode;

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


