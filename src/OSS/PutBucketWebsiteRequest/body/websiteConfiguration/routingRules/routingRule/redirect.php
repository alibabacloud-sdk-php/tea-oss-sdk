<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS\OSS\PutBucketWebsiteRequest\body\websiteConfiguration\routingRules\routingRule;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\OSS\OSS\redirect\mirrorHeaders;
use AlibabaCloud\SDK\OSS\OSS\redirect\mirrorHeaders\set;

class redirect extends Model{
    protected $_name = [];

    public $mirrorHeaders;

    public $redirectType;

    public $passQueryString;

    public $mirrorURL;

    public $mirrorPassQueryString;

    public $mirrorFollowRedirect;

    public $mirrorCheckMd5;

    public $protocol;

    public $hostName;

    public $httpRedirectCode;

    public $replaceKeyPrefixWith;

    public $replaceKeyWith;

}