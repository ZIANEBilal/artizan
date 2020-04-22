<?php
/**
 * ReportingV3NetFundingsGet200ResponseNetFundingSummaries
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
 * ReportingV3NetFundingsGet200ResponseNetFundingSummaries Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3NetFundingsGet200ResponseNetFundingSummaries implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3NetFundingsGet200Response_netFundingSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'paymentSubType' => 'string',
        'conveyedCount' => 'int',
        'conveyedAmount' => 'string',
        'settledCount' => 'int',
        'fundedCount' => 'int',
        'fundedAmount' => 'string',
        'currencyCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'paymentSubType' => null,
        'conveyedCount' => null,
        'conveyedAmount' => null,
        'settledCount' => null,
        'fundedCount' => null,
        'fundedAmount' => null,
        'currencyCode' => null
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
        'type' => 'type',
        'paymentSubType' => 'paymentSubType',
        'conveyedCount' => 'conveyedCount',
        'conveyedAmount' => 'conveyedAmount',
        'settledCount' => 'settledCount',
        'fundedCount' => 'fundedCount',
        'fundedAmount' => 'fundedAmount',
        'currencyCode' => 'currencyCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'paymentSubType' => 'setPaymentSubType',
        'conveyedCount' => 'setConveyedCount',
        'conveyedAmount' => 'setConveyedAmount',
        'settledCount' => 'setSettledCount',
        'fundedCount' => 'setFundedCount',
        'fundedAmount' => 'setFundedAmount',
        'currencyCode' => 'setCurrencyCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'paymentSubType' => 'getPaymentSubType',
        'conveyedCount' => 'getConveyedCount',
        'conveyedAmount' => 'getConveyedAmount',
        'settledCount' => 'getSettledCount',
        'fundedCount' => 'getFundedCount',
        'fundedAmount' => 'getFundedAmount',
        'currencyCode' => 'getCurrencyCode'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['paymentSubType'] = isset($data['paymentSubType']) ? $data['paymentSubType'] : null;
        $this->container['conveyedCount'] = isset($data['conveyedCount']) ? $data['conveyedCount'] : null;
        $this->container['conveyedAmount'] = isset($data['conveyedAmount']) ? $data['conveyedAmount'] : null;
        $this->container['settledCount'] = isset($data['settledCount']) ? $data['settledCount'] : null;
        $this->container['fundedCount'] = isset($data['fundedCount']) ? $data['fundedCount'] : null;
        $this->container['fundedAmount'] = isset($data['fundedAmount']) ? $data['fundedAmount'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Valid values: - PURCHASES - REFUNDS - FEES - CHARGEBACKS
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets paymentSubType
     * @return string
     */
    public function getPaymentSubType()
    {
        return $this->container['paymentSubType'];
    }

    /**
     * Sets paymentSubType
     * @param string $paymentSubType
     * @return $this
     */
    public function setPaymentSubType($paymentSubType)
    {
        $this->container['paymentSubType'] = $paymentSubType;

        return $this;
    }

    /**
     * Gets conveyedCount
     * @return int
     */
    public function getConveyedCount()
    {
        return $this->container['conveyedCount'];
    }

    /**
     * Sets conveyedCount
     * @param int $conveyedCount
     * @return $this
     */
    public function setConveyedCount($conveyedCount)
    {
        $this->container['conveyedCount'] = $conveyedCount;

        return $this;
    }

    /**
     * Gets conveyedAmount
     * @return string
     */
    public function getConveyedAmount()
    {
        return $this->container['conveyedAmount'];
    }

    /**
     * Sets conveyedAmount
     * @param string $conveyedAmount
     * @return $this
     */
    public function setConveyedAmount($conveyedAmount)
    {
        $this->container['conveyedAmount'] = $conveyedAmount;

        return $this;
    }

    /**
     * Gets settledCount
     * @return int
     */
    public function getSettledCount()
    {
        return $this->container['settledCount'];
    }

    /**
     * Sets settledCount
     * @param int $settledCount
     * @return $this
     */
    public function setSettledCount($settledCount)
    {
        $this->container['settledCount'] = $settledCount;

        return $this;
    }

    /**
     * Gets fundedCount
     * @return int
     */
    public function getFundedCount()
    {
        return $this->container['fundedCount'];
    }

    /**
     * Sets fundedCount
     * @param int $fundedCount
     * @return $this
     */
    public function setFundedCount($fundedCount)
    {
        $this->container['fundedCount'] = $fundedCount;

        return $this;
    }

    /**
     * Gets fundedAmount
     * @return string
     */
    public function getFundedAmount()
    {
        return $this->container['fundedAmount'];
    }

    /**
     * Sets fundedAmount
     * @param string $fundedAmount
     * @return $this
     */
    public function setFundedAmount($fundedAmount)
    {
        $this->container['fundedAmount'] = $fundedAmount;

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


