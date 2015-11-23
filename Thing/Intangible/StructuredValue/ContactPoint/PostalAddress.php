<?php

namespace Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/PostalAddress
 *
 *
 * -------------------------------- AddressCountry ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place\AdministrativeArea\Country AddressCountry
 *
 * @method \Bordeux\SchemaOrg\Thing\Place\AdministrativeArea\Country getAddressCountry() The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 *
 * @method PostalAddress setAddressCountry(\Bordeux\SchemaOrg\Thing\Place\AdministrativeArea\Country $addressCountry )The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 *
 *
 * -------------------------------- AddressLocality ---------------------------------------------
 *
 * @property string AddressLocality
 *
 * @method string getAddressLocality() The locality. For example, Mountain View.
 *
 * @method PostalAddress setAddressLocality(string $addressLocality )The locality. For example, Mountain View.
 *
 *
 * -------------------------------- AddressRegion ---------------------------------------------
 *
 * @property string AddressRegion
 *
 * @method string getAddressRegion() The region. For example, CA.
 *
 * @method PostalAddress setAddressRegion(string $addressRegion )The region. For example, CA.
 *
 *
 * -------------------------------- PostalCode ---------------------------------------------
 *
 * @property string PostalCode
 *
 * @method string getPostalCode() The postal code. For example, 94043.
 *
 * @method PostalAddress setPostalCode(string $postalCode )The postal code. For example, 94043.
 *
 *
 * -------------------------------- PostOfficeBoxNumber ---------------------------------------------
 *
 * @property string PostOfficeBoxNumber
 *
 * @method string getPostOfficeBoxNumber() The post offce box number for PO box addresses.
 *
 * @method PostalAddress setPostOfficeBoxNumber(string $postOfficeBoxNumber )The post offce box number for PO box addresses.
 *
 *
 * -------------------------------- StreetAddress ---------------------------------------------
 *
 * @property string StreetAddress
 *
 * @method string getStreetAddress() The street address. For example, 1600 Amphitheatre Pkwy.
 *
 * @method PostalAddress setStreetAddress(string $streetAddress )The street address. For example, 1600 Amphitheatre Pkwy.
 *
 *
 */
class PostalAddress extends \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
{
}
