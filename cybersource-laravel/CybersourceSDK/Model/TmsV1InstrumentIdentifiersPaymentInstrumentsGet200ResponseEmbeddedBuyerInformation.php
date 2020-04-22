<?php
/**
 * TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation
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
 * TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response__embedded_buyerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyTaxID' => 'string',
        'currency' => 'string',
        'dateOfBirth' => 'string',
        'personalIdentification' => '\Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformationPersonalIdentification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyTaxID' => null,
        'currency' => null,
        'dateOfBirth' => 'YYYY-MM-DD|YYYYMMDD',
        'personalIdentification' => null
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
        'companyTaxID' => 'companyTaxID',
        'currency' => 'currency',
        'dateOfBirth' => 'dateOfBirth',
        'personalIdentification' => 'personalIdentification'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'companyTaxID' => 'setCompanyTaxID',
        'currency' => 'setCurrency',
        'dateOfBirth' => 'setDateOfBirth',
        'personalIdentification' => 'setPersonalIdentification'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'companyTaxID' => 'getCompanyTaxID',
        'currency' => 'getCurrency',
        'dateOfBirth' => 'getDateOfBirth',
        'personalIdentification' => 'getPersonalIdentification'
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
        $this->container['companyTaxID'] = isset($data['companyTaxID']) ? $data['companyTaxID'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['personalIdentification'] = isset($data['personalIdentification']) ? $data['personalIdentification'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['companyTaxID']) && (strlen($this->container['companyTaxID']) > 9)) {
            $invalid_properties[] = "invalid value for 'companyTaxID', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalid_properties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) < 3)) {
            $invalid_properties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) > 10)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['dateOfBirth']) && (strlen($this->container['dateOfBirth']) < 8)) {
            $invalid_properties[] = "invalid value for 'dateOfBirth', the character length must be bigger than or equal to 8.";
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

        if (strlen($this->container['companyTaxID']) > 9) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['currency']) < 3) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) > 10) {
            return false;
        }
        if (strlen($this->container['dateOfBirth']) < 8) {
            return false;
        }
        return true;
    }


    /**
     * Gets companyTaxID
     * @return string
     */
    public function getCompanyTaxID()
    {
        return $this->container['companyTaxID'];
    }

    /**
     * Sets companyTaxID
     * @param string $companyTaxID Tax identifier for the customer’s company.  **Important**: Contact your TeleCheck representative to find out whether this field is required or optional.
     * @return $this
     */
    public function setCompanyTaxID($companyTaxID)
    {
        if (!is_null($companyTaxID) && (strlen($companyTaxID) > 9)) {
            throw new \InvalidArgumentException('invalid length for $companyTaxID when calling TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation., must be smaller than or equal to 9.');
        }

        $this->container['companyTaxID'] = $companyTaxID;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used by the customer. Accepts input in the ISO 4217 standard, stores as ISO 4217 Alpha.
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets dateOfBirth
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     * @param string $dateOfBirth Date of birth of the customer.  Format: `YYYY-MM-DD` or `YYYYMMDD`
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) > 10)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation., must be smaller than or equal to 10.');
        }
        if (!is_null($dateOfBirth) && (strlen($dateOfBirth) < 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformation., must be bigger than or equal to 8.');
        }

        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets personalIdentification
     * @return \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformationPersonalIdentification[]
     */
    public function getPersonalIdentification()
    {
        return $this->container['personalIdentification'];
    }

    /**
     * Sets personalIdentification
     * @param \Artizan\Cybersource\CybersourceSDK\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200ResponseEmbeddedBuyerInformationPersonalIdentification[] $personalIdentification
     * @return $this
     */
    public function setPersonalIdentification($personalIdentification)
    {
        $this->container['personalIdentification'] = $personalIdentification;

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


