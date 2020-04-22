<?php
/**
 * Riskv1exportcomplianceinquiriesExportComplianceInformation
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
 * Riskv1exportcomplianceinquiriesExportComplianceInformation Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1exportcomplianceinquiriesExportComplianceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1exportcomplianceinquiries_exportComplianceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addressOperator' => 'string',
        'weights' => '\Artizan\Cybersource\CybersourceSDK\Model\Riskv1exportcomplianceinquiriesExportComplianceInformationWeights',
        'sanctionLists' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addressOperator' => null,
        'weights' => null,
        'sanctionLists' => null
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
        'addressOperator' => 'addressOperator',
        'weights' => 'weights',
        'sanctionLists' => 'sanctionLists'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'addressOperator' => 'setAddressOperator',
        'weights' => 'setWeights',
        'sanctionLists' => 'setSanctionLists'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'addressOperator' => 'getAddressOperator',
        'weights' => 'getWeights',
        'sanctionLists' => 'getSanctionLists'
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
        $this->container['addressOperator'] = isset($data['addressOperator']) ? $data['addressOperator'] : null;
        $this->container['weights'] = isset($data['weights']) ? $data['weights'] : null;
        $this->container['sanctionLists'] = isset($data['sanctionLists']) ? $data['sanctionLists'] : null;
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
     * Gets addressOperator
     * @return string
     */
    public function getAddressOperator()
    {
        return $this->container['addressOperator'];
    }

    /**
     * Sets addressOperator
     * @param string $addressOperator Parts of the customer’s information that must match with an entry in the DPL (denied parties list) before a match occurs. This field can contain one of the following values: - AND: (default) The customer’s name or company and the customer’s address must appear in the database. - OR: The customer’s name must appear in the database. - IGNORE: You want the service to detect a match only of the customer’s name or company but not of the address.
     * @return $this
     */
    public function setAddressOperator($addressOperator)
    {
        $this->container['addressOperator'] = $addressOperator;

        return $this;
    }

    /**
     * Gets weights
     * @return \Artizan\Cybersource\CybersourceSDK\Model\Riskv1exportcomplianceinquiriesExportComplianceInformationWeights
     */
    public function getWeights()
    {
        return $this->container['weights'];
    }

    /**
     * Sets weights
     * @param \Artizan\Cybersource\CybersourceSDK\Model\Riskv1exportcomplianceinquiriesExportComplianceInformationWeights $weights
     * @return $this
     */
    public function setWeights($weights)
    {
        $this->container['weights'] = $weights;

        return $this;
    }

    /**
     * Gets sanctionLists
     * @return string[]
     */
    public function getSanctionLists()
    {
        return $this->container['sanctionLists'];
    }

    /**
     * Sets sanctionLists
     * @param string[] $sanctionLists Use this field to specify which list(s) you want checked with the request. The reply will include the list name as well as the response data. To check against multiple lists, enter multiple list codes separated by a caret (^). For more information, see \"Restricted and Denied Parties List,\" page 68.
     * @return $this
     */
    public function setSanctionLists($sanctionLists)
    {
        $this->container['sanctionLists'] = $sanctionLists;

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


