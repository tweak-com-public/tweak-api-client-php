# Tweak\Api\TeamMemberApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamMembersChangeStreamGet**](TeamMemberApi.md#teamMembersChangeStreamGet) | **GET** /TeamMembers/change-stream | Create a change stream.
[**teamMembersChangeStreamPost**](TeamMemberApi.md#teamMembersChangeStreamPost) | **POST** /TeamMembers/change-stream | Create a change stream.
[**teamMembersCountGet**](TeamMemberApi.md#teamMembersCountGet) | **GET** /TeamMembers/count | Count instances of the model matched by where from the data source.
[**teamMembersFindOneGet**](TeamMemberApi.md#teamMembersFindOneGet) | **GET** /TeamMembers/findOne | Find first instance of the model matched by filter from the data source.
[**teamMembersGet**](TeamMemberApi.md#teamMembersGet) | **GET** /TeamMembers | Find all instances of the model matched by filter from the data source.
[**teamMembersIdAssignedDesignsCountGet**](TeamMemberApi.md#teamMembersIdAssignedDesignsCountGet) | **GET** /TeamMembers/{id}/assignedDesigns/count | Counts assignedDesigns of TeamMember.
[**teamMembersIdAssignedDesignsDelete**](TeamMemberApi.md#teamMembersIdAssignedDesignsDelete) | **DELETE** /TeamMembers/{id}/assignedDesigns | Deletes all assignedDesigns of this model.
[**teamMembersIdAssignedDesignsFkDelete**](TeamMemberApi.md#teamMembersIdAssignedDesignsFkDelete) | **DELETE** /TeamMembers/{id}/assignedDesigns/{fk} | Delete a related item by id for assignedDesigns.
[**teamMembersIdAssignedDesignsFkGet**](TeamMemberApi.md#teamMembersIdAssignedDesignsFkGet) | **GET** /TeamMembers/{id}/assignedDesigns/{fk} | Find a related item by id for assignedDesigns.
[**teamMembersIdAssignedDesignsFkPut**](TeamMemberApi.md#teamMembersIdAssignedDesignsFkPut) | **PUT** /TeamMembers/{id}/assignedDesigns/{fk} | Update a related item by id for assignedDesigns.
[**teamMembersIdAssignedDesignsGet**](TeamMemberApi.md#teamMembersIdAssignedDesignsGet) | **GET** /TeamMembers/{id}/assignedDesigns | Queries assignedDesigns of TeamMember.
[**teamMembersIdAssignedDesignsPost**](TeamMemberApi.md#teamMembersIdAssignedDesignsPost) | **POST** /TeamMembers/{id}/assignedDesigns | Creates a new instance in assignedDesigns of this model.
[**teamMembersIdCommentedDesignsCountGet**](TeamMemberApi.md#teamMembersIdCommentedDesignsCountGet) | **GET** /TeamMembers/{id}/commentedDesigns/count | Counts commentedDesigns of TeamMember.
[**teamMembersIdCommentedDesignsDelete**](TeamMemberApi.md#teamMembersIdCommentedDesignsDelete) | **DELETE** /TeamMembers/{id}/commentedDesigns | Deletes all commentedDesigns of this model.
[**teamMembersIdCommentedDesignsFkDelete**](TeamMemberApi.md#teamMembersIdCommentedDesignsFkDelete) | **DELETE** /TeamMembers/{id}/commentedDesigns/{fk} | Delete a related item by id for commentedDesigns.
[**teamMembersIdCommentedDesignsFkGet**](TeamMemberApi.md#teamMembersIdCommentedDesignsFkGet) | **GET** /TeamMembers/{id}/commentedDesigns/{fk} | Find a related item by id for commentedDesigns.
[**teamMembersIdCommentedDesignsFkPut**](TeamMemberApi.md#teamMembersIdCommentedDesignsFkPut) | **PUT** /TeamMembers/{id}/commentedDesigns/{fk} | Update a related item by id for commentedDesigns.
[**teamMembersIdCommentedDesignsGet**](TeamMemberApi.md#teamMembersIdCommentedDesignsGet) | **GET** /TeamMembers/{id}/commentedDesigns | Queries commentedDesigns of TeamMember.
[**teamMembersIdCommentedDesignsPost**](TeamMemberApi.md#teamMembersIdCommentedDesignsPost) | **POST** /TeamMembers/{id}/commentedDesigns | Creates a new instance in commentedDesigns of this model.
[**teamMembersIdCommentedDesignsRelFkDelete**](TeamMemberApi.md#teamMembersIdCommentedDesignsRelFkDelete) | **DELETE** /TeamMembers/{id}/commentedDesigns/rel/{fk} | Remove the commentedDesigns relation to an item by id.
[**teamMembersIdCommentedDesignsRelFkHead**](TeamMemberApi.md#teamMembersIdCommentedDesignsRelFkHead) | **HEAD** /TeamMembers/{id}/commentedDesigns/rel/{fk} | Check the existence of commentedDesigns relation to an item by id.
[**teamMembersIdCommentedDesignsRelFkPut**](TeamMemberApi.md#teamMembersIdCommentedDesignsRelFkPut) | **PUT** /TeamMembers/{id}/commentedDesigns/rel/{fk} | Add a related item by id for commentedDesigns.
[**teamMembersIdCustomerGet**](TeamMemberApi.md#teamMembersIdCustomerGet) | **GET** /TeamMembers/{id}/customer | Fetches belongsTo relation customer.
[**teamMembersIdDelete**](TeamMemberApi.md#teamMembersIdDelete) | **DELETE** /TeamMembers/{id} | Delete a model instance by {{id}} from the data source.
[**teamMembersIdDesignCommentsCountGet**](TeamMemberApi.md#teamMembersIdDesignCommentsCountGet) | **GET** /TeamMembers/{id}/designComments/count | Counts designComments of TeamMember.
[**teamMembersIdDesignCommentsDelete**](TeamMemberApi.md#teamMembersIdDesignCommentsDelete) | **DELETE** /TeamMembers/{id}/designComments | Deletes all designComments of this model.
[**teamMembersIdDesignCommentsFkDelete**](TeamMemberApi.md#teamMembersIdDesignCommentsFkDelete) | **DELETE** /TeamMembers/{id}/designComments/{fk} | Delete a related item by id for designComments.
[**teamMembersIdDesignCommentsFkGet**](TeamMemberApi.md#teamMembersIdDesignCommentsFkGet) | **GET** /TeamMembers/{id}/designComments/{fk} | Find a related item by id for designComments.
[**teamMembersIdDesignCommentsFkPut**](TeamMemberApi.md#teamMembersIdDesignCommentsFkPut) | **PUT** /TeamMembers/{id}/designComments/{fk} | Update a related item by id for designComments.
[**teamMembersIdDesignCommentsGet**](TeamMemberApi.md#teamMembersIdDesignCommentsGet) | **GET** /TeamMembers/{id}/designComments | Queries designComments of TeamMember.
[**teamMembersIdDesignCommentsPost**](TeamMemberApi.md#teamMembersIdDesignCommentsPost) | **POST** /TeamMembers/{id}/designComments | Creates a new instance in designComments of this model.
[**teamMembersIdDesignFoldersCountGet**](TeamMemberApi.md#teamMembersIdDesignFoldersCountGet) | **GET** /TeamMembers/{id}/designFolders/count | Counts designFolders of TeamMember.
[**teamMembersIdDesignFoldersDelete**](TeamMemberApi.md#teamMembersIdDesignFoldersDelete) | **DELETE** /TeamMembers/{id}/designFolders | Deletes all designFolders of this model.
[**teamMembersIdDesignFoldersFkDelete**](TeamMemberApi.md#teamMembersIdDesignFoldersFkDelete) | **DELETE** /TeamMembers/{id}/designFolders/{fk} | Delete a related item by id for designFolders.
[**teamMembersIdDesignFoldersFkGet**](TeamMemberApi.md#teamMembersIdDesignFoldersFkGet) | **GET** /TeamMembers/{id}/designFolders/{fk} | Find a related item by id for designFolders.
[**teamMembersIdDesignFoldersFkPut**](TeamMemberApi.md#teamMembersIdDesignFoldersFkPut) | **PUT** /TeamMembers/{id}/designFolders/{fk} | Update a related item by id for designFolders.
[**teamMembersIdDesignFoldersGet**](TeamMemberApi.md#teamMembersIdDesignFoldersGet) | **GET** /TeamMembers/{id}/designFolders | Queries designFolders of TeamMember.
[**teamMembersIdDesignFoldersPost**](TeamMemberApi.md#teamMembersIdDesignFoldersPost) | **POST** /TeamMembers/{id}/designFolders | Creates a new instance in designFolders of this model.
[**teamMembersIdExistsGet**](TeamMemberApi.md#teamMembersIdExistsGet) | **GET** /TeamMembers/{id}/exists | Check whether a model instance exists in the data source.
[**teamMembersIdGet**](TeamMemberApi.md#teamMembersIdGet) | **GET** /TeamMembers/{id} | Find a model instance by {{id}} from the data source.
[**teamMembersIdHead**](TeamMemberApi.md#teamMembersIdHead) | **HEAD** /TeamMembers/{id} | Check whether a model instance exists in the data source.
[**teamMembersIdImageFoldersCountGet**](TeamMemberApi.md#teamMembersIdImageFoldersCountGet) | **GET** /TeamMembers/{id}/imageFolders/count | Counts imageFolders of TeamMember.
[**teamMembersIdImageFoldersDelete**](TeamMemberApi.md#teamMembersIdImageFoldersDelete) | **DELETE** /TeamMembers/{id}/imageFolders | Deletes all imageFolders of this model.
[**teamMembersIdImageFoldersFkDelete**](TeamMemberApi.md#teamMembersIdImageFoldersFkDelete) | **DELETE** /TeamMembers/{id}/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**teamMembersIdImageFoldersFkGet**](TeamMemberApi.md#teamMembersIdImageFoldersFkGet) | **GET** /TeamMembers/{id}/imageFolders/{fk} | Find a related item by id for imageFolders.
[**teamMembersIdImageFoldersFkPut**](TeamMemberApi.md#teamMembersIdImageFoldersFkPut) | **PUT** /TeamMembers/{id}/imageFolders/{fk} | Update a related item by id for imageFolders.
[**teamMembersIdImageFoldersGet**](TeamMemberApi.md#teamMembersIdImageFoldersGet) | **GET** /TeamMembers/{id}/imageFolders | Queries imageFolders of TeamMember.
[**teamMembersIdImageFoldersPost**](TeamMemberApi.md#teamMembersIdImageFoldersPost) | **POST** /TeamMembers/{id}/imageFolders | Creates a new instance in imageFolders of this model.
[**teamMembersIdImageFoldersRelFkDelete**](TeamMemberApi.md#teamMembersIdImageFoldersRelFkDelete) | **DELETE** /TeamMembers/{id}/imageFolders/rel/{fk} | Remove the imageFolders relation to an item by id.
[**teamMembersIdImageFoldersRelFkHead**](TeamMemberApi.md#teamMembersIdImageFoldersRelFkHead) | **HEAD** /TeamMembers/{id}/imageFolders/rel/{fk} | Check the existence of imageFolders relation to an item by id.
[**teamMembersIdImageFoldersRelFkPut**](TeamMemberApi.md#teamMembersIdImageFoldersRelFkPut) | **PUT** /TeamMembers/{id}/imageFolders/rel/{fk} | Add a related item by id for imageFolders.
[**teamMembersIdInvitationTicketsCountGet**](TeamMemberApi.md#teamMembersIdInvitationTicketsCountGet) | **GET** /TeamMembers/{id}/invitationTickets/count | Counts invitationTickets of TeamMember.
[**teamMembersIdInvitationTicketsDelete**](TeamMemberApi.md#teamMembersIdInvitationTicketsDelete) | **DELETE** /TeamMembers/{id}/invitationTickets | Deletes all invitationTickets of this model.
[**teamMembersIdInvitationTicketsFkDelete**](TeamMemberApi.md#teamMembersIdInvitationTicketsFkDelete) | **DELETE** /TeamMembers/{id}/invitationTickets/{fk} | Delete a related item by id for invitationTickets.
[**teamMembersIdInvitationTicketsFkGet**](TeamMemberApi.md#teamMembersIdInvitationTicketsFkGet) | **GET** /TeamMembers/{id}/invitationTickets/{fk} | Find a related item by id for invitationTickets.
[**teamMembersIdInvitationTicketsFkPut**](TeamMemberApi.md#teamMembersIdInvitationTicketsFkPut) | **PUT** /TeamMembers/{id}/invitationTickets/{fk} | Update a related item by id for invitationTickets.
[**teamMembersIdInvitationTicketsGet**](TeamMemberApi.md#teamMembersIdInvitationTicketsGet) | **GET** /TeamMembers/{id}/invitationTickets | Queries invitationTickets of TeamMember.
[**teamMembersIdInvitationTicketsPost**](TeamMemberApi.md#teamMembersIdInvitationTicketsPost) | **POST** /TeamMembers/{id}/invitationTickets | Creates a new instance in invitationTickets of this model.
[**teamMembersIdInviteInviteePost**](TeamMemberApi.md#teamMembersIdInviteInviteePost) | **POST** /TeamMembers/{id}/invite/{invitee} | Invite somebody to join the team
[**teamMembersIdPatch**](TeamMemberApi.md#teamMembersIdPatch) | **PATCH** /TeamMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamMembersIdPortalsAvailableGet**](TeamMemberApi.md#teamMembersIdPortalsAvailableGet) | **GET** /TeamMembers/{id}/portals/available | Find all available Portals
[**teamMembersIdPortalsCountGet**](TeamMemberApi.md#teamMembersIdPortalsCountGet) | **GET** /TeamMembers/{id}/portals/count | Counts portals of TeamMember.
[**teamMembersIdPortalsDelete**](TeamMemberApi.md#teamMembersIdPortalsDelete) | **DELETE** /TeamMembers/{id}/portals | Deletes all portals of this model.
[**teamMembersIdPortalsFkAvailableGet**](TeamMemberApi.md#teamMembersIdPortalsFkAvailableGet) | **GET** /TeamMembers/{id}/portals/{fk}/available | Find available Portal by id
[**teamMembersIdPortalsFkDelete**](TeamMemberApi.md#teamMembersIdPortalsFkDelete) | **DELETE** /TeamMembers/{id}/portals/{fk} | Delete a related item by id for portals.
[**teamMembersIdPortalsFkGet**](TeamMemberApi.md#teamMembersIdPortalsFkGet) | **GET** /TeamMembers/{id}/portals/{fk} | Find a related item by id for portals.
[**teamMembersIdPortalsFkPut**](TeamMemberApi.md#teamMembersIdPortalsFkPut) | **PUT** /TeamMembers/{id}/portals/{fk} | Update a related item by id for portals.
[**teamMembersIdPortalsGet**](TeamMemberApi.md#teamMembersIdPortalsGet) | **GET** /TeamMembers/{id}/portals | Queries portals of TeamMember.
[**teamMembersIdPortalsNkDesignsFkFlashvarsGet**](TeamMemberApi.md#teamMembersIdPortalsNkDesignsFkFlashvarsGet) | **GET** /TeamMembers/{id}/portals/{nk}/designs/{fk}/flashvars | Find Design FlashVars within available Portal by id
[**teamMembersIdPortalsPost**](TeamMemberApi.md#teamMembersIdPortalsPost) | **POST** /TeamMembers/{id}/portals | Creates a new instance in portals of this model.
[**teamMembersIdPortalsRelFkDelete**](TeamMemberApi.md#teamMembersIdPortalsRelFkDelete) | **DELETE** /TeamMembers/{id}/portals/rel/{fk} | Remove the portals relation to an item by id.
[**teamMembersIdPortalsRelFkHead**](TeamMemberApi.md#teamMembersIdPortalsRelFkHead) | **HEAD** /TeamMembers/{id}/portals/rel/{fk} | Check the existence of portals relation to an item by id.
[**teamMembersIdPortalsRelFkPut**](TeamMemberApi.md#teamMembersIdPortalsRelFkPut) | **PUT** /TeamMembers/{id}/portals/rel/{fk} | Add a related item by id for portals.
[**teamMembersIdPut**](TeamMemberApi.md#teamMembersIdPut) | **PUT** /TeamMembers/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamMembersIdReplacePost**](TeamMemberApi.md#teamMembersIdReplacePost) | **POST** /TeamMembers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamMembersIdRequestedDesignExportsCountGet**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsCountGet) | **GET** /TeamMembers/{id}/requestedDesignExports/count | Counts requestedDesignExports of TeamMember.
[**teamMembersIdRequestedDesignExportsDelete**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsDelete) | **DELETE** /TeamMembers/{id}/requestedDesignExports | Deletes all requestedDesignExports of this model.
[**teamMembersIdRequestedDesignExportsFkDelete**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsFkDelete) | **DELETE** /TeamMembers/{id}/requestedDesignExports/{fk} | Delete a related item by id for requestedDesignExports.
[**teamMembersIdRequestedDesignExportsFkGet**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsFkGet) | **GET** /TeamMembers/{id}/requestedDesignExports/{fk} | Find a related item by id for requestedDesignExports.
[**teamMembersIdRequestedDesignExportsFkPut**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsFkPut) | **PUT** /TeamMembers/{id}/requestedDesignExports/{fk} | Update a related item by id for requestedDesignExports.
[**teamMembersIdRequestedDesignExportsGet**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsGet) | **GET** /TeamMembers/{id}/requestedDesignExports | Queries requestedDesignExports of TeamMember.
[**teamMembersIdRequestedDesignExportsPost**](TeamMemberApi.md#teamMembersIdRequestedDesignExportsPost) | **POST** /TeamMembers/{id}/requestedDesignExports | Creates a new instance in requestedDesignExports of this model.
[**teamMembersIdRequestedDesignsCountGet**](TeamMemberApi.md#teamMembersIdRequestedDesignsCountGet) | **GET** /TeamMembers/{id}/requestedDesigns/count | Counts requestedDesigns of TeamMember.
[**teamMembersIdRequestedDesignsDelete**](TeamMemberApi.md#teamMembersIdRequestedDesignsDelete) | **DELETE** /TeamMembers/{id}/requestedDesigns | Deletes all requestedDesigns of this model.
[**teamMembersIdRequestedDesignsFkDelete**](TeamMemberApi.md#teamMembersIdRequestedDesignsFkDelete) | **DELETE** /TeamMembers/{id}/requestedDesigns/{fk} | Delete a related item by id for requestedDesigns.
[**teamMembersIdRequestedDesignsFkGet**](TeamMemberApi.md#teamMembersIdRequestedDesignsFkGet) | **GET** /TeamMembers/{id}/requestedDesigns/{fk} | Find a related item by id for requestedDesigns.
[**teamMembersIdRequestedDesignsFkPut**](TeamMemberApi.md#teamMembersIdRequestedDesignsFkPut) | **PUT** /TeamMembers/{id}/requestedDesigns/{fk} | Update a related item by id for requestedDesigns.
[**teamMembersIdRequestedDesignsGet**](TeamMemberApi.md#teamMembersIdRequestedDesignsGet) | **GET** /TeamMembers/{id}/requestedDesigns | Queries requestedDesigns of TeamMember.
[**teamMembersIdRequestedDesignsPost**](TeamMemberApi.md#teamMembersIdRequestedDesignsPost) | **POST** /TeamMembers/{id}/requestedDesigns | Creates a new instance in requestedDesigns of this model.
[**teamMembersIdReviewedDesignsCountGet**](TeamMemberApi.md#teamMembersIdReviewedDesignsCountGet) | **GET** /TeamMembers/{id}/reviewedDesigns/count | Counts reviewedDesigns of TeamMember.
[**teamMembersIdReviewedDesignsDelete**](TeamMemberApi.md#teamMembersIdReviewedDesignsDelete) | **DELETE** /TeamMembers/{id}/reviewedDesigns | Deletes all reviewedDesigns of this model.
[**teamMembersIdReviewedDesignsFkDelete**](TeamMemberApi.md#teamMembersIdReviewedDesignsFkDelete) | **DELETE** /TeamMembers/{id}/reviewedDesigns/{fk} | Delete a related item by id for reviewedDesigns.
[**teamMembersIdReviewedDesignsFkGet**](TeamMemberApi.md#teamMembersIdReviewedDesignsFkGet) | **GET** /TeamMembers/{id}/reviewedDesigns/{fk} | Find a related item by id for reviewedDesigns.
[**teamMembersIdReviewedDesignsFkPut**](TeamMemberApi.md#teamMembersIdReviewedDesignsFkPut) | **PUT** /TeamMembers/{id}/reviewedDesigns/{fk} | Update a related item by id for reviewedDesigns.
[**teamMembersIdReviewedDesignsGet**](TeamMemberApi.md#teamMembersIdReviewedDesignsGet) | **GET** /TeamMembers/{id}/reviewedDesigns | Queries reviewedDesigns of TeamMember.
[**teamMembersIdReviewedDesignsPost**](TeamMemberApi.md#teamMembersIdReviewedDesignsPost) | **POST** /TeamMembers/{id}/reviewedDesigns | Creates a new instance in reviewedDesigns of this model.
[**teamMembersIdTargetModelTargetIdInviteInviteePost**](TeamMemberApi.md#teamMembersIdTargetModelTargetIdInviteInviteePost) | **POST** /TeamMembers/{id}/{targetModel}/{targetId}/invite/{invitee} | Invite somebody to join a team, portal or other targets
[**teamMembersIdTargetModelTargetIdInvitePost**](TeamMemberApi.md#teamMembersIdTargetModelTargetIdInvitePost) | **POST** /TeamMembers/{id}/{targetModel}/{targetId}/invite | Invite a group of people to join a team, portal or other targets
[**teamMembersIdTeamBrandDelete**](TeamMemberApi.md#teamMembersIdTeamBrandDelete) | **DELETE** /TeamMembers/{id}/team/brand | Deletes brand of this model.
[**teamMembersIdTeamBrandGet**](TeamMemberApi.md#teamMembersIdTeamBrandGet) | **GET** /TeamMembers/{id}/team/brand | Fetches hasOne relation brand.
[**teamMembersIdTeamBrandPost**](TeamMemberApi.md#teamMembersIdTeamBrandPost) | **POST** /TeamMembers/{id}/team/brand | Creates a new instance in brand of this model.
[**teamMembersIdTeamBrandPut**](TeamMemberApi.md#teamMembersIdTeamBrandPut) | **PUT** /TeamMembers/{id}/team/brand | Update brand of this model.
[**teamMembersIdTeamGet**](TeamMemberApi.md#teamMembersIdTeamGet) | **GET** /TeamMembers/{id}/team | Fetches belongsTo relation team.
[**teamMembersIdTeamImageFoldersCountGet**](TeamMemberApi.md#teamMembersIdTeamImageFoldersCountGet) | **GET** /TeamMembers/{id}/team/imageFolders/count | Counts imageFolders of Team.
[**teamMembersIdTeamImageFoldersDelete**](TeamMemberApi.md#teamMembersIdTeamImageFoldersDelete) | **DELETE** /TeamMembers/{id}/team/imageFolders | Deletes all imageFolders of this model.
[**teamMembersIdTeamImageFoldersFkDelete**](TeamMemberApi.md#teamMembersIdTeamImageFoldersFkDelete) | **DELETE** /TeamMembers/{id}/team/imageFolders/{fk} | Delete a related item by id for imageFolders.
[**teamMembersIdTeamImageFoldersFkGet**](TeamMemberApi.md#teamMembersIdTeamImageFoldersFkGet) | **GET** /TeamMembers/{id}/team/imageFolders/{fk} | Find a related item by id for imageFolders.
[**teamMembersIdTeamImageFoldersFkPut**](TeamMemberApi.md#teamMembersIdTeamImageFoldersFkPut) | **PUT** /TeamMembers/{id}/team/imageFolders/{fk} | Update a related item by id for imageFolders.
[**teamMembersIdTeamImageFoldersGet**](TeamMemberApi.md#teamMembersIdTeamImageFoldersGet) | **GET** /TeamMembers/{id}/team/imageFolders | Queries imageFolders of Team.
[**teamMembersIdTeamImageFoldersPost**](TeamMemberApi.md#teamMembersIdTeamImageFoldersPost) | **POST** /TeamMembers/{id}/team/imageFolders | Creates a new instance in imageFolders of this model.
[**teamMembersIdTeamImagesCountGet**](TeamMemberApi.md#teamMembersIdTeamImagesCountGet) | **GET** /TeamMembers/{id}/team/images/count | Counts images of Team.
[**teamMembersIdTeamImagesDelete**](TeamMemberApi.md#teamMembersIdTeamImagesDelete) | **DELETE** /TeamMembers/{id}/team/images | Deletes all images of this model.
[**teamMembersIdTeamImagesFkDelete**](TeamMemberApi.md#teamMembersIdTeamImagesFkDelete) | **DELETE** /TeamMembers/{id}/team/images/{fk} | Delete a related item by id for images.
[**teamMembersIdTeamImagesFkGet**](TeamMemberApi.md#teamMembersIdTeamImagesFkGet) | **GET** /TeamMembers/{id}/team/images/{fk} | Find a related item by id for images.
[**teamMembersIdTeamImagesFkPut**](TeamMemberApi.md#teamMembersIdTeamImagesFkPut) | **PUT** /TeamMembers/{id}/team/images/{fk} | Update a related item by id for images.
[**teamMembersIdTeamImagesGet**](TeamMemberApi.md#teamMembersIdTeamImagesGet) | **GET** /TeamMembers/{id}/team/images | Queries images of Team.
[**teamMembersIdTeamImagesPost**](TeamMemberApi.md#teamMembersIdTeamImagesPost) | **POST** /TeamMembers/{id}/team/images | Creates a new instance in images of this model.
[**teamMembersIdTeamMembersCountGet**](TeamMemberApi.md#teamMembersIdTeamMembersCountGet) | **GET** /TeamMembers/{id}/team/members/count | Counts members of Team.
[**teamMembersIdTeamMembersDelete**](TeamMemberApi.md#teamMembersIdTeamMembersDelete) | **DELETE** /TeamMembers/{id}/team/members | Deletes all members of this model.
[**teamMembersIdTeamMembersFkDelete**](TeamMemberApi.md#teamMembersIdTeamMembersFkDelete) | **DELETE** /TeamMembers/{id}/team/members/{fk} | Delete a related item by id for members.
[**teamMembersIdTeamMembersFkGet**](TeamMemberApi.md#teamMembersIdTeamMembersFkGet) | **GET** /TeamMembers/{id}/team/members/{fk} | Find a related item by id for members.
[**teamMembersIdTeamMembersFkPut**](TeamMemberApi.md#teamMembersIdTeamMembersFkPut) | **PUT** /TeamMembers/{id}/team/members/{fk} | Update a related item by id for members.
[**teamMembersIdTeamMembersGet**](TeamMemberApi.md#teamMembersIdTeamMembersGet) | **GET** /TeamMembers/{id}/team/members | Queries members of Team.
[**teamMembersIdTeamMembersPost**](TeamMemberApi.md#teamMembersIdTeamMembersPost) | **POST** /TeamMembers/{id}/team/members | Creates a new instance in members of this model.
[**teamMembersIdTeamMembersRelFkDelete**](TeamMemberApi.md#teamMembersIdTeamMembersRelFkDelete) | **DELETE** /TeamMembers/{id}/team/members/rel/{fk} | Remove the members relation to an item by id.
[**teamMembersIdTeamMembersRelFkHead**](TeamMemberApi.md#teamMembersIdTeamMembersRelFkHead) | **HEAD** /TeamMembers/{id}/team/members/rel/{fk} | Check the existence of members relation to an item by id.
[**teamMembersIdTeamMembersRelFkPut**](TeamMemberApi.md#teamMembersIdTeamMembersRelFkPut) | **PUT** /TeamMembers/{id}/team/members/rel/{fk} | Add a related item by id for members.
[**teamMembersIdTeamPortalsCountGet**](TeamMemberApi.md#teamMembersIdTeamPortalsCountGet) | **GET** /TeamMembers/{id}/team/portals/count | Counts portals of Team.
[**teamMembersIdTeamPortalsDelete**](TeamMemberApi.md#teamMembersIdTeamPortalsDelete) | **DELETE** /TeamMembers/{id}/team/portals | Deletes all portals of this model.
[**teamMembersIdTeamPortalsFkDelete**](TeamMemberApi.md#teamMembersIdTeamPortalsFkDelete) | **DELETE** /TeamMembers/{id}/team/portals/{fk} | Delete a related item by id for portals.
[**teamMembersIdTeamPortalsFkGet**](TeamMemberApi.md#teamMembersIdTeamPortalsFkGet) | **GET** /TeamMembers/{id}/team/portals/{fk} | Find a related item by id for portals.
[**teamMembersIdTeamPortalsFkPut**](TeamMemberApi.md#teamMembersIdTeamPortalsFkPut) | **PUT** /TeamMembers/{id}/team/portals/{fk} | Update a related item by id for portals.
[**teamMembersIdTeamPortalsGet**](TeamMemberApi.md#teamMembersIdTeamPortalsGet) | **GET** /TeamMembers/{id}/team/portals | Queries portals of Team.
[**teamMembersIdTeamPortalsPost**](TeamMemberApi.md#teamMembersIdTeamPortalsPost) | **POST** /TeamMembers/{id}/team/portals | Creates a new instance in portals of this model.
[**teamMembersIdTeamTeamMembersCountGet**](TeamMemberApi.md#teamMembersIdTeamTeamMembersCountGet) | **GET** /TeamMembers/{id}/team/teamMembers/count | Counts teamMembers of Team.
[**teamMembersIdTeamTeamMembersDelete**](TeamMemberApi.md#teamMembersIdTeamTeamMembersDelete) | **DELETE** /TeamMembers/{id}/team/teamMembers | Deletes all teamMembers of this model.
[**teamMembersIdTeamTeamMembersFkDelete**](TeamMemberApi.md#teamMembersIdTeamTeamMembersFkDelete) | **DELETE** /TeamMembers/{id}/team/teamMembers/{fk} | Delete a related item by id for teamMembers.
[**teamMembersIdTeamTeamMembersFkGet**](TeamMemberApi.md#teamMembersIdTeamTeamMembersFkGet) | **GET** /TeamMembers/{id}/team/teamMembers/{fk} | Find a related item by id for teamMembers.
[**teamMembersIdTeamTeamMembersFkPut**](TeamMemberApi.md#teamMembersIdTeamTeamMembersFkPut) | **PUT** /TeamMembers/{id}/team/teamMembers/{fk} | Update a related item by id for teamMembers.
[**teamMembersIdTeamTeamMembersGet**](TeamMemberApi.md#teamMembersIdTeamTeamMembersGet) | **GET** /TeamMembers/{id}/team/teamMembers | Queries teamMembers of Team.
[**teamMembersIdTeamTeamMembersPost**](TeamMemberApi.md#teamMembersIdTeamTeamMembersPost) | **POST** /TeamMembers/{id}/team/teamMembers | Creates a new instance in teamMembers of this model.
[**teamMembersIdTeamTemplateFoldersCountGet**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersCountGet) | **GET** /TeamMembers/{id}/team/templateFolders/count | Counts templateFolders of Team.
[**teamMembersIdTeamTemplateFoldersDelete**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersDelete) | **DELETE** /TeamMembers/{id}/team/templateFolders | Deletes all templateFolders of this model.
[**teamMembersIdTeamTemplateFoldersFkDelete**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersFkDelete) | **DELETE** /TeamMembers/{id}/team/templateFolders/{fk} | Delete a related item by id for templateFolders.
[**teamMembersIdTeamTemplateFoldersFkGet**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersFkGet) | **GET** /TeamMembers/{id}/team/templateFolders/{fk} | Find a related item by id for templateFolders.
[**teamMembersIdTeamTemplateFoldersFkPut**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersFkPut) | **PUT** /TeamMembers/{id}/team/templateFolders/{fk} | Update a related item by id for templateFolders.
[**teamMembersIdTeamTemplateFoldersGet**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersGet) | **GET** /TeamMembers/{id}/team/templateFolders | Queries templateFolders of Team.
[**teamMembersIdTeamTemplateFoldersPost**](TeamMemberApi.md#teamMembersIdTeamTemplateFoldersPost) | **POST** /TeamMembers/{id}/team/templateFolders | Creates a new instance in templateFolders of this model.
[**teamMembersIdTeamTemplatesCountGet**](TeamMemberApi.md#teamMembersIdTeamTemplatesCountGet) | **GET** /TeamMembers/{id}/team/templates/count | Counts templates of Team.
[**teamMembersIdTeamTemplatesDelete**](TeamMemberApi.md#teamMembersIdTeamTemplatesDelete) | **DELETE** /TeamMembers/{id}/team/templates | Deletes all templates of this model.
[**teamMembersIdTeamTemplatesFkDelete**](TeamMemberApi.md#teamMembersIdTeamTemplatesFkDelete) | **DELETE** /TeamMembers/{id}/team/templates/{fk} | Delete a related item by id for templates.
[**teamMembersIdTeamTemplatesFkGet**](TeamMemberApi.md#teamMembersIdTeamTemplatesFkGet) | **GET** /TeamMembers/{id}/team/templates/{fk} | Find a related item by id for templates.
[**teamMembersIdTeamTemplatesFkPut**](TeamMemberApi.md#teamMembersIdTeamTemplatesFkPut) | **PUT** /TeamMembers/{id}/team/templates/{fk} | Update a related item by id for templates.
[**teamMembersIdTeamTemplatesGet**](TeamMemberApi.md#teamMembersIdTeamTemplatesGet) | **GET** /TeamMembers/{id}/team/templates | Queries templates of Team.
[**teamMembersIdTeamTemplatesPost**](TeamMemberApi.md#teamMembersIdTeamTemplatesPost) | **POST** /TeamMembers/{id}/team/templates | Creates a new instance in templates of this model.
[**teamMembersIdTeamTemplatesWithDesignsGet**](TeamMemberApi.md#teamMembersIdTeamTemplatesWithDesignsGet) | **GET** /TeamMembers/{id}/team/templatesWithDesigns | List Templates with Designs for the Team of TeamMember
[**teamMembersIdTeamWorkflowsCountGet**](TeamMemberApi.md#teamMembersIdTeamWorkflowsCountGet) | **GET** /TeamMembers/{id}/team/workflows/count | Counts workflows of Team.
[**teamMembersIdTeamWorkflowsDelete**](TeamMemberApi.md#teamMembersIdTeamWorkflowsDelete) | **DELETE** /TeamMembers/{id}/team/workflows | Deletes all workflows of this model.
[**teamMembersIdTeamWorkflowsFkDelete**](TeamMemberApi.md#teamMembersIdTeamWorkflowsFkDelete) | **DELETE** /TeamMembers/{id}/team/workflows/{fk} | Delete a related item by id for workflows.
[**teamMembersIdTeamWorkflowsFkGet**](TeamMemberApi.md#teamMembersIdTeamWorkflowsFkGet) | **GET** /TeamMembers/{id}/team/workflows/{fk} | Find a related item by id for workflows.
[**teamMembersIdTeamWorkflowsFkPut**](TeamMemberApi.md#teamMembersIdTeamWorkflowsFkPut) | **PUT** /TeamMembers/{id}/team/workflows/{fk} | Update a related item by id for workflows.
[**teamMembersIdTeamWorkflowsGet**](TeamMemberApi.md#teamMembersIdTeamWorkflowsGet) | **GET** /TeamMembers/{id}/team/workflows | Queries workflows of Team.
[**teamMembersIdTeamWorkflowsPost**](TeamMemberApi.md#teamMembersIdTeamWorkflowsPost) | **POST** /TeamMembers/{id}/team/workflows | Creates a new instance in workflows of this model.
[**teamMembersIdTemplatesCountGet**](TeamMemberApi.md#teamMembersIdTemplatesCountGet) | **GET** /TeamMembers/{id}/templates/count | Counts templates of TeamMember.
[**teamMembersIdTemplatesDelete**](TeamMemberApi.md#teamMembersIdTemplatesDelete) | **DELETE** /TeamMembers/{id}/templates | Deletes all templates of this model.
[**teamMembersIdTemplatesFkDelete**](TeamMemberApi.md#teamMembersIdTemplatesFkDelete) | **DELETE** /TeamMembers/{id}/templates/{fk} | Delete a related item by id for templates.
[**teamMembersIdTemplatesFkFlashvarsGet**](TeamMemberApi.md#teamMembersIdTemplatesFkFlashvarsGet) | **GET** /TeamMembers/{id}/templates/{fk}/flashvars | Find Template FlashVars by id
[**teamMembersIdTemplatesFkGet**](TeamMemberApi.md#teamMembersIdTemplatesFkGet) | **GET** /TeamMembers/{id}/templates/{fk} | Find a related item by id for templates.
[**teamMembersIdTemplatesFkPut**](TeamMemberApi.md#teamMembersIdTemplatesFkPut) | **PUT** /TeamMembers/{id}/templates/{fk} | Update a related item by id for templates.
[**teamMembersIdTemplatesGet**](TeamMemberApi.md#teamMembersIdTemplatesGet) | **GET** /TeamMembers/{id}/templates | Queries templates of TeamMember.
[**teamMembersIdTemplatesPost**](TeamMemberApi.md#teamMembersIdTemplatesPost) | **POST** /TeamMembers/{id}/templates | Creates a new instance in templates of this model.
[**teamMembersIdTemplatesRelFkDelete**](TeamMemberApi.md#teamMembersIdTemplatesRelFkDelete) | **DELETE** /TeamMembers/{id}/templates/rel/{fk} | Remove the templates relation to an item by id.
[**teamMembersIdTemplatesRelFkHead**](TeamMemberApi.md#teamMembersIdTemplatesRelFkHead) | **HEAD** /TeamMembers/{id}/templates/rel/{fk} | Check the existence of templates relation to an item by id.
[**teamMembersIdTemplatesRelFkPut**](TeamMemberApi.md#teamMembersIdTemplatesRelFkPut) | **PUT** /TeamMembers/{id}/templates/rel/{fk} | Add a related item by id for templates.
[**teamMembersIdUploadedTemplatesCountGet**](TeamMemberApi.md#teamMembersIdUploadedTemplatesCountGet) | **GET** /TeamMembers/{id}/uploadedTemplates/count | Counts uploadedTemplates of TeamMember.
[**teamMembersIdUploadedTemplatesDelete**](TeamMemberApi.md#teamMembersIdUploadedTemplatesDelete) | **DELETE** /TeamMembers/{id}/uploadedTemplates | Deletes all uploadedTemplates of this model.
[**teamMembersIdUploadedTemplatesFkDelete**](TeamMemberApi.md#teamMembersIdUploadedTemplatesFkDelete) | **DELETE** /TeamMembers/{id}/uploadedTemplates/{fk} | Delete a related item by id for uploadedTemplates.
[**teamMembersIdUploadedTemplatesFkGet**](TeamMemberApi.md#teamMembersIdUploadedTemplatesFkGet) | **GET** /TeamMembers/{id}/uploadedTemplates/{fk} | Find a related item by id for uploadedTemplates.
[**teamMembersIdUploadedTemplatesFkPut**](TeamMemberApi.md#teamMembersIdUploadedTemplatesFkPut) | **PUT** /TeamMembers/{id}/uploadedTemplates/{fk} | Update a related item by id for uploadedTemplates.
[**teamMembersIdUploadedTemplatesGet**](TeamMemberApi.md#teamMembersIdUploadedTemplatesGet) | **GET** /TeamMembers/{id}/uploadedTemplates | Queries uploadedTemplates of TeamMember.
[**teamMembersIdUploadedTemplatesPost**](TeamMemberApi.md#teamMembersIdUploadedTemplatesPost) | **POST** /TeamMembers/{id}/uploadedTemplates | Creates a new instance in uploadedTemplates of this model.
[**teamMembersIdWorkflowsCountGet**](TeamMemberApi.md#teamMembersIdWorkflowsCountGet) | **GET** /TeamMembers/{id}/workflows/count | Counts workflows of TeamMember.
[**teamMembersIdWorkflowsDelete**](TeamMemberApi.md#teamMembersIdWorkflowsDelete) | **DELETE** /TeamMembers/{id}/workflows | Deletes all workflows of this model.
[**teamMembersIdWorkflowsFkDelete**](TeamMemberApi.md#teamMembersIdWorkflowsFkDelete) | **DELETE** /TeamMembers/{id}/workflows/{fk} | Delete a related item by id for workflows.
[**teamMembersIdWorkflowsFkGet**](TeamMemberApi.md#teamMembersIdWorkflowsFkGet) | **GET** /TeamMembers/{id}/workflows/{fk} | Find a related item by id for workflows.
[**teamMembersIdWorkflowsFkPut**](TeamMemberApi.md#teamMembersIdWorkflowsFkPut) | **PUT** /TeamMembers/{id}/workflows/{fk} | Update a related item by id for workflows.
[**teamMembersIdWorkflowsGet**](TeamMemberApi.md#teamMembersIdWorkflowsGet) | **GET** /TeamMembers/{id}/workflows | Queries workflows of TeamMember.
[**teamMembersIdWorkflowsPost**](TeamMemberApi.md#teamMembersIdWorkflowsPost) | **POST** /TeamMembers/{id}/workflows | Creates a new instance in workflows of this model.
[**teamMembersPatch**](TeamMemberApi.md#teamMembersPatch) | **PATCH** /TeamMembers | Patch an existing model instance or insert a new one into the data source.
[**teamMembersPost**](TeamMemberApi.md#teamMembersPost) | **POST** /TeamMembers | Create a new instance of the model and persist it into the data source.
[**teamMembersPut**](TeamMemberApi.md#teamMembersPut) | **PUT** /TeamMembers | Replace an existing model instance or insert a new one into the data source.
[**teamMembersReplaceOrCreatePost**](TeamMemberApi.md#teamMembersReplaceOrCreatePost) | **POST** /TeamMembers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamMembersUpdatePost**](TeamMemberApi.md#teamMembersUpdatePost) | **POST** /TeamMembers/update | Update instances of the model matched by {{where}} from the data source.
[**teamMembersUpsertWithWherePost**](TeamMemberApi.md#teamMembersUpsertWithWherePost) | **POST** /TeamMembers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamMembersChangeStreamGet**
> \SplFileObject teamMembersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamMembersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersChangeStreamPost**
> \SplFileObject teamMembersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamMembersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersCountGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersFindOneGet**
> \Swagger\Client\Model\TeamMember teamMembersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersGet**
> \Swagger\Client\Model\TeamMember[] teamMembersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdAssignedDesignsCountGet($id, $where)

Counts assignedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdAssignedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsDelete**
> teamMembersIdAssignedDesignsDelete($id)

Deletes all assignedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdAssignedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsFkDelete**
> teamMembersIdAssignedDesignsFkDelete($id, $fk)

Delete a related item by id for assignedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $api_instance->teamMembersIdAssignedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsFkGet**
> \Swagger\Client\Model\Design teamMembersIdAssignedDesignsFkGet($id, $fk)

Find a related item by id for assignedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $result = $api_instance->teamMembersIdAssignedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsFkPut**
> \Swagger\Client\Model\Design teamMembersIdAssignedDesignsFkPut($id, $fk, $data)

Update a related item by id for assignedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for assignedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdAssignedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for assignedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsGet**
> \Swagger\Client\Model\Design[] teamMembersIdAssignedDesignsGet($id, $filter)

Queries assignedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdAssignedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdAssignedDesignsPost**
> \Swagger\Client\Model\Design teamMembersIdAssignedDesignsPost($id, $data)

Creates a new instance in assignedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdAssignedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdAssignedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdCommentedDesignsCountGet($id, $where)

Counts commentedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdCommentedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsDelete**
> teamMembersIdCommentedDesignsDelete($id)

Deletes all commentedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdCommentedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsFkDelete**
> teamMembersIdCommentedDesignsFkDelete($id, $fk)

Delete a related item by id for commentedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $api_instance->teamMembersIdCommentedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsFkGet**
> \Swagger\Client\Model\Design teamMembersIdCommentedDesignsFkGet($id, $fk)

Find a related item by id for commentedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $result = $api_instance->teamMembersIdCommentedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsFkPut**
> \Swagger\Client\Model\Design teamMembersIdCommentedDesignsFkPut($id, $fk, $data)

Update a related item by id for commentedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdCommentedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsGet**
> \Swagger\Client\Model\Design[] teamMembersIdCommentedDesignsGet($id, $filter)

Queries commentedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdCommentedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsPost**
> \Swagger\Client\Model\Design teamMembersIdCommentedDesignsPost($id, $data)

Creates a new instance in commentedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdCommentedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsRelFkDelete**
> teamMembersIdCommentedDesignsRelFkDelete($id, $fk)

Remove the commentedDesigns relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $api_instance->teamMembersIdCommentedDesignsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsRelFkHead**
> bool teamMembersIdCommentedDesignsRelFkHead($id, $fk)

Check the existence of commentedDesigns relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $result = $api_instance->teamMembersIdCommentedDesignsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCommentedDesignsRelFkPut**
> \Swagger\Client\Model\DesignComment teamMembersIdCommentedDesignsRelFkPut($id, $fk, $data)

Add a related item by id for commentedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for commentedDesigns
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->teamMembersIdCommentedDesignsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCommentedDesignsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for commentedDesigns |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdCustomerGet**
> \Swagger\Client\Model\Customer teamMembersIdCustomerGet($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMembersIdCustomerGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdCustomerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDelete**
> object teamMembersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMembersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDelete: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdDesignCommentsCountGet($id, $where)

Counts designComments of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdDesignCommentsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsDelete**
> teamMembersIdDesignCommentsDelete($id)

Deletes all designComments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdDesignCommentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsFkDelete**
> teamMembersIdDesignCommentsFkDelete($id, $fk)

Delete a related item by id for designComments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designComments

try {
    $api_instance->teamMembersIdDesignCommentsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designComments |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsFkGet**
> \Swagger\Client\Model\DesignComment teamMembersIdDesignCommentsFkGet($id, $fk)

Find a related item by id for designComments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designComments

try {
    $result = $api_instance->teamMembersIdDesignCommentsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designComments |

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsFkPut**
> \Swagger\Client\Model\DesignComment teamMembersIdDesignCommentsFkPut($id, $fk, $data)

Update a related item by id for designComments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designComments
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->teamMembersIdDesignCommentsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designComments |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsGet**
> \Swagger\Client\Model\DesignComment[] teamMembersIdDesignCommentsGet($id, $filter)

Queries designComments of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdDesignCommentsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment[]**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignCommentsPost**
> \Swagger\Client\Model\DesignComment teamMembersIdDesignCommentsPost($id, $data)

Creates a new instance in designComments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->teamMembersIdDesignCommentsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignCommentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdDesignFoldersCountGet($id, $where)

Counts designFolders of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdDesignFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersDelete**
> teamMembersIdDesignFoldersDelete($id)

Deletes all designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdDesignFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersFkDelete**
> teamMembersIdDesignFoldersFkDelete($id, $fk)

Delete a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $api_instance->teamMembersIdDesignFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designFolders |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersFkGet**
> \Swagger\Client\Model\DesignFolder teamMembersIdDesignFoldersFkGet($id, $fk)

Find a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designFolders

try {
    $result = $api_instance->teamMembersIdDesignFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designFolders |

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersFkPut**
> \Swagger\Client\Model\DesignFolder teamMembersIdDesignFoldersFkPut($id, $fk, $data)

Update a related item by id for designFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designFolders
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->teamMembersIdDesignFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designFolders |
 **data** | [**\Swagger\Client\Model\DesignFolder**](../Model/\Swagger\Client\Model\DesignFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersGet**
> \Swagger\Client\Model\DesignFolder[] teamMembersIdDesignFoldersGet($id, $filter)

Queries designFolders of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdDesignFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder[]**](../Model/DesignFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignFoldersPost**
> \Swagger\Client\Model\DesignFolder teamMembersIdDesignFoldersPost($id, $data)

Creates a new instance in designFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DesignFolder(); // \Swagger\Client\Model\DesignFolder | 

try {
    $result = $api_instance->teamMembersIdDesignFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DesignFolder**](../Model/\Swagger\Client\Model\DesignFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignFolder**](../Model/DesignFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamMembersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMembersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdGet**
> \Swagger\Client\Model\TeamMember teamMembersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamMembersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMembersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdHead: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdImageFoldersCountGet($id, $where)

Counts imageFolders of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdImageFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersDelete**
> teamMembersIdImageFoldersDelete($id)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdImageFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersFkDelete**
> teamMembersIdImageFoldersFkDelete($id, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamMembersIdImageFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder teamMembersIdImageFoldersFkGet($id, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamMembersIdImageFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder teamMembersIdImageFoldersFkPut($id, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamMembersIdImageFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] teamMembersIdImageFoldersGet($id, $filter)

Queries imageFolders of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdImageFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersPost**
> \Swagger\Client\Model\ImageFolder teamMembersIdImageFoldersPost($id, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamMembersIdImageFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersRelFkDelete**
> teamMembersIdImageFoldersRelFkDelete($id, $fk)

Remove the imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamMembersIdImageFoldersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersRelFkHead**
> bool teamMembersIdImageFoldersRelFkHead($id, $fk)

Check the existence of imageFolders relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamMembersIdImageFoldersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdImageFoldersRelFkPut**
> \Swagger\Client\Model\ImageFolderMember teamMembersIdImageFoldersRelFkPut($id, $fk, $data)

Add a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->teamMembersIdImageFoldersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdImageFoldersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdInvitationTicketsCountGet($id, $where)

Counts invitationTickets of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdInvitationTicketsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsDelete**
> teamMembersIdInvitationTicketsDelete($id)

Deletes all invitationTickets of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdInvitationTicketsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsFkDelete**
> teamMembersIdInvitationTicketsFkDelete($id, $fk)

Delete a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for invitationTickets

try {
    $api_instance->teamMembersIdInvitationTicketsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for invitationTickets |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsFkGet**
> \Swagger\Client\Model\InvitationTicket teamMembersIdInvitationTicketsFkGet($id, $fk)

Find a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for invitationTickets

try {
    $result = $api_instance->teamMembersIdInvitationTicketsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for invitationTickets |

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsFkPut**
> \Swagger\Client\Model\InvitationTicket teamMembersIdInvitationTicketsFkPut($id, $fk, $data)

Update a related item by id for invitationTickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for invitationTickets
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | 

try {
    $result = $api_instance->teamMembersIdInvitationTicketsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for invitationTickets |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] teamMembersIdInvitationTicketsGet($id, $filter)

Queries invitationTickets of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdInvitationTicketsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInvitationTicketsPost**
> \Swagger\Client\Model\InvitationTicket teamMembersIdInvitationTicketsPost($id, $data)

Creates a new instance in invitationTickets of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | 

try {
    $result = $api_instance->teamMembersIdInvitationTicketsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInvitationTicketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdInviteInviteePost**
> \Swagger\Client\Model\InvitationTicket teamMembersIdInviteInviteePost($id, $id2, $invitee, $data)

Invite somebody to join the team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$invitee = "invitee_example"; // string | 
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdInviteInviteePost($id, $id2, $invitee, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdInviteInviteePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **invitee** | **string**|  |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPatch**
> \Swagger\Client\Model\TeamMember teamMembersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | An object of model property name/value pairs

try {
    $result = $api_instance->teamMembersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsAvailableGet**
> \Swagger\Client\Model\Portal[] teamMembersIdPortalsAvailableGet($id, $id2, $filter)

Find all available Portals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdPortalsAvailableGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsAvailableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdPortalsCountGet($id, $where)

Counts portals of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdPortalsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsDelete**
> teamMembersIdPortalsDelete($id)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdPortalsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsFkAvailableGet**
> \Swagger\Client\Model\Portal teamMembersIdPortalsFkAvailableGet($id, $id2, $fk, $include)

Find available Portal by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$fk = "fk_example"; // string | 
$include = "include_example"; // string | Only include changes that match this filter

try {
    $result = $api_instance->teamMembersIdPortalsFkAvailableGet($id, $id2, $fk, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsFkAvailableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **fk** | **string**|  |
 **include** | **string**| Only include changes that match this filter | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsFkDelete**
> teamMembersIdPortalsFkDelete($id, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamMembersIdPortalsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsFkGet**
> \Swagger\Client\Model\Portal teamMembersIdPortalsFkGet($id, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamMembersIdPortalsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsFkPut**
> \Swagger\Client\Model\Portal teamMembersIdPortalsFkPut($id, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamMembersIdPortalsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsGet**
> \Swagger\Client\Model\Portal[] teamMembersIdPortalsGet($id, $filter)

Queries portals of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdPortalsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsNkDesignsFkFlashvarsGet**
> \Swagger\Client\Model\FlashVar teamMembersIdPortalsNkDesignsFkFlashvarsGet($id, $id2, $nk, $fk)

Find Design FlashVars within available Portal by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$nk = "nk_example"; // string | 
$fk = "fk_example"; // string | 

try {
    $result = $api_instance->teamMembersIdPortalsNkDesignsFkFlashvarsGet($id, $id2, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsNkDesignsFkFlashvarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **nk** | **string**|  |
 **fk** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlashVar**](../Model/FlashVar.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsPost**
> \Swagger\Client\Model\Portal teamMembersIdPortalsPost($id, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamMembersIdPortalsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsRelFkDelete**
> teamMembersIdPortalsRelFkDelete($id, $fk)

Remove the portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamMembersIdPortalsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsRelFkHead**
> bool teamMembersIdPortalsRelFkHead($id, $fk)

Check the existence of portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamMembersIdPortalsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsRelFkPut**
> \Swagger\Client\Model\PortalMember teamMembersIdPortalsRelFkPut($id, $fk, $data)

Add a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | 

try {
    $result = $api_instance->teamMembersIdPortalsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPut**
> \Swagger\Client\Model\TeamMember teamMembersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReplacePost**
> \Swagger\Client\Model\TeamMember teamMembersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdRequestedDesignExportsCountGet($id, $where)

Counts requestedDesignExports of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdRequestedDesignExportsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsDelete**
> teamMembersIdRequestedDesignExportsDelete($id)

Deletes all requestedDesignExports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdRequestedDesignExportsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsFkDelete**
> teamMembersIdRequestedDesignExportsFkDelete($id, $fk)

Delete a related item by id for requestedDesignExports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesignExports

try {
    $api_instance->teamMembersIdRequestedDesignExportsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesignExports |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsFkGet**
> \Swagger\Client\Model\DesignExport teamMembersIdRequestedDesignExportsFkGet($id, $fk)

Find a related item by id for requestedDesignExports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesignExports

try {
    $result = $api_instance->teamMembersIdRequestedDesignExportsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesignExports |

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsFkPut**
> \Swagger\Client\Model\DesignExport teamMembersIdRequestedDesignExportsFkPut($id, $fk, $data)

Update a related item by id for requestedDesignExports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesignExports
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignExportsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesignExports |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsGet**
> \Swagger\Client\Model\DesignExport[] teamMembersIdRequestedDesignExportsGet($id, $filter)

Queries requestedDesignExports of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignExportsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport[]**](../Model/DesignExport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignExportsPost**
> \Swagger\Client\Model\DesignExport teamMembersIdRequestedDesignExportsPost($id, $data)

Creates a new instance in requestedDesignExports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignExportsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignExportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdRequestedDesignsCountGet($id, $where)

Counts requestedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdRequestedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsDelete**
> teamMembersIdRequestedDesignsDelete($id)

Deletes all requestedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdRequestedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsFkDelete**
> teamMembersIdRequestedDesignsFkDelete($id, $fk)

Delete a related item by id for requestedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesigns

try {
    $api_instance->teamMembersIdRequestedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesigns |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsFkGet**
> \Swagger\Client\Model\Design teamMembersIdRequestedDesignsFkGet($id, $fk)

Find a related item by id for requestedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesigns

try {
    $result = $api_instance->teamMembersIdRequestedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsFkPut**
> \Swagger\Client\Model\Design teamMembersIdRequestedDesignsFkPut($id, $fk, $data)

Update a related item by id for requestedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for requestedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for requestedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsGet**
> \Swagger\Client\Model\Design[] teamMembersIdRequestedDesignsGet($id, $filter)

Queries requestedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdRequestedDesignsPost**
> \Swagger\Client\Model\Design teamMembersIdRequestedDesignsPost($id, $data)

Creates a new instance in requestedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdRequestedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdRequestedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdReviewedDesignsCountGet($id, $where)

Counts reviewedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdReviewedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsDelete**
> teamMembersIdReviewedDesignsDelete($id)

Deletes all reviewedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdReviewedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsFkDelete**
> teamMembersIdReviewedDesignsFkDelete($id, $fk)

Delete a related item by id for reviewedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $api_instance->teamMembersIdReviewedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsFkGet**
> \Swagger\Client\Model\Design teamMembersIdReviewedDesignsFkGet($id, $fk)

Find a related item by id for reviewedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $result = $api_instance->teamMembersIdReviewedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsFkPut**
> \Swagger\Client\Model\Design teamMembersIdReviewedDesignsFkPut($id, $fk, $data)

Update a related item by id for reviewedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for reviewedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdReviewedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsGet**
> \Swagger\Client\Model\Design[] teamMembersIdReviewedDesignsGet($id, $filter)

Queries reviewedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdReviewedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdReviewedDesignsPost**
> \Swagger\Client\Model\Design teamMembersIdReviewedDesignsPost($id, $data)

Creates a new instance in reviewedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdReviewedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdReviewedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTargetModelTargetIdInviteInviteePost**
> \Swagger\Client\Model\InvitationTicket teamMembersIdTargetModelTargetIdInviteInviteePost($id, $id2, $targetModel, $targetId, $invitee, $data)

Invite somebody to join a team, portal or other targets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$targetModel = "targetModel_example"; // string | 
$targetId = "targetId_example"; // string | 
$invitee = "invitee_example"; // string | 
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTargetModelTargetIdInviteInviteePost($id, $id2, $targetModel, $targetId, $invitee, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTargetModelTargetIdInviteInviteePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **targetModel** | **string**|  |
 **targetId** | **string**|  |
 **invitee** | **string**|  |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTargetModelTargetIdInvitePost**
> \Swagger\Client\Model\XAny[] teamMembersIdTargetModelTargetIdInvitePost($id, $id2, $targetModel, $targetId, $data)

Invite a group of people to join a team, portal or other targets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$targetModel = "targetModel_example"; // string | 
$targetId = "targetId_example"; // string | 
$data = array(new XAny()); // \Swagger\Client\Model\XAny[] | 

try {
    $result = $api_instance->teamMembersIdTargetModelTargetIdInvitePost($id, $id2, $targetModel, $targetId, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTargetModelTargetIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **targetModel** | **string**|  |
 **targetId** | **string**|  |
 **data** | [**\Swagger\Client\Model\XAny[]**](../Model/XAny.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\XAny[]**](../Model/XAny.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBrandDelete**
> teamMembersIdTeamBrandDelete($id)

Deletes brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamBrandDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBrandDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBrandGet**
> \Swagger\Client\Model\TeamBrand teamMembersIdTeamBrandGet($id, $refresh)

Fetches hasOne relation brand.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMembersIdTeamBrandGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBrandGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBrandPost**
> \Swagger\Client\Model\TeamBrand teamMembersIdTeamBrandPost($id, $data)

Creates a new instance in brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->teamMembersIdTeamBrandPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBrandPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBrandPut**
> \Swagger\Client\Model\TeamBrand teamMembersIdTeamBrandPut($id, $data)

Update brand of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamBrand(); // \Swagger\Client\Model\TeamBrand | 

try {
    $result = $api_instance->teamMembersIdTeamBrandPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBrandPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamBrand**](../Model/\Swagger\Client\Model\TeamBrand.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBrand**](../Model/TeamBrand.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamGet**
> \Swagger\Client\Model\Team teamMembersIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMembersIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamImageFoldersCountGet($id, $where)

Counts imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamImageFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersDelete**
> teamMembersIdTeamImageFoldersDelete($id)

Deletes all imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamImageFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersFkDelete**
> teamMembersIdTeamImageFoldersFkDelete($id, $fk)

Delete a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $api_instance->teamMembersIdTeamImageFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersFkGet**
> \Swagger\Client\Model\ImageFolder teamMembersIdTeamImageFoldersFkGet($id, $fk)

Find a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders

try {
    $result = $api_instance->teamMembersIdTeamImageFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersFkPut**
> \Swagger\Client\Model\ImageFolder teamMembersIdTeamImageFoldersFkPut($id, $fk, $data)

Update a related item by id for imageFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for imageFolders
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamMembersIdTeamImageFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for imageFolders |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] teamMembersIdTeamImageFoldersGet($id, $filter)

Queries imageFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamImageFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImageFoldersPost**
> \Swagger\Client\Model\ImageFolder teamMembersIdTeamImageFoldersPost($id, $data)

Creates a new instance in imageFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->teamMembersIdTeamImageFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamImagesCountGet($id, $where)

Counts images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamImagesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesDelete**
> teamMembersIdTeamImagesDelete($id)

Deletes all images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamImagesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesFkDelete**
> teamMembersIdTeamImagesFkDelete($id, $fk)

Delete a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for images

try {
    $api_instance->teamMembersIdTeamImagesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for images |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesFkGet**
> \Swagger\Client\Model\Image teamMembersIdTeamImagesFkGet($id, $fk)

Find a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for images

try {
    $result = $api_instance->teamMembersIdTeamImagesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for images |

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesFkPut**
> \Swagger\Client\Model\Image teamMembersIdTeamImagesFkPut($id, $fk, $data)

Update a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for images
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamMembersIdTeamImagesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for images |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesGet**
> \Swagger\Client\Model\Image[] teamMembersIdTeamImagesGet($id, $filter)

Queries images of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamImagesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamImagesPost**
> \Swagger\Client\Model\Image teamMembersIdTeamImagesPost($id, $data)

Creates a new instance in images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->teamMembersIdTeamImagesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamMembersCountGet($id, $where)

Counts members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersDelete**
> teamMembersIdTeamMembersDelete($id)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersFkDelete**
> teamMembersIdTeamMembersFkDelete($id, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamMembersIdTeamMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersFkGet**
> \Swagger\Client\Model\Customer teamMembersIdTeamMembersFkGet($id, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamMembersIdTeamMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersFkPut**
> \Swagger\Client\Model\Customer teamMembersIdTeamMembersFkPut($id, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->teamMembersIdTeamMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersGet**
> \Swagger\Client\Model\Customer[] teamMembersIdTeamMembersGet($id, $filter)

Queries members of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersPost**
> \Swagger\Client\Model\Customer teamMembersIdTeamMembersPost($id, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->teamMembersIdTeamMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersRelFkDelete**
> teamMembersIdTeamMembersRelFkDelete($id, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->teamMembersIdTeamMembersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersRelFkHead**
> bool teamMembersIdTeamMembersRelFkHead($id, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->teamMembersIdTeamMembersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamMembersRelFkPut**
> \Swagger\Client\Model\TeamMember teamMembersIdTeamMembersRelFkPut($id, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamMembersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamPortalsCountGet($id, $where)

Counts portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamPortalsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsDelete**
> teamMembersIdTeamPortalsDelete($id)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamPortalsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsFkDelete**
> teamMembersIdTeamPortalsFkDelete($id, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->teamMembersIdTeamPortalsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsFkGet**
> \Swagger\Client\Model\Portal teamMembersIdTeamPortalsFkGet($id, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->teamMembersIdTeamPortalsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsFkPut**
> \Swagger\Client\Model\Portal teamMembersIdTeamPortalsFkPut($id, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamMembersIdTeamPortalsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsGet**
> \Swagger\Client\Model\Portal[] teamMembersIdTeamPortalsGet($id, $filter)

Queries portals of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamPortalsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPortalsPost**
> \Swagger\Client\Model\Portal teamMembersIdTeamPortalsPost($id, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->teamMembersIdTeamPortalsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamTeamMembersCountGet($id, $where)

Counts teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamTeamMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersDelete**
> teamMembersIdTeamTeamMembersDelete($id)

Deletes all teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamTeamMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersFkDelete**
> teamMembersIdTeamTeamMembersFkDelete($id, $fk)

Delete a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $api_instance->teamMembersIdTeamTeamMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersFkGet**
> \Swagger\Client\Model\TeamMember teamMembersIdTeamTeamMembersFkGet($id, $fk)

Find a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for teamMembers

try {
    $result = $api_instance->teamMembersIdTeamTeamMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for teamMembers |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersFkPut**
> \Swagger\Client\Model\TeamMember teamMembersIdTeamTeamMembersFkPut($id, $fk, $data)

Update a related item by id for teamMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for teamMembers
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamTeamMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for teamMembers |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersGet**
> \Swagger\Client\Model\TeamMember[] teamMembersIdTeamTeamMembersGet($id, $filter)

Queries teamMembers of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamTeamMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamMembersPost**
> \Swagger\Client\Model\TeamMember teamMembersIdTeamTeamMembersPost($id, $data)

Creates a new instance in teamMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamTeamMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamTemplateFoldersCountGet($id, $where)

Counts templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamTemplateFoldersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersDelete**
> teamMembersIdTeamTemplateFoldersDelete($id)

Deletes all templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamTemplateFoldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersFkDelete**
> teamMembersIdTeamTemplateFoldersFkDelete($id, $fk)

Delete a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $api_instance->teamMembersIdTeamTemplateFoldersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersFkGet**
> \Swagger\Client\Model\TeamTemplateFolder teamMembersIdTeamTemplateFoldersFkGet($id, $fk)

Find a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templateFolders

try {
    $result = $api_instance->teamMembersIdTeamTemplateFoldersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templateFolders |

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersFkPut**
> \Swagger\Client\Model\TeamTemplateFolder teamMembersIdTeamTemplateFoldersFkPut($id, $fk, $data)

Update a related item by id for templateFolders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templateFolders
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->teamMembersIdTeamTemplateFoldersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templateFolders |
 **data** | [**\Swagger\Client\Model\TeamTemplateFolder**](../Model/\Swagger\Client\Model\TeamTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersGet**
> \Swagger\Client\Model\TeamTemplateFolder[] teamMembersIdTeamTemplateFoldersGet($id, $filter)

Queries templateFolders of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamTemplateFoldersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder[]**](../Model/TeamTemplateFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplateFoldersPost**
> \Swagger\Client\Model\TeamTemplateFolder teamMembersIdTeamTemplateFoldersPost($id, $data)

Creates a new instance in templateFolders of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamTemplateFolder(); // \Swagger\Client\Model\TeamTemplateFolder | 

try {
    $result = $api_instance->teamMembersIdTeamTemplateFoldersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamTemplateFolder**](../Model/\Swagger\Client\Model\TeamTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamTemplatesCountGet($id, $where)

Counts templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesDelete**
> teamMembersIdTeamTemplatesDelete($id)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesFkDelete**
> teamMembersIdTeamTemplatesFkDelete($id, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamMembersIdTeamTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesFkGet**
> \Swagger\Client\Model\Template teamMembersIdTeamTemplatesFkGet($id, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamMembersIdTeamTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesFkPut**
> \Swagger\Client\Model\Template teamMembersIdTeamTemplatesFkPut($id, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdTeamTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesGet**
> \Swagger\Client\Model\Template[] teamMembersIdTeamTemplatesGet($id, $filter)

Queries templates of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesPost**
> \Swagger\Client\Model\Template teamMembersIdTeamTemplatesPost($id, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdTeamTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesWithDesignsGet**
> \Swagger\Client\Model\Template[] teamMembersIdTeamTemplatesWithDesignsGet($id, $id2, $filter)

List Templates with Designs for the Team of TeamMember

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTeamTemplatesWithDesignsGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesWithDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamWorkflowsCountGet($id, $where)

Counts workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamWorkflowsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsDelete**
> teamMembersIdTeamWorkflowsDelete($id)

Deletes all workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamWorkflowsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsFkDelete**
> teamMembersIdTeamWorkflowsFkDelete($id, $fk)

Delete a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $api_instance->teamMembersIdTeamWorkflowsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsFkGet**
> \Swagger\Client\Model\Workflow teamMembersIdTeamWorkflowsFkGet($id, $fk)

Find a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $result = $api_instance->teamMembersIdTeamWorkflowsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsFkPut**
> \Swagger\Client\Model\Workflow teamMembersIdTeamWorkflowsFkPut($id, $fk, $data)

Update a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamMembersIdTeamWorkflowsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsGet**
> \Swagger\Client\Model\Workflow[] teamMembersIdTeamWorkflowsGet($id, $filter)

Queries workflows of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamWorkflowsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamWorkflowsPost**
> \Swagger\Client\Model\Workflow teamMembersIdTeamWorkflowsPost($id, $data)

Creates a new instance in workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamMembersIdTeamWorkflowsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamWorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTemplatesCountGet($id, $where)

Counts templates of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesDelete**
> teamMembersIdTemplatesDelete($id)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesFkDelete**
> teamMembersIdTemplatesFkDelete($id, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamMembersIdTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesFkFlashvarsGet**
> \Swagger\Client\Model\FlashVar teamMembersIdTemplatesFkFlashvarsGet($id, $id2, $fk)

Find Template FlashVars by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$fk = "fk_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTemplatesFkFlashvarsGet($id, $id2, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesFkFlashvarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**|  |
 **fk** | **string**|  |

### Return type

[**\Swagger\Client\Model\FlashVar**](../Model/FlashVar.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesFkGet**
> \Swagger\Client\Model\Template teamMembersIdTemplatesFkGet($id, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamMembersIdTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesFkPut**
> \Swagger\Client\Model\Template teamMembersIdTemplatesFkPut($id, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesGet**
> \Swagger\Client\Model\Template[] teamMembersIdTemplatesGet($id, $filter)

Queries templates of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesPost**
> \Swagger\Client\Model\Template teamMembersIdTemplatesPost($id, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesRelFkDelete**
> teamMembersIdTemplatesRelFkDelete($id, $fk)

Remove the templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->teamMembersIdTemplatesRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesRelFkHead**
> bool teamMembersIdTemplatesRelFkHead($id, $fk)

Check the existence of templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->teamMembersIdTemplatesRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTemplatesRelFkPut**
> \Swagger\Client\Model\TemplateMember teamMembersIdTemplatesRelFkPut($id, $fk, $data)

Add a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\TemplateMember(); // \Swagger\Client\Model\TemplateMember | 

try {
    $result = $api_instance->teamMembersIdTemplatesRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTemplatesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\TemplateMember**](../Model/\Swagger\Client\Model\TemplateMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateMember**](../Model/TemplateMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdUploadedTemplatesCountGet($id, $where)

Counts uploadedTemplates of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdUploadedTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesDelete**
> teamMembersIdUploadedTemplatesDelete($id)

Deletes all uploadedTemplates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdUploadedTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesFkDelete**
> teamMembersIdUploadedTemplatesFkDelete($id, $fk)

Delete a related item by id for uploadedTemplates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for uploadedTemplates

try {
    $api_instance->teamMembersIdUploadedTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for uploadedTemplates |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesFkGet**
> \Swagger\Client\Model\Template teamMembersIdUploadedTemplatesFkGet($id, $fk)

Find a related item by id for uploadedTemplates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for uploadedTemplates

try {
    $result = $api_instance->teamMembersIdUploadedTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for uploadedTemplates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesFkPut**
> \Swagger\Client\Model\Template teamMembersIdUploadedTemplatesFkPut($id, $fk, $data)

Update a related item by id for uploadedTemplates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for uploadedTemplates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdUploadedTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for uploadedTemplates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesGet**
> \Swagger\Client\Model\Template[] teamMembersIdUploadedTemplatesGet($id, $filter)

Queries uploadedTemplates of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdUploadedTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdUploadedTemplatesPost**
> \Swagger\Client\Model\Template teamMembersIdUploadedTemplatesPost($id, $data)

Creates a new instance in uploadedTemplates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->teamMembersIdUploadedTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdUploadedTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdWorkflowsCountGet($id, $where)

Counts workflows of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdWorkflowsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsDelete**
> teamMembersIdWorkflowsDelete($id)

Deletes all workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdWorkflowsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsFkDelete**
> teamMembersIdWorkflowsFkDelete($id, $fk)

Delete a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $api_instance->teamMembersIdWorkflowsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsFkGet**
> \Swagger\Client\Model\Workflow teamMembersIdWorkflowsFkGet($id, $fk)

Find a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows

try {
    $result = $api_instance->teamMembersIdWorkflowsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsFkPut**
> \Swagger\Client\Model\Workflow teamMembersIdWorkflowsFkPut($id, $fk, $data)

Update a related item by id for workflows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for workflows
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamMembersIdWorkflowsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for workflows |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsGet**
> \Swagger\Client\Model\Workflow[] teamMembersIdWorkflowsGet($id, $filter)

Queries workflows of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdWorkflowsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow[]**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdWorkflowsPost**
> \Swagger\Client\Model\Workflow teamMembersIdWorkflowsPost($id, $data)

Creates a new instance in workflows of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Workflow(); // \Swagger\Client\Model\Workflow | 

try {
    $result = $api_instance->teamMembersIdWorkflowsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdWorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Workflow**](../Model/\Swagger\Client\Model\Workflow.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersPatch**
> \Swagger\Client\Model\TeamMember teamMembersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersPost**
> \Swagger\Client\Model\TeamMember teamMembersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersPut**
> \Swagger\Client\Model\TeamMember teamMembersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersReplaceOrCreatePost**
> \Swagger\Client\Model\TeamMember teamMembersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 teamMembersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | An object of model property name/value pairs

try {
    $result = $api_instance->teamMembersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersUpsertWithWherePost**
> \Swagger\Client\Model\TeamMember teamMembersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | An object of model property name/value pairs

try {
    $result = $api_instance->teamMembersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

