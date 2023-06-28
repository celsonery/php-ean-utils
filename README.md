# EANs Utility for PHP - by Celso Nery
A package utility to work with EANs/GTINs, for validate and generate fake EANs

[![Maintainer](http://img.shields.io/badge/maintainer-@celsonery-blue.svg?style=flat-square)](https://twitter.com/celsonery)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/celsonery/php-ean-utils.svg?style=flat-square)](https://packagist.org/packages/celsonery/php-ean-utils)
[![Latest Version](https://img.shields.io/github/release/celsonery/php-ean-utils.svg?style=flat-square)](https://github.com/celsonery/php-ean-utils/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/celsonery/php-ean-utils.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/php-ean-utils)
[![Quality Score](https://img.shields.io/scrutinizer/g/celsonery/php-ean-utils.svg?style=flat-square)](https://scrutinizer-ci.com/g/celsonery/php-ean-utils)
[![Total Downloads](https://img.shields.io/packagist/dt/celsonery/php-ean-utils.svg?style=flat-square)](https://packagist.org/packages/ccelsonery/php-ean-utils)

## Installation

This package available by Composer:

```bash
"celsonery/php-ean-utils": "^1.3"
```

or run

```bash
composer require celsonery/php-ean-utils
```

## How to use

In your class import this trait
```php
use CelsoNery\EanUtils\Services\Traits\EanUtil;

class YourClassName
{
    use EanUtil;
    
    public function yourMethod()
    {
        if ($this->isValid("7898114289779")) {
            // Do something
        }
    }
}
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email celso.nery@gmail.com instead of using the issue tracker.

Thank you

## Credits

- [Celso Nery](https://github.com/celsonery) (Maintainer/Developer)
- [All Contributors](https://github.com/celsonery/php-ean-utils/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
