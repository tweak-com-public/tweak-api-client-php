# Tweak\Api\PortalApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalsChangeStreamGet**](PortalApi.md#portalsChangeStreamGet) | **GET** /Portals/change-stream | Create a change stream.
[**portalsChangeStreamPost**](PortalApi.md#portalsChangeStreamPost) | **POST** /Portals/change-stream | Create a change stream.
[**portalsCountGet**](PortalApi.md#portalsCountGet) | **GET** /Portals/count | Count instances of the model matched by where from the data source.
[**portalsFindOneGet**](PortalApi.md#portalsFindOneGet) | **GET** /Portals/findOne | Find first instance of the model matched by filter from the data source.
[**portalsGet**](PortalApi.md#portalsGet) | **GET** /Portals | Find all instances of the model matched by filter from the data source.
[**portalsIdDelete**](PortalApi.md#portalsIdDelete) | **DELETE** /Portals/{id} | Delete a model instance by {{id}} from the data source.
[**portalsIdDesignFoldersCountGet**](PortalApi.md#portalsIdDesignFoldersCountGet) | **GET** /Portals/{id}/designFolders/count | Counts designFolders of Portal.
[**portalsIdDesignFoldersDelete**](PortalApi.md#portalsIdDesignFoldersDelete) | **DELETE** /Portals/{id}/designFolders | Deletes all designFolders of this model.
[**portalsIdDesignFoldersFkDelete**](PortalApi.md#portalsIdDesignFoldersFkDelete) | **DELETE** /Portals/{id}/designFolders/{fk} | Delete a related item by id for designFolders.
[**portalsIdDesignFoldersFkGet**](PortalApi.md#portalsIdDesignFoldersFkGet) | **GET** /Portals/{id}/designFolders/{fk} | Find a related item by id for designFolders.
[**portalsIdDesignFoldersFkPut**](PortalApi.md#portalsIdDesignFoldersFkPut) | **PUT** /Portals/{id}/designFolders/{fk} | Update a related item by id for designFolders.
[**portalsIdDesignFoldersGet**](PortalApi.md#portalsIdDesignFoldersGet) | **GET** /Portals/{id}/designFolders | Queries designFolders of Portal.
[**portalsIdDesignFoldersPost**](PortalApi.md#portalsIdDesignFoldersPost) | **POST** /Portals/{id}/designFolders | Creates a new instance in designFolders of this model.
[**portalsIdDesignsCountGet**](PortalApi.md#portalsIdDesignsCountGet) | **GET** /Portals/{id}/designs/count | Counts designs of Portal.
[**portalsIdDesignsDelete**](PortalApi.md#portalsIdDesignsDelete) | **DELETE** /Portals/{id}/designs | Deletes all designs of this model.
[**portalsIdDesignsFkDelete**](PortalApi.md#portalsIdDesignsFkDelete) | **DELETE** /Portals/{id}/designs/{fk} | Delete a related item by id for designs.
[**portalsIdDesignsFkGet**](PortalApi.md#portalsIdDesignsFkGet) | **GET** /Portals/{id}/designs/{fk} | Find a related item by id for designs.
[**portalsIdDesignsFkPut**](PortalApi.md#portalsIdDesignsFkPut) | **PUT** /Portals/{id}/designs/{fk} | Update a related item by id for designs.
[**portalsIdDesignsGet**](PortalApi.md#portalsIdDesignsGet) | **GET** /Portals/{id}/designs | Queries designs of Portal.
[**portalsIdDesignsNkAssigneeGet**](PortalApi.md#portalsIdDesignsNkAssigneeGet) | **GET** /Portals/{id}/designs/{nk}/assignee | Fetches belongsTo relation assignee.
[**portalsIdDesignsNkCommentersCountGet**](PortalApi.md#portalsIdDesignsNkCommentersCountGet) | **GET** /Portals/{id}/designs/{nk}/commenters/count | Counts commenters of Design.
[**portalsIdDesignsNkCommentersDelete**](PortalApi.md#portalsIdDesignsNkCommentersDelete) | **DELETE** /Portals/{id}/designs/{nk}/commenters | Deletes all commenters of this model.
[**portalsIdDesignsNkCommentersFkDelete**](PortalApi.md#portalsIdDesignsNkCommentersFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/commenters/{fk} | Delete a related item by id for commenters.
[**portalsIdDesignsNkCommentersFkGet**](PortalApi.md#portalsIdDesignsNkCommentersFkGet) | **GET** /Portals/{id}/designs/{nk}/commenters/{fk} | Find a related item by id for commenters.
[**portalsIdDesignsNkCommentersFkPut**](PortalApi.md#portalsIdDesignsNkCommentersFkPut) | **PUT** /Portals/{id}/designs/{nk}/commenters/{fk} | Update a related item by id for commenters.
[**portalsIdDesignsNkCommentersGet**](PortalApi.md#portalsIdDesignsNkCommentersGet) | **GET** /Portals/{id}/designs/{nk}/commenters | Queries commenters of Design.
[**portalsIdDesignsNkCommentersPost**](PortalApi.md#portalsIdDesignsNkCommentersPost) | **POST** /Portals/{id}/designs/{nk}/commenters | Creates a new instance in commenters of this model.
[**portalsIdDesignsNkCommentersRelFkDelete**](PortalApi.md#portalsIdDesignsNkCommentersRelFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/commenters/rel/{fk} | Remove the commenters relation to an item by id.
[**portalsIdDesignsNkCommentersRelFkHead**](PortalApi.md#portalsIdDesignsNkCommentersRelFkHead) | **HEAD** /Portals/{id}/designs/{nk}/commenters/rel/{fk} | Check the existence of commenters relation to an item by id.
[**portalsIdDesignsNkCommentersRelFkPut**](PortalApi.md#portalsIdDesignsNkCommentersRelFkPut) | **PUT** /Portals/{id}/designs/{nk}/commenters/rel/{fk} | Add a related item by id for commenters.
[**portalsIdDesignsNkCommentsCountGet**](PortalApi.md#portalsIdDesignsNkCommentsCountGet) | **GET** /Portals/{id}/designs/{nk}/comments/count | Counts comments of Design.
[**portalsIdDesignsNkCommentsDelete**](PortalApi.md#portalsIdDesignsNkCommentsDelete) | **DELETE** /Portals/{id}/designs/{nk}/comments | Deletes all comments of this model.
[**portalsIdDesignsNkCommentsFkDelete**](PortalApi.md#portalsIdDesignsNkCommentsFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/comments/{fk} | Delete a related item by id for comments.
[**portalsIdDesignsNkCommentsFkGet**](PortalApi.md#portalsIdDesignsNkCommentsFkGet) | **GET** /Portals/{id}/designs/{nk}/comments/{fk} | Find a related item by id for comments.
[**portalsIdDesignsNkCommentsFkPut**](PortalApi.md#portalsIdDesignsNkCommentsFkPut) | **PUT** /Portals/{id}/designs/{nk}/comments/{fk} | Update a related item by id for comments.
[**portalsIdDesignsNkCommentsGet**](PortalApi.md#portalsIdDesignsNkCommentsGet) | **GET** /Portals/{id}/designs/{nk}/comments | Queries comments of Design.
[**portalsIdDesignsNkCommentsPost**](PortalApi.md#portalsIdDesignsNkCommentsPost) | **POST** /Portals/{id}/designs/{nk}/comments | Creates a new instance in comments of this model.
[**portalsIdDesignsNkDesignMembersCountGet**](PortalApi.md#portalsIdDesignsNkDesignMembersCountGet) | **GET** /Portals/{id}/designs/{nk}/designMembers/count | Counts designMembers of Design.
[**portalsIdDesignsNkDesignMembersDelete**](PortalApi.md#portalsIdDesignsNkDesignMembersDelete) | **DELETE** /Portals/{id}/designs/{nk}/designMembers | Deletes all designMembers of this model.
[**portalsIdDesignsNkDesignMembersFkDelete**](PortalApi.md#portalsIdDesignsNkDesignMembersFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/designMembers/{fk} | Delete a related item by id for designMembers.
[**portalsIdDesignsNkDesignMembersFkGet**](PortalApi.md#portalsIdDesignsNkDesignMembersFkGet) | **GET** /Portals/{id}/designs/{nk}/designMembers/{fk} | Find a related item by id for designMembers.
[**portalsIdDesignsNkDesignMembersFkPut**](PortalApi.md#portalsIdDesignsNkDesignMembersFkPut) | **PUT** /Portals/{id}/designs/{nk}/designMembers/{fk} | Update a related item by id for designMembers.
[**portalsIdDesignsNkDesignMembersGet**](PortalApi.md#portalsIdDesignsNkDesignMembersGet) | **GET** /Portals/{id}/designs/{nk}/designMembers | Queries designMembers of Design.
[**portalsIdDesignsNkDesignMembersPost**](PortalApi.md#portalsIdDesignsNkDesignMembersPost) | **POST** /Portals/{id}/designs/{nk}/designMembers | Creates a new instance in designMembers of this model.
[**portalsIdDesignsNkDynamicDataGet**](PortalApi.md#portalsIdDesignsNkDynamicDataGet) | **GET** /Portals/{id}/designs/{nk}/dynamicData | Fetches belongsTo relation dynamicData.
[**portalsIdDesignsNkExportsCountGet**](PortalApi.md#portalsIdDesignsNkExportsCountGet) | **GET** /Portals/{id}/designs/{nk}/exports/count | Counts exports of Design.
[**portalsIdDesignsNkExportsDelete**](PortalApi.md#portalsIdDesignsNkExportsDelete) | **DELETE** /Portals/{id}/designs/{nk}/exports | Deletes all exports of this model.
[**portalsIdDesignsNkExportsFkDelete**](PortalApi.md#portalsIdDesignsNkExportsFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/exports/{fk} | Delete a related item by id for exports.
[**portalsIdDesignsNkExportsFkGet**](PortalApi.md#portalsIdDesignsNkExportsFkGet) | **GET** /Portals/{id}/designs/{nk}/exports/{fk} | Find a related item by id for exports.
[**portalsIdDesignsNkExportsFkPut**](PortalApi.md#portalsIdDesignsNkExportsFkPut) | **PUT** /Portals/{id}/designs/{nk}/exports/{fk} | Update a related item by id for exports.
[**portalsIdDesignsNkExportsGet**](PortalApi.md#portalsIdDesignsNkExportsGet) | **GET** /Portals/{id}/designs/{nk}/exports | Queries exports of Design.
[**portalsIdDesignsNkExportsPost**](PortalApi.md#portalsIdDesignsNkExportsPost) | **POST** /Portals/{id}/designs/{nk}/exports | Creates a new instance in exports of this model.
[**portalsIdDesignsNkFolderGet**](PortalApi.md#portalsIdDesignsNkFolderGet) | **GET** /Portals/{id}/designs/{nk}/folder | Fetches belongsTo relation folder.
[**portalsIdDesignsNkMembersCountGet**](PortalApi.md#portalsIdDesignsNkMembersCountGet) | **GET** /Portals/{id}/designs/{nk}/members/count | Counts members of Design.
[**portalsIdDesignsNkMembersDelete**](PortalApi.md#portalsIdDesignsNkMembersDelete) | **DELETE** /Portals/{id}/designs/{nk}/members | Deletes all members of this model.
[**portalsIdDesignsNkMembersFkDelete**](PortalApi.md#portalsIdDesignsNkMembersFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/members/{fk} | Delete a related item by id for members.
[**portalsIdDesignsNkMembersFkGet**](PortalApi.md#portalsIdDesignsNkMembersFkGet) | **GET** /Portals/{id}/designs/{nk}/members/{fk} | Find a related item by id for members.
[**portalsIdDesignsNkMembersFkPut**](PortalApi.md#portalsIdDesignsNkMembersFkPut) | **PUT** /Portals/{id}/designs/{nk}/members/{fk} | Update a related item by id for members.
[**portalsIdDesignsNkMembersGet**](PortalApi.md#portalsIdDesignsNkMembersGet) | **GET** /Portals/{id}/designs/{nk}/members | Queries members of Design.
[**portalsIdDesignsNkMembersPost**](PortalApi.md#portalsIdDesignsNkMembersPost) | **POST** /Portals/{id}/designs/{nk}/members | Creates a new instance in members of this model.
[**portalsIdDesignsNkMembersRelFkDelete**](PortalApi.md#portalsIdDesignsNkMembersRelFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/members/rel/{fk} | Remove the members relation to an item by id.
[**portalsIdDesignsNkMembersRelFkHead**](PortalApi.md#portalsIdDesignsNkMembersRelFkHead) | **HEAD** /Portals/{id}/designs/{nk}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**portalsIdDesignsNkMembersRelFkPut**](PortalApi.md#portalsIdDesignsNkMembersRelFkPut) | **PUT** /Portals/{id}/designs/{nk}/members/rel/{fk} | Add a related item by id for members.
[**portalsIdDesignsNkPermissionDelete**](PortalApi.md#portalsIdDesignsNkPermissionDelete) | **DELETE** /Portals/{id}/designs/{nk}/permission | Deletes permission of this model.
[**portalsIdDesignsNkPermissionGet**](PortalApi.md#portalsIdDesignsNkPermissionGet) | **GET** /Portals/{id}/designs/{nk}/permission | Fetches hasOne relation permission.
[**portalsIdDesignsNkPermissionPost**](PortalApi.md#portalsIdDesignsNkPermissionPost) | **POST** /Portals/{id}/designs/{nk}/permission | Creates a new instance in permission of this model.
[**portalsIdDesignsNkPermissionPut**](PortalApi.md#portalsIdDesignsNkPermissionPut) | **PUT** /Portals/{id}/designs/{nk}/permission | Update permission of this model.
[**portalsIdDesignsNkPortalGet**](PortalApi.md#portalsIdDesignsNkPortalGet) | **GET** /Portals/{id}/designs/{nk}/portal | Fetches belongsTo relation portal.
[**portalsIdDesignsNkRejectionCommentGet**](PortalApi.md#portalsIdDesignsNkRejectionCommentGet) | **GET** /Portals/{id}/designs/{nk}/rejectionComment | Fetches belongsTo relation rejectionComment.
[**portalsIdDesignsNkRequesterGet**](PortalApi.md#portalsIdDesignsNkRequesterGet) | **GET** /Portals/{id}/designs/{nk}/requester | Fetches belongsTo relation requester.
[**portalsIdDesignsNkReviewerGet**](PortalApi.md#portalsIdDesignsNkReviewerGet) | **GET** /Portals/{id}/designs/{nk}/reviewer | Fetches belongsTo relation reviewer.
[**portalsIdDesignsNkTagsCountGet**](PortalApi.md#portalsIdDesignsNkTagsCountGet) | **GET** /Portals/{id}/designs/{nk}/tags/count | Counts tags of Design.
[**portalsIdDesignsNkTagsDelete**](PortalApi.md#portalsIdDesignsNkTagsDelete) | **DELETE** /Portals/{id}/designs/{nk}/tags | Deletes all tags of this model.
[**portalsIdDesignsNkTagsFkDelete**](PortalApi.md#portalsIdDesignsNkTagsFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/tags/{fk} | Delete a related item by id for tags.
[**portalsIdDesignsNkTagsFkGet**](PortalApi.md#portalsIdDesignsNkTagsFkGet) | **GET** /Portals/{id}/designs/{nk}/tags/{fk} | Find a related item by id for tags.
[**portalsIdDesignsNkTagsFkPut**](PortalApi.md#portalsIdDesignsNkTagsFkPut) | **PUT** /Portals/{id}/designs/{nk}/tags/{fk} | Update a related item by id for tags.
[**portalsIdDesignsNkTagsGet**](PortalApi.md#portalsIdDesignsNkTagsGet) | **GET** /Portals/{id}/designs/{nk}/tags | Queries tags of Design.
[**portalsIdDesignsNkTagsPost**](PortalApi.md#portalsIdDesignsNkTagsPost) | **POST** /Portals/{id}/designs/{nk}/tags | Creates a new instance in tags of this model.
[**portalsIdDesignsNkTagsRelFkDelete**](PortalApi.md#portalsIdDesignsNkTagsRelFkDelete) | **DELETE** /Portals/{id}/designs/{nk}/tags/rel/{fk} | Remove the tags relation to an item by id.
[**portalsIdDesignsNkTagsRelFkHead**](PortalApi.md#portalsIdDesignsNkTagsRelFkHead) | **HEAD** /Portals/{id}/designs/{nk}/tags/rel/{fk} | Check the existence of tags relation to an item by id.
[**portalsIdDesignsNkTagsRelFkPut**](PortalApi.md#portalsIdDesignsNkTagsRelFkPut) | **PUT** /Portals/{id}/designs/{nk}/tags/rel/{fk} | Add a related item by id for tags.
[**portalsIdDesignsNkTeamGet**](PortalApi.md#portalsIdDesignsNkTeamGet) | **GET** /Portals/{id}/designs/{nk}/team | Fetches belongsTo relation team.
[**portalsIdDesignsNkTemplateGet**](PortalApi.md#portalsIdDesignsNkTemplateGet) | **GET** /Portals/{id}/designs/{nk}/template | Fetches belongsTo relation template.
[**portalsIdDesignsPost**](PortalApi.md#portalsIdDesignsPost) | **POST** /Portals/{id}/designs | Creates a new instance in designs of this model.
[**portalsIdExistsGet**](PortalApi.md#portalsIdExistsGet) | **GET** /Portals/{id}/exists | Check whether a model instance exists in the data source.
[**portalsIdGet**](PortalApi.md#portalsIdGet) | **GET** /Portals/{id} | Find a model instance by {{id}} from the data source.
[**portalsIdHead**](PortalApi.md#portalsIdHead) | **HEAD** /Portals/{id} | Check whether a model instance exists in the data source.
[**portalsIdImageFoldersCountGet**](PortalApi.md#portalsIdImageFoldersCountGet) | **GET** /Portals/{id}/imageFolders/count | Counts imageFolders of Portal.
[**portalsIdImageFoldersDelete**](PortalApi.md#portalsIdImageFoldersDelete) | **DELETE** /Portals/{id}/imageFolders | Deletes all imageFolders of this model.
[**portalsIdImageFoldersFkDelete**](PortalApi.md#portalsIdImageFoldersFkDelete) | **DELETE** /Portals/{id}/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**portalsIdImageFoldersFkGet**](PortalApi.md#portalsIdImageFoldersFkGet) | **GET** /Portals/{id}/imageFolders/{fk} | Find a related item by id for imageFolders.
[**portalsIdImageFoldersFkPut**](PortalApi.md#portalsIdImageFoldersFkPut) | **PUT** /Portals/{id}/imageFolders/{fk} | Update a related item by id for imageFolders.
[**portalsIdImageFoldersGet**](PortalApi.md#portalsIdImageFoldersGet) | **GET** /Portals/{id}/imageFolders | Queries imageFolders of Portal.
[**portalsIdImageFoldersPost**](PortalApi.md#portalsIdImageFoldersPost) | **POST** /Portals/{id}/imageFolders | Creates a new instance in imageFolders of this model.
[**portalsIdImageFoldersRelFkDelete**](PortalApi.md#portalsIdImageFoldersRelFkDelete) | **DELETE** /Portals/{id}/imageFolders/rel/{fk} | Remove the imageFolders relation to an item by id.
[**portalsIdImageFoldersRelFkHead**](PortalApi.md#portalsIdImageFoldersRelFkHead) | **HEAD** /Portals/{id}/imageFolders/rel/{fk} | Check the existence of imageFolders relation to an item by id.
[**portalsIdImageFoldersRelFkPut**](PortalApi.md#portalsIdImageFoldersRelFkPut) | **PUT** /Portals/{id}/imageFolders/rel/{fk} | Add a related item by id for imageFolders.
[**portalsIdInvitationTicketsFkDelete**](PortalApi.md#portalsIdInvitationTicketsFkDelete) | **DELETE** /Portals/{id}/invitationTickets/{fk} | Delete InvitationTickets for this Portal
[**portalsIdInvitationTicketsFkGet**](PortalApi.md#portalsIdInvitationTicketsFkGet) | **GET** /Portals/{id}/invitationTickets/{fk} | Get InvitationTicket by Id for this Portal
[**portalsIdInvitationTicketsGet**](PortalApi.md#portalsIdInvitationTicketsGet) | **GET** /Portals/{id}/invitationTickets | List InvitationTickets for this Portal
[**portalsIdLogoPut**](PortalApi.md#portalsIdLogoPut) | **PUT** /Portals/{id}/logo | Change logo
[**portalsIdMembersCountGet**](PortalApi.md#portalsIdMembersCountGet) | **GET** /Portals/{id}/members/count | Counts members of Portal.
[**portalsIdMembersDelete**](PortalApi.md#portalsIdMembersDelete) | **DELETE** /Portals/{id}/members | Deletes all members of this model.
[**portalsIdMembersFkDelete**](PortalApi.md#portalsIdMembersFkDelete) | **DELETE** /Portals/{id}/members/{fk} | Delete a related item by id for members.
[**portalsIdMembersFkGet**](PortalApi.md#portalsIdMembersFkGet) | **GET** /Portals/{id}/members/{fk} | Find a related item by id for members.
[**portalsIdMembersFkPut**](PortalApi.md#portalsIdMembersFkPut) | **PUT** /Portals/{id}/members/{fk} | Update a related item by id for members.
[**portalsIdMembersGet**](PortalApi.md#portalsIdMembersGet) | **GET** /Portals/{id}/members | Queries members of Portal.
[**portalsIdMembersPost**](PortalApi.md#portalsIdMembersPost) | **POST** /Portals/{id}/members | Creates a new instance in members of this model.
[**portalsIdMembersRelFkDelete**](PortalApi.md#portalsIdMembersRelFkDelete) | **DELETE** /Portals/{id}/members/rel/{fk} | Remove the members relation to an item by id.
[**portalsIdMembersRelFkHead**](PortalApi.md#portalsIdMembersRelFkHead) | **HEAD** /Portals/{id}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**portalsIdMembersRelFkPut**](PortalApi.md#portalsIdMembersRelFkPut) | **PUT** /Portals/{id}/members/rel/{fk} | Add a related item by id for members.
[**portalsIdPatch**](PortalApi.md#portalsIdPatch) | **PATCH** /Portals/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalsIdPermissionDelete**](PortalApi.md#portalsIdPermissionDelete) | **DELETE** /Portals/{id}/permission | Deletes permission of this model.
[**portalsIdPermissionGet**](PortalApi.md#portalsIdPermissionGet) | **GET** /Portals/{id}/permission | Fetches hasOne relation permission.
[**portalsIdPermissionPost**](PortalApi.md#portalsIdPermissionPost) | **POST** /Portals/{id}/permission | Creates a new instance in permission of this model.
[**portalsIdPermissionPut**](PortalApi.md#portalsIdPermissionPut) | **PUT** /Portals/{id}/permission | Update permission of this model.
[**portalsIdPortalMembersCountGet**](PortalApi.md#portalsIdPortalMembersCountGet) | **GET** /Portals/{id}/portalMembers/count | Counts portalMembers of Portal.
[**portalsIdPortalMembersDelete**](PortalApi.md#portalsIdPortalMembersDelete) | **DELETE** /Portals/{id}/portalMembers | Deletes all portalMembers of this model.
[**portalsIdPortalMembersFkDelete**](PortalApi.md#portalsIdPortalMembersFkDelete) | **DELETE** /Portals/{id}/portalMembers/{fk} | Delete a related item by id for portalMembers.
[**portalsIdPortalMembersFkGet**](PortalApi.md#portalsIdPortalMembersFkGet) | **GET** /Portals/{id}/portalMembers/{fk} | Find a related item by id for portalMembers.
[**portalsIdPortalMembersFkPut**](PortalApi.md#portalsIdPortalMembersFkPut) | **PUT** /Portals/{id}/portalMembers/{fk} | Update a related item by id for portalMembers.
[**portalsIdPortalMembersGet**](PortalApi.md#portalsIdPortalMembersGet) | **GET** /Portals/{id}/portalMembers | Queries portalMembers of Portal.
[**portalsIdPortalMembersPost**](PortalApi.md#portalsIdPortalMembersPost) | **POST** /Portals/{id}/portalMembers | Creates a new instance in portalMembers of this model.
[**portalsIdPut**](PortalApi.md#portalsIdPut) | **PUT** /Portals/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalsIdReplacePost**](PortalApi.md#portalsIdReplacePost) | **POST** /Portals/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalsIdTeamGet**](PortalApi.md#portalsIdTeamGet) | **GET** /Portals/{id}/team | Fetches belongsTo relation team.
[**portalsIdTemplateFoldersCountGet**](PortalApi.md#portalsIdTemplateFoldersCountGet) | **GET** /Portals/{id}/templateFolders/count | Counts templateFolders of Portal.
[**portalsIdTemplateFoldersDelete**](PortalApi.md#portalsIdTemplateFoldersDelete) | **DELETE** /Portals/{id}/templateFolders | Deletes all templateFolders of this model.
[**portalsIdTemplateFoldersFkDelete**](PortalApi.md#portalsIdTemplateFoldersFkDelete) | **DELETE** /Portals/{id}/templateFolders/{fk} | Delete a related item by id for templateFolders.
[**portalsIdTemplateFoldersFkGet**](PortalApi.md#portalsIdTemplateFoldersFkGet) | **GET** /Portals/{id}/templateFolders/{fk} | Find a related item by id for templateFolders.
[**portalsIdTemplateFoldersFkPut**](PortalApi.md#portalsIdTemplateFoldersFkPut) | **PUT** /Portals/{id}/templateFolders/{fk} | Update a related item by id for templateFolders.
[**portalsIdTemplateFoldersGet**](PortalApi.md#portalsIdTemplateFoldersGet) | **GET** /Portals/{id}/templateFolders | Queries templateFolders of Portal.
[**portalsIdTemplateFoldersNkTemplatesFkRelDelete**](PortalApi.md#portalsIdTemplateFoldersNkTemplatesFkRelDelete) | **DELETE** /Portals/{id}/templateFolders/{nk}/templates/{fk}/rel | Unlink folder with Template and Portal
[**portalsIdTemplateFoldersNkTemplatesFkRelPut**](PortalApi.md#portalsIdTemplateFoldersNkTemplatesFkRelPut) | **PUT** /Portals/{id}/templateFolders/{nk}/templates/{fk}/rel | Link folder with Template and Portal
[**portalsIdTemplateFoldersPost**](PortalApi.md#portalsIdTemplateFoldersPost) | **POST** /Portals/{id}/templateFolders | Creates a new instance in templateFolders of this model.
[**portalsIdTemplateFoldersRootTemplatesGet**](PortalApi.md#portalsIdTemplateFoldersRootTemplatesGet) | **GET** /Portals/{id}/templateFolders/root/templates | List templates on root folder
[**portalsIdTemplateRelsCountGet**](PortalApi.md#portalsIdTemplateRelsCountGet) | **GET** /Portals/{id}/templateRels/count | Counts templateRels of Portal.
[**portalsIdTemplateRelsDelete**](PortalApi.md#portalsIdTemplateRelsDelete) | **DELETE** /Portals/{id}/templateRels | Deletes all templateRels of this model.
[**portalsIdTemplateRelsFkDelete**](PortalApi.md#portalsIdTemplateRelsFkDelete) | **DELETE** /Portals/{id}/templateRels/{fk} | Delete a related item by id for templateRels.
[**portalsIdTemplateRelsFkGet**](PortalApi.md#portalsIdTemplateRelsFkGet) | **GET** /Portals/{id}/templateRels/{fk} | Find a related item by id for templateRels.
[**portalsIdTemplateRelsFkPut**](PortalApi.md#portalsIdTemplateRelsFkPut) | **PUT** /Portals/{id}/templateRels/{fk} | Update a related item by id for templateRels.
[**portalsIdTemplateRelsGet**](PortalApi.md#portalsIdTemplateRelsGet) | **GET** /Portals/{id}/templateRels | Queries templateRels of Portal.
[**portalsIdTemplateRelsPost**](PortalApi.md#portalsIdTemplateRelsPost) | **POST** /Portals/{id}/templateRels | Creates a new instance in templateRels of this model.
[**portalsIdTemplatesCountGet**](PortalApi.md#portalsIdTemplatesCountGet) | **GET** /Portals/{id}/templates/count | Counts templates of Portal.
[**portalsIdTemplatesDelete**](PortalApi.md#portalsIdTemplatesDelete) | **DELETE** /Portals/{id}/templates | Deletes all templates of this model.
[**portalsIdTemplatesFkDelete**](PortalApi.md#portalsIdTemplatesFkDelete) | **DELETE** /Portals/{id}/templates/{fk} | Delete a related item by id for templates.
[**portalsIdTemplatesFkDesignsGenerateBulkPost**](PortalApi.md#portalsIdTemplatesFkDesignsGenerateBulkPost) | **POST** /Portals/{id}/templates/{fk}/designs/generate/bulk | Generate Design from Template
[**portalsIdTemplatesFkDesignsGeneratePost**](PortalApi.md#portalsIdTemplatesFkDesignsGeneratePost) | **POST** /Portals/{id}/templates/{fk}/designs/generate | Generate Design from Template
[**portalsIdTemplatesFkGet**](PortalApi.md#portalsIdTemplatesFkGet) | **GET** /Portals/{id}/templates/{fk} | Find a related item by id for templates.
[**portalsIdTemplatesFkPut**](PortalApi.md#portalsIdTemplatesFkPut) | **PUT** /Portals/{id}/templates/{fk} | Update a related item by id for templates.
[**portalsIdTemplatesGet**](PortalApi.md#portalsIdTemplatesGet) | **GET** /Portals/{id}/templates | Queries templates of Portal.
[**portalsIdTemplatesPost**](PortalApi.md#portalsIdTemplatesPost) | **POST** /Portals/{id}/templates | Creates a new instance in templates of this model.
[**portalsIdTemplatesRelFkDelete**](PortalApi.md#portalsIdTemplatesRelFkDelete) | **DELETE** /Portals/{id}/templates/rel/{fk} | Remove the templates relation to an item by id.
[**portalsIdTemplatesRelFkHead**](PortalApi.md#portalsIdTemplatesRelFkHead) | **HEAD** /Portals/{id}/templates/rel/{fk} | Check the existence of templates relation to an item by id.
[**portalsIdTemplatesRelFkPut**](PortalApi.md#portalsIdTemplatesRelFkPut) | **PUT** /Portals/{id}/templates/rel/{fk} | Add a related item by id for templates.
[**portalsPatch**](PortalApi.md#portalsPatch) | **PATCH** /Portals | Patch an existing model instance or insert a new one into the data source.
[**portalsPost**](PortalApi.md#portalsPost) | **POST** /Portals | Create a new instance of the model and persist it into the data source.
[**portalsPut**](PortalApi.md#portalsPut) | **PUT** /Portals | Replace an existing model instance or insert a new one into the data source.
[**portalsReplaceOrCreatePost**](PortalApi.md#portalsReplaceOrCreatePost) | **POST** /Portals/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**portalsUpdatePost**](PortalApi.md#portalsUpdatePost) | **POST** /Portals/update | Update instances of the model matched by {{where}} from the data source.
[**portalsUpsertWithWherePost**](PortalApi.md#portalsUpsertWithWherePost) | **POST** /Portals/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **portalsChangeStreamGet**
> \SplFileObject portalsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalsChangeStreamPost**
> \SplFileObject portalsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalsFindOneGet**
> \Swagger\Client\Model\Portal portalsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsGet**
> \Swagger\Client\Model\Portal[] portalsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDelete**
> object portalsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalsIdDesignFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignFoldersCountGet($id, $where)

Counts designFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignFoldersDelete**
> portalsIdDesignFoldersDelete($id)

Deletes all designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdDesignFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignFoldersFkDelete**
> portalsIdDesignFoldersFkDelete($id, $fk)

Delete a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $api_instance->portalsIdDesignFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for designFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignFoldersFkGet**
> \Swagger\Client\Model\DesignFolder portalsIdDesignFoldersFkGet($id, $fk)

Find a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $result = $api_instance->portalsIdDesignFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for designFolders |

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignFoldersFkPut**
> \Swagger\Client\Model\DesignFolder portalsIdDesignFoldersFkPut($id, $fk, $data)

Update a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designFolders
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->portalsIdDesignFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdDesignFoldersGet**
> \Swagger\Client\Model\DesignFolder[] portalsIdDesignFoldersGet($id, $filter)

Queries designFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder[]**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignFoldersPost**
> \Swagger\Client\Model\DesignFolder portalsIdDesignFoldersPost($id, $data)

Creates a new instance in designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->portalsIdDesignFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\DesignFolder**](../Model/\Swagger\Client\Model\DesignFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsCountGet($id, $where)

Counts designs of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsDelete**
> portalsIdDesignsDelete($id)

Deletes all designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsFkDelete**
> portalsIdDesignsFkDelete($id, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->portalsIdDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsFkGet**
> \Swagger\Client\Model\Design portalsIdDesignsFkGet($id, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->portalsIdDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsFkPut**
> \Swagger\Client\Model\Design portalsIdDesignsFkPut($id, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalsIdDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdDesignsGet**
> \Swagger\Client\Model\Design[] portalsIdDesignsGet($id, $filter)

Queries designs of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkAssigneeGet**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkAssigneeGet($id, $nk, $refresh)

Fetches belongsTo relation assignee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkAssigneeGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkAssigneeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkCommentersCountGet($id, $nk, $where)

Counts commenters of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkCommentersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersDelete**
> portalsIdDesignsNkCommentersDelete($id, $nk)

Deletes all commenters of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkCommentersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersFkDelete**
> portalsIdDesignsNkCommentersFkDelete($id, $nk, $fk)

Delete a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $api_instance->portalsIdDesignsNkCommentersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersFkGet**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkCommentersFkGet($id, $nk, $fk)

Find a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $result = $api_instance->portalsIdDesignsNkCommentersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersFkPut**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkCommentersFkPut($id, $nk, $fk, $data)

Update a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersGet**
> \Swagger\Client\Model\TeamMember[] portalsIdDesignsNkCommentersGet($id, $nk, $filter)

Queries commenters of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersPost**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkCommentersPost($id, $nk, $data)

Creates a new instance in commenters of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersRelFkDelete**
> portalsIdDesignsNkCommentersRelFkDelete($id, $nk, $fk)

Remove the commenters relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $api_instance->portalsIdDesignsNkCommentersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersRelFkHead**
> bool portalsIdDesignsNkCommentersRelFkHead($id, $nk, $fk)

Check the existence of commenters relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $result = $api_instance->portalsIdDesignsNkCommentersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentersRelFkPut**
> \Swagger\Client\Model\DesignComment portalsIdDesignsNkCommentersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for commenters
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for commenters |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkCommentsCountGet($id, $nk, $where)

Counts comments of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkCommentsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsDelete**
> portalsIdDesignsNkCommentsDelete($id, $nk)

Deletes all comments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkCommentsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsFkDelete**
> portalsIdDesignsNkCommentsFkDelete($id, $nk, $fk)

Delete a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for comments

try {
    $api_instance->portalsIdDesignsNkCommentsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for comments |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsFkGet**
> \Swagger\Client\Model\DesignComment portalsIdDesignsNkCommentsFkGet($id, $nk, $fk)

Find a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for comments

try {
    $result = $api_instance->portalsIdDesignsNkCommentsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for comments |

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsFkPut**
> \Swagger\Client\Model\DesignComment portalsIdDesignsNkCommentsFkPut($id, $nk, $fk, $data)

Update a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for comments
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for comments |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsGet**
> \Swagger\Client\Model\DesignComment[] portalsIdDesignsNkCommentsGet($id, $nk, $filter)

Queries comments of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment[]**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkCommentsPost**
> \Swagger\Client\Model\DesignComment portalsIdDesignsNkCommentsPost($id, $nk, $data)

Creates a new instance in comments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->portalsIdDesignsNkCommentsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkCommentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkDesignMembersCountGet($id, $nk, $where)

Counts designMembers of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkDesignMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersDelete**
> portalsIdDesignsNkDesignMembersDelete($id, $nk)

Deletes all designMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkDesignMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersFkDelete**
> portalsIdDesignsNkDesignMembersFkDelete($id, $nk, $fk)

Delete a related item by id for designMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for designMembers

try {
    $api_instance->portalsIdDesignsNkDesignMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for designMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersFkGet**
> \Swagger\Client\Model\DesignMember portalsIdDesignsNkDesignMembersFkGet($id, $nk, $fk)

Find a related item by id for designMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for designMembers

try {
    $result = $api_instance->portalsIdDesignsNkDesignMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for designMembers |

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersFkPut**
> \Swagger\Client\Model\DesignMember portalsIdDesignsNkDesignMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for designMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for designMembers
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->portalsIdDesignsNkDesignMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for designMembers |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersGet**
> \Swagger\Client\Model\DesignMember[] portalsIdDesignsNkDesignMembersGet($id, $nk, $filter)

Queries designMembers of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkDesignMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember[]**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDesignMembersPost**
> \Swagger\Client\Model\DesignMember portalsIdDesignsNkDesignMembersPost($id, $nk, $data)

Creates a new instance in designMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->portalsIdDesignsNkDesignMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDesignMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkDynamicDataGet**
> \Swagger\Client\Model\DynamicData portalsIdDesignsNkDynamicDataGet($id, $nk, $refresh)

Fetches belongsTo relation dynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkDynamicDataGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkDynamicDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkExportsCountGet($id, $nk, $where)

Counts exports of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkExportsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsDelete**
> portalsIdDesignsNkExportsDelete($id, $nk)

Deletes all exports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkExportsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsFkDelete**
> portalsIdDesignsNkExportsFkDelete($id, $nk, $fk)

Delete a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for exports

try {
    $api_instance->portalsIdDesignsNkExportsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for exports |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsFkGet**
> \Swagger\Client\Model\DesignExport portalsIdDesignsNkExportsFkGet($id, $nk, $fk)

Find a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for exports

try {
    $result = $api_instance->portalsIdDesignsNkExportsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for exports |

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsFkPut**
> \Swagger\Client\Model\DesignExport portalsIdDesignsNkExportsFkPut($id, $nk, $fk, $data)

Update a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for exports
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->portalsIdDesignsNkExportsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for exports |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsGet**
> \Swagger\Client\Model\DesignExport[] portalsIdDesignsNkExportsGet($id, $nk, $filter)

Queries exports of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkExportsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport[]**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkExportsPost**
> \Swagger\Client\Model\DesignExport portalsIdDesignsNkExportsPost($id, $nk, $data)

Creates a new instance in exports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->portalsIdDesignsNkExportsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkExportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkFolderGet**
> \Swagger\Client\Model\DesignFolder portalsIdDesignsNkFolderGet($id, $nk, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkFolderGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkMembersCountGet($id, $nk, $where)

Counts members of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkMembersCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersDelete**
> portalsIdDesignsNkMembersDelete($id, $nk)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkMembersDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersFkDelete**
> portalsIdDesignsNkMembersFkDelete($id, $nk, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->portalsIdDesignsNkMembersFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersFkGet**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkMembersFkGet($id, $nk, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->portalsIdDesignsNkMembersFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersFkPut**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkMembersFkPut($id, $nk, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdDesignsNkMembersFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
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

# **portalsIdDesignsNkMembersGet**
> \Swagger\Client\Model\TeamMember[] portalsIdDesignsNkMembersGet($id, $nk, $filter)

Queries members of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkMembersGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersPost**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkMembersPost($id, $nk, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdDesignsNkMembersPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersRelFkDelete**
> portalsIdDesignsNkMembersRelFkDelete($id, $nk, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->portalsIdDesignsNkMembersRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersRelFkHead**
> bool portalsIdDesignsNkMembersRelFkHead($id, $nk, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->portalsIdDesignsNkMembersRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkMembersRelFkPut**
> \Swagger\Client\Model\DesignMember portalsIdDesignsNkMembersRelFkPut($id, $nk, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->portalsIdDesignsNkMembersRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkPermissionDelete**
> portalsIdDesignsNkPermissionDelete($id, $nk)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkPermissionDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkPermissionGet**
> \Swagger\Client\Model\DesignPermissionSet portalsIdDesignsNkPermissionGet($id, $nk, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkPermissionGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkPermissionPost**
> \Swagger\Client\Model\DesignPermissionSet portalsIdDesignsNkPermissionPost($id, $nk, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | 

try {
    $result = $api_instance->portalsIdDesignsNkPermissionPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkPermissionPut**
> \Swagger\Client\Model\DesignPermissionSet portalsIdDesignsNkPermissionPut($id, $nk, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | 

try {
    $result = $api_instance->portalsIdDesignsNkPermissionPut($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkPortalGet**
> \Swagger\Client\Model\Portal portalsIdDesignsNkPortalGet($id, $nk, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkPortalGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkRejectionCommentGet**
> \Swagger\Client\Model\DesignComment portalsIdDesignsNkRejectionCommentGet($id, $nk, $refresh)

Fetches belongsTo relation rejectionComment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkRejectionCommentGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkRejectionCommentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkRequesterGet**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkRequesterGet($id, $nk, $refresh)

Fetches belongsTo relation requester.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkRequesterGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkRequesterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkReviewerGet**
> \Swagger\Client\Model\TeamMember portalsIdDesignsNkReviewerGet($id, $nk, $refresh)

Fetches belongsTo relation reviewer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkReviewerGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkReviewerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdDesignsNkTagsCountGet($id, $nk, $where)

Counts tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdDesignsNkTagsCountGet($id, $nk, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsDelete**
> portalsIdDesignsNkTagsDelete($id, $nk)

Deletes all tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.

try {
    $api_instance->portalsIdDesignsNkTagsDelete($id, $nk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsFkDelete**
> portalsIdDesignsNkTagsFkDelete($id, $nk, $fk)

Delete a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->portalsIdDesignsNkTagsFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsFkGet**
> \Swagger\Client\Model\Tag portalsIdDesignsNkTagsFkGet($id, $nk, $fk)

Find a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->portalsIdDesignsNkTagsFkGet($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for tags |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsFkPut**
> \Swagger\Client\Model\Tag portalsIdDesignsNkTagsFkPut($id, $nk, $fk, $data)

Update a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->portalsIdDesignsNkTagsFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
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

# **portalsIdDesignsNkTagsGet**
> \Swagger\Client\Model\Tag[] portalsIdDesignsNkTagsGet($id, $nk, $filter)

Queries tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdDesignsNkTagsGet($id, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsPost**
> \Swagger\Client\Model\Tag portalsIdDesignsNkTagsPost($id, $nk, $data)

Creates a new instance in tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->portalsIdDesignsNkTagsPost($id, $nk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsRelFkDelete**
> portalsIdDesignsNkTagsRelFkDelete($id, $nk, $fk)

Remove the tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->portalsIdDesignsNkTagsRelFkDelete($id, $nk, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsRelFkHead**
> bool portalsIdDesignsNkTagsRelFkHead($id, $nk, $fk)

Check the existence of tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->portalsIdDesignsNkTagsRelFkHead($id, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for tags |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTagsRelFkPut**
> \Swagger\Client\Model\DesignTag portalsIdDesignsNkTagsRelFkPut($id, $nk, $fk, $data)

Add a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | 

try {
    $result = $api_instance->portalsIdDesignsNkTagsRelFkPut($id, $nk, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTagsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTeamGet**
> \Swagger\Client\Model\Team portalsIdDesignsNkTeamGet($id, $nk, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkTeamGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsNkTemplateGet**
> \Swagger\Client\Model\Template portalsIdDesignsNkTemplateGet($id, $nk, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$nk = "nk_example"; // string | Foreign key for designs.
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdDesignsNkTemplateGet($id, $nk, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsNkTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **nk** | **string**| Foreign key for designs. |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdDesignsPost**
> \Swagger\Client\Model\Design portalsIdDesignsPost($id, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalsIdDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 portalsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalsIdGet**
> \Swagger\Client\Model\Portal portalsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdHead**
> \Swagger\Client\Model\InlineResponse2001 portalsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalsIdImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdImageFoldersCountGet($id, $where)

Counts imageFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdImageFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersDelete**
> portalsIdImageFoldersDelete($id)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdImageFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersFkDelete**
> portalsIdImageFoldersFkDelete($id, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->portalsIdImageFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder portalsIdImageFoldersFkGet($id, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->portalsIdImageFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder portalsIdImageFoldersFkPut($id, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->portalsIdImageFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] portalsIdImageFoldersGet($id, $filter)

Queries imageFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdImageFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersPost**
> \Swagger\Client\Model\ImageFolder portalsIdImageFoldersPost($id, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->portalsIdImageFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersRelFkDelete**
> portalsIdImageFoldersRelFkDelete($id, $fk)

Remove the imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->portalsIdImageFoldersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersRelFkHead**
> bool portalsIdImageFoldersRelFkHead($id, $fk)

Check the existence of imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->portalsIdImageFoldersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdImageFoldersRelFkPut**
> \Swagger\Client\Model\PortalImageFolder portalsIdImageFoldersRelFkPut($id, $fk, $data)

Add a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | 

try {
    $result = $api_instance->portalsIdImageFoldersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdImageFoldersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdInvitationTicketsFkDelete**
> object portalsIdInvitationTicketsFkDelete($id, $id2, $fk)

Delete InvitationTickets for this Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$fk = "fk_example"; // string | InvitationTicket id

try {
    $result = $api_instance->portalsIdInvitationTicketsFkDelete($id, $id2, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdInvitationTicketsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **fk** | **string**| InvitationTicket id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdInvitationTicketsFkGet**
> \Swagger\Client\Model\InvitationTicket portalsIdInvitationTicketsFkGet($id, $id2, $fk, $filter)

Get InvitationTicket by Id for this Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$fk = "fk_example"; // string | InvitationTicket id
$filter = "filter_example"; // string | Only include changes that match this filter

try {
    $result = $api_instance->portalsIdInvitationTicketsFkGet($id, $id2, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdInvitationTicketsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
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

# **portalsIdInvitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] portalsIdInvitationTicketsGet($id, $id2, $filter)

List InvitationTickets for this Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalsIdInvitationTicketsGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdInvitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdLogoPut**
> \Swagger\Client\Model\Portal portalsIdLogoPut($id, $id2, $data)

Change logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Logo

try {
    $result = $api_instance->portalsIdLogoPut($id, $id2, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Logo |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdMembersCountGet($id, $where)

Counts members of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersDelete**
> portalsIdMembersDelete($id)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersFkDelete**
> portalsIdMembersFkDelete($id, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->portalsIdMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersFkGet**
> \Swagger\Client\Model\TeamMember portalsIdMembersFkGet($id, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->portalsIdMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersFkPut**
> \Swagger\Client\Model\TeamMember portalsIdMembersFkPut($id, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdMembersGet**
> \Swagger\Client\Model\TeamMember[] portalsIdMembersGet($id, $filter)

Queries members of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersPost**
> \Swagger\Client\Model\TeamMember portalsIdMembersPost($id, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->portalsIdMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersRelFkDelete**
> portalsIdMembersRelFkDelete($id, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->portalsIdMembersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersRelFkHead**
> bool portalsIdMembersRelFkHead($id, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->portalsIdMembersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdMembersRelFkPut**
> \Swagger\Client\Model\PortalMember portalsIdMembersRelFkPut($id, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->portalsIdMembersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdPatch**
> \Swagger\Client\Model\Portal portalsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | An object of model property name/value pairs

try {
    $result = $api_instance->portalsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPermissionDelete**
> portalsIdPermissionDelete($id)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdPermissionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPermissionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPermissionGet**
> \Swagger\Client\Model\PortalPermissionSet portalsIdPermissionGet($id, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdPermissionGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPermissionPost**
> \Swagger\Client\Model\PortalPermissionSet portalsIdPermissionPost($id, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\PortalPermissionSet(); // \Swagger\Client\Model\PortalPermissionSet | 

try {
    $result = $api_instance->portalsIdPermissionPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\PortalPermissionSet**](../Model/\Swagger\Client\Model\PortalPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPermissionPut**
> \Swagger\Client\Model\PortalPermissionSet portalsIdPermissionPut($id, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\PortalPermissionSet(); // \Swagger\Client\Model\PortalPermissionSet | 

try {
    $result = $api_instance->portalsIdPermissionPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\PortalPermissionSet**](../Model/\Swagger\Client\Model\PortalPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalPermissionSet**](../Model/PortalPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdPortalMembersCountGet($id, $where)

Counts portalMembers of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdPortalMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersDelete**
> portalsIdPortalMembersDelete($id)

Deletes all portalMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdPortalMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersFkDelete**
> portalsIdPortalMembersFkDelete($id, $fk)

Delete a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for portalMembers

try {
    $api_instance->portalsIdPortalMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for portalMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersFkGet**
> \Swagger\Client\Model\PortalMember portalsIdPortalMembersFkGet($id, $fk)

Find a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for portalMembers

try {
    $result = $api_instance->portalsIdPortalMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for portalMembers |

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersFkPut**
> \Swagger\Client\Model\PortalMember portalsIdPortalMembersFkPut($id, $fk, $data)

Update a related item by id for portalMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for portalMembers
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->portalsIdPortalMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdPortalMembersGet**
> \Swagger\Client\Model\PortalMember[] portalsIdPortalMembersGet($id, $filter)

Queries portalMembers of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdPortalMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember[]**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPortalMembersPost**
> \Swagger\Client\Model\PortalMember portalsIdPortalMembersPost($id, $data)

Creates a new instance in portalMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->portalsIdPortalMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPortalMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdPut**
> \Swagger\Client\Model\Portal portalsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdReplacePost**
> \Swagger\Client\Model\Portal portalsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTeamGet**
> \Swagger\Client\Model\Team portalsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdTemplateFoldersCountGet($id, $where)

Counts templateFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdTemplateFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersDelete**
> portalsIdTemplateFoldersDelete($id)

Deletes all templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdTemplateFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersFkDelete**
> portalsIdTemplateFoldersFkDelete($id, $fk)

Delete a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $api_instance->portalsIdTemplateFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersFkGet**
> \Swagger\Client\Model\PortalTemplateFolder portalsIdTemplateFoldersFkGet($id, $fk)

Find a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $result = $api_instance->portalsIdTemplateFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersFkPut**
> \Swagger\Client\Model\PortalTemplateFolder portalsIdTemplateFoldersFkPut($id, $fk, $data)

Update a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateFolders
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->portalsIdTemplateFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdTemplateFoldersGet**
> \Swagger\Client\Model\PortalTemplateFolder[] portalsIdTemplateFoldersGet($id, $filter)

Queries templateFolders of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdTemplateFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder[]**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersNkTemplatesFkRelDelete**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplateFoldersNkTemplatesFkRelDelete($id, $id2, $nk, $fk)

Unlink folder with Template and Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$nk = "nk_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Template id

try {
    $result = $api_instance->portalsIdTemplateFoldersNkTemplatesFkRelDelete($id, $id2, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersNkTemplatesFkRelDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **nk** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Template id |

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersNkTemplatesFkRelPut**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplateFoldersNkTemplatesFkRelPut($id, $id2, $nk, $fk)

Link folder with Template and Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$nk = "nk_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Template id

try {
    $result = $api_instance->portalsIdTemplateFoldersNkTemplatesFkRelPut($id, $id2, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersNkTemplatesFkRelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **nk** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Template id |

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersPost**
> \Swagger\Client\Model\PortalTemplateFolder portalsIdTemplateFoldersPost($id, $data)

Creates a new instance in templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->portalsIdTemplateFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateFoldersRootTemplatesGet**
> \Swagger\Client\Model\PortalTemplate[] portalsIdTemplateFoldersRootTemplatesGet($id, $id2, $filter)

List templates on root folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | Portal id
$filter = "filter_example"; // string | Only include changes that match this filter

try {
    $result = $api_instance->portalsIdTemplateFoldersRootTemplatesGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateFoldersRootTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**| Portal id |
 **filter** | **string**| Only include changes that match this filter | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate[]**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdTemplateRelsCountGet($id, $where)

Counts templateRels of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdTemplateRelsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsDelete**
> portalsIdTemplateRelsDelete($id)

Deletes all templateRels of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdTemplateRelsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsFkDelete**
> portalsIdTemplateRelsFkDelete($id, $fk)

Delete a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateRels

try {
    $api_instance->portalsIdTemplateRelsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templateRels |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsFkGet**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplateRelsFkGet($id, $fk)

Find a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateRels

try {
    $result = $api_instance->portalsIdTemplateRelsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templateRels |

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsFkPut**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplateRelsFkPut($id, $fk, $data)

Update a related item by id for templateRels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templateRels
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->portalsIdTemplateRelsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdTemplateRelsGet**
> \Swagger\Client\Model\PortalTemplate[] portalsIdTemplateRelsGet($id, $filter)

Queries templateRels of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdTemplateRelsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate[]**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplateRelsPost**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplateRelsPost($id, $data)

Creates a new instance in templateRels of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->portalsIdTemplateRelsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplateRelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse200 portalsIdTemplatesCountGet($id, $where)

Counts templates of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalsIdTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesDelete**
> portalsIdTemplatesDelete($id)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id

try {
    $api_instance->portalsIdTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesFkDelete**
> portalsIdTemplatesFkDelete($id, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->portalsIdTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesFkDesignsGenerateBulkPost**
> \Swagger\Client\Model\Design[] portalsIdTemplatesFkDesignsGenerateBulkPost($id, $id2, $fk, $data)

Generate Design from Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | 
$fk = "fk_example"; // string | 
$data = array(new object[]()); // object[] | 

try {
    $result = $api_instance->portalsIdTemplatesFkDesignsGenerateBulkPost($id, $id2, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesFkDesignsGenerateBulkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**|  |
 **fk** | **string**|  |
 **data** | **object[]**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesFkDesignsGeneratePost**
> \Swagger\Client\Model\Design portalsIdTemplatesFkDesignsGeneratePost($id, $id2, $fk, $data)

Generate Design from Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$id2 = "id_example"; // string | 
$fk = "fk_example"; // string | 
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->portalsIdTemplatesFkDesignsGeneratePost($id, $id2, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesFkDesignsGeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **id2** | **string**|  |
 **fk** | **string**|  |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesFkGet**
> \Swagger\Client\Model\Template portalsIdTemplatesFkGet($id, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->portalsIdTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesFkPut**
> \Swagger\Client\Model\Template portalsIdTemplatesFkPut($id, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->portalsIdTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsIdTemplatesGet**
> \Swagger\Client\Model\Template[] portalsIdTemplatesGet($id, $filter)

Queries templates of Portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalsIdTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesPost**
> \Swagger\Client\Model\Template portalsIdTemplatesPost($id, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->portalsIdTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesRelFkDelete**
> portalsIdTemplatesRelFkDelete($id, $fk)

Remove the templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->portalsIdTemplatesRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesRelFkHead**
> bool portalsIdTemplatesRelFkHead($id, $fk)

Check the existence of templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->portalsIdTemplatesRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
 **fk** | **string**| Foreign key for templates |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsIdTemplatesRelFkPut**
> \Swagger\Client\Model\PortalTemplate portalsIdTemplatesRelFkPut($id, $fk, $data)

Add a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$id = "id_example"; // string | Portal id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->portalsIdTemplatesRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsIdTemplatesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Portal id |
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

# **portalsPatch**
> \Swagger\Client\Model\Portal portalsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsPost**
> \Swagger\Client\Model\Portal portalsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsPut**
> \Swagger\Client\Model\Portal portalsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsReplaceOrCreatePost**
> \Swagger\Client\Model\Portal portalsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | Model instance data

try {
    $result = $api_instance->portalsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 portalsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | An object of model property name/value pairs

try {
    $result = $api_instance->portalsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalsUpsertWithWherePost**
> \Swagger\Client\Model\Portal portalsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | An object of model property name/value pairs

try {
    $result = $api_instance->portalsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->portalsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

