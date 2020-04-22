<?php
/**
 * ReportingV3NotificationofChangesGet200ResponseNotificationOfChanges
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
 * ReportingV3NotificationofChangesGet200ResponseNotificationOfChanges Class Doc Comment
 *
 * @category    Class
 * @description Notification Of Change
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3NotificationofChangesGet200ResponseNotificationOfChanges implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3NotificationofChangesGet200Response_notificationOfChanges';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantReferenceNumber' => 'string',
        'transactionReferenceNumber' => 'string',
        'time' => '\DateTime',
        'code' => 'string',
        'accountType' => 'string',
        'routingNumber' => 'string',
        'accountNumber' => 'string',
        'consumerName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantReferenceNumber' => null,
        'transactionReferenceNumber' => null,
        'time' => 'date-time',
        'code' => null,
        'accountType' => null,
        'routingNumber' => null,
        'accountNumber' => null,
        'consumerName' => null
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
        'merchantReferenceNumber' => 'merchantReferenceNumber',
        'transactionReferenceNumber' => 'transactionReferenceNumber',
        'time' => 'time',
        'code' => 'code',
        'accountType' => 'accountType',
        'routingNumber' => 'routingNumber',
        'accountNumber' => 'accountNumber',
        'consumerName' => 'consumerName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantReferenceNumber' => 'setMerchantReferenceNumber',
        'transactionReferenceNumber' => 'setTransactionReferenceNumber',
        'time' => 'setTime',
        'code' => 'setCode',
        'accountType' => 'setAccountType',
        'routingNumber' => 'setRoutingNumber',
        'accountNumber' => 'setAccountNumber',
        'consumerName' => 'setConsumerName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantReferenceNumber' => 'getMerchantReferenceNumber',
        'transactionReferenceNumber' => 'getTransactionReferenceNumber',
        'time' => 'getTime',
        'code' => 'getCode',
        'accountType' => 'getAccountType',
        'routingNumber' => 'getRoutingNumber',
        'accountNumber' => 'getAccountNumber',
        'consumerName' => 'getConsumerName'
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
        $this->container['merchantReferenceNumber'] = isset($data['merchantReferenceNumber']) ? $data['merchantReferenceNumber'] : null;
        $this->container['transactionReferenceNumber'] = isset($data['transactionReferenceNumber']) ? $data['transactionReferenceNumber'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['routingNumber'] = isset($data['routingNumber']) ? $data['routingNumber'] : null;
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
        $this->container['consumerName'] = isset($data['consumerName']) ? $data['consumerName'] : null;
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
     * Gets merchantReferenceNumber
     * @return string
     */
    public function getMerchantReferenceNumber()
    {
        return $this->container['merchantReferenceNumber'];
    }

    /**
     * Sets merchantReferenceNumber
     * @param string $merchantReferenceNumber Merchant Reference Number
     * @return $this
     */
    public function setMerchantReferenceNumber($merchantReferenceNumber)
    {
        $this->container['merchantReferenceNumber'] = $merchantReferenceNumber;

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
     * @param string $transactionReferenceNumber Transaction Reference Number
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
     * @param \DateTime $time Notification Of Change Date(ISO 8601 Extended)
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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
     * @param string $code Merchant Reference Number
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets accountType
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     * @param string $accountType Account Type
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets routingNumber
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routingNumber'];
    }

    /**
     * Sets routingNumber
     * @param string $routingNumber Routing Number
     * @return $this
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->container['routingNumber'] = $routingNumber;

        return $this;
    }

    /**
     * Gets accountNumber
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     * @param string $accountNumber Account Number
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets consumerName
     * @return string
     */
    public function getConsumerName()
    {
        return $this->container['consumerName'];
    }

    /**
     * Sets consumerName
     * @param string $consumerName Consumer Name
     * @return $this
     */
    public function setConsumerName($consumerName)
    {
        $this->container['consumerName'] = $consumerName;

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


