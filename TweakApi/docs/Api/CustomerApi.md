# Tweak\Api\CustomerApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersChangePasswordPost**](CustomerApi.md#customersChangePasswordPost) | **POST** /Customers/change-password | Change a user&#39;s password.
[**customersChangeStreamGet**](CustomerApi.md#customersChangeStreamGet) | **GET** /Customers/change-stream | Create a change stream.
[**customersChangeStreamPost**](CustomerApi.md#customersChangeStreamPost) | **POST** /Customers/change-stream | Create a change stream.
[**customersConfirmGet**](CustomerApi.md#customersConfirmGet) | **GET** /Customers/confirm | Confirm a user registration with identity verification token.
[**customersCountGet**](CustomerApi.md#customersCountGet) | **GET** /Customers/count | Count instances of the model matched by where from the data source.
[**customersEmailEmailExistsGet**](CustomerApi.md#customersEmailEmailExistsGet) | **GET** /Customers/email/{email}/exists | Define whether customer exists or not
[**customersFindOneGet**](CustomerApi.md#customersFindOneGet) | **GET** /Customers/findOne | Find first instance of the model matched by filter from the data source.
[**customersGet**](CustomerApi.md#customersGet) | **GET** /Customers | Find all instances of the model matched by filter from the data source.
[**customersIdAccessTokensCountGet**](CustomerApi.md#customersIdAccessTokensCountGet) | **GET** /Customers/{id}/accessTokens/count | Counts accessTokens of Customer.
[**customersIdAccessTokensDelete**](CustomerApi.md#customersIdAccessTokensDelete) | **DELETE** /Customers/{id}/accessTokens | Deletes all accessTokens of this model.
[**customersIdAccessTokensFkDelete**](CustomerApi.md#customersIdAccessTokensFkDelete) | **DELETE** /Customers/{id}/accessTokens/{fk} | Delete a related item by id for accessTokens.
[**customersIdAccessTokensFkGet**](CustomerApi.md#customersIdAccessTokensFkGet) | **GET** /Customers/{id}/accessTokens/{fk} | Find a related item by id for accessTokens.
[**customersIdAccessTokensFkPut**](CustomerApi.md#customersIdAccessTokensFkPut) | **PUT** /Customers/{id}/accessTokens/{fk} | Update a related item by id for accessTokens.
[**customersIdAccessTokensGet**](CustomerApi.md#customersIdAccessTokensGet) | **GET** /Customers/{id}/accessTokens | Queries accessTokens of Customer.
[**customersIdAccessTokensPost**](CustomerApi.md#customersIdAccessTokensPost) | **POST** /Customers/{id}/accessTokens | Creates a new instance in accessTokens of this model.
[**customersIdActiveGet**](CustomerApi.md#customersIdActiveGet) | **GET** /Customers/{id}/active | Define whether customer is active or not
[**customersIdDelete**](CustomerApi.md#customersIdDelete) | **DELETE** /Customers/{id} | Delete a model instance by {{id}} from the data source.
[**customersIdExistsGet**](CustomerApi.md#customersIdExistsGet) | **GET** /Customers/{id}/exists | Check whether a model instance exists in the data source.
[**customersIdGet**](CustomerApi.md#customersIdGet) | **GET** /Customers/{id} | Find a model instance by {{id}} from the data source.
[**customersIdHead**](CustomerApi.md#customersIdHead) | **HEAD** /Customers/{id} | Check whether a model instance exists in the data source.
[**customersIdInvitationTicketsCountGet**](CustomerApi.md#customersIdInvitationTicketsCountGet) | **GET** /Customers/{id}/invitationTickets/count | Counts invitationTickets of Customer.
[**customersIdInvitationTicketsDelete**](CustomerApi.md#customersIdInvitationTicketsDelete) | **DELETE** /Customers/{id}/invitationTickets | Deletes all invitationTickets of this model.
[**customersIdInvitationTicketsFkDelete**](CustomerApi.md#customersIdInvitationTicketsFkDelete) | **DELETE** /Customers/{id}/invitationTickets/{fk} | Delete a related item by id for invitationTickets.
[**customersIdInvitationTicketsFkGet**](CustomerApi.md#customersIdInvitationTicketsFkGet) | **GET** /Customers/{id}/invitationTickets/{fk} | Find a related item by id for invitationTickets.
[**customersIdInvitationTicketsFkPut**](CustomerApi.md#customersIdInvitationTicketsFkPut) | **PUT** /Customers/{id}/invitationTickets/{fk} | Update a related item by id for invitationTickets.
[**customersIdInvitationTicketsGet**](CustomerApi.md#customersIdInvitationTicketsGet) | **GET** /Customers/{id}/invitationTickets | Queries invitationTickets of Customer.
[**customersIdInvitationTicketsPost**](CustomerApi.md#customersIdInvitationTicketsPost) | **POST** /Customers/{id}/invitationTickets | Creates a new instance in invitationTickets of this model.
[**customersIdPatch**](CustomerApi.md#customersIdPatch) | **PATCH** /Customers/{id} | Patch attributes for a model instance and persist it into the data source.
[**customersIdPermissionDelete**](CustomerApi.md#customersIdPermissionDelete) | **DELETE** /Customers/{id}/permission | Deletes permission of this model.
[**customersIdPermissionGet**](CustomerApi.md#customersIdPermissionGet) | **GET** /Customers/{id}/permission | Fetches hasOne relation permission.
[**customersIdPermissionPost**](CustomerApi.md#customersIdPermissionPost) | **POST** /Customers/{id}/permission | Creates a new instance in permission of this model.
[**customersIdPermissionPut**](CustomerApi.md#customersIdPermissionPut) | **PUT** /Customers/{id}/permission | Update permission of this model.
[**customersIdProfilePicturePut**](CustomerApi.md#customersIdProfilePicturePut) | **PUT** /Customers/{id}/profilePicture | Change profile picture
[**customersIdPut**](CustomerApi.md#customersIdPut) | **PUT** /Customers/{id} | Replace attributes for a model instance and persist it into the data source.
[**customersIdRegisterTeamPost**](CustomerApi.md#customersIdRegisterTeamPost) | **POST** /Customers/{id}/register/team | Register team and assign it to the customer
[**customersIdReplacePost**](CustomerApi.md#customersIdReplacePost) | **POST** /Customers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**customersIdTeamsCountGet**](CustomerApi.md#customersIdTeamsCountGet) | **GET** /Customers/{id}/teams/count | Counts teams of Customer.
[**customersIdTeamsDelete**](CustomerApi.md#customersIdTeamsDelete) | **DELETE** /Customers/{id}/teams | Deletes all teams of this model.
[**customersIdTeamsFkDelete**](CustomerApi.md#customersIdTeamsFkDelete) | **DELETE** /Customers/{id}/teams/{fk} | Delete a related item by id for teams.
[**customersIdTeamsFkGet**](CustomerApi.md#customersIdTeamsFkGet) | **GET** /Customers/{id}/teams/{fk} | Find a related item by id for teams.
[**customersIdTeamsFkPut**](CustomerApi.md#customersIdTeamsFkPut) | **PUT** /Customers/{id}/teams/{fk} | Update a related item by id for teams.
[**customersIdTeamsGet**](CustomerApi.md#customersIdTeamsGet) | **GET** /Customers/{id}/teams | Queries teams of Customer.
[**customersIdTeamsNkBrandDelete**](CustomerApi.md#customersIdTeamsNkBrandDelete) | **DELETE** /Customers/{id}/teams/{nk}/brand | Deletes brand of this model.
[**customersIdTeamsNkBrandGet**](CustomerApi.md#customersIdTeamsNkBrandGet) | **GET** /Customers/{id}/teams/{nk}/brand | Fetches hasOne relation brand.
[**customersIdTeamsNkBrandPost**](CustomerApi.md#customersIdTeamsNkBrandPost) | **POST** /Customers/{id}/teams/{nk}/brand | Creates a new instance in brand of this model.
[**customersIdTeamsNkBrandPut**](CustomerApi.md#customersIdTeamsNkBrandPut) | **PUT** /Customers/{id}/teams/{nk}/brand | Update brand of this model.
[**customersIdTeamsNkBuilderConfigsCountGet**](CustomerApi.md#customersIdTeamsNkBuilderConfigsCountGet) | **GET** /Customers/{id}/teams/{nk}/builderConfigs/count | Counts builderConfigs of Team.
[**customersIdTeamsNkBuilderConfigsDelete**](CustomerApi.md#customersIdTeamsNkBuilderConfigsDelete) | **DELETE** /Customers/{id}/teams/{nk}/builderConfigs | Deletes all builderConfigs of this model.
[**customersIdTeamsNkBuilderConfigsFkDelete**](CustomerApi.md#customersIdTeamsNkBuilderConfigsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/builderConfigs/{fk} | Delete a related item by id for builderConfigs.
[**customersIdTeamsNkBuilderConfigsFkGet**](CustomerApi.md#customersIdTeamsNkBuilderConfigsFkGet) | **GET** /Customers/{id}/teams/{nk}/builderConfigs/{fk} | Find a related item by id for builderConfigs.
[**customersIdTeamsNkBuilderConfigsFkPut**](CustomerApi.md#customersIdTeamsNkBuilderConfigsFkPut) | **PUT** /Customers/{id}/teams/{nk}/builderConfigs/{fk} | Update a related item by id for builderConfigs.
[**customersIdTeamsNkBuilderConfigsGet**](CustomerApi.md#customersIdTeamsNkBuilderConfigsGet) | **GET** /Customers/{id}/teams/{nk}/builderConfigs | Queries builderConfigs of Team.
[**customersIdTeamsNkBuilderConfigsPost**](CustomerApi.md#customersIdTeamsNkBuilderConfigsPost) | **POST** /Customers/{id}/teams/{nk}/builderConfigs | Creates a new instance in builderConfigs of this model.
[**customersIdTeamsNkDataSourceSoapsCountGet**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsCountGet) | **GET** /Customers/{id}/teams/{nk}/dataSourceSoaps/count | Counts dataSourceSoaps of Team.
[**customersIdTeamsNkDataSourceSoapsFkDelete**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/dataSourceSoaps/{fk} | Delete a related item by id for dataSourceSoaps.
[**customersIdTeamsNkDataSourceSoapsFkGet**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsFkGet) | **GET** /Customers/{id}/teams/{nk}/dataSourceSoaps/{fk} | Find a related item by id for dataSourceSoaps.
[**customersIdTeamsNkDataSourceSoapsFkPut**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsFkPut) | **PUT** /Customers/{id}/teams/{nk}/dataSourceSoaps/{fk} | Update a related item by id for dataSourceSoaps.
[**customersIdTeamsNkDataSourceSoapsGet**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsGet) | **GET** /Customers/{id}/teams/{nk}/dataSourceSoaps | Queries dataSourceSoaps of Team.
[**customersIdTeamsNkDataSourceSoapsPost**](CustomerApi.md#customersIdTeamsNkDataSourceSoapsPost) | **POST** /Customers/{id}/teams/{nk}/dataSourceSoaps | Creates a new instance in dataSourceSoaps of this model.
[**customersIdTeamsNkDynamicDatasCountGet**](CustomerApi.md#customersIdTeamsNkDynamicDatasCountGet) | **GET** /Customers/{id}/teams/{nk}/dynamicDatas/count | Counts dynamicDatas of Team.
[**customersIdTeamsNkDynamicDatasFkDelete**](CustomerApi.md#customersIdTeamsNkDynamicDatasFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**customersIdTeamsNkDynamicDatasFkGet**](CustomerApi.md#customersIdTeamsNkDynamicDatasFkGet) | **GET** /Customers/{id}/teams/{nk}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**customersIdTeamsNkDynamicDatasFkPut**](CustomerApi.md#customersIdTeamsNkDynamicDatasFkPut) | **PUT** /Customers/{id}/teams/{nk}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**customersIdTeamsNkDynamicDatasGet**](CustomerApi.md#customersIdTeamsNkDynamicDatasGet) | **GET** /Customers/{id}/teams/{nk}/dynamicDatas | Queries dynamicDatas of Team.
[**customersIdTeamsNkDynamicDatasPost**](CustomerApi.md#customersIdTeamsNkDynamicDatasPost) | **POST** /Customers/{id}/teams/{nk}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**customersIdTeamsNkImageFoldersCountGet**](CustomerApi.md#customersIdTeamsNkImageFoldersCountGet) | **GET** /Customers/{id}/teams/{nk}/imageFolders/count | Counts imageFolders of Team.
[**customersIdTeamsNkImageFoldersDelete**](CustomerApi.md#customersIdTeamsNkImageFoldersDelete) | **DELETE** /Customers/{id}/teams/{nk}/imageFolders | Deletes all imageFolders of this model.
[**customersIdTeamsNkImageFoldersFkDelete**](CustomerApi.md#customersIdTeamsNkImageFoldersFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**customersIdTeamsNkImageFoldersFkGet**](CustomerApi.md#customersIdTeamsNkImageFoldersFkGet) | **GET** /Customers/{id}/teams/{nk}/imageFolders/{fk} | Find a related item by id for imageFolders.
[**customersIdTeamsNkImageFoldersFkPut**](CustomerApi.md#customersIdTeamsNkImageFoldersFkPut) | **PUT** /Customers/{id}/teams/{nk}/imageFolders/{fk} | Update a related item by id for imageFolders.
[**customersIdTeamsNkImageFoldersGet**](CustomerApi.md#customersIdTeamsNkImageFoldersGet) | **GET** /Customers/{id}/teams/{nk}/imageFolders | Queries imageFolders of Team.
[**customersIdTeamsNkImageFoldersPost**](CustomerApi.md#customersIdTeamsNkImageFoldersPost) | **POST** /Customers/{id}/teams/{nk}/imageFolders | Creates a new instance in imageFolders of this model.
[**customersIdTeamsNkImagesCountGet**](CustomerApi.md#customersIdTeamsNkImagesCountGet) | **GET** /Customers/{id}/teams/{nk}/images/count | Counts images of Team.
[**customersIdTeamsNkImagesDelete**](CustomerApi.md#customersIdTeamsNkImagesDelete) | **DELETE** /Customers/{id}/teams/{nk}/images | Deletes all images of this model.
[**customersIdTeamsNkImagesFkDelete**](CustomerApi.md#customersIdTeamsNkImagesFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/images/{fk} | Delete a related item by id for images.
[**customersIdTeamsNkImagesFkGet**](CustomerApi.md#customersIdTeamsNkImagesFkGet) | **GET** /Customers/{id}/teams/{nk}/images/{fk} | Find a related item by id for images.
[**customersIdTeamsNkImagesFkPut**](CustomerApi.md#customersIdTeamsNkImagesFkPut) | **PUT** /Customers/{id}/teams/{nk}/images/{fk} | Update a related item by id for images.
[**customersIdTeamsNkImagesGet**](CustomerApi.md#customersIdTeamsNkImagesGet) | **GET** /Customers/{id}/teams/{nk}/images | Queries images of Team.
[**customersIdTeamsNkImagesPost**](CustomerApi.md#customersIdTeamsNkImagesPost) | **POST** /Customers/{id}/teams/{nk}/images | Creates a new instance in images of this model.
[**customersIdTeamsNkMembersCountGet**](CustomerApi.md#customersIdTeamsNkMembersCountGet) | **GET** /Customers/{id}/teams/{nk}/members/count | Counts members of Team.
[**customersIdTeamsNkMembersDelete**](CustomerApi.md#customersIdTeamsNkMembersDelete) | **DELETE** /Customers/{id}/teams/{nk}/members | Deletes all members of this model.
[**customersIdTeamsNkMembersFkDelete**](CustomerApi.md#customersIdTeamsNkMembersFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/members/{fk} | Delete a related item by id for members.
[**customersIdTeamsNkMembersFkGet**](CustomerApi.md#customersIdTeamsNkMembersFkGet) | **GET** /Customers/{id}/teams/{nk}/members/{fk} | Find a related item by id for members.
[**customersIdTeamsNkMembersFkPut**](CustomerApi.md#customersIdTeamsNkMembersFkPut) | **PUT** /Customers/{id}/teams/{nk}/members/{fk} | Update a related item by id for members.
[**customersIdTeamsNkMembersGet**](CustomerApi.md#customersIdTeamsNkMembersGet) | **GET** /Customers/{id}/teams/{nk}/members | Queries members of Team.
[**customersIdTeamsNkMembersPost**](CustomerApi.md#customersIdTeamsNkMembersPost) | **POST** /Customers/{id}/teams/{nk}/members | Creates a new instance in members of this model.
[**customersIdTeamsNkMembersRelFkDelete**](CustomerApi.md#customersIdTeamsNkMembersRelFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/members/rel/{fk} | Remove the members relation to an item by id.
[**customersIdTeamsNkMembersRelFkHead**](CustomerApi.md#customersIdTeamsNkMembersRelFkHead) | **HEAD** /Customers/{id}/teams/{nk}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**customersIdTeamsNkMembersRelFkPut**](CustomerApi.md#customersIdTeamsNkMembersRelFkPut) | **PUT** /Customers/{id}/teams/{nk}/members/rel/{fk} | Add a related item by id for members.
[**customersIdTeamsNkPermissionDelete**](CustomerApi.md#customersIdTeamsNkPermissionDelete) | **DELETE** /Customers/{id}/teams/{nk}/permission | Deletes permission of this model.
[**customersIdTeamsNkPermissionGet**](CustomerApi.md#customersIdTeamsNkPermissionGet) | **GET** /Customers/{id}/teams/{nk}/permission | Fetches hasOne relation permission.
[**customersIdTeamsNkPermissionPost**](CustomerApi.md#customersIdTeamsNkPermissionPost) | **POST** /Customers/{id}/teams/{nk}/permission | Creates a new instance in permission of this model.
[**customersIdTeamsNkPermissionPut**](CustomerApi.md#customersIdTeamsNkPermissionPut) | **PUT** /Customers/{id}/teams/{nk}/permission | Update permission of this model.
[**customersIdTeamsNkPortalsCountGet**](CustomerApi.md#customersIdTeamsNkPortalsCountGet) | **GET** /Customers/{id}/teams/{nk}/portals/count | Counts portals of Team.
[**customersIdTeamsNkPortalsDelete**](CustomerApi.md#customersIdTeamsNkPortalsDelete) | **DELETE** /Customers/{id}/teams/{nk}/portals | Deletes all portals of this model.
[**customersIdTeamsNkPortalsFkDelete**](CustomerApi.md#customersIdTeamsNkPortalsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/portals/{fk} | Delete a related item by id for portals.
[**customersIdTeamsNkPortalsFkGet**](CustomerApi.md#customersIdTeamsNkPortalsFkGet) | **GET** /Customers/{id}/teams/{nk}/portals/{fk} | Find a related item by id for portals.
[**customersIdTeamsNkPortalsFkPut**](CustomerApi.md#customersIdTeamsNkPortalsFkPut) | **PUT** /Customers/{id}/teams/{nk}/portals/{fk} | Update a related item by id for portals.
[**customersIdTeamsNkPortalsGet**](CustomerApi.md#customersIdTeamsNkPortalsGet) | **GET** /Customers/{id}/teams/{nk}/portals | Queries portals of Team.
[**customersIdTeamsNkPortalsPost**](CustomerApi.md#customersIdTeamsNkPortalsPost) | **POST** /Customers/{id}/teams/{nk}/portals | Creates a new instance in portals of this model.
[**customersIdTeamsNkProductMaterialsCountGet**](CustomerApi.md#customersIdTeamsNkProductMaterialsCountGet) | **GET** /Customers/{id}/teams/{nk}/productMaterials/count | Counts productMaterials of Team.
[**customersIdTeamsNkProductMaterialsDelete**](CustomerApi.md#customersIdTeamsNkProductMaterialsDelete) | **DELETE** /Customers/{id}/teams/{nk}/productMaterials | Deletes all productMaterials of this model.
[**customersIdTeamsNkProductMaterialsFkDelete**](CustomerApi.md#customersIdTeamsNkProductMaterialsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/productMaterials/{fk} | Delete a related item by id for productMaterials.
[**customersIdTeamsNkProductMaterialsFkGet**](CustomerApi.md#customersIdTeamsNkProductMaterialsFkGet) | **GET** /Customers/{id}/teams/{nk}/productMaterials/{fk} | Find a related item by id for productMaterials.
[**customersIdTeamsNkProductMaterialsFkPut**](CustomerApi.md#customersIdTeamsNkProductMaterialsFkPut) | **PUT** /Customers/{id}/teams/{nk}/productMaterials/{fk} | Update a related item by id for productMaterials.
[**customersIdTeamsNkProductMaterialsGet**](CustomerApi.md#customersIdTeamsNkProductMaterialsGet) | **GET** /Customers/{id}/teams/{nk}/productMaterials | Queries productMaterials of Team.
[**customersIdTeamsNkProductMaterialsPost**](CustomerApi.md#customersIdTeamsNkProductMaterialsPost) | **POST** /Customers/{id}/teams/{nk}/productMaterials | Creates a new instance in productMaterials of this model.
[**customersIdTeamsNkProductPdfColorProfilesCountGet**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesCountGet) | **GET** /Customers/{id}/teams/{nk}/productPdfColorProfiles/count | Counts productPdfColorProfiles of Team.
[**customersIdTeamsNkProductPdfColorProfilesDelete**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesDelete) | **DELETE** /Customers/{id}/teams/{nk}/productPdfColorProfiles | Deletes all productPdfColorProfiles of this model.
[**customersIdTeamsNkProductPdfColorProfilesFkDelete**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/productPdfColorProfiles/{fk} | Delete a related item by id for productPdfColorProfiles.
[**customersIdTeamsNkProductPdfColorProfilesFkGet**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesFkGet) | **GET** /Customers/{id}/teams/{nk}/productPdfColorProfiles/{fk} | Find a related item by id for productPdfColorProfiles.
[**customersIdTeamsNkProductPdfColorProfilesFkPut**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesFkPut) | **PUT** /Customers/{id}/teams/{nk}/productPdfColorProfiles/{fk} | Update a related item by id for productPdfColorProfiles.
[**customersIdTeamsNkProductPdfColorProfilesGet**](CustomerApi.md#customersIdTeamsNkProductPdfColorProfilesGet) | **GET** /Customers/{id}/teams/{nk}/productPdfColorProfiles | Queries productPdfColorProfiles of Team.
[**customersIdTeamsNkProductSizeMaterialsCountGet**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsCountGet) | **GET** /Customers/{id}/teams/{nk}/productSizeMaterials/count | Counts productSizeMaterials of Team.
[**customersIdTeamsNkProductSizeMaterialsDelete**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsDelete) | **DELETE** /Customers/{id}/teams/{nk}/productSizeMaterials | Deletes all productSizeMaterials of this model.
[**customersIdTeamsNkProductSizeMaterialsFkDelete**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/productSizeMaterials/{fk} | Delete a related item by id for productSizeMaterials.
[**customersIdTeamsNkProductSizeMaterialsFkGet**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsFkGet) | **GET** /Customers/{id}/teams/{nk}/productSizeMaterials/{fk} | Find a related item by id for productSizeMaterials.
[**customersIdTeamsNkProductSizeMaterialsFkPut**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsFkPut) | **PUT** /Customers/{id}/teams/{nk}/productSizeMaterials/{fk} | Update a related item by id for productSizeMaterials.
[**customersIdTeamsNkProductSizeMaterialsGet**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsGet) | **GET** /Customers/{id}/teams/{nk}/productSizeMaterials | Queries productSizeMaterials of Team.
[**customersIdTeamsNkProductSizeMaterialsPost**](CustomerApi.md#customersIdTeamsNkProductSizeMaterialsPost) | **POST** /Customers/{id}/teams/{nk}/productSizeMaterials | Creates a new instance in productSizeMaterials of this model.
[**customersIdTeamsNkTeamDataGet**](CustomerApi.md#customersIdTeamsNkTeamDataGet) | **GET** /Customers/{id}/teams/{nk}/teamData | Fetches belongsTo relation teamData.
[**customersIdTeamsNkTeamMembersCountGet**](CustomerApi.md#customersIdTeamsNkTeamMembersCountGet) | **GET** /Customers/{id}/teams/{nk}/teamMembers/count | Counts teamMembers of Team.
[**customersIdTeamsNkTeamMembersDelete**](CustomerApi.md#customersIdTeamsNkTeamMembersDelete) | **DELETE** /Customers/{id}/teams/{nk}/teamMembers | Deletes all teamMembers of this model.
[**customersIdTeamsNkTeamMembersFkDelete**](CustomerApi.md#customersIdTeamsNkTeamMembersFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/teamMembers/{fk} | Delete a related item by id for teamMembers.
[**customersIdTeamsNkTeamMembersFkGet**](CustomerApi.md#customersIdTeamsNkTeamMembersFkGet) | **GET** /Customers/{id}/teams/{nk}/teamMembers/{fk} | Find a related item by id for teamMembers.
[**customersIdTeamsNkTeamMembersFkPut**](CustomerApi.md#customersIdTeamsNkTeamMembersFkPut) | **PUT** /Customers/{id}/teams/{nk}/teamMembers/{fk} | Update a related item by id for teamMembers.
[**customersIdTeamsNkTeamMembersGet**](CustomerApi.md#customersIdTeamsNkTeamMembersGet) | **GET** /Customers/{id}/teams/{nk}/teamMembers | Queries teamMembers of Team.
[**customersIdTeamsNkTeamMembersPost**](CustomerApi.md#customersIdTeamsNkTeamMembersPost) | **POST** /Customers/{id}/teams/{nk}/teamMembers | Creates a new instance in teamMembers of this model.
[**customersIdTeamsNkTemplateFoldersCountGet**](CustomerApi.md#customersIdTeamsNkTemplateFoldersCountGet) | **GET** /Customers/{id}/teams/{nk}/templateFolders/count | Counts templateFolders of Team.
[**customersIdTeamsNkTemplateFoldersDelete**](CustomerApi.md#customersIdTeamsNkTemplateFoldersDelete) | **DELETE** /Customers/{id}/teams/{nk}/templateFolders | Deletes all templateFolders of this model.
[**customersIdTeamsNkTemplateFoldersFkDelete**](CustomerApi.md#customersIdTeamsNkTemplateFoldersFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/templateFolders/{fk} | Delete a related item by id for templateFolders.
[**customersIdTeamsNkTemplateFoldersFkGet**](CustomerApi.md#customersIdTeamsNkTemplateFoldersFkGet) | **GET** /Customers/{id}/teams/{nk}/templateFolders/{fk} | Find a related item by id for templateFolders.
[**customersIdTeamsNkTemplateFoldersFkPut**](CustomerApi.md#customersIdTeamsNkTemplateFoldersFkPut) | **PUT** /Customers/{id}/teams/{nk}/templateFolders/{fk} | Update a related item by id for templateFolders.
[**customersIdTeamsNkTemplateFoldersGet**](CustomerApi.md#customersIdTeamsNkTemplateFoldersGet) | **GET** /Customers/{id}/teams/{nk}/templateFolders | Queries templateFolders of Team.
[**customersIdTeamsNkTemplateFoldersPost**](CustomerApi.md#customersIdTeamsNkTemplateFoldersPost) | **POST** /Customers/{id}/teams/{nk}/templateFolders | Creates a new instance in templateFolders of this model.
[**customersIdTeamsNkTemplatesCountGet**](CustomerApi.md#customersIdTeamsNkTemplatesCountGet) | **GET** /Customers/{id}/teams/{nk}/templates/count | Counts templates of Team.
[**customersIdTeamsNkTemplatesDelete**](CustomerApi.md#customersIdTeamsNkTemplatesDelete) | **DELETE** /Customers/{id}/teams/{nk}/templates | Deletes all templates of this model.
[**customersIdTeamsNkTemplatesFkDelete**](CustomerApi.md#customersIdTeamsNkTemplatesFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/templates/{fk} | Delete a related item by id for templates.
[**customersIdTeamsNkTemplatesFkGet**](CustomerApi.md#customersIdTeamsNkTemplatesFkGet) | **GET** /Customers/{id}/teams/{nk}/templates/{fk} | Find a related item by id for templates.
[**customersIdTeamsNkTemplatesFkPut**](CustomerApi.md#customersIdTeamsNkTemplatesFkPut) | **PUT** /Customers/{id}/teams/{nk}/templates/{fk} | Update a related item by id for templates.
[**customersIdTeamsNkTemplatesGet**](CustomerApi.md#customersIdTeamsNkTemplatesGet) | **GET** /Customers/{id}/teams/{nk}/templates | Queries templates of Team.
[**customersIdTeamsNkTemplatesPost**](CustomerApi.md#customersIdTeamsNkTemplatesPost) | **POST** /Customers/{id}/teams/{nk}/templates | Creates a new instance in templates of this model.
[**customersIdTeamsNkWorkflowsCountGet**](CustomerApi.md#customersIdTeamsNkWorkflowsCountGet) | **GET** /Customers/{id}/teams/{nk}/workflows/count | Counts workflows of Team.
[**customersIdTeamsNkWorkflowsDelete**](CustomerApi.md#customersIdTeamsNkWorkflowsDelete) | **DELETE** /Customers/{id}/teams/{nk}/workflows | Deletes all workflows of this model.
[**customersIdTeamsNkWorkflowsFkDelete**](CustomerApi.md#customersIdTeamsNkWorkflowsFkDelete) | **DELETE** /Customers/{id}/teams/{nk}/workflows/{fk} | Delete a related item by id for workflows.
[**customersIdTeamsNkWorkflowsFkGet**](CustomerApi.md#customersIdTeamsNkWorkflowsFkGet) | **GET** /Customers/{id}/teams/{nk}/workflows/{fk} | Find a related item by id for workflows.
[**customersIdTeamsNkWorkflowsFkPut**](CustomerApi.md#customersIdTeamsNkWorkflowsFkPut) | **PUT** /Customers/{id}/teams/{nk}/workflows/{fk} | Update a related item by id for workflows.
[**customersIdTeamsNkWorkflowsGet**](CustomerApi.md#customersIdTeamsNkWorkflowsGet) | **GET** /Customers/{id}/teams/{nk}/workflows | Queries workflows of Team.
[**customersIdTeamsNkWorkflowsPost**](CustomerApi.md#customersIdTeamsNkWorkflowsPost) | **POST** /Customers/{id}/teams/{nk}/workflows | Creates a new instance in workflows of this model.
[**customersIdTeamsPost**](CustomerApi.md#customersIdTeamsPost) | **POST** /Customers/{id}/teams | Creates a new instance in teams of this model.
[**customersIdTeamsRelFkDelete**](CustomerApi.md#customersIdTeamsRelFkDelete) | **DELETE** /Customers/{id}/teams/rel/{fk} | Remove the teams relation to an item by id.
[**customersIdTeamsRelFkHead**](CustomerApi.md#customersIdTeamsRelFkHead) | **HEAD** /Customers/{id}/teams/rel/{fk} | Check the existence of teams relation to an item by id.
[**customersIdTeamsRelFkPut**](CustomerApi.md#customersIdTeamsRelFkPut) | **PUT** /Customers/{id}/teams/rel/{fk} | Add a related item by id for teams.
[**customersIdTeamsTeamIdChangePost**](CustomerApi.md#customersIdTeamsTeamIdChangePost) | **POST** /Customers/{id}/teams/{teamId}/change | Move authentication to a Team
[**customersIdTeamsTeamIdPortalsPortalIdChangePost**](CustomerApi.md#customersIdTeamsTeamIdPortalsPortalIdChangePost) | **POST** /Customers/{id}/teams/{teamId}/portals/{portalId}/change | Move authentication to a Portal
[**customersIdTokenGet**](CustomerApi.md#customersIdTokenGet) | **GET** /Customers/{id}/token | Get token info
[**customersIdVerifyPost**](CustomerApi.md#customersIdVerifyPost) | **POST** /Customers/{id}/verify | Trigger user&#39;s identity verification with configured verifyOptions
[**customersInvitationTicketsTokenAcceptPost**](CustomerApi.md#customersInvitationTicketsTokenAcceptPost) | **POST** /Customers/invitationTickets/{token}/accept | Accept invitation with token
[**customersInvitationTicketsTokenGet**](CustomerApi.md#customersInvitationTicketsTokenGet) | **GET** /Customers/invitationTickets/{token} | Get invitation details with token
[**customersLoginPost**](CustomerApi.md#customersLoginPost) | **POST** /Customers/login | Login a user with username/email and password.
[**customersLogoutPost**](CustomerApi.md#customersLogoutPost) | **POST** /Customers/logout | Logout a user with access token.
[**customersMeTokenGet**](CustomerApi.md#customersMeTokenGet) | **GET** /Customers/me/token | Get token info
[**customersMeTokenRefreshGet**](CustomerApi.md#customersMeTokenRefreshGet) | **GET** /Customers/me/token/refresh | Refresh current access token
[**customersPost**](CustomerApi.md#customersPost) | **POST** /Customers | Create a new instance of the model and persist it into the data source.
[**customersRegisterPost**](CustomerApi.md#customersRegisterPost) | **POST** /Customers/register | Create customer and assign it to a team
[**customersResetPasswordPost**](CustomerApi.md#customersResetPasswordPost) | **POST** /Customers/reset-password | Reset user&#39;s password via a password-reset token.
[**customersResetPasswordTokenGet**](CustomerApi.md#customersResetPasswordTokenGet) | **GET** /Customers/reset-password/token | Get token info for reset password token
[**customersResetPost**](CustomerApi.md#customersResetPost) | **POST** /Customers/reset | Reset password for a user with email.


# **customersChangePasswordPost**
> customersChangePasswordPost($oldPassword, $newPassword)

Change a user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$oldPassword = "oldPassword_example"; // string | 
$newPassword = "newPassword_example"; // string | 

try {
    $api_instance->customersChangePasswordPost($oldPassword, $newPassword);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oldPassword** | **string**|  |
 **newPassword** | **string**|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersChangeStreamGet**
> \SplFileObject customersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **customersChangeStreamPost**
> \SplFileObject customersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **customersConfirmGet**
> customersConfirmGet($uid, $token, $redirect)

Confirm a user registration with identity verification token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$uid = "uid_example"; // string | 
$token = "token_example"; // string | 
$redirect = "redirect_example"; // string | 

try {
    $api_instance->customersConfirmGet($uid, $token, $redirect);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersConfirmGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **token** | **string**|  |
 **redirect** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **customersEmailEmailExistsGet**
> \Swagger\Client\Model\InlineResponse2002 customersEmailEmailExistsGet($email)

Define whether customer exists or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$email = "email_example"; // string | Customer email

try {
    $result = $api_instance->customersEmailEmailExistsGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersEmailEmailExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Customer email |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersFindOneGet**
> \Swagger\Client\Model\Customer customersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersGet**
> \Swagger\Client\Model\Customer[] customersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdAccessTokensCountGet($id, $where)

Counts accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdAccessTokensCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensDelete**
> customersIdAccessTokensDelete($id)

Deletes all accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customersIdAccessTokensDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensFkDelete**
> customersIdAccessTokensFkDelete($id, $fk)

Delete a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $api_instance->customersIdAccessTokensFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensFkGet**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdAccessTokensFkGet($id, $fk)

Find a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $result = $api_instance->customersIdAccessTokensFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensFkPut**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdAccessTokensFkPut($id, $fk, $data)

Update a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens
$data = new \Swagger\Client\Model\TeamMemberAccessToken(); // \Swagger\Client\Model\TeamMemberAccessToken | 

try {
    $result = $api_instance->customersIdAccessTokensFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |
 **data** | [**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/\Swagger\Client\Model\TeamMemberAccessToken.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensGet**
> \Swagger\Client\Model\TeamMemberAccessToken[] customersIdAccessTokensGet($id, $filter)

Queries accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdAccessTokensGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken[]**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdAccessTokensPost**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdAccessTokensPost($id, $data)

Creates a new instance in accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\TeamMemberAccessToken(); // \Swagger\Client\Model\TeamMemberAccessToken | 

try {
    $result = $api_instance->customersIdAccessTokensPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdAccessTokensPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/\Swagger\Client\Model\TeamMemberAccessToken.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdActiveGet**
> \Swagger\Client\Model\InlineResponse2003 customersIdActiveGet($id)

Define whether customer is active or not

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id or email

try {
    $result = $api_instance->customersIdActiveGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdActiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id or email |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdDelete**
> object customersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **customersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 customersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **customersIdGet**
> \Swagger\Client\Model\Customer customersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->customersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdHead**
> \Swagger\Client\Model\InlineResponse2002 customersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **customersIdInvitationTicketsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdInvitationTicketsCountGet($id, $where)

Counts invitationTickets of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdInvitationTicketsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsDelete**
> customersIdInvitationTicketsDelete($id)

Deletes all invitationTickets of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customersIdInvitationTicketsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsFkDelete**
> customersIdInvitationTicketsFkDelete($id, $fk)

Delete a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for invitationTickets

try {
    $api_instance->customersIdInvitationTicketsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for invitationTickets |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsFkGet**
> \Swagger\Client\Model\InvitationTicket customersIdInvitationTicketsFkGet($id, $fk)

Find a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for invitationTickets

try {
    $result = $api_instance->customersIdInvitationTicketsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for invitationTickets |

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsFkPut**
> \Swagger\Client\Model\InvitationTicket customersIdInvitationTicketsFkPut($id, $fk, $data)

Update a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for invitationTickets
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | 

try {
    $result = $api_instance->customersIdInvitationTicketsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for invitationTickets |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] customersIdInvitationTicketsGet($id, $filter)

Queries invitationTickets of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdInvitationTicketsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdInvitationTicketsPost**
> \Swagger\Client\Model\InvitationTicket customersIdInvitationTicketsPost($id, $data)

Creates a new instance in invitationTickets of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | 

try {
    $result = $api_instance->customersIdInvitationTicketsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdInvitationTicketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPatch**
> \Swagger\Client\Model\Customer customersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPermissionDelete**
> customersIdPermissionDelete($id)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customersIdPermissionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPermissionGet**
> \Swagger\Client\Model\CustomerPermissionSet customersIdPermissionGet($id, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$refresh = true; // bool | 

try {
    $result = $api_instance->customersIdPermissionGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPermissionSet**](../Model/CustomerPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPermissionPost**
> \Swagger\Client\Model\CustomerPermissionSet customersIdPermissionPost($id, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\CustomerPermissionSet(); // \Swagger\Client\Model\CustomerPermissionSet | 

try {
    $result = $api_instance->customersIdPermissionPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\CustomerPermissionSet**](../Model/\Swagger\Client\Model\CustomerPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPermissionSet**](../Model/CustomerPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPermissionPut**
> \Swagger\Client\Model\CustomerPermissionSet customersIdPermissionPut($id, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\CustomerPermissionSet(); // \Swagger\Client\Model\CustomerPermissionSet | 

try {
    $result = $api_instance->customersIdPermissionPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\CustomerPermissionSet**](../Model/\Swagger\Client\Model\CustomerPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerPermissionSet**](../Model/CustomerPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdProfilePicturePut**
> \Swagger\Client\Model\Customer customersIdProfilePicturePut($id, $id2, $data)

Change profile picture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$id2 = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Profile picture

try {
    $result = $api_instance->customersIdProfilePicturePut($id, $id2, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdProfilePicturePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **id2** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Profile picture |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPut**
> \Swagger\Client\Model\Customer customersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdRegisterTeamPost**
> \Swagger\Client\Model\TeamMember customersIdRegisterTeamPost($id, $data)

Register team and assign it to the customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | Model instance data

try {
    $result = $api_instance->customersIdRegisterTeamPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdRegisterTeamPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdReplacePost**
> \Swagger\Client\Model\Customer customersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsCountGet($id, $where)

Counts teams of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsDelete**
> customersIdTeamsDelete($id)

Deletes all teams of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customersIdTeamsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsFkDelete**
> customersIdTeamsFkDelete($id, $fk)

Delete a related item by id for teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams

try {
    $api_instance->customersIdTeamsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsFkGet**
> \Swagger\Client\Model\Team customersIdTeamsFkGet($id, $fk)

Find a related item by id for teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams

try {
    $result = $api_instance->customersIdTeamsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsFkPut**
> \Swagger\Client\Model\Team customersIdTeamsFkPut($id, $fk, $data)

Update a related item by id for teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | 

try {
    $result = $api_instance->customersIdTeamsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsGet**
> \Swagger\Client\Model\Team[] customersIdTeamsGet($id, $filter)

Queries teams of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team[]**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBrandDelete**
> customersIdTeamsNkBrandDelete($id, $nk)

Deletes brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkBrandDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBrandDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBrandGet**
> \Swagger\Client\Model\TeamBrand customersIdTeamsNkBrandGet($id, $nk, $refresh)

Fetches hasOne relation brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$refresh = true; // bool | 

try {
    $result = $api_instance->customersIdTeamsNkBrandGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBrandGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBrandPost**
> \Swagger\Client\Model\TeamBrand customersIdTeamsNkBrandPost($id, $nk, $data)

Creates a new instance in brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->customersIdTeamsNkBrandPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBrandPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBrandPut**
> \Swagger\Client\Model\TeamBrand customersIdTeamsNkBrandPut($id, $nk, $data)

Update brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->customersIdTeamsNkBrandPut($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBrandPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkBuilderConfigsCountGet($id, $nk, $where)

Counts builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkBuilderConfigsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsDelete**
> customersIdTeamsNkBuilderConfigsDelete($id, $nk)

Deletes all builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkBuilderConfigsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsFkDelete**
> customersIdTeamsNkBuilderConfigsFkDelete($id, $nk, $fk)

Delete a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $api_instance->customersIdTeamsNkBuilderConfigsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsFkGet**
> \Swagger\Client\Model\TeamBuilderConfig customersIdTeamsNkBuilderConfigsFkGet($id, $nk, $fk)

Find a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $result = $api_instance->customersIdTeamsNkBuilderConfigsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsFkPut**
> \Swagger\Client\Model\TeamBuilderConfig customersIdTeamsNkBuilderConfigsFkPut($id, $nk, $fk, $data)

Update a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for builderConfigs
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->customersIdTeamsNkBuilderConfigsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkBuilderConfigsGet**
> \Swagger\Client\Model\TeamBuilderConfig[] customersIdTeamsNkBuilderConfigsGet($id, $nk, $filter)

Queries builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkBuilderConfigsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig[]**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkBuilderConfigsPost**
> \Swagger\Client\Model\TeamBuilderConfig customersIdTeamsNkBuilderConfigsPost($id, $nk, $data)

Creates a new instance in builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->customersIdTeamsNkBuilderConfigsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkBuilderConfigsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDataSourceSoapsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkDataSourceSoapsCountGet($id, $nk, $where)

Counts dataSourceSoaps of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkDataSourceSoapsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDataSourceSoapsFkDelete**
> customersIdTeamsNkDataSourceSoapsFkDelete($id, $nk, $fk)

Delete a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps

try {
    $api_instance->customersIdTeamsNkDataSourceSoapsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for dataSourceSoaps |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDataSourceSoapsFkGet**
> \Swagger\Client\Model\DataSourceSoap customersIdTeamsNkDataSourceSoapsFkGet($id, $nk, $fk)

Find a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps

try {
    $result = $api_instance->customersIdTeamsNkDataSourceSoapsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for dataSourceSoaps |

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDataSourceSoapsFkPut**
> \Swagger\Client\Model\DataSourceSoap customersIdTeamsNkDataSourceSoapsFkPut($id, $nk, $fk, $data)

Update a related item by id for dataSourceSoaps.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dataSourceSoaps
$data = new \Swagger\Client\Model\DataSourceSoap(); // \Swagger\Client\Model\DataSourceSoap | 

try {
    $result = $api_instance->customersIdTeamsNkDataSourceSoapsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkDataSourceSoapsGet**
> \Swagger\Client\Model\DataSourceSoap[] customersIdTeamsNkDataSourceSoapsGet($id, $nk, $filter)

Queries dataSourceSoaps of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkDataSourceSoapsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap[]**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDataSourceSoapsPost**
> \Swagger\Client\Model\DataSourceSoap customersIdTeamsNkDataSourceSoapsPost($id, $nk, $data)

Creates a new instance in dataSourceSoaps of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\DataSourceSoap(); // \Swagger\Client\Model\DataSourceSoap | 

try {
    $result = $api_instance->customersIdTeamsNkDataSourceSoapsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDataSourceSoapsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\DataSourceSoap**](../Model/\Swagger\Client\Model\DataSourceSoap.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkDynamicDatasCountGet($id, $nk, $where)

Counts dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkDynamicDatasCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDynamicDatasFkDelete**
> customersIdTeamsNkDynamicDatasFkDelete($id, $nk, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->customersIdTeamsNkDynamicDatasFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData customersIdTeamsNkDynamicDatasFkGet($id, $nk, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->customersIdTeamsNkDynamicDatasFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData customersIdTeamsNkDynamicDatasFkPut($id, $nk, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->customersIdTeamsNkDynamicDatasFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] customersIdTeamsNkDynamicDatasGet($id, $nk, $filter)

Queries dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkDynamicDatasGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkDynamicDatasPost**
> \Swagger\Client\Model\DynamicData customersIdTeamsNkDynamicDatasPost($id, $nk, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->customersIdTeamsNkDynamicDatasPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkImageFoldersCountGet($id, $nk, $where)

Counts imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkImageFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersDelete**
> customersIdTeamsNkImageFoldersDelete($id, $nk)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkImageFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersFkDelete**
> customersIdTeamsNkImageFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->customersIdTeamsNkImageFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder customersIdTeamsNkImageFoldersFkGet($id, $nk, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->customersIdTeamsNkImageFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder customersIdTeamsNkImageFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->customersIdTeamsNkImageFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] customersIdTeamsNkImageFoldersGet($id, $nk, $filter)

Queries imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkImageFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImageFoldersPost**
> \Swagger\Client\Model\ImageFolder customersIdTeamsNkImageFoldersPost($id, $nk, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->customersIdTeamsNkImageFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkImagesCountGet($id, $nk, $where)

Counts images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkImagesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesDelete**
> customersIdTeamsNkImagesDelete($id, $nk)

Deletes all images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkImagesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesFkDelete**
> customersIdTeamsNkImagesFkDelete($id, $nk, $fk)

Delete a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for images

try {
    $api_instance->customersIdTeamsNkImagesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for images |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesFkGet**
> \Swagger\Client\Model\Image customersIdTeamsNkImagesFkGet($id, $nk, $fk)

Find a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for images

try {
    $result = $api_instance->customersIdTeamsNkImagesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for images |

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesFkPut**
> \Swagger\Client\Model\Image customersIdTeamsNkImagesFkPut($id, $nk, $fk, $data)

Update a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for images
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->customersIdTeamsNkImagesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkImagesGet**
> \Swagger\Client\Model\Image[] customersIdTeamsNkImagesGet($id, $nk, $filter)

Queries images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkImagesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkImagesPost**
> \Swagger\Client\Model\Image customersIdTeamsNkImagesPost($id, $nk, $data)

Creates a new instance in images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->customersIdTeamsNkImagesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkMembersCountGet($id, $nk, $where)

Counts members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersDelete**
> customersIdTeamsNkMembersDelete($id, $nk)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersFkDelete**
> customersIdTeamsNkMembersFkDelete($id, $nk, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->customersIdTeamsNkMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersFkGet**
> \Swagger\Client\Model\Customer customersIdTeamsNkMembersFkGet($id, $nk, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->customersIdTeamsNkMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersFkPut**
> \Swagger\Client\Model\Customer customersIdTeamsNkMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->customersIdTeamsNkMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkMembersGet**
> \Swagger\Client\Model\Customer[] customersIdTeamsNkMembersGet($id, $nk, $filter)

Queries members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersPost**
> \Swagger\Client\Model\Customer customersIdTeamsNkMembersPost($id, $nk, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->customersIdTeamsNkMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersRelFkDelete**
> customersIdTeamsNkMembersRelFkDelete($id, $nk, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->customersIdTeamsNkMembersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersRelFkHead**
> bool customersIdTeamsNkMembersRelFkHead($id, $nk, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->customersIdTeamsNkMembersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkMembersRelFkPut**
> \Swagger\Client\Model\TeamMember customersIdTeamsNkMembersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->customersIdTeamsNkMembersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkPermissionDelete**
> customersIdTeamsNkPermissionDelete($id, $nk)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkPermissionDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPermissionGet**
> \Swagger\Client\Model\TeamPermissionSet customersIdTeamsNkPermissionGet($id, $nk, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$refresh = true; // bool | 

try {
    $result = $api_instance->customersIdTeamsNkPermissionGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPermissionPost**
> \Swagger\Client\Model\TeamPermissionSet customersIdTeamsNkPermissionPost($id, $nk, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->customersIdTeamsNkPermissionPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPermissionPut**
> \Swagger\Client\Model\TeamPermissionSet customersIdTeamsNkPermissionPut($id, $nk, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->customersIdTeamsNkPermissionPut($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkPortalsCountGet($id, $nk, $where)

Counts portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkPortalsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsDelete**
> customersIdTeamsNkPortalsDelete($id, $nk)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkPortalsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsFkDelete**
> customersIdTeamsNkPortalsFkDelete($id, $nk, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->customersIdTeamsNkPortalsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsFkGet**
> \Swagger\Client\Model\Portal customersIdTeamsNkPortalsFkGet($id, $nk, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->customersIdTeamsNkPortalsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsFkPut**
> \Swagger\Client\Model\Portal customersIdTeamsNkPortalsFkPut($id, $nk, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->customersIdTeamsNkPortalsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkPortalsGet**
> \Swagger\Client\Model\Portal[] customersIdTeamsNkPortalsGet($id, $nk, $filter)

Queries portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkPortalsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkPortalsPost**
> \Swagger\Client\Model\Portal customersIdTeamsNkPortalsPost($id, $nk, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->customersIdTeamsNkPortalsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkProductMaterialsCountGet($id, $nk, $where)

Counts productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkProductMaterialsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsDelete**
> customersIdTeamsNkProductMaterialsDelete($id, $nk)

Deletes all productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkProductMaterialsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsFkDelete**
> customersIdTeamsNkProductMaterialsFkDelete($id, $nk, $fk)

Delete a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $api_instance->customersIdTeamsNkProductMaterialsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsFkGet**
> \Swagger\Client\Model\ProductMaterial customersIdTeamsNkProductMaterialsFkGet($id, $nk, $fk)

Find a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $result = $api_instance->customersIdTeamsNkProductMaterialsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsFkPut**
> \Swagger\Client\Model\ProductMaterial customersIdTeamsNkProductMaterialsFkPut($id, $nk, $fk, $data)

Update a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productMaterials
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->customersIdTeamsNkProductMaterialsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkProductMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] customersIdTeamsNkProductMaterialsGet($id, $nk, $filter)

Queries productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkProductMaterialsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductMaterialsPost**
> \Swagger\Client\Model\ProductMaterial customersIdTeamsNkProductMaterialsPost($id, $nk, $data)

Creates a new instance in productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->customersIdTeamsNkProductMaterialsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductPdfColorProfilesCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkProductPdfColorProfilesCountGet($id, $nk, $where)

Counts productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkProductPdfColorProfilesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductPdfColorProfilesDelete**
> customersIdTeamsNkProductPdfColorProfilesDelete($id, $nk)

Deletes all productPdfColorProfiles of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkProductPdfColorProfilesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductPdfColorProfilesFkDelete**
> customersIdTeamsNkProductPdfColorProfilesFkDelete($id, $nk, $fk)

Delete a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $api_instance->customersIdTeamsNkProductPdfColorProfilesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductPdfColorProfilesFkGet**
> \Swagger\Client\Model\ProductPdfColorProfile customersIdTeamsNkProductPdfColorProfilesFkGet($id, $nk, $fk)

Find a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $result = $api_instance->customersIdTeamsNkProductPdfColorProfilesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductPdfColorProfilesFkPut**
> \Swagger\Client\Model\ProductPdfColorProfile customersIdTeamsNkProductPdfColorProfilesFkPut($id, $nk, $fk, $data)

Update a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | 

try {
    $result = $api_instance->customersIdTeamsNkProductPdfColorProfilesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkProductPdfColorProfilesGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] customersIdTeamsNkProductPdfColorProfilesGet($id, $nk, $filter)

Queries productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkProductPdfColorProfilesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductPdfColorProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkProductSizeMaterialsCountGet($id, $nk, $where)

Counts productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkProductSizeMaterialsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsDelete**
> customersIdTeamsNkProductSizeMaterialsDelete($id, $nk)

Deletes all productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkProductSizeMaterialsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsFkDelete**
> customersIdTeamsNkProductSizeMaterialsFkDelete($id, $nk, $fk)

Delete a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->customersIdTeamsNkProductSizeMaterialsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial customersIdTeamsNkProductSizeMaterialsFkGet($id, $nk, $fk)

Find a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->customersIdTeamsNkProductSizeMaterialsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial customersIdTeamsNkProductSizeMaterialsFkPut($id, $nk, $fk, $data)

Update a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->customersIdTeamsNkProductSizeMaterialsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] customersIdTeamsNkProductSizeMaterialsGet($id, $nk, $filter)

Queries productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkProductSizeMaterialsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkProductSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial customersIdTeamsNkProductSizeMaterialsPost($id, $nk, $data)

Creates a new instance in productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->customersIdTeamsNkProductSizeMaterialsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamDataGet**
> \Swagger\Client\Model\DynamicData customersIdTeamsNkTeamDataGet($id, $nk, $refresh)

Fetches belongsTo relation teamData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$refresh = true; // bool | 

try {
    $result = $api_instance->customersIdTeamsNkTeamDataGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkTeamMembersCountGet($id, $nk, $where)

Counts teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkTeamMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersDelete**
> customersIdTeamsNkTeamMembersDelete($id, $nk)

Deletes all teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkTeamMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersFkDelete**
> customersIdTeamsNkTeamMembersFkDelete($id, $nk, $fk)

Delete a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $api_instance->customersIdTeamsNkTeamMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersFkGet**
> \Swagger\Client\Model\TeamMember customersIdTeamsNkTeamMembersFkGet($id, $nk, $fk)

Find a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $result = $api_instance->customersIdTeamsNkTeamMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersFkPut**
> \Swagger\Client\Model\TeamMember customersIdTeamsNkTeamMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for teamMembers
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->customersIdTeamsNkTeamMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkTeamMembersGet**
> \Swagger\Client\Model\TeamMember[] customersIdTeamsNkTeamMembersGet($id, $nk, $filter)

Queries teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkTeamMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTeamMembersPost**
> \Swagger\Client\Model\TeamMember customersIdTeamsNkTeamMembersPost($id, $nk, $data)

Creates a new instance in teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->customersIdTeamsNkTeamMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTeamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkTemplateFoldersCountGet($id, $nk, $where)

Counts templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkTemplateFoldersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersDelete**
> customersIdTeamsNkTemplateFoldersDelete($id, $nk)

Deletes all templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkTemplateFoldersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersFkDelete**
> customersIdTeamsNkTemplateFoldersFkDelete($id, $nk, $fk)

Delete a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $api_instance->customersIdTeamsNkTemplateFoldersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersFkGet**
> \Swagger\Client\Model\TeamTemplateFolder customersIdTeamsNkTemplateFoldersFkGet($id, $nk, $fk)

Find a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $result = $api_instance->customersIdTeamsNkTemplateFoldersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersFkPut**
> \Swagger\Client\Model\TeamTemplateFolder customersIdTeamsNkTemplateFoldersFkPut($id, $nk, $fk, $data)

Update a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templateFolders
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->customersIdTeamsNkTemplateFoldersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkTemplateFoldersGet**
> \Swagger\Client\Model\TeamTemplateFolder[] customersIdTeamsNkTemplateFoldersGet($id, $nk, $filter)

Queries templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkTemplateFoldersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder[]**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplateFoldersPost**
> \Swagger\Client\Model\TeamTemplateFolder customersIdTeamsNkTemplateFoldersPost($id, $nk, $data)

Creates a new instance in templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->customersIdTeamsNkTemplateFoldersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\TeamTemplateFolder**](../Model/\Swagger\Client\Model\TeamTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkTemplatesCountGet($id, $nk, $where)

Counts templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkTemplatesCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesDelete**
> customersIdTeamsNkTemplatesDelete($id, $nk)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkTemplatesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesFkDelete**
> customersIdTeamsNkTemplatesFkDelete($id, $nk, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->customersIdTeamsNkTemplatesFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesFkGet**
> \Swagger\Client\Model\Template customersIdTeamsNkTemplatesFkGet($id, $nk, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->customersIdTeamsNkTemplatesFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesFkPut**
> \Swagger\Client\Model\Template customersIdTeamsNkTemplatesFkPut($id, $nk, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->customersIdTeamsNkTemplatesFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkTemplatesGet**
> \Swagger\Client\Model\Template[] customersIdTeamsNkTemplatesGet($id, $nk, $filter)

Queries templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkTemplatesGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkTemplatesPost**
> \Swagger\Client\Model\Template customersIdTeamsNkTemplatesPost($id, $nk, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->customersIdTeamsNkTemplatesPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsCountGet**
> \Swagger\Client\Model\InlineResponse2001 customersIdTeamsNkWorkflowsCountGet($id, $nk, $where)

Counts workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customersIdTeamsNkWorkflowsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsDelete**
> customersIdTeamsNkWorkflowsDelete($id, $nk)

Deletes all workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.

try {
    $api_instance->customersIdTeamsNkWorkflowsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsFkDelete**
> customersIdTeamsNkWorkflowsFkDelete($id, $nk, $fk)

Delete a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $api_instance->customersIdTeamsNkWorkflowsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for workflows |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsFkGet**
> \Swagger\Client\Model\Workflow customersIdTeamsNkWorkflowsFkGet($id, $nk, $fk)

Find a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $result = $api_instance->customersIdTeamsNkWorkflowsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **fk** | **string**| Foreign key for workflows |

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsFkPut**
> \Swagger\Client\Model\Workflow customersIdTeamsNkWorkflowsFkPut($id, $nk, $fk, $data)

Update a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$fk = "fk_example"; // string | Foreign key for workflows
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->customersIdTeamsNkWorkflowsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
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

# **customersIdTeamsNkWorkflowsGet**
> \Swagger\Client\Model\Workflow[] customersIdTeamsNkWorkflowsGet($id, $nk, $filter)

Queries workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customersIdTeamsNkWorkflowsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsNkWorkflowsPost**
> \Swagger\Client\Model\Workflow customersIdTeamsNkWorkflowsPost($id, $nk, $data)

Creates a new instance in workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$nk = "nk_example"; // string | Foreign key for teams.
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->customersIdTeamsNkWorkflowsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsNkWorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **nk** | **string**| Foreign key for teams. |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsPost**
> \Swagger\Client\Model\Team customersIdTeamsPost($id, $data)

Creates a new instance in teams of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | 

try {
    $result = $api_instance->customersIdTeamsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsRelFkDelete**
> customersIdTeamsRelFkDelete($id, $fk)

Remove the teams relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams

try {
    $api_instance->customersIdTeamsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsRelFkHead**
> bool customersIdTeamsRelFkHead($id, $fk)

Check the existence of teams relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams

try {
    $result = $api_instance->customersIdTeamsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsRelFkPut**
> \Swagger\Client\Model\TeamMember customersIdTeamsRelFkPut($id, $fk, $data)

Add a related item by id for teams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for teams
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->customersIdTeamsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for teams |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsTeamIdChangePost**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdTeamsTeamIdChangePost($id, $id2, $teamId)

Move authentication to a Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$id2 = "id_example"; // string | Customer id
$teamId = "teamId_example"; // string | Team id

try {
    $result = $api_instance->customersIdTeamsTeamIdChangePost($id, $id2, $teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsTeamIdChangePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **id2** | **string**| Customer id |
 **teamId** | **string**| Team id |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTeamsTeamIdPortalsPortalIdChangePost**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdTeamsTeamIdPortalsPortalIdChangePost($id, $id2, $teamId, $portalId)

Move authentication to a Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$id2 = "id_example"; // string | Customer id
$teamId = "teamId_example"; // string | Team id
$portalId = "portalId_example"; // string | Portal id

try {
    $result = $api_instance->customersIdTeamsTeamIdPortalsPortalIdChangePost($id, $id2, $teamId, $portalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTeamsTeamIdPortalsPortalIdChangePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **id2** | **string**| Customer id |
 **teamId** | **string**| Team id |
 **portalId** | **string**| Portal id |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdTokenGet**
> \Swagger\Client\Model\TeamMemberAccessToken customersIdTokenGet($id, $id2)

Get token info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$id2 = "id_example"; // string | Customer id

try {
    $result = $api_instance->customersIdTokenGet($id, $id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **id2** | **string**| Customer id |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdVerifyPost**
> customersIdVerifyPost($id)

Trigger user's identity verification with configured verifyOptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customersIdVerifyPost($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdVerifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersInvitationTicketsTokenAcceptPost**
> \Swagger\Client\Model\InvitationTicket customersInvitationTicketsTokenAcceptPost($token, $data)

Accept invitation with token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$token = "token_example"; // string | Token describing invitation ticket
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Customer data in case new customer

try {
    $result = $api_instance->customersInvitationTicketsTokenAcceptPost($token, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersInvitationTicketsTokenAcceptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token describing invitation ticket |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Customer data in case new customer | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersInvitationTicketsTokenGet**
> \Swagger\Client\Model\InvitationTicket customersInvitationTicketsTokenGet($token)

Get invitation details with token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$token = "token_example"; // string | Token describing invitation ticket

try {
    $result = $api_instance->customersInvitationTicketsTokenGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersInvitationTicketsTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token describing invitation ticket |

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersLoginPost**
> object customersLoginPost($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$credentials = NULL; // object | 
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->customersLoginPost($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | **object**|  |
 **include** | **string**| Related objects to include in the response. See the description of return value for more details. | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersLogoutPost**
> customersLogoutPost()

Logout a user with access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();

try {
    $api_instance->customersLogoutPost();
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersLogoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersMeTokenGet**
> \Swagger\Client\Model\TeamMemberAccessToken customersMeTokenGet()

Get token info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();

try {
    $result = $api_instance->customersMeTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersMeTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersMeTokenRefreshGet**
> \Swagger\Client\Model\TeamMemberAccessToken customersMeTokenRefreshGet($refreshToken)

Refresh current access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$refreshToken = "refreshToken_example"; // string | AccessToken refreshToken

try {
    $result = $api_instance->customersMeTokenRefreshGet($refreshToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersMeTokenRefreshGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refreshToken** | **string**| AccessToken refreshToken |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPost**
> \Swagger\Client\Model\Customer customersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersRegisterPost**
> \Swagger\Client\Model\TeamMember customersRegisterPost($data)

Create customer and assign it to a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customersRegisterPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersRegisterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersResetPasswordPost**
> customersResetPasswordPost($newPassword)

Reset user's password via a password-reset token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$newPassword = "newPassword_example"; // string | 

try {
    $api_instance->customersResetPasswordPost($newPassword);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersResetPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **newPassword** | **string**|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersResetPasswordTokenGet**
> \Swagger\Client\Model\TeamMemberAccessToken customersResetPasswordTokenGet($token)

Get token info for reset password token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$token = "token_example"; // string | Reset password access token

try {
    $result = $api_instance->customersResetPasswordTokenGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersResetPasswordTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Reset password access token |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersResetPost**
> customersResetPost($options)

Reset password for a user with email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = NULL; // object | 

try {
    $api_instance->customersResetPost($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersResetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **object**|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

