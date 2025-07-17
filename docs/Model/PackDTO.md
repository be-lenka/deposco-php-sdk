# # PackDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**type** | **string** | Type of pack. Use one of the following values: &#x60;Each&#x60;, &#x60;Case&#x60;, &#x60;Bundle&#x60;, &#x60;Loose&#x60;, &#x60;Mill Unit&#x60;, &#x60;Outer&#x60;, &#x60;Unit&#x60; |
**quantity** | **int** | Number of items in the pack. Must be a positive integer. |
**key** | **string** | System-generated identification key for the pack, which is created by adding the item, pack type, and quantity. | [optional] [readonly]
**name** | **string** | Name that identifies the pack. | [optional]
**new_pack_flag** | **bool** | Set to true to require users to capture the weight and dimensions of the pack the next time that the pack is received. This field is then automatically set to false. | [optional]
**dimensions** | [**\BeLenka\Deposco\Model\Dimension**](Dimension.md) |  | [optional]
**weight** | [**\BeLenka\Deposco\Model\PackDTOWeight**](PackDTOWeight.md) |  | [optional]
**carton_group** | **string** | ID of the carton type. Used with cartonization to narrow the list of available box types to use for shipping. | [optional]
**preferred_carton_type** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**ready_to_ship** | **bool** | Set to true if the item is already in a shipping container and therefore does not require any further packaging for shipping, or false if the item must be packed in a box for shipping. For example, a vacuum cleaner can be shipped in its own box. | [optional]
**lpn_tracking_enabled** | **bool** | Whether to enable LPN tracking for the pack. | [optional]
**upcs** | [**\BeLenka\Deposco\Model\PackUPCCollectionDTO**](PackUPCCollectionDTO.md) |  | [optional]
**carrier_special_services** | [**\BeLenka\Deposco\Model\CarrierSpecialServiceDTO[]**](CarrierSpecialServiceDTO.md) |  | [optional]
**created_date** | **\DateTime** | Date and time that the pack was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the pack was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
