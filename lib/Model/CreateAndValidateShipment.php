<?php
/**
 * CreateAndValidateShipment
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
 * CreateAndValidateShipment Class Doc Comment
 *
 * @category Class
 * @description A create and validate shipment resource
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateAndValidateShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_and_validate_shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_id' => 'string',
        'carrier_id' => 'string',
        'service_code' => 'string',
        'external_order_id' => 'string',
        'items' => 'ShipmentItem[]',
        'external_shipment_id' => 'string',
        'ship_date' => '\DateTime',
        'created_at' => '\DateTime',
        'modified_at' => '\DateTime',
        'shipment_status' => 'ShipmentStatus',
        'ship_to' => 'Address',
        'ship_from' => 'Address',
        'warehouse_id' => 'string',
        'return_to' => 'Address',
        'confirmation' => 'DeliveryConfirmation',
        'customs' => 'InternationalShipmentOptions',
        'advanced_options' => 'AdvancedShipmentOptions',
        'insurance_provider' => 'InsuranceProvider',
        'tags' => 'Tag[]',
        'order_source_code' => 'OrderSourceName',
        'packages' => 'Package[]',
        'total_weight' => 'Weight',
        'errors' => 'string[]',
        'address_validation' => 'AddressValidationResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipment_id' => null,
        'carrier_id' => null,
        'service_code' => null,
        'external_order_id' => null,
        'items' => null,
        'external_shipment_id' => null,
        'ship_date' => null,
        'created_at' => null,
        'modified_at' => null,
        'shipment_status' => null,
        'ship_to' => null,
        'ship_from' => null,
        'warehouse_id' => null,
        'return_to' => null,
        'confirmation' => null,
        'customs' => null,
        'advanced_options' => null,
        'insurance_provider' => null,
        'tags' => null,
        'order_source_code' => null,
        'packages' => null,
        'total_weight' => null,
        'errors' => null,
        'address_validation' => null
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
        'shipment_id' => 'shipment_id',
        'carrier_id' => 'carrier_id',
        'service_code' => 'service_code',
        'external_order_id' => 'external_order_id',
        'items' => 'items',
        'external_shipment_id' => 'external_shipment_id',
        'ship_date' => 'ship_date',
        'created_at' => 'created_at',
        'modified_at' => 'modified_at',
        'shipment_status' => 'shipment_status',
        'ship_to' => 'ship_to',
        'ship_from' => 'ship_from',
        'warehouse_id' => 'warehouse_id',
        'return_to' => 'return_to',
        'confirmation' => 'confirmation',
        'customs' => 'customs',
        'advanced_options' => 'advanced_options',
        'insurance_provider' => 'insurance_provider',
        'tags' => 'tags',
        'order_source_code' => 'order_source_code',
        'packages' => 'packages',
        'total_weight' => 'total_weight',
        'errors' => 'errors',
        'address_validation' => 'address_validation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'carrier_id' => 'setCarrierId',
        'service_code' => 'setServiceCode',
        'external_order_id' => 'setExternalOrderId',
        'items' => 'setItems',
        'external_shipment_id' => 'setExternalShipmentId',
        'ship_date' => 'setShipDate',
        'created_at' => 'setCreatedAt',
        'modified_at' => 'setModifiedAt',
        'shipment_status' => 'setShipmentStatus',
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'warehouse_id' => 'setWarehouseId',
        'return_to' => 'setReturnTo',
        'confirmation' => 'setConfirmation',
        'customs' => 'setCustoms',
        'advanced_options' => 'setAdvancedOptions',
        'insurance_provider' => 'setInsuranceProvider',
        'tags' => 'setTags',
        'order_source_code' => 'setOrderSourceCode',
        'packages' => 'setPackages',
        'total_weight' => 'setTotalWeight',
        'errors' => 'setErrors',
        'address_validation' => 'setAddressValidation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'carrier_id' => 'getCarrierId',
        'service_code' => 'getServiceCode',
        'external_order_id' => 'getExternalOrderId',
        'items' => 'getItems',
        'external_shipment_id' => 'getExternalShipmentId',
        'ship_date' => 'getShipDate',
        'created_at' => 'getCreatedAt',
        'modified_at' => 'getModifiedAt',
        'shipment_status' => 'getShipmentStatus',
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'warehouse_id' => 'getWarehouseId',
        'return_to' => 'getReturnTo',
        'confirmation' => 'getConfirmation',
        'customs' => 'getCustoms',
        'advanced_options' => 'getAdvancedOptions',
        'insurance_provider' => 'getInsuranceProvider',
        'tags' => 'getTags',
        'order_source_code' => 'getOrderSourceCode',
        'packages' => 'getPackages',
        'total_weight' => 'getTotalWeight',
        'errors' => 'getErrors',
        'address_validation' => 'getAddressValidation'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['external_order_id'] = isset($data['external_order_id']) ? $data['external_order_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['external_shipment_id'] = isset($data['external_shipment_id']) ? $data['external_shipment_id'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['return_to'] = isset($data['return_to']) ? $data['return_to'] : null;
        $this->container['confirmation'] = isset($data['confirmation']) ? $data['confirmation'] : null;
        $this->container['customs'] = isset($data['customs']) ? $data['customs'] : null;
        $this->container['advanced_options'] = isset($data['advanced_options']) ? $data['advanced_options'] : null;
        $this->container['insurance_provider'] = isset($data['insurance_provider']) ? $data['insurance_provider'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['order_source_code'] = isset($data['order_source_code']) ? $data['order_source_code'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['address_validation'] = isset($data['address_validation']) ? $data['address_validation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['external_shipment_id']) && (mb_strlen($this->container['external_shipment_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'external_shipment_id', the character length must be smaller than or equal to 50.";
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
     * Gets shipment_id
     *
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string|null $shipment_id A string that uniquely identifies the shipment
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return string|null
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string|null $carrier_id The carrier account that is billed for the shipping charges
     *
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string|null $service_code The [carrier service](https://www.shipengine.com/docs/shipping/use-a-carrier-service/) used to ship the package, such as `fedex_ground`, `usps_first_class_mail`, `flat_rate_envelope`, etc.
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        $this->container['service_code'] = $service_code;

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
     * @param string|null $external_order_id ID that the Order Source assigned
     *
     * @return $this
     */
    public function setExternalOrderId($external_order_id)
    {
        $this->container['external_order_id'] = $external_order_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return ShipmentItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param ShipmentItem[]|null $items Describe the packages included in this shipment as related to potential metadata that was imported from external order sources
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets external_shipment_id
     *
     * @return string|null
     */
    public function getExternalShipmentId()
    {
        return $this->container['external_shipment_id'];
    }

    /**
     * Sets external_shipment_id
     *
     * @param string|null $external_shipment_id You can optionally use this field to store your own identifier for this shipment.  > **Warning:** The `external_shipment_id` is limited to 50 characters. Any additional characters will be truncated.
     *
     * @return $this
     */
    public function setExternalShipmentId($external_shipment_id)
    {
        if (!is_null($external_shipment_id) && (mb_strlen($external_shipment_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $external_shipment_id when calling CreateAndValidateShipment., must be smaller than or equal to 50.');
        }

        $this->container['external_shipment_id'] = $external_shipment_id;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime|null $ship_date The date that the shipment was (or will be) shippped.  ShipEngine will take the day of week into consideration. For example, if the carrier does not operate on Sundays, then a package that would have shipped on Sunday will ship on Monday instead.
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time that the shipment was created in ShipEngine.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime|null $modified_at The date and time that the shipment was created or last modified.
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

        return $this;
    }

    /**
     * Gets shipment_status
     *
     * @return ShipmentStatus|null
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param ShipmentStatus|null $shipment_status The current status of the shipment
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return Address|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param Address|null $ship_to The recipient's mailing address
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return Address|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param Address|null $ship_from The shipment's origin address. If you frequently ship from the same location, consider [creating a warehouse](https://www.shipengine.com/docs/reference/create-warehouse/).  Then you can simply specify the `warehouse_id` rather than the complete address each time.
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id The [warehouse](https://www.shipengine.com/docs/shipping/ship-from-a-warehouse/) that the shipment is being shipped from.  Either `warehouse_id` or `ship_from` must be specified.
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets return_to
     *
     * @return Address|null
     */
    public function getReturnTo()
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to
     *
     * @param Address|null $return_to The return address for this shipment.  Defaults to the `ship_from` address.
     *
     * @return $this
     */
    public function setReturnTo($return_to)
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }

    /**
     * Gets confirmation
     *
     * @return DeliveryConfirmation|null
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param DeliveryConfirmation|null $confirmation The type of delivery confirmation that is required for this shipment.
     *
     * @return $this
     */
    public function setConfirmation($confirmation)
    {
        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return InternationalShipmentOptions|null
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param InternationalShipmentOptions|null $customs Customs information.  This is usually only needed for international shipments.
     *
     * @return $this
     */
    public function setCustoms($customs)
    {
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets advanced_options
     *
     * @return AdvancedShipmentOptions|null
     */
    public function getAdvancedOptions()
    {
        return $this->container['advanced_options'];
    }

    /**
     * Sets advanced_options
     *
     * @param AdvancedShipmentOptions|null $advanced_options Advanced shipment options.  These are entirely optional.
     *
     * @return $this
     */
    public function setAdvancedOptions($advanced_options)
    {
        $this->container['advanced_options'] = $advanced_options;

        return $this;
    }

    /**
     * Gets insurance_provider
     *
     * @return InsuranceProvider|null
     */
    public function getInsuranceProvider()
    {
        return $this->container['insurance_provider'];
    }

    /**
     * Sets insurance_provider
     *
     * @param InsuranceProvider|null $insurance_provider The insurance provider to use for any insured packages in the shipment.
     *
     * @return $this
     */
    public function setInsuranceProvider($insurance_provider)
    {
        $this->container['insurance_provider'] = $insurance_provider;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return Tag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param Tag[]|null $tags Arbitrary tags associated with this shipment.  Tags can be used to categorize shipments, and shipments can be queried by their tags.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Gets packages
     *
     * @return Package[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param Package[]|null $packages The packages in the shipment.  > **Note:** Some carriers only allow one package per shipment.  If you attempt to create a multi-package shipment for a carrier that doesn't allow it, an error will be returned.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return Weight|null
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param Weight|null $total_weight The combined weight of all packages in the shipment
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return string[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param string[]|null $errors An array of errors that occurred while creating shipment.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets address_validation
     *
     * @return AddressValidationResult|null
     */
    public function getAddressValidation()
    {
        return $this->container['address_validation'];
    }

    /**
     * Sets address_validation
     *
     * @param AddressValidationResult|null $address_validation The address validation
     *
     * @return $this
     */
    public function setAddressValidation($address_validation)
    {
        $this->container['address_validation'] = $address_validation;

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


