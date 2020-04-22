<?php
/**
 * Riskv1authenticationexemptionsPaymentInformationFluidData
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
 * Riskv1authenticationexemptionsPaymentInformationFluidData Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationexemptionsPaymentInformationFluidData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authenticationexemptions_paymentInformation_fluidData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'string',
        'keySerialNumber' => 'string',
        'descriptor' => 'string',
        'encoding' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => null,
        'keySerialNumber' => null,
        'descriptor' => null,
        'encoding' => null
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
        'value' => 'value',
        'keySerialNumber' => 'keySerialNumber',
        'descriptor' => 'descriptor',
        'encoding' => 'encoding'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'keySerialNumber' => 'setKeySerialNumber',
        'descriptor' => 'setDescriptor',
        'encoding' => 'setEncoding'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'keySerialNumber' => 'getKeySerialNumber',
        'descriptor' => 'getDescriptor',
        'encoding' => 'getEncoding'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['keySerialNumber'] = isset($data['keySerialNumber']) ? $data['keySerialNumber'] : null;
        $this->container['descriptor'] = isset($data['descriptor']) ? $data['descriptor'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ((strlen($this->container['value']) > 3072)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 3072.";
        }

        if (!is_null($this->container['descriptor']) && (strlen($this->container['descriptor']) > 128)) {
            $invalid_properties[] = "invalid value for 'descriptor', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['encoding']) && (strlen($this->container['encoding']) > 6)) {
            $invalid_properties[] = "invalid value for 'encoding', the character length must be smaller than or equal to 6.";
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

        if ($this->container['value'] === null) {
            return false;
        }
        if (strlen($this->container['value']) > 3072) {
            return false;
        }
        if (strlen($this->container['descriptor']) > 128) {
            return false;
        }
        if (strlen($this->container['encoding']) > 6) {
            return false;
        }
        return true;
    }


    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value Represents the encrypted payment data BLOB. The entry for this field is dependent on the payment solution a merchant uses.  For details, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html) for the specific payment- solution entry.
     * @return $this
     */
    public function setValue($value)
    {
        if ((strlen($value) > 3072)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Riskv1authenticationexemptionsPaymentInformationFluidData., must be smaller than or equal to 3072.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets keySerialNumber
     * @return string
     */
    public function getKeySerialNumber()
    {
        return $this->container['keySerialNumber'];
    }

    /**
     * Sets keySerialNumber
     * @param string $keySerialNumber The encoded or encrypted value that a payment solution returns for an authorization request. For details about the valid values for a key, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html)
     * @return $this
     */
    public function setKeySerialNumber($keySerialNumber)
    {
        $this->container['keySerialNumber'] = $keySerialNumber;

        return $this;
    }

    /**
     * Gets descriptor
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     * @param string $descriptor The identifier for a payment solution, which is sending the encrypted payment data to Artizan\Cybersource\CybersourceSDK for decryption. Valid values: - Samsung Pay: `RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ=` **NOTE**: For other payment solutions, the value may be specific to the customer's mobile device. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor.  For details about the list of payment solution identifiers, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html).  For details about the encrypted payment data, see the `encrypted_payment_descriptor` field description in the [Card-Present Processing Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/Retail_SCMP_API/html/).
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        if (!is_null($descriptor) && (strlen($descriptor) > 128)) {
            throw new \InvalidArgumentException('invalid length for $descriptor when calling Riskv1authenticationexemptionsPaymentInformationFluidData., must be smaller than or equal to 128.');
        }

        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets encoding
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     * @param string $encoding Encoding method used to encrypt the payment data.  Valid value: Base64
     * @return $this
     */
    public function setEncoding($encoding)
    {
        if (!is_null($encoding) && (strlen($encoding) > 6)) {
            throw new \InvalidArgumentException('invalid length for $encoding when calling Riskv1authenticationexemptionsPaymentInformationFluidData., must be smaller than or equal to 6.');
        }

        $this->container['encoding'] = $encoding;

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


