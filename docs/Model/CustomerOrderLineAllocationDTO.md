# # CustomerOrderLineAllocationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**order_line** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**ship_from_facility** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**status** | **string** | Status of the allocation for the order line. | [optional] [readonly]
**allocated_quantity** | **int** | Quantity of stock for the order line that was allocated from the specified facility. |
**canceled_quantity** | **int** | Quantity of stock for the order line that was allocated from the specified facility but was then canceled. | [optional] [readonly]
**source** | **string** | Source system for the allocation. Set to a value of &#x60;External&#x60; if the allocation was created by an external system or a value of either &#x60;DOM&#x60; or &#x60;Internal&#x60; if the allocation was created through sourcing and routing in Deposco. | [optional] [readonly]
**created_date** | **\DateTime** | Date and time that the allocation was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the allocation was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
