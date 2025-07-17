# # CompanyDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**code** | **string** | Unique, short, alphanumeric code for the company. This code cannot be changed after the company is created. |
**name** | **string** | Name of the company or business unit. | [optional]
**description** | **string** | Text that describes or provides additional information for the company or business unit. | [optional]
**active** | **bool** | Whether the company is active and available for use. | [optional] [default to true]
**contact** | [**\BeLenka\Deposco\Model\CompanyDTOContact**](CompanyDTOContact.md) |  | [optional]
**address** | [**\BeLenka\Deposco\Model\CompanyDTOAddress**](CompanyDTOAddress.md) |  | [optional]
**website** | **string** | URL for the website of the company or business unit. | [optional]
**industry** | **string** | Industry that the company serves. | [optional]
**number_of_employees** | **int** | Number of employees at the company or business unit. | [optional]
**annual_revenue** | **int** | Annual revenue for the company or business unit. | [optional]
**doing_business_as** | **string** | Trade name or \&quot;doing business as\&quot; (DBA) name for the company or business unit. | [optional]
**naics** | **string** | North American Industry Classification System (NAICS) code for the company. | [optional]
**sic** | **string** | Standard Industrial Classification (SIC) code for the company. | [optional]
**locale** | [**\BeLenka\Deposco\Model\Locale**](Locale.md) |  | [optional]
**date_format** | [**\BeLenka\Deposco\Model\DateFormat**](DateFormat.md) |  | [optional]
**start_day_of_week** | **string** | Whether Sunday or Monday is the first day of the week when users who are assigned to the company select a date from a calendar control. | [optional]
**time_zone** | [**\BeLenka\Deposco\Model\TimeZone**](TimeZone.md) |  | [optional]
**packing_slip_level** | **string** | Whether packing slips for orders that are associated with the company are printed at either the &#x60;Shipment&#x60; level or at the shipping &#x60;Container&#x60; level. | [optional] [default to 'Container']
**packing_slip_report** | **string** | Name of the global (Pentaho) report that is used for printing packing slips for orders that are associated with the company. | [optional]
**use_sas70_compliance** | **bool** | Whether to override the configured password policies and enforce more stringent requirements such as requiring all characters in passwords to be unique and requiring passwords to be different than the previous four passwords. | [optional]
**uccean_company_number** | **string** | Prefix that identifies the company and is used to generate serial shipping container codes (SSCCs) for shipping labels to retailers that require SSCC-18 codes. The prefix should be between 7 and 10 digits. | [optional]
**sscc_expansion_digit** | **int** | Extension digit for a Serial Shipping Container Code (SSCC). | [optional]
**created_date** | **\DateTime** | Date and time that the company was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the company was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
