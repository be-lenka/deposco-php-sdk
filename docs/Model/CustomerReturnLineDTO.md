# # CustomerReturnLineDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**line_number** | **string** | Identification number for the order line, including a next-up line number starting at 1. |
**customer_line_number** | **string** | Identifier of the order line in the external system in which the order was created. | [optional]
**related_order_line** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**sort_order** | **int** | Position of the order line in relation to other order lines for the order. | [optional]
**order_header** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**pack** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**description** | **string** | Text that describes the order line. | [optional]
**order_pack_quantity** | **int** | Quantity of the item/pack that was ordered. Must be a positive value. |
**canceled_pack_quantity** | **int** | Quantity of the item/pack that was canceled. Must be a positive value. | [optional] [readonly]
**lot_number** | **string** | Lot number for stock on the order line. | [optional]
**born_on_date** | **\DateTime** | Born on date for stock on the order line. | [optional]
**expiration_date** | **\DateTime** | Expiration date for stock on the order line. | [optional]
**product_code** | **string** | Product code associated with the item on the order line. | [optional]
**inventory_condition** | **string** | Additional field for describing the condition of the stock on the order line. | [optional]
**inventory_attribute1** | **string** | Additional field for providing descriptive information for the stock on the order line. | [optional]
**inventory_attribute2** | **string** | Additional field for providing descriptive information for the stock on the order line. | [optional]
**planned_ship_date** | **\DateTime** | Date when the stock for the order line should be shipped. Custom configuration is required in Deposco to leverage this value. | [optional]
**planned_arrival_date** | **\DateTime** | Date when the stock for the order line should be shipped. Custom configuration is required to leverage this value. | [optional]
**unit_price** | **int** | Either the unit price of the item on the order line from the item record, or the price of the item from a price list. Required for international shipments if customs data must be declared based on the unit price on the order. | [optional]
**unit_cost** | **int** | Unit cost (for an Each pack) of the item on the order line. | [optional]
**price_code** | **string** | Used for NetSuite socket integrations. | [optional]
**line_total** | **int** | Calculated by multiplying the net price by the order quantity and the pack quantity. | [optional]
**taxable** | **bool** | Whether tax should be applied when calculating the total for the order line. | [optional]
**tax_cost** | **int** | Tax percentage to apply to the order line. | [optional]
**taxable_total** | **int** | Calculated by multiplying the unit cost, the order pack quantity, and the tax cost for the order line. | [optional]
**untaxable_total** | **int** | Used for eBay socket integrations. | [optional]
**extended_total** | **int** | Calculated by adding the line total and the taxable total for the order line. | [optional]
**discount_amount** | **int** | Unit discount amount. For example, if the unit price is $1 and the discount is 10%, then the discount amount is $0.10. | [optional]
**shipping_amount** | **int** | Used for socket integrations such as Amazon Seller Central, ChannelAdvisor, BigCommerce, and eBay. | [optional]
**weight** | [**\BeLenka\Deposco\Model\BaseOrderLineDTOWeight**](BaseOrderLineDTOWeight.md) |  | [optional]
**import_reference** | **string** | Additional reference number for the order line when orders are imported into Deposco. | [optional]
**export_reference** | **string** | Additional reference number for the order line when orders are exported from Deposco. | [optional]
**custom_attribute1** | **string** | Custom attribute for the order line. | [optional]
**custom_attribute2** | **string** | Custom attribute for the order line. | [optional]
**custom_attribute3** | **string** | Custom attribute for the order line. | [optional]
**custom_fields** | [**\BeLenka\Deposco\Model\CustomFieldDTO[]**](CustomFieldDTO.md) | Array of custom fields for the order line. | [optional]
**notes** | [**\BeLenka\Deposco\Model\NoteDTO[]**](NoteDTO.md) | Array of notes for the order line. | [optional]
**channels** | [**\BeLenka\Deposco\Model\ChannelDTO[]**](ChannelDTO.md) | Array of channel cross-references for the order line. | [optional]
**created_date** | **\DateTime** | Date and time that the order line was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the order line was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**order_line_status** | **string** | Status of the order line. New order lines should be created with a status of New. | [optional] [readonly]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**co_line** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**received_pack_quantity** | **int** | Quantity of the item/pack that was received. | [optional]
**received_damaged_pack_quantity** | **int** | Quantity of the item/pack that was received in a damaged condition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
