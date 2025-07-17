# # InventoryAdjustmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**facility** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**pack** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**quantity** | **int** | Quantity of inventory that changed. |
**action_type** | **string** | Type of action that resulted in the inventory adjustment. |
**inventory_status** | **string** | Current status of the inventory. | [optional]
**reason_code** | **string** | Code that identifies the reason why the inventory changed. | [optional]
**serial_number** | **string** | Serial number that is assigned to the inventory. | [optional]
**lot_number** | **string** | Lot number that is assigned to the inventory. | [optional]
**born_on_date** | **\DateTime** | Born on date for the inventory. | [optional]
**expiration_date** | **\DateTime** | Expiration date for the inventory. | [optional]
**inventory_condition** | **string** | Condition of the inventory. | [optional]
**inventory_attribute1** | **string** | Additional field with descriptive information about the inventory. | [optional]
**inventory_attribute2** | **string** | Additional field with descriptive information about the inventory. | [optional]
**custom_attribute1** | **string** | Custom attribute that is assigned to the inventory. | [optional]
**custom_attribute2** | **string** | Custom attribute that is assigned to the inventory. | [optional]
**created_date** | **\DateTime** | Date and time that the inventory adjustment was created. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
