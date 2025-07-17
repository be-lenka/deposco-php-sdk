# # ReceiptDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**number** | **string** | Unique identification number for the receipt. |
**status** | **string** | Status of the receipt. | [optional]
**received_item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**received_pack** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**received_pack_quantity** | **int** | Quantity of the item/pack that was received. | [optional]
**destination_location** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**container** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**master_lpn_number** | **string** | Container number of the parent container for the container in which the received stock is located. For example, if the received stock is in a container on a pallet, then this is the container number of the pallet. | [optional]
**unit_price** | **int** | Unit price of the received item. | [optional]
**lot_number** | **string** | Lot number for the stock that was received. | [optional]
**serial_number** | **string** | Serial number for the stock that was received. | [optional]
**born_on_date** | **\DateTime** | Manufacturing date for the stock that was received. | [optional]
**expiration_date** | **\DateTime** | Expiration date for the stock that was received. | [optional]
**inventory_condition** | **string** | Additional field for describing the condition of the stock that was received. | [optional]
**damaged** | **bool** | Whether the stock that was received is damaged. | [optional]
**received_damaged_pack_quantity** | **int** | Quantity of the item/pack that was received that was damaged. | [optional]
**disposition** | **string** | Reserved for future use. | [optional]
**catch_weight** | **int** | Reserved for future use. | [optional]
**inventory_attribute1** | **string** | Additional field for providing descriptive information for the stock that was received. | [optional]
**inventory_attribute2** | **string** | Additional field for providing descriptive information for the stock that was received. | [optional]
**custom_attribute1** | **string** | Custom attribute for the stock that was received. | [optional]
**custom_attribute2** | **string** | Custom attribute for the stock that was received. | [optional]
**custom_attribute3** | **string** | Custom attribute for the stock that was received. | [optional]
**import_reference1** | **string** | Additional reference number for the order line that is associated with the receipt line if the purchase order was imported into Deposco. | [optional]
**import_reference2** | **string** | Additional reference number for the order line that is associated with the receipt line if the purchase order was imported into Deposco. | [optional]
**export_reference1** | **string** | Additional reference number for the order line that is associated with the receipt line if the purchase order was exported from Deposco to another system. | [optional]
**export_reference2** | **string** | Additional reference number for the order line that is associated with the receipt line if the purchase order was exported from Deposco to another system. | [optional]
**other_reference_number** | **string** | Additional reference number for the associated purchase order for the receipt. | [optional]
**order_line** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**channels** | [**\BeLenka\Deposco\Model\ChannelDTO[]**](ChannelDTO.md) | Array of channel cross-references for the receipt. | [optional]
**created_date** | **\DateTime** | Date and time that the receipt was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the receipt was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
