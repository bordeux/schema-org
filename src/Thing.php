<?php

namespace Bordeux\SchemaOrg;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Thing
 *
 *
 * -------------------------------- AdditionalType ---------------------------------------------
 *
 * @property string AdditionalType
 *
 * @method string getAdditionalType() An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
 *
 * @method Thing setAdditionalType(string $additionalType )An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
 *
 *
 * -------------------------------- AlternateName ---------------------------------------------
 *
 * @property string AlternateName
 *
 * @method string getAlternateName() An alias for the item.
 *
 * @method Thing setAlternateName(string $alternateName )An alias for the item.
 *
 *
 * -------------------------------- Description ---------------------------------------------
 *
 * @property string Description
 *
 * @method string getDescription() A short description of the item.
 *
 * @method Thing setDescription(string $description )A short description of the item.
 *
 *
 * -------------------------------- Image ---------------------------------------------
 *
 * @property string Image
 *
 * @method string getImage() URL of an image of the item.
 *
 * @method Thing setImage(string $image )URL of an image of the item.
 *
 *
 * -------------------------------- Name ---------------------------------------------
 *
 * @property string Name
 *
 * @method string getName() The name of the item.
 *
 * @method Thing setName(string $name )The name of the item.
 *
 *
 * -------------------------------- SameAs ---------------------------------------------
 *
 * @property string SameAs
 *
 * @method string getSameAs() URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
 *
 * @method Thing setSameAs(string $sameAs )URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
 *
 *
 * -------------------------------- Url ---------------------------------------------
 *
 * @property string Url
 *
 * @method string getUrl() URL of the item.
 *
 * @method Thing setUrl(string $url )URL of the item.
 *
 *
 */
class Thing extends \Bordeux\SchemaOrg\Element
{
}