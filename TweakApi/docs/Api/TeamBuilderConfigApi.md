# Tweak\Api\TeamBuilderConfigApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigsChangeStreamGet**](TeamBuilderConfigApi.md#teamBuilderConfigsChangeStreamGet) | **GET** /TeamBuilderConfigs/change-stream | Create a change stream.
[**teamBuilderConfigsChangeStreamPost**](TeamBuilderConfigApi.md#teamBuilderConfigsChangeStreamPost) | **POST** /TeamBuilderConfigs/change-stream | Create a change stream.
[**teamBuilderConfigsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsCountGet) | **GET** /TeamBuilderConfigs/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigsFindOneGet**](TeamBuilderConfigApi.md#teamBuilderConfigsFindOneGet) | **GET** /TeamBuilderConfigs/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsGet) | **GET** /TeamBuilderConfigs | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigsIdDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdDelete) | **DELETE** /TeamBuilderConfigs/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigsIdExistsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdExistsGet) | **GET** /TeamBuilderConfigs/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigsIdGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdGet) | **GET** /TeamBuilderConfigs/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigsIdHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdHead) | **HEAD** /TeamBuilderConfigs/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigsIdPatch**](TeamBuilderConfigApi.md#teamBuilderConfigsIdPatch) | **PATCH** /TeamBuilderConfigs/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdProductGroupsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsCountGet) | **GET** /TeamBuilderConfigs/{id}/productGroups/count | Counts productGroups of TeamBuilderConfig.
[**teamBuilderConfigsIdProductGroupsDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsDelete) | **DELETE** /TeamBuilderConfigs/{id}/productGroups | Deletes all productGroups of this model.
[**teamBuilderConfigsIdProductGroupsFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productGroups/{fk} | Delete a related item by id for productGroups.
[**teamBuilderConfigsIdProductGroupsFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsFkGet) | **GET** /TeamBuilderConfigs/{id}/productGroups/{fk} | Find a related item by id for productGroups.
[**teamBuilderConfigsIdProductGroupsFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsFkPut) | **PUT** /TeamBuilderConfigs/{id}/productGroups/{fk} | Update a related item by id for productGroups.
[**teamBuilderConfigsIdProductGroupsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsGet) | **GET** /TeamBuilderConfigs/{id}/productGroups | Queries productGroups of TeamBuilderConfig.
[**teamBuilderConfigsIdProductGroupsNkTypesCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesCountGet) | **GET** /TeamBuilderConfigs/{id}/productGroups/{nk}/types/count | Counts types of ProductGroup.
[**teamBuilderConfigsIdProductGroupsNkTypesDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesDelete) | **DELETE** /TeamBuilderConfigs/{id}/productGroups/{nk}/types | Deletes all types of this model.
[**teamBuilderConfigsIdProductGroupsNkTypesFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productGroups/{nk}/types/{fk} | Delete a related item by id for types.
[**teamBuilderConfigsIdProductGroupsNkTypesFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesFkGet) | **GET** /TeamBuilderConfigs/{id}/productGroups/{nk}/types/{fk} | Find a related item by id for types.
[**teamBuilderConfigsIdProductGroupsNkTypesFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesFkPut) | **PUT** /TeamBuilderConfigs/{id}/productGroups/{nk}/types/{fk} | Update a related item by id for types.
[**teamBuilderConfigsIdProductGroupsNkTypesGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesGet) | **GET** /TeamBuilderConfigs/{id}/productGroups/{nk}/types | Queries types of ProductGroup.
[**teamBuilderConfigsIdProductGroupsNkTypesPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsNkTypesPost) | **POST** /TeamBuilderConfigs/{id}/productGroups/{nk}/types | Creates a new instance in types of this model.
[**teamBuilderConfigsIdProductGroupsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsPost) | **POST** /TeamBuilderConfigs/{id}/productGroups | Creates a new instance in productGroups of this model.
[**teamBuilderConfigsIdProductGroupsRelFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsRelFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productGroups/rel/{fk} | Remove the productGroups relation to an item by id.
[**teamBuilderConfigsIdProductGroupsRelFkHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsRelFkHead) | **HEAD** /TeamBuilderConfigs/{id}/productGroups/rel/{fk} | Check the existence of productGroups relation to an item by id.
[**teamBuilderConfigsIdProductGroupsRelFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductGroupsRelFkPut) | **PUT** /TeamBuilderConfigs/{id}/productGroups/rel/{fk} | Add a related item by id for productGroups.
[**teamBuilderConfigsIdProductSizeMaterialsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/count | Counts productSizeMaterials of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizeMaterialsDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizeMaterials | Deletes all productSizeMaterials of this model.
[**teamBuilderConfigsIdProductSizeMaterialsFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizeMaterials/{fk} | Delete a related item by id for productSizeMaterials.
[**teamBuilderConfigsIdProductSizeMaterialsFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/{fk} | Find a related item by id for productSizeMaterials.
[**teamBuilderConfigsIdProductSizeMaterialsFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizeMaterials/{fk} | Update a related item by id for productSizeMaterials.
[**teamBuilderConfigsIdProductSizeMaterialsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials | Queries productSizeMaterials of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/{nk}/material | Fetches belongsTo relation material.
[**teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/{nk}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**teamBuilderConfigsIdProductSizeMaterialsNkSizeGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsNkSizeGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/{nk}/size | Fetches belongsTo relation size.
[**teamBuilderConfigsIdProductSizeMaterialsNkTeamGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsNkTeamGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterials/{nk}/team | Fetches belongsTo relation team.
[**teamBuilderConfigsIdProductSizeMaterialsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsPost) | **POST** /TeamBuilderConfigs/{id}/productSizeMaterials | Creates a new instance in productSizeMaterials of this model.
[**teamBuilderConfigsIdProductSizeMaterialsRelCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/count | Counts productSizeMaterialsRel of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizeMaterialsRelDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizeMaterialsRel | Deletes all productSizeMaterialsRel of this model.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizeMaterials/rel/{fk} | Remove the productSizeMaterials relation to an item by id.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0) | **DELETE** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{fk} | Delete a related item by id for productSizeMaterialsRel.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{fk} | Find a related item by id for productSizeMaterialsRel.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkHead) | **HEAD** /TeamBuilderConfigs/{id}/productSizeMaterials/rel/{fk} | Check the existence of productSizeMaterials relation to an item by id.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizeMaterials/rel/{fk} | Add a related item by id for productSizeMaterials.
[**teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0) | **PUT** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{fk} | Update a related item by id for productSizeMaterialsRel.
[**teamBuilderConfigsIdProductSizeMaterialsRelGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel | Queries productSizeMaterialsRel of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{nk}/builderConfig | Fetches belongsTo relation builderConfig.
[**teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{nk}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet) | **GET** /TeamBuilderConfigs/{id}/productSizeMaterialsRel/{nk}/productSizeMaterial | Fetches belongsTo relation productSizeMaterial.
[**teamBuilderConfigsIdProductSizeMaterialsRelPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizeMaterialsRelPost) | **POST** /TeamBuilderConfigs/{id}/productSizeMaterialsRel | Creates a new instance in productSizeMaterialsRel of this model.
[**teamBuilderConfigsIdProductSizesCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/count | Counts productSizes of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizesDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes | Deletes all productSizes of this model.
[**teamBuilderConfigsIdProductSizesFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{fk} | Delete a related item by id for productSizes.
[**teamBuilderConfigsIdProductSizesFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{fk} | Find a related item by id for productSizes.
[**teamBuilderConfigsIdProductSizesFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/{fk} | Update a related item by id for productSizes.
[**teamBuilderConfigsIdProductSizesGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesGet) | **GET** /TeamBuilderConfigs/{id}/productSizes | Queries productSizes of TeamBuilderConfig.
[**teamBuilderConfigsIdProductSizesNkMaterialsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/count | Counts materials of ProductSize.
[**teamBuilderConfigsIdProductSizesNkMaterialsDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials | Deletes all materials of this model.
[**teamBuilderConfigsIdProductSizesNkMaterialsFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/{fk} | Delete a related item by id for materials.
[**teamBuilderConfigsIdProductSizesNkMaterialsFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/{fk} | Find a related item by id for materials.
[**teamBuilderConfigsIdProductSizesNkMaterialsFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/{fk} | Update a related item by id for materials.
[**teamBuilderConfigsIdProductSizesNkMaterialsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials | Queries materials of ProductSize.
[**teamBuilderConfigsIdProductSizesNkMaterialsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsPost) | **POST** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials | Creates a new instance in materials of this model.
[**teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/rel/{fk} | Remove the materials relation to an item by id.
[**teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead) | **HEAD** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/rel/{fk} | Check the existence of materials relation to an item by id.
[**teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/{nk}/materials/rel/{fk} | Add a related item by id for materials.
[**teamBuilderConfigsIdProductSizesNkPdfColorProfileGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkPdfColorProfileGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**teamBuilderConfigsIdProductSizesNkProductsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/products/count | Counts products of ProductSize.
[**teamBuilderConfigsIdProductSizesNkProductsDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/products | Deletes all products of this model.
[**teamBuilderConfigsIdProductSizesNkProductsFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/products/{fk} | Delete a related item by id for products.
[**teamBuilderConfigsIdProductSizesNkProductsFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/products/{fk} | Find a related item by id for products.
[**teamBuilderConfigsIdProductSizesNkProductsFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/{nk}/products/{fk} | Update a related item by id for products.
[**teamBuilderConfigsIdProductSizesNkProductsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/products | Queries products of ProductSize.
[**teamBuilderConfigsIdProductSizesNkProductsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkProductsPost) | **POST** /TeamBuilderConfigs/{id}/productSizes/{nk}/products | Creates a new instance in products of this model.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials/count | Counts sizeMaterials of ProductSize.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials | Deletes all sizeMaterials of this model.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials/{fk} | Delete a related item by id for sizeMaterials.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials/{fk} | Find a related item by id for sizeMaterials.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials/{fk} | Update a related item by id for sizeMaterials.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials | Queries sizeMaterials of ProductSize.
[**teamBuilderConfigsIdProductSizesNkSizeMaterialsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkSizeMaterialsPost) | **POST** /TeamBuilderConfigs/{id}/productSizes/{nk}/sizeMaterials | Creates a new instance in sizeMaterials of this model.
[**teamBuilderConfigsIdProductSizesNkTypeGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesNkTypeGet) | **GET** /TeamBuilderConfigs/{id}/productSizes/{nk}/type | Fetches belongsTo relation type.
[**teamBuilderConfigsIdProductSizesPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesPost) | **POST** /TeamBuilderConfigs/{id}/productSizes | Creates a new instance in productSizes of this model.
[**teamBuilderConfigsIdProductSizesRelFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesRelFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productSizes/rel/{fk} | Remove the productSizes relation to an item by id.
[**teamBuilderConfigsIdProductSizesRelFkHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesRelFkHead) | **HEAD** /TeamBuilderConfigs/{id}/productSizes/rel/{fk} | Check the existence of productSizes relation to an item by id.
[**teamBuilderConfigsIdProductSizesRelFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductSizesRelFkPut) | **PUT** /TeamBuilderConfigs/{id}/productSizes/rel/{fk} | Add a related item by id for productSizes.
[**teamBuilderConfigsIdProductTypesCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesCountGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/count | Counts productTypes of TeamBuilderConfig.
[**teamBuilderConfigsIdProductTypesDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesDelete) | **DELETE** /TeamBuilderConfigs/{id}/productTypes | Deletes all productTypes of this model.
[**teamBuilderConfigsIdProductTypesFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productTypes/{fk} | Delete a related item by id for productTypes.
[**teamBuilderConfigsIdProductTypesFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesFkGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/{fk} | Find a related item by id for productTypes.
[**teamBuilderConfigsIdProductTypesFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesFkPut) | **PUT** /TeamBuilderConfigs/{id}/productTypes/{fk} | Update a related item by id for productTypes.
[**teamBuilderConfigsIdProductTypesGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesGet) | **GET** /TeamBuilderConfigs/{id}/productTypes | Queries productTypes of TeamBuilderConfig.
[**teamBuilderConfigsIdProductTypesNkGroupGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkGroupGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/{nk}/group | Fetches belongsTo relation group.
[**teamBuilderConfigsIdProductTypesNkSizesCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesCountGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes/count | Counts sizes of ProductType.
[**teamBuilderConfigsIdProductTypesNkSizesDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesDelete) | **DELETE** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes | Deletes all sizes of this model.
[**teamBuilderConfigsIdProductTypesNkSizesFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes/{fk} | Delete a related item by id for sizes.
[**teamBuilderConfigsIdProductTypesNkSizesFkGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesFkGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes/{fk} | Find a related item by id for sizes.
[**teamBuilderConfigsIdProductTypesNkSizesFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesFkPut) | **PUT** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes/{fk} | Update a related item by id for sizes.
[**teamBuilderConfigsIdProductTypesNkSizesGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesGet) | **GET** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes | Queries sizes of ProductType.
[**teamBuilderConfigsIdProductTypesNkSizesPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesNkSizesPost) | **POST** /TeamBuilderConfigs/{id}/productTypes/{nk}/sizes | Creates a new instance in sizes of this model.
[**teamBuilderConfigsIdProductTypesPost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesPost) | **POST** /TeamBuilderConfigs/{id}/productTypes | Creates a new instance in productTypes of this model.
[**teamBuilderConfigsIdProductTypesRelFkDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesRelFkDelete) | **DELETE** /TeamBuilderConfigs/{id}/productTypes/rel/{fk} | Remove the productTypes relation to an item by id.
[**teamBuilderConfigsIdProductTypesRelFkHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesRelFkHead) | **HEAD** /TeamBuilderConfigs/{id}/productTypes/rel/{fk} | Check the existence of productTypes relation to an item by id.
[**teamBuilderConfigsIdProductTypesRelFkPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdProductTypesRelFkPut) | **PUT** /TeamBuilderConfigs/{id}/productTypes/rel/{fk} | Add a related item by id for productTypes.
[**teamBuilderConfigsIdPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdPut) | **PUT** /TeamBuilderConfigs/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdReplacePost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdReplacePost) | **POST** /TeamBuilderConfigs/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdTeamGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdTeamGet) | **GET** /TeamBuilderConfigs/{id}/team | Fetches belongsTo relation team.
[**teamBuilderConfigsPatch**](TeamBuilderConfigApi.md#teamBuilderConfigsPatch) | **PATCH** /TeamBuilderConfigs | Patch an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsPost) | **POST** /TeamBuilderConfigs | Create a new instance of the model and persist it into the data source.
[**teamBuilderConfigsPut**](TeamBuilderConfigApi.md#teamBuilderConfigsPut) | **PUT** /TeamBuilderConfigs | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsReplaceOrCreatePost**](TeamBuilderConfigApi.md#teamBuilderConfigsReplaceOrCreatePost) | **POST** /TeamBuilderConfigs/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsUpdatePost**](TeamBuilderConfigApi.md#teamBuilderConfigsUpdatePost) | **POST** /TeamBuilderConfigs/update | Update instances of the model matched by {{where}} from the data source.
[**teamBuilderConfigsUpsertWithWherePost**](TeamBuilderConfigApi.md#teamBuilderConfigsUpsertWithWherePost) | **POST** /TeamBuilderConfigs/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamBuilderConfigsChangeStreamGet**
> \SplFileObject teamBuilderConfigsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsChangeStreamPost**
> \SplFileObject teamBuilderConfigsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsGet**
> \Swagger\Client\Model\TeamBuilderConfig[] teamBuilderConfigsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig[]**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdDelete**
> object teamBuilderConfigsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdPatch**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductGroupsCountGet($id, $where)

Counts productGroups of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsDelete**
> teamBuilderConfigsIdProductGroupsDelete($id)

Deletes all productGroups of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id

try {
    $api_instance->teamBuilderConfigsIdProductGroupsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsFkDelete**
> teamBuilderConfigsIdProductGroupsFkDelete($id, $fk)

Delete a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $api_instance->teamBuilderConfigsIdProductGroupsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsFkGet**
> \Swagger\Client\Model\ProductGroup teamBuilderConfigsIdProductGroupsFkGet($id, $fk)

Find a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsFkPut**
> \Swagger\Client\Model\ProductGroup teamBuilderConfigsIdProductGroupsFkPut($id, $fk, $data)

Update a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsGet**
> \Swagger\Client\Model\ProductGroup[] teamBuilderConfigsIdProductGroupsGet($id, $filter)

Queries productGroups of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductGroupsNkTypesCountGet($id, $nk, $where)

Counts types of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsNkTypesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesDelete**
> teamBuilderConfigsIdProductGroupsNkTypesDelete($id, $nk)

Deletes all types of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.

try {
    $api_instance->teamBuilderConfigsIdProductGroupsNkTypesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesFkDelete**
> teamBuilderConfigsIdProductGroupsNkTypesFkDelete($id, $nk, $fk)

Delete a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$fk = "fk_example"; // string | Foreign key for types

try {
    $api_instance->teamBuilderConfigsIdProductGroupsNkTypesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **fk** | **string**| Foreign key for types |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesFkGet**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductGroupsNkTypesFkGet($id, $nk, $fk)

Find a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$fk = "fk_example"; // string | Foreign key for types

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsNkTypesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **fk** | **string**| Foreign key for types |

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesFkPut**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductGroupsNkTypesFkPut($id, $nk, $fk, $data)

Update a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$fk = "fk_example"; // string | Foreign key for types
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsNkTypesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **fk** | **string**| Foreign key for types |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesGet**
> \Swagger\Client\Model\ProductType[] teamBuilderConfigsIdProductGroupsNkTypesGet($id, $nk, $filter)

Queries types of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsNkTypesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsNkTypesPost**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductGroupsNkTypesPost($id, $nk, $data)

Creates a new instance in types of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productGroups.
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsNkTypesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsNkTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productGroups. |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsPost**
> \Swagger\Client\Model\ProductGroup teamBuilderConfigsIdProductGroupsPost($id, $data)

Creates a new instance in productGroups of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsRelFkDelete**
> teamBuilderConfigsIdProductGroupsRelFkDelete($id, $fk)

Remove the productGroups relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $api_instance->teamBuilderConfigsIdProductGroupsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsRelFkHead**
> bool teamBuilderConfigsIdProductGroupsRelFkHead($id, $fk)

Check the existence of productGroups relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductGroupsRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigsIdProductGroupsRelFkPut($id, $fk, $data)

Add a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productGroups
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductGroupsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductGroupsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productGroups |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizeMaterialsCountGet($id, $where)

Counts productSizeMaterials of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsDelete**
> teamBuilderConfigsIdProductSizeMaterialsDelete($id)

Deletes all productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id

try {
    $api_instance->teamBuilderConfigsIdProductSizeMaterialsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsFkDelete**
> teamBuilderConfigsIdProductSizeMaterialsFkDelete($id, $fk)

Delete a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamBuilderConfigsIdProductSizeMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsFkGet($id, $fk)

Find a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsFkPut($id, $fk, $data)

Update a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamBuilderConfigsIdProductSizeMaterialsGet($id, $filter)

Queries productSizeMaterials of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet**
> \Swagger\Client\Model\ProductMaterial teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet($id, $nk, $refresh)

Fetches belongsTo relation material.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsNkMaterialGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterials. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet($id, $nk, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsNkPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterials. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsNkSizeGet**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductSizeMaterialsNkSizeGet($id, $nk, $refresh)

Fetches belongsTo relation size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsNkSizeGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsNkSizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterials. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsNkTeamGet**
> \Swagger\Client\Model\Team teamBuilderConfigsIdProductSizeMaterialsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterials. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsPost($id, $data)

Creates a new instance in productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizeMaterialsRelCountGet($id, $where)

Counts productSizeMaterialsRel of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelDelete**
> teamBuilderConfigsIdProductSizeMaterialsRelDelete($id)

Deletes all productSizeMaterialsRel of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id

try {
    $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkDelete**
> teamBuilderConfigsIdProductSizeMaterialsRelFkDelete($id, $fk)

Remove the productSizeMaterials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0**
> teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0($id, $fk)

Delete a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel

try {
    $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterialsRel |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsRelFkGet($id, $fk)

Find a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterialsRel |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkHead**
> bool teamBuilderConfigsIdProductSizeMaterialsRelFkHead($id, $fk)

Check the existence of productSizeMaterials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsRelFkPut($id, $fk, $data)

Add a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterials |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0($id, $fk, $data)

Update a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelFkPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizeMaterialsRel |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[] teamBuilderConfigsIdProductSizeMaterialsRelGet($id, $filter)

Queries productSizeMaterialsRel of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[]**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet($id, $nk, $refresh)

Fetches belongsTo relation builderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterialsRel.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelNkBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterialsRel. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet($id, $nk, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterialsRel.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelNkPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterialsRel. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet($id, $nk, $refresh)

Fetches belongsTo relation productSizeMaterial.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizeMaterialsRel.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelNkProductSizeMaterialGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizeMaterialsRel. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizeMaterialsRelPost**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigsIdProductSizeMaterialsRelPost($id, $data)

Creates a new instance in productSizeMaterialsRel of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizeMaterialsRelPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizeMaterialsRelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizesCountGet($id, $where)

Counts productSizes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesDelete**
> teamBuilderConfigsIdProductSizesDelete($id)

Deletes all productSizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id

try {
    $api_instance->teamBuilderConfigsIdProductSizesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesFkDelete**
> teamBuilderConfigsIdProductSizesFkDelete($id, $fk)

Delete a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $api_instance->teamBuilderConfigsIdProductSizesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesFkGet**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductSizesFkGet($id, $fk)

Find a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesFkPut**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductSizesFkPut($id, $fk, $data)

Update a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesGet**
> \Swagger\Client\Model\ProductSize[] teamBuilderConfigsIdProductSizesGet($id, $filter)

Queries productSizes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize[]**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizesNkMaterialsCountGet($id, $nk, $where)

Counts materials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsDelete**
> teamBuilderConfigsIdProductSizesNkMaterialsDelete($id, $nk)

Deletes all materials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsFkDelete**
> teamBuilderConfigsIdProductSizesNkMaterialsFkDelete($id, $nk, $fk)

Delete a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsFkGet**
> \Swagger\Client\Model\ProductMaterial teamBuilderConfigsIdProductSizesNkMaterialsFkGet($id, $nk, $fk)

Find a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsFkPut**
> \Swagger\Client\Model\ProductMaterial teamBuilderConfigsIdProductSizesNkMaterialsFkPut($id, $nk, $fk, $data)

Update a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] teamBuilderConfigsIdProductSizesNkMaterialsGet($id, $nk, $filter)

Queries materials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsPost**
> \Swagger\Client\Model\ProductMaterial teamBuilderConfigsIdProductSizesNkMaterialsPost($id, $nk, $data)

Creates a new instance in materials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete**
> teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete($id, $nk, $fk)

Remove the materials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead**
> bool teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead($id, $nk, $fk)

Check the existence of materials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for materials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkMaterialsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for materials |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamBuilderConfigsIdProductSizesNkPdfColorProfileGet($id, $nk, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkPdfColorProfileGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizesNkProductsCountGet($id, $nk, $where)

Counts products of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkProductsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsDelete**
> teamBuilderConfigsIdProductSizesNkProductsDelete($id, $nk)

Deletes all products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkProductsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsFkDelete**
> teamBuilderConfigsIdProductSizesNkProductsFkDelete($id, $nk, $fk)

Delete a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkProductsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsFkGet**
> \Swagger\Client\Model\Product teamBuilderConfigsIdProductSizesNkProductsFkGet($id, $nk, $fk)

Find a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkProductsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for products |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsFkPut**
> \Swagger\Client\Model\Product teamBuilderConfigsIdProductSizesNkProductsFkPut($id, $nk, $fk, $data)

Update a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for products
$data = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkProductsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for products |
 **data** | [**\Swagger\Client\Model\Product**](../Model/\Swagger\Client\Model\Product.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsGet**
> \Swagger\Client\Model\Product[] teamBuilderConfigsIdProductSizesNkProductsGet($id, $nk, $filter)

Queries products of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkProductsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkProductsPost**
> \Swagger\Client\Model\Product teamBuilderConfigsIdProductSizesNkProductsPost($id, $nk, $data)

Creates a new instance in products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$data = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkProductsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **data** | [**\Swagger\Client\Model\Product**](../Model/\Swagger\Client\Model\Product.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet($id, $nk, $where)

Counts sizeMaterials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete**
> teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete($id, $nk)

Deletes all sizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete**
> teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete($id, $nk, $fk)

Delete a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for sizeMaterials

try {
    $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for sizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet($id, $nk, $fk)

Find a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for sizeMaterials

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for sizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut($id, $nk, $fk, $data)

Update a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$fk = "fk_example"; // string | Foreign key for sizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **fk** | **string**| Foreign key for sizeMaterials |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamBuilderConfigsIdProductSizesNkSizeMaterialsGet($id, $nk, $filter)

Queries sizeMaterials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigsIdProductSizesNkSizeMaterialsPost($id, $nk, $data)

Creates a new instance in sizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkSizeMaterialsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesNkTypeGet**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductSizesNkTypeGet($id, $nk, $refresh)

Fetches belongsTo relation type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productSizes.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesNkTypeGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesNkTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productSizes. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesPost**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductSizesPost($id, $data)

Creates a new instance in productSizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesRelFkDelete**
> teamBuilderConfigsIdProductSizesRelFkDelete($id, $fk)

Remove the productSizes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $api_instance->teamBuilderConfigsIdProductSizesRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesRelFkHead**
> bool teamBuilderConfigsIdProductSizesRelFkHead($id, $fk)

Check the existence of productSizes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductSizesRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigsIdProductSizesRelFkPut($id, $fk, $data)

Add a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productSizes
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductSizesRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductSizesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productSizes |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductTypesCountGet($id, $where)

Counts productTypes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesDelete**
> teamBuilderConfigsIdProductTypesDelete($id)

Deletes all productTypes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id

try {
    $api_instance->teamBuilderConfigsIdProductTypesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesFkDelete**
> teamBuilderConfigsIdProductTypesFkDelete($id, $fk)

Delete a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $api_instance->teamBuilderConfigsIdProductTypesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesFkGet**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductTypesFkGet($id, $fk)

Find a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesFkPut**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductTypesFkPut($id, $fk, $data)

Update a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesGet**
> \Swagger\Client\Model\ProductType[] teamBuilderConfigsIdProductTypesGet($id, $filter)

Queries productTypes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkGroupGet**
> \Swagger\Client\Model\ProductGroup teamBuilderConfigsIdProductTypesNkGroupGet($id, $nk, $refresh)

Fetches belongsTo relation group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkGroupGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdProductTypesNkSizesCountGet($id, $nk, $where)

Counts sizes of ProductType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkSizesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesDelete**
> teamBuilderConfigsIdProductTypesNkSizesDelete($id, $nk)

Deletes all sizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.

try {
    $api_instance->teamBuilderConfigsIdProductTypesNkSizesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesFkDelete**
> teamBuilderConfigsIdProductTypesNkSizesFkDelete($id, $nk, $fk)

Delete a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$fk = "fk_example"; // string | Foreign key for sizes

try {
    $api_instance->teamBuilderConfigsIdProductTypesNkSizesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **fk** | **string**| Foreign key for sizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesFkGet**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductTypesNkSizesFkGet($id, $nk, $fk)

Find a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$fk = "fk_example"; // string | Foreign key for sizes

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkSizesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **fk** | **string**| Foreign key for sizes |

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesFkPut**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductTypesNkSizesFkPut($id, $nk, $fk, $data)

Update a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$fk = "fk_example"; // string | Foreign key for sizes
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkSizesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **fk** | **string**| Foreign key for sizes |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesGet**
> \Swagger\Client\Model\ProductSize[] teamBuilderConfigsIdProductTypesNkSizesGet($id, $nk, $filter)

Queries sizes of ProductType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkSizesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize[]**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesNkSizesPost**
> \Swagger\Client\Model\ProductSize teamBuilderConfigsIdProductTypesNkSizesPost($id, $nk, $data)

Creates a new instance in sizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$nk = "nk_example"; // string | Foreign key for productTypes.
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesNkSizesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesNkSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **nk** | **string**| Foreign key for productTypes. |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesPost**
> \Swagger\Client\Model\ProductType teamBuilderConfigsIdProductTypesPost($id, $data)

Creates a new instance in productTypes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesRelFkDelete**
> teamBuilderConfigsIdProductTypesRelFkDelete($id, $fk)

Remove the productTypes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $api_instance->teamBuilderConfigsIdProductTypesRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesRelFkHead**
> bool teamBuilderConfigsIdProductTypesRelFkHead($id, $fk)

Check the existence of productTypes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdProductTypesRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigsIdProductTypesRelFkPut($id, $fk, $data)

Add a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$fk = "fk_example"; // string | Foreign key for productTypes
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | 

try {
    $result = $api_instance->teamBuilderConfigsIdProductTypesRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdProductTypesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **fk** | **string**| Foreign key for productTypes |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdPut**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdTeamGet**
> \Swagger\Client\Model\Team teamBuilderConfigsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPatch**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPut**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsReplaceOrCreatePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 teamBuilderConfigsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsUpsertWithWherePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

