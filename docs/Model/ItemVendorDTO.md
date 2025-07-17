# # ItemVendorDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**trading_partner** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**item_sku_upc** | **string** | UPC of the item for the supplier. | [optional]
**unit_cost** | **int** | Unit cost for purchasing the item from the supplier. | [optional]
**short_description** | **string** | Brief description of the item from the supplier. | [optional]
**long_description** | **string** | Full description of the item from the supplier. | [optional]
**is_preferred** | **bool** | Whether the supplier is the preferred supplier from which the item is purchased. | [optional]
**fulfillment_type** | **string** | How orders for the item are fulfilled by the supplier. | [optional]
**reorder_point** | **int** | Inventory level at which stock needs to be reordered. Used for informational purposes only. For inventory planning with Bright Inventory, this value is automatically calculated and stored on the plan item record. | [optional]
**reorder_quantity** | **int** | Minimum quantity of the item that can be ordered from the supplier. Used for informational purposes only. For inventory planning with Bright Inventory, this value is defined on the plan item supplier record. | [optional]
**quantity** | **int** | Quantity of the item that is available from the supplier. Used for informational purposes only. | [optional]
**import_reference1** | **string** | Used for socket integrations to store the supplier&#39;s ID for the item. | [optional]
**import_reference2** | **string** | Used for socket integrations to store additional supplier information for the item, such as a SKU. | [optional]
**export_reference1** | **string** | Used for socket integrations to store information about the supplier. | [optional]
**export_reference2** | **string** | Used for socket integrations to store information about the supplier. | [optional]
**created_date** | **\DateTime** | Date and time that the item vendor was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the item vendor was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
