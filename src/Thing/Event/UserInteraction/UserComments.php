<?php

namespace Bordeux\SchemaOrg\Thing\Event\UserInteraction;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/UserComments
 *
 *
 * -------------------------------- CommentText ---------------------------------------------
 *
 * @property string|string[] commentText
 *
 * @method string|string[] getCommentText() The text of the UserComment.
 *
 * @method UserComments setCommentText(string $commentText ) setCommentText(string[] $commentText )The text of the UserComment.
 *
 *
 * -------------------------------- CommentTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] commentTime
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime|\Bordeux\SchemaOrg\SchemaDateTime[] getCommentTime() The time at which the UserComment was made.
 *
 * @method UserComments setCommentTime(\Bordeux\SchemaOrg\SchemaDateTime $commentTime ) setCommentTime(\Bordeux\SchemaOrg\SchemaDateTime[] $commentTime )The time at which the UserComment was made.
 *
 *
 * -------------------------------- Creator ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] creator
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Organization[]|\Bordeux\SchemaOrg\Thing\Person|\Bordeux\SchemaOrg\Thing\Person[] getCreator() The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
 *
 * @method UserComments setCreator(\Bordeux\SchemaOrg\Thing\Organization $creator ) setCreator(\Bordeux\SchemaOrg\Thing\Organization[] $creator ) setCreator(\Bordeux\SchemaOrg\Thing\Person $creator ) setCreator(\Bordeux\SchemaOrg\Thing\Person[] $creator )The creator/author of this CreativeWork or UserComments. This is the same as the Author property for CreativeWork.
 *
 *
 * -------------------------------- Discusses ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork|\Bordeux\SchemaOrg\Thing\CreativeWork[] discusses
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork|\Bordeux\SchemaOrg\Thing\CreativeWork[] getDiscusses() Specifies the CreativeWork associated with the UserComment.
 *
 * @method UserComments setDiscusses(\Bordeux\SchemaOrg\Thing\CreativeWork $discusses ) setDiscusses(\Bordeux\SchemaOrg\Thing\CreativeWork[] $discusses )Specifies the CreativeWork associated with the UserComment.
 *
 *
 * -------------------------------- ReplyToUrl ---------------------------------------------
 *
 * @property string|string[] replyToUrl
 *
 * @method string|string[] getReplyToUrl() The URL at which a reply may be posted to the specified UserComment.
 *
 * @method UserComments setReplyToUrl(string $replyToUrl ) setReplyToUrl(string[] $replyToUrl )The URL at which a reply may be posted to the specified UserComment.
 *
 *
 */
 class UserComments extends \Bordeux\SchemaOrg\Thing\Event\UserInteraction {

 }