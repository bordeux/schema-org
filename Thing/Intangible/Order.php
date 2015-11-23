<?php

namespace Bordeux\SchemaOrg\Thing\Intangible;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Order
 *
 *
 * -------------------------------- AcceptedOffer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Offer AcceptedOffer
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Offer getAcceptedOffer() The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
 *
 * @method Order setAcceptedOffer(\Bordeux\SchemaOrg\Thing\Intangible\Offer $acceptedOffer )The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
 *
 *
 * -------------------------------- BillingAddress ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress BillingAddress
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress getBillingAddress() The billing address for the order.
 *
 * @method Order setBillingAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $billingAddress )The billing address for the order.
 *
 *
 * -------------------------------- ConfirmationNumber ---------------------------------------------
 *
 * @property string ConfirmationNumber
 *
 * @method string getConfirmationNumber() A number that confirms the given order.
 *
 * @method Order setConfirmationNumber(string $confirmationNumber )A number that confirms the given order.
 *
 *
 * -------------------------------- Customer ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Customer
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getCustomer() Party placing the order.
 *
 * @method Order setCustomer(\Bordeux\SchemaOrg\Thing\Organization $customer ) setCustomer(\Bordeux\SchemaOrg\Thing\Person $customer )Party placing the order.
 *
 *
 * -------------------------------- Discount ---------------------------------------------
 *
 * @property Number|string Discount
 *
 * @method Number|string getDiscount() Any discount applied (to an Order).
 *
 * @method Order setDiscount(Number $discount ) setDiscount(string $discount )Any discount applied (to an Order).
 *
 *
 * -------------------------------- DiscountCode ---------------------------------------------
 *
 * @property string DiscountCode
 *
 * @method string getDiscountCode() Code used to redeem a discount.
 *
 * @method Order setDiscountCode(string $discountCode )Code used to redeem a discount.
 *
 *
 * -------------------------------- DiscountCurrency ---------------------------------------------
 *
 * @property string DiscountCurrency
 *
 * @method string getDiscountCurrency() The currency (in 3-letter ISO 4217 format) of the discount.
 *
 * @method Order setDiscountCurrency(string $discountCurrency )The currency (in 3-letter ISO 4217 format) of the discount.
 *
 *
 * -------------------------------- IsGift ---------------------------------------------
 *
 * @property Boolean IsGift
 *
 * @method Boolean getIsGift() Was the offer accepted as a gift for someone other than the buyer.
 *
 * @method Order setIsGift(Boolean $isGift )Was the offer accepted as a gift for someone other than the buyer.
 *
 *
 * -------------------------------- Merchant ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Merchant
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getMerchant() The party taking the order (e.g. Amazon.com is a merchant for many sellers).
 *
 * @method Order setMerchant(\Bordeux\SchemaOrg\Thing\Organization $merchant ) setMerchant(\Bordeux\SchemaOrg\Thing\Person $merchant )The party taking the order (e.g. Amazon.com is a merchant for many sellers).
 *
 *
 * -------------------------------- OrderDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime OrderDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getOrderDate() Date order was placed.
 *
 * @method Order setOrderDate(\Bordeux\SchemaOrg\SchemaDateTime $orderDate )Date order was placed.
 *
 *
 * -------------------------------- OrderedItem ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product OrderedItem
 *
 * @method \Bordeux\SchemaOrg\Thing\Product getOrderedItem() The item ordered.
 *
 * @method Order setOrderedItem(\Bordeux\SchemaOrg\Thing\Product $orderedItem )The item ordered.
 *
 *
 * -------------------------------- OrderNumber ---------------------------------------------
 *
 * @property string OrderNumber
 *
 * @method string getOrderNumber() The identifier of the transaction.
 *
 * @method Order setOrderNumber(string $orderNumber )The identifier of the transaction.
 *
 *
 * -------------------------------- OrderStatus ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus OrderStatus
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus getOrderStatus() The current status of the order.
 *
 * @method Order setOrderStatus(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus $orderStatus )The current status of the order.
 *
 *
 * -------------------------------- PaymentDue ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime PaymentDue
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getPaymentDue() The date that payment is due.
 *
 * @method Order setPaymentDue(\Bordeux\SchemaOrg\SchemaDateTime $paymentDue )The date that payment is due.
 *
 *
 * -------------------------------- PaymentMethod ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod PaymentMethod
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod getPaymentMethod() The name of the credit card or other method of payment for the order.
 *
 * @method Order setPaymentMethod(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod $paymentMethod )The name of the credit card or other method of payment for the order.
 *
 *
 * -------------------------------- PaymentMethodId ---------------------------------------------
 *
 * @property string PaymentMethodId
 *
 * @method string getPaymentMethodId() An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
 *
 * @method Order setPaymentMethodId(string $paymentMethodId )An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
 *
 *
 * -------------------------------- PaymentUrl ---------------------------------------------
 *
 * @property string PaymentUrl
 *
 * @method string getPaymentUrl() The URL for sending a payment.
 *
 * @method Order setPaymentUrl(string $paymentUrl )The URL for sending a payment.
 *
 *
 */
class Order extends \Bordeux\SchemaOrg\Thing\Intangible
{
}