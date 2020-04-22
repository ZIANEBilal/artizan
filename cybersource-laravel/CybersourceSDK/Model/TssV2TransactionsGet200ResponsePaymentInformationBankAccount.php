<?php
/**
 * TssV2TransactionsGet200ResponsePaymentInformationBankAccount
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
 * TssV2TransactionsGet200ResponsePaymentInformationBankAccount Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePaymentInformationBankAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_paymentInformation_bank_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'suffix' => 'string',
        'prefix' => 'string',
        'checkNumber' => 'string',
        'type' => 'string',
        'name' => 'string',
        'checkDigit' => 'string',
        'encoderId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'suffix' => null,
        'prefix' => null,
        'checkNumber' => null,
        'type' => null,
        'name' => null,
        'checkDigit' => null,
        'encoderId' => null
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
        'suffix' => 'suffix',
        'prefix' => 'prefix',
        'checkNumber' => 'checkNumber',
        'type' => 'type',
        'name' => 'name',
        'checkDigit' => 'checkDigit',
        'encoderId' => 'encoderId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'suffix' => 'setSuffix',
        'prefix' => 'setPrefix',
        'checkNumber' => 'setCheckNumber',
        'type' => 'setType',
        'name' => 'setName',
        'checkDigit' => 'setCheckDigit',
        'encoderId' => 'setEncoderId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'suffix' => 'getSuffix',
        'prefix' => 'getPrefix',
        'checkNumber' => 'getCheckNumber',
        'type' => 'getType',
        'name' => 'getName',
        'checkDigit' => 'getCheckDigit',
        'encoderId' => 'getEncoderId'
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
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['checkNumber'] = isset($data['checkNumber']) ? $data['checkNumber'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['checkDigit'] = isset($data['checkDigit']) ? $data['checkDigit'] : null;
        $this->container['encoderId'] = isset($data['encoderId']) ? $data['encoderId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['checkNumber']) && (strlen($this->container['checkNumber']) > 8)) {
            $invalid_properties[] = "invalid value for 'checkNumber', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['type']) && (strlen($this->container['type']) > 1)) {
            $invalid_properties[] = "invalid value for 'type', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['encoderId']) && (strlen($this->container['encoderId']) > 3)) {
            $invalid_properties[] = "invalid value for 'encoderId', the character length must be smaller than or equal to 3.";
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

        if (strlen($this->container['checkNumber']) > 8) {
            return false;
        }
        if (strlen($this->container['type']) > 1) {
            return false;
        }
        if (strlen($this->container['encoderId']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix Last four digits of the customer’s payment account number.
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix Bank Identification Number (BIN). This is the initial four to six numbers on a credit card account number.
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets checkNumber
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->container['checkNumber'];
    }

    /**
     * Sets checkNumber
     * @param string $checkNumber Check number.  Chase Paymentech Solutions - Optional. Artizan\Cybersource\CybersourceSDK ACH Service - Not used. RBS WorldPay Atlanta - Optional on debits. Required on credits. TeleCheck - Strongly recommended on debit requests. Optional on credits.
     * @return $this
     */
    public function setCheckNumber($checkNumber)
    {
        if (!is_null($checkNumber) && (strlen($checkNumber) > 8)) {
            throw new \InvalidArgumentException('invalid length for $checkNumber when calling TssV2TransactionsGet200ResponsePaymentInformationBankAccount., must be smaller than or equal to 8.');
        }

        $this->container['checkNumber'] = $checkNumber;

        return $this;
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
     * @param string $type Account type.  Possible values:  - **C**: Checking.  - **G**: General ledger. This value is supported only on Wells Fargo ACH.  - **S**: Savings (U.S. dollars only).  - **X**: Corporate checking (U.S. dollars only).
     * @return $this
     */
    public function setType($type)
    {
        if (!is_null($type) && (strlen($type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $type when calling TssV2TransactionsGet200ResponsePaymentInformationBankAccount., must be smaller than or equal to 1.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name used on the bank account. You can use this field only when scoring a direct debit transaction
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets checkDigit
     * @return string
     */
    public function getCheckDigit()
    {
        return $this->container['checkDigit'];
    }

    /**
     * Sets checkDigit
     * @param string $checkDigit Code used to validate the customer’s account number. Required for some countries if you do not or are not allowed to provide the IBAN instead. You may use this field only when scoring a direct debit transaction.  For all possible values, see the `bank_check_digit` field description in the _Decision Manager Using the SCMP API Developer Guide_ on the [Artizan\Cybersource\CybersourceSDK Business Center.](https://ebc2.cybersource.com/ebc2/) Click **Decision Manager** > **Documentation** > **Guides** > _Decision Manager Using the SCMP API Developer Guide_ (PDF link).
     * @return $this
     */
    public function setCheckDigit($checkDigit)
    {
        $this->container['checkDigit'] = $checkDigit;

        return $this;
    }

    /**
     * Gets encoderId
     * @return string
     */
    public function getEncoderId()
    {
        return $this->container['encoderId'];
    }

    /**
     * Sets encoderId
     * @param string $encoderId Identifier for the bank that provided the customer’s encoded account number.  To obtain the bank identifier, contact your processor.  For details, see `account_encoder_id` request-level field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setEncoderId($encoderId)
    {
        if (!is_null($encoderId) && (strlen($encoderId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $encoderId when calling TssV2TransactionsGet200ResponsePaymentInformationBankAccount., must be smaller than or equal to 3.');
        }

        $this->container['encoderId'] = $encoderId;

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


