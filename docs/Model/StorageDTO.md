# # StorageDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**location** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**pack** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**type** | **string** | Type of storage. May optionally be associated with replenishment logic. Available values include: | [optional]
**minimum** | **int** | Minimum number of stock units that should be stored at the specified location. When the stock in the location falls below the minimum, a warehouse replenishment task can be generated to move inventory from a reserve location so that the quantity of inventory at the picking location equals but does not exceed the specified maximum. | [optional]
**maximum** | **int** | Maximum number of stock units that can be stored at the specified location. | [optional]
**minimum_pick** | **int** | Minimum number of stock units that can be picked from the specified location. | [optional]
**maximum_pick** | **int** | Maximum number of stock units that can be picked from the specified location. | [optional]
**opportunistic_count_threshold** | **int** | When the number of stock units at the location reaches this value, then a cycle count can be automatically generated. Typically, this value is a number below the minimum for the storage detail record. | [optional]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**created_date** | **\DateTime** | Date and time that the storage detail record was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the storage detail record was last updated. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
