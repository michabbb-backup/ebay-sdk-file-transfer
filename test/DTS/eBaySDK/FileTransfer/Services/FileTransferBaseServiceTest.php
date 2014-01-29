<?php

use DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService;

class FileTransferBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FileTransferBaseService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\FileTransfer\Services\FileTransferBaseService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}
