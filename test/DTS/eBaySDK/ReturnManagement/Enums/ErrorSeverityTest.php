<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ReturnManagement\Enums\Test;

use DTS\eBaySDK\ReturnManagement\Enums\ErrorSeverity;

class ErrorSeverityTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorSeverity();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Enums\ErrorSeverity', $this->obj);
    }
}
