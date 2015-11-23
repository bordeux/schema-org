<?php

namespace Bordeux\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/PriceSpecification
 *
 *
 * -------------------------------- EligibleQuantity ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue EligibleQuantity
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue getEligibleQuantity() The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 *
 * @method PriceSpecification setEligibleQuantity(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue $eligibleQuantity )The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 *
 *
 * -------------------------------- EligibleTransactionVolume ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification EligibleTransactionVolume
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification getEligibleTransactionVolume() The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 *
 * @method PriceSpecification setEligibleTransactionVolume(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification $eligibleTransactionVolume )The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 *
 *
 * -------------------------------- MaxPrice ---------------------------------------------
 *
 * @property Number MaxPrice
 *
 * @method Number getMaxPrice() The highest price if the price is a range.
 *
 * @method PriceSpecification setMaxPrice(Number $maxPrice )The highest price if the price is a range.
 *
 *
 * -------------------------------- MinPrice ---------------------------------------------
 *
 * @property Number MinPrice
 *
 * @method Number getMinPrice() The lowest price if the price is a range.
 *
 * @method PriceSpecification setMinPrice(Number $minPrice )The lowest price if the price is a range.
 *
 *
 * -------------------------------- Price ---------------------------------------------
 *
 * @property string|Number Price
 *
 * @method string|Number getPrice() The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
 *
 * @method PriceSpecification setPrice(string $price ) setPrice(Number $price )The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
 *
 *
 * -------------------------------- PriceCurrency ---------------------------------------------
 *
 * @property string PriceCurrency
 *
 * @method string getPriceCurrency() The currency (in 3-letter ISO 4217 format) of the offer price or a price component, when attached to PriceSpecification and its subtypes.
 *
 * @method PriceSpecification setPriceCurrency(string $priceCurrency )The currency (in 3-letter ISO 4217 format) of the offer price or a price component, when attached to PriceSpecification and its subtypes.
 *
 *
 * -------------------------------- ValidFrom ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime ValidFrom
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getValidFrom() The date when the item becomes valid.
 *
 * @method PriceSpecification setValidFrom(\Bordeux\SchemaOrg\SchemaDateTime $validFrom )The date when the item becomes valid.
 *
 *
 * -------------------------------- ValidThrough ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime ValidThrough
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getValidThrough() The end of the validity of offer, price specification, or opening hours data.
 *
 * @method PriceSpecification setValidThrough(\Bordeux\SchemaOrg\SchemaDateTime $validThrough )The end of the validity of offer, price specification, or opening hours data.
 *
 *
 * -------------------------------- ValueAddedTaxIncluded ---------------------------------------------
 *
 * @property Boolean ValueAddedTaxIncluded
 *
 * @method Boolean getValueAddedTaxIncluded() Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
 *
 * @method PriceSpecification setValueAddedTaxIncluded(Boolean $valueAddedTaxIncluded )Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
 *
 *
 */
class PriceSpecification extends \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue
{
}
