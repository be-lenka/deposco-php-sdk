# # TradingPartnerParameterDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**trading_partner** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**code** | **string** | Code for the parameter. Use a value of &#x60;SSCC_INCLUDE_AI&#x60; if the parameter is used for enabling generation of SSCC labels for the trading partner. | [optional]
**number** | **string** | Unique identifier for the parameter. |
**description** | **string** | Additional text that provides information about the parameter. | [optional]
**result_name** | **string** | Name of the result for the parameter. Use a value of &#x60;PackingSlipMessage&#x60; or &#x60;ReturnPolicyMessage&#x60; if the parameter is used for adding a general message or return policy message to packing slips for the trading partner. Use a value of &#x60;SSCC_INCLUDE_AI&#x60; if the parameter is used for enabling generation of SSCC labels for the trading partner. | [optional]
**result_value** | **string** | Value of the result for the parameter. If the parameter is used for adding a message to packing slips for the trading partner, then enter the text of the message.  Use a value of &#x60;true&#x60; if the parameter is used for enabling generation of SSCC labels for the trading partner. | [optional]
**created_date** | **\DateTime** | Date and time that the parameter was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the parameter was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
