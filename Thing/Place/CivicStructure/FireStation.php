<?php

namespace Bordeux\SchemaOrg\Thing\Place\CivicStructure;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/FireStation
 *
 *
 * -------------------------------- Brand ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Intangible\Brand Brand
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Intangible\Brand getBrand() The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 *
 * @method FireStation setBrand(\Bordeux\SchemaOrg\Thing\Organization $brand ) setBrand(\Bordeux\SchemaOrg\Thing\Intangible\Brand $brand )The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 *
 *
 * -------------------------------- ContactPoint ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint ContactPoint
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint getContactPoint() A contact point for a person or organization.
 *
 * @method FireStation setContactPoint(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $contactPoint )A contact point for a person or organization.
 *
 *
 * -------------------------------- ContactPoints ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint ContactPoints
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint getContactPoints() A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
 *
 * @method FireStation setContactPoints(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $contactPoints )A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
 *
 *
 * -------------------------------- Department ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization Department
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getDepartment() A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
 *
 * @method FireStation setDepartment(\Bordeux\SchemaOrg\Thing\Organization $department )A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
 *
 *
 * -------------------------------- Duns ---------------------------------------------
 *
 * @property string Duns
 *
 * @method string getDuns() The Dun & Bradstreet DUNS number for identifying an organization or business person.
 *
 * @method FireStation setDuns(string $duns )The Dun & Bradstreet DUNS number for identifying an organization or business person.
 *
 *
 * -------------------------------- Email ---------------------------------------------
 *
 * @property string Email
 *
 * @method string getEmail() Email address.
 *
 * @method FireStation setEmail(string $email )Email address.
 *
 *
 * -------------------------------- Employee ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Employee
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getEmployee() Someone working for this organization.
 *
 * @method FireStation setEmployee(\Bordeux\SchemaOrg\Thing\Person $employee )Someone working for this organization.
 *
 *
 * -------------------------------- Employees ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Employees
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getEmployees() People working for this organization. (legacy spelling; see singular form, employee)
 *
 * @method FireStation setEmployees(\Bordeux\SchemaOrg\Thing\Person $employees )People working for this organization. (legacy spelling; see singular form, employee)
 *
 *
 * -------------------------------- Founder ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Founder
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getFounder() A person who founded this organization.
 *
 * @method FireStation setFounder(\Bordeux\SchemaOrg\Thing\Person $founder )A person who founded this organization.
 *
 *
 * -------------------------------- Founders ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Person Founders
 *
 * @method \Bordeux\SchemaOrg\Thing\Person getFounders() A person who founded this organization (legacy spelling; see singular form, founder).
 *
 * @method FireStation setFounders(\Bordeux\SchemaOrg\Thing\Person $founders )A person who founded this organization (legacy spelling; see singular form, founder).
 *
 *
 * -------------------------------- FoundingDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime FoundingDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getFoundingDate() The date that this organization was founded.
 *
 * @method FireStation setFoundingDate(\Bordeux\SchemaOrg\SchemaDateTime $foundingDate )The date that this organization was founded.
 *
 *
 * -------------------------------- HasPOS ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place HasPOS
 *
 * @method \Bordeux\SchemaOrg\Thing\Place getHasPOS() Points-of-Sales operated by the organization or person.
 *
 * @method FireStation setHasPOS(\Bordeux\SchemaOrg\Thing\Place $hasPOS )Points-of-Sales operated by the organization or person.
 *
 *
 * -------------------------------- LegalName ---------------------------------------------
 *
 * @property string LegalName
 *
 * @method string getLegalName() The official name of the organization, e.g. the registered company name.
 *
 * @method FireStation setLegalName(string $legalName )The official name of the organization, e.g. the registered company name.
 *
 *
 * -------------------------------- Location ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Place Location
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Place getLocation() The location of the event, organization or action.
 *
 * @method FireStation setLocation(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $location ) setLocation(\Bordeux\SchemaOrg\Thing\Place $location )The location of the event, organization or action.
 *
 *
 * -------------------------------- MakesOffer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Offer MakesOffer
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Offer getMakesOffer() A pointer to products or services offered by the organization or person.
 *
 * @method FireStation setMakesOffer(\Bordeux\SchemaOrg\Thing\Intangible\Offer $makesOffer )A pointer to products or services offered by the organization or person.
 *
 *
 * -------------------------------- Member ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Member
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getMember() A member of this organization.
 *
 * @method FireStation setMember(\Bordeux\SchemaOrg\Thing\Organization $member ) setMember(\Bordeux\SchemaOrg\Thing\Person $member )A member of this organization.
 *
 *
 * -------------------------------- Members ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Members
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getMembers() A member of this organization (legacy spelling; see singular form, member).
 *
 * @method FireStation setMembers(\Bordeux\SchemaOrg\Thing\Organization $members ) setMembers(\Bordeux\SchemaOrg\Thing\Person $members )A member of this organization (legacy spelling; see singular form, member).
 *
 *
 * -------------------------------- Naics ---------------------------------------------
 *
 * @property string Naics
 *
 * @method string getNaics() The North American Industry Classification System (NAICS) code for a particular organization or business person.
 *
 * @method FireStation setNaics(string $naics )The North American Industry Classification System (NAICS) code for a particular organization or business person.
 *
 *
 * -------------------------------- Owns ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|\Bordeux\SchemaOrg\Thing\Product Owns
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo|\Bordeux\SchemaOrg\Thing\Product getOwns() Products owned by the organization or person.
 *
 * @method FireStation setOwns(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OwnershipInfo $owns ) setOwns(\Bordeux\SchemaOrg\Thing\Product $owns )Products owned by the organization or person.
 *
 *
 * -------------------------------- Seeks ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Demand Seeks
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Demand getSeeks() A pointer to products or services sought by the organization or person (demand).
 *
 * @method FireStation setSeeks(\Bordeux\SchemaOrg\Thing\Intangible\Demand $seeks )A pointer to products or services sought by the organization or person (demand).
 *
 *
 * -------------------------------- SubOrganization ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization SubOrganization
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getSubOrganization() A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 *
 * @method FireStation setSubOrganization(\Bordeux\SchemaOrg\Thing\Organization $subOrganization )A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 *
 *
 * -------------------------------- TaxID ---------------------------------------------
 *
 * @property string TaxID
 *
 * @method string getTaxID() The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 *
 * @method FireStation setTaxID(string $taxID )The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 *
 *
 * -------------------------------- VatID ---------------------------------------------
 *
 * @property string VatID
 *
 * @method string getVatID() The Value-added Tax ID of the organisation or person.
 *
 * @method FireStation setVatID(string $vatID )The Value-added Tax ID of the organisation or person.
 *
 *
 * -------------------------------- BranchOf ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization BranchOf
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getBranchOf() The larger organization that this local business is a branch of, if any.
 *
 * @method FireStation setBranchOf(\Bordeux\SchemaOrg\Thing\Organization $branchOf )The larger organization that this local business is a branch of, if any.
 *
 *
 * -------------------------------- CurrenciesAccepted ---------------------------------------------
 *
 * @property string CurrenciesAccepted
 *
 * @method string getCurrenciesAccepted() The currency accepted (in ISO 4217 currency format).
 *
 * @method FireStation setCurrenciesAccepted(string $currenciesAccepted )The currency accepted (in ISO 4217 currency format).
 *
 *
 * -------------------------------- PaymentAccepted ---------------------------------------------
 *
 * @property string PaymentAccepted
 *
 * @method string getPaymentAccepted() Cash, credit card, etc.
 *
 * @method FireStation setPaymentAccepted(string $paymentAccepted )Cash, credit card, etc.
 *
 *
 * -------------------------------- PriceRange ---------------------------------------------
 *
 * @property string PriceRange
 *
 * @method string getPriceRange() The price range of the business, for example $$$.
 *
 * @method FireStation setPriceRange(string $priceRange )The price range of the business, for example $$$.
 *
 *
 */
class FireStation extends \Bordeux\SchemaOrg\Thing\Place\CivicStructure
{
}
