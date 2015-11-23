<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/MediaObject
 *
 *
 * -------------------------------- AssociatedArticle ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Article\NewsArticle AssociatedArticle
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Article\NewsArticle getAssociatedArticle() A NewsArticle associated with the Media Object.
 *
 * @method MediaObject setAssociatedArticle(\Bordeux\SchemaOrg\Thing\CreativeWork\Article\NewsArticle $associatedArticle )A NewsArticle associated with the Media Object.
 *
 *
 * -------------------------------- Bitrate ---------------------------------------------
 *
 * @property string Bitrate
 *
 * @method string getBitrate() The bitrate of the media object.
 *
 * @method MediaObject setBitrate(string $bitrate )The bitrate of the media object.
 *
 *
 * -------------------------------- ContentSize ---------------------------------------------
 *
 * @property string ContentSize
 *
 * @method string getContentSize() File size in (mega/kilo) bytes.
 *
 * @method MediaObject setContentSize(string $contentSize )File size in (mega/kilo) bytes.
 *
 *
 * -------------------------------- ContentUrl ---------------------------------------------
 *
 * @property string ContentUrl
 *
 * @method string getContentUrl() Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
 *
 * @method MediaObject setContentUrl(string $contentUrl )Actual bytes of the media object, for example the image file or video file. (previous spelling: contentURL)
 *
 *
 * -------------------------------- Duration ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration Duration
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration getDuration() The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 * @method MediaObject setDuration(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $duration )The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 *
 * -------------------------------- EmbedUrl ---------------------------------------------
 *
 * @property string EmbedUrl
 *
 * @method string getEmbedUrl() A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
 *
 * @method MediaObject setEmbedUrl(string $embedUrl )A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag. (previous spelling: embedURL)
 *
 *
 * -------------------------------- EncodesCreativeWork ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork EncodesCreativeWork
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork getEncodesCreativeWork() The creative work encoded by this media object
 *
 * @method MediaObject setEncodesCreativeWork(\Bordeux\SchemaOrg\Thing\CreativeWork $encodesCreativeWork )The creative work encoded by this media object
 *
 *
 * -------------------------------- EncodingFormat ---------------------------------------------
 *
 * @property string EncodingFormat
 *
 * @method string getEncodingFormat() mp3, mpeg4, etc.
 *
 * @method MediaObject setEncodingFormat(string $encodingFormat )mp3, mpeg4, etc.
 *
 *
 * -------------------------------- Expires ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime Expires
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getExpires() Date the content expires and is no longer useful or available. Useful for videos.
 *
 * @method MediaObject setExpires(\Bordeux\SchemaOrg\SchemaDateTime $expires )Date the content expires and is no longer useful or available. Useful for videos.
 *
 *
 * -------------------------------- Height ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue Height
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue getHeight() The height of the item.
 *
 * @method MediaObject setHeight(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance $height ) setHeight(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $height )The height of the item.
 *
 *
 * -------------------------------- PlayerType ---------------------------------------------
 *
 * @property string PlayerType
 *
 * @method string getPlayerType() Player type required—for example, Flash or Silverlight.
 *
 * @method MediaObject setPlayerType(string $playerType )Player type required—for example, Flash or Silverlight.
 *
 *
 * -------------------------------- ProductionCompany ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization ProductionCompany
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getProductionCompany() The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 * @method MediaObject setProductionCompany(\Bordeux\SchemaOrg\Thing\Organization $productionCompany )The production company or studio that made the movie, tv/radio series, season, or episode, or media object.
 *
 *
 * -------------------------------- Publication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event\PublicationEvent Publication
 *
 * @method \Bordeux\SchemaOrg\Thing\Event\PublicationEvent getPublication() A publication event associated with the episode, clip or media object.
 *
 * @method MediaObject setPublication(\Bordeux\SchemaOrg\Thing\Event\PublicationEvent $publication )A publication event associated with the episode, clip or media object.
 *
 *
 * -------------------------------- RegionsAllowed ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place RegionsAllowed
 *
 * @method \Bordeux\SchemaOrg\Thing\Place getRegionsAllowed() The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
 *
 * @method MediaObject setRegionsAllowed(\Bordeux\SchemaOrg\Thing\Place $regionsAllowed )The regions where the media is allowed. If not specified, then it's assumed to be allowed everywhere. Specify the countries in ISO 3166 format.
 *
 *
 * -------------------------------- RequiresSubscription ---------------------------------------------
 *
 * @property Boolean RequiresSubscription
 *
 * @method Boolean getRequiresSubscription() Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
 *
 * @method MediaObject setRequiresSubscription(Boolean $requiresSubscription )Indicates if use of the media require a subscription  (either paid or free). Allowed values are true or false (note that an earlier version had 'yes', 'no').
 *
 *
 * -------------------------------- UploadDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime UploadDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getUploadDate() Date when this media object was uploaded to this site.
 *
 * @method MediaObject setUploadDate(\Bordeux\SchemaOrg\SchemaDateTime $uploadDate )Date when this media object was uploaded to this site.
 *
 *
 * -------------------------------- Width ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue Width
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue getWidth() The width of the item.
 *
 * @method MediaObject setWidth(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Distance $width ) setWidth(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $width )The width of the item.
 *
 *
 */
class MediaObject extends \Bordeux\SchemaOrg\Thing\CreativeWork
{
}