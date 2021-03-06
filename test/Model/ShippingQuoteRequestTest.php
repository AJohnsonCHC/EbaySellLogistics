<?php
/**
 * ShippingQuoteRequestTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Logistics API
 *
 * The <b>Logistics API</b> resources offer the following capabilities: <ul><li><b>shipping_quote</b> &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package.</li> <li><b>shipment</b> &ndash; Creates a \"shipment\" for the selected shipping rate.</li></ul> Call <b>createShippingQuote</b> to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. <br><br>Select one of the live rates and using its associated <b>rateId</b>, create a \"shipment\" for the package by calling <b>createFromShippingQuote</b>. Creating a shipment completes an agreement, and the base service and addition shipping options are totaled into the <b>totalShippingCost</b>. This action also generates a shipping label that you can use to ship the package.<p class=\"tablenote\"><b>Important!</b> Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.</p>
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace eBay\Sell\Logistics\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ShippingQuoteRequestTest Class Doc Comment
 *
 * @category    Class
 * @description This complex type defines the request body for createShippingQuote. Sellers request a quote for a shipment by defining the &amp;quot;To&amp;quot; and &amp;quot;From&amp;quot; addresses for the package, plus the package&#39;s size. Carriers respond by offering up a &amp;quot;rate&amp;quot; for the service of theirs that best fits seller&#39;s needs.
 * @package     eBay\Sell\Logistics
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ShippingQuoteRequestTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ShippingQuoteRequest"
     */
    public function testShippingQuoteRequest()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "orders"
     */
    public function testPropertyOrders()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "package_specification"
     */
    public function testPropertyPackageSpecification()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ship_from"
     */
    public function testPropertyShipFrom()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ship_to"
     */
    public function testPropertyShipTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
