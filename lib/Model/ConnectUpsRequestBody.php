<?php
/**
 * ConnectUpsRequestBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ShipEngine API
 *
 * ShipEngine's easy-to-use REST API lets you manage all of your shipping needs without worrying about the complexities of different carrier APIs and protocols. We handle all the heavy lifting so you can focus on providing a first-class shipping experience for your customers at the best possible prices.  Each of ShipEngine's features can be used by itself or in conjunction with each other to build powerful shipping functionality into your application or service.  ## Getting Started If you're new to REST APIs then be sure to read our [introduction to REST](https://www.shipengine.com/docs/rest/) to understand the basics.  Learn how to [authenticate yourself to ShipEngine](https://www.shipengine.com/docs/auth/), and then use our [sandbox environment](https://www.shipengine.com/docs/sandbox/) to kick the tires and get familiar with our API. If you run into any problems, then be sure to check the [error handling guide](https://www.shipengine.com/docs/errors/) for tips.  Here are some step-by-step **tutorials** to get you started:    - [Learn how to create your first shipping label](https://www.shipengine.com/docs/labels/create-a-label/)   - [Calculate shipping costs and compare rates across carriers](https://www.shipengine.com/docs/rates/)   - [Track packages on-demand or in real time](https://www.shipengine.com/docs/tracking/)   - [Validate mailing addresses anywhere on Earth](https://www.shipengine.com/docs/addresses/validation/)   ## Shipping Labels for Every Major Carrier ShipEngine makes it easy to [create shipping labels for any carrier](https://www.shipengine.com/docs/labels/create-a-label/) and [download them](https://www.shipengine.com/docs/labels/downloading/) in a [variety of file formats](https://www.shipengine.com/docs/labels/formats/). You can even customize labels with your own [messages](https://www.shipengine.com/docs/labels/messages/) and [images](https://www.shipengine.com/docs/labels/branding/).   ## Real-Time Package Tracking With ShipEngine you can [get the current status of a package](https://www.shipengine.com/docs/tracking/) or [subscribe to real-time tracking updates](https://www.shipengine.com/docs/tracking/webhooks/) via webhooks. You can also create [custimized tracking pages](https://www.shipengine.com/docs/tracking/branded-tracking-page/) with your own branding so your customers will always know where their package is.   ## Compare Shipping Costs Across Carriers Make sure you ship as cost-effectively as possible by [comparing rates across carriers](https://www.shipengine.com/docs/rates/get-shipment-rates/) using the ShipEngine Rates API. Or if you don't know the full shipment details yet, then you can [get rate estimates](https://www.shipengine.com/docs/rates/estimate/) with limited address info.   ## Worldwide Address Validation ShipEngine supports [address validation](https://www.shipengine.com/docs/addresses/validation/) for virtually [every country on Earth](https://www.shipengine.com/docs/addresses/validation/countries/), including the United States, Canada, Great Britain, Australia, Germany, France, Norway, Spain, Sweden, Israel, Italy, and over 160 others.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 1.1.202009151309
 * Contact: sales@shipengine.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ShipEngineApi\Model;

use \ArrayAccess;
use \ShipEngineApi\ObjectSerializer;

/**
 * ConnectUpsRequestBody Class Doc Comment
 *
 * @category Class
 * @description A UPS account information request body
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConnectUpsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'connect_ups_request_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nickname' => 'string',
        'account_number' => 'string',
        'account_country_code' => 'string',
        'account_postal_code' => 'string',
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'invoice' => 'UpsInvoice',
        'agree_to_technology_agreement' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'nickname' => null,
        'account_number' => null,
        'account_country_code' => null,
        'account_postal_code' => null,
        'title' => null,
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'country_code' => null,
        'email' => null,
        'phone' => null,
        'invoice' => null,
        'agree_to_technology_agreement' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nickname' => 'nickname',
        'account_number' => 'account_number',
        'account_country_code' => 'account_country_code',
        'account_postal_code' => 'account_postal_code',
        'title' => 'title',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'company' => 'company',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postal_code',
        'country_code' => 'country_code',
        'email' => 'email',
        'phone' => 'phone',
        'invoice' => 'invoice',
        'agree_to_technology_agreement' => 'agree_to_technology_agreement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nickname' => 'setNickname',
        'account_number' => 'setAccountNumber',
        'account_country_code' => 'setAccountCountryCode',
        'account_postal_code' => 'setAccountPostalCode',
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'invoice' => 'setInvoice',
        'agree_to_technology_agreement' => 'setAgreeToTechnologyAgreement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nickname' => 'getNickname',
        'account_number' => 'getAccountNumber',
        'account_country_code' => 'getAccountCountryCode',
        'account_postal_code' => 'getAccountPostalCode',
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'invoice' => 'getInvoice',
        'agree_to_technology_agreement' => 'getAgreeToTechnologyAgreement'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_country_code'] = isset($data['account_country_code']) ? $data['account_country_code'] : null;
        $this->container['account_postal_code'] = isset($data['account_postal_code']) ? $data['account_postal_code'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['agree_to_technology_agreement'] = isset($data['agree_to_technology_agreement']) ? $data['agree_to_technology_agreement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['nickname'] === null) {
            $invalidProperties[] = "'nickname' can't be null";
        }
        if ((mb_strlen($this->container['nickname']) < 1)) {
            $invalidProperties[] = "invalid value for 'nickname', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ((mb_strlen($this->container['account_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account_country_code'] === null) {
            $invalidProperties[] = "'account_country_code' can't be null";
        }
        if ((mb_strlen($this->container['account_country_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_country_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account_postal_code'] === null) {
            $invalidProperties[] = "'account_postal_code' can't be null";
        }
        if ((mb_strlen($this->container['account_postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_postal_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ((mb_strlen($this->container['company']) < 1)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['address1'] === null) {
            $invalidProperties[] = "'address1' can't be null";
        }
        if ((mb_strlen($this->container['address1']) < 1)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) < 1)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ((mb_strlen($this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ((mb_strlen($this->container['phone']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['agree_to_technology_agreement'] === null) {
            $invalidProperties[] = "'agree_to_technology_agreement' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname Nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {

        if ((mb_strlen($nickname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nickname when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number Account number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        if ((mb_strlen($account_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_country_code
     *
     * @return string
     */
    public function getAccountCountryCode()
    {
        return $this->container['account_country_code'];
    }

    /**
     * Sets account_country_code
     *
     * @param string $account_country_code Account country code
     *
     * @return $this
     */
    public function setAccountCountryCode($account_country_code)
    {

        if ((mb_strlen($account_country_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_country_code when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['account_country_code'] = $account_country_code;

        return $this;
    }

    /**
     * Gets account_postal_code
     *
     * @return string
     */
    public function getAccountPostalCode()
    {
        return $this->container['account_postal_code'];
    }

    /**
     * Sets account_postal_code
     *
     * @param string $account_postal_code Account postal code
     *
     * @return $this
     */
    public function setAccountPostalCode($account_postal_code)
    {

        if ((mb_strlen($account_postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_postal_code when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['account_postal_code'] = $account_postal_code;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {

        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {

        if ((mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {

        if ((mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company
     *
     * @return $this
     */
    public function setCompany($company)
    {

        if ((mb_strlen($company) < 1)) {
            throw new \InvalidArgumentException('invalid length for $company when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 Address Line 1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {

        if ((mb_strlen($address1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 Address Line 2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {

        if (!is_null($address2) && (mb_strlen($address2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City
     *
     * @return $this
     */
    public function setCity($city)
    {

        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State
     *
     * @return $this
     */
    public function setState($state)
    {

        if ((mb_strlen($state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $state when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {

        if ((mb_strlen($postal_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {

        if ((mb_strlen($country_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {

        if ((mb_strlen($phone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling ConnectUpsRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return UpsInvoice|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param UpsInvoice|null $invoice The UPS invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets agree_to_technology_agreement
     *
     * @return bool
     */
    public function getAgreeToTechnologyAgreement()
    {
        return $this->container['agree_to_technology_agreement'];
    }

    /**
     * Sets agree_to_technology_agreement
     *
     * @param bool $agree_to_technology_agreement The Agreement to the [UPS Technology Agreement](https://www.ups.com/assets/resources/media/UTA_with_EUR.pdf)
     *
     * @return $this
     */
    public function setAgreeToTechnologyAgreement($agree_to_technology_agreement)
    {
        $this->container['agree_to_technology_agreement'] = $agree_to_technology_agreement;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


