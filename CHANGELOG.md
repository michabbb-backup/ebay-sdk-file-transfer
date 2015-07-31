# CHANGELOG

## Unreleased

### END OF LIFE NOTICE

This repository is now deprecated and will reach its end of life on the 6th December 2015. It is only maintained for bug fixes. A new version of the SDK has been released and is available at [https://github.com/davidtsadler/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php). A guide can be found at [http://devbay.net/sdk/guides/migration/](http://devbay.net/sdk/guides/migration/) to help migrate existing projects to the new repository.

### Fix

* Update packager to correctly autoload Symfony Event Dispatcher.

## 0.2.1 - 2015-03-01

### Features

* Allow manual installation of SDK via PHP Phar or Zip archive.

### Documentation

* State code is generated.
* Correct link to examples.
* Update installation instructions in README.

### Tests

* Add PHP 5.6 and HHVM to travis settings.

## 0.2.0 - 2014-09-08

### Features

* Allow request object to set fileAttachment property. ([c9fed3a](https://github.com/davidtsadler/ebay-sdk-file-transfer/commit/c9fed3a8194c09a41116939d2524ed7a36a14a52)) [David T. Sadler]

  Calling the uploadFile operation requires the fileAttachment property to
  be set correctly in the request object. Without the correct information
  the uploaded file will not be found by the eBay API.

  ```php
  $request->attachment('123ABC');
  $request->fileAttachment = new Types\FileAttachment();
  $request->fileAttachment->Data = '<xop:Include xmlns:xop="http://www.w3.org/2004/08/xop/include" href="cid:attachment.bin@devbay.net"/>';
  $request->fileAttachment->Size = 6;

  $response = $service->uploadFile($request);
  ```

  In order to help users of the SDK the request object will assign the
  correct values to the fileAttachment property when the uploadFile
  operation is called.

  ```php
  $request->attachment('123ABC');

  $response = $service->uploadFile($request);
  ```

## 0.1.0 - 2014-08-25

* Initial release.
