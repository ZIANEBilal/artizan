<?php
/**
 * KeyResult
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
 * KeyResult Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KeyResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'KeyResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keyId' => 'string',
        'der' => '\Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseDer',
        'jwk' => '\Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseJwk'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keyId' => null,
        'der' => null,
        'jwk' => null
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
        'keyId' => 'keyId',
        'der' => 'der',
        'jwk' => 'jwk'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'keyId' => 'setKeyId',
        'der' => 'setDer',
        'jwk' => 'setJwk'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'keyId' => 'getKeyId',
        'der' => 'getDer',
        'jwk' => 'getJwk'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['der'] = isset($data['der']) ? $data['der'] : null;
        $this->container['jwk'] = isset($data['jwk']) ? $data['jwk'] : null;
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
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId Unique identifier for the generated token. Used in the subsequent Tokenize Card request from your customer’s device or browser.
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

        return $this;
    }

    /**
     * Gets der
     * @return \Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseDer
     */
    public function getDer()
    {
        return $this->container['der'];
    }

    /**
     * Sets der
     * @param \Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseDer $der
     * @return $this
     */
    public function setDer($der)
    {
        $this->container['der'] = $der;

        return $this;
    }

    /**
     * Gets jwk
     * @return \Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseJwk
     */
    public function getJwk()
    {
        return $this->container['jwk'];
    }

    /**
     * Sets jwk
     * @param \Artizan\Cybersource\CybersourceSDK\Model\FlexV1KeysPost200ResponseJwk $jwk
     * @return $this
     */
    public function setJwk($jwk)
    {
        $this->container['jwk'] = $jwk;

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


