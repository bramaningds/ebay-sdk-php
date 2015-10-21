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

namespace DTS\eBaySDK\FileTransfer\Services\Test;

use DTS\eBaySDK\FileTransfer\Services\FileTransferService;
use DTS\eBaySDK\FileTransfer\Types;
use DTS\eBaySDK\Mocks\HttpClient;

class AttachmentTest extends \PHPUnit_Framework_TestCase
{
    public function testAttachmentFieldIsSetCorrectlyInRequest()
    {
        $h = new HttpClient();

        $s = new FileTransferService([
            'authToken' => '321',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => '']
        ], $h);

        // Calling the operation will not set the attachment field if there is no attachment.
        $r = new Types\UploadFileRequest();
        $this->assertEquals(null, $r->fileAttachment);
        $s->uploadFile($r);
        $this->assertEquals(null, $r->fileAttachment);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $this->assertEquals(null, $r->fileAttachment);
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertEquals('<xop:Include xmlns:xop="http://www.w3.org/2004/08/xop/include" href="cid:attachment.bin@devbay.net"/>', $r->fileAttachment->Data);
        $this->assertEquals(6, $r->fileAttachment->Size);

        // Calling the operation results in the attachment field been set by the service if there is an attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $r->fileAttachment = new Types\FileAttachment();
        $this->assertEquals(null, $r->fileAttachment->Data);
        $this->assertEquals(null, $r->fileAttachment->Size);
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertEquals('<xop:Include xmlns:xop="http://www.w3.org/2004/08/xop/include" href="cid:attachment.bin@devbay.net"/>', $r->fileAttachment->Data);
        $this->assertEquals(6, $r->fileAttachment->Size);

        // Calling the operation shouldn't modify an existing file attachment.
        $r = new Types\UploadFileRequest();
        $r->attachment('123ABC');
        $r->fileAttachment = new Types\FileAttachment();
        $r->fileAttachment->Data = 'ABCD1234';
        $r->fileAttachment->Size = 8;
        $s->uploadFile($r);
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Types\FileAttachment', $r->fileAttachment);
        $this->assertEquals('ABCD1234', $r->fileAttachment->Data);
        $this->assertEquals(8, $r->fileAttachment->Size);
    }
}
