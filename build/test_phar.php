<?php
require __DIR__ . '/artifacts/dts-file-transfer.phar';

$service = new \DTS\eBaySDK\FileTransfer\Services\FileTransferService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\FileTransfer\Services\FileTransferService::VERSION;
