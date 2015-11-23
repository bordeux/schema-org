<?php

namespace Bordeux\SchemaOrg\Thing\Intangible;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/ServiceChannel
 *
 *
 * -------------------------------- AvailableLanguage ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Language|\Bordeux\SchemaOrg\Thing\Intangible\Language[] availableLanguage
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Language|\Bordeux\SchemaOrg\Thing\Intangible\Language[] getAvailableLanguage() A language someone may use with the item.
 *
 * @method ServiceChannel setAvailableLanguage(\Bordeux\SchemaOrg\Thing\Intangible\Language $availableLanguage ) setAvailableLanguage(\Bordeux\SchemaOrg\Thing\Intangible\Language[] $availableLanguage )A language someone may use with the item.
 *
 *
 * -------------------------------- ProcessingTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] processingTime
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration|\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] getProcessingTime() Estimated processing time for the service using this channel.
 *
 * @method ServiceChannel setProcessingTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $processingTime ) setProcessingTime(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration[] $processingTime )Estimated processing time for the service using this channel.
 *
 *
 * -------------------------------- ProvidesService ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Service|\Bordeux\SchemaOrg\Thing\Intangible\Service[] providesService
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Service|\Bordeux\SchemaOrg\Thing\Intangible\Service[] getProvidesService() The service provided by this channel.
 *
 * @method ServiceChannel setProvidesService(\Bordeux\SchemaOrg\Thing\Intangible\Service $providesService ) setProvidesService(\Bordeux\SchemaOrg\Thing\Intangible\Service[] $providesService )The service provided by this channel.
 *
 *
 * -------------------------------- ServiceLocation ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] serviceLocation
 *
 * @method \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getServiceLocation() The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
 *
 * @method ServiceChannel setServiceLocation(\Bordeux\SchemaOrg\Thing\Place $serviceLocation ) setServiceLocation(\Bordeux\SchemaOrg\Thing\Place[] $serviceLocation )The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
 *
 *
 * -------------------------------- ServicePhone ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] servicePhone
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] getServicePhone() The phone number to use to access the service.
 *
 * @method ServiceChannel setServicePhone(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $servicePhone ) setServicePhone(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] $servicePhone )The phone number to use to access the service.
 *
 *
 * -------------------------------- ServicePostalAddress ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] servicePostalAddress
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] getServicePostalAddress() The address for accessing the service by mail.
 *
 * @method ServiceChannel setServicePostalAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $servicePostalAddress ) setServicePostalAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] $servicePostalAddress )The address for accessing the service by mail.
 *
 *
 * -------------------------------- ServiceSmsNumber ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] serviceSmsNumber
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] getServiceSmsNumber() The number to access the service by text message.
 *
 * @method ServiceChannel setServiceSmsNumber(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint $serviceSmsNumber ) setServiceSmsNumber(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint[] $serviceSmsNumber )The number to access the service by text message.
 *
 *
 * -------------------------------- ServiceUrl ---------------------------------------------
 *
 * @property string|string[] serviceUrl
 *
 * @method string|string[] getServiceUrl() The website to access the service.
 *
 * @method ServiceChannel setServiceUrl(string $serviceUrl ) setServiceUrl(string[] $serviceUrl )The website to access the service.
 *
 *
 */
 class ServiceChannel extends \Bordeux\SchemaOrg\Thing\Intangible {

 }