# PHPUNIT Test Boilerplate (PHPUnit 8.2)

<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/boontat/phpunit-boilerplate.svg?branch=master" alt="Build Status"></a>

## Requirement
1. PHP version 7.2 and above
2. PHP extension - xml, mbstring
3. PHP-xdebug

## Installation
1. `$ git clone git@github.com:boontat/phpunit-boilerplate.git`
2. `$ composer install`

## Usage
1. `$ ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests`

## Command Option
1. `--testdox` - Use the function name as the brief description of what the test is about
2. `--bootstrap` - Include script before the test run
3. `tests` - Folder containing the test script, test all file with postfix `*Test.php`. Test single file by specify exact test script, eg. `tests/EmailTest.php`