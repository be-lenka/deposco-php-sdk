# # ShippedContainerDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**number** | **string** | Unique identification number for the shipped container. |
**lpn_number** | **string** | LPN label number or barcode for the shipped container. | [optional]
**type** | **string** | Type of container. | [optional]
**secondary_type** | **string** | When a shipped container is on a pallet, the &#x60;type&#x60; of the container is &#x60;Shipping&#x60;, and the &#x60;secondaryType&#x60; is &#x60;Pallet&#x60;. | [optional]
**carton_type** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**status** | **string** | Status of the shipped container. | [optional]
**description** | **string** | Text that provides additional information about the shipped container. | [optional]
**dimensions** | [**\BeLenka\Deposco\Model\Dimension**](Dimension.md) |  | [optional]
**weight** | [**\BeLenka\Deposco\Model\ShippedContainerDTOWeight**](ShippedContainerDTOWeight.md) |  | [optional]
**parent** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**master_lpn_number** | **string** | LPN number of an outer container in which other shipped containers are packed. | [optional]
**location** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**shipment** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**trip** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**tracking_number** | **string** | Tracking number for the shipment that is associated with the shipped container. | [optional]
**tracking_number2** | **string** | Secondary tracking number that is provided by some services that use multiple tracking numbers. | [optional]
**return_tracking_number** | **string** | Tracking number for the return shipping label that is included in the container. | [optional]
**sscc_lpn_number** | **string** | SSCC number for the shipped container. | [optional]
**package_type** | **string** | Type of package for the container, which enables shipping carriers to determine how the container is packed. Typically populated on the shipping service request. | [optional]
**usps_construct_code** | **string** | Construct Code from the U.S. Postal Service. The Construct Code is a barcode that consolidates the ZIP code, mailer ID, and serial number. | [optional]
**shipping_cost** | **int** | Cost to ship the container. | [optional]
**insured_value** | **int** | Value of the contents of the shipped container, which is used to calculate the insurance for the container that is sent to the shipping providers. | [optional]
**sequence** | **int** | Used by the Print to Panda process to determine the x of y values for a container. | [optional]
**sequence_total** | **int** | Used by the Print to Panda process to determine the x of y values for a container. | [optional]
**reference_number1** | **string** | Used by the Assign Trip to Container process to store the trip number. | [optional]
**shipped_container_lines** | [**\BeLenka\Deposco\Model\ShippedContainerDTOShippedContainerLinesInner[]**](ShippedContainerDTOShippedContainerLinesInner.md) |  | [optional]
**created_date** | **\DateTime** | Date and time that the shipped container was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the shipped container was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
