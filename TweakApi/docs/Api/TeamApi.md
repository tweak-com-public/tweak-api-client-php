# Tweak\Api\TeamApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamsChangeStreamGet**](TeamApi.md#teamsChangeStreamGet) | **GET** /Teams/change-stream | Create a change stream.
[**teamsChangeStreamPost**](TeamApi.md#teamsChangeStreamPost) | **POST** /Teams/change-stream | Create a change stream.
[**teamsCountGet**](TeamApi.md#teamsCountGet) | **GET** /Teams/count | Count instances of the model matched by where from the data source.
[**teamsFindOneGet**](TeamApi.md#teamsFindOneGet) | **GET** /Teams/findOne | Find first instance of the model matched by filter from the data source.
[**teamsGet**](TeamApi.md#teamsGet) | **GET** /Teams | Find all instances of the model matched by filter from the data source.
[**teamsIdAuthResetKeysDelete**](TeamApi.md#teamsIdAuthResetKeysDelete) | **DELETE** /Teams/{id}/auth/reset-keys | Reset Team keys
[**teamsIdBrandDelete**](TeamApi.md#teamsIdBrandDelete) | **DELETE** /Teams/{id}/brand | Deletes brand of this model.
[**teamsIdBrandGet**](TeamApi.md#teamsIdBrandGet) | **GET** /Teams/{id}/brand | Fetches hasOne relation brand.
[**teamsIdBrandPost**](TeamApi.md#teamsIdBrandPost) | **POST** /Teams/{id}/brand | Creates a new instance in brand of this model.
[**teamsIdBrandPut**](TeamApi.md#teamsIdBrandPut) | **PUT** /Teams/{id}/brand | Update brand of this model.
[**teamsIdBuilderConfigsCountGet**](TeamApi.md#teamsIdBuilderConfigsCountGet) | **GET** /Teams/{id}/builderConfigs/count | Counts builderConfigs of Team.
[**teamsIdBuilderConfigsDefaultGet**](TeamApi.md#teamsIdBuilderConfigsDefaultGet) | **GET** /Teams/{id}/builderConfigs/default | Get default TeamBuilderConfig for this Team
[**teamsIdBuilderConfigsDefaultProductSizeMaterialsGet**](TeamApi.md#teamsIdBuilderConfigsDefaultProductSizeMaterialsGet) | **GET** /Teams/{id}/builderConfigs/default/productSizeMaterials | Get default TeamBuilderConfig ProductSizeMaterials for this Team
[**teamsIdBuilderConfigsDelete**](TeamApi.md#teamsIdBuilderConfigsDelete) | **DELETE** /Teams/{id}/builderConfigs | Deletes all builderConfigs of this model.
[**teamsIdBuilderConfigsFkDelete**](TeamApi.md#teamsIdBuilderConfigsFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{fk} | Delete a related item by id for builderConfigs.
[**teamsIdBuilderConfigsFkGet**](TeamApi.md#teamsIdBuilderConfigsFkGet) | **GET** /Teams/{id}/builderConfigs/{fk} | Find a related item by id for builderConfigs.
[**teamsIdBuilderConfigsFkLogoPut**](TeamApi.md#teamsIdBuilderConfigsFkLogoPut) | **PUT** /Teams/{id}/builderConfigs/{fk}/logo | Change Builder Config logo
[**teamsIdBuilderConfigsFkPut**](TeamApi.md#teamsIdBuilderConfigsFkPut) | **PUT** /Teams/{id}/builderConfigs/{fk} | Update a related item by id for builderConfigs.
[**teamsIdBuilderConfigsFkWatermarkPut**](TeamApi.md#teamsIdBuilderConfigsFkWatermarkPut) | **PUT** /Teams/{id}/builderConfigs/{fk}/watermark | Change Builder Config watermark
[**teamsIdBuilderConfigsGet**](TeamApi.md#teamsIdBuilderConfigsGet) | **GET** /Teams/{id}/builderConfigs | Queries builderConfigs of Team.
[**teamsIdBuilderConfigsNkPortalsCountGet**](TeamApi.md#teamsIdBuilderConfigsNkPortalsCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/portals/count | Counts portals of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkPortalsFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkPortalsFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/portals/{fk} | Delete a related item by id for portals.
[**teamsIdBuilderConfigsNkPortalsFkGet**](TeamApi.md#teamsIdBuilderConfigsNkPortalsFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/portals/{fk} | Find a related item by id for portals.
[**teamsIdBuilderConfigsNkPortalsFkPut**](TeamApi.md#teamsIdBuilderConfigsNkPortalsFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/portals/{fk} | Update a related item by id for portals.
[**teamsIdBuilderConfigsNkPortalsGet**](TeamApi.md#teamsIdBuilderConfigsNkPortalsGet) | **GET** /Teams/{id}/builderConfigs/{nk}/portals | Queries portals of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkPortalsPost**](TeamApi.md#teamsIdBuilderConfigsNkPortalsPost) | **POST** /Teams/{id}/builderConfigs/{nk}/portals | Creates a new instance in portals of this model.
[**teamsIdBuilderConfigsNkProductGroupsCountGet**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productGroups/count | Counts productGroups of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductGroupsFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productGroups/{fk} | Delete a related item by id for productGroups.
[**teamsIdBuilderConfigsNkProductGroupsFkGet**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productGroups/{fk} | Find a related item by id for productGroups.
[**teamsIdBuilderConfigsNkProductGroupsFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productGroups/{fk} | Update a related item by id for productGroups.
[**teamsIdBuilderConfigsNkProductGroupsGet**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productGroups | Queries productGroups of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductGroupsPost**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsPost) | **POST** /Teams/{id}/builderConfigs/{nk}/productGroups | Creates a new instance in productGroups of this model.
[**teamsIdBuilderConfigsNkProductGroupsRelFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsRelFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productGroups/rel/{fk} | Remove the productGroups relation to an item by id.
[**teamsIdBuilderConfigsNkProductGroupsRelFkHead**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsRelFkHead) | **HEAD** /Teams/{id}/builderConfigs/{nk}/productGroups/rel/{fk} | Check the existence of productGroups relation to an item by id.
[**teamsIdBuilderConfigsNkProductGroupsRelFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductGroupsRelFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productGroups/rel/{fk} | Add a related item by id for productGroups.
[**teamsIdBuilderConfigsNkProductSizeMaterialsCountGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/count | Counts productSizeMaterials of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/{fk} | Delete a related item by id for productSizeMaterials.
[**teamsIdBuilderConfigsNkProductSizeMaterialsFkGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/{fk} | Find a related item by id for productSizeMaterials.
[**teamsIdBuilderConfigsNkProductSizeMaterialsFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/{fk} | Update a related item by id for productSizeMaterials.
[**teamsIdBuilderConfigsNkProductSizeMaterialsGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials | Queries productSizeMaterials of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizeMaterialsPost**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsPost) | **POST** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials | Creates a new instance in productSizeMaterials of this model.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel/count | Counts productSizeMaterialsRel of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/rel/{fk} | Remove the productSizeMaterials relation to an item by id.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel/{fk} | Delete a related item by id for productSizeMaterialsRel.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel/{fk} | Find a related item by id for productSizeMaterialsRel.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead) | **HEAD** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/rel/{fk} | Check the existence of productSizeMaterials relation to an item by id.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productSizeMaterials/rel/{fk} | Add a related item by id for productSizeMaterials.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0) | **PUT** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel/{fk} | Update a related item by id for productSizeMaterialsRel.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel | Queries productSizeMaterialsRel of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizeMaterialsRelPost**](TeamApi.md#teamsIdBuilderConfigsNkProductSizeMaterialsRelPost) | **POST** /Teams/{id}/builderConfigs/{nk}/productSizeMaterialsRel | Creates a new instance in productSizeMaterialsRel of this model.
[**teamsIdBuilderConfigsNkProductSizesCountGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizes/count | Counts productSizes of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizesFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productSizes/{fk} | Delete a related item by id for productSizes.
[**teamsIdBuilderConfigsNkProductSizesFkGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizes/{fk} | Find a related item by id for productSizes.
[**teamsIdBuilderConfigsNkProductSizesFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productSizes/{fk} | Update a related item by id for productSizes.
[**teamsIdBuilderConfigsNkProductSizesGet**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productSizes | Queries productSizes of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductSizesPost**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesPost) | **POST** /Teams/{id}/builderConfigs/{nk}/productSizes | Creates a new instance in productSizes of this model.
[**teamsIdBuilderConfigsNkProductSizesRelFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesRelFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productSizes/rel/{fk} | Remove the productSizes relation to an item by id.
[**teamsIdBuilderConfigsNkProductSizesRelFkHead**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesRelFkHead) | **HEAD** /Teams/{id}/builderConfigs/{nk}/productSizes/rel/{fk} | Check the existence of productSizes relation to an item by id.
[**teamsIdBuilderConfigsNkProductSizesRelFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductSizesRelFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productSizes/rel/{fk} | Add a related item by id for productSizes.
[**teamsIdBuilderConfigsNkProductTypesCountGet**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesCountGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productTypes/count | Counts productTypes of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductTypesFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productTypes/{fk} | Delete a related item by id for productTypes.
[**teamsIdBuilderConfigsNkProductTypesFkGet**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesFkGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productTypes/{fk} | Find a related item by id for productTypes.
[**teamsIdBuilderConfigsNkProductTypesFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productTypes/{fk} | Update a related item by id for productTypes.
[**teamsIdBuilderConfigsNkProductTypesGet**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesGet) | **GET** /Teams/{id}/builderConfigs/{nk}/productTypes | Queries productTypes of TeamBuilderConfig.
[**teamsIdBuilderConfigsNkProductTypesPost**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesPost) | **POST** /Teams/{id}/builderConfigs/{nk}/productTypes | Creates a new instance in productTypes of this model.
[**teamsIdBuilderConfigsNkProductTypesRelFkDelete**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesRelFkDelete) | **DELETE** /Teams/{id}/builderConfigs/{nk}/productTypes/rel/{fk} | Remove the productTypes relation to an item by id.
[**teamsIdBuilderConfigsNkProductTypesRelFkHead**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesRelFkHead) | **HEAD** /Teams/{id}/builderConfigs/{nk}/productTypes/rel/{fk} | Check the existence of productTypes relation to an item by id.
[**teamsIdBuilderConfigsNkProductTypesRelFkPut**](TeamApi.md#teamsIdBuilderConfigsNkProductTypesRelFkPut) | **PUT** /Teams/{id}/builderConfigs/{nk}/productTypes/rel/{fk} | Add a related item by id for productTypes.
[**teamsIdBuilderConfigsNkTeamGet**](TeamApi.md#teamsIdBuilderConfigsNkTeamGet) | **GET** /Teams/{id}/builderConfigs/{nk}/team | Fetches belongsTo relation team.
[**teamsIdBuilderConfigsPost**](TeamApi.md#teamsIdBuilderConfigsPost) | **POST** /Teams/{id}/builderConfigs | Creates a new instance in builderConfigs of this model.
[**teamsIdDataSourceSoapsCountGet**](TeamApi.md#teamsIdDataSourceSoapsCountGet) | **GET** /Teams/{id}/dataSourceSoaps/count | Counts dataSourceSoaps of Team.
[**teamsIdDataSourceSoapsFkDelete**](TeamApi.md#teamsIdDataSourceSoapsFkDelete) | **DELETE** /Teams/{id}/dataSourceSoaps/{fk} | Delete a related item by id for dataSourceSoaps.
[**teamsIdDataSourceSoapsFkGet**](TeamApi.md#teamsIdDataSourceSoapsFkGet) | **GET** /Teams/{id}/dataSourceSoaps/{fk} | Find a related item by id for dataSourceSoaps.
[**teamsIdDataSourceSoapsFkPut**](TeamApi.md#teamsIdDataSourceSoapsFkPut) | **PUT** /Teams/{id}/dataSourceSoaps/{fk} | Update a related item by id for dataSourceSoaps.
[**teamsIdDataSourceSoapsGet**](TeamApi.md#teamsIdDataSourceSoapsGet) | **GET** /Teams/{id}/dataSourceSoaps | Queries dataSourceSoaps of Team.
[**teamsIdDataSourceSoapsNkDynamicDatasCountGet**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasCountGet) | **GET** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas/count | Counts dynamicDatas of DataSourceSoap.
[**teamsIdDataSourceSoapsNkDynamicDatasDelete**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasDelete) | **DELETE** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas | Deletes all dynamicDatas of this model.
[**teamsIdDataSourceSoapsNkDynamicDatasFkDelete**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasFkDelete) | **DELETE** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**teamsIdDataSourceSoapsNkDynamicDatasFkGet**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasFkGet) | **GET** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**teamsIdDataSourceSoapsNkDynamicDatasFkPut**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasFkPut) | **PUT** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**teamsIdDataSourceSoapsNkDynamicDatasGet**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasGet) | **GET** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas | Queries dynamicDatas of DataSourceSoap.
[**teamsIdDataSourceSoapsNkDynamicDatasPost**](TeamApi.md#teamsIdDataSourceSoapsNkDynamicDatasPost) | **POST** /Teams/{id}/dataSourceSoaps/{nk}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**teamsIdDataSourceSoapsNkTeamGet**](TeamApi.md#teamsIdDataSourceSoapsNkTeamGet) | **GET** /Teams/{id}/dataSourceSoaps/{nk}/team | Fetches belongsTo relation team.
[**teamsIdDataSourceSoapsPost**](TeamApi.md#teamsIdDataSourceSoapsPost) | **POST** /Teams/{id}/dataSourceSoaps | Creates a new instance in dataSourceSoaps of this model.
[**teamsIdDelete**](TeamApi.md#teamsIdDelete) | **DELETE** /Teams/{id} | Delete a model instance by {{id}} from the data source.
[**teamsIdDynamicDatasCountGet**](TeamApi.md#teamsIdDynamicDatasCountGet) | **GET** /Teams/{id}/dynamicDatas/count | Counts dynamicDatas of Team.
[**teamsIdDynamicDatasFkDelete**](TeamApi.md#teamsIdDynamicDatasFkDelete) | **DELETE** /Teams/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**teamsIdDynamicDatasFkGet**](TeamApi.md#teamsIdDynamicDatasFkGet) | **GET** /Teams/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**teamsIdDynamicDatasFkPut**](TeamApi.md#teamsIdDynamicDatasFkPut) | **PUT** /Teams/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**teamsIdDynamicDatasGet**](TeamApi.md#teamsIdDynamicDatasGet) | **GET** /Teams/{id}/dynamicDatas | Queries dynamicDatas of Team.
[**teamsIdDynamicDatasNkDataSourceMongoGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceMongoGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceMongo | Fetches belongsTo relation dataSourceMongo.
[**teamsIdDynamicDatasNkDataSourceMsSqlGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceMsSqlGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceMsSql | Fetches belongsTo relation dataSourceMsSql.
[**teamsIdDynamicDatasNkDataSourceMySqlGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceMySqlGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceMySql | Fetches belongsTo relation dataSourceMySql.
[**teamsIdDynamicDatasNkDataSourceOracleGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceOracleGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceOracle | Fetches belongsTo relation dataSourceOracle.
[**teamsIdDynamicDatasNkDataSourcePostgreSqlGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourcePostgreSqlGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourcePostgreSql | Fetches belongsTo relation dataSourcePostgreSql.
[**teamsIdDynamicDatasNkDataSourceRestGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceRestGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceRest | Fetches belongsTo relation dataSourceRest.
[**teamsIdDynamicDatasNkDataSourceSoapGet**](TeamApi.md#teamsIdDynamicDatasNkDataSourceSoapGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/dataSourceSoap | Fetches belongsTo relation dataSourceSoap.
[**teamsIdDynamicDatasNkDesignsCountGet**](TeamApi.md#teamsIdDynamicDatasNkDesignsCountGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/designs/count | Counts designs of DynamicData.
[**teamsIdDynamicDatasNkDesignsFkDelete**](TeamApi.md#teamsIdDynamicDatasNkDesignsFkDelete) | **DELETE** /Teams/{id}/dynamicDatas/{nk}/designs/{fk} | Delete a related item by id for designs.
[**teamsIdDynamicDatasNkDesignsFkGet**](TeamApi.md#teamsIdDynamicDatasNkDesignsFkGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/designs/{fk} | Find a related item by id for designs.
[**teamsIdDynamicDatasNkDesignsFkPut**](TeamApi.md#teamsIdDynamicDatasNkDesignsFkPut) | **PUT** /Teams/{id}/dynamicDatas/{nk}/designs/{fk} | Update a related item by id for designs.
[**teamsIdDynamicDatasNkDesignsGet**](TeamApi.md#teamsIdDynamicDatasNkDesignsGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/designs | Queries designs of DynamicData.
[**teamsIdDynamicDatasNkDesignsPost**](TeamApi.md#teamsIdDynamicDatasNkDesignsPost) | **POST** /Teams/{id}/dynamicDatas/{nk}/designs | Creates a new instance in designs of this model.
[**teamsIdDynamicDatasNkRecordsCountGet**](TeamApi.md#teamsIdDynamicDatasNkRecordsCountGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/records/count | Count Dynamic Data records
[**teamsIdDynamicDatasNkRecordsDelete**](TeamApi.md#teamsIdDynamicDatasNkRecordsDelete) | **DELETE** /Teams/{id}/dynamicDatas/{nk}/records | Delete all matching records.
[**teamsIdDynamicDatasNkRecordsFkDelete**](TeamApi.md#teamsIdDynamicDatasNkRecordsFkDelete) | **DELETE** /Teams/{id}/dynamicDatas/{nk}/records/{fk} | Delete a model instance by {{fk}} from the data source.
[**teamsIdDynamicDatasNkRecordsFkGet**](TeamApi.md#teamsIdDynamicDatasNkRecordsFkGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/records/{fk} | Find a model instance by {{fk}} from the data source.
[**teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut**](TeamApi.md#teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut) | **PUT** /Teams/{id}/dynamicDatas/{nk}/records/{fk}/{propertyName}/upload | Replace attributes for a model instance and persist it into the data source.
[**teamsIdDynamicDatasNkRecordsFkPut**](TeamApi.md#teamsIdDynamicDatasNkRecordsFkPut) | **PUT** /Teams/{id}/dynamicDatas/{nk}/records/{fk} | Replace attributes for a model instance and persist it into the data source.
[**teamsIdDynamicDatasNkRecordsGet**](TeamApi.md#teamsIdDynamicDatasNkRecordsGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/records | Find all instances of the model matched by filter from the data source.
[**teamsIdDynamicDatasNkRecordsMigratePost**](TeamApi.md#teamsIdDynamicDatasNkRecordsMigratePost) | **POST** /Teams/{id}/dynamicDatas/{nk}/records/migrate | Request migration for Dynamic Data records
[**teamsIdDynamicDatasNkRecordsPost**](TeamApi.md#teamsIdDynamicDatasNkRecordsPost) | **POST** /Teams/{id}/dynamicDatas/{nk}/records | Create a new instance of the model and persist it into the data source.
[**teamsIdDynamicDatasNkRecordsUploadCsvPost**](TeamApi.md#teamsIdDynamicDatasNkRecordsUploadCsvPost) | **POST** /Teams/{id}/dynamicDatas/{nk}/records/upload/csv | Upload CSV for this Dynamic Data
[**teamsIdDynamicDatasNkTeamGet**](TeamApi.md#teamsIdDynamicDatasNkTeamGet) | **GET** /Teams/{id}/dynamicDatas/{nk}/team | Fetches belongsTo relation team.
[**teamsIdDynamicDatasPost**](TeamApi.md#teamsIdDynamicDatasPost) | **POST** /Teams/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**teamsIdExistsGet**](TeamApi.md#teamsIdExistsGet) | **GET** /Teams/{id}/exists | Check whether a model instance exists in the data source.
[**teamsIdGet**](TeamApi.md#teamsIdGet) | **GET** /Teams/{id} | Find a model instance by {{id}} from the data source.
[**teamsIdHead**](TeamApi.md#teamsIdHead) | **HEAD** /Teams/{id} | Check whether a model instance exists in the data source.
[**teamsIdImageFoldersCountGet**](TeamApi.md#teamsIdImageFoldersCountGet) | **GET** /Teams/{id}/imageFolders/count | Counts imageFolders of Team.
[**teamsIdImageFoldersDelete**](TeamApi.md#teamsIdImageFoldersDelete) | **DELETE** /Teams/{id}/imageFolders | Deletes all imageFolders of this model.
[**teamsIdImageFoldersFkDelete**](TeamApi.md#teamsIdImageFoldersFkDelete) | **DELETE** /Teams/{id}/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**teamsIdImageFoldersFkGet**](TeamApi.md#teamsIdImageFoldersFkGet) | **GET** /Teams/{id}/imageFolders/{fk} | Find a related item by id for imageFolders.
[**teamsIdImageFoldersFkPut**](TeamApi.md#teamsIdImageFoldersFkPut) | **PUT** /Teams/{id}/imageFolders/{fk} | Update a related item by id for imageFolders.
[**teamsIdImageFoldersGet**](TeamApi.md#teamsIdImageFoldersGet) | **GET** /Teams/{id}/imageFolders | Queries imageFolders of Team.
[**teamsIdImageFoldersNkChildrenCountGet**](TeamApi.md#teamsIdImageFoldersNkChildrenCountGet) | **GET** /Teams/{id}/imageFolders/{nk}/children/count | Counts children of ImageFolder.
[**teamsIdImageFoldersNkChildrenFkDelete**](TeamApi.md#teamsIdImageFoldersNkChildrenFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/children/{fk} | Delete a related item by id for children.
[**teamsIdImageFoldersNkChildrenFkGet**](TeamApi.md#teamsIdImageFoldersNkChildrenFkGet) | **GET** /Teams/{id}/imageFolders/{nk}/children/{fk} | Find a related item by id for children.
[**teamsIdImageFoldersNkChildrenFkPut**](TeamApi.md#teamsIdImageFoldersNkChildrenFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/children/{fk} | Update a related item by id for children.
[**teamsIdImageFoldersNkChildrenGet**](TeamApi.md#teamsIdImageFoldersNkChildrenGet) | **GET** /Teams/{id}/imageFolders/{nk}/children | Queries children of ImageFolder.
[**teamsIdImageFoldersNkChildrenPost**](TeamApi.md#teamsIdImageFoldersNkChildrenPost) | **POST** /Teams/{id}/imageFolders/{nk}/children | Creates a new instance in children of this model.
[**teamsIdImageFoldersNkFolderMembersCountGet**](TeamApi.md#teamsIdImageFoldersNkFolderMembersCountGet) | **GET** /Teams/{id}/imageFolders/{nk}/folderMembers/count | Counts folderMembers of ImageFolder.
[**teamsIdImageFoldersNkFolderMembersDelete**](TeamApi.md#teamsIdImageFoldersNkFolderMembersDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/folderMembers | Deletes all folderMembers of this model.
[**teamsIdImageFoldersNkFolderMembersFkDelete**](TeamApi.md#teamsIdImageFoldersNkFolderMembersFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/folderMembers/{fk} | Delete a related item by id for folderMembers.
[**teamsIdImageFoldersNkFolderMembersFkGet**](TeamApi.md#teamsIdImageFoldersNkFolderMembersFkGet) | **GET** /Teams/{id}/imageFolders/{nk}/folderMembers/{fk} | Find a related item by id for folderMembers.
[**teamsIdImageFoldersNkFolderMembersFkPut**](TeamApi.md#teamsIdImageFoldersNkFolderMembersFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/folderMembers/{fk} | Update a related item by id for folderMembers.
[**teamsIdImageFoldersNkFolderMembersGet**](TeamApi.md#teamsIdImageFoldersNkFolderMembersGet) | **GET** /Teams/{id}/imageFolders/{nk}/folderMembers | Queries folderMembers of ImageFolder.
[**teamsIdImageFoldersNkFolderMembersPost**](TeamApi.md#teamsIdImageFoldersNkFolderMembersPost) | **POST** /Teams/{id}/imageFolders/{nk}/folderMembers | Creates a new instance in folderMembers of this model.
[**teamsIdImageFoldersNkImagesCountGet**](TeamApi.md#teamsIdImageFoldersNkImagesCountGet) | **GET** /Teams/{id}/imageFolders/{nk}/images/count | Counts images of ImageFolder.
[**teamsIdImageFoldersNkImagesFkDelete**](TeamApi.md#teamsIdImageFoldersNkImagesFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/images/{fk} | Delete a related item by id for images.
[**teamsIdImageFoldersNkImagesFkGet**](TeamApi.md#teamsIdImageFoldersNkImagesFkGet) | **GET** /Teams/{id}/imageFolders/{nk}/images/{fk} | Find a related item by id for images.
[**teamsIdImageFoldersNkImagesFkPut**](TeamApi.md#teamsIdImageFoldersNkImagesFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/images/{fk} | Update a related item by id for images.
[**teamsIdImageFoldersNkImagesGet**](TeamApi.md#teamsIdImageFoldersNkImagesGet) | **GET** /Teams/{id}/imageFolders/{nk}/images | Queries images of ImageFolder.
[**teamsIdImageFoldersNkImagesPost**](TeamApi.md#teamsIdImageFoldersNkImagesPost) | **POST** /Teams/{id}/imageFolders/{nk}/images | Creates a new instance in images of this model.
[**teamsIdImageFoldersNkMembersCountGet**](TeamApi.md#teamsIdImageFoldersNkMembersCountGet) | **GET** /Teams/{id}/imageFolders/{nk}/members/count | Counts members of ImageFolder.
[**teamsIdImageFoldersNkMembersDelete**](TeamApi.md#teamsIdImageFoldersNkMembersDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/members | Deletes all members of this model.
[**teamsIdImageFoldersNkMembersFkDelete**](TeamApi.md#teamsIdImageFoldersNkMembersFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/members/{fk} | Delete a related item by id for members.
[**teamsIdImageFoldersNkMembersFkGet**](TeamApi.md#teamsIdImageFoldersNkMembersFkGet) | **GET** /Teams/{id}/imageFolders/{nk}/members/{fk} | Find a related item by id for members.
[**teamsIdImageFoldersNkMembersFkPut**](TeamApi.md#teamsIdImageFoldersNkMembersFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/members/{fk} | Update a related item by id for members.
[**teamsIdImageFoldersNkMembersGet**](TeamApi.md#teamsIdImageFoldersNkMembersGet) | **GET** /Teams/{id}/imageFolders/{nk}/members | Queries members of ImageFolder.
[**teamsIdImageFoldersNkMembersPost**](TeamApi.md#teamsIdImageFoldersNkMembersPost) | **POST** /Teams/{id}/imageFolders/{nk}/members | Creates a new instance in members of this model.
[**teamsIdImageFoldersNkMembersRelFkDelete**](TeamApi.md#teamsIdImageFoldersNkMembersRelFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/members/rel/{fk} | Remove the members relation to an item by id.
[**teamsIdImageFoldersNkMembersRelFkHead**](TeamApi.md#teamsIdImageFoldersNkMembersRelFkHead) | **HEAD** /Teams/{id}/imageFolders/{nk}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**teamsIdImageFoldersNkMembersRelFkPut**](TeamApi.md#teamsIdImageFoldersNkMembersRelFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/members/rel/{fk} | Add a related item by id for members.
[**teamsIdImageFoldersNkParentGet**](TeamApi.md#teamsIdImageFoldersNkParentGet) | **GET** /Teams/{id}/imageFolders/{nk}/parent | Fetches belongsTo relation parent.
[**teamsIdImageFoldersNkPortalsCountGet**](TeamApi.md#teamsIdImageFoldersNkPortalsCountGet) | **GET** /Teams/{id}/imageFolders/{nk}/portals/count | Counts portals of ImageFolder.
[**teamsIdImageFoldersNkPortalsDelete**](TeamApi.md#teamsIdImageFoldersNkPortalsDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/portals | Deletes all portals of this model.
[**teamsIdImageFoldersNkPortalsFkDelete**](TeamApi.md#teamsIdImageFoldersNkPortalsFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/portals/{fk} | Delete a related item by id for portals.
[**teamsIdImageFoldersNkPortalsFkGet**](TeamApi.md#teamsIdImageFoldersNkPortalsFkGet) | **GET** /Teams/{id}/imageFolders/{nk}/portals/{fk} | Find a related item by id for portals.
[**teamsIdImageFoldersNkPortalsFkPut**](TeamApi.md#teamsIdImageFoldersNkPortalsFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/portals/{fk} | Update a related item by id for portals.
[**teamsIdImageFoldersNkPortalsGet**](TeamApi.md#teamsIdImageFoldersNkPortalsGet) | **GET** /Teams/{id}/imageFolders/{nk}/portals | Queries portals of ImageFolder.
[**teamsIdImageFoldersNkPortalsPost**](TeamApi.md#teamsIdImageFoldersNkPortalsPost) | **POST** /Teams/{id}/imageFolders/{nk}/portals | Creates a new instance in portals of this model.
[**teamsIdImageFoldersNkPortalsRelFkDelete**](TeamApi.md#teamsIdImageFoldersNkPortalsRelFkDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/portals/rel/{fk} | Remove the portals relation to an item by id.
[**teamsIdImageFoldersNkPortalsRelFkHead**](TeamApi.md#teamsIdImageFoldersNkPortalsRelFkHead) | **HEAD** /Teams/{id}/imageFolders/{nk}/portals/rel/{fk} | Check the existence of portals relation to an item by id.
[**teamsIdImageFoldersNkPortalsRelFkPut**](TeamApi.md#teamsIdImageFoldersNkPortalsRelFkPut) | **PUT** /Teams/{id}/imageFolders/{nk}/portals/rel/{fk} | Add a related item by id for portals.
[**teamsIdImageFoldersNkTeamGet**](TeamApi.md#teamsIdImageFoldersNkTeamGet) | **GET** /Teams/{id}/imageFolders/{nk}/team | Fetches belongsTo relation team.
[**teamsIdImageFoldersPost**](TeamApi.md#teamsIdImageFoldersPost) | **POST** /Teams/{id}/imageFolders | Creates a new instance in imageFolders of this model.
[**teamsIdImagesCountGet**](TeamApi.md#teamsIdImagesCountGet) | **GET** /Teams/{id}/images/count | Counts images of Team.
[**teamsIdImagesDelete**](TeamApi.md#teamsIdImagesDelete) | **DELETE** /Teams/{id}/images | Deletes all images of this model.
[**teamsIdImagesFkDelete**](TeamApi.md#teamsIdImagesFkDelete) | **DELETE** /Teams/{id}/images/{fk} | Delete a related item by id for images.
[**teamsIdImagesFkGet**](TeamApi.md#teamsIdImagesFkGet) | **GET** /Teams/{id}/images/{fk} | Find a related item by id for images.
[**teamsIdImagesFkPut**](TeamApi.md#teamsIdImagesFkPut) | **PUT** /Teams/{id}/images/{fk} | Update a related item by id for images.
[**teamsIdImagesGet**](TeamApi.md#teamsIdImagesGet) | **GET** /Teams/{id}/images | Queries images of Team.
[**teamsIdImagesNkFolderGet**](TeamApi.md#teamsIdImagesNkFolderGet) | **GET** /Teams/{id}/images/{nk}/folder | Fetches belongsTo relation folder.
[**teamsIdImagesNkTeamGet**](TeamApi.md#teamsIdImagesNkTeamGet) | **GET** /Teams/{id}/images/{nk}/team | Fetches belongsTo relation team.
[**teamsIdImagesPost**](TeamApi.md#teamsIdImagesPost) | **POST** /Teams/{id}/images | Creates a new instance in images of this model.
[**teamsIdInvitationTicketsFkDelete**](TeamApi.md#teamsIdInvitationTicketsFkDelete) | **DELETE** /Teams/{id}/invitationTickets/{fk} | Delete InvitationTickets for this Team
[**teamsIdInvitationTicketsFkGet**](TeamApi.md#teamsIdInvitationTicketsFkGet) | **GET** /Teams/{id}/invitationTickets/{fk} | Get InvitationTicket by Id for this Team
[**teamsIdInvitationTicketsGet**](TeamApi.md#teamsIdInvitationTicketsGet) | **GET** /Teams/{id}/invitationTickets | List InvitationTickets for this Team
[**teamsIdLogoPut**](TeamApi.md#teamsIdLogoPut) | **PUT** /Teams/{id}/logo | Change logo
[**teamsIdMembersCountGet**](TeamApi.md#teamsIdMembersCountGet) | **GET** /Teams/{id}/members/count | Counts members of Team.
[**teamsIdMembersDelete**](TeamApi.md#teamsIdMembersDelete) | **DELETE** /Teams/{id}/members | Deletes all members of this model.
[**teamsIdMembersFkDelete**](TeamApi.md#teamsIdMembersFkDelete) | **DELETE** /Teams/{id}/members/{fk} | Delete a related item by id for members.
[**teamsIdMembersFkGet**](TeamApi.md#teamsIdMembersFkGet) | **GET** /Teams/{id}/members/{fk} | Find a related item by id for members.
[**teamsIdMembersFkPut**](TeamApi.md#teamsIdMembersFkPut) | **PUT** /Teams/{id}/members/{fk} | Update a related item by id for members.
[**teamsIdMembersGet**](TeamApi.md#teamsIdMembersGet) | **GET** /Teams/{id}/members | Queries members of Team.
[**teamsIdMembersPost**](TeamApi.md#teamsIdMembersPost) | **POST** /Teams/{id}/members | Creates a new instance in members of this model.
[**teamsIdMembersRelFkDelete**](TeamApi.md#teamsIdMembersRelFkDelete) | **DELETE** /Teams/{id}/members/rel/{fk} | Remove the members relation to an item by id.
[**teamsIdMembersRelFkHead**](TeamApi.md#teamsIdMembersRelFkHead) | **HEAD** /Teams/{id}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**teamsIdMembersRelFkPut**](TeamApi.md#teamsIdMembersRelFkPut) | **PUT** /Teams/{id}/members/rel/{fk} | Add a related item by id for members.
[**teamsIdPatch**](TeamApi.md#teamsIdPatch) | **PATCH** /Teams/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamsIdPermissionDelete**](TeamApi.md#teamsIdPermissionDelete) | **DELETE** /Teams/{id}/permission | Deletes permission of this model.
[**teamsIdPermissionGet**](TeamApi.md#teamsIdPermissionGet) | **GET** /Teams/{id}/permission | Fetches hasOne relation permission.
[**teamsIdPermissionPost**](TeamApi.md#teamsIdPermissionPost) | **POST** /Teams/{id}/permission | Creates a new instance in permission of this model.
[**teamsIdPermissionPut**](TeamApi.md#teamsIdPermissionPut) | **PUT** /Teams/{id}/permission | Update permission of this model.
[**teamsIdPortalsCountGet**](TeamApi.md#teamsIdPortalsCountGet) | **GET** /Teams/{id}/portals/count | Counts portals of Team.
[**teamsIdPortalsDelete**](TeamApi.md#teamsIdPortalsDelete) | **DELETE** /Teams/{id}/portals | Deletes all portals of this model.
[**teamsIdPortalsFkDelete**](TeamApi.md#teamsIdPortalsFkDelete) | **DELETE** /Teams/{id}/portals/{fk} | Delete a related item by id for portals.
[**teamsIdPortalsFkGet**](TeamApi.md#teamsIdPortalsFkGet) | **GET** /Teams/{id}/portals/{fk} | Find a related item by id for portals.
[**teamsIdPortalsFkPut**](TeamApi.md#teamsIdPortalsFkPut) | **PUT** /Teams/{id}/portals/{fk} | Update a related item by id for portals.
[**teamsIdPortalsGet**](TeamApi.md#teamsIdPortalsGet) | **GET** /Teams/{id}/portals | Queries portals of Team.
[**teamsIdPortalsNkDefaultBuilderConfigGet**](TeamApi.md#teamsIdPortalsNkDefaultBuilderConfigGet) | **GET** /Teams/{id}/portals/{nk}/defaultBuilderConfig | Fetches belongsTo relation defaultBuilderConfig.
[**teamsIdPortalsNkDesignFoldersCountGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersCountGet) | **GET** /Teams/{id}/portals/{nk}/designFolders/count | Counts designFolders of Portal.
[**teamsIdPortalsNkDesignFoldersDelete**](TeamApi.md#teamsIdPortalsNkDesignFoldersDelete) | **DELETE** /Teams/{id}/portals/{nk}/designFolders | Deletes all designFolders of this model.
[**teamsIdPortalsNkDesignFoldersFkDelete**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/designFolders/{fk} | Delete a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersFkGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkGet) | **GET** /Teams/{id}/portals/{nk}/designFolders/{fk} | Find a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersFkPut**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkPut) | **PUT** /Teams/{id}/portals/{nk}/designFolders/{fk} | Update a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersGet) | **GET** /Teams/{id}/portals/{nk}/designFolders | Queries designFolders of Portal.
[**teamsIdPortalsNkDesignFoldersPost**](TeamApi.md#teamsIdPortalsNkDesignFoldersPost) | **POST** /Teams/{id}/portals/{nk}/designFolders | Creates a new instance in designFolders of this model.
[**teamsIdPortalsNkDesignsCountGet**](TeamApi.md#teamsIdPortalsNkDesignsCountGet) | **GET** /Teams/{id}/portals/{nk}/designs/count | Counts designs of Portal.
[**teamsIdPortalsNkDesignsFkDelete**](TeamApi.md#teamsIdPortalsNkDesignsFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/designs/{fk} | Delete a related item by id for designs.
[**teamsIdPortalsNkDesignsFkGet**](TeamApi.md#teamsIdPortalsNkDesignsFkGet) | **GET** /Teams/{id}/portals/{nk}/designs/{fk} | Find a related item by id for designs.
[**teamsIdPortalsNkDesignsFkPut**](TeamApi.md#teamsIdPortalsNkDesignsFkPut) | **PUT** /Teams/{id}/portals/{nk}/designs/{fk} | Update a related item by id for designs.
[**teamsIdPortalsNkDesignsGet**](TeamApi.md#teamsIdPortalsNkDesignsGet) | **GET** /Teams/{id}/portals/{nk}/designs | Queries designs of Portal.
[**teamsIdPortalsNkDesignsPost**](TeamApi.md#teamsIdPortalsNkDesignsPost) | **POST** /Teams/{id}/portals/{nk}/designs | Creates a new instance in designs of this model.
[**teamsIdPortalsNkImageFoldersCountGet**](TeamApi.md#teamsIdPortalsNkImageFoldersCountGet) | **GET** /Teams/{id}/portals/{nk}/imageFolders/count | Counts imageFolders of Portal.
[**teamsIdPortalsNkImageFoldersDelete**](TeamApi.md#teamsIdPortalsNkImageFoldersDelete) | **DELETE** /Teams/{id}/portals/{nk}/imageFolders | Deletes all imageFolders of this model.
[**teamsIdPortalsNkImageFoldersFkDelete**](TeamApi.md#teamsIdPortalsNkImageFoldersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**teamsIdPortalsNkImageFoldersFkGet**](TeamApi.md#teamsIdPortalsNkImageFoldersFkGet) | **GET** /Teams/{id}/portals/{nk}/imageFolders/{fk} | Find a related item by id for imageFolders.
[**teamsIdPortalsNkImageFoldersFkPut**](TeamApi.md#teamsIdPortalsNkImageFoldersFkPut) | **PUT** /Teams/{id}/portals/{nk}/imageFolders/{fk} | Update a related item by id for imageFolders.
[**teamsIdPortalsNkImageFoldersGet**](TeamApi.md#teamsIdPortalsNkImageFoldersGet) | **GET** /Teams/{id}/portals/{nk}/imageFolders | Queries imageFolders of Portal.
[**teamsIdPortalsNkImageFoldersPost**](TeamApi.md#teamsIdPortalsNkImageFoldersPost) | **POST** /Teams/{id}/portals/{nk}/imageFolders | Creates a new instance in imageFolders of this model.
[**teamsIdPortalsNkImageFoldersRelFkDelete**](TeamApi.md#teamsIdPortalsNkImageFoldersRelFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/imageFolders/rel/{fk} | Remove the imageFolders relation to an item by id.
[**teamsIdPortalsNkImageFoldersRelFkHead**](TeamApi.md#teamsIdPortalsNkImageFoldersRelFkHead) | **HEAD** /Teams/{id}/portals/{nk}/imageFolders/rel/{fk} | Check the existence of imageFolders relation to an item by id.
[**teamsIdPortalsNkImageFoldersRelFkPut**](TeamApi.md#teamsIdPortalsNkImageFoldersRelFkPut) | **PUT** /Teams/{id}/portals/{nk}/imageFolders/rel/{fk} | Add a related item by id for imageFolders.
[**teamsIdPortalsNkMembersCountGet**](TeamApi.md#teamsIdPortalsNkMembersCountGet) | **GET** /Teams/{id}/portals/{nk}/members/count | Counts members of Portal.
[**teamsIdPortalsNkMembersDelete**](TeamApi.md#teamsIdPortalsNkMembersDelete) | **DELETE** /Teams/{id}/portals/{nk}/members | Deletes all members of this model.
[**teamsIdPortalsNkMembersFkDelete**](TeamApi.md#teamsIdPortalsNkMembersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/members/{fk} | Delete a related item by id for members.
[**teamsIdPortalsNkMembersFkGet**](TeamApi.md#teamsIdPortalsNkMembersFkGet) | **GET** /Teams/{id}/portals/{nk}/members/{fk} | Find a related item by id for members.
[**teamsIdPortalsNkMembersFkPut**](TeamApi.md#teamsIdPortalsNkMembersFkPut) | **PUT** /Teams/{id}/portals/{nk}/members/{fk} | Update a related item by id for members.
[**teamsIdPortalsNkMembersGet**](TeamApi.md#teamsIdPortalsNkMembersGet) | **GET** /Teams/{id}/portals/{nk}/members | Queries members of Portal.
[**teamsIdPortalsNkMembersPost**](TeamApi.md#teamsIdPortalsNkMembersPost) | **POST** /Teams/{id}/portals/{nk}/members | Creates a new instance in members of this model.
[**teamsIdPortalsNkMembersRelFkDelete**](TeamApi.md#teamsIdPortalsNkMembersRelFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/members/rel/{fk} | Remove the members relation to an item by id.
[**teamsIdPortalsNkMembersRelFkHead**](TeamApi.md#teamsIdPortalsNkMembersRelFkHead) | **HEAD** /Teams/{id}/portals/{nk}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**teamsIdPortalsNkMembersRelFkPut**](TeamApi.md#teamsIdPortalsNkMembersRelFkPut) | **PUT** /Teams/{id}/portals/{nk}/members/rel/{fk} | Add a related item by id for members.
[**teamsIdPortalsNkPermissionDelete**](TeamApi.md#teamsIdPortalsNkPermissionDelete) | **DELETE** /Teams/{id}/portals/{nk}/permission | Deletes permission of this model.
[**teamsIdPortalsNkPermissionGet**](TeamApi.md#teamsIdPortalsNkPermissionGet) | **GET** /Teams/{id}/portals/{nk}/permission | Fetches hasOne relation permission.
[**teamsIdPortalsNkPermissionPost**](TeamApi.md#teamsIdPortalsNkPermissionPost) | **POST** /Teams/{id}/portals/{nk}/permission | Creates a new instance in permission of this model.
[**teamsIdPortalsNkPermissionPut**](TeamApi.md#teamsIdPortalsNkPermissionPut) | **PUT** /Teams/{id}/portals/{nk}/permission | Update permission of this model.
[**teamsIdPortalsNkPortalMembersCountGet**](TeamApi.md#teamsIdPortalsNkPortalMembersCountGet) | **GET** /Teams/{id}/portals/{nk}/portalMembers/count | Counts portalMembers of Portal.
[**teamsIdPortalsNkPortalMembersDelete**](TeamApi.md#teamsIdPortalsNkPortalMembersDelete) | **DELETE** /Teams/{id}/portals/{nk}/portalMembers | Deletes all portalMembers of this model.
[**teamsIdPortalsNkPortalMembersFkDelete**](TeamApi.md#teamsIdPortalsNkPortalMembersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/portalMembers/{fk} | Delete a related item by id for portalMembers.
[**teamsIdPortalsNkPortalMembersFkGet**](TeamApi.md#teamsIdPortalsNkPortalMembersFkGet) | **GET** /Teams/{id}/portals/{nk}/portalMembers/{fk} | Find a related item by id for portalMembers.
[**teamsIdPortalsNkPortalMembersFkPut**](TeamApi.md#teamsIdPortalsNkPortalMembersFkPut) | **PUT** /Teams/{id}/portals/{nk}/portalMembers/{fk} | Update a related item by id for portalMembers.
[**teamsIdPortalsNkPortalMembersGet**](TeamApi.md#teamsIdPortalsNkPortalMembersGet) | **GET** /Teams/{id}/portals/{nk}/portalMembers | Queries portalMembers of Portal.
[**teamsIdPortalsNkPortalMembersPost**](TeamApi.md#teamsIdPortalsNkPortalMembersPost) | **POST** /Teams/{id}/portals/{nk}/portalMembers | Creates a new instance in portalMembers of this model.
[**teamsIdPortalsNkTeamGet**](TeamApi.md#teamsIdPortalsNkTeamGet) | **GET** /Teams/{id}/portals/{nk}/team | Fetches belongsTo relation team.
[**teamsIdPortalsNkTemplateFoldersCountGet**](TeamApi.md#teamsIdPortalsNkTemplateFoldersCountGet) | **GET** /Teams/{id}/portals/{nk}/templateFolders/count | Counts templateFolders of Portal.
[**teamsIdPortalsNkTemplateFoldersDelete**](TeamApi.md#teamsIdPortalsNkTemplateFoldersDelete) | **DELETE** /Teams/{id}/portals/{nk}/templateFolders | Deletes all templateFolders of this model.
[**teamsIdPortalsNkTemplateFoldersFkDelete**](TeamApi.md#teamsIdPortalsNkTemplateFoldersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/templateFolders/{fk} | Delete a related item by id for templateFolders.
[**teamsIdPortalsNkTemplateFoldersFkGet**](TeamApi.md#teamsIdPortalsNkTemplateFoldersFkGet) | **GET** /Teams/{id}/portals/{nk}/templateFolders/{fk} | Find a related item by id for templateFolders.
[**teamsIdPortalsNkTemplateFoldersFkPut**](TeamApi.md#teamsIdPortalsNkTemplateFoldersFkPut) | **PUT** /Teams/{id}/portals/{nk}/templateFolders/{fk} | Update a related item by id for templateFolders.
[**teamsIdPortalsNkTemplateFoldersGet**](TeamApi.md#teamsIdPortalsNkTemplateFoldersGet) | **GET** /Teams/{id}/portals/{nk}/templateFolders | Queries templateFolders of Portal.
[**teamsIdPortalsNkTemplateFoldersPost**](TeamApi.md#teamsIdPortalsNkTemplateFoldersPost) | **POST** /Teams/{id}/portals/{nk}/templateFolders | Creates a new instance in templateFolders of this model.
[**teamsIdPortalsNkTemplateRelsCountGet**](TeamApi.md#teamsIdPortalsNkTemplateRelsCountGet) | **GET** /Teams/{id}/portals/{nk}/templateRels/count | Counts templateRels of Portal.
[**teamsIdPortalsNkTemplateRelsDelete**](TeamApi.md#teamsIdPortalsNkTemplateRelsDelete) | **DELETE** /Teams/{id}/portals/{nk}/templateRels | Deletes all templateRels of this model.
[**teamsIdPortalsNkTemplateRelsFkDelete**](TeamApi.md#teamsIdPortalsNkTemplateRelsFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/templateRels/{fk} | Delete a related item by id for templateRels.
[**teamsIdPortalsNkTemplateRelsFkGet**](TeamApi.md#teamsIdPortalsNkTemplateRelsFkGet) | **GET** /Teams/{id}/portals/{nk}/templateRels/{fk} | Find a related item by id for templateRels.
[**teamsIdPortalsNkTemplateRelsFkPut**](TeamApi.md#teamsIdPortalsNkTemplateRelsFkPut) | **PUT** /Teams/{id}/portals/{nk}/templateRels/{fk} | Update a related item by id for templateRels.
[**teamsIdPortalsNkTemplateRelsGet**](TeamApi.md#teamsIdPortalsNkTemplateRelsGet) | **GET** /Teams/{id}/portals/{nk}/templateRels | Queries templateRels of Portal.
[**teamsIdPortalsNkTemplateRelsPost**](TeamApi.md#teamsIdPortalsNkTemplateRelsPost) | **POST** /Teams/{id}/portals/{nk}/templateRels | Creates a new instance in templateRels of this model.
[**teamsIdPortalsNkTemplatesCountGet**](TeamApi.md#teamsIdPortalsNkTemplatesCountGet) | **GET** /Teams/{id}/portals/{nk}/templates/count | Counts templates of Portal.
[**teamsIdPortalsNkTemplatesDelete**](TeamApi.md#teamsIdPortalsNkTemplatesDelete) | **DELETE** /Teams/{id}/portals/{nk}/templates | Deletes all templates of this model.
[**teamsIdPortalsNkTemplatesFkDelete**](TeamApi.md#teamsIdPortalsNkTemplatesFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/templates/{fk} | Delete a related item by id for templates.
[**teamsIdPortalsNkTemplatesFkGet**](TeamApi.md#teamsIdPortalsNkTemplatesFkGet) | **GET** /Teams/{id}/portals/{nk}/templates/{fk} | Find a related item by id for templates.
[**teamsIdPortalsNkTemplatesFkPut**](TeamApi.md#teamsIdPortalsNkTemplatesFkPut) | **PUT** /Teams/{id}/portals/{nk}/templates/{fk} | Update a related item by id for templates.
[**teamsIdPortalsNkTemplatesGet**](TeamApi.md#teamsIdPortalsNkTemplatesGet) | **GET** /Teams/{id}/portals/{nk}/templates | Queries templates of Portal.
[**teamsIdPortalsNkTemplatesPost**](TeamApi.md#teamsIdPortalsNkTemplatesPost) | **POST** /Teams/{id}/portals/{nk}/templates | Creates a new instance in templates of this model.
[**teamsIdPortalsNkTemplatesRelFkDelete**](TeamApi.md#teamsIdPortalsNkTemplatesRelFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/templates/rel/{fk} | Remove the templates relation to an item by id.
[**teamsIdPortalsNkTemplatesRelFkHead**](TeamApi.md#teamsIdPortalsNkTemplatesRelFkHead) | **HEAD** /Teams/{id}/portals/{nk}/templates/rel/{fk} | Check the existence of templates relation to an item by id.
[**teamsIdPortalsNkTemplatesRelFkPut**](TeamApi.md#teamsIdPortalsNkTemplatesRelFkPut) | **PUT** /Teams/{id}/portals/{nk}/templates/rel/{fk} | Add a related item by id for templates.
[**teamsIdPortalsPost**](TeamApi.md#teamsIdPortalsPost) | **POST** /Teams/{id}/portals | Creates a new instance in portals of this model.
[**teamsIdProductMaterialsCountGet**](TeamApi.md#teamsIdProductMaterialsCountGet) | **GET** /Teams/{id}/productMaterials/count | Counts productMaterials of Team.
[**teamsIdProductMaterialsDelete**](TeamApi.md#teamsIdProductMaterialsDelete) | **DELETE** /Teams/{id}/productMaterials | Deletes all productMaterials of this model.
[**teamsIdProductMaterialsFkDelete**](TeamApi.md#teamsIdProductMaterialsFkDelete) | **DELETE** /Teams/{id}/productMaterials/{fk} | Delete a related item by id for productMaterials.
[**teamsIdProductMaterialsFkGet**](TeamApi.md#teamsIdProductMaterialsFkGet) | **GET** /Teams/{id}/productMaterials/{fk} | Find a related item by id for productMaterials.
[**teamsIdProductMaterialsFkPut**](TeamApi.md#teamsIdProductMaterialsFkPut) | **PUT** /Teams/{id}/productMaterials/{fk} | Update a related item by id for productMaterials.
[**teamsIdProductMaterialsGet**](TeamApi.md#teamsIdProductMaterialsGet) | **GET** /Teams/{id}/productMaterials | Queries productMaterials of Team.
[**teamsIdProductMaterialsNkTeamGet**](TeamApi.md#teamsIdProductMaterialsNkTeamGet) | **GET** /Teams/{id}/productMaterials/{nk}/team | Fetches belongsTo relation team.
[**teamsIdProductMaterialsPost**](TeamApi.md#teamsIdProductMaterialsPost) | **POST** /Teams/{id}/productMaterials | Creates a new instance in productMaterials of this model.
[**teamsIdProductPdfColorProfilesAvailableGet**](TeamApi.md#teamsIdProductPdfColorProfilesAvailableGet) | **GET** /Teams/{id}/productPdfColorProfiles/available | Find all available PdfColorProfile
[**teamsIdProductPdfColorProfilesCountGet**](TeamApi.md#teamsIdProductPdfColorProfilesCountGet) | **GET** /Teams/{id}/productPdfColorProfiles/count | Counts productPdfColorProfiles of Team.
[**teamsIdProductPdfColorProfilesDelete**](TeamApi.md#teamsIdProductPdfColorProfilesDelete) | **DELETE** /Teams/{id}/productPdfColorProfiles | Deletes all productPdfColorProfiles of this model.
[**teamsIdProductPdfColorProfilesFkDelete**](TeamApi.md#teamsIdProductPdfColorProfilesFkDelete) | **DELETE** /Teams/{id}/productPdfColorProfiles/{fk} | Delete a related item by id for productPdfColorProfiles.
[**teamsIdProductPdfColorProfilesFkGet**](TeamApi.md#teamsIdProductPdfColorProfilesFkGet) | **GET** /Teams/{id}/productPdfColorProfiles/{fk} | Find a related item by id for productPdfColorProfiles.
[**teamsIdProductPdfColorProfilesFkPut**](TeamApi.md#teamsIdProductPdfColorProfilesFkPut) | **PUT** /Teams/{id}/productPdfColorProfiles/{fk} | Update a related item by id for productPdfColorProfiles.
[**teamsIdProductPdfColorProfilesGet**](TeamApi.md#teamsIdProductPdfColorProfilesGet) | **GET** /Teams/{id}/productPdfColorProfiles | Queries productPdfColorProfiles of Team.
[**teamsIdProductPdfColorProfilesUploadPost**](TeamApi.md#teamsIdProductPdfColorProfilesUploadPost) | **POST** /Teams/{id}/productPdfColorProfiles/upload | Upload ICC PDF Color Profile for this Team
[**teamsIdProductSizeMaterialsCountGet**](TeamApi.md#teamsIdProductSizeMaterialsCountGet) | **GET** /Teams/{id}/productSizeMaterials/count | Counts productSizeMaterials of Team.
[**teamsIdProductSizeMaterialsDelete**](TeamApi.md#teamsIdProductSizeMaterialsDelete) | **DELETE** /Teams/{id}/productSizeMaterials | Deletes all productSizeMaterials of this model.
[**teamsIdProductSizeMaterialsFkDelete**](TeamApi.md#teamsIdProductSizeMaterialsFkDelete) | **DELETE** /Teams/{id}/productSizeMaterials/{fk} | Delete a related item by id for productSizeMaterials.
[**teamsIdProductSizeMaterialsFkGet**](TeamApi.md#teamsIdProductSizeMaterialsFkGet) | **GET** /Teams/{id}/productSizeMaterials/{fk} | Find a related item by id for productSizeMaterials.
[**teamsIdProductSizeMaterialsFkPut**](TeamApi.md#teamsIdProductSizeMaterialsFkPut) | **PUT** /Teams/{id}/productSizeMaterials/{fk} | Update a related item by id for productSizeMaterials.
[**teamsIdProductSizeMaterialsGet**](TeamApi.md#teamsIdProductSizeMaterialsGet) | **GET** /Teams/{id}/productSizeMaterials | Queries productSizeMaterials of Team.
[**teamsIdProductSizeMaterialsNkMaterialGet**](TeamApi.md#teamsIdProductSizeMaterialsNkMaterialGet) | **GET** /Teams/{id}/productSizeMaterials/{nk}/material | Fetches belongsTo relation material.
[**teamsIdProductSizeMaterialsNkPdfColorProfileGet**](TeamApi.md#teamsIdProductSizeMaterialsNkPdfColorProfileGet) | **GET** /Teams/{id}/productSizeMaterials/{nk}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**teamsIdProductSizeMaterialsNkSizeGet**](TeamApi.md#teamsIdProductSizeMaterialsNkSizeGet) | **GET** /Teams/{id}/productSizeMaterials/{nk}/size | Fetches belongsTo relation size.
[**teamsIdProductSizeMaterialsNkTeamGet**](TeamApi.md#teamsIdProductSizeMaterialsNkTeamGet) | **GET** /Teams/{id}/productSizeMaterials/{nk}/team | Fetches belongsTo relation team.
[**teamsIdProductSizeMaterialsPost**](TeamApi.md#teamsIdProductSizeMaterialsPost) | **POST** /Teams/{id}/productSizeMaterials | Creates a new instance in productSizeMaterials of this model.
[**teamsIdPut**](TeamApi.md#teamsIdPut) | **PUT** /Teams/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamsIdReplacePost**](TeamApi.md#teamsIdReplacePost) | **POST** /Teams/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamsIdTeamDataDataSourceMongoGet**](TeamApi.md#teamsIdTeamDataDataSourceMongoGet) | **GET** /Teams/{id}/teamData/dataSourceMongo | Fetches belongsTo relation dataSourceMongo.
[**teamsIdTeamDataDataSourceMsSqlGet**](TeamApi.md#teamsIdTeamDataDataSourceMsSqlGet) | **GET** /Teams/{id}/teamData/dataSourceMsSql | Fetches belongsTo relation dataSourceMsSql.
[**teamsIdTeamDataDataSourceMySqlGet**](TeamApi.md#teamsIdTeamDataDataSourceMySqlGet) | **GET** /Teams/{id}/teamData/dataSourceMySql | Fetches belongsTo relation dataSourceMySql.
[**teamsIdTeamDataDataSourceOracleGet**](TeamApi.md#teamsIdTeamDataDataSourceOracleGet) | **GET** /Teams/{id}/teamData/dataSourceOracle | Fetches belongsTo relation dataSourceOracle.
[**teamsIdTeamDataDataSourcePostgreSqlGet**](TeamApi.md#teamsIdTeamDataDataSourcePostgreSqlGet) | **GET** /Teams/{id}/teamData/dataSourcePostgreSql | Fetches belongsTo relation dataSourcePostgreSql.
[**teamsIdTeamDataDataSourceRestGet**](TeamApi.md#teamsIdTeamDataDataSourceRestGet) | **GET** /Teams/{id}/teamData/dataSourceRest | Fetches belongsTo relation dataSourceRest.
[**teamsIdTeamDataDataSourceSoapGet**](TeamApi.md#teamsIdTeamDataDataSourceSoapGet) | **GET** /Teams/{id}/teamData/dataSourceSoap | Fetches belongsTo relation dataSourceSoap.
[**teamsIdTeamDataDesignsCountGet**](TeamApi.md#teamsIdTeamDataDesignsCountGet) | **GET** /Teams/{id}/teamData/designs/count | Counts designs of DynamicData.
[**teamsIdTeamDataDesignsFkDelete**](TeamApi.md#teamsIdTeamDataDesignsFkDelete) | **DELETE** /Teams/{id}/teamData/designs/{fk} | Delete a related item by id for designs.
[**teamsIdTeamDataDesignsFkGet**](TeamApi.md#teamsIdTeamDataDesignsFkGet) | **GET** /Teams/{id}/teamData/designs/{fk} | Find a related item by id for designs.
[**teamsIdTeamDataDesignsFkPut**](TeamApi.md#teamsIdTeamDataDesignsFkPut) | **PUT** /Teams/{id}/teamData/designs/{fk} | Update a related item by id for designs.
[**teamsIdTeamDataDesignsGet**](TeamApi.md#teamsIdTeamDataDesignsGet) | **GET** /Teams/{id}/teamData/designs | Queries designs of DynamicData.
[**teamsIdTeamDataDesignsPost**](TeamApi.md#teamsIdTeamDataDesignsPost) | **POST** /Teams/{id}/teamData/designs | Creates a new instance in designs of this model.
[**teamsIdTeamDataGet**](TeamApi.md#teamsIdTeamDataGet) | **GET** /Teams/{id}/teamData | Fetches belongsTo relation teamData.
[**teamsIdTeamDataRecordsCountGet**](TeamApi.md#teamsIdTeamDataRecordsCountGet) | **GET** /Teams/{id}/teamData/records/count | Count Dynamic Data records
[**teamsIdTeamDataRecordsDelete**](TeamApi.md#teamsIdTeamDataRecordsDelete) | **DELETE** /Teams/{id}/teamData/records | Delete all matching records.
[**teamsIdTeamDataRecordsFkDelete**](TeamApi.md#teamsIdTeamDataRecordsFkDelete) | **DELETE** /Teams/{id}/teamData/records/{fk} | Delete a model instance by {{fk}} from the data source.
[**teamsIdTeamDataRecordsFkGet**](TeamApi.md#teamsIdTeamDataRecordsFkGet) | **GET** /Teams/{id}/teamData/records/{fk} | Find a model instance by {{fk}} from the data source.
[**teamsIdTeamDataRecordsFkPropertyNameUploadPut**](TeamApi.md#teamsIdTeamDataRecordsFkPropertyNameUploadPut) | **PUT** /Teams/{id}/teamData/records/{fk}/{propertyName}/upload | Replace attributes for a model instance and persist it into the data source.
[**teamsIdTeamDataRecordsFkPut**](TeamApi.md#teamsIdTeamDataRecordsFkPut) | **PUT** /Teams/{id}/teamData/records/{fk} | Replace attributes for a model instance and persist it into the data source.
[**teamsIdTeamDataRecordsGet**](TeamApi.md#teamsIdTeamDataRecordsGet) | **GET** /Teams/{id}/teamData/records | Find all instances of the model matched by filter from the data source.
[**teamsIdTeamDataRecordsMigratePost**](TeamApi.md#teamsIdTeamDataRecordsMigratePost) | **POST** /Teams/{id}/teamData/records/migrate | Request migration for Dynamic Data records
[**teamsIdTeamDataRecordsPost**](TeamApi.md#teamsIdTeamDataRecordsPost) | **POST** /Teams/{id}/teamData/records | Create a new instance of the model and persist it into the data source.
[**teamsIdTeamDataRecordsUploadCsvPost**](TeamApi.md#teamsIdTeamDataRecordsUploadCsvPost) | **POST** /Teams/{id}/teamData/records/upload/csv | Upload CSV for this Dynamic Data
[**teamsIdTeamDataTeamGet**](TeamApi.md#teamsIdTeamDataTeamGet) | **GET** /Teams/{id}/teamData/team | Fetches belongsTo relation team.
[**teamsIdTeamMembersCountGet**](TeamApi.md#teamsIdTeamMembersCountGet) | **GET** /Teams/{id}/teamMembers/count | Counts teamMembers of Team.
[**teamsIdTeamMembersDelete**](TeamApi.md#teamsIdTeamMembersDelete) | **DELETE** /Teams/{id}/teamMembers | Deletes all teamMembers of this model.
[**teamsIdTeamMembersFkDelete**](TeamApi.md#teamsIdTeamMembersFkDelete) | **DELETE** /Teams/{id}/teamMembers/{fk} | Delete a related item by id for teamMembers.
[**teamsIdTeamMembersFkGet**](TeamApi.md#teamsIdTeamMembersFkGet) | **GET** /Teams/{id}/teamMembers/{fk} | Find a related item by id for teamMembers.
[**teamsIdTeamMembersFkPut**](TeamApi.md#teamsIdTeamMembersFkPut) | **PUT** /Teams/{id}/teamMembers/{fk} | Update a related item by id for teamMembers.
[**teamsIdTeamMembersGet**](TeamApi.md#teamsIdTeamMembersGet) | **GET** /Teams/{id}/teamMembers | Queries teamMembers of Team.
[**teamsIdTeamMembersMapKeysGet**](TeamApi.md#teamsIdTeamMembersMapKeysGet) | **GET** /Teams/{id}/teamMembers/map-keys | Map teamMembers emails to teamMembers keys
[**teamsIdTeamMembersPost**](TeamApi.md#teamsIdTeamMembersPost) | **POST** /Teams/{id}/teamMembers | Creates a new instance in teamMembers of this model.
[**teamsIdTemplateFoldersCountGet**](TeamApi.md#teamsIdTemplateFoldersCountGet) | **GET** /Teams/{id}/templateFolders/count | Counts templateFolders of Team.
[**teamsIdTemplateFoldersDelete**](TeamApi.md#teamsIdTemplateFoldersDelete) | **DELETE** /Teams/{id}/templateFolders | Deletes all templateFolders of this model.
[**teamsIdTemplateFoldersFkDelete**](TeamApi.md#teamsIdTemplateFoldersFkDelete) | **DELETE** /Teams/{id}/templateFolders/{fk} | Delete a related item by id for templateFolders.
[**teamsIdTemplateFoldersFkGet**](TeamApi.md#teamsIdTemplateFoldersFkGet) | **GET** /Teams/{id}/templateFolders/{fk} | Find a related item by id for templateFolders.
[**teamsIdTemplateFoldersFkPut**](TeamApi.md#teamsIdTemplateFoldersFkPut) | **PUT** /Teams/{id}/templateFolders/{fk} | Update a related item by id for templateFolders.
[**teamsIdTemplateFoldersGet**](TeamApi.md#teamsIdTemplateFoldersGet) | **GET** /Teams/{id}/templateFolders | Queries templateFolders of Team.
[**teamsIdTemplateFoldersPost**](TeamApi.md#teamsIdTemplateFoldersPost) | **POST** /Teams/{id}/templateFolders | Creates a new instance in templateFolders of this model.
[**teamsIdTemplatesCountGet**](TeamApi.md#teamsIdTemplatesCountGet) | **GET** /Teams/{id}/templates/count | Counts templates of Team.
[**teamsIdTemplatesDelete**](TeamApi.md#teamsIdTemplatesDelete) | **DELETE** /Teams/{id}/templates | Deletes all templates of this model.
[**teamsIdTemplatesFkDelete**](TeamApi.md#teamsIdTemplatesFkDelete) | **DELETE** /Teams/{id}/templates/{fk} | Delete a related item by id for templates.
[**teamsIdTemplatesFkGet**](TeamApi.md#teamsIdTemplatesFkGet) | **GET** /Teams/{id}/templates/{fk} | Find a related item by id for templates.
[**teamsIdTemplatesFkPut**](TeamApi.md#teamsIdTemplatesFkPut) | **PUT** /Teams/{id}/templates/{fk} | Update a related item by id for templates.
[**teamsIdTemplatesGet**](TeamApi.md#teamsIdTemplatesGet) | **GET** /Teams/{id}/templates | Queries templates of Team.
[**teamsIdTemplatesNkDesignsCountGet**](TeamApi.md#teamsIdTemplatesNkDesignsCountGet) | **GET** /Teams/{id}/templates/{nk}/designs/count | Counts designs of Template.
[**teamsIdTemplatesNkDesignsFkDelete**](TeamApi.md#teamsIdTemplatesNkDesignsFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/designs/{fk} | Delete a related item by id for designs.
[**teamsIdTemplatesNkDesignsFkGet**](TeamApi.md#teamsIdTemplatesNkDesignsFkGet) | **GET** /Teams/{id}/templates/{nk}/designs/{fk} | Find a related item by id for designs.
[**teamsIdTemplatesNkDesignsFkPut**](TeamApi.md#teamsIdTemplatesNkDesignsFkPut) | **PUT** /Teams/{id}/templates/{nk}/designs/{fk} | Update a related item by id for designs.
[**teamsIdTemplatesNkDesignsGet**](TeamApi.md#teamsIdTemplatesNkDesignsGet) | **GET** /Teams/{id}/templates/{nk}/designs | Queries designs of Template.
[**teamsIdTemplatesNkDesignsPost**](TeamApi.md#teamsIdTemplatesNkDesignsPost) | **POST** /Teams/{id}/templates/{nk}/designs | Creates a new instance in designs of this model.
[**teamsIdTemplatesNkMembersCountGet**](TeamApi.md#teamsIdTemplatesNkMembersCountGet) | **GET** /Teams/{id}/templates/{nk}/members/count | Counts members of Template.
[**teamsIdTemplatesNkMembersDelete**](TeamApi.md#teamsIdTemplatesNkMembersDelete) | **DELETE** /Teams/{id}/templates/{nk}/members | Deletes all members of this model.
[**teamsIdTemplatesNkMembersFkDelete**](TeamApi.md#teamsIdTemplatesNkMembersFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/members/{fk} | Delete a related item by id for members.
[**teamsIdTemplatesNkMembersFkGet**](TeamApi.md#teamsIdTemplatesNkMembersFkGet) | **GET** /Teams/{id}/templates/{nk}/members/{fk} | Find a related item by id for members.
[**teamsIdTemplatesNkMembersFkPut**](TeamApi.md#teamsIdTemplatesNkMembersFkPut) | **PUT** /Teams/{id}/templates/{nk}/members/{fk} | Update a related item by id for members.
[**teamsIdTemplatesNkMembersGet**](TeamApi.md#teamsIdTemplatesNkMembersGet) | **GET** /Teams/{id}/templates/{nk}/members | Queries members of Template.
[**teamsIdTemplatesNkMembersPost**](TeamApi.md#teamsIdTemplatesNkMembersPost) | **POST** /Teams/{id}/templates/{nk}/members | Creates a new instance in members of this model.
[**teamsIdTemplatesNkMembersRelFkDelete**](TeamApi.md#teamsIdTemplatesNkMembersRelFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/members/rel/{fk} | Remove the members relation to an item by id.
[**teamsIdTemplatesNkMembersRelFkHead**](TeamApi.md#teamsIdTemplatesNkMembersRelFkHead) | **HEAD** /Teams/{id}/templates/{nk}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**teamsIdTemplatesNkMembersRelFkPut**](TeamApi.md#teamsIdTemplatesNkMembersRelFkPut) | **PUT** /Teams/{id}/templates/{nk}/members/rel/{fk} | Add a related item by id for members.
[**teamsIdTemplatesNkPermissionDelete**](TeamApi.md#teamsIdTemplatesNkPermissionDelete) | **DELETE** /Teams/{id}/templates/{nk}/permission | Deletes permission of this model.
[**teamsIdTemplatesNkPermissionGet**](TeamApi.md#teamsIdTemplatesNkPermissionGet) | **GET** /Teams/{id}/templates/{nk}/permission | Fetches hasOne relation permission.
[**teamsIdTemplatesNkPermissionPost**](TeamApi.md#teamsIdTemplatesNkPermissionPost) | **POST** /Teams/{id}/templates/{nk}/permission | Creates a new instance in permission of this model.
[**teamsIdTemplatesNkPermissionPut**](TeamApi.md#teamsIdTemplatesNkPermissionPut) | **PUT** /Teams/{id}/templates/{nk}/permission | Update permission of this model.
[**teamsIdTemplatesNkPortalFoldersCountGet**](TeamApi.md#teamsIdTemplatesNkPortalFoldersCountGet) | **GET** /Teams/{id}/templates/{nk}/portalFolders/count | Counts portalFolders of Template.
[**teamsIdTemplatesNkPortalFoldersDelete**](TeamApi.md#teamsIdTemplatesNkPortalFoldersDelete) | **DELETE** /Teams/{id}/templates/{nk}/portalFolders | Deletes all portalFolders of this model.
[**teamsIdTemplatesNkPortalFoldersFkDelete**](TeamApi.md#teamsIdTemplatesNkPortalFoldersFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/portalFolders/{fk} | Delete a related item by id for portalFolders.
[**teamsIdTemplatesNkPortalFoldersFkGet**](TeamApi.md#teamsIdTemplatesNkPortalFoldersFkGet) | **GET** /Teams/{id}/templates/{nk}/portalFolders/{fk} | Find a related item by id for portalFolders.
[**teamsIdTemplatesNkPortalFoldersFkPut**](TeamApi.md#teamsIdTemplatesNkPortalFoldersFkPut) | **PUT** /Teams/{id}/templates/{nk}/portalFolders/{fk} | Update a related item by id for portalFolders.
[**teamsIdTemplatesNkPortalFoldersGet**](TeamApi.md#teamsIdTemplatesNkPortalFoldersGet) | **GET** /Teams/{id}/templates/{nk}/portalFolders | Queries portalFolders of Template.
[**teamsIdTemplatesNkPortalFoldersPost**](TeamApi.md#teamsIdTemplatesNkPortalFoldersPost) | **POST** /Teams/{id}/templates/{nk}/portalFolders | Creates a new instance in portalFolders of this model.
[**teamsIdTemplatesNkPortalFoldersRelFkDelete**](TeamApi.md#teamsIdTemplatesNkPortalFoldersRelFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/portalFolders/rel/{fk} | Remove the portalFolders relation to an item by id.
[**teamsIdTemplatesNkPortalFoldersRelFkHead**](TeamApi.md#teamsIdTemplatesNkPortalFoldersRelFkHead) | **HEAD** /Teams/{id}/templates/{nk}/portalFolders/rel/{fk} | Check the existence of portalFolders relation to an item by id.
[**teamsIdTemplatesNkPortalFoldersRelFkPut**](TeamApi.md#teamsIdTemplatesNkPortalFoldersRelFkPut) | **PUT** /Teams/{id}/templates/{nk}/portalFolders/rel/{fk} | Add a related item by id for portalFolders.
[**teamsIdTemplatesNkPortalsCountGet**](TeamApi.md#teamsIdTemplatesNkPortalsCountGet) | **GET** /Teams/{id}/templates/{nk}/portals/count | Counts portals of Template.
[**teamsIdTemplatesNkPortalsDelete**](TeamApi.md#teamsIdTemplatesNkPortalsDelete) | **DELETE** /Teams/{id}/templates/{nk}/portals | Deletes all portals of this model.
[**teamsIdTemplatesNkPortalsFkDelete**](TeamApi.md#teamsIdTemplatesNkPortalsFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/portals/{fk} | Delete a related item by id for portals.
[**teamsIdTemplatesNkPortalsFkGet**](TeamApi.md#teamsIdTemplatesNkPortalsFkGet) | **GET** /Teams/{id}/templates/{nk}/portals/{fk} | Find a related item by id for portals.
[**teamsIdTemplatesNkPortalsFkPut**](TeamApi.md#teamsIdTemplatesNkPortalsFkPut) | **PUT** /Teams/{id}/templates/{nk}/portals/{fk} | Update a related item by id for portals.
[**teamsIdTemplatesNkPortalsGet**](TeamApi.md#teamsIdTemplatesNkPortalsGet) | **GET** /Teams/{id}/templates/{nk}/portals | Queries portals of Template.
[**teamsIdTemplatesNkPortalsPost**](TeamApi.md#teamsIdTemplatesNkPortalsPost) | **POST** /Teams/{id}/templates/{nk}/portals | Creates a new instance in portals of this model.
[**teamsIdTemplatesNkPortalsRelFkDelete**](TeamApi.md#teamsIdTemplatesNkPortalsRelFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/portals/rel/{fk} | Remove the portals relation to an item by id.
[**teamsIdTemplatesNkPortalsRelFkHead**](TeamApi.md#teamsIdTemplatesNkPortalsRelFkHead) | **HEAD** /Teams/{id}/templates/{nk}/portals/rel/{fk} | Check the existence of portals relation to an item by id.
[**teamsIdTemplatesNkPortalsRelFkPut**](TeamApi.md#teamsIdTemplatesNkPortalsRelFkPut) | **PUT** /Teams/{id}/templates/{nk}/portals/rel/{fk} | Add a related item by id for portals.
[**teamsIdTemplatesNkTagsCountGet**](TeamApi.md#teamsIdTemplatesNkTagsCountGet) | **GET** /Teams/{id}/templates/{nk}/tags/count | Counts tags of Template.
[**teamsIdTemplatesNkTagsDelete**](TeamApi.md#teamsIdTemplatesNkTagsDelete) | **DELETE** /Teams/{id}/templates/{nk}/tags | Deletes all tags of this model.
[**teamsIdTemplatesNkTagsFkDelete**](TeamApi.md#teamsIdTemplatesNkTagsFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/tags/{fk} | Delete a related item by id for tags.
[**teamsIdTemplatesNkTagsFkGet**](TeamApi.md#teamsIdTemplatesNkTagsFkGet) | **GET** /Teams/{id}/templates/{nk}/tags/{fk} | Find a related item by id for tags.
[**teamsIdTemplatesNkTagsFkPut**](TeamApi.md#teamsIdTemplatesNkTagsFkPut) | **PUT** /Teams/{id}/templates/{nk}/tags/{fk} | Update a related item by id for tags.
[**teamsIdTemplatesNkTagsGet**](TeamApi.md#teamsIdTemplatesNkTagsGet) | **GET** /Teams/{id}/templates/{nk}/tags | Queries tags of Template.
[**teamsIdTemplatesNkTagsPost**](TeamApi.md#teamsIdTemplatesNkTagsPost) | **POST** /Teams/{id}/templates/{nk}/tags | Creates a new instance in tags of this model.
[**teamsIdTemplatesNkTagsRelFkDelete**](TeamApi.md#teamsIdTemplatesNkTagsRelFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/tags/rel/{fk} | Remove the tags relation to an item by id.
[**teamsIdTemplatesNkTagsRelFkHead**](TeamApi.md#teamsIdTemplatesNkTagsRelFkHead) | **HEAD** /Teams/{id}/templates/{nk}/tags/rel/{fk} | Check the existence of tags relation to an item by id.
[**teamsIdTemplatesNkTagsRelFkPut**](TeamApi.md#teamsIdTemplatesNkTagsRelFkPut) | **PUT** /Teams/{id}/templates/{nk}/tags/rel/{fk} | Add a related item by id for tags.
[**teamsIdTemplatesNkTeamFolderGet**](TeamApi.md#teamsIdTemplatesNkTeamFolderGet) | **GET** /Teams/{id}/templates/{nk}/teamFolder | Fetches belongsTo relation teamFolder.
[**teamsIdTemplatesNkTeamGet**](TeamApi.md#teamsIdTemplatesNkTeamGet) | **GET** /Teams/{id}/templates/{nk}/team | Fetches belongsTo relation team.
[**teamsIdTemplatesNkTemplateMembersCountGet**](TeamApi.md#teamsIdTemplatesNkTemplateMembersCountGet) | **GET** /Teams/{id}/templates/{nk}/templateMembers/count | Counts templateMembers of Template.
[**teamsIdTemplatesNkTemplateMembersDelete**](TeamApi.md#teamsIdTemplatesNkTemplateMembersDelete) | **DELETE** /Teams/{id}/templates/{nk}/templateMembers | Deletes all templateMembers of this model.
[**teamsIdTemplatesNkTemplateMembersFkDelete**](TeamApi.md#teamsIdTemplatesNkTemplateMembersFkDelete) | **DELETE** /Teams/{id}/templates/{nk}/templateMembers/{fk} | Delete a related item by id for templateMembers.
[**teamsIdTemplatesNkTemplateMembersFkGet**](TeamApi.md#teamsIdTemplatesNkTemplateMembersFkGet) | **GET** /Teams/{id}/templates/{nk}/templateMembers/{fk} | Find a related item by id for templateMembers.
[**teamsIdTemplatesNkTemplateMembersFkPut**](TeamApi.md#teamsIdTemplatesNkTemplateMembersFkPut) | **PUT** /Teams/{id}/templates/{nk}/templateMembers/{fk} | Update a related item by id for templateMembers.
[**teamsIdTemplatesNkTemplateMembersGet**](TeamApi.md#teamsIdTemplatesNkTemplateMembersGet) | **GET** /Teams/{id}/templates/{nk}/templateMembers | Queries templateMembers of Template.
[**teamsIdTemplatesNkTemplateMembersPost**](TeamApi.md#teamsIdTemplatesNkTemplateMembersPost) | **POST** /Teams/{id}/templates/{nk}/templateMembers | Creates a new instance in templateMembers of this model.
[**teamsIdTemplatesNkUploaderGet**](TeamApi.md#teamsIdTemplatesNkUploaderGet) | **GET** /Teams/{id}/templates/{nk}/uploader | Fetches belongsTo relation uploader.
[**teamsIdTemplatesNkWorkflowGet**](TeamApi.md#teamsIdTemplatesNkWorkflowGet) | **GET** /Teams/{id}/templates/{nk}/workflow | Fetches belongsTo relation workflow.
[**teamsIdTemplatesPost**](TeamApi.md#teamsIdTemplatesPost) | **POST** /Teams/{id}/templates | Creates a new instance in templates of this model.
[**teamsIdTemplatesWithDesignsGet**](TeamApi.md#teamsIdTemplatesWithDesignsGet) | **GET** /Teams/{id}/templatesWithDesigns | List Templates with Designs for this Team
[**teamsIdWorkflowsCountGet**](TeamApi.md#teamsIdWorkflowsCountGet) | **GET** /Teams/{id}/workflows/count | Counts workflows of Team.
[**teamsIdWorkflowsDelete**](TeamApi.md#teamsIdWorkflowsDelete) | **DELETE** /Teams/{id}/workflows | Deletes all workflows of this model.
[**teamsIdWorkflowsFkDelete**](TeamApi.md#teamsIdWorkflowsFkDelete) | **DELETE** /Teams/{id}/workflows/{fk} | Delete a related item by id for workflows.
[**teamsIdWorkflowsFkGet**](TeamApi.md#teamsIdWorkflowsFkGet) | **GET** /Teams/{id}/workflows/{fk} | Find a related item by id for workflows.
[**teamsIdWorkflowsFkPut**](TeamApi.md#teamsIdWorkflowsFkPut) | **PUT** /Teams/{id}/workflows/{fk} | Update a related item by id for workflows.
[**teamsIdWorkflowsGet**](TeamApi.md#teamsIdWorkflowsGet) | **GET** /Teams/{id}/workflows | Queries workflows of Team.
[**teamsIdWorkflowsPost**](TeamApi.md#teamsIdWorkflowsPost) | **POST** /Teams/{id}/workflows | Creates a new instance in workflows of this model.
[**teamsNameNameExistsGet**](TeamApi.md#teamsNameNameExistsGet) | **GET** /Teams/name/{name}/exists | Define whether team exists or not
[**teamsPost**](TeamApi.md#teamsPost) | **POST** /Teams | Create a new instance of the model and persist it into the data source.
[**teamsSubdomainSubdomainExistsGet**](TeamApi.md#teamsSubdomainSubdomainExistsGet) | **GET** /Teams/subdomain/{subdomain}/exists | Define whether team exists or not


# **teamsChangeStreamGet**
> \SplFileObject teamsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamsChangeStreamPost**
> \SplFileObject teamsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamsFindOneGet**
> \Swagger\Client\Model\Team teamsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsGet**
> \Swagger\Client\Model\Team[] teamsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Team[]**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdAuthResetKeysDelete**
> \Swagger\Client\Model\Team teamsIdAuthResetKeysDelete($id)

Reset Team keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $result = $api_instance->teamsIdAuthResetKeysDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdAuthResetKeysDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBrandDelete**
> teamsIdBrandDelete($id)

Deletes brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdBrandDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBrandDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBrandGet**
> \Swagger\Client\Model\TeamBrand teamsIdBrandGet($id, $refresh)

Fetches hasOne relation brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdBrandGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBrandGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBrandPost**
> \Swagger\Client\Model\TeamBrand teamsIdBrandPost($id, $data)

Creates a new instance in brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->teamsIdBrandPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBrandPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBrandPut**
> \Swagger\Client\Model\TeamBrand teamsIdBrandPut($id, $data)

Update brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->teamsIdBrandPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBrandPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsCountGet($id, $where)

Counts builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsDefaultGet**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsDefaultGet($id)

Get default TeamBuilderConfig for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $result = $api_instance->teamsIdBuilderConfigsDefaultGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsDefaultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsDefaultProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamsIdBuilderConfigsDefaultProductSizeMaterialsGet($id)

Get default TeamBuilderConfig ProductSizeMaterials for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $result = $api_instance->teamsIdBuilderConfigsDefaultProductSizeMaterialsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsDefaultProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsDelete**
> teamsIdBuilderConfigsDelete($id)

Deletes all builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdBuilderConfigsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsFkDelete**
> teamsIdBuilderConfigsFkDelete($id, $fk)

Delete a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $api_instance->teamsIdBuilderConfigsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsFkGet**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsFkGet($id, $fk)

Find a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $result = $api_instance->teamsIdBuilderConfigsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsFkLogoPut**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsFkLogoPut($id, $fk, $data)

Change Builder Config logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | BuilderConfig id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Logo

try {
    $result = $api_instance->teamsIdBuilderConfigsFkLogoPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsFkLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| BuilderConfig id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Logo |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsFkPut**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsFkPut($id, $fk, $data)

Update a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for builderConfigs
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->teamsIdBuilderConfigsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for builderConfigs |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsFkWatermarkPut**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsFkWatermarkPut($id, $fk, $data)

Change Builder Config watermark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | BuilderConfig id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Watermark

try {
    $result = $api_instance->teamsIdBuilderConfigsFkWatermarkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsFkWatermarkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| BuilderConfig id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Watermark |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsGet**
> \Swagger\Client\Model\TeamBuilderConfig[] teamsIdBuilderConfigsGet($id, $filter)

Queries builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig[]**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkPortalsCountGet($id, $nk, $where)

Counts portals of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkPortalsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsFkDelete**
> teamsIdBuilderConfigsNkPortalsFkDelete($id, $nk, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdBuilderConfigsNkPortalsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsFkGet**
> \Swagger\Client\Model\Portal teamsIdBuilderConfigsNkPortalsFkGet($id, $nk, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdBuilderConfigsNkPortalsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsFkPut**
> \Swagger\Client\Model\Portal teamsIdBuilderConfigsNkPortalsFkPut($id, $nk, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkPortalsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsGet**
> \Swagger\Client\Model\Portal[] teamsIdBuilderConfigsNkPortalsGet($id, $nk, $filter)

Queries portals of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkPortalsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkPortalsPost**
> \Swagger\Client\Model\Portal teamsIdBuilderConfigsNkPortalsPost($id, $nk, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkPortalsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkProductGroupsCountGet($id, $nk, $where)

Counts productGroups of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsFkDelete**
> teamsIdBuilderConfigsNkProductGroupsFkDelete($id, $nk, $fk)

Delete a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $api_instance->teamsIdBuilderConfigsNkProductGroupsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productGroups |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsFkGet**
> \Swagger\Client\Model\ProductGroup teamsIdBuilderConfigsNkProductGroupsFkGet($id, $nk, $fk)

Find a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productGroups |

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsFkPut**
> \Swagger\Client\Model\ProductGroup teamsIdBuilderConfigsNkProductGroupsFkPut($id, $nk, $fk, $data)

Update a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductGroupsGet**
> \Swagger\Client\Model\ProductGroup[] teamsIdBuilderConfigsNkProductGroupsGet($id, $nk, $filter)

Queries productGroups of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsPost**
> \Swagger\Client\Model\ProductGroup teamsIdBuilderConfigsNkProductGroupsPost($id, $nk, $data)

Creates a new instance in productGroups of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsRelFkDelete**
> teamsIdBuilderConfigsNkProductGroupsRelFkDelete($id, $nk, $fk)

Remove the productGroups relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $api_instance->teamsIdBuilderConfigsNkProductGroupsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productGroups |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsRelFkHead**
> bool teamsIdBuilderConfigsNkProductGroupsRelFkHead($id, $nk, $fk)

Check the existence of productGroups relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productGroups |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductGroupsRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamsIdBuilderConfigsNkProductGroupsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for productGroups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productGroups
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductGroupsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductGroupsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkProductSizeMaterialsCountGet($id, $nk, $where)

Counts productSizeMaterials of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete**
> teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete($id, $nk, $fk)

Delete a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsFkGet($id, $nk, $fk)

Find a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsFkPut($id, $nk, $fk, $data)

Update a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamsIdBuilderConfigsNkProductSizeMaterialsGet($id, $nk, $filter)

Queries productSizeMaterials of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsPost($id, $nk, $data)

Creates a new instance in productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet($id, $nk, $where)

Counts productSizeMaterialsRel of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete**
> teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete($id, $nk, $fk)

Remove the productSizeMaterials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0**
> teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0($id, $nk, $fk)

Delete a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel

try {
    $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterialsRel |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet($id, $nk, $fk)

Find a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterialsRel |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead**
> bool teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead($id, $nk, $fk)

Check the existence of productSizeMaterials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0($id, $nk, $fk, $data)

Update a related item by id for productSizeMaterialsRel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizeMaterialsRel
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelFkPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[] teamsIdBuilderConfigsNkProductSizeMaterialsRelGet($id, $nk, $filter)

Queries productSizeMaterialsRel of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[]**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizeMaterialsRelPost**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamsIdBuilderConfigsNkProductSizeMaterialsRelPost($id, $nk, $data)

Creates a new instance in productSizeMaterialsRel of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizeMaterialsRelPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizeMaterialsRelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkProductSizesCountGet($id, $nk, $where)

Counts productSizes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesFkDelete**
> teamsIdBuilderConfigsNkProductSizesFkDelete($id, $nk, $fk)

Delete a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $api_instance->teamsIdBuilderConfigsNkProductSizesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesFkGet**
> \Swagger\Client\Model\ProductSize teamsIdBuilderConfigsNkProductSizesFkGet($id, $nk, $fk)

Find a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizes |

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesFkPut**
> \Swagger\Client\Model\ProductSize teamsIdBuilderConfigsNkProductSizesFkPut($id, $nk, $fk, $data)

Update a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductSizesGet**
> \Swagger\Client\Model\ProductSize[] teamsIdBuilderConfigsNkProductSizesGet($id, $nk, $filter)

Queries productSizes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize[]**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesPost**
> \Swagger\Client\Model\ProductSize teamsIdBuilderConfigsNkProductSizesPost($id, $nk, $data)

Creates a new instance in productSizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesRelFkDelete**
> teamsIdBuilderConfigsNkProductSizesRelFkDelete($id, $nk, $fk)

Remove the productSizes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $api_instance->teamsIdBuilderConfigsNkProductSizesRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesRelFkHead**
> bool teamsIdBuilderConfigsNkProductSizesRelFkHead($id, $nk, $fk)

Check the existence of productSizes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productSizes |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductSizesRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamsIdBuilderConfigsNkProductSizesRelFkPut($id, $nk, $fk, $data)

Add a related item by id for productSizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productSizes
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductSizesRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductSizesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductTypesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdBuilderConfigsNkProductTypesCountGet($id, $nk, $where)

Counts productTypes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesFkDelete**
> teamsIdBuilderConfigsNkProductTypesFkDelete($id, $nk, $fk)

Delete a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $api_instance->teamsIdBuilderConfigsNkProductTypesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productTypes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesFkGet**
> \Swagger\Client\Model\ProductType teamsIdBuilderConfigsNkProductTypesFkGet($id, $nk, $fk)

Find a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productTypes |

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesFkPut**
> \Swagger\Client\Model\ProductType teamsIdBuilderConfigsNkProductTypesFkPut($id, $nk, $fk, $data)

Update a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkProductTypesGet**
> \Swagger\Client\Model\ProductType[] teamsIdBuilderConfigsNkProductTypesGet($id, $nk, $filter)

Queries productTypes of TeamBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesPost**
> \Swagger\Client\Model\ProductType teamsIdBuilderConfigsNkProductTypesPost($id, $nk, $data)

Creates a new instance in productTypes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesRelFkDelete**
> teamsIdBuilderConfigsNkProductTypesRelFkDelete($id, $nk, $fk)

Remove the productTypes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $api_instance->teamsIdBuilderConfigsNkProductTypesRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productTypes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesRelFkHead**
> bool teamsIdBuilderConfigsNkProductTypesRelFkHead($id, $nk, $fk)

Check the existence of productTypes relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **fk** | **string**| Foreign key for productTypes |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsNkProductTypesRelFkPut**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamsIdBuilderConfigsNkProductTypesRelFkPut($id, $nk, $fk, $data)

Add a related item by id for productTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$fk = "fk_example"; // string | Foreign key for productTypes
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkProductTypesRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkProductTypesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
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

# **teamsIdBuilderConfigsNkTeamGet**
> \Swagger\Client\Model\Team teamsIdBuilderConfigsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for builderConfigs.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdBuilderConfigsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for builderConfigs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBuilderConfigsPost**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdBuilderConfigsPost($id, $data)

Creates a new instance in builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->teamsIdBuilderConfigsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBuilderConfigsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdDataSourceSoapsCountGet($id, $where)

Counts dataSourceSoaps of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdDataSourceSoapsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsFkDelete**
> teamsIdDataSourceSoapsFkDelete($id, $fk)

Delete a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps

try {
    $api_instance->teamsIdDataSourceSoapsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSourceSoaps |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsFkGet**
> \Swagger\Client\Model\DataSourceSoap teamsIdDataSourceSoapsFkGet($id, $fk)

Find a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps

try {
    $result = $api_instance->teamsIdDataSourceSoapsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSourceSoaps |

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsFkPut**
> \Swagger\Client\Model\DataSourceSoap teamsIdDataSourceSoapsFkPut($id, $fk, $data)

Update a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps
$data = new \Swagger\Client\Model\DataSourceSoap(); // \Swagger\Client\Model\DataSourceSoap | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSourceSoaps |
 **data** | [**\Swagger\Client\Model\DataSourceSoap**](../Model/\Swagger\Client\Model\DataSourceSoap.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsGet**
> \Swagger\Client\Model\DataSourceSoap[] teamsIdDataSourceSoapsGet($id, $filter)

Queries dataSourceSoaps of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap[]**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdDataSourceSoapsNkDynamicDatasCountGet($id, $nk, $where)

Counts dynamicDatas of DataSourceSoap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkDynamicDatasCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasDelete**
> teamsIdDataSourceSoapsNkDynamicDatasDelete($id, $nk)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.

try {
    $api_instance->teamsIdDataSourceSoapsNkDynamicDatasDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasFkDelete**
> teamsIdDataSourceSoapsNkDynamicDatasFkDelete($id, $nk, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->teamsIdDataSourceSoapsNkDynamicDatasFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData teamsIdDataSourceSoapsNkDynamicDatasFkGet($id, $nk, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkDynamicDatasFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData teamsIdDataSourceSoapsNkDynamicDatasFkPut($id, $nk, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkDynamicDatasFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **fk** | **string**| Foreign key for dynamicDatas |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] teamsIdDataSourceSoapsNkDynamicDatasGet($id, $nk, $filter)

Queries dynamicDatas of DataSourceSoap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkDynamicDatasGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkDynamicDatasPost**
> \Swagger\Client\Model\DynamicData teamsIdDataSourceSoapsNkDynamicDatasPost($id, $nk, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkDynamicDatasPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsNkTeamGet**
> \Swagger\Client\Model\Team teamsIdDataSourceSoapsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dataSourceSoaps.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dataSourceSoaps. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourceSoapsPost**
> \Swagger\Client\Model\DataSourceSoap teamsIdDataSourceSoapsPost($id, $data)

Creates a new instance in dataSourceSoaps of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\DataSourceSoap(); // \Swagger\Client\Model\DataSourceSoap | 

try {
    $result = $api_instance->teamsIdDataSourceSoapsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourceSoapsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\DataSourceSoap**](../Model/\Swagger\Client\Model\DataSourceSoap.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDelete**
> object teamsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamsIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasFkDelete**
> teamsIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->teamsIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData teamsIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->teamsIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData teamsIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamsIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dynamicDatas |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] teamsIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceMongoGet**
> \Swagger\Client\Model\DataSourceMongo teamsIdDynamicDatasNkDataSourceMongoGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceMongo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceMongoGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceMongoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceMsSqlGet**
> \Swagger\Client\Model\DataSourceMsSql teamsIdDynamicDatasNkDataSourceMsSqlGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceMsSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceMsSqlGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceMsSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceMySqlGet**
> \Swagger\Client\Model\DataSourceMySql teamsIdDynamicDatasNkDataSourceMySqlGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceMySql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceMySqlGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceMySqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceOracleGet**
> \Swagger\Client\Model\DataSourceOracle teamsIdDynamicDatasNkDataSourceOracleGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceOracle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceOracleGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceOracleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceOracle**](../Model/DataSourceOracle.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourcePostgreSqlGet**
> \Swagger\Client\Model\DataSourcePostgreSql teamsIdDynamicDatasNkDataSourcePostgreSqlGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourcePostgreSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourcePostgreSqlGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourcePostgreSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceRestGet**
> \Swagger\Client\Model\DataSourceRest teamsIdDynamicDatasNkDataSourceRestGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceRest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceRestGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceRestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDataSourceSoapGet**
> \Swagger\Client\Model\DataSourceSoap teamsIdDynamicDatasNkDataSourceSoapGet($id, $nk, $refresh)

Fetches belongsTo relation dataSourceSoap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDataSourceSoapGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDataSourceSoapGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdDynamicDatasNkDesignsCountGet($id, $nk, $where)

Counts designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdDynamicDatasNkDesignsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsFkDelete**
> teamsIdDynamicDatasNkDesignsFkDelete($id, $nk, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->teamsIdDynamicDatasNkDesignsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsFkGet**
> \Swagger\Client\Model\Design teamsIdDynamicDatasNkDesignsFkGet($id, $nk, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->teamsIdDynamicDatasNkDesignsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsFkPut**
> \Swagger\Client\Model\Design teamsIdDynamicDatasNkDesignsFkPut($id, $nk, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDesignsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Foreign key for designs |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsGet**
> \Swagger\Client\Model\Design[] teamsIdDynamicDatasNkDesignsGet($id, $nk, $filter)

Queries designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDesignsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkDesignsPost**
> \Swagger\Client\Model\Design teamsIdDynamicDatasNkDesignsPost($id, $nk, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkDesignsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdDynamicDatasNkRecordsCountGet($id, $nk, $where)

Count Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsDelete**
> object teamsIdDynamicDatasNkRecordsDelete($id, $nk, $where)

Delete all matching records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$where = "where_example"; // string | filter.where object

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsDelete($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **where** | **string**| filter.where object | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsFkDelete**
> object teamsIdDynamicDatasNkRecordsFkDelete($id, $nk, $fk)

Delete a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Model id

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsFkDelete($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Model id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsFkGet**
> object teamsIdDynamicDatasNkRecordsFkGet($id, $nk, $fk, $filter)

Find a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsFkGet($id, $nk, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut**
> object teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut($id, $nk, $fk, $propertyName, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Model id
$propertyName = "propertyName_example"; // string | Model property name
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut($id, $nk, $fk, $propertyName, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsFkPropertyNameUploadPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Model id |
 **propertyName** | **string**| Model property name |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsFkPut**
> object teamsIdDynamicDatasNkRecordsFkPut($id, $nk, $fk, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$fk = "fk_example"; // string | Model id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **fk** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsGet**
> object[] teamsIdDynamicDatasNkRecordsGet($id, $nk, $filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsMigratePost**
> object teamsIdDynamicDatasNkRecordsMigratePost($id, $nk, $data)

Request migration for Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsMigratePost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsMigratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)|  | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsPost**
> object teamsIdDynamicDatasNkRecordsPost($id, $nk, $data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkRecordsUploadCsvPost**
> object teamsIdDynamicDatasNkRecordsUploadCsvPost($id, $nk)

Upload CSV for this Dynamic Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.

try {
    $result = $api_instance->teamsIdDynamicDatasNkRecordsUploadCsvPost($id, $nk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkRecordsUploadCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasNkTeamGet**
> \Swagger\Client\Model\Team teamsIdDynamicDatasNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for dynamicDatas.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdDynamicDatasNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for dynamicDatas. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData teamsIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamsIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamsIdGet**
> \Swagger\Client\Model\Team teamsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamsIdImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersCountGet($id, $where)

Counts imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersDelete**
> teamsIdImageFoldersDelete($id)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdImageFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersFkDelete**
> teamsIdImageFoldersFkDelete($id, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamsIdImageFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersFkGet($id, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamsIdImageFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersFkPut($id, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdImageFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] teamsIdImageFoldersGet($id, $filter)

Queries imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersNkChildrenCountGet($id, $nk, $where)

Counts children of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersNkChildrenCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenFkDelete**
> teamsIdImageFoldersNkChildrenFkDelete($id, $nk, $fk)

Delete a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for children

try {
    $api_instance->teamsIdImageFoldersNkChildrenFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for children |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenFkGet**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersNkChildrenFkGet($id, $nk, $fk)

Find a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for children

try {
    $result = $api_instance->teamsIdImageFoldersNkChildrenFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for children |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenFkPut**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersNkChildrenFkPut($id, $nk, $fk, $data)

Update a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for children
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdImageFoldersNkChildrenFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for children |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenGet**
> \Swagger\Client\Model\ImageFolder[] teamsIdImageFoldersNkChildrenGet($id, $nk, $filter)

Queries children of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersNkChildrenGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenPost**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersNkChildrenPost($id, $nk, $data)

Creates a new instance in children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdImageFoldersNkChildrenPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersNkFolderMembersCountGet($id, $nk, $where)

Counts folderMembers of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersNkFolderMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersDelete**
> teamsIdImageFoldersNkFolderMembersDelete($id, $nk)

Deletes all folderMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.

try {
    $api_instance->teamsIdImageFoldersNkFolderMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersFkDelete**
> teamsIdImageFoldersNkFolderMembersFkDelete($id, $nk, $fk)

Delete a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for folderMembers

try {
    $api_instance->teamsIdImageFoldersNkFolderMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for folderMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersFkGet**
> \Swagger\Client\Model\ImageFolderMember teamsIdImageFoldersNkFolderMembersFkGet($id, $nk, $fk)

Find a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for folderMembers

try {
    $result = $api_instance->teamsIdImageFoldersNkFolderMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for folderMembers |

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersFkPut**
> \Swagger\Client\Model\ImageFolderMember teamsIdImageFoldersNkFolderMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for folderMembers
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->teamsIdImageFoldersNkFolderMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for folderMembers |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersGet**
> \Swagger\Client\Model\ImageFolderMember[] teamsIdImageFoldersNkFolderMembersGet($id, $nk, $filter)

Queries folderMembers of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersNkFolderMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember[]**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkFolderMembersPost**
> \Swagger\Client\Model\ImageFolderMember teamsIdImageFoldersNkFolderMembersPost($id, $nk, $data)

Creates a new instance in folderMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->teamsIdImageFoldersNkFolderMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkFolderMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersNkImagesCountGet($id, $nk, $where)

Counts images of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersNkImagesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesFkDelete**
> teamsIdImageFoldersNkImagesFkDelete($id, $nk, $fk)

Delete a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for images

try {
    $api_instance->teamsIdImageFoldersNkImagesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for images |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesFkGet**
> \Swagger\Client\Model\Image teamsIdImageFoldersNkImagesFkGet($id, $nk, $fk)

Find a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for images

try {
    $result = $api_instance->teamsIdImageFoldersNkImagesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for images |

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesFkPut**
> \Swagger\Client\Model\Image teamsIdImageFoldersNkImagesFkPut($id, $nk, $fk, $data)

Update a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for images
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamsIdImageFoldersNkImagesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for images |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesGet**
> \Swagger\Client\Model\Image[] teamsIdImageFoldersNkImagesGet($id, $nk, $filter)

Queries images of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersNkImagesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesPost**
> \Swagger\Client\Model\Image teamsIdImageFoldersNkImagesPost($id, $nk, $data)

Creates a new instance in images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamsIdImageFoldersNkImagesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersNkMembersCountGet($id, $nk, $where)

Counts members of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersDelete**
> teamsIdImageFoldersNkMembersDelete($id, $nk)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.

try {
    $api_instance->teamsIdImageFoldersNkMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersFkDelete**
> teamsIdImageFoldersNkMembersFkDelete($id, $nk, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdImageFoldersNkMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersFkGet**
> \Swagger\Client\Model\TeamMember teamsIdImageFoldersNkMembersFkGet($id, $nk, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersFkPut**
> \Swagger\Client\Model\TeamMember teamsIdImageFoldersNkMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersGet**
> \Swagger\Client\Model\TeamMember[] teamsIdImageFoldersNkMembersGet($id, $nk, $filter)

Queries members of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersPost**
> \Swagger\Client\Model\TeamMember teamsIdImageFoldersNkMembersPost($id, $nk, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersRelFkDelete**
> teamsIdImageFoldersNkMembersRelFkDelete($id, $nk, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdImageFoldersNkMembersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersRelFkHead**
> bool teamsIdImageFoldersNkMembersRelFkHead($id, $nk, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkMembersRelFkPut**
> \Swagger\Client\Model\ImageFolderMember teamsIdImageFoldersNkMembersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->teamsIdImageFoldersNkMembersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkParentGet**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersNkParentGet($id, $nk, $refresh)

Fetches belongsTo relation parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdImageFoldersNkParentGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkParentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImageFoldersNkPortalsCountGet($id, $nk, $where)

Counts portals of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsDelete**
> teamsIdImageFoldersNkPortalsDelete($id, $nk)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.

try {
    $api_instance->teamsIdImageFoldersNkPortalsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsFkDelete**
> teamsIdImageFoldersNkPortalsFkDelete($id, $nk, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdImageFoldersNkPortalsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsFkGet**
> \Swagger\Client\Model\Portal teamsIdImageFoldersNkPortalsFkGet($id, $nk, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsFkPut**
> \Swagger\Client\Model\Portal teamsIdImageFoldersNkPortalsFkPut($id, $nk, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsGet**
> \Swagger\Client\Model\Portal[] teamsIdImageFoldersNkPortalsGet($id, $nk, $filter)

Queries portals of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsPost**
> \Swagger\Client\Model\Portal teamsIdImageFoldersNkPortalsPost($id, $nk, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsRelFkDelete**
> teamsIdImageFoldersNkPortalsRelFkDelete($id, $nk, $fk)

Remove the portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdImageFoldersNkPortalsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsRelFkHead**
> bool teamsIdImageFoldersNkPortalsRelFkHead($id, $nk, $fk)

Check the existence of portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkPortalsRelFkPut**
> \Swagger\Client\Model\PortalImageFolder teamsIdImageFoldersNkPortalsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | 

try {
    $result = $api_instance->teamsIdImageFoldersNkPortalsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkPortalsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkTeamGet**
> \Swagger\Client\Model\Team teamsIdImageFoldersNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for imageFolders.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdImageFoldersNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for imageFolders. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersPost**
> \Swagger\Client\Model\ImageFolder teamsIdImageFoldersPost($id, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdImageFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdImagesCountGet($id, $where)

Counts images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdImagesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesDelete**
> teamsIdImagesDelete($id)

Deletes all images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdImagesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesFkDelete**
> teamsIdImagesFkDelete($id, $fk)

Delete a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for images

try {
    $api_instance->teamsIdImagesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for images |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesFkGet**
> \Swagger\Client\Model\Image teamsIdImagesFkGet($id, $fk)

Find a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for images

try {
    $result = $api_instance->teamsIdImagesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for images |

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesFkPut**
> \Swagger\Client\Model\Image teamsIdImagesFkPut($id, $fk, $data)

Update a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for images
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamsIdImagesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for images |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesGet**
> \Swagger\Client\Model\Image[] teamsIdImagesGet($id, $filter)

Queries images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdImagesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesNkFolderGet**
> \Swagger\Client\Model\ImageFolder teamsIdImagesNkFolderGet($id, $nk, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for images.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdImagesNkFolderGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesNkFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for images. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesNkTeamGet**
> \Swagger\Client\Model\Team teamsIdImagesNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for images.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdImagesNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for images. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImagesPost**
> \Swagger\Client\Model\Image teamsIdImagesPost($id, $data)

Creates a new instance in images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamsIdImagesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdInvitationTicketsFkDelete**
> object teamsIdInvitationTicketsFkDelete($id, $id2, $fk)

Delete InvitationTickets for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$id2 = "id_example"; // string | Team id
$fk = "fk_example"; // string | InvitationTicket id

try {
    $result = $api_instance->teamsIdInvitationTicketsFkDelete($id, $id2, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdInvitationTicketsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **id2** | **string**| Team id |
 **fk** | **string**| InvitationTicket id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdInvitationTicketsFkGet**
> \Swagger\Client\Model\InvitationTicket teamsIdInvitationTicketsFkGet($id, $id2, $fk, $filter)

Get InvitationTicket by Id for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$id2 = "id_example"; // string | Team id
$fk = "fk_example"; // string | InvitationTicket id
$filter = "filter_example"; // string | Only include changes that match this filter

try {
    $result = $api_instance->teamsIdInvitationTicketsFkGet($id, $id2, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdInvitationTicketsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **id2** | **string**| Team id |
 **fk** | **string**| InvitationTicket id |
 **filter** | **string**| Only include changes that match this filter | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdInvitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] teamsIdInvitationTicketsGet($id, $id2, $filter)

List InvitationTickets for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$id2 = "id_example"; // string | Team id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdInvitationTicketsGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdInvitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **id2** | **string**| Team id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdLogoPut**
> \Swagger\Client\Model\Team teamsIdLogoPut($id, $id2, $data)

Change logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$id2 = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Logo

try {
    $result = $api_instance->teamsIdLogoPut($id, $id2, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **id2** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Logo |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdMembersCountGet($id, $where)

Counts members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersDelete**
> teamsIdMembersDelete($id)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersFkDelete**
> teamsIdMembersFkDelete($id, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersFkGet**
> \Swagger\Client\Model\Customer teamsIdMembersFkGet($id, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersFkPut**
> \Swagger\Client\Model\Customer teamsIdMembersFkPut($id, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->teamsIdMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersGet**
> \Swagger\Client\Model\Customer[] teamsIdMembersGet($id, $filter)

Queries members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersPost**
> \Swagger\Client\Model\Customer teamsIdMembersPost($id, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->teamsIdMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersRelFkDelete**
> teamsIdMembersRelFkDelete($id, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdMembersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersRelFkHead**
> bool teamsIdMembersRelFkHead($id, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdMembersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdMembersRelFkPut**
> \Swagger\Client\Model\TeamMember teamsIdMembersRelFkPut($id, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdMembersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPatch**
> \Swagger\Client\Model\Team teamsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | An object of model property name/value pairs

try {
    $result = $api_instance->teamsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPermissionDelete**
> teamsIdPermissionDelete($id)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdPermissionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPermissionGet**
> \Swagger\Client\Model\TeamPermissionSet teamsIdPermissionGet($id, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdPermissionGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPermissionPost**
> \Swagger\Client\Model\TeamPermissionSet teamsIdPermissionPost($id, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->teamsIdPermissionPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPermissionPut**
> \Swagger\Client\Model\TeamPermissionSet teamsIdPermissionPut($id, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->teamsIdPermissionPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsCountGet($id, $where)

Counts portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsDelete**
> teamsIdPortalsDelete($id)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdPortalsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsFkDelete**
> teamsIdPortalsFkDelete($id, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdPortalsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsFkGet**
> \Swagger\Client\Model\Portal teamsIdPortalsFkGet($id, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdPortalsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsFkPut**
> \Swagger\Client\Model\Portal teamsIdPortalsFkPut($id, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdPortalsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsGet**
> \Swagger\Client\Model\Portal[] teamsIdPortalsGet($id, $filter)

Queries portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDefaultBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamsIdPortalsNkDefaultBuilderConfigGet($id, $nk, $refresh)

Fetches belongsTo relation defaultBuilderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdPortalsNkDefaultBuilderConfigGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDefaultBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkDesignFoldersCountGet($id, $nk, $where)

Counts designFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkDesignFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersDelete**
> teamsIdPortalsNkDesignFoldersDelete($id, $nk)

Deletes all designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkDesignFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersFkDelete**
> teamsIdPortalsNkDesignFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $api_instance->teamsIdPortalsNkDesignFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersFkGet**
> \Swagger\Client\Model\DesignFolder teamsIdPortalsNkDesignFoldersFkGet($id, $nk, $fk)

Find a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $result = $api_instance->teamsIdPortalsNkDesignFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designFolders |

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersFkPut**
> \Swagger\Client\Model\DesignFolder teamsIdPortalsNkDesignFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designFolders
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designFolders |
 **data** | [**\Swagger\Client\Model\DesignFolder**](../Model/\Swagger\Client\Model\DesignFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersGet**
> \Swagger\Client\Model\DesignFolder[] teamsIdPortalsNkDesignFoldersGet($id, $nk, $filter)

Queries designFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder[]**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignFoldersPost**
> \Swagger\Client\Model\DesignFolder teamsIdPortalsNkDesignFoldersPost($id, $nk, $data)

Creates a new instance in designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\DesignFolder**](../Model/\Swagger\Client\Model\DesignFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkDesignsCountGet($id, $nk, $where)

Counts designs of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkDesignsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsFkDelete**
> teamsIdPortalsNkDesignsFkDelete($id, $nk, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->teamsIdPortalsNkDesignsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsFkGet**
> \Swagger\Client\Model\Design teamsIdPortalsNkDesignsFkGet($id, $nk, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->teamsIdPortalsNkDesignsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsFkPut**
> \Swagger\Client\Model\Design teamsIdPortalsNkDesignsFkPut($id, $nk, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for designs |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsGet**
> \Swagger\Client\Model\Design[] teamsIdPortalsNkDesignsGet($id, $nk, $filter)

Queries designs of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsPost**
> \Swagger\Client\Model\Design teamsIdPortalsNkDesignsPost($id, $nk, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdPortalsNkDesignsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkImageFoldersCountGet($id, $nk, $where)

Counts imageFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersDelete**
> teamsIdPortalsNkImageFoldersDelete($id, $nk)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkImageFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersFkDelete**
> teamsIdPortalsNkImageFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamsIdPortalsNkImageFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder teamsIdPortalsNkImageFoldersFkGet($id, $nk, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder teamsIdPortalsNkImageFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] teamsIdPortalsNkImageFoldersGet($id, $nk, $filter)

Queries imageFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersPost**
> \Swagger\Client\Model\ImageFolder teamsIdPortalsNkImageFoldersPost($id, $nk, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersRelFkDelete**
> teamsIdPortalsNkImageFoldersRelFkDelete($id, $nk, $fk)

Remove the imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamsIdPortalsNkImageFoldersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersRelFkHead**
> bool teamsIdPortalsNkImageFoldersRelFkHead($id, $nk, $fk)

Check the existence of imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkImageFoldersRelFkPut**
> \Swagger\Client\Model\PortalImageFolder teamsIdPortalsNkImageFoldersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkImageFoldersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkImageFoldersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkMembersCountGet($id, $nk, $where)

Counts members of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersDelete**
> teamsIdPortalsNkMembersDelete($id, $nk)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersFkDelete**
> teamsIdPortalsNkMembersFkDelete($id, $nk, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdPortalsNkMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersFkGet**
> \Swagger\Client\Model\TeamMember teamsIdPortalsNkMembersFkGet($id, $nk, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdPortalsNkMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersFkPut**
> \Swagger\Client\Model\TeamMember teamsIdPortalsNkMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdPortalsNkMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersGet**
> \Swagger\Client\Model\TeamMember[] teamsIdPortalsNkMembersGet($id, $nk, $filter)

Queries members of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersPost**
> \Swagger\Client\Model\TeamMember teamsIdPortalsNkMembersPost($id, $nk, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdPortalsNkMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersRelFkDelete**
> teamsIdPortalsNkMembersRelFkDelete($id, $nk, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdPortalsNkMembersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersRelFkHead**
> bool teamsIdPortalsNkMembersRelFkHead($id, $nk, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdPortalsNkMembersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkMembersRelFkPut**
> \Swagger\Client\Model\PortalMember teamsIdPortalsNkMembersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->teamsIdPortalsNkMembersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPermissionDelete**
> teamsIdPortalsNkPermissionDelete($id, $nk)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkPermissionDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPermissionGet**
> \Swagger\Client\Model\PortalPermissionSet teamsIdPortalsNkPermissionGet($id, $nk, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdPortalsNkPermissionGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPermissionPost**
> \Swagger\Client\Model\PortalPermissionSet teamsIdPortalsNkPermissionPost($id, $nk, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\PortalPermissionSet(); // \Swagger\Client\Model\PortalPermissionSet | 

try {
    $result = $api_instance->teamsIdPortalsNkPermissionPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\PortalPermissionSet**](../Model/\Swagger\Client\Model\PortalPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPermissionPut**
> \Swagger\Client\Model\PortalPermissionSet teamsIdPortalsNkPermissionPut($id, $nk, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\PortalPermissionSet(); // \Swagger\Client\Model\PortalPermissionSet | 

try {
    $result = $api_instance->teamsIdPortalsNkPermissionPut($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\PortalPermissionSet**](../Model/\Swagger\Client\Model\PortalPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkPortalMembersCountGet($id, $nk, $where)

Counts portalMembers of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkPortalMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersDelete**
> teamsIdPortalsNkPortalMembersDelete($id, $nk)

Deletes all portalMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkPortalMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersFkDelete**
> teamsIdPortalsNkPortalMembersFkDelete($id, $nk, $fk)

Delete a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for portalMembers

try {
    $api_instance->teamsIdPortalsNkPortalMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for portalMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersFkGet**
> \Swagger\Client\Model\PortalMember teamsIdPortalsNkPortalMembersFkGet($id, $nk, $fk)

Find a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for portalMembers

try {
    $result = $api_instance->teamsIdPortalsNkPortalMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for portalMembers |

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersFkPut**
> \Swagger\Client\Model\PortalMember teamsIdPortalsNkPortalMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for portalMembers
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->teamsIdPortalsNkPortalMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for portalMembers |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersGet**
> \Swagger\Client\Model\PortalMember[] teamsIdPortalsNkPortalMembersGet($id, $nk, $filter)

Queries portalMembers of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkPortalMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember[]**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkPortalMembersPost**
> \Swagger\Client\Model\PortalMember teamsIdPortalsNkPortalMembersPost($id, $nk, $data)

Creates a new instance in portalMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->teamsIdPortalsNkPortalMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkPortalMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTeamGet**
> \Swagger\Client\Model\Team teamsIdPortalsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdPortalsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkTemplateFoldersCountGet($id, $nk, $where)

Counts templateFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkTemplateFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersDelete**
> teamsIdPortalsNkTemplateFoldersDelete($id, $nk)

Deletes all templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkTemplateFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersFkDelete**
> teamsIdPortalsNkTemplateFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $api_instance->teamsIdPortalsNkTemplateFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersFkGet**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdPortalsNkTemplateFoldersFkGet($id, $nk, $fk)

Find a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $result = $api_instance->teamsIdPortalsNkTemplateFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersFkPut**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdPortalsNkTemplateFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateFolders
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateFolders |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersGet**
> \Swagger\Client\Model\PortalTemplateFolder[] teamsIdPortalsNkTemplateFoldersGet($id, $nk, $filter)

Queries templateFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder[]**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateFoldersPost**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdPortalsNkTemplateFoldersPost($id, $nk, $data)

Creates a new instance in templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkTemplateRelsCountGet($id, $nk, $where)

Counts templateRels of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkTemplateRelsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsDelete**
> teamsIdPortalsNkTemplateRelsDelete($id, $nk)

Deletes all templateRels of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkTemplateRelsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsFkDelete**
> teamsIdPortalsNkTemplateRelsFkDelete($id, $nk, $fk)

Delete a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateRels

try {
    $api_instance->teamsIdPortalsNkTemplateRelsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateRels |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsFkGet**
> \Swagger\Client\Model\PortalTemplate teamsIdPortalsNkTemplateRelsFkGet($id, $nk, $fk)

Find a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateRels

try {
    $result = $api_instance->teamsIdPortalsNkTemplateRelsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateRels |

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsFkPut**
> \Swagger\Client\Model\PortalTemplate teamsIdPortalsNkTemplateRelsFkPut($id, $nk, $fk, $data)

Update a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templateRels
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateRelsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templateRels |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsGet**
> \Swagger\Client\Model\PortalTemplate[] teamsIdPortalsNkTemplateRelsGet($id, $nk, $filter)

Queries templateRels of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateRelsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate[]**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplateRelsPost**
> \Swagger\Client\Model\PortalTemplate teamsIdPortalsNkTemplateRelsPost($id, $nk, $data)

Creates a new instance in templateRels of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplateRelsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplateRelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdPortalsNkTemplatesCountGet($id, $nk, $where)

Counts templates of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesDelete**
> teamsIdPortalsNkTemplatesDelete($id, $nk)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.

try {
    $api_instance->teamsIdPortalsNkTemplatesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesFkDelete**
> teamsIdPortalsNkTemplatesFkDelete($id, $nk, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamsIdPortalsNkTemplatesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesFkGet**
> \Swagger\Client\Model\Template teamsIdPortalsNkTemplatesFkGet($id, $nk, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesFkPut**
> \Swagger\Client\Model\Template teamsIdPortalsNkTemplatesFkPut($id, $nk, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesGet**
> \Swagger\Client\Model\Template[] teamsIdPortalsNkTemplatesGet($id, $nk, $filter)

Queries templates of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesPost**
> \Swagger\Client\Model\Template teamsIdPortalsNkTemplatesPost($id, $nk, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesRelFkDelete**
> teamsIdPortalsNkTemplatesRelFkDelete($id, $nk, $fk)

Remove the templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamsIdPortalsNkTemplatesRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesRelFkHead**
> bool teamsIdPortalsNkTemplatesRelFkHead($id, $nk, $fk)

Check the existence of templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkTemplatesRelFkPut**
> \Swagger\Client\Model\PortalTemplate teamsIdPortalsNkTemplatesRelFkPut($id, $nk, $fk, $data)

Add a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for portals.
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->teamsIdPortalsNkTemplatesRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkTemplatesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for portals. |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsPost**
> \Swagger\Client\Model\Portal teamsIdPortalsPost($id, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdPortalsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdProductMaterialsCountGet($id, $where)

Counts productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdProductMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsDelete**
> teamsIdProductMaterialsDelete($id)

Deletes all productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdProductMaterialsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsFkDelete**
> teamsIdProductMaterialsFkDelete($id, $fk)

Delete a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $api_instance->teamsIdProductMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsFkGet**
> \Swagger\Client\Model\ProductMaterial teamsIdProductMaterialsFkGet($id, $fk)

Find a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $result = $api_instance->teamsIdProductMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsFkPut**
> \Swagger\Client\Model\ProductMaterial teamsIdProductMaterialsFkPut($id, $fk, $data)

Update a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productMaterials
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamsIdProductMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productMaterials |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] teamsIdProductMaterialsGet($id, $filter)

Queries productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdProductMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsNkTeamGet**
> \Swagger\Client\Model\Team teamsIdProductMaterialsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for productMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdProductMaterialsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for productMaterials. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductMaterialsPost**
> \Swagger\Client\Model\ProductMaterial teamsIdProductMaterialsPost($id, $data)

Creates a new instance in productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamsIdProductMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesAvailableGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] teamsIdProductPdfColorProfilesAvailableGet($id, $filter)

Find all available PdfColorProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesAvailableGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesAvailableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdProductPdfColorProfilesCountGet($id, $where)

Counts productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesDelete**
> teamsIdProductPdfColorProfilesDelete($id)

Deletes all productPdfColorProfiles of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdProductPdfColorProfilesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesFkDelete**
> teamsIdProductPdfColorProfilesFkDelete($id, $fk)

Delete a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $api_instance->teamsIdProductPdfColorProfilesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesFkGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamsIdProductPdfColorProfilesFkGet($id, $fk)

Find a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesFkPut**
> \Swagger\Client\Model\ProductPdfColorProfile teamsIdProductPdfColorProfilesFkPut($id, $fk, $data)

Update a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | 

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productPdfColorProfiles |
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] teamsIdProductPdfColorProfilesGet($id, $filter)

Queries productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductPdfColorProfilesUploadPost**
> \Swagger\Client\Model\ProductPdfColorProfile teamsIdProductPdfColorProfilesUploadPost($id)

Upload ICC PDF Color Profile for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $result = $api_instance->teamsIdProductPdfColorProfilesUploadPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductPdfColorProfilesUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdProductSizeMaterialsCountGet($id, $where)

Counts productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdProductSizeMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsDelete**
> teamsIdProductSizeMaterialsDelete($id)

Deletes all productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdProductSizeMaterialsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsFkDelete**
> teamsIdProductSizeMaterialsFkDelete($id, $fk)

Delete a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamsIdProductSizeMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdProductSizeMaterialsFkGet($id, $fk)

Find a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamsIdProductSizeMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdProductSizeMaterialsFkPut($id, $fk, $data)

Update a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
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

# **teamsIdProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamsIdProductSizeMaterialsGet($id, $filter)

Queries productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdProductSizeMaterialsNkMaterialGet**
> \Swagger\Client\Model\ProductMaterial teamsIdProductSizeMaterialsNkMaterialGet($id, $nk, $refresh)

Fetches belongsTo relation material.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsNkMaterialGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsNkMaterialGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
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

# **teamsIdProductSizeMaterialsNkPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamsIdProductSizeMaterialsNkPdfColorProfileGet($id, $nk, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsNkPdfColorProfileGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsNkPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
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

# **teamsIdProductSizeMaterialsNkSizeGet**
> \Swagger\Client\Model\ProductSize teamsIdProductSizeMaterialsNkSizeGet($id, $nk, $refresh)

Fetches belongsTo relation size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsNkSizeGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsNkSizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
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

# **teamsIdProductSizeMaterialsNkTeamGet**
> \Swagger\Client\Model\Team teamsIdProductSizeMaterialsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for productSizeMaterials.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
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

# **teamsIdProductSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial teamsIdProductSizeMaterialsPost($id, $data)

Creates a new instance in productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamsIdProductSizeMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPut**
> \Swagger\Client\Model\Team teamsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdReplacePost**
> \Swagger\Client\Model\Team teamsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceMongoGet**
> \Swagger\Client\Model\DataSourceMongo teamsIdTeamDataDataSourceMongoGet($id, $refresh)

Fetches belongsTo relation dataSourceMongo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceMongoGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceMongoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceMsSqlGet**
> \Swagger\Client\Model\DataSourceMsSql teamsIdTeamDataDataSourceMsSqlGet($id, $refresh)

Fetches belongsTo relation dataSourceMsSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceMsSqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceMsSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceMySqlGet**
> \Swagger\Client\Model\DataSourceMySql teamsIdTeamDataDataSourceMySqlGet($id, $refresh)

Fetches belongsTo relation dataSourceMySql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceMySqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceMySqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceOracleGet**
> \Swagger\Client\Model\DataSourceOracle teamsIdTeamDataDataSourceOracleGet($id, $refresh)

Fetches belongsTo relation dataSourceOracle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceOracleGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceOracleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceOracle**](../Model/DataSourceOracle.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourcePostgreSqlGet**
> \Swagger\Client\Model\DataSourcePostgreSql teamsIdTeamDataDataSourcePostgreSqlGet($id, $refresh)

Fetches belongsTo relation dataSourcePostgreSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourcePostgreSqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourcePostgreSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceRestGet**
> \Swagger\Client\Model\DataSourceRest teamsIdTeamDataDataSourceRestGet($id, $refresh)

Fetches belongsTo relation dataSourceRest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceRestGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceRestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDataSourceSoapGet**
> \Swagger\Client\Model\DataSourceSoap teamsIdTeamDataDataSourceSoapGet($id, $refresh)

Fetches belongsTo relation dataSourceSoap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataDataSourceSoapGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDataSourceSoapGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTeamDataDesignsCountGet($id, $where)

Counts designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTeamDataDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsFkDelete**
> teamsIdTeamDataDesignsFkDelete($id, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->teamsIdTeamDataDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsFkGet**
> \Swagger\Client\Model\Design teamsIdTeamDataDesignsFkGet($id, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->teamsIdTeamDataDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsFkPut**
> \Swagger\Client\Model\Design teamsIdTeamDataDesignsFkPut($id, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdTeamDataDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for designs |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsGet**
> \Swagger\Client\Model\Design[] teamsIdTeamDataDesignsGet($id, $filter)

Queries designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTeamDataDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataDesignsPost**
> \Swagger\Client\Model\Design teamsIdTeamDataDesignsPost($id, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdTeamDataDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataGet**
> \Swagger\Client\Model\DynamicData teamsIdTeamDataGet($id, $refresh)

Fetches belongsTo relation teamData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTeamDataRecordsCountGet($id, $where)

Count Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTeamDataRecordsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsDelete**
> object teamsIdTeamDataRecordsDelete($id, $where)

Delete all matching records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | filter.where object

try {
    $result = $api_instance->teamsIdTeamDataRecordsDelete($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| filter.where object | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsFkDelete**
> object teamsIdTeamDataRecordsFkDelete($id, $fk)

Delete a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Model id

try {
    $result = $api_instance->teamsIdTeamDataRecordsFkDelete($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Model id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsFkGet**
> object teamsIdTeamDataRecordsFkGet($id, $fk, $filter)

Find a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdTeamDataRecordsFkGet($id, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsFkPropertyNameUploadPut**
> object teamsIdTeamDataRecordsFkPropertyNameUploadPut($id, $fk, $propertyName, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Model id
$propertyName = "propertyName_example"; // string | Model property name
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdTeamDataRecordsFkPropertyNameUploadPut($id, $fk, $propertyName, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsFkPropertyNameUploadPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Model id |
 **propertyName** | **string**| Model property name |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsFkPut**
> object teamsIdTeamDataRecordsFkPut($id, $fk, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Model id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdTeamDataRecordsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsGet**
> object[] teamsIdTeamDataRecordsGet($id, $filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdTeamDataRecordsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsMigratePost**
> object teamsIdTeamDataRecordsMigratePost($id, $data)

Request migration for Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | 

try {
    $result = $api_instance->teamsIdTeamDataRecordsMigratePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsMigratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)|  | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsPost**
> object teamsIdTeamDataRecordsPost($id, $data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsIdTeamDataRecordsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataRecordsUploadCsvPost**
> object teamsIdTeamDataRecordsUploadCsvPost($id)

Upload CSV for this Dynamic Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $result = $api_instance->teamsIdTeamDataRecordsUploadCsvPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataRecordsUploadCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamDataTeamGet**
> \Swagger\Client\Model\Team teamsIdTeamDataTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTeamDataTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamDataTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTeamMembersCountGet($id, $where)

Counts teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTeamMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersDelete**
> teamsIdTeamMembersDelete($id)

Deletes all teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdTeamMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersFkDelete**
> teamsIdTeamMembersFkDelete($id, $fk)

Delete a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $api_instance->teamsIdTeamMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersFkGet**
> \Swagger\Client\Model\TeamMember teamsIdTeamMembersFkGet($id, $fk)

Find a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $result = $api_instance->teamsIdTeamMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersFkPut**
> \Swagger\Client\Model\TeamMember teamsIdTeamMembersFkPut($id, $fk, $data)

Update a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for teamMembers
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdTeamMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for teamMembers |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersGet**
> \Swagger\Client\Model\TeamMember[] teamsIdTeamMembersGet($id, $filter)

Queries teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTeamMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersMapKeysGet**
> object[] teamsIdTeamMembersMapKeysGet($id, $data)

Map teamMembers emails to teamMembers keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | TeamMember(s) email

try {
    $result = $api_instance->teamsIdTeamMembersMapKeysGet($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersMapKeysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| TeamMember(s) email |

### Return type

**object[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTeamMembersPost**
> \Swagger\Client\Model\TeamMember teamsIdTeamMembersPost($id, $data)

Creates a new instance in teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdTeamMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTeamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplateFoldersCountGet($id, $where)

Counts templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplateFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersDelete**
> teamsIdTemplateFoldersDelete($id)

Deletes all templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdTemplateFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersFkDelete**
> teamsIdTemplateFoldersFkDelete($id, $fk)

Delete a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $api_instance->teamsIdTemplateFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersFkGet**
> \Swagger\Client\Model\TeamTemplateFolder teamsIdTemplateFoldersFkGet($id, $fk)

Find a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $result = $api_instance->teamsIdTemplateFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersFkPut**
> \Swagger\Client\Model\TeamTemplateFolder teamsIdTemplateFoldersFkPut($id, $fk, $data)

Update a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templateFolders
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->teamsIdTemplateFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templateFolders |
 **data** | [**\Swagger\Client\Model\TeamTemplateFolder**](../Model/\Swagger\Client\Model\TeamTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersGet**
> \Swagger\Client\Model\TeamTemplateFolder[] teamsIdTemplateFoldersGet($id, $filter)

Queries templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplateFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder[]**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplateFoldersPost**
> \Swagger\Client\Model\TeamTemplateFolder teamsIdTemplateFoldersPost($id, $data)

Creates a new instance in templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->teamsIdTemplateFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\TeamTemplateFolder**](../Model/\Swagger\Client\Model\TeamTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesCountGet($id, $where)

Counts templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesDelete**
> teamsIdTemplatesDelete($id)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesFkDelete**
> teamsIdTemplatesFkDelete($id, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamsIdTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesFkGet**
> \Swagger\Client\Model\Template teamsIdTemplatesFkGet($id, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamsIdTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesFkPut**
> \Swagger\Client\Model\Template teamsIdTemplatesFkPut($id, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamsIdTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesGet**
> \Swagger\Client\Model\Template[] teamsIdTemplatesGet($id, $filter)

Queries templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkDesignsCountGet($id, $nk, $where)

Counts designs of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkDesignsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsFkDelete**
> teamsIdTemplatesNkDesignsFkDelete($id, $nk, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->teamsIdTemplatesNkDesignsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsFkGet**
> \Swagger\Client\Model\Design teamsIdTemplatesNkDesignsFkGet($id, $nk, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->teamsIdTemplatesNkDesignsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsFkPut**
> \Swagger\Client\Model\Design teamsIdTemplatesNkDesignsFkPut($id, $nk, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdTemplatesNkDesignsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for designs |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsGet**
> \Swagger\Client\Model\Design[] teamsIdTemplatesNkDesignsGet($id, $nk, $filter)

Queries designs of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkDesignsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsPost**
> \Swagger\Client\Model\Design teamsIdTemplatesNkDesignsPost($id, $nk, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamsIdTemplatesNkDesignsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkMembersCountGet($id, $nk, $where)

Counts members of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersDelete**
> teamsIdTemplatesNkMembersDelete($id, $nk)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersFkDelete**
> teamsIdTemplatesNkMembersFkDelete($id, $nk, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdTemplatesNkMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersFkGet**
> \Swagger\Client\Model\TeamMember teamsIdTemplatesNkMembersFkGet($id, $nk, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdTemplatesNkMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersFkPut**
> \Swagger\Client\Model\TeamMember teamsIdTemplatesNkMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdTemplatesNkMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersGet**
> \Swagger\Client\Model\TeamMember[] teamsIdTemplatesNkMembersGet($id, $nk, $filter)

Queries members of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersPost**
> \Swagger\Client\Model\TeamMember teamsIdTemplatesNkMembersPost($id, $nk, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamsIdTemplatesNkMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersRelFkDelete**
> teamsIdTemplatesNkMembersRelFkDelete($id, $nk, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamsIdTemplatesNkMembersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersRelFkHead**
> bool teamsIdTemplatesNkMembersRelFkHead($id, $nk, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamsIdTemplatesNkMembersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkMembersRelFkPut**
> \Swagger\Client\Model\TemplateMember teamsIdTemplatesNkMembersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TemplateMember(); // \Swagger\Client\Model\TemplateMember | 

try {
    $result = $api_instance->teamsIdTemplatesNkMembersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TemplateMember**](../Model/\Swagger\Client\Model\TemplateMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMember**](../Model/TemplateMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPermissionDelete**
> teamsIdTemplatesNkPermissionDelete($id, $nk)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkPermissionDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPermissionGet**
> \Swagger\Client\Model\TemplatePermissionSet teamsIdTemplatesNkPermissionGet($id, $nk, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTemplatesNkPermissionGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPermissionPost**
> \Swagger\Client\Model\TemplatePermissionSet teamsIdTemplatesNkPermissionPost($id, $nk, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | 

try {
    $result = $api_instance->teamsIdTemplatesNkPermissionPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPermissionPut**
> \Swagger\Client\Model\TemplatePermissionSet teamsIdTemplatesNkPermissionPut($id, $nk, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | 

try {
    $result = $api_instance->teamsIdTemplatesNkPermissionPut($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkPortalFoldersCountGet($id, $nk, $where)

Counts portalFolders of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersDelete**
> teamsIdTemplatesNkPortalFoldersDelete($id, $nk)

Deletes all portalFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkPortalFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersFkDelete**
> teamsIdTemplatesNkPortalFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for portalFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders

try {
    $api_instance->teamsIdTemplatesNkPortalFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersFkGet**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdTemplatesNkPortalFoldersFkGet($id, $nk, $fk)

Find a related item by id for portalFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersFkPut**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdTemplatesNkPortalFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for portalFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersGet**
> \Swagger\Client\Model\PortalTemplateFolder[] teamsIdTemplatesNkPortalFoldersGet($id, $nk, $filter)

Queries portalFolders of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder[]**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersPost**
> \Swagger\Client\Model\PortalTemplateFolder teamsIdTemplatesNkPortalFoldersPost($id, $nk, $data)

Creates a new instance in portalFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersRelFkDelete**
> teamsIdTemplatesNkPortalFoldersRelFkDelete($id, $nk, $fk)

Remove the portalFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders

try {
    $api_instance->teamsIdTemplatesNkPortalFoldersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersRelFkHead**
> bool teamsIdTemplatesNkPortalFoldersRelFkHead($id, $nk, $fk)

Check the existence of portalFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalFoldersRelFkPut**
> \Swagger\Client\Model\PortalTemplate teamsIdTemplatesNkPortalFoldersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for portalFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portalFolders
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalFoldersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalFoldersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portalFolders |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkPortalsCountGet($id, $nk, $where)

Counts portals of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsDelete**
> teamsIdTemplatesNkPortalsDelete($id, $nk)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkPortalsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsFkDelete**
> teamsIdTemplatesNkPortalsFkDelete($id, $nk, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdTemplatesNkPortalsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsFkGet**
> \Swagger\Client\Model\Portal teamsIdTemplatesNkPortalsFkGet($id, $nk, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsFkPut**
> \Swagger\Client\Model\Portal teamsIdTemplatesNkPortalsFkPut($id, $nk, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsGet**
> \Swagger\Client\Model\Portal[] teamsIdTemplatesNkPortalsGet($id, $nk, $filter)

Queries portals of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsPost**
> \Swagger\Client\Model\Portal teamsIdTemplatesNkPortalsPost($id, $nk, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsRelFkDelete**
> teamsIdTemplatesNkPortalsRelFkDelete($id, $nk, $fk)

Remove the portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamsIdTemplatesNkPortalsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsRelFkHead**
> bool teamsIdTemplatesNkPortalsRelFkHead($id, $nk, $fk)

Check the existence of portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkPortalsRelFkPut**
> \Swagger\Client\Model\PortalTemplate teamsIdTemplatesNkPortalsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->teamsIdTemplatesNkPortalsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkPortalsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkTagsCountGet($id, $nk, $where)

Counts tags of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkTagsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsDelete**
> teamsIdTemplatesNkTagsDelete($id, $nk)

Deletes all tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkTagsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsFkDelete**
> teamsIdTemplatesNkTagsFkDelete($id, $nk, $fk)

Delete a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->teamsIdTemplatesNkTagsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsFkGet**
> \Swagger\Client\Model\Tag teamsIdTemplatesNkTagsFkGet($id, $nk, $fk)

Find a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->teamsIdTemplatesNkTagsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsFkPut**
> \Swagger\Client\Model\Tag teamsIdTemplatesNkTagsFkPut($id, $nk, $fk, $data)

Update a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->teamsIdTemplatesNkTagsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsGet**
> \Swagger\Client\Model\Tag[] teamsIdTemplatesNkTagsGet($id, $nk, $filter)

Queries tags of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkTagsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsPost**
> \Swagger\Client\Model\Tag teamsIdTemplatesNkTagsPost($id, $nk, $data)

Creates a new instance in tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->teamsIdTemplatesNkTagsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsRelFkDelete**
> teamsIdTemplatesNkTagsRelFkDelete($id, $nk, $fk)

Remove the tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->teamsIdTemplatesNkTagsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsRelFkHead**
> bool teamsIdTemplatesNkTagsRelFkHead($id, $nk, $fk)

Check the existence of tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->teamsIdTemplatesNkTagsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTagsRelFkPut**
> \Swagger\Client\Model\TemplateTag teamsIdTemplatesNkTagsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | 

try {
    $result = $api_instance->teamsIdTemplatesNkTagsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTagsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTeamFolderGet**
> \Swagger\Client\Model\TeamTemplateFolder teamsIdTemplatesNkTeamFolderGet($id, $nk, $refresh)

Fetches belongsTo relation teamFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTemplatesNkTeamFolderGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTeamFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTeamGet**
> \Swagger\Client\Model\Team teamsIdTemplatesNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTemplatesNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdTemplatesNkTemplateMembersCountGet($id, $nk, $where)

Counts templateMembers of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdTemplatesNkTemplateMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersDelete**
> teamsIdTemplatesNkTemplateMembersDelete($id, $nk)

Deletes all templateMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.

try {
    $api_instance->teamsIdTemplatesNkTemplateMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersFkDelete**
> teamsIdTemplatesNkTemplateMembersFkDelete($id, $nk, $fk)

Delete a related item by id for templateMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for templateMembers

try {
    $api_instance->teamsIdTemplatesNkTemplateMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for templateMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersFkGet**
> \Swagger\Client\Model\TemplateMember teamsIdTemplatesNkTemplateMembersFkGet($id, $nk, $fk)

Find a related item by id for templateMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for templateMembers

try {
    $result = $api_instance->teamsIdTemplatesNkTemplateMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for templateMembers |

### Return type

[**\Swagger\Client\Model\TemplateMember**](../Model/TemplateMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersFkPut**
> \Swagger\Client\Model\TemplateMember teamsIdTemplatesNkTemplateMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for templateMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$fk = "fk_example"; // string | Foreign key for templateMembers
$data = new \Swagger\Client\Model\TemplateMember(); // \Swagger\Client\Model\TemplateMember | 

try {
    $result = $api_instance->teamsIdTemplatesNkTemplateMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **fk** | **string**| Foreign key for templateMembers |
 **data** | [**\Swagger\Client\Model\TemplateMember**](../Model/\Swagger\Client\Model\TemplateMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMember**](../Model/TemplateMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersGet**
> \Swagger\Client\Model\TemplateMember[] teamsIdTemplatesNkTemplateMembersGet($id, $nk, $filter)

Queries templateMembers of Template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdTemplatesNkTemplateMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMember[]**](../Model/TemplateMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkTemplateMembersPost**
> \Swagger\Client\Model\TemplateMember teamsIdTemplatesNkTemplateMembersPost($id, $nk, $data)

Creates a new instance in templateMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$data = new \Swagger\Client\Model\TemplateMember(); // \Swagger\Client\Model\TemplateMember | 

try {
    $result = $api_instance->teamsIdTemplatesNkTemplateMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkTemplateMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **data** | [**\Swagger\Client\Model\TemplateMember**](../Model/\Swagger\Client\Model\TemplateMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMember**](../Model/TemplateMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkUploaderGet**
> \Swagger\Client\Model\TeamMember teamsIdTemplatesNkUploaderGet($id, $nk, $refresh)

Fetches belongsTo relation uploader.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTemplatesNkUploaderGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkUploaderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkWorkflowGet**
> \Swagger\Client\Model\Workflow teamsIdTemplatesNkWorkflowGet($id, $nk, $refresh)

Fetches belongsTo relation workflow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$nk = "nk_example"; // string | Foreign key for templates.
$refresh = true; // bool | 

try {
    $result = $api_instance->teamsIdTemplatesNkWorkflowGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkWorkflowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **nk** | **string**| Foreign key for templates. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesPost**
> \Swagger\Client\Model\Template teamsIdTemplatesPost($id, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamsIdTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesWithDesignsGet**
> \Swagger\Client\Model\Template[] teamsIdTemplatesWithDesignsGet($id, $id2, $filter)

List Templates with Designs for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$id2 = "id_example"; // string | Team id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamsIdTemplatesWithDesignsGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesWithDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **id2** | **string**| Team id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdWorkflowsCountGet($id, $where)

Counts workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamsIdWorkflowsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsDelete**
> teamsIdWorkflowsDelete($id)

Deletes all workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id

try {
    $api_instance->teamsIdWorkflowsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsFkDelete**
> teamsIdWorkflowsFkDelete($id, $fk)

Delete a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $api_instance->teamsIdWorkflowsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for workflows |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsFkGet**
> \Swagger\Client\Model\Workflow teamsIdWorkflowsFkGet($id, $fk)

Find a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $result = $api_instance->teamsIdWorkflowsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for workflows |

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsFkPut**
> \Swagger\Client\Model\Workflow teamsIdWorkflowsFkPut($id, $fk, $data)

Update a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for workflows
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamsIdWorkflowsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for workflows |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsGet**
> \Swagger\Client\Model\Workflow[] teamsIdWorkflowsGet($id, $filter)

Queries workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamsIdWorkflowsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdWorkflowsPost**
> \Swagger\Client\Model\Workflow teamsIdWorkflowsPost($id, $data)

Creates a new instance in workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamsIdWorkflowsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdWorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsNameNameExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamsNameNameExistsGet($name)

Define whether team exists or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$name = "name_example"; // string | Team name

try {
    $result = $api_instance->teamsNameNameExistsGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsNameNameExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Team name |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsPost**
> \Swagger\Client\Model\Team teamsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->teamsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsSubdomainSubdomainExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamsSubdomainSubdomainExistsGet($subdomain)

Define whether team exists or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$subdomain = "subdomain_example"; // string | Team subdomain

try {
    $result = $api_instance->teamsSubdomainSubdomainExistsGet($subdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsSubdomainSubdomainExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subdomain** | **string**| Team subdomain |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

