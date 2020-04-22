<?php
/**
 * PtsV2PaymentsPost201ResponseClientReferenceInformation
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
 * PtsV2PaymentsPost201ResponseClientReferenceInformation Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseClientReferenceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_clientReferenceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'submitLocalDateTime' => 'string',
        'ownerMerchantId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'submitLocalDateTime' => null,
        'ownerMerchantId' => null
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
        'code' => 'code',
        'submitLocalDateTime' => 'submitLocalDateTime',
        'ownerMerchantId' => 'ownerMerchantId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'submitLocalDateTime' => 'setSubmitLocalDateTime',
        'ownerMerchantId' => 'setOwnerMerchantId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'submitLocalDateTime' => 'getSubmitLocalDateTime',
        'ownerMerchantId' => 'getOwnerMerchantId'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['submitLocalDateTime'] = isset($data['submitLocalDateTime']) ? $data['submitLocalDateTime'] : null;
        $this->container['ownerMerchantId'] = isset($data['ownerMerchantId']) ? $data['ownerMerchantId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['code']) && (strlen($this->container['code']) > 50)) {
            $invalid_properties[] = "invalid value for 'code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['submitLocalDateTime']) && (strlen($this->container['submitLocalDateTime']) > 14)) {
            $invalid_properties[] = "invalid value for 'submitLocalDateTime', the character length must be smaller than or equal to 14.";
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

        if (strlen($this->container['code']) > 50) {
            return false;
        }
        if (strlen($this->container['submitLocalDateTime']) > 14) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Client-generated order reference or tracking number. Artizan\Cybersource\CybersourceSDK recommends that you send a unique value for each transaction so that you can perform meaningful searches for the transaction.  For information about tracking orders, see \"Tracking and Reconciling Your Orders\" in [Getting Started with Artizan\Cybersource\CybersourceSDK Advanced for the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/Getting_Started_SCMP/html/)  #### FDC Nashville Global Certain circumstances can cause the processor to truncate this value to 15 or 17 characters for Level II and Level III processing, which can cause a discrepancy between the value you submit and the value included in some processor reports.
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (strlen($code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $code when calling PtsV2PaymentsPost201ResponseClientReferenceInformation., must be smaller than or equal to 50.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets submitLocalDateTime
     * @return string
     */
    public function getSubmitLocalDateTime()
    {
        return $this->container['submitLocalDateTime'];
    }

    /**
     * Sets submitLocalDateTime
     * @param string $submitLocalDateTime Date and time at your physical location.  Format: `YYYYMMDDhhmmss`, where YYYY = year, MM = month, DD = day, hh = hour, mm = minutes ss = seconds
     * @return $this
     */
    public function setSubmitLocalDateTime($submitLocalDateTime)
    {
        if (!is_null($submitLocalDateTime) && (strlen($submitLocalDateTime) > 14)) {
            throw new \InvalidArgumentException('invalid length for $submitLocalDateTime when calling PtsV2PaymentsPost201ResponseClientReferenceInformation., must be smaller than or equal to 14.');
        }

        $this->container['submitLocalDateTime'] = $submitLocalDateTime;

        return $this;
    }

    /**
     * Gets ownerMerchantId
     * @return string
     */
    public function getOwnerMerchantId()
    {
        return $this->container['ownerMerchantId'];
    }

    /**
     * Sets ownerMerchantId
     * @param string $ownerMerchantId Merchant ID that was used to create the subscription or customer profile for which the service was requested.  If your Artizan\Cybersource\CybersourceSDK account is enabled for Recurring Billing, this field is returned only if you are using subscription sharing and if your merchant ID is in the same merchant ID pool as the owner merchant ID.  If your Artizan\Cybersource\CybersourceSDK account is enabled for Payment Tokenization, this field is returned only if you are using profile sharing and if your merchant ID is in the same merchant ID pool as the owner merchant ID.  For details about how this field is used for Recurring Billing or Payment Tokenization, see the `ecp_debit_owner_merchant_id` field description in the [Electronic Check Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/EChecks_SCMP_API/html/)
     * @return $this
     */
    public function setOwnerMerchantId($ownerMerchantId)
    {
        $this->container['ownerMerchantId'] = $ownerMerchantId;

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


