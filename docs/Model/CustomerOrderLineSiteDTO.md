# # CustomerOrderLineSiteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**number** | **string** | Unique number that identifies the order line site record. | [optional] [readonly]
**trading_partner_site** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**order_quantity** | **int** | Quantity of stock for the item that was ordered for the site. |
**shipped_quantity** | **int** | Quantity of stock for the item that was shipped to the site. | [optional]
**canceled_quantity** | **int** | Quantity of stock on the order line for the site that was canceled. | [optional]
**returned_quantity** | **int** | Quantity of stock for the item that was returned from the site. | [optional] [readonly]
**source** | **string** | Source system in which the order line site record originated. | [optional] [readonly]
**created_date** | **\DateTime** | Date and time that the line site was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the line site was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
