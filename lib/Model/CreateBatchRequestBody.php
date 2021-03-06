<?php
/**
 * CreateBatchRequestBody
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
 * CreateBatchRequestBody Class Doc Comment
 *
 * @category Class
 * @description A create batch request body
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateBatchRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_batch_request_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_batch_id' => 'string',
        'batch_notes' => 'string',
        'shipment_ids' => 'string[]',
        'rate_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'external_batch_id' => null,
        'batch_notes' => null,
        'shipment_ids' => null,
        'rate_ids' => null
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
        'external_batch_id' => 'external_batch_id',
        'batch_notes' => 'batch_notes',
        'shipment_ids' => 'shipment_ids',
        'rate_ids' => 'rate_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_batch_id' => 'setExternalBatchId',
        'batch_notes' => 'setBatchNotes',
        'shipment_ids' => 'setShipmentIds',
        'rate_ids' => 'setRateIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_batch_id' => 'getExternalBatchId',
        'batch_notes' => 'getBatchNotes',
        'shipment_ids' => 'getShipmentIds',
        'rate_ids' => 'getRateIds'
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
        $this->container['external_batch_id'] = isset($data['external_batch_id']) ? $data['external_batch_id'] : null;
        $this->container['batch_notes'] = isset($data['batch_notes']) ? $data['batch_notes'] : null;
        $this->container['shipment_ids'] = isset($data['shipment_ids']) ? $data['shipment_ids'] : null;
        $this->container['rate_ids'] = isset($data['rate_ids']) ? $data['rate_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['batch_notes']) && (mb_strlen($this->container['batch_notes']) < 1)) {
            $invalidProperties[] = "invalid value for 'batch_notes', the character length must be bigger than or equal to 1.";
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
     * Gets external_batch_id
     *
     * @return string|null
     */
    public function getExternalBatchId()
    {
        return $this->container['external_batch_id'];
    }

    /**
     * Sets external_batch_id
     *
     * @param string|null $external_batch_id A string that uniquely identifies the external batch
     *
     * @return $this
     */
    public function setExternalBatchId($external_batch_id)
    {
        $this->container['external_batch_id'] = $external_batch_id;

        return $this;
    }

    /**
     * Gets batch_notes
     *
     * @return string|null
     */
    public function getBatchNotes()
    {
        return $this->container['batch_notes'];
    }

    /**
     * Sets batch_notes
     *
     * @param string|null $batch_notes Add custom messages for a particular batch
     *
     * @return $this
     */
    public function setBatchNotes($batch_notes)
    {

        if (!is_null($batch_notes) && (mb_strlen($batch_notes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $batch_notes when calling CreateBatchRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['batch_notes'] = $batch_notes;

        return $this;
    }

    /**
     * Gets shipment_ids
     *
     * @return string[]|null
     */
    public function getShipmentIds()
    {
        return $this->container['shipment_ids'];
    }

    /**
     * Sets shipment_ids
     *
     * @param string[]|null $shipment_ids Array of shipment IDs used in the batch
     *
     * @return $this
     */
    public function setShipmentIds($shipment_ids)
    {
        $this->container['shipment_ids'] = $shipment_ids;

        return $this;
    }

    /**
     * Gets rate_ids
     *
     * @return string[]|null
     */
    public function getRateIds()
    {
        return $this->container['rate_ids'];
    }

    /**
     * Sets rate_ids
     *
     * @param string[]|null $rate_ids Array of rate IDs used in the batch
     *
     * @return $this
     */
    public function setRateIds($rate_ids)
    {
        $this->container['rate_ids'] = $rate_ids;

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


