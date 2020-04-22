<?php
/**
 * PtsV2PaymentsPost201ResponseProcessorInformationCustomer
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
 * PtsV2PaymentsPost201ResponseProcessorInformationCustomer Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseProcessorInformationCustomer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_processorInformation_customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'personalIdResult' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'personalIdResult' => null
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
        'personalIdResult' => 'personalIdResult'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'personalIdResult' => 'setPersonalIdResult'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'personalIdResult' => 'getPersonalIdResult'
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
        $this->container['personalIdResult'] = isset($data['personalIdResult']) ? $data['personalIdResult'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['personalIdResult']) && (strlen($this->container['personalIdResult']) > 1)) {
            $invalid_properties[] = "invalid value for 'personalIdResult', the character length must be smaller than or equal to 1.";
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

        if (strlen($this->container['personalIdResult']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets personalIdResult
     * @return string
     */
    public function getPersonalIdResult()
    {
        return $this->container['personalIdResult'];
    }

    /**
     * Sets personalIdResult
     * @param string $personalIdResult Personal identifier result. This field is supported only for Redecard in Brazil for Artizan\Cybersource\CybersourceSDK Latin American Processing. If you included `buyerInformation.personalIdentification[].ID` in the request, this value indicates whether or not `buyerInformation.personalIdentification[].ID` matched a value in a record on file. Returned only when the personal ID result is returned by the processor.  Possible values:   - **Y**: Match  - **N**: No match  - **K**: Not supported  - **U**: Unknown  - **Z**: No response returned **Note** Artizan\Cybersource\CybersourceSDK Latin American Processing is the name of a specific processing connection that Artizan\Cybersource\CybersourceSDK supports. In the Artizan\Cybersource\CybersourceSDK API documentation, Artizan\Cybersource\CybersourceSDK Latin American Processing does not refer to the general topic of processing in Latin America.The information in this field description is for the specific processing connection called Artizan\Cybersource\CybersourceSDK Latin American Processing. It is not for any other Latin American processors that Artizan\Cybersource\CybersourceSDK supports.
     * @return $this
     */
    public function setPersonalIdResult($personalIdResult)
    {
        if (!is_null($personalIdResult) && (strlen($personalIdResult) > 1)) {
            throw new \InvalidArgumentException('invalid length for $personalIdResult when calling PtsV2PaymentsPost201ResponseProcessorInformationCustomer., must be smaller than or equal to 1.');
        }

        $this->container['personalIdResult'] = $personalIdResult;

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


