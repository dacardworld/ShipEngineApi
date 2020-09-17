<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description A shipment item
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'sales_order_id' => 'string',
        'sales_order_item_id' => 'string',
        'quantity' => 'int',
        'sku' => 'string',
        'external_order_id' => 'string',
        'external_order_item_id' => 'string',
        'asin' => 'string',
        'order_source_code' => 'OrderSourceName'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'sales_order_id' => null,
        'sales_order_item_id' => null,
        'quantity' => 'int32',
        'sku' => null,
        'external_order_id' => null,
        'external_order_item_id' => null,
        'asin' => null,
        'order_source_code' => null
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
        'name' => 'name',
        'sales_order_id' => 'sales_order_id',
        'sales_order_item_id' => 'sales_order_item_id',
        'quantity' => 'quantity',
        'sku' => 'sku',
        'external_order_id' => 'external_order_id',
        'external_order_item_id' => 'external_order_item_id',
        'asin' => 'asin',
        'order_source_code' => 'order_source_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'sales_order_id' => 'setSalesOrderId',
        'sales_order_item_id' => 'setSalesOrderItemId',
        'quantity' => 'setQuantity',
        'sku' => 'setSku',
        'external_order_id' => 'setExternalOrderId',
        'external_order_item_id' => 'setExternalOrderItemId',
        'asin' => 'setAsin',
        'order_source_code' => 'setOrderSourceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'sales_order_id' => 'getSalesOrderId',
        'sales_order_item_id' => 'getSalesOrderItemId',
        'quantity' => 'getQuantity',
        'sku' => 'getSku',
        'external_order_id' => 'getExternalOrderId',
        'external_order_item_id' => 'getExternalOrderItemId',
        'asin' => 'getAsin',
        'order_source_code' => 'getOrderSourceCode'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sales_order_id'] = isset($data['sales_order_id']) ? $data['sales_order_id'] : null;
        $this->container['sales_order_item_id'] = isset($data['sales_order_item_id']) ? $data['sales_order_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['external_order_id'] = isset($data['external_order_id']) ? $data['external_order_id'] : null;
        $this->container['external_order_item_id'] = isset($data['external_order_item_id']) ? $data['external_order_item_id'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['order_source_code'] = isset($data['order_source_code']) ? $data['order_source_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['asin']) && (mb_strlen($this->container['asin']) > 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['asin']) && (mb_strlen($this->container['asin']) < 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 10.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name item name
     *
     * @return $this
     */
    public function setName($name)
    {

        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ShipmentItem., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sales_order_id
     *
     * @return string|null
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string|null $sales_order_id sales order id
     *
     * @return $this
     */
    public function setSalesOrderId($sales_order_id)
    {
        $this->container['sales_order_id'] = $sales_order_id;

        return $this;
    }

    /**
     * Gets sales_order_item_id
     *
     * @return string|null
     */
    public function getSalesOrderItemId()
    {
        return $this->container['sales_order_item_id'];
    }

    /**
     * Sets sales_order_item_id
     *
     * @param string|null $sales_order_item_id sales order item id
     *
     * @return $this
     */
    public function setSalesOrderItemId($sales_order_item_id)
    {
        $this->container['sales_order_item_id'] = $sales_order_item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of this item included in the shipment
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling ShipmentItem., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Item Stock Keeping Unit
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets external_order_id
     *
     * @return string|null
     */
    public function getExternalOrderId()
    {
        return $this->container['external_order_id'];
    }

    /**
     * Sets external_order_id
     *
     * @param string|null $external_order_id external order id
     *
     * @return $this
     */
    public function setExternalOrderId($external_order_id)
    {
        $this->container['external_order_id'] = $external_order_id;

        return $this;
    }

    /**
     * Gets external_order_item_id
     *
     * @return string|null
     */
    public function getExternalOrderItemId()
    {
        return $this->container['external_order_item_id'];
    }

    /**
     * Sets external_order_item_id
     *
     * @param string|null $external_order_item_id external order item id
     *
     * @return $this
     */
    public function setExternalOrderItemId($external_order_item_id)
    {
        $this->container['external_order_item_id'] = $external_order_item_id;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin Amazon Standard Identification Number
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        if (!is_null($asin) && (mb_strlen($asin) > 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling ShipmentItem., must be smaller than or equal to 10.');
        }
        if (!is_null($asin) && (mb_strlen($asin) < 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling ShipmentItem., must be bigger than or equal to 10.');
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets order_source_code
     *
     * @return OrderSourceName|null
     */
    public function getOrderSourceCode()
    {
        return $this->container['order_source_code'];
    }

    /**
     * Sets order_source_code
     *
     * @param OrderSourceName|null $order_source_code order_source_code
     *
     * @return $this
     */
    public function setOrderSourceCode($order_source_code)
    {
        $this->container['order_source_code'] = $order_source_code;

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


