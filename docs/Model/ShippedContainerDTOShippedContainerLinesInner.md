# # ShippedContainerDTOShippedContainerLinesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**pack** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**external_line_number** | **string** | Reference number for the associated order line in an external system where the order was created. | [optional]
**shipped_pack_quantity** | **int** | Quantity of the item/pack in the shipped container. | [optional]
**shipped_damaged_pack_quantity** | **int** | Quantity of the item/pack in the shipped container that was damaged. | [optional]
**canceled_pack_quantity** | **int** | Quantity of the item/pack on the order line that was canceled. | [optional]
**lot_number** | **string** | Lot number for the items in the shipped container. | [optional]
**line_serial_numbers** | [**\BeLenka\Deposco\Model\BaseShipmentLineDTOLineSerialNumbersInner[]**](BaseShipmentLineDTOLineSerialNumbersInner.md) | Array of serial numbers for the items in the shipped container. | [optional]
**born_on_date** | **\DateTime** | Born on date for the items in the shipped container. | [optional]
**expiration_date** | **\DateTime** | Expiration date for the items in the shipped container. | [optional]
**inventory_condition** | **string** | Condition of the inventory in the shipped container. | [optional]
**inventory_attribute1** | **string** | Additional field for inventory attributes for the stock in the shipped container. | [optional]
**inventory_attribute2** | **string** | Additional field for inventory attributes for the stock in the shipped container. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
