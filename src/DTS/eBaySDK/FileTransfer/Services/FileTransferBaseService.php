<?php
namespace DTS\eBaySDK\FileTransfer\Services;

class FileTransferBaseService extends \DTS\eBaySDK\Services\BaseService
{
    const HDR_API_VERSION = 'X-EBAY-SOA-SERVICE-VERSION';
    const HDR_AUTH_TOKEN = 'X-EBAY-SOA-SECURITY-TOKEN';
    const HDR_CONTENT_TYPE = 'CONTENT-TYPE';
    const HDR_MESSAGE_PROTOCOL = 'X-EBAY-SOA-MESSAGE-PROTOCOL';
    const HDR_OPERATION_NAME = 'X-EBAY-SOA-OPERATION-NAME';
    const HDR_SERVICE_NAME = 'X-EBAY-SOA-SERVICE-NAME';

    public function __construct($config = [])
    {
        parent::__construct($config);
    }
}
