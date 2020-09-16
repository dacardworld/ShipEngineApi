<?php
/**
 * CreateManifestResponseBody
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
 * CreateManifestResponseBody Class Doc Comment
 *
 * @category Class
 * @description A create manifest response body
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateManifestResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_manifest_response_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manifests' => '\ShipEngineApi\Model\Manifest[]',
        'manifest_id' => 'string',
        'form_id' => 'string',
        'created_at' => '\DateTime',
        'ship_date' => '\DateTime',
        'shipments' => 'int',
        'warehouse_id' => 'string',
        'submission_id' => 'string',
        'carrier_id' => 'string',
        'manifest_download' => 'ManifestDownload'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'manifests' => null,
        'manifest_id' => null,
        'form_id' => null,
        'created_at' => 'date-time',
        'ship_date' => 'date-time',
        'shipments' => 'int32',
        'warehouse_id' => null,
        'submission_id' => null,
        'carrier_id' => null,
        'manifest_download' => null
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
        'manifests' => 'manifests',
        'manifest_id' => 'manifest_id',
        'form_id' => 'form_id',
        'created_at' => 'created_at',
        'ship_date' => 'ship_date',
        'shipments' => 'shipments',
        'warehouse_id' => 'warehouse_id',
        'submission_id' => 'submission_id',
        'carrier_id' => 'carrier_id',
        'manifest_download' => 'manifest_download'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manifests' => 'setManifests',
        'manifest_id' => 'setManifestId',
        'form_id' => 'setFormId',
        'created_at' => 'setCreatedAt',
        'ship_date' => 'setShipDate',
        'shipments' => 'setShipments',
        'warehouse_id' => 'setWarehouseId',
        'submission_id' => 'setSubmissionId',
        'carrier_id' => 'setCarrierId',
        'manifest_download' => 'setManifestDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manifests' => 'getManifests',
        'manifest_id' => 'getManifestId',
        'form_id' => 'getFormId',
        'created_at' => 'getCreatedAt',
        'ship_date' => 'getShipDate',
        'shipments' => 'getShipments',
        'warehouse_id' => 'getWarehouseId',
        'submission_id' => 'getSubmissionId',
        'carrier_id' => 'getCarrierId',
        'manifest_download' => 'getManifestDownload'
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
        $this->container['manifests'] = isset($data['manifests']) ? $data['manifests'] : null;
        $this->container['manifest_id'] = isset($data['manifest_id']) ? $data['manifest_id'] : null;
        $this->container['form_id'] = isset($data['form_id']) ? $data['form_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['submission_id'] = isset($data['submission_id']) ? $data['submission_id'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['manifest_download'] = isset($data['manifest_download']) ? $data['manifest_download'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['manifest_id'] === null) {
            $invalidProperties[] = "'manifest_id' can't be null";
        }
        if ($this->container['form_id'] === null) {
            $invalidProperties[] = "'form_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }
        if ($this->container['shipments'] === null) {
            $invalidProperties[] = "'shipments' can't be null";
        }
        if (($this->container['shipments'] < 1)) {
            $invalidProperties[] = "invalid value for 'shipments', must be bigger than or equal to 1.";
        }

        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['submission_id'] === null) {
            $invalidProperties[] = "'submission_id' can't be null";
        }
        if ((mb_strlen($this->container['submission_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'submission_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ($this->container['manifest_download'] === null) {
            $invalidProperties[] = "'manifest_download' can't be null";
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
     * Gets manifests
     *
     * @return \ShipEngineApi\Model\Manifest[]|null
     */
    public function getManifests()
    {
        return $this->container['manifests'];
    }

    /**
     * Sets manifests
     *
     * @param \ShipEngineApi\Model\Manifest[]|null $manifests manifests
     *
     * @return $this
     */
    public function setManifests($manifests)
    {
        $this->container['manifests'] = $manifests;

        return $this;
    }

    /**
     * Gets manifest_id
     *
     * @return string
     */
    public function getManifestId()
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id
     *
     * @param string $manifest_id A string that uniquely identifies the manifest
     *
     * @return $this
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param string $form_id A string that uniquely identifies the form
     *
     * @return $this
     */
    public function setFormId($form_id)
    {
        $this->container['form_id'] = $form_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The date-time that the manifest was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date The date-time that the manifests shipments will be picked up
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return int
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param int $shipments The number of shipments that are included in this manifest
     *
     * @return $this
     */
    public function setShipments($shipments)
    {

        if (($shipments < 1)) {
            throw new \InvalidArgumentException('invalid value for $shipments when calling CreateManifestResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['shipments'] = $shipments;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string $warehouse_id A string that uniquely identifies the warehouse
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets submission_id
     *
     * @return string
     */
    public function getSubmissionId()
    {
        return $this->container['submission_id'];
    }

    /**
     * Sets submission_id
     *
     * @param string $submission_id A string that uniquely identifies the submission
     *
     * @return $this
     */
    public function setSubmissionId($submission_id)
    {

        if ((mb_strlen($submission_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $submission_id when calling CreateManifestResponseBody., must be bigger than or equal to 1.');
        }

        $this->container['submission_id'] = $submission_id;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id A string that uniquely identifies the carrier
     *
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets manifest_download
     *
     * @return ManifestDownload
     */
    public function getManifestDownload()
    {
        return $this->container['manifest_download'];
    }

    /**
     * Sets manifest_download
     *
     * @param ManifestDownload $manifest_download manifest_download
     *
     * @return $this
     */
    public function setManifestDownload($manifest_download)
    {
        $this->container['manifest_download'] = $manifest_download;

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

