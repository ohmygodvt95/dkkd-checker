# DKKD Checker - Vietnamese company information checking for PHP/Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ohmygodvt95/dkkd-checker.svg?style=flat-square)](https://packagist.org/packages/ohmygodvt95/dkkd-checker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ohmygodvt95/dkkd-checker/run-tests?label=tests)](https://github.com/ohmygodvt95/dkkd-checker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ohmygodvt95/dkkd-checker/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/ohmygodvt95/dkkd-checker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ohmygodvt95/dkkd-checker.svg?style=flat-square)](https://packagist.org/packages/ohmygodvt95/dkkd-checker)


Use keywords to search for company registered information on government portal.

## Installation

You can install the package via composer:

```bash
composer require ohmygodvt95/dkkd-checker
```

Optionally, you can publish the config file with:

```bash
php artisan vendor:publish --tag="dkkd-checker-config"
```

This is the contents of the published config file:

```php
<?php

// config for Ohmygodvt95/DKKDChecker
return [
    'token' => [
        'endpoint' => 'https://dichvuthongtin.dkkd.gov.vn/inf/default.aspx',
        'regex' =>  '/id=\"ctl00_hdParameter\".+value=\"([a-zA-Z0-9\-]+)\"/m'
    ],
    'search' => [
        'endpoint' => 'https://dichvuthongtin.dkkd.gov.vn/inf/Public/Srv.aspx/GetSearch'
    ]
];
```

## Usage

```php
use Ohmygodvt95\DKKDChecker\DKKDChecker;

var_dump(DKKDChecker::search('0101659906'));

/** 
// result

array:3 [
    0 => array:14 [
        "__type" => "Inf.BusinessLayer.BusinessEntities.ApacheSolr.Enterprise"
        "Id" => "540179"
        "Name" => "CÔNG TY CỔ PHẦN GMO-Z.COM RUNSYSTEM"
        "Name_F" => "GMO-Z.COM RUNSYSTEM JOINT STOCK COMPANY"
        "Short_Name" => ""
        "Enterprise_Code" => "0005768616"
        "Enterprise_Gdt_Code" => "0101659906"
        "Status" => null
        "City_Id" => "81"
        "District_Id" => "1035"
        "Ward_Id" => "12068"
        "Ho_Address" => "Tầng 6, Tòa nhà Ocean Park, Số 01 Đào Duy Anh, Phường Phương Mai, Quận Đống Đa, Thành phố Hà Nội, Việt Nam"
        "Ho_Address_F" => "Tầng 6, Tòa nhà Ocean Park, Số 01 Đào Duy Anh, Phường Phương Mai, Quận Đống Đa, Hà Nội, Vietnam"
        "Legal_First_Name" => "NGÔ VĂN TẨU"
    ],
    .....
]
 */
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ThienLV](https://github.com/ohmygodvt95)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
