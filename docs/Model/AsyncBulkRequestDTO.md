# # AsyncBulkRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_type** | **string** | Type of entity to create or update. |
**path_parameters** | **string** | Comma-separated list of path parameters. For example, &#x60;orderId&#x3D;123,orderLineId&#x3D;1&#x60;. Refer to the &#x60;POST&#x60; endpoint for the entity that is specified in &#x60;entityType&#x60; for a list of supported parameters for the entity. | [optional]
**request_parameters** | **string** | Comma-separated list of request parameters. For example, &#x60;businessUnit&#x3D;ABC,orderStatus&#x3D;New&#x60;. Refer to the &#x60;POST&#x60; endpoint for the entity that is specified in &#x60;entityType&#x60; for a list of supported parameters for the entity. | [optional]
**entities** | **array<string,mixed>[]** | Array of JSON objects for the entities to create or update. All entities must be the type that is specified in &#x60;entityType&#x60;. Refer to the &#x60;POST&#x60; endpoint for the entity type for details on the required format for the JSON objects. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
