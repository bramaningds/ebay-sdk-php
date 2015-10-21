<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Finding\Services\Test;

use DTS\eBaySDK\Finding\Services\FindingBaseService;
use DTS\eBaySDK\Finding\Mocks\Service;
use DTS\eBaySDK\Mocks\HttpClient;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigDefinitions()
    {
        $d = FindingBaseService::getConfigDefinitions();

        $this->assertArrayHasKey('apiVersion', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['apiVersion']);

        $this->assertArrayHasKey('globalId', $d);
        $this->assertEquals([
            'valid' => ['string']
        ], $d['globalId']);
    }

    public function testRequiredEbayHeaders()
    {
        $h = new HttpClient();

        $s = new Service([
            'credentials' => ['appId' => '321', 'certId' => '', 'devId' => '']
        ], $h);

        $s->testOperation();

        // Test required headers first.
        $this->assertArrayHasKey(FindingBaseService::HDR_APP_ID , $h->headers);
        $this->assertEquals('321', $h->headers[FindingBaseService::HDR_APP_ID]);

        $this->assertArrayHasKey(FindingBaseService::HDR_OPERATION_NAME, $h->headers);
        $this->assertEquals('testOperation', $h->headers[FindingBaseService::HDR_OPERATION_NAME]);

        // Test that optional headers have not been set until they have been configured.
        $this->assertArrayNotHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertArrayNotHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
    }

    public function testOptionalEbayHeaders()
    {
        $h = new HttpClient();

        $s = new Service([
            'apiVersion' => '123',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '999'
        ], $h);

        $s->testOperation();

        $this->assertArrayHasKey(FindingBaseService::HDR_API_VERSION, $h->headers);
        $this->assertEquals('123', $h->headers[FindingBaseService::HDR_API_VERSION]);

        $this->assertArrayHasKey(FindingBaseService::HDR_GLOBAL_ID, $h->headers);
        $this->assertEquals('999', $h->headers[FindingBaseService::HDR_GLOBAL_ID]);
    }
}

