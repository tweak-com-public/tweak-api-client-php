# Tweak\Api\TeamApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamsChangeStreamGet**](TeamApi.md#teamsChangeStreamGet) | **GET** /Teams/change-stream | Create a change stream.
[**teamsChangeStreamPost**](TeamApi.md#teamsChangeStreamPost) | **POST** /Teams/change-stream | Create a change stream.
[**teamsCountGet**](TeamApi.md#teamsCountGet) | **GET** /Teams/count | Count instances of the model matched by where from the data source.
[**teamsFindOneGet**](TeamApi.md#teamsFindOneGet) | **GET** /Teams/findOne | Find first instance of the model matched by filter from the data source.
[**teamsGet**](TeamApi.md#teamsGet) | **GET** /Teams | Find all instances of the model matched by filter from the data source.
[**teamsIdBillingDelete**](TeamApi.md#teamsIdBillingDelete) | **DELETE** /Teams/{id}/billing | Deletes billing of this model.
[**teamsIdBillingGet**](TeamApi.md#teamsIdBillingGet) | **GET** /Teams/{id}/billing | Fetches hasOne relation billing.
[**teamsIdBillingPost**](TeamApi.md#teamsIdBillingPost) | **POST** /Teams/{id}/billing | Creates a new instance in billing of this model.
[**teamsIdBillingPut**](TeamApi.md#teamsIdBillingPut) | **PUT** /Teams/{id}/billing | Update billing of this model.
[**teamsIdBrandDelete**](TeamApi.md#teamsIdBrandDelete) | **DELETE** /Teams/{id}/brand | Deletes brand of this model.
[**teamsIdBrandGet**](TeamApi.md#teamsIdBrandGet) | **GET** /Teams/{id}/brand | Fetches hasOne relation brand.
[**teamsIdBrandPost**](TeamApi.md#teamsIdBrandPost) | **POST** /Teams/{id}/brand | Creates a new instance in brand of this model.
[**teamsIdBrandPut**](TeamApi.md#teamsIdBrandPut) | **PUT** /Teams/{id}/brand | Update brand of this model.
[**teamsIdDataSourcesCountGet**](TeamApi.md#teamsIdDataSourcesCountGet) | **GET** /Teams/{id}/dataSources/count | Counts dataSources of Team.
[**teamsIdDataSourcesDelete**](TeamApi.md#teamsIdDataSourcesDelete) | **DELETE** /Teams/{id}/dataSources | Deletes all dataSources of this model.
[**teamsIdDataSourcesFkDelete**](TeamApi.md#teamsIdDataSourcesFkDelete) | **DELETE** /Teams/{id}/dataSources/{fk} | Delete a related item by id for dataSources.
[**teamsIdDataSourcesFkGet**](TeamApi.md#teamsIdDataSourcesFkGet) | **GET** /Teams/{id}/dataSources/{fk} | Find a related item by id for dataSources.
[**teamsIdDataSourcesFkPut**](TeamApi.md#teamsIdDataSourcesFkPut) | **PUT** /Teams/{id}/dataSources/{fk} | Update a related item by id for dataSources.
[**teamsIdDataSourcesGet**](TeamApi.md#teamsIdDataSourcesGet) | **GET** /Teams/{id}/dataSources | Queries dataSources of Team.
[**teamsIdDataSourcesPost**](TeamApi.md#teamsIdDataSourcesPost) | **POST** /Teams/{id}/dataSources | Creates a new instance in dataSources of this model.
[**teamsIdDelete**](TeamApi.md#teamsIdDelete) | **DELETE** /Teams/{id} | Delete a model instance by {{id}} from the data source.
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
[**teamsIdImageFoldersNkChildrenDelete**](TeamApi.md#teamsIdImageFoldersNkChildrenDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/children | Deletes all children of this model.
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
[**teamsIdImageFoldersNkImagesDelete**](TeamApi.md#teamsIdImageFoldersNkImagesDelete) | **DELETE** /Teams/{id}/imageFolders/{nk}/images | Deletes all images of this model.
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
[**teamsIdPortalsNkDesignFoldersCountGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersCountGet) | **GET** /Teams/{id}/portals/{nk}/designFolders/count | Counts designFolders of Portal.
[**teamsIdPortalsNkDesignFoldersDelete**](TeamApi.md#teamsIdPortalsNkDesignFoldersDelete) | **DELETE** /Teams/{id}/portals/{nk}/designFolders | Deletes all designFolders of this model.
[**teamsIdPortalsNkDesignFoldersFkDelete**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkDelete) | **DELETE** /Teams/{id}/portals/{nk}/designFolders/{fk} | Delete a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersFkGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkGet) | **GET** /Teams/{id}/portals/{nk}/designFolders/{fk} | Find a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersFkPut**](TeamApi.md#teamsIdPortalsNkDesignFoldersFkPut) | **PUT** /Teams/{id}/portals/{nk}/designFolders/{fk} | Update a related item by id for designFolders.
[**teamsIdPortalsNkDesignFoldersGet**](TeamApi.md#teamsIdPortalsNkDesignFoldersGet) | **GET** /Teams/{id}/portals/{nk}/designFolders | Queries designFolders of Portal.
[**teamsIdPortalsNkDesignFoldersPost**](TeamApi.md#teamsIdPortalsNkDesignFoldersPost) | **POST** /Teams/{id}/portals/{nk}/designFolders | Creates a new instance in designFolders of this model.
[**teamsIdPortalsNkDesignsCountGet**](TeamApi.md#teamsIdPortalsNkDesignsCountGet) | **GET** /Teams/{id}/portals/{nk}/designs/count | Counts designs of Portal.
[**teamsIdPortalsNkDesignsDelete**](TeamApi.md#teamsIdPortalsNkDesignsDelete) | **DELETE** /Teams/{id}/portals/{nk}/designs | Deletes all designs of this model.
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
[**teamsIdPut**](TeamApi.md#teamsIdPut) | **PUT** /Teams/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamsIdReplacePost**](TeamApi.md#teamsIdReplacePost) | **POST** /Teams/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamsIdTeamMembersCountGet**](TeamApi.md#teamsIdTeamMembersCountGet) | **GET** /Teams/{id}/teamMembers/count | Counts teamMembers of Team.
[**teamsIdTeamMembersDelete**](TeamApi.md#teamsIdTeamMembersDelete) | **DELETE** /Teams/{id}/teamMembers | Deletes all teamMembers of this model.
[**teamsIdTeamMembersFkDelete**](TeamApi.md#teamsIdTeamMembersFkDelete) | **DELETE** /Teams/{id}/teamMembers/{fk} | Delete a related item by id for teamMembers.
[**teamsIdTeamMembersFkGet**](TeamApi.md#teamsIdTeamMembersFkGet) | **GET** /Teams/{id}/teamMembers/{fk} | Find a related item by id for teamMembers.
[**teamsIdTeamMembersFkPut**](TeamApi.md#teamsIdTeamMembersFkPut) | **PUT** /Teams/{id}/teamMembers/{fk} | Update a related item by id for teamMembers.
[**teamsIdTeamMembersGet**](TeamApi.md#teamsIdTeamMembersGet) | **GET** /Teams/{id}/teamMembers | Queries teamMembers of Team.
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
[**teamsIdTemplatesNkDesignsDelete**](TeamApi.md#teamsIdTemplatesNkDesignsDelete) | **DELETE** /Teams/{id}/templates/{nk}/designs | Deletes all designs of this model.
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
[**teamsPatch**](TeamApi.md#teamsPatch) | **PATCH** /Teams | Patch an existing model instance or insert a new one into the data source.
[**teamsPost**](TeamApi.md#teamsPost) | **POST** /Teams | Create a new instance of the model and persist it into the data source.
[**teamsPut**](TeamApi.md#teamsPut) | **PUT** /Teams | Replace an existing model instance or insert a new one into the data source.
[**teamsReplaceOrCreatePost**](TeamApi.md#teamsReplaceOrCreatePost) | **POST** /Teams/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamsSubdomainSubdomainExistsGet**](TeamApi.md#teamsSubdomainSubdomainExistsGet) | **GET** /Teams/subdomain/{subdomain}/exists | Define whether team exists or not
[**teamsUpdatePost**](TeamApi.md#teamsUpdatePost) | **POST** /Teams/update | Update instances of the model matched by {{where}} from the data source.
[**teamsUpsertWithWherePost**](TeamApi.md#teamsUpsertWithWherePost) | **POST** /Teams/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


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
> \Swagger\Client\Model\InlineResponse200 teamsCountGet($where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

# **teamsIdBillingDelete**
> teamsIdBillingDelete($id)

Deletes billing of this model.

### Example
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
    $api_instance->teamsIdBillingDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBillingDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamsIdBillingGet**
> \Swagger\Client\Model\Billing teamsIdBillingGet($id, $refresh)

Fetches hasOne relation billing.

### Example
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
    $result = $api_instance->teamsIdBillingGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBillingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBillingPost**
> \Swagger\Client\Model\Billing teamsIdBillingPost($id, $data)

Creates a new instance in billing of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Billing(); // \Swagger\Client\Model\Billing | 

try {
    $result = $api_instance->teamsIdBillingPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBillingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Billing**](../Model/\Swagger\Client\Model\Billing.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdBillingPut**
> \Swagger\Client\Model\Billing teamsIdBillingPut($id, $data)

Update billing of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\Billing(); // \Swagger\Client\Model\Billing | 

try {
    $result = $api_instance->teamsIdBillingPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdBillingPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\Billing**](../Model/\Swagger\Client\Model\Billing.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

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

# **teamsIdDataSourcesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamsIdDataSourcesCountGet($id, $where)

Counts dataSources of Team.

### Example
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
    $result = $api_instance->teamsIdDataSourcesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourcesDelete**
> teamsIdDataSourcesDelete($id)

Deletes all dataSources of this model.

### Example
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
    $api_instance->teamsIdDataSourcesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamsIdDataSourcesFkDelete**
> teamsIdDataSourcesFkDelete($id, $fk)

Delete a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSources

try {
    $api_instance->teamsIdDataSourcesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSources |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourcesFkGet**
> \Swagger\Client\Model\DataSource teamsIdDataSourcesFkGet($id, $fk)

Find a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSources

try {
    $result = $api_instance->teamsIdDataSourcesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSources |

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourcesFkPut**
> \Swagger\Client\Model\DataSource teamsIdDataSourcesFkPut($id, $fk, $data)

Update a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$fk = "fk_example"; // string | Foreign key for dataSources
$data = new \Swagger\Client\Model\DataSource(); // \Swagger\Client\Model\DataSource | 

try {
    $result = $api_instance->teamsIdDataSourcesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **fk** | **string**| Foreign key for dataSources |
 **data** | [**\Swagger\Client\Model\DataSource**](../Model/\Swagger\Client\Model\DataSource.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourcesGet**
> \Swagger\Client\Model\DataSource[] teamsIdDataSourcesGet($id, $filter)

Queries dataSources of Team.

### Example
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
    $result = $api_instance->teamsIdDataSourcesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource[]**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdDataSourcesPost**
> \Swagger\Client\Model\DataSource teamsIdDataSourcesPost($id, $data)

Creates a new instance in dataSources of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamApi();
$id = "id_example"; // string | Team id
$data = new \Swagger\Client\Model\DataSource(); // \Swagger\Client\Model\DataSource | 

try {
    $result = $api_instance->teamsIdDataSourcesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdDataSourcesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Team id |
 **data** | [**\Swagger\Client\Model\DataSource**](../Model/\Swagger\Client\Model\DataSource.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

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

# **teamsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 teamsIdExistsGet($id)

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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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
> \Swagger\Client\Model\InlineResponse2001 teamsIdHead($id)

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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersNkChildrenCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkChildrenDelete**
> teamsIdImageFoldersNkChildrenDelete($id, $nk)

Deletes all children of this model.

### Example
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
    $api_instance->teamsIdImageFoldersNkChildrenDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkChildrenDelete: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersNkFolderMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersNkImagesCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdImageFoldersNkImagesDelete**
> teamsIdImageFoldersNkImagesDelete($id, $nk)

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
$nk = "nk_example"; // string | Foreign key for imageFolders.

try {
    $api_instance->teamsIdImageFoldersNkImagesDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdImageFoldersNkImagesDelete: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersNkMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdImageFoldersNkPortalsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdImagesCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdMembersCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

# **teamsIdPortalsNkDesignFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkDesignFoldersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkDesignsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdPortalsNkDesignsDelete**
> teamsIdPortalsNkDesignsDelete($id, $nk)

Deletes all designs of this model.

### Example
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
    $api_instance->teamsIdPortalsNkDesignsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdPortalsNkDesignsDelete: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkImageFoldersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkPortalMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkTemplateFoldersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkTemplateRelsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdPortalsNkTemplatesCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

# **teamsIdTeamMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamsIdTeamMembersCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplateFoldersCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkDesignsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsIdTemplatesNkDesignsDelete**
> teamsIdTemplatesNkDesignsDelete($id, $nk)

Deletes all designs of this model.

### Example
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
    $api_instance->teamsIdTemplatesNkDesignsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsIdTemplatesNkDesignsDelete: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkPortalFoldersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkPortalsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkTagsCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdTemplatesNkTemplateMembersCountGet($id, $nk, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse200 teamsIdWorkflowsCountGet($id, $where)

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

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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
> \Swagger\Client\Model\InlineResponse2001 teamsNameNameExistsGet($name)

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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsPatch**
> \Swagger\Client\Model\Team teamsPatch($data)

Patch an existing model instance or insert a new one into the data source.

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
    $result = $api_instance->teamsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsPatch: ', $e->getMessage(), PHP_EOL;
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

# **teamsPut**
> \Swagger\Client\Model\Team teamsPut($data)

Replace an existing model instance or insert a new one into the data source.

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
    $result = $api_instance->teamsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsPut: ', $e->getMessage(), PHP_EOL;
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

# **teamsReplaceOrCreatePost**
> \Swagger\Client\Model\Team teamsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

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
    $result = $api_instance->teamsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
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
> \Swagger\Client\Model\InlineResponse2001 teamsSubdomainSubdomainExistsGet($subdomain)

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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 teamsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

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
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | An object of model property name/value pairs

try {
    $result = $api_instance->teamsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamsUpsertWithWherePost**
> \Swagger\Client\Model\Team teamsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

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
$data = new \Swagger\Client\Model\Team(); // \Swagger\Client\Model\Team | An object of model property name/value pairs

try {
    $result = $api_instance->teamsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Team**](../Model/\Swagger\Client\Model\Team.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

