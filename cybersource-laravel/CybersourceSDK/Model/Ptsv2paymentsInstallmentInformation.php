<?php
/**
 * Ptsv2paymentsInstallmentInformation
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
 * Ptsv2paymentsInstallmentInformation Class Doc Comment
 *
 * @category    Class
 * @package     Artizan\Cybersource\CybersourceSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsInstallmentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_installmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'string',
        'frequency' => 'string',
        'planType' => 'string',
        'sequence' => 'int',
        'totalAmount' => 'string',
        'totalCount' => 'int',
        'firstInstallmentDate' => 'string',
        'invoiceData' => 'string',
        'paymentType' => 'string',
        'eligibilityInquiry' => 'string',
        'gracePeriodDuration' => 'string',
        'gracePeriodDurationType' => 'string',
        'firstInstallmentAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'frequency' => null,
        'planType' => null,
        'sequence' => null,
        'totalAmount' => null,
        'totalCount' => null,
        'firstInstallmentDate' => null,
        'invoiceData' => null,
        'paymentType' => null,
        'eligibilityInquiry' => null,
        'gracePeriodDuration' => null,
        'gracePeriodDurationType' => null,
        'firstInstallmentAmount' => null
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
        'amount' => 'amount',
        'frequency' => 'frequency',
        'planType' => 'planType',
        'sequence' => 'sequence',
        'totalAmount' => 'totalAmount',
        'totalCount' => 'totalCount',
        'firstInstallmentDate' => 'firstInstallmentDate',
        'invoiceData' => 'invoiceData',
        'paymentType' => 'paymentType',
        'eligibilityInquiry' => 'eligibilityInquiry',
        'gracePeriodDuration' => 'gracePeriodDuration',
        'gracePeriodDurationType' => 'gracePeriodDurationType',
        'firstInstallmentAmount' => 'firstInstallmentAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'frequency' => 'setFrequency',
        'planType' => 'setPlanType',
        'sequence' => 'setSequence',
        'totalAmount' => 'setTotalAmount',
        'totalCount' => 'setTotalCount',
        'firstInstallmentDate' => 'setFirstInstallmentDate',
        'invoiceData' => 'setInvoiceData',
        'paymentType' => 'setPaymentType',
        'eligibilityInquiry' => 'setEligibilityInquiry',
        'gracePeriodDuration' => 'setGracePeriodDuration',
        'gracePeriodDurationType' => 'setGracePeriodDurationType',
        'firstInstallmentAmount' => 'setFirstInstallmentAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'frequency' => 'getFrequency',
        'planType' => 'getPlanType',
        'sequence' => 'getSequence',
        'totalAmount' => 'getTotalAmount',
        'totalCount' => 'getTotalCount',
        'firstInstallmentDate' => 'getFirstInstallmentDate',
        'invoiceData' => 'getInvoiceData',
        'paymentType' => 'getPaymentType',
        'eligibilityInquiry' => 'getEligibilityInquiry',
        'gracePeriodDuration' => 'getGracePeriodDuration',
        'gracePeriodDurationType' => 'getGracePeriodDurationType',
        'firstInstallmentAmount' => 'getFirstInstallmentAmount'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['planType'] = isset($data['planType']) ? $data['planType'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['firstInstallmentDate'] = isset($data['firstInstallmentDate']) ? $data['firstInstallmentDate'] : null;
        $this->container['invoiceData'] = isset($data['invoiceData']) ? $data['invoiceData'] : null;
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['eligibilityInquiry'] = isset($data['eligibilityInquiry']) ? $data['eligibilityInquiry'] : null;
        $this->container['gracePeriodDuration'] = isset($data['gracePeriodDuration']) ? $data['gracePeriodDuration'] : null;
        $this->container['gracePeriodDurationType'] = isset($data['gracePeriodDurationType']) ? $data['gracePeriodDurationType'] : null;
        $this->container['firstInstallmentAmount'] = isset($data['firstInstallmentAmount']) ? $data['firstInstallmentAmount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['amount']) && (strlen($this->container['amount']) > 12)) {
            $invalid_properties[] = "invalid value for 'amount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['frequency']) && (strlen($this->container['frequency']) > 1)) {
            $invalid_properties[] = "invalid value for 'frequency', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['planType']) && (strlen($this->container['planType']) > 1)) {
            $invalid_properties[] = "invalid value for 'planType', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['sequence']) && ($this->container['sequence'] > 99)) {
            $invalid_properties[] = "invalid value for 'sequence', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['totalAmount']) && (strlen($this->container['totalAmount']) > 12)) {
            $invalid_properties[] = "invalid value for 'totalAmount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 99)) {
            $invalid_properties[] = "invalid value for 'totalCount', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['firstInstallmentDate']) && (strlen($this->container['firstInstallmentDate']) > 6)) {
            $invalid_properties[] = "invalid value for 'firstInstallmentDate', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['invoiceData']) && (strlen($this->container['invoiceData']) > 20)) {
            $invalid_properties[] = "invalid value for 'invoiceData', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['paymentType']) && (strlen($this->container['paymentType']) > 1)) {
            $invalid_properties[] = "invalid value for 'paymentType', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['eligibilityInquiry']) && (strlen($this->container['eligibilityInquiry']) > 9)) {
            $invalid_properties[] = "invalid value for 'eligibilityInquiry', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['gracePeriodDurationType']) && (strlen($this->container['gracePeriodDurationType']) > 1)) {
            $invalid_properties[] = "invalid value for 'gracePeriodDurationType', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['firstInstallmentAmount']) && (strlen($this->container['firstInstallmentAmount']) > 13)) {
            $invalid_properties[] = "invalid value for 'firstInstallmentAmount', the character length must be smaller than or equal to 13.";
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

        if (strlen($this->container['amount']) > 12) {
            return false;
        }
        if (strlen($this->container['frequency']) > 1) {
            return false;
        }
        if (strlen($this->container['planType']) > 1) {
            return false;
        }
        if ($this->container['sequence'] > 99) {
            return false;
        }
        if (strlen($this->container['totalAmount']) > 12) {
            return false;
        }
        if ($this->container['totalCount'] > 99) {
            return false;
        }
        if (strlen($this->container['firstInstallmentDate']) > 6) {
            return false;
        }
        if (strlen($this->container['invoiceData']) > 20) {
            return false;
        }
        if (strlen($this->container['paymentType']) > 1) {
            return false;
        }
        if (strlen($this->container['eligibilityInquiry']) > 9) {
            return false;
        }
        if (strlen($this->container['gracePeriodDurationType']) > 1) {
            return false;
        }
        if (strlen($this->container['firstInstallmentAmount']) > 13) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount Amount for the current installment payment.  This field is supported only for Artizan\Cybersource\CybersourceSDK through VisaNet.  For details, see `installment_amount` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setAmount($amount)
    {
        if (!is_null($amount) && (strlen($amount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $amount when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 12.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets frequency
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     * @param string $frequency Frequency of the installment payments. When you do not include this field in a request for a Crediario installment payment, Artizan\Cybersource\CybersourceSDK sends a space character to the processor.  For details, see `installment_frequency` field description in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  This field is supported only for Artizan\Cybersource\CybersourceSDK through VisaNet. Possible values: - `B`: Biweekly - `M`: Monthly - `W`: Weekly  For Crediario installment payments, the value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR9 - Position: 41 - Field: Installment Frequency  For details, see \"Installment Payments\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setFrequency($frequency)
    {
        if (!is_null($frequency) && (strlen($frequency) > 1)) {
            throw new \InvalidArgumentException('invalid length for $frequency when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 1.');
        }

        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets planType
     * @return string
     */
    public function getPlanType()
    {
        return $this->container['planType'];
    }

    /**
     * Sets planType
     * @param string $planType #### American Express Direct, Cielo, and Artizan\Cybersource\CybersourceSDK Latin American Processing Flag that indicates the type of funding for the installment plan associated with the payment.  Possible values: - `1`: Merchant-funded installment plan - `2`: Issuer-funded installment plan If you do not include this field in the request, Artizan\Cybersource\CybersourceSDK uses the value in your Artizan\Cybersource\CybersourceSDK account.  To change the value in your Artizan\Cybersource\CybersourceSDK account, contact Artizan\Cybersource\CybersourceSDK Customer Service. For details, see `installment_plan_type` field description in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Artizan\Cybersource\CybersourceSDK through VisaNet and American Express Defined code that indicates the type of installment plan for this transaction.  Contact American Express for: - Information about the kinds of installment plans that American Express provides - Values for this field  For installment payments with American Express in Brazil, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP07 TCR3 - Position: 5-6 - Field: Plan Type  * The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to Artizan\Cybersource\CybersourceSDK. Artizan\Cybersource\CybersourceSDK through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant’s acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.  #### Artizan\Cybersource\CybersourceSDK through VisaNet with Visa or Mastercard Flag indicating the type of funding for the installment plan associated with the payment. Possible values: - 1 or 01: Merchant-funded installment plan - 2 or 02: Issuer-funded installment plan - 43: Crediario installment plan—only with Visa in Brazil For details, see \"Installment Payments on Artizan\Cybersource\CybersourceSDK through VisaNet\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  For installment payments with Visa in Brazil, the value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR1 - Position: 5-6 - Field: Installment Type  For all other kinds of installment payments, the value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR5 - Position: 39-40 - Field: Installment Plan Type (Issuer or Merchant)
     * @return $this
     */
    public function setPlanType($planType)
    {
        if (!is_null($planType) && (strlen($planType) > 1)) {
            throw new \InvalidArgumentException('invalid length for $planType when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 1.');
        }

        $this->container['planType'] = $planType;

        return $this;
    }

    /**
     * Gets sequence
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     * @param int $sequence Installment number when making payments in installments. Used along with `totalCount` to track which payment is being processed.  For example, the second of 5 payments would be passed to Artizan\Cybersource\CybersourceSDK as `sequence` = 2 and `totalCount` = 5.  For details, see \"Installment Payments\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Chase Paymentech Solutions and FDC Compass This field is optional because this value is required in the merchant descriptors. For details, see \"Chase Paymentech Solutions Merchant Descriptors\" and \"FDC Compass Merchant Descriptors\" in the [Merchant Descriptors Using the SCMP API] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### Artizan\Cybersource\CybersourceSDK through VisaNet When you do not include this field in a request for a Crediario installment payment, Artizan\Cybersource\CybersourceSDK sends a value of 0 to the processor.  For Crediario installment payments, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP01 TCR9 - Position: 38-40 - Field: Installment Payment Number  * The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to Artizan\Cybersource\CybersourceSDK. Artizan\Cybersource\CybersourceSDK through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant’s acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.
     * @return $this
     */
    public function setSequence($sequence)
    {

        if (!is_null($sequence) && ($sequence > 99)) {
            throw new \InvalidArgumentException('invalid value for $sequence when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 99.');
        }

        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Total amount of the loan that is being paid in installments. This field is supported only for Artizan\Cybersource\CybersourceSDK through VisaNet.  For details, see \"Installment Payments\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        if (!is_null($totalAmount) && (strlen($totalAmount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $totalAmount when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 12.');
        }

        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets totalCount
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     * @param int $totalCount Total number of installments when making payments in installments.  For details, see \"Installment Payments\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Chase Paymentech Solutions and FDC Compass This field is optional because this value is required in the merchant descriptors.  For details, see \"Chase Paymentech Solutions Merchant Descriptors\" and \"FDC Compass Merchant Descriptors\" in the [Merchant Descriptors Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### American Express Direct, Cielo, and Comercio Latino This value is the total number of installments you approved.  #### Artizan\Cybersource\CybersourceSDK Latin American Processing in Brazil This value is the total number of installments that you approved. The default is 1.  #### All Other Processors This value is used along with _sequence_ to track which payment is being processed.  For example, the second of 5 payments would be passed to Artizan\Cybersource\CybersourceSDK as _sequence_ = 2 and _totalCount_ = 5.  #### Artizan\Cybersource\CybersourceSDK through VisaNet For Crediario installment payments, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP01 TCR9 - Position: 23-25 - Field: Number of Installments  For installment payments with American Express in Brazil, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP07 TCR3 - Position: 7-8 - Field: Number of Installments  For installment payments with Visa in Brazil, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP07 TCR1 - Position: 7-8 - Field: Number of Installments  For all other kinds of installment payments, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP01 TCR5 - Position: 20-22 - Field: Installment Total Count  **Note** The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to Artizan\Cybersource\CybersourceSDK. Artizan\Cybersource\CybersourceSDK through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant’s acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.
     * @return $this
     */
    public function setTotalCount($totalCount)
    {

        if (!is_null($totalCount) && ($totalCount > 99)) {
            throw new \InvalidArgumentException('invalid value for $totalCount when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 99.');
        }

        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets firstInstallmentDate
     * @return string
     */
    public function getFirstInstallmentDate()
    {
        return $this->container['firstInstallmentDate'];
    }

    /**
     * Sets firstInstallmentDate
     * @param string $firstInstallmentDate Date of the first installment payment. Format: YYMMDD. When you do not include this field, Artizan\Cybersource\CybersourceSDK sends a string of six zeros (000000) to the processor. For details, see \"Installment Payments on Artizan\Cybersource\CybersourceSDK through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  This field is supported only for Crediario installment payments in Brazil on Artizan\Cybersource\CybersourceSDK through VisaNet.  The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR9 - Position: 42-47 - Field: Date of First Installment
     * @return $this
     */
    public function setFirstInstallmentDate($firstInstallmentDate)
    {
        if (!is_null($firstInstallmentDate) && (strlen($firstInstallmentDate) > 6)) {
            throw new \InvalidArgumentException('invalid length for $firstInstallmentDate when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 6.');
        }

        $this->container['firstInstallmentDate'] = $firstInstallmentDate;

        return $this;
    }

    /**
     * Gets invoiceData
     * @return string
     */
    public function getInvoiceData()
    {
        return $this->container['invoiceData'];
    }

    /**
     * Sets invoiceData
     * @param string $invoiceData Invoice information that you want to provide to the issuer. This value is similar to a tracking number and is the same for all installment payments for one purchase.  This field is supported only for installment payments with Mastercard on Artizan\Cybersource\CybersourceSDK through VisaNet in Brazil.  For details, see \"Installment Payments on Artizan\Cybersource\CybersourceSDK through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR4 - Position: 51-70 - Field: Purchase Identification
     * @return $this
     */
    public function setInvoiceData($invoiceData)
    {
        if (!is_null($invoiceData) && (strlen($invoiceData) > 20)) {
            throw new \InvalidArgumentException('invalid length for $invoiceData when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 20.');
        }

        $this->container['invoiceData'] = $invoiceData;

        return $this;
    }

    /**
     * Gets paymentType
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param string $paymentType Payment plan for the installments.  Possible values: - 0 (default): Regular installment. This value is not allowed for airline transactions. - 1: Installment payment with down payment. - 2: Installment payment without down payment. This value is supported only for airline transactions. - 3: Installment payment; down payment and boarding fee will follow. This value is supported only for airline transactions. - 4: Down payment only; regular installment payment will follow. - 5: Boarding fee only. This value is supported only for airline transactions.  This field is supported only for installment payments with Visa on Artizan\Cybersource\CybersourceSDK through VisaNet in Brazil.  For details, see \"Installment Payments on Artizan\Cybersource\CybersourceSDK through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR1 - Position: 9 - Field: Merchant Installment Supporting Information
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        if (!is_null($paymentType) && (strlen($paymentType) > 1)) {
            throw new \InvalidArgumentException('invalid length for $paymentType when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 1.');
        }

        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets eligibilityInquiry
     * @return string
     */
    public function getEligibilityInquiry()
    {
        return $this->container['eligibilityInquiry'];
    }

    /**
     * Sets eligibilityInquiry
     * @param string $eligibilityInquiry Indicates whether the authorization request is a Crediario eligibility inquiry.  For details, see \"Installment Payments on Artizan\Cybersource\CybersourceSDK through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  Set the value for this field to `Crediario`.  This field is supported only for Crediario installment payments in Brazil on Artizan\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setEligibilityInquiry($eligibilityInquiry)
    {
        if (!is_null($eligibilityInquiry) && (strlen($eligibilityInquiry) > 9)) {
            throw new \InvalidArgumentException('invalid length for $eligibilityInquiry when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 9.');
        }

        $this->container['eligibilityInquiry'] = $eligibilityInquiry;

        return $this;
    }

    /**
     * Gets gracePeriodDuration
     * @return string
     */
    public function getGracePeriodDuration()
    {
        return $this->container['gracePeriodDuration'];
    }

    /**
     * Sets gracePeriodDuration
     * @param string $gracePeriodDuration Grace period requested by the customer before the first installment payment is due.  When you include this field in a request, you must also include the grace period duration type field.  The value for this field corresponds to the following data in the TC 33 capture file3: Record: CP01 TCR5, Position: 100-101, Field: Mastercard Grace Period Details.  This field is supported only for Mastercard installment payments in Brazil and Greece.
     * @return $this
     */
    public function setGracePeriodDuration($gracePeriodDuration)
    {
        $this->container['gracePeriodDuration'] = $gracePeriodDuration;

        return $this;
    }

    /**
     * Gets gracePeriodDurationType
     * @return string
     */
    public function getGracePeriodDurationType()
    {
        return $this->container['gracePeriodDurationType'];
    }

    /**
     * Sets gracePeriodDurationType
     * @param string $gracePeriodDurationType Unit for the requested grace period duration.  Possible values: - `D`: Days - `W`: Weeks - `M`: Months  The value for this field corresponds to the following data in the TC 33 capture file3: Record: CP01 TCR5, Position: 99, Field: Mastercard Grace Period Details  This field is supported only for Mastercard installment payments in Brazil and Greece on Artizan\Cybersource\CybersourceSDK through VisaNet.
     * @return $this
     */
    public function setGracePeriodDurationType($gracePeriodDurationType)
    {
        if (!is_null($gracePeriodDurationType) && (strlen($gracePeriodDurationType) > 1)) {
            throw new \InvalidArgumentException('invalid length for $gracePeriodDurationType when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 1.');
        }

        $this->container['gracePeriodDurationType'] = $gracePeriodDurationType;

        return $this;
    }

    /**
     * Gets firstInstallmentAmount
     * @return string
     */
    public function getFirstInstallmentAmount()
    {
        return $this->container['firstInstallmentAmount'];
    }

    /**
     * Sets firstInstallmentAmount
     * @param string $firstInstallmentAmount Amount of the first installment payment. The issuer provides this value when the first installment payment is successful. This field is supported for Mastercard installment payments on Artizan\Cybersource\CybersourceSDK through VisaNet in all countries except Brazil,Croatia, Georgia, and Greece. The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR5 - Position: 23-34 - Field: Amount of Each Installment
     * @return $this
     */
    public function setFirstInstallmentAmount($firstInstallmentAmount)
    {
        if (!is_null($firstInstallmentAmount) && (strlen($firstInstallmentAmount) > 13)) {
            throw new \InvalidArgumentException('invalid length for $firstInstallmentAmount when calling Ptsv2paymentsInstallmentInformation., must be smaller than or equal to 13.');
        }

        $this->container['firstInstallmentAmount'] = $firstInstallmentAmount;

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

