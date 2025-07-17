# # KitHeaderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**name** | **string** | Name that identifies the kit. |
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**kit_usage** | **string** | Description of how the kit is used. | [optional]
**kit_details** | [**\BeLenka\Deposco\Model\KitDetailCollectionDTO**](KitDetailCollectionDTO.md) |  | [optional]
**min_workorder_size** | **int** | Minimum number of kits described by this kit header that can be built on a single workorder. | [optional]
**max_workorder_size** | **int** | Maximum number of kits described by this kit header that can be built on a single workorder. | [optional]
**lead_time** | **int** | Amount of time required to build the kit. | [optional]
**custom_attribute1** | **string** | Custom field for the kit. | [optional]
**custom_attribute2** | **string** | Custom field for the kit. | [optional]
**custom_attribute3** | **string** | Custom field for the kit. | [optional]
**created_date** | **\DateTime** | Date and time that the kit header was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the kit header was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
