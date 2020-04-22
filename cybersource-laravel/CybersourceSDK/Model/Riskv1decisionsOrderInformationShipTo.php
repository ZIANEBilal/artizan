<?php
/**
 * Riskv1decisionsOrderInformationShipTo
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
 * Riskv1decisionsOrderInformationShipTo Class Doc Comment
 *
 * @category    Class
 * @description Contains recipient shipping information.
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsOrderInformationShipTo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_orderInformation_shipTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'administrativeArea' => 'string',
        'country' => 'string',
        'locality' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'phoneNumber' => 'string',
        'postalCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'administrativeArea' => null,
        'country' => null,
        'locality' => null,
        'firstName' => null,
        'lastName' => null,
        'phoneNumber' => null,
        'postalCode' => null
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
        'address1' => 'address1',
        'address2' => 'address2',
        'administrativeArea' => 'administrativeArea',
        'country' => 'country',
        'locality' => 'locality',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'phoneNumber' => 'phoneNumber',
        'postalCode' => 'postalCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'administrativeArea' => 'setAdministrativeArea',
        'country' => 'setCountry',
        'locality' => 'setLocality',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'phoneNumber' => 'setPhoneNumber',
        'postalCode' => 'setPostalCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'administrativeArea' => 'getAdministrativeArea',
        'country' => 'getCountry',
        'locality' => 'getLocality',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'phoneNumber' => 'getPhoneNumber',
        'postalCode' => 'getPostalCode'
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
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 60)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 60)) {
            $invalid_properties[] = "invalid value for 'address2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 2)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 2)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 50)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 60)) {
            $invalid_properties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) > 60)) {
            $invalid_properties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['phoneNumber']) && (strlen($this->container['phoneNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
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

        if (strlen($this->container['address1']) > 60) {
            return false;
        }
        if (strlen($this->container['address2']) > 60) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 2) {
            return false;
        }
        if (strlen($this->container['country']) > 2) {
            return false;
        }
        if (strlen($this->container['locality']) > 50) {
            return false;
        }
        if (strlen($this->container['firstName']) > 60) {
            return false;
        }
        if (strlen($this->container['lastName']) > 60) {
            return false;
        }
        if (strlen($this->container['phoneNumber']) > 15) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 First line of the shipping address.
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Second line of the shipping address.
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (strlen($address2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea State or province of the shipping address. Use the State, Province, and Territory Codes for the United States and Canada.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 2)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 2.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country of the shipping address. Use the two-character ISO Standard Country Codes.
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality City of the shipping address.
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 50)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 50.');
        }

        $this->container['locality'] = $locality;

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
     * @param string $firstName First name of the recipient.  **Processor specific maximum length**  - Litle: 25 - All other processors: 60
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

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
     * @param string $lastName Last name of the recipient.  **Processor-specific maximum length**  - Litle: 25 - All other processors: 60
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!is_null($lastName) && (strlen($lastName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 60.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Phone number associated with the shipping address.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (strlen($phoneNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 15.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Postal code for the shipping address. The postal code must consist of 5 to 9 digits.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  Example 12345-6789  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  Example A1B 2C3  **American Express Direct**\\ Before sending the postal code to the processor, Artizan\Cybersource\CybersourceSDK removes all nonalphanumeric characters and, if the remaining value is longer than nine characters, truncates the value starting from the right side.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Riskv1decisionsOrderInformationShipTo., must be smaller than or equal to 10.');
        }

        $this->container['postalCode'] = $postalCode;

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


