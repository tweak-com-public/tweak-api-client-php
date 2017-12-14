# Tweak\Api\TeamMemberApi

All URIs are relative to *https://apicdn.tweak.com/api*

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
[**teamMembersIdDesignSharesCountGet**](TeamMemberApi.md#teamMembersIdDesignSharesCountGet) | **GET** /TeamMembers/{id}/designShares/count | Counts designShares of TeamMember.
[**teamMembersIdDesignSharesDelete**](TeamMemberApi.md#teamMembersIdDesignSharesDelete) | **DELETE** /TeamMembers/{id}/designShares | Deletes all designShares of this model.
[**teamMembersIdDesignSharesFkDelete**](TeamMemberApi.md#teamMembersIdDesignSharesFkDelete) | **DELETE** /TeamMembers/{id}/designShares/{fk} | Delete a related item by id for designShares.
[**teamMembersIdDesignSharesFkGet**](TeamMemberApi.md#teamMembersIdDesignSharesFkGet) | **GET** /TeamMembers/{id}/designShares/{fk} | Find a related item by id for designShares.
[**teamMembersIdDesignSharesFkPut**](TeamMemberApi.md#teamMembersIdDesignSharesFkPut) | **PUT** /TeamMembers/{id}/designShares/{fk} | Update a related item by id for designShares.
[**teamMembersIdDesignSharesGet**](TeamMemberApi.md#teamMembersIdDesignSharesGet) | **GET** /TeamMembers/{id}/designShares | Queries designShares of TeamMember.
[**teamMembersIdDesignSharesPost**](TeamMemberApi.md#teamMembersIdDesignSharesPost) | **POST** /TeamMembers/{id}/designShares | Creates a new instance in designShares of this model.
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
[**teamMembersIdNotificationsCountGet**](TeamMemberApi.md#teamMembersIdNotificationsCountGet) | **GET** /TeamMembers/{id}/notifications/count | Counts notifications of TeamMember.
[**teamMembersIdNotificationsDelete**](TeamMemberApi.md#teamMembersIdNotificationsDelete) | **DELETE** /TeamMembers/{id}/notifications | Deletes all notifications of this model.
[**teamMembersIdNotificationsFkDelete**](TeamMemberApi.md#teamMembersIdNotificationsFkDelete) | **DELETE** /TeamMembers/{id}/notifications/{fk} | Delete a related item by id for notifications.
[**teamMembersIdNotificationsFkGet**](TeamMemberApi.md#teamMembersIdNotificationsFkGet) | **GET** /TeamMembers/{id}/notifications/{fk} | Find a related item by id for notifications.
[**teamMembersIdNotificationsFkPut**](TeamMemberApi.md#teamMembersIdNotificationsFkPut) | **PUT** /TeamMembers/{id}/notifications/{fk} | Update a related item by id for notifications.
[**teamMembersIdNotificationsGet**](TeamMemberApi.md#teamMembersIdNotificationsGet) | **GET** /TeamMembers/{id}/notifications | Queries notifications of TeamMember.
[**teamMembersIdNotificationsPost**](TeamMemberApi.md#teamMembersIdNotificationsPost) | **POST** /TeamMembers/{id}/notifications | Creates a new instance in notifications of this model.
[**teamMembersIdPatch**](TeamMemberApi.md#teamMembersIdPatch) | **PATCH** /TeamMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamMembersIdPortalsAvailableGet**](TeamMemberApi.md#teamMembersIdPortalsAvailableGet) | **GET** /TeamMembers/{id}/portals/available | Find all available Portals
[**teamMembersIdPortalsCountGet**](TeamMemberApi.md#teamMembersIdPortalsCountGet) | **GET** /TeamMembers/{id}/portals/count | Counts portals of TeamMember.
[**teamMembersIdPortalsDelete**](TeamMemberApi.md#teamMembersIdPortalsDelete) | **DELETE** /TeamMembers/{id}/portals | Deletes all portals of this model.
[**teamMembersIdPortalsFkAvailableGet**](TeamMemberApi.md#teamMembersIdPortalsFkAvailableGet) | **GET** /TeamMembers/{id}/portals/{fk}/available | Find available Portal by id
[**teamMembersIdPortalsFkDelete**](TeamMemberApi.md#teamMembersIdPortalsFkDelete) | **DELETE** /TeamMembers/{id}/portals/{fk} | Delete a related item by id for portals.
[**teamMembersIdPortalsFkGet**](TeamMemberApi.md#teamMembersIdPortalsFkGet) | **GET** /TeamMembers/{id}/portals/{fk} | Find a related item by id for portals.
[**teamMembersIdPortalsFkLogoPut**](TeamMemberApi.md#teamMembersIdPortalsFkLogoPut) | **PUT** /TeamMembers/{id}/portals/{fk}/logo | Change Portal logo
[**teamMembersIdPortalsFkPut**](TeamMemberApi.md#teamMembersIdPortalsFkPut) | **PUT** /TeamMembers/{id}/portals/{fk} | Update a related item by id for portals.
[**teamMembersIdPortalsGet**](TeamMemberApi.md#teamMembersIdPortalsGet) | **GET** /TeamMembers/{id}/portals | Queries portals of TeamMember.
[**teamMembersIdPortalsNkDesignsFkFlashvarsGet**](TeamMemberApi.md#teamMembersIdPortalsNkDesignsFkFlashvarsGet) | **GET** /TeamMembers/{id}/portals/{nk}/designs/{fk}/flashvars | Find Design FlashVars within available Portal by id
[**teamMembersIdPortalsNkTemplatesFkFlashvarsGet**](TeamMemberApi.md#teamMembersIdPortalsNkTemplatesFkFlashvarsGet) | **GET** /TeamMembers/{id}/portals/{nk}/templates/{fk}/flashvars | Find Template FlashVars within available Portal by id
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
[**teamMembersIdSharedDesignsCountGet**](TeamMemberApi.md#teamMembersIdSharedDesignsCountGet) | **GET** /TeamMembers/{id}/sharedDesigns/count | Counts sharedDesigns of TeamMember.
[**teamMembersIdSharedDesignsDelete**](TeamMemberApi.md#teamMembersIdSharedDesignsDelete) | **DELETE** /TeamMembers/{id}/sharedDesigns | Deletes all sharedDesigns of this model.
[**teamMembersIdSharedDesignsFkDelete**](TeamMemberApi.md#teamMembersIdSharedDesignsFkDelete) | **DELETE** /TeamMembers/{id}/sharedDesigns/{fk} | Delete a related item by id for sharedDesigns.
[**teamMembersIdSharedDesignsFkGet**](TeamMemberApi.md#teamMembersIdSharedDesignsFkGet) | **GET** /TeamMembers/{id}/sharedDesigns/{fk} | Find a related item by id for sharedDesigns.
[**teamMembersIdSharedDesignsFkPut**](TeamMemberApi.md#teamMembersIdSharedDesignsFkPut) | **PUT** /TeamMembers/{id}/sharedDesigns/{fk} | Update a related item by id for sharedDesigns.
[**teamMembersIdSharedDesignsGet**](TeamMemberApi.md#teamMembersIdSharedDesignsGet) | **GET** /TeamMembers/{id}/sharedDesigns | Queries sharedDesigns of TeamMember.
[**teamMembersIdSharedDesignsPost**](TeamMemberApi.md#teamMembersIdSharedDesignsPost) | **POST** /TeamMembers/{id}/sharedDesigns | Creates a new instance in sharedDesigns of this model.
[**teamMembersIdSharedDesignsRelFkDelete**](TeamMemberApi.md#teamMembersIdSharedDesignsRelFkDelete) | **DELETE** /TeamMembers/{id}/sharedDesigns/rel/{fk} | Remove the sharedDesigns relation to an item by id.
[**teamMembersIdSharedDesignsRelFkHead**](TeamMemberApi.md#teamMembersIdSharedDesignsRelFkHead) | **HEAD** /TeamMembers/{id}/sharedDesigns/rel/{fk} | Check the existence of sharedDesigns relation to an item by id.
[**teamMembersIdSharedDesignsRelFkPut**](TeamMemberApi.md#teamMembersIdSharedDesignsRelFkPut) | **PUT** /TeamMembers/{id}/sharedDesigns/rel/{fk} | Add a related item by id for sharedDesigns.
[**teamMembersIdTargetModelTargetIdInviteInviteePost**](TeamMemberApi.md#teamMembersIdTargetModelTargetIdInviteInviteePost) | **POST** /TeamMembers/{id}/{targetModel}/{targetId}/invite/{invitee} | Invite somebody to join a team, portal or other targets
[**teamMembersIdTargetModelTargetIdInvitePost**](TeamMemberApi.md#teamMembersIdTargetModelTargetIdInvitePost) | **POST** /TeamMembers/{id}/{targetModel}/{targetId}/invite | Invite a group of people to join a team, portal or other targets
[**teamMembersIdTeamBillingAvailablePlansGet**](TeamMemberApi.md#teamMembersIdTeamBillingAvailablePlansGet) | **GET** /TeamMembers/{id}/team/billing/availablePlans | Get Available Plans
[**teamMembersIdTeamBillingCachedGet**](TeamMemberApi.md#teamMembersIdTeamBillingCachedGet) | **GET** /TeamMembers/{id}/team/billing/cached | Get Cached version of Team Billing
[**teamMembersIdTeamBillingCardDelete**](TeamMemberApi.md#teamMembersIdTeamBillingCardDelete) | **DELETE** /TeamMembers/{id}/team/billing/card | Delete Team Billing Card
[**teamMembersIdTeamBillingCardPost**](TeamMemberApi.md#teamMembersIdTeamBillingCardPost) | **POST** /TeamMembers/{id}/team/billing/card | Create Team Billing Card
[**teamMembersIdTeamBillingCardPut**](TeamMemberApi.md#teamMembersIdTeamBillingCardPut) | **PUT** /TeamMembers/{id}/team/billing/card | Update Team Billing Card
[**teamMembersIdTeamBillingInvoicesFkPost**](TeamMemberApi.md#teamMembersIdTeamBillingInvoicesFkPost) | **POST** /TeamMembers/{id}/team/billing/invoices/{fk} | Pay Team Billing Invoice
[**teamMembersIdTeamBillingInvoicesGet**](TeamMemberApi.md#teamMembersIdTeamBillingInvoicesGet) | **GET** /TeamMembers/{id}/team/billing/invoices | List Team Billing Invoices
[**teamMembersIdTeamBillingInvoicesUpcomingGet**](TeamMemberApi.md#teamMembersIdTeamBillingInvoicesUpcomingGet) | **GET** /TeamMembers/{id}/team/billing/invoices/upcoming | List Upcoming Team Billing Invoices
[**teamMembersIdTeamBillingPut**](TeamMemberApi.md#teamMembersIdTeamBillingPut) | **PUT** /TeamMembers/{id}/team/billing | Update Team Billing
[**teamMembersIdTeamBillingSubscriptionPlanPut**](TeamMemberApi.md#teamMembersIdTeamBillingSubscriptionPlanPut) | **PUT** /TeamMembers/{id}/team/billing/subscription/plan | Update Team Billing Subscription Plan
[**teamMembersIdTeamBillingTaxEvidenceGet**](TeamMemberApi.md#teamMembersIdTeamBillingTaxEvidenceGet) | **GET** /TeamMembers/{id}/team/billing/taxEvidence | Get Team Billing Tax Evidence
[**teamMembersIdTeamBillingUncachedGet**](TeamMemberApi.md#teamMembersIdTeamBillingUncachedGet) | **GET** /TeamMembers/{id}/team/billing/uncached | Get Team Billing
[**teamMembersIdTeamBrandDelete**](TeamMemberApi.md#teamMembersIdTeamBrandDelete) | **DELETE** /TeamMembers/{id}/team/brand | Deletes brand of this model.
[**teamMembersIdTeamBrandGet**](TeamMemberApi.md#teamMembersIdTeamBrandGet) | **GET** /TeamMembers/{id}/team/brand | Fetches hasOne relation brand.
[**teamMembersIdTeamBrandPost**](TeamMemberApi.md#teamMembersIdTeamBrandPost) | **POST** /TeamMembers/{id}/team/brand | Creates a new instance in brand of this model.
[**teamMembersIdTeamBrandPut**](TeamMemberApi.md#teamMembersIdTeamBrandPut) | **PUT** /TeamMembers/{id}/team/brand | Update brand of this model.
[**teamMembersIdTeamBuilderConfigsCountGet**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsCountGet) | **GET** /TeamMembers/{id}/team/builderConfigs/count | Counts builderConfigs of Team.
[**teamMembersIdTeamBuilderConfigsDefaultGet**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsDefaultGet) | **GET** /TeamMembers/{id}/team/builderConfigs/default | Get default Team Builder Config
[**teamMembersIdTeamBuilderConfigsDelete**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsDelete) | **DELETE** /TeamMembers/{id}/team/builderConfigs | Deletes all builderConfigs of this model.
[**teamMembersIdTeamBuilderConfigsFkDelete**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsFkDelete) | **DELETE** /TeamMembers/{id}/team/builderConfigs/{fk} | Delete a related item by id for builderConfigs.
[**teamMembersIdTeamBuilderConfigsFkGet**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsFkGet) | **GET** /TeamMembers/{id}/team/builderConfigs/{fk} | Find a related item by id for builderConfigs.
[**teamMembersIdTeamBuilderConfigsFkLogoPut**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsFkLogoPut) | **PUT** /TeamMembers/{id}/team/builderConfigs/{fk}/logo | Change Builder Config logo
[**teamMembersIdTeamBuilderConfigsFkPut**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsFkPut) | **PUT** /TeamMembers/{id}/team/builderConfigs/{fk} | Update a related item by id for builderConfigs.
[**teamMembersIdTeamBuilderConfigsFkWatermarkPut**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsFkWatermarkPut) | **PUT** /TeamMembers/{id}/team/builderConfigs/{fk}/watermark | Change Builder Config watermark
[**teamMembersIdTeamBuilderConfigsGet**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsGet) | **GET** /TeamMembers/{id}/team/builderConfigs | Queries builderConfigs of Team.
[**teamMembersIdTeamBuilderConfigsPost**](TeamMemberApi.md#teamMembersIdTeamBuilderConfigsPost) | **POST** /TeamMembers/{id}/team/builderConfigs | Creates a new instance in builderConfigs of this model.
[**teamMembersIdTeamDataRecordGet**](TeamMemberApi.md#teamMembersIdTeamDataRecordGet) | **GET** /TeamMembers/{id}/teamData/record | Get TeamData Record
[**teamMembersIdTeamDataRecordPost**](TeamMemberApi.md#teamMembersIdTeamDataRecordPost) | **POST** /TeamMembers/{id}/teamData/record | Create TeamData Record
[**teamMembersIdTeamDataRecordPut**](TeamMemberApi.md#teamMembersIdTeamDataRecordPut) | **PUT** /TeamMembers/{id}/teamData/record | Update TeamData Record
[**teamMembersIdTeamDataSourcesCountGet**](TeamMemberApi.md#teamMembersIdTeamDataSourcesCountGet) | **GET** /TeamMembers/{id}/team/dataSources/count | Counts dataSources of Team.
[**teamMembersIdTeamDataSourcesDelete**](TeamMemberApi.md#teamMembersIdTeamDataSourcesDelete) | **DELETE** /TeamMembers/{id}/team/dataSources | Deletes all dataSources of this model.
[**teamMembersIdTeamDataSourcesFkDelete**](TeamMemberApi.md#teamMembersIdTeamDataSourcesFkDelete) | **DELETE** /TeamMembers/{id}/team/dataSources/{fk} | Delete a related item by id for dataSources.
[**teamMembersIdTeamDataSourcesFkGet**](TeamMemberApi.md#teamMembersIdTeamDataSourcesFkGet) | **GET** /TeamMembers/{id}/team/dataSources/{fk} | Find a related item by id for dataSources.
[**teamMembersIdTeamDataSourcesFkPut**](TeamMemberApi.md#teamMembersIdTeamDataSourcesFkPut) | **PUT** /TeamMembers/{id}/team/dataSources/{fk} | Update a related item by id for dataSources.
[**teamMembersIdTeamDataSourcesGet**](TeamMemberApi.md#teamMembersIdTeamDataSourcesGet) | **GET** /TeamMembers/{id}/team/dataSources | Queries dataSources of Team.
[**teamMembersIdTeamDataSourcesPost**](TeamMemberApi.md#teamMembersIdTeamDataSourcesPost) | **POST** /TeamMembers/{id}/team/dataSources | Creates a new instance in dataSources of this model.
[**teamMembersIdTeamDynamicDatasCountGet**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasCountGet) | **GET** /TeamMembers/{id}/team/dynamicDatas/count | Counts dynamicDatas of Team.
[**teamMembersIdTeamDynamicDatasDelete**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasDelete) | **DELETE** /TeamMembers/{id}/team/dynamicDatas | Deletes all dynamicDatas of this model.
[**teamMembersIdTeamDynamicDatasFkDelete**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasFkDelete) | **DELETE** /TeamMembers/{id}/team/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**teamMembersIdTeamDynamicDatasFkGet**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasFkGet) | **GET** /TeamMembers/{id}/team/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**teamMembersIdTeamDynamicDatasFkPut**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasFkPut) | **PUT** /TeamMembers/{id}/team/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**teamMembersIdTeamDynamicDatasGet**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasGet) | **GET** /TeamMembers/{id}/team/dynamicDatas | Queries dynamicDatas of Team.
[**teamMembersIdTeamDynamicDatasPost**](TeamMemberApi.md#teamMembersIdTeamDynamicDatasPost) | **POST** /TeamMembers/{id}/team/dynamicDatas | Creates a new instance in dynamicDatas of this model.
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
[**teamMembersIdTeamLogoPut**](TeamMemberApi.md#teamMembersIdTeamLogoPut) | **PUT** /TeamMembers/{id}/team/logo | Change Team logo
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
[**teamMembersIdTeamPermissionDelete**](TeamMemberApi.md#teamMembersIdTeamPermissionDelete) | **DELETE** /TeamMembers/{id}/team/permission | Deletes permission of this model.
[**teamMembersIdTeamPermissionGet**](TeamMemberApi.md#teamMembersIdTeamPermissionGet) | **GET** /TeamMembers/{id}/team/permission | Fetches hasOne relation permission.
[**teamMembersIdTeamPermissionPost**](TeamMemberApi.md#teamMembersIdTeamPermissionPost) | **POST** /TeamMembers/{id}/team/permission | Creates a new instance in permission of this model.
[**teamMembersIdTeamPermissionPut**](TeamMemberApi.md#teamMembersIdTeamPermissionPut) | **PUT** /TeamMembers/{id}/team/permission | Update permission of this model.
[**teamMembersIdTeamPortalsCountGet**](TeamMemberApi.md#teamMembersIdTeamPortalsCountGet) | **GET** /TeamMembers/{id}/team/portals/count | Counts portals of Team.
[**teamMembersIdTeamPortalsDelete**](TeamMemberApi.md#teamMembersIdTeamPortalsDelete) | **DELETE** /TeamMembers/{id}/team/portals | Deletes all portals of this model.
[**teamMembersIdTeamPortalsFkDelete**](TeamMemberApi.md#teamMembersIdTeamPortalsFkDelete) | **DELETE** /TeamMembers/{id}/team/portals/{fk} | Delete a related item by id for portals.
[**teamMembersIdTeamPortalsFkGet**](TeamMemberApi.md#teamMembersIdTeamPortalsFkGet) | **GET** /TeamMembers/{id}/team/portals/{fk} | Find a related item by id for portals.
[**teamMembersIdTeamPortalsFkPut**](TeamMemberApi.md#teamMembersIdTeamPortalsFkPut) | **PUT** /TeamMembers/{id}/team/portals/{fk} | Update a related item by id for portals.
[**teamMembersIdTeamPortalsGet**](TeamMemberApi.md#teamMembersIdTeamPortalsGet) | **GET** /TeamMembers/{id}/team/portals | Queries portals of Team.
[**teamMembersIdTeamPortalsPost**](TeamMemberApi.md#teamMembersIdTeamPortalsPost) | **POST** /TeamMembers/{id}/team/portals | Creates a new instance in portals of this model.
[**teamMembersIdTeamProductMaterialsCountGet**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsCountGet) | **GET** /TeamMembers/{id}/team/productMaterials/count | Counts productMaterials of Team.
[**teamMembersIdTeamProductMaterialsDelete**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsDelete) | **DELETE** /TeamMembers/{id}/team/productMaterials | Deletes all productMaterials of this model.
[**teamMembersIdTeamProductMaterialsFkDelete**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsFkDelete) | **DELETE** /TeamMembers/{id}/team/productMaterials/{fk} | Delete a related item by id for productMaterials.
[**teamMembersIdTeamProductMaterialsFkGet**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsFkGet) | **GET** /TeamMembers/{id}/team/productMaterials/{fk} | Find a related item by id for productMaterials.
[**teamMembersIdTeamProductMaterialsFkPut**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsFkPut) | **PUT** /TeamMembers/{id}/team/productMaterials/{fk} | Update a related item by id for productMaterials.
[**teamMembersIdTeamProductMaterialsGet**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsGet) | **GET** /TeamMembers/{id}/team/productMaterials | Queries productMaterials of Team.
[**teamMembersIdTeamProductMaterialsPost**](TeamMemberApi.md#teamMembersIdTeamProductMaterialsPost) | **POST** /TeamMembers/{id}/team/productMaterials | Creates a new instance in productMaterials of this model.
[**teamMembersIdTeamProductPdfColorProfilesAvailableGet**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesAvailableGet) | **GET** /TeamMembers/{id}/team/productPdfColorProfiles/available | Find all available PdfColorProfile
[**teamMembersIdTeamProductPdfColorProfilesCountGet**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesCountGet) | **GET** /TeamMembers/{id}/team/productPdfColorProfiles/count | Counts productPdfColorProfiles of Team.
[**teamMembersIdTeamProductPdfColorProfilesDelete**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesDelete) | **DELETE** /TeamMembers/{id}/team/productPdfColorProfiles | Deletes all productPdfColorProfiles of this model.
[**teamMembersIdTeamProductPdfColorProfilesFkDelete**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesFkDelete) | **DELETE** /TeamMembers/{id}/team/productPdfColorProfiles/{fk} | Delete a related item by id for productPdfColorProfiles.
[**teamMembersIdTeamProductPdfColorProfilesFkGet**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesFkGet) | **GET** /TeamMembers/{id}/team/productPdfColorProfiles/{fk} | Find a related item by id for productPdfColorProfiles.
[**teamMembersIdTeamProductPdfColorProfilesFkPut**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesFkPut) | **PUT** /TeamMembers/{id}/team/productPdfColorProfiles/{fk} | Update a related item by id for productPdfColorProfiles.
[**teamMembersIdTeamProductPdfColorProfilesGet**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesGet) | **GET** /TeamMembers/{id}/team/productPdfColorProfiles | Queries productPdfColorProfiles of Team.
[**teamMembersIdTeamProductPdfColorProfilesUploadPost**](TeamMemberApi.md#teamMembersIdTeamProductPdfColorProfilesUploadPost) | **POST** /TeamMembers/{id}/team/productPdfColorProfiles/upload | Upload ICC PDF Color Profile for this Team
[**teamMembersIdTeamProductSizeMaterialsCountGet**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsCountGet) | **GET** /TeamMembers/{id}/team/productSizeMaterials/count | Counts productSizeMaterials of Team.
[**teamMembersIdTeamProductSizeMaterialsDelete**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsDelete) | **DELETE** /TeamMembers/{id}/team/productSizeMaterials | Deletes all productSizeMaterials of this model.
[**teamMembersIdTeamProductSizeMaterialsFkDelete**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsFkDelete) | **DELETE** /TeamMembers/{id}/team/productSizeMaterials/{fk} | Delete a related item by id for productSizeMaterials.
[**teamMembersIdTeamProductSizeMaterialsFkGet**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsFkGet) | **GET** /TeamMembers/{id}/team/productSizeMaterials/{fk} | Find a related item by id for productSizeMaterials.
[**teamMembersIdTeamProductSizeMaterialsFkPut**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsFkPut) | **PUT** /TeamMembers/{id}/team/productSizeMaterials/{fk} | Update a related item by id for productSizeMaterials.
[**teamMembersIdTeamProductSizeMaterialsGet**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsGet) | **GET** /TeamMembers/{id}/team/productSizeMaterials | Queries productSizeMaterials of Team.
[**teamMembersIdTeamProductSizeMaterialsPost**](TeamMemberApi.md#teamMembersIdTeamProductSizeMaterialsPost) | **POST** /TeamMembers/{id}/team/productSizeMaterials | Creates a new instance in productSizeMaterials of this model.
[**teamMembersIdTeamTeamDataGet**](TeamMemberApi.md#teamMembersIdTeamTeamDataGet) | **GET** /TeamMembers/{id}/team/teamData | Fetches belongsTo relation teamData.
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
[**teamMembersIdTeamTemplatesFkUrlReviewGet**](TeamMemberApi.md#teamMembersIdTeamTemplatesFkUrlReviewGet) | **GET** /TeamMembers/{id}/team/templates/{fk}/url/review | Get URL to review a Team Template
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
[**teamMembersIdTweakTemplateFoldersGet**](TeamMemberApi.md#teamMembersIdTweakTemplateFoldersGet) | **GET** /TeamMembers/{id}/tweakTemplateFolders | List Tweak Templates Folders
[**teamMembersIdTweakTemplateFoldersNkGet**](TeamMemberApi.md#teamMembersIdTweakTemplateFoldersNkGet) | **GET** /TeamMembers/{id}/tweakTemplateFolders/{nk} | Get Tweak Templates Folders details
[**teamMembersIdTweakTemplateFoldersNkTemplatesFkGet**](TeamMemberApi.md#teamMembersIdTweakTemplateFoldersNkTemplatesFkGet) | **GET** /TeamMembers/{id}/tweakTemplateFolders/{nk}/templates/{fk} | Get Tweak Template details within a Tweak Template Folder
[**teamMembersIdTweakTemplateFoldersNkTemplatesGet**](TeamMemberApi.md#teamMembersIdTweakTemplateFoldersNkTemplatesGet) | **GET** /TeamMembers/{id}/tweakTemplateFolders/{nk}/templates | List Tweak Templates within a Tweak Template Folder
[**teamMembersIdTweakTemplatesFkFlashvarsGet**](TeamMemberApi.md#teamMembersIdTweakTemplatesFkFlashvarsGet) | **GET** /TeamMembers/{id}/tweakTemplates/{fk}/flashvars | Find Template FlashVars by id
[**teamMembersIdTweakTemplatesFkGet**](TeamMemberApi.md#teamMembersIdTweakTemplatesFkGet) | **GET** /TeamMembers/{id}/tweakTemplates/{fk} | Get Tweak Template details
[**teamMembersIdTweakTemplatesGet**](TeamMemberApi.md#teamMembersIdTweakTemplatesGet) | **GET** /TeamMembers/{id}/tweakTemplates | List Tweak Templates
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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdDesignSharesCountGet($id, $where)

Counts designShares of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdDesignSharesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesDelete**
> teamMembersIdDesignSharesDelete($id)

Deletes all designShares of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdDesignSharesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesFkDelete**
> teamMembersIdDesignSharesFkDelete($id, $fk)

Delete a related item by id for designShares.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designShares

try {
    $api_instance->teamMembersIdDesignSharesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designShares |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesFkGet**
> \Swagger\Client\Model\DesignMember teamMembersIdDesignSharesFkGet($id, $fk)

Find a related item by id for designShares.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designShares

try {
    $result = $api_instance->teamMembersIdDesignSharesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designShares |

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesFkPut**
> \Swagger\Client\Model\DesignMember teamMembersIdDesignSharesFkPut($id, $fk, $data)

Update a related item by id for designShares.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for designShares
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->teamMembersIdDesignSharesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for designShares |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesGet**
> \Swagger\Client\Model\DesignMember[] teamMembersIdDesignSharesGet($id, $filter)

Queries designShares of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdDesignSharesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember[]**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdDesignSharesPost**
> \Swagger\Client\Model\DesignMember teamMembersIdDesignSharesPost($id, $data)

Creates a new instance in designShares of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->teamMembersIdDesignSharesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdDesignSharesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 teamMembersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdHead**
> \Swagger\Client\Model\InlineResponse2001 teamMembersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdNotificationsCountGet($id, $where)

Counts notifications of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdNotificationsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsDelete**
> teamMembersIdNotificationsDelete($id)

Deletes all notifications of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdNotificationsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsFkDelete**
> teamMembersIdNotificationsFkDelete($id, $fk)

Delete a related item by id for notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for notifications

try {
    $api_instance->teamMembersIdNotificationsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for notifications |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsFkGet**
> \Swagger\Client\Model\Notification teamMembersIdNotificationsFkGet($id, $fk)

Find a related item by id for notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for notifications

try {
    $result = $api_instance->teamMembersIdNotificationsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for notifications |

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsFkPut**
> \Swagger\Client\Model\Notification teamMembersIdNotificationsFkPut($id, $fk, $data)

Update a related item by id for notifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for notifications
$data = new \Swagger\Client\Model\Notification(); // \Swagger\Client\Model\Notification | 

try {
    $result = $api_instance->teamMembersIdNotificationsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for notifications |
 **data** | [**\Swagger\Client\Model\Notification**](../Model/\Swagger\Client\Model\Notification.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsGet**
> \Swagger\Client\Model\Notification[] teamMembersIdNotificationsGet($id, $filter)

Queries notifications of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdNotificationsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdNotificationsPost**
> \Swagger\Client\Model\Notification teamMembersIdNotificationsPost($id, $data)

Creates a new instance in notifications of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Notification(); // \Swagger\Client\Model\Notification | 

try {
    $result = $api_instance->teamMembersIdNotificationsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdNotificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\Notification**](../Model/\Swagger\Client\Model\Notification.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsFkLogoPut**
> \Swagger\Client\Model\Portal teamMembersIdPortalsFkLogoPut($id, $id2, $fk, $data)

Change Portal logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Portal id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Logo

try {
    $result = $api_instance->teamMembersIdPortalsFkLogoPut($id, $id2, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsFkLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **fk** | **string**| Portal id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Logo |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdPortalsNkTemplatesFkFlashvarsGet**
> \Swagger\Client\Model\FlashVar teamMembersIdPortalsNkTemplatesFkFlashvarsGet($id, $id2, $nk, $fk)

Find Template FlashVars within available Portal by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$nk = "nk_example"; // string | 
$fk = "fk_example"; // string | 

try {
    $result = $api_instance->teamMembersIdPortalsNkTemplatesFkFlashvarsGet($id, $id2, $nk, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdPortalsNkTemplatesFkFlashvarsGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdSharedDesignsCountGet($id, $where)

Counts sharedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdSharedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsDelete**
> teamMembersIdSharedDesignsDelete($id)

Deletes all sharedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdSharedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsFkDelete**
> teamMembersIdSharedDesignsFkDelete($id, $fk)

Delete a related item by id for sharedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns

try {
    $api_instance->teamMembersIdSharedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsFkGet**
> \Swagger\Client\Model\Design teamMembersIdSharedDesignsFkGet($id, $fk)

Find a related item by id for sharedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns

try {
    $result = $api_instance->teamMembersIdSharedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsFkPut**
> \Swagger\Client\Model\Design teamMembersIdSharedDesignsFkPut($id, $fk, $data)

Update a related item by id for sharedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdSharedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsGet**
> \Swagger\Client\Model\Design[] teamMembersIdSharedDesignsGet($id, $filter)

Queries sharedDesigns of TeamMember.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdSharedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsPost**
> \Swagger\Client\Model\Design teamMembersIdSharedDesignsPost($id, $data)

Creates a new instance in sharedDesigns of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->teamMembersIdSharedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsPost: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsRelFkDelete**
> teamMembersIdSharedDesignsRelFkDelete($id, $fk)

Remove the sharedDesigns relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns

try {
    $api_instance->teamMembersIdSharedDesignsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsRelFkHead**
> bool teamMembersIdSharedDesignsRelFkHead($id, $fk)

Check the existence of sharedDesigns relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns

try {
    $result = $api_instance->teamMembersIdSharedDesignsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdSharedDesignsRelFkPut**
> \Swagger\Client\Model\DesignMember teamMembersIdSharedDesignsRelFkPut($id, $fk, $data)

Add a related item by id for sharedDesigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for sharedDesigns
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | 

try {
    $result = $api_instance->teamMembersIdSharedDesignsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdSharedDesignsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for sharedDesigns |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTargetModelTargetIdInvitePost**
> \Swagger\Client\Model\InvitationTicket[] teamMembersIdTargetModelTargetIdInvitePost($id, $id2, $targetModel, $targetId, $data)

Invite a group of people to join a team, portal or other targets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$targetModel = "targetModel_example"; // string | 
$targetId = "targetId_example"; // string | 
$data = array(new object[]()); // object[] | 

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
 **data** | **object[]**|  | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingAvailablePlansGet**
> \Swagger\Client\Model\BillingPlan[] teamMembersIdTeamBillingAvailablePlansGet($id, $filter)

Get Available Plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTeamBillingAvailablePlansGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingAvailablePlansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\BillingPlan[]**](../Model/BillingPlan.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingCachedGet**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingCachedGet($id)

Get Cached version of Team Billing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBillingCachedGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingCachedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingCardDelete**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingCardDelete($id)

Delete Team Billing Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBillingCardDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingCardDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingCardPost**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingCardPost($id, $data)

Create Team Billing Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamBillingCardPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingCardPut**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingCardPut($id, $data)

Update Team Billing Card

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamBillingCardPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingCardPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingInvoicesFkPost**
> \Swagger\Client\Model\BillingInvoice teamMembersIdTeamBillingInvoicesFkPost($id, $fk)

Pay Team Billing Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Billing Invoice id

try {
    $result = $api_instance->teamMembersIdTeamBillingInvoicesFkPost($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingInvoicesFkPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Billing Invoice id |

### Return type

[**\Swagger\Client\Model\BillingInvoice**](../Model/BillingInvoice.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingInvoicesGet**
> \Swagger\Client\Model\BillingInvoice[] teamMembersIdTeamBillingInvoicesGet($id, $filter)

List Team Billing Invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTeamBillingInvoicesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingInvoicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\BillingInvoice[]**](../Model/BillingInvoice.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingInvoicesUpcomingGet**
> \Swagger\Client\Model\BillingInvoice teamMembersIdTeamBillingInvoicesUpcomingGet($id)

List Upcoming Team Billing Invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBillingInvoicesUpcomingGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingInvoicesUpcomingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\BillingInvoice**](../Model/BillingInvoice.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingPut**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingPut($id, $data)

Update Team Billing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamBillingPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingSubscriptionPlanPut**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingSubscriptionPlanPut($id, $data)

Update Team Billing Subscription Plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->teamMembersIdTeamBillingSubscriptionPlanPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingSubscriptionPlanPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingTaxEvidenceGet**
> object teamMembersIdTeamBillingTaxEvidenceGet($id)

Get Team Billing Tax Evidence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBillingTaxEvidenceGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingTaxEvidenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBillingUncachedGet**
> \Swagger\Client\Model\Billing teamMembersIdTeamBillingUncachedGet($id)

Get Team Billing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBillingUncachedGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBillingUncachedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamBuilderConfigsCountGet($id, $where)

Counts builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsDefaultGet**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsDefaultGet($id)

Get default Team Builder Config

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsDefaultGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsDefaultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsDelete**
> teamMembersIdTeamBuilderConfigsDelete($id)

Deletes all builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamBuilderConfigsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsFkDelete**
> teamMembersIdTeamBuilderConfigsFkDelete($id, $fk)

Delete a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $api_instance->teamMembersIdTeamBuilderConfigsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsFkGet**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsFkGet($id, $fk)

Find a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for builderConfigs

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for builderConfigs |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsFkLogoPut**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsFkLogoPut($id, $fk, $data)

Change Builder Config logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | BuilderConfig id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Logo

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsFkLogoPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsFkLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| BuilderConfig id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Logo |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsFkPut**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsFkPut($id, $fk, $data)

Update a related item by id for builderConfigs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for builderConfigs
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamBuilderConfigsFkWatermarkPut**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsFkWatermarkPut($id, $fk, $data)

Change Builder Config watermark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | BuilderConfig id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Watermark

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsFkWatermarkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsFkWatermarkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| BuilderConfig id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Watermark |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsGet**
> \Swagger\Client\Model\TeamBuilderConfig[] teamMembersIdTeamBuilderConfigsGet($id, $filter)

Queries builderConfigs of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig[]**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamBuilderConfigsPost**
> \Swagger\Client\Model\TeamBuilderConfig teamMembersIdTeamBuilderConfigsPost($id, $data)

Creates a new instance in builderConfigs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | 

try {
    $result = $api_instance->teamMembersIdTeamBuilderConfigsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamBuilderConfigsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataRecordGet**
> object teamMembersIdTeamDataRecordGet($id)

Get TeamData Record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamDataRecordGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataRecordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataRecordPost**
> object teamMembersIdTeamDataRecordPost($id, $data)

Create TeamData Record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersIdTeamDataRecordPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataRecordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataRecordPut**
> object teamMembersIdTeamDataRecordPut($id, $data)

Update TeamData Record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Model instance data

try {
    $result = $api_instance->teamMembersIdTeamDataRecordPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataRecordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamDataSourcesCountGet($id, $where)

Counts dataSources of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamDataSourcesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesDelete**
> teamMembersIdTeamDataSourcesDelete($id)

Deletes all dataSources of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamDataSourcesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesFkDelete**
> teamMembersIdTeamDataSourcesFkDelete($id, $fk)

Delete a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dataSources

try {
    $api_instance->teamMembersIdTeamDataSourcesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for dataSources |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesFkGet**
> \Swagger\Client\Model\DataSource teamMembersIdTeamDataSourcesFkGet($id, $fk)

Find a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dataSources

try {
    $result = $api_instance->teamMembersIdTeamDataSourcesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for dataSources |

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesFkPut**
> \Swagger\Client\Model\DataSource teamMembersIdTeamDataSourcesFkPut($id, $fk, $data)

Update a related item by id for dataSources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dataSources
$data = new \Swagger\Client\Model\DataSource(); // \Swagger\Client\Model\DataSource | 

try {
    $result = $api_instance->teamMembersIdTeamDataSourcesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamDataSourcesGet**
> \Swagger\Client\Model\DataSource[] teamMembersIdTeamDataSourcesGet($id, $filter)

Queries dataSources of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamDataSourcesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource[]**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDataSourcesPost**
> \Swagger\Client\Model\DataSource teamMembersIdTeamDataSourcesPost($id, $data)

Creates a new instance in dataSources of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DataSource(); // \Swagger\Client\Model\DataSource | 

try {
    $result = $api_instance->teamMembersIdTeamDataSourcesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDataSourcesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DataSource**](../Model/\Swagger\Client\Model\DataSource.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamDynamicDatasCountGet($id, $where)

Counts dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasDelete**
> teamMembersIdTeamDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasFkDelete**
> teamMembersIdTeamDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->teamMembersIdTeamDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData teamMembersIdTeamDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->teamMembersIdTeamDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData teamMembersIdTeamDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamMembersIdTeamDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] teamMembersIdTeamDynamicDatasGet($id, $filter)

Queries dynamicDatas of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamDynamicDatasPost**
> \Swagger\Client\Model\DynamicData teamMembersIdTeamDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->teamMembersIdTeamDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamLogoPut**
> \Swagger\Client\Model\Team teamMembersIdTeamLogoPut($id, $id2, $data)

Change Team logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | Logo

try {
    $result = $api_instance->teamMembersIdTeamLogoPut($id, $id2, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamLogoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)| Logo |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPermissionDelete**
> teamMembersIdTeamPermissionDelete($id)

Deletes permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamPermissionDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPermissionDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPermissionGet**
> \Swagger\Client\Model\TeamPermissionSet teamMembersIdTeamPermissionGet($id, $refresh)

Fetches hasOne relation permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMembersIdTeamPermissionGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPermissionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPermissionPost**
> \Swagger\Client\Model\TeamPermissionSet teamMembersIdTeamPermissionPost($id, $data)

Creates a new instance in permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->teamMembersIdTeamPermissionPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPermissionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamPermissionPut**
> \Swagger\Client\Model\TeamPermissionSet teamMembersIdTeamPermissionPut($id, $data)

Update permission of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\TeamPermissionSet(); // \Swagger\Client\Model\TeamPermissionSet | 

try {
    $result = $api_instance->teamMembersIdTeamPermissionPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamPermissionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\TeamPermissionSet**](../Model/\Swagger\Client\Model\TeamPermissionSet.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamPermissionSet**](../Model/TeamPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamProductMaterialsCountGet($id, $where)

Counts productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamProductMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsDelete**
> teamMembersIdTeamProductMaterialsDelete($id)

Deletes all productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamProductMaterialsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsFkDelete**
> teamMembersIdTeamProductMaterialsFkDelete($id, $fk)

Delete a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $api_instance->teamMembersIdTeamProductMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsFkGet**
> \Swagger\Client\Model\ProductMaterial teamMembersIdTeamProductMaterialsFkGet($id, $fk)

Find a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productMaterials

try {
    $result = $api_instance->teamMembersIdTeamProductMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productMaterials |

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsFkPut**
> \Swagger\Client\Model\ProductMaterial teamMembersIdTeamProductMaterialsFkPut($id, $fk, $data)

Update a related item by id for productMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productMaterials
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamMembersIdTeamProductMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamProductMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] teamMembersIdTeamProductMaterialsGet($id, $filter)

Queries productMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamProductMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductMaterialsPost**
> \Swagger\Client\Model\ProductMaterial teamMembersIdTeamProductMaterialsPost($id, $data)

Creates a new instance in productMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->teamMembersIdTeamProductMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesAvailableGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] teamMembersIdTeamProductPdfColorProfilesAvailableGet($id, $filter)

Find all available PdfColorProfile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesAvailableGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesAvailableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamProductPdfColorProfilesCountGet($id, $where)

Counts productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesDelete**
> teamMembersIdTeamProductPdfColorProfilesDelete($id)

Deletes all productPdfColorProfiles of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamProductPdfColorProfilesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesFkDelete**
> teamMembersIdTeamProductPdfColorProfilesFkDelete($id, $fk)

Delete a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $api_instance->teamMembersIdTeamProductPdfColorProfilesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesFkGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamMembersIdTeamProductPdfColorProfilesFkGet($id, $fk)

Find a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productPdfColorProfiles |

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesFkPut**
> \Swagger\Client\Model\ProductPdfColorProfile teamMembersIdTeamProductPdfColorProfilesFkPut($id, $fk, $data)

Update a related item by id for productPdfColorProfiles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productPdfColorProfiles
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | 

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamProductPdfColorProfilesGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] teamMembersIdTeamProductPdfColorProfilesGet($id, $filter)

Queries productPdfColorProfiles of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductPdfColorProfilesUploadPost**
> \Swagger\Client\Model\ProductPdfColorProfile teamMembersIdTeamProductPdfColorProfilesUploadPost($id)

Upload ICC PDF Color Profile for this Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $result = $api_instance->teamMembersIdTeamProductPdfColorProfilesUploadPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductPdfColorProfilesUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMembersIdTeamProductSizeMaterialsCountGet($id, $where)

Counts productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMembersIdTeamProductSizeMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsDelete**
> teamMembersIdTeamProductSizeMaterialsDelete($id)

Deletes all productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id

try {
    $api_instance->teamMembersIdTeamProductSizeMaterialsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsDelete: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsFkDelete**
> teamMembersIdTeamProductSizeMaterialsFkDelete($id, $fk)

Delete a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $api_instance->teamMembersIdTeamProductSizeMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial teamMembersIdTeamProductSizeMaterialsFkGet($id, $fk)

Find a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials

try {
    $result = $api_instance->teamMembersIdTeamProductSizeMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Foreign key for productSizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial teamMembersIdTeamProductSizeMaterialsFkPut($id, $fk, $data)

Update a related item by id for productSizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Foreign key for productSizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamMembersIdTeamProductSizeMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
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

# **teamMembersIdTeamProductSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] teamMembersIdTeamProductSizeMaterialsGet($id, $filter)

Queries productSizeMaterials of Team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTeamProductSizeMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamProductSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial teamMembersIdTeamProductSizeMaterialsPost($id, $data)

Creates a new instance in productSizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->teamMembersIdTeamProductSizeMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTeamDataGet**
> \Swagger\Client\Model\DynamicData teamMembersIdTeamTeamDataGet($id, $refresh)

Fetches belongsTo relation teamData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMembersIdTeamTeamDataGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTeamDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTeamTemplatesFkUrlReviewGet**
> string teamMembersIdTeamTemplatesFkUrlReviewGet($id, $fk)

Get URL to review a Team Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Template id

try {
    $result = $api_instance->teamMembersIdTeamTemplatesFkUrlReviewGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTeamTemplatesFkUrlReviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **fk** | **string**| Template id |

### Return type

**string**

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplateFoldersGet**
> \Swagger\Client\Model\TeamTemplateFolder[] teamMembersIdTweakTemplateFoldersGet($id, $id2, $filter)

List Tweak Templates Folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplateFoldersGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TeamTemplateFolder[]**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplateFoldersNkGet**
> \Swagger\Client\Model\TeamTemplateFolder teamMembersIdTweakTemplateFoldersNkGet($id, $id2, $nk, $filter)

Get Tweak Templates Folders details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$nk = "nk_example"; // string | TemplateFolder id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplateFoldersNkGet($id, $id2, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplateFoldersNkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **nk** | **string**| TemplateFolder id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamTemplateFolder**](../Model/TeamTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplateFoldersNkTemplatesFkGet**
> \Swagger\Client\Model\Template teamMembersIdTweakTemplateFoldersNkTemplatesFkGet($id, $id2, $nk, $fk, $filter)

Get Tweak Template details within a Tweak Template Folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$nk = "nk_example"; // string | TemplateFolder id
$fk = "fk_example"; // string | Template id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplateFoldersNkTemplatesFkGet($id, $id2, $nk, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplateFoldersNkTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **nk** | **string**| TemplateFolder id |
 **fk** | **string**| Template id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplateFoldersNkTemplatesGet**
> \Swagger\Client\Model\Template[] teamMembersIdTweakTemplateFoldersNkTemplatesGet($id, $id2, $nk, $filter)

List Tweak Templates within a Tweak Template Folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$nk = "nk_example"; // string | TemplateFolder id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplateFoldersNkTemplatesGet($id, $id2, $nk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplateFoldersNkTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **nk** | **string**| TemplateFolder id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplatesFkFlashvarsGet**
> \Swagger\Client\Model\FlashVar teamMembersIdTweakTemplatesFkFlashvarsGet($id, $id2, $fk)

Find Template FlashVars by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | 
$fk = "fk_example"; // string | 

try {
    $result = $api_instance->teamMembersIdTweakTemplatesFkFlashvarsGet($id, $id2, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplatesFkFlashvarsGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplatesFkGet**
> \Swagger\Client\Model\Template teamMembersIdTweakTemplatesFkGet($id, $id2, $fk, $filter)

Get Tweak Template details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$fk = "fk_example"; // string | Template id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplatesFkGet($id, $id2, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **id2** | **string**| TeamMember id |
 **fk** | **string**| Template id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersIdTweakTemplatesGet**
> \Swagger\Client\Model\Template[] teamMembersIdTweakTemplatesGet($id, $id2, $filter)

List Tweak Templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberApi();
$id = "id_example"; // string | TeamMember id
$id2 = "id_example"; // string | TeamMember id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMembersIdTweakTemplatesGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberApi->teamMembersIdTweakTemplatesGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 teamMembersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

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

// Configure API key authorization: access_token
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

