## API 签名加密
[![Latest Stable Version](https://img.shields.io/packagist/v/shitoudev/phone-location.svg)](https://packagist.org/packages/shitoudev/phone-location)
[![Build Status](https://travis-ci.org/shitoudev/phone-location.svg?style=flat-square&branch=master)](https://travis-ci.org/shitoudev/phone-location)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)](https://php.net/)


PHP 实现数据加密包括md5等 

### Installation
```
// 非 composer 方式安装的，引入文件
// include './src/PhoneLocation.php';
```

### Usage
```php
<?php
use Shitoudev\Phone\PhoneLocation;

// composer 方式安装
// include './vendor/autoload.php';

// 非 composer 方式安装的，引入文件
// include './src/PhoneLocation.php';
	
$ApiSignature = new ApiSignature();
$params = [
    'province' => '上海',
    'city' => '上海',
    'postcode' => '200000',
    'tel_prefix' => '021',
    'sp' => '联通',
];
// 签名key
$signKey = 'your_sign_key';
// 对输入参数进行加密
$sign = $ApiSignature->generateMd5Sign($params, $signKey);
// Output;
Array
(
    [province] => 上海
    [city] => 上海
    [postcode] => 200000
    [tel_prefix] => 021
    [sp] => 联通
)
```
