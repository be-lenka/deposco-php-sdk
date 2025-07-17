# # BaseShipmentDTOShippingCosts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_cost** | **int** | Cost of the shipment. | [optional]
**extended_shipping_cost** | **int** | Cost of the shipment. | [optional]
**tax_cost** | **int** | Tax costs for the shipment. | [optional]
**insurance_required** | **bool** | Whether insurance is required for the package(s) in which the order ships. Must be set to &#x60;true&#x60; if insurance is required above the minimum default value for the shipping carrier. Insurance cost is calculated based on the value of items in the shipping container. | [optional]
**insurance_cost** | **int** | General shipment attribute. | [optional]
**insurance_amount** | **int** | General shipment attribute. | [optional]
**handling_cost** | **int** | Handling cost for the shipment, which includes the expense of preparing the packages for the shipment and the materials used for packaging. | [optional]
**labor_cost** | **int** | General shipment attribute. | [optional]
**materials_cost** | **int** | General shipment attribute. | [optional]
**rate_zone** | **string** | Zone defined by the shipping carrier to which the shipment is sent. This zone is used for calculating the rate that is used for shipping costs for the shipment. | [optional]
**published_rate** | **int** | Standard rate that is published by the shipping carrier that applies for the shipment. | [optional]
**currency_code** | **string** | SO 4217 code for the currency used on the shipment, such as &#x60;USD&#x60;, &#x60;GBP&#x60;, or &#x60;EUR&#x60;. | [optional]
**freight_terms_type** | **string** | Identifies how to determine the account that is responsible for payment of shipping costs for the shipment. Set to one of the following values:  - &#x60;Prepaid&#x60; - The shipping carrier account that created the shipment will be responsible for payment of shipping costs.  - &#x60;Collect&#x60; - The recipient is billed for the shipment. Either enter the shipping carrier account number in the &#x60;freightBillToAccount&#x60; field, or enter the account number in the trading partner record for the trading partner associated with the order.  - &#x60;Third Party&#x60; - A trading partner is billed for the shipment. Enter the shipping carrier account number in the trading partner record for the trading partner associated with the order.  - &#x60;Consignee&#x60; - Contractual billing is used to bill the customer/recipient for UPS Ground shipping services. | [optional]
**fee_terms_type** | **string** | General shipment attribute. | [optional]
**customs_declared_value** | **int** | Monetary worth placed on goods by the importer for customs purposes. Thus value is typically the price the buyer paid for the goods and is used to calculate duties and taxes. | [optional]
**incoterms_type** | **string** | International Commercial Terms type from the International Chamber of Commerce (ICC). Used for international orders. | [optional]
**duty_paid_by_type** | **string** | Person or company who is responsible for paying international shipping duties. | [optional]
**duty_paid_by_contact_name** | **string** | Name of the contact person who is responsible for paying international shipping duties. | [optional]
**duty_paid_by_account** | **string** | Account number of the person or company who is responsible for paying international shipping duties. | [optional]
**duty_paid_by_postal_code** | **string** | Postal code of the address for the person or company who is responsible for paying international shipping duties. | [optional]
**duty_paid_by_country** | **string** | Country of the address for the person or company who is responsible for paying international shipping duties. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
