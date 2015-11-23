<?php

namespace Bordeux\SchemaOrg\Thing\Action\TransferAction;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/SendAction
 *
 *
 * -------------------------------- DeliveryMethod ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod DeliveryMethod
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod getDeliveryMethod() A sub property of instrument. The method of delivery
 *
 * @method SendAction setDeliveryMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod $deliveryMethod )A sub property of instrument. The method of delivery
 *
 *
 * -------------------------------- Recipient ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Intangible\Audience|\Bordeux\SchemaOrg\Thing\Person Recipient
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Intangible\Audience|\Bordeux\SchemaOrg\Thing\Person getRecipient() A sub property of participant. The participant who is at the receiving end of the action.
 *
 * @method SendAction setRecipient(\Bordeux\SchemaOrg\Thing\Organization $recipient ) setRecipient(\Bordeux\SchemaOrg\Thing\Intangible\Audience $recipient ) setRecipient(\Bordeux\SchemaOrg\Thing\Person $recipient )A sub property of participant. The participant who is at the receiving end of the action.
 *
 *
 */
class SendAction extends \Bordeux\SchemaOrg\Thing\Action\TransferAction
{
}
