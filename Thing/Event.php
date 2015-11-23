<?php

namespace Bordeux\SchemaOrg\Thing;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Event
 *
 *
 * -------------------------------- Attendee ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Attendee
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getAttendee() A person or organization attending the event.
 *
 * @method Event setAttendee(\Bordeux\SchemaOrg\Thing\Organization $attendee ) setAttendee(\Bordeux\SchemaOrg\Thing\Person $attendee )A person or organization attending the event.
 *
 *
 * -------------------------------- Attendees ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Attendees
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getAttendees() A person attending the event (legacy spelling; see singular form, attendee).
 *
 * @method Event setAttendees(\Bordeux\SchemaOrg\Thing\Organization $attendees ) setAttendees(\Bordeux\SchemaOrg\Thing\Person $attendees )A person attending the event (legacy spelling; see singular form, attendee).
 *
 *
 * -------------------------------- DoorTime ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime DoorTime
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getDoorTime() The time admission will commence.
 *
 * @method Event setDoorTime(\Bordeux\SchemaOrg\SchemaDateTime $doorTime )The time admission will commence.
 *
 *
 * -------------------------------- Duration ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration Duration
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration getDuration() The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 * @method Event setDuration(\Bordeux\SchemaOrg\Thing\Intangible\Quantity\Duration $duration )The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 *
 *
 * -------------------------------- EndDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime EndDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getEndDate() The end date and time of the event or item (in ISO 8601 date format).
 *
 * @method Event setEndDate(\Bordeux\SchemaOrg\SchemaDateTime $endDate )The end date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- EventStatus ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType EventStatus
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType getEventStatus() An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
 *
 * @method Event setEventStatus(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType $eventStatus )An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
 *
 *
 * -------------------------------- Location ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Place Location
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Place getLocation() The location of the event, organization or action.
 *
 * @method Event setLocation(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $location ) setLocation(\Bordeux\SchemaOrg\Thing\Place $location )The location of the event, organization or action.
 *
 *
 * -------------------------------- Offers ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Offer Offers
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Offer getOffers() An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 * @method Event setOffers(\Bordeux\SchemaOrg\Thing\Intangible\Offer $offers )An offer to transfer some rights to an item or to provide a service—for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 *
 * -------------------------------- Performer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Performer
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getPerformer() A performer at the event—for example, a presenter, musician, musical group or actor.
 *
 * @method Event setPerformer(\Bordeux\SchemaOrg\Thing\Organization $performer ) setPerformer(\Bordeux\SchemaOrg\Thing\Person $performer )A performer at the event—for example, a presenter, musician, musical group or actor.
 *
 *
 * -------------------------------- Performers ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Performers
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getPerformers() The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
 *
 * @method Event setPerformers(\Bordeux\SchemaOrg\Thing\Organization $performers ) setPerformers(\Bordeux\SchemaOrg\Thing\Person $performers )The main performer or performers of the event—for example, a presenter, musician, or actor (legacy spelling; see singular form, performer).
 *
 *
 * -------------------------------- PreviousStartDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime PreviousStartDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getPreviousStartDate() Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
 *
 * @method Event setPreviousStartDate(\Bordeux\SchemaOrg\SchemaDateTime $previousStartDate )Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
 *
 *
 * -------------------------------- StartDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime StartDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getStartDate() The start date and time of the event or item (in ISO 8601 date format).
 *
 * @method Event setStartDate(\Bordeux\SchemaOrg\SchemaDateTime $startDate )The start date and time of the event or item (in ISO 8601 date format).
 *
 *
 * -------------------------------- SubEvent ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event SubEvent
 *
 * @method \Bordeux\SchemaOrg\Thing\Event getSubEvent() An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
 *
 * @method Event setSubEvent(\Bordeux\SchemaOrg\Thing\Event $subEvent )An Event that is part of this event. For example, a conference event includes many presentations, each are a subEvent of the conference.
 *
 *
 * -------------------------------- SubEvents ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event SubEvents
 *
 * @method \Bordeux\SchemaOrg\Thing\Event getSubEvents() Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
 *
 * @method Event setSubEvents(\Bordeux\SchemaOrg\Thing\Event $subEvents )Events that are a part of this event. For example, a conference event includes many presentations, each are subEvents of the conference (legacy spelling; see singular form, subEvent).
 *
 *
 * -------------------------------- SuperEvent ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event SuperEvent
 *
 * @method \Bordeux\SchemaOrg\Thing\Event getSuperEvent() An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
 *
 * @method Event setSuperEvent(\Bordeux\SchemaOrg\Thing\Event $superEvent )An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
 *
 *
 * -------------------------------- TypicalAgeRange ---------------------------------------------
 *
 * @property string TypicalAgeRange
 *
 * @method string getTypicalAgeRange() The typical expected age range, e.g. '7-9', '11-'.
 *
 * @method Event setTypicalAgeRange(string $typicalAgeRange )The typical expected age range, e.g. '7-9', '11-'.
 *
 *
 */
class Event extends \Bordeux\SchemaOrg\Thing
{
}
