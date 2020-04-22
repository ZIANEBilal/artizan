<?php
/**
 * Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction
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
 * Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation_authorizationOptions_initiator_merchantInitiatedTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reason' => 'string',
        'previousTransactionId' => 'string',
        'originalAuthorizedAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reason' => null,
        'previousTransactionId' => null,
        'originalAuthorizedAmount' => null
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
        'reason' => 'reason',
        'previousTransactionId' => 'previousTransactionId',
        'originalAuthorizedAmount' => 'originalAuthorizedAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'previousTransactionId' => 'setPreviousTransactionId',
        'originalAuthorizedAmount' => 'setOriginalAuthorizedAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'previousTransactionId' => 'getPreviousTransactionId',
        'originalAuthorizedAmount' => 'getOriginalAuthorizedAmount'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['previousTransactionId'] = isset($data['previousTransactionId']) ? $data['previousTransactionId'] : null;
        $this->container['originalAuthorizedAmount'] = isset($data['originalAuthorizedAmount']) ? $data['originalAuthorizedAmount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['reason']) && (strlen($this->container['reason']) > 1)) {
            $invalid_properties[] = "invalid value for 'reason', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['previousTransactionId']) && (strlen($this->container['previousTransactionId']) > 15)) {
            $invalid_properties[] = "invalid value for 'previousTransactionId', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['originalAuthorizedAmount']) && (strlen($this->container['originalAuthorizedAmount']) > 61)) {
            $invalid_properties[] = "invalid value for 'originalAuthorizedAmount', the character length must be smaller than or equal to 61.";
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

        if (strlen($this->container['reason']) > 1) {
            return false;
        }
        if (strlen($this->container['previousTransactionId']) > 15) {
            return false;
        }
        if (strlen($this->container['originalAuthorizedAmount']) > 61) {
            return false;
        }
        return true;
    }


    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason Reason for the merchant-initiated transaction or incremental authorization. Possible values: - `1`: Resubmission - `2`: Delayed charge - `3`: Reauthorization for split shipment - `4`: No show - `5`: Account top up This field is required only for the five kinds of transactions in the preceding list. This field is supported only for merchant-initiated transactions and incremental authorizations.  #### Artizan\Cybersource\CybersourceSDK through VisaNet The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR0 - Position: 160-163 - Field: Message Reason Code  #### All Processors For details, see `subsequent_auth_reason` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (strlen($reason) > 1)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction., must be smaller than or equal to 1.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets previousTransactionId
     * @return string
     */
    public function getPreviousTransactionId()
    {
        return $this->container['previousTransactionId'];
    }

    /**
     * Sets previousTransactionId
     * @param string $previousTransactionId Network transaction identifier that was returned in the payment response field _processorInformation.transactionID_ in the reply message for either the original merchant-initiated payment in the series or the previous merchant-initiated payment in the series.  If the current payment request includes a token instead of an account number, the following time limits apply for the value of this field: - For a **resubmission**, the transaction ID must be less than 14 days old. - For a **delayed charge** or **reauthorization**, the transaction ID must be less than 30 days old.  **NOTE**: The value for this field does not correspond to any data in the TC 33 capture file5. This field is supported only for Visa transactions on Artizan\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setPreviousTransactionId($previousTransactionId)
    {
        if (!is_null($previousTransactionId) && (strlen($previousTransactionId) > 15)) {
            throw new \InvalidArgumentException('invalid length for $previousTransactionId when calling Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction., must be smaller than or equal to 15.');
        }

        $this->container['previousTransactionId'] = $previousTransactionId;

        return $this;
    }

    /**
     * Gets originalAuthorizedAmount
     * @return string
     */
    public function getOriginalAuthorizedAmount()
    {
        return $this->container['originalAuthorizedAmount'];
    }

    /**
     * Sets originalAuthorizedAmount
     * @param string $originalAuthorizedAmount Amount of the original authorization.  This field is supported only for Apple Pay, Google Pay, and Samsung Pay transactions with Discover on FDC Nashville Global and Chase Paymentech.  See \"Recurring Payments,\" and \"Subsequent Authorizations,\" field description in the [Payment Network Tokenization Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/tokenization_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setOriginalAuthorizedAmount($originalAuthorizedAmount)
    {
        if (!is_null($originalAuthorizedAmount) && (strlen($originalAuthorizedAmount) > 61)) {
            throw new \InvalidArgumentException('invalid length for $originalAuthorizedAmount when calling Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction., must be smaller than or equal to 61.');
        }

        $this->container['originalAuthorizedAmount'] = $originalAuthorizedAmount;

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


