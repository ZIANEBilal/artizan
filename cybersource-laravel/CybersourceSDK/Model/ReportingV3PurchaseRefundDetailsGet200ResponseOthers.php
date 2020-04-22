<?php
/**
 * ReportingV3PurchaseRefundDetailsGet200ResponseOthers
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
 * ReportingV3PurchaseRefundDetailsGet200ResponseOthers Class Doc Comment
 *
 * @category    Class
 * @description Other Merchant Details Values.
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PurchaseRefundDetailsGet200ResponseOthers implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PurchaseRefundDetailsGet200Response_others';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requestId' => 'string',
        'merchantData1' => 'string',
        'merchantData2' => 'string',
        'merchantData3' => 'string',
        'merchantData4' => 'string',
        'firstName' => 'string',
        'lastName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requestId' => null,
        'merchantData1' => null,
        'merchantData2' => null,
        'merchantData3' => null,
        'merchantData4' => null,
        'firstName' => null,
        'lastName' => null
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
        'merchantData1' => 'merchantData1',
        'merchantData2' => 'merchantData2',
        'merchantData3' => 'merchantData3',
        'merchantData4' => 'merchantData4',
        'firstName' => 'firstName',
        'lastName' => 'lastName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'requestId' => 'setRequestId',
        'merchantData1' => 'setMerchantData1',
        'merchantData2' => 'setMerchantData2',
        'merchantData3' => 'setMerchantData3',
        'merchantData4' => 'setMerchantData4',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'requestId' => 'getRequestId',
        'merchantData1' => 'getMerchantData1',
        'merchantData2' => 'getMerchantData2',
        'merchantData3' => 'getMerchantData3',
        'merchantData4' => 'getMerchantData4',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName'
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
        $this->container['merchantData1'] = isset($data['merchantData1']) ? $data['merchantData1'] : null;
        $this->container['merchantData2'] = isset($data['merchantData2']) ? $data['merchantData2'] : null;
        $this->container['merchantData3'] = isset($data['merchantData3']) ? $data['merchantData3'] : null;
        $this->container['merchantData4'] = isset($data['merchantData4']) ? $data['merchantData4'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['requestId']) && (strlen($this->container['requestId']) > 26)) {
            $invalid_properties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 26.";
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

        if (strlen($this->container['requestId']) > 26) {
            return false;
        }
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
        if (!is_null($requestId) && (strlen($requestId) > 26)) {
            throw new \InvalidArgumentException('invalid length for $requestId when calling ReportingV3PurchaseRefundDetailsGet200ResponseOthers., must be smaller than or equal to 26.');
        }

        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets merchantData1
     * @return string
     */
    public function getMerchantData1()
    {
        return $this->container['merchantData1'];
    }

    /**
     * Sets merchantData1
     * @param string $merchantData1 Merchant Defined Data
     * @return $this
     */
    public function setMerchantData1($merchantData1)
    {
        $this->container['merchantData1'] = $merchantData1;

        return $this;
    }

    /**
     * Gets merchantData2
     * @return string
     */
    public function getMerchantData2()
    {
        return $this->container['merchantData2'];
    }

    /**
     * Sets merchantData2
     * @param string $merchantData2 Merchant Defined Data
     * @return $this
     */
    public function setMerchantData2($merchantData2)
    {
        $this->container['merchantData2'] = $merchantData2;

        return $this;
    }

    /**
     * Gets merchantData3
     * @return string
     */
    public function getMerchantData3()
    {
        return $this->container['merchantData3'];
    }

    /**
     * Sets merchantData3
     * @param string $merchantData3 Merchant Defined Data
     * @return $this
     */
    public function setMerchantData3($merchantData3)
    {
        $this->container['merchantData3'] = $merchantData3;

        return $this;
    }

    /**
     * Gets merchantData4
     * @return string
     */
    public function getMerchantData4()
    {
        return $this->container['merchantData4'];
    }

    /**
     * Sets merchantData4
     * @param string $merchantData4 Merchant Defined Data
     * @return $this
     */
    public function setMerchantData4($merchantData4)
    {
        $this->container['merchantData4'] = $merchantData4;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName First Name
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Last Name
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

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


