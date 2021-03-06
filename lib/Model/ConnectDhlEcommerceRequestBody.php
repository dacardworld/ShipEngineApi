<?php
/**
 * ConnectDhlEcommerceRequestBody
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
 * ShipEngine's easy-to-use REST API lets you manage all of your shipping needs without worrying about the complexities of different carrier APIs and protocols. We handle all the heavy lifting so you can focus on providing a first-class shipping experience for your customers at the best possible prices.  Each of ShipEngine's features can be used by itself or in conjunction with each other to build powerful shipping functionality into your application or service.  ## Getting Started If you're new to REST APIs then be sure to read our [introduction to REST](https://www.shipengine.com/docs/rest/) to understand the basics.  Learn how to [authenticate yourself to ShipEngine](https://www.shipengine.com/docs/auth/), and then use our [sandbox environment](https://www.shipengine.com/docs/sandbox/) to kick the tires and get familiar with our API. If you run into any problems, then be sure to check the [error handling guide](https://www.shipengine.com/docs/errors/) for tips.  Here are some step-by-step **tutorials** to get you started:    - [Learn how to create your first shipping label](https://www.shipengine.com/docs/labels/create-a-label/)   - [Calculate shipping costs and compare rates across carriers](https://www.shipengine.com/docs/rates/)   - [Track packages on-demand or in real time](https://www.shipengine.com/docs/tracking/)   - [Validate mailing addresses anywhere on Earth](https://www.shipengine.com/docs/addresses/validation/)   ## Shipping Labels for Every Major Carrier ShipEngine makes it easy to [create shipping labels for any carrier](https://www.shipengine.com/docs/labels/create-a-label/) and [download them](https://www.shipengine.com/docs/labels/downloading/) in a [variety of file formats](https://www.shipengine.com/docs/labels/formats/). You can even customize labels with your own [messages](https://www.shipengine.com/docs/labels/messages/) and [images](https://www.shipengine.com/docs/labels/branding/).   ## Real-Time Package Tracking With ShipEngine you can [get the current status of a package](https://www.shipengine.com/docs/tracking/) or [subscribe to real-time tracking updates](https://www.shipengine.com/docs/tracking/webhooks/) via webhooks. You can also create [custimized tracking pages](https://www.shipengine.com/docs/tracking/branded-tracking-page/) with your own branding so your customers will always know where their package is.   ## Compare Shipping Costs Across Carriers Make sure you ship as cost-effectively as possible by [comparing rates across carriers](https://www.shipengine.com/docs/rates/get-shipment-rates/) using the ShipEngine Rates API. Or if you don't know the full shipment details yet, then you can [get rate estimates](https://www.shipengine.com/docs/rates/estimate/) with limited address info.   ## Worldwide Address Validation ShipEngine supports [address validation](https://www.shipengine.com/docs/addresses/validation/) for virtually [every country on Earth](https://www.shipengine.com/docs/addresses/validation/countries/), including the United States, Canada, Great Britain, Australia, Germany, France, Norway, Spain, Sweden, Israel, Italy, and over 160 others.
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
 * ConnectDhlEcommerceRequestBody Class Doc Comment
 *
 * @category Class
 * @description A DHL Ecommerce account information request body
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConnectDhlEcommerceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'connect_dhl_ecommerce_request_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nickname' => 'string',
        'client_id' => 'string',
        'username' => 'string',
        'password' => 'string',
        'pickup_number' => 'string',
        'distribution_center' => 'string',
        'api_key' => 'string',
        'api_secret' => 'string',
        'ancillary_endorsement' => 'AncillaryServiceEndorsement',
        'account_number' => 'string',
        'ftp_username' => 'string',
        'ftp_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'nickname' => null,
        'client_id' => null,
        'username' => null,
        'password' => null,
        'pickup_number' => null,
        'distribution_center' => null,
        'api_key' => null,
        'api_secret' => null,
        'ancillary_endorsement' => null,
        'account_number' => null,
        'ftp_username' => null,
        'ftp_password' => null
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
        'client_id' => 'client_id',
        'username' => 'username',
        'password' => 'password',
        'pickup_number' => 'pickup_number',
        'distribution_center' => 'distribution_center',
        'api_key' => 'api_key',
        'api_secret' => 'api_secret',
        'ancillary_endorsement' => 'ancillary_endorsement',
        'account_number' => 'account_number',
        'ftp_username' => 'ftp_username',
        'ftp_password' => 'ftp_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nickname' => 'setNickname',
        'client_id' => 'setClientId',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'pickup_number' => 'setPickupNumber',
        'distribution_center' => 'setDistributionCenter',
        'api_key' => 'setApiKey',
        'api_secret' => 'setApiSecret',
        'ancillary_endorsement' => 'setAncillaryEndorsement',
        'account_number' => 'setAccountNumber',
        'ftp_username' => 'setFtpUsername',
        'ftp_password' => 'setFtpPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nickname' => 'getNickname',
        'client_id' => 'getClientId',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'pickup_number' => 'getPickupNumber',
        'distribution_center' => 'getDistributionCenter',
        'api_key' => 'getApiKey',
        'api_secret' => 'getApiSecret',
        'ancillary_endorsement' => 'getAncillaryEndorsement',
        'account_number' => 'getAccountNumber',
        'ftp_username' => 'getFtpUsername',
        'ftp_password' => 'getFtpPassword'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['pickup_number'] = isset($data['pickup_number']) ? $data['pickup_number'] : null;
        $this->container['distribution_center'] = isset($data['distribution_center']) ? $data['distribution_center'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['api_secret'] = isset($data['api_secret']) ? $data['api_secret'] : null;
        $this->container['ancillary_endorsement'] = isset($data['ancillary_endorsement']) ? $data['ancillary_endorsement'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['ftp_username'] = isset($data['ftp_username']) ? $data['ftp_username'] : null;
        $this->container['ftp_password'] = isset($data['ftp_password']) ? $data['ftp_password'] : null;
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

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ((mb_strlen($this->container['client_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'client_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ((mb_strlen($this->container['username']) < 1)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) < 1)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['pickup_number'] === null) {
            $invalidProperties[] = "'pickup_number' can't be null";
        }
        if ((mb_strlen($this->container['pickup_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'pickup_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['distribution_center'] === null) {
            $invalidProperties[] = "'distribution_center' can't be null";
        }
        if ((mb_strlen($this->container['distribution_center']) < 1)) {
            $invalidProperties[] = "invalid value for 'distribution_center', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['api_key']) && (mb_strlen($this->container['api_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'api_key', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['api_secret']) && (mb_strlen($this->container['api_secret']) < 1)) {
            $invalidProperties[] = "invalid value for 'api_secret', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ftp_username']) && (mb_strlen($this->container['ftp_username']) < 1)) {
            $invalidProperties[] = "invalid value for 'ftp_username', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['ftp_password']) && (mb_strlen($this->container['ftp_password']) < 1)) {
            $invalidProperties[] = "invalid value for 'ftp_password', the character length must be bigger than or equal to 1.";
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
     * @param string $nickname A nickname to help you identify this account
     *
     * @return $this
     */
    public function setNickname($nickname)
    {

        if ((mb_strlen($nickname) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nickname when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id The client id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {

        if ((mb_strlen($client_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_id when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username The account username
     *
     * @return $this
     */
    public function setUsername($username)
    {

        if ((mb_strlen($username) < 1)) {
            throw new \InvalidArgumentException('invalid length for $username when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The account password
     *
     * @return $this
     */
    public function setPassword($password)
    {

        if ((mb_strlen($password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets pickup_number
     *
     * @return string
     */
    public function getPickupNumber()
    {
        return $this->container['pickup_number'];
    }

    /**
     * Sets pickup_number
     *
     * @param string $pickup_number The pickup number
     *
     * @return $this
     */
    public function setPickupNumber($pickup_number)
    {

        if ((mb_strlen($pickup_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $pickup_number when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['pickup_number'] = $pickup_number;

        return $this;
    }

    /**
     * Gets distribution_center
     *
     * @return string
     */
    public function getDistributionCenter()
    {
        return $this->container['distribution_center'];
    }

    /**
     * Sets distribution_center
     *
     * @param string $distribution_center The distribution center
     *
     * @return $this
     */
    public function setDistributionCenter($distribution_center)
    {

        if ((mb_strlen($distribution_center) < 1)) {
            throw new \InvalidArgumentException('invalid length for $distribution_center when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['distribution_center'] = $distribution_center;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string|null $api_key The DHL E-Commerce API key. This field is optional, but if not set you will not be able to get rates for this account.
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {

        if (!is_null($api_key) && (mb_strlen($api_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $api_key when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets api_secret
     *
     * @return string|null
     */
    public function getApiSecret()
    {
        return $this->container['api_secret'];
    }

    /**
     * Sets api_secret
     *
     * @param string|null $api_secret The DHL E-Commerce API secret. This field is optional, but if not set you will not be able to get rates for this account.
     *
     * @return $this
     */
    public function setApiSecret($api_secret)
    {

        if (!is_null($api_secret) && (mb_strlen($api_secret) < 1)) {
            throw new \InvalidArgumentException('invalid length for $api_secret when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['api_secret'] = $api_secret;

        return $this;
    }

    /**
     * Gets ancillary_endorsement
     *
     * @return AncillaryServiceEndorsement|null
     */
    public function getAncillaryEndorsement()
    {
        return $this->container['ancillary_endorsement'];
    }

    /**
     * Sets ancillary_endorsement
     *
     * @param AncillaryServiceEndorsement|null $ancillary_endorsement ancillary_endorsement
     *
     * @return $this
     */
    public function setAncillaryEndorsement($ancillary_endorsement)
    {
        $this->container['ancillary_endorsement'] = $ancillary_endorsement;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number Account number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        if (!is_null($account_number) && (mb_strlen($account_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets ftp_username
     *
     * @return string|null
     */
    public function getFtpUsername()
    {
        return $this->container['ftp_username'];
    }

    /**
     * Sets ftp_username
     *
     * @param string|null $ftp_username FTP username
     *
     * @return $this
     */
    public function setFtpUsername($ftp_username)
    {

        if (!is_null($ftp_username) && (mb_strlen($ftp_username) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ftp_username when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['ftp_username'] = $ftp_username;

        return $this;
    }

    /**
     * Gets ftp_password
     *
     * @return string|null
     */
    public function getFtpPassword()
    {
        return $this->container['ftp_password'];
    }

    /**
     * Sets ftp_password
     *
     * @param string|null $ftp_password FTP password
     *
     * @return $this
     */
    public function setFtpPassword($ftp_password)
    {

        if (!is_null($ftp_password) && (mb_strlen($ftp_password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ftp_password when calling ConnectDhlEcommerceRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['ftp_password'] = $ftp_password;

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


