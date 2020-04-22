<?php
/**
 * Ptsv2payoutsSenderInformationAccount
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
 * Ptsv2payoutsSenderInformationAccount Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2payoutsSenderInformationAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payouts_senderInformation_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundsSource' => 'string',
        'number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundsSource' => null,
        'number' => null
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
        'fundsSource' => 'fundsSource',
        'number' => 'number'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fundsSource' => 'setFundsSource',
        'number' => 'setNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fundsSource' => 'getFundsSource',
        'number' => 'getNumber'
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
        $this->container['fundsSource'] = isset($data['fundsSource']) ? $data['fundsSource'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['fundsSource']) && (strlen($this->container['fundsSource']) > 2)) {
            $invalid_properties[] = "invalid value for 'fundsSource', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['fundsSource']) && (strlen($this->container['fundsSource']) < 2)) {
            $invalid_properties[] = "invalid value for 'fundsSource', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['number']) && (strlen($this->container['number']) > 34)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be smaller than or equal to 34.";
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

        if (strlen($this->container['fundsSource']) > 2) {
            return false;
        }
        if (strlen($this->container['fundsSource']) < 2) {
            return false;
        }
        if (strlen($this->container['number']) > 34) {
            return false;
        }
        return true;
    }


    /**
     * Gets fundsSource
     * @return string
     */
    public function getFundsSource()
    {
        return $this->container['fundsSource'];
    }

    /**
     * Sets fundsSource
     * @param string $fundsSource Source of funds. Possible values:    Paymentech, CTV, FDC Compass:  - 01: Credit card  - 02: Debit card  - 03: Prepaid card    Paymentech, CTV -  - 04: Cash  - 05: Debit or deposit account that is not linked to a Visa card. Includes checking accounts, savings        accounts, and proprietary debit or ATM cards.  - 06: Credit account that is not linked to a Visa card. Includes credit cards and proprietary lines        of credit.    FDCCompass -   - 04: Deposit Account  **Funds Disbursement**  This value is most likely 05 to identify that the originator used a deposit account to fund the disbursement.  **Credit Card Bill Payment**  This value must be 02, 03, 04, or 05.
     * @return $this
     */
    public function setFundsSource($fundsSource)
    {
        if (!is_null($fundsSource) && (strlen($fundsSource) > 2)) {
            throw new \InvalidArgumentException('invalid length for $fundsSource when calling Ptsv2payoutsSenderInformationAccount., must be smaller than or equal to 2.');
        }
        if (!is_null($fundsSource) && (strlen($fundsSource) < 2)) {
            throw new \InvalidArgumentException('invalid length for $fundsSource when calling Ptsv2payoutsSenderInformationAccount., must be bigger than or equal to 2.');
        }

        $this->container['fundsSource'] = $fundsSource;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number The account number of the entity funding the transaction. It is the sender’s account number. It can be a debit/credit card account number or bank account number.  **Funds disbursements**  This field is optional.  **All other transactions**  This field is required when the sender funds the transaction with a financial instrument, for example debit card. Length: * FDCCompass (<= 19) * Paymentech (<= 16)
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (strlen($number) > 34)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Ptsv2payoutsSenderInformationAccount., must be smaller than or equal to 34.');
        }

        $this->container['number'] = $number;

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


