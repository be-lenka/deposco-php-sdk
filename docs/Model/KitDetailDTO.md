# # KitDetailDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**type** | **string** | Whether the kit detail&#39;s item is created by the kit build (&#x60;Output&#x60;) or consumed in the kit build (&#x60;Input&#x60;). |
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**kit_header** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**pack** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**quantity** | **int** | Quantity of the item that is required for the kit. |
**rank** | **int** | Order of this kit detail in the build, if applicable. | [optional]
**custom_attribute1** | **string** | Custom field for the kit detail. | [optional]
**custom_attribute2** | **string** | Custom field for the kit detail. | [optional]
**custom_attribute3** | **string** | Custom field for the kit detail. | [optional]
**created_date** | **\DateTime** | Date and time that the kit detail was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the kit detail was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
