# # ParseAddressResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **double** | A confidence score between zero and one that indicates how certain the API is that it understood the text. | 
**address** | [**PartialAddress**](PartialAddress.md) | The parsed address.  This address may not be complete, depending on how much information was included in the text and how confident the API is about each recognized entity.  &gt; **Note:** The address-recognition API does not currently perform any validation of the parsed address, so we recommend that you use the [address-validation API](https://www.shipengine.com/docs/addresses/validation/) to ensure that the address is correct. | 
**entities** | [**\ShipEngineApi\Model\RecognizedEntity[]**](RecognizedEntity.md) | All of the entities that were recognized in the text. An \&quot;entity\&quot; is a single piece of data, such as a city, a postal code, or an address line.  Each entity includes the original text and the parsed value. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


