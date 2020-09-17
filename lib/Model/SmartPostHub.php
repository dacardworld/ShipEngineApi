<?php
/**
 * SmartPostHub
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
use \ShipEngineApi\ObjectSerializer;

/**
 * SmartPostHub Class Doc Comment
 *
 * @category Class
 * @description The possible smart post hub values
 * @package  ShipEngineApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartPostHub
{
    /**
     * Possible values of this enum
     */
    const NONE = 'none';
    const ALLENTOWN_PA = 'allentown_pa';
    const ATLANTA_GA = 'atlanta_ga';
    const BALTIMORE_MD = 'baltimore_md';
    const CHARLOTTE_NC = 'charlotte_nc';
    const CHINO_CA = 'chino_ca';
    const DALLAS_TX = 'dallas_tx';
    const DENVER_CO = 'denver_co';
    const DETROIT_MI = 'detroit_mi';
    const EDISON_NJ = 'edison_nj';
    const GROVE_CITY_OH = 'grove_city_oh';
    const GROVEPORT_OH = 'groveport_oh';
    const HOUSTON_TX = 'houston_tx';
    const INDIANAPOLIS_IN = 'indianapolis_in';
    const KANSAS_CITY_KS = 'kansas_city_ks';
    const LOS_ANGELES_CA = 'los_angeles_ca';
    const MARTINSBURG_WV = 'martinsburg_wv';
    const MEMPHIS_TN = 'memphis_tn';
    const MINNEAPOLIS_MN = 'minneapolis_mn';
    const NEW_BERLIN_WI = 'new_berlin_wi';
    const NORTHBOROUGH_MA = 'northborough_ma';
    const ORLANDO_FL = 'orlando_fl';
    const PHONEIX_AZ = 'phoneix_az';
    const PITTSBURGH_PA = 'pittsburgh_pa';
    const RENO_NV = 'reno_nv';
    const SACRAMENTO_CA = 'sacramento_ca';
    const SALT_LAKE_CITY_UT = 'salt_lake_city_ut';
    const SEATTLE_WA = 'seattle_wa';
    const ST_LOUIS_MO = 'st_louis_mo';
    const WINDSOR_CT = 'windsor_ct';
    const NEWARK_NY = 'newark_ny';
    const SOUTH_BRUNSWICK_NJ = 'south_brunswick_nj';
    const SCRANTON_PA = 'scranton_pa';
    const WHEELING_IL = 'wheeling_il';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ALLENTOWN_PA,
            self::ATLANTA_GA,
            self::BALTIMORE_MD,
            self::CHARLOTTE_NC,
            self::CHINO_CA,
            self::DALLAS_TX,
            self::DENVER_CO,
            self::DETROIT_MI,
            self::EDISON_NJ,
            self::GROVE_CITY_OH,
            self::GROVEPORT_OH,
            self::HOUSTON_TX,
            self::INDIANAPOLIS_IN,
            self::KANSAS_CITY_KS,
            self::LOS_ANGELES_CA,
            self::MARTINSBURG_WV,
            self::MEMPHIS_TN,
            self::MINNEAPOLIS_MN,
            self::NEW_BERLIN_WI,
            self::NORTHBOROUGH_MA,
            self::ORLANDO_FL,
            self::PHONEIX_AZ,
            self::PITTSBURGH_PA,
            self::RENO_NV,
            self::SACRAMENTO_CA,
            self::SALT_LAKE_CITY_UT,
            self::SEATTLE_WA,
            self::ST_LOUIS_MO,
            self::WINDSOR_CT,
            self::NEWARK_NY,
            self::SOUTH_BRUNSWICK_NJ,
            self::SCRANTON_PA,
            self::WHEELING_IL,
        ];
    }
}


