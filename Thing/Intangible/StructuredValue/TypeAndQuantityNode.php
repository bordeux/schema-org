<?php

namespace Bordeux\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/TypeAndQuantityNode
 *
 *
 * -------------------------------- AmountOfThisGood ---------------------------------------------
 *
 * @property Number AmountOfThisGood
 *
 * @method Number getAmountOfThisGood() The quantity of the goods included in the offer.
 *
 * @method TypeAndQuantityNode setAmountOfThisGood(Number $amountOfThisGood )The quantity of the goods included in the offer.
 *
 *
 * -------------------------------- BusinessFunction ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction BusinessFunction
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction getBusinessFunction() The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 *
 * @method TypeAndQuantityNode setBusinessFunction(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction $businessFunction )The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 *
 *
 * -------------------------------- TypeOfGood ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product TypeOfGood
 *
 * @method \Bordeux\SchemaOrg\Thing\Product getTypeOfGood() The product that this structured value is referring to.
 *
 * @method TypeAndQuantityNode setTypeOfGood(\Bordeux\SchemaOrg\Thing\Product $typeOfGood )The product that this structured value is referring to.
 *
 *
 * -------------------------------- UnitCode ---------------------------------------------
 *
 * @property string UnitCode
 *
 * @method string getUnitCode() The unit of measurement given using the UN/CEFACT Common Code (3 characters).
 *
 * @method TypeAndQuantityNode setUnitCode(string $unitCode )The unit of measurement given using the UN/CEFACT Common Code (3 characters).
 *
 *
 */
class TypeAndQuantityNode extends \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue
{
}