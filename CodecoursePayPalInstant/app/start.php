<?php
require 'vendor/autoload.php';

define('SITE_URL','http://localhost/CodecoursePayPalInstant');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AfDB_RJgX4w2H2BSRiejiG7Gnl18XCMd-6xX1ickbLF7dAaXu0LsHFU15JCGJvRuBQJsSwbQrbjHsptY',
        'ELUW7MQeMPw-mxd2Y3-HJ4PSrWotvLxTxeVEpLfK1cWlJy6b36PIMHAIfnBE6AK5r6MSeeYCnCalbilw'
    )
    );