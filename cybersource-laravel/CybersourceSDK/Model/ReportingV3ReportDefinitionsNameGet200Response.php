<?php
/**
 * ReportingV3ReportDefinitionsNameGet200Response
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
 * ReportingV3ReportDefinitionsNameGet200Response Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3ReportDefinitionsNameGet200Response implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3ReportDefinitionsNameGet200Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'reportDefinitionId' => 'int',
        'reportDefintionName' => 'string',
        'attributes' => '\Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseAttributes[]',
        'supportedFormats' => 'string[]',
        'description' => 'string',
        'defaultSettings' => '\Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings',
        'subscriptionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'reportDefinitionId' => 'int32',
        'reportDefintionName' => null,
        'attributes' => null,
        'supportedFormats' => null,
        'description' => null,
        'defaultSettings' => null,
        'subscriptionType' => null
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
        'reportDefinitionId' => 'reportDefinitionId',
        'reportDefintionName' => 'reportDefintionName',
        'attributes' => 'attributes',
        'supportedFormats' => 'supportedFormats',
        'description' => 'description',
        'defaultSettings' => 'defaultSettings',
        'subscriptionType' => 'subscriptionType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'reportDefinitionId' => 'setReportDefinitionId',
        'reportDefintionName' => 'setReportDefintionName',
        'attributes' => 'setAttributes',
        'supportedFormats' => 'setSupportedFormats',
        'description' => 'setDescription',
        'defaultSettings' => 'setDefaultSettings',
        'subscriptionType' => 'setSubscriptionType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'reportDefinitionId' => 'getReportDefinitionId',
        'reportDefintionName' => 'getReportDefintionName',
        'attributes' => 'getAttributes',
        'supportedFormats' => 'getSupportedFormats',
        'description' => 'getDescription',
        'defaultSettings' => 'getDefaultSettings',
        'subscriptionType' => 'getSubscriptionType'
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
        $this->container['reportDefinitionId'] = isset($data['reportDefinitionId']) ? $data['reportDefinitionId'] : null;
        $this->container['reportDefintionName'] = isset($data['reportDefintionName']) ? $data['reportDefintionName'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['supportedFormats'] = isset($data['supportedFormats']) ? $data['supportedFormats'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultSettings'] = isset($data['defaultSettings']) ? $data['defaultSettings'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets reportDefinitionId
     * @return int
     */
    public function getReportDefinitionId()
    {
        return $this->container['reportDefinitionId'];
    }

    /**
     * Sets reportDefinitionId
     * @param int $reportDefinitionId
     * @return $this
     */
    public function setReportDefinitionId($reportDefinitionId)
    {
        $this->container['reportDefinitionId'] = $reportDefinitionId;

        return $this;
    }

    /**
     * Gets reportDefintionName
     * @return string
     */
    public function getReportDefintionName()
    {
        return $this->container['reportDefintionName'];
    }

    /**
     * Sets reportDefintionName
     * @param string $reportDefintionName
     * @return $this
     */
    public function setReportDefintionName($reportDefintionName)
    {
        $this->container['reportDefintionName'] = $reportDefintionName;

        return $this;
    }

    /**
     * Gets attributes
     * @return \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseAttributes[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseAttributes[] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets supportedFormats
     * @return string[]
     */
    public function getSupportedFormats()
    {
        return $this->container['supportedFormats'];
    }

    /**
     * Sets supportedFormats
     * @param string[] $supportedFormats
     * @return $this
     */
    public function setSupportedFormats($supportedFormats)
    {
        $this->container['supportedFormats'] = $supportedFormats;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets defaultSettings
     * @return \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings
     */
    public function getDefaultSettings()
    {
        return $this->container['defaultSettings'];
    }

    /**
     * Sets defaultSettings
     * @param \Artizan\Cybersource\CybersourceSDK\Model\ReportingV3ReportDefinitionsNameGet200ResponseDefaultSettings $defaultSettings
     * @return $this
     */
    public function setDefaultSettings($defaultSettings)
    {
        $this->container['defaultSettings'] = $defaultSettings;

        return $this;
    }

    /**
     * Gets subscriptionType
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
     * Sets subscriptionType
     * @param string $subscriptionType 'The subscription type for which report definition is required. By default the type will be CUSTOM.' Valid Values: - 'CLASSIC' - 'CUSTOM' - 'STANDARD'
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;

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


