# Geocoder.xyz Data Geocoding Library for PHP
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Frezartmuco%2FGeocoderXYZ.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Frezartmuco%2FGeocoderXYZ?ref=badge_shield)


A [PHP](http://php.net/) library to use [Geocoder.xyz geocoder API](https://geocode.xyz).

## Overview
The Geocoderxyz Data Geocoding PHP library attempts to use the [CURL](http://www.php.net/manual/en/book.curl.php)
extension to access the geocode.xyz API. If CURL support is not available, install it.

PHP 5.2 - 7 are supported. 

To use the library you must either have the CURL extension compiled into your version of PHP 

### Authentication

You need an API key, which can be signed for [here](http://geocode.xyz/api).

## Installation

### With Composer

The recommended - and easiest way - to install is via [Composer](https://getcomposer.org/).
Require the library in your project's composer.json file.

```
$ composer require geocodexyz/geocode
```

Import the Geocoder class.

```
require "vendor/autoload.php";
```

Start geocoding

```php
$geocoder = new Geocoder('YOUR-API-KEY');
$result = $geocoder->geocode('415 WEALTH AVE WEST Singapore');
print_r($result);
```

### The old fashioned way
just require the file Geocoder.php 
for more examples how to use this class see the file `demo.php`






## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Frezartmuco%2FGeocoderXYZ.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Frezartmuco%2FGeocoderXYZ?ref=badge_large)