# # TradingPartnerSiteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**trading_partner** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**type** | **string** | Type of location. Available values are &#x60;Store&#x60; and &#x60;DC&#x60;. | [optional]
**site_name** | **string** | Name that identifies the trading partner site. |
**site_code** | **string** | Code for the site from an incoming electronic data interchange (EDI) file. Used to match and derive relevant information such as the destination distribution center (DC) or address. | [optional]
**address** | [**\BeLenka\Deposco\Model\TradingPartnerSiteDTOAddress**](TradingPartnerSiteDTOAddress.md) |  | [optional]
**default_ship_via** | **string** | Default shipping service that should be used for shipments that are sent to the trading partner site. | [optional]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**created_date** | **\DateTime** | Date and time that the trading partner site was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the trading partner site was last updated. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
