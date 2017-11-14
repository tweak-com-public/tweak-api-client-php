# ProductSize

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**code** | **string** |  | 
**thumbnail** | **string** |  | [optional] 
**foldingType** | **string** |  | [optional] 
**foldingMethod** | **string** |  | [optional] 
**bindingType** | **string** |  | [optional] 
**doubleSided** | **bool** |  | [optional] [default to false]
**dieCut** | **bool** |  | [optional] [default to false]
**unfoldedSize** | [**\Swagger\Client\Model\Dimensions**](Dimensions.md) |  | [optional] 
**foldedSize** | [**\Swagger\Client\Model\Dimensions**](Dimensions.md) |  | [optional] 
**pdfSize** | [**\Swagger\Client\Model\Dimensions**](Dimensions.md) |  | [optional] 
**pdfPageCount** | **double** |  | [optional] [default to 1.0]
**pdfDpi** | **double** |  | [optional] [default to 300.0]
**pdfColorProfile** | **string** |  | [optional] [default to '']
**customerSize** | [**\Swagger\Client\Model\Dimensions**](Dimensions.md) |  | [optional] 
**customerPageCount** | **double** |  | [optional] [default to 1.0]
**maxBleed** | [**\Swagger\Client\Model\Bounds**](Bounds.md) |  | [optional] 
**defaultBleed** | [**\Swagger\Client\Model\Bounds**](Bounds.md) |  | [optional] 
**safeArea** | [**\Swagger\Client\Model\Bounds**](Bounds.md) |  | [optional] 
**unit** | **string** |  | [optional] 
**frame** | **double** |  | [optional] [default to 0.0]
**shape** | **string** |  | [optional] 
**orientation** | **string** |  | [optional] 
**format** | **string** |  | 
**envelopeWindow** | **string** |  | [optional] 
**canvasImageCount** | **double** |  | [optional] [default to 0.0]
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**id** | **string** |  | [optional] 
**typeId** | **string** |  | [optional] 
**type** | [**\Swagger\Client\Model\ProductType**](ProductType.md) |  | [optional] 
**materials** | [**\Swagger\Client\Model\ProductMaterial[]**](ProductMaterial.md) |  | [optional] 
**sizeMaterials** | [**\Swagger\Client\Model\ProductSizeMaterial[]**](ProductSizeMaterial.md) |  | [optional] 
**products** | [**\Swagger\Client\Model\Product[]**](Product.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


