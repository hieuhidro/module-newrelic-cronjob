# Adding Magento 2 cronjob's code to NewRelic

Adding Magento 2 cronjob's jobcode to NewRelic application.


## By me a coffee:
- https://patreon.com/solutiontutorials
- https://paypal.me/hidrole

## Installation

    hidro/module-newrelic-cronjob

Packagist: [https://packagist.org/packages/hidro/module-graylog](https://packagist.org/packages/hidro/module-newrelic-cronjob)

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


# More packages: 
- Core webvital: https://github.com/hieuhidro/core-web-vitals
- Checkout my paid version of Magento 2 CWV module: https://store.solutiontutorials.com/magento-2-core-web-vital-critical-css.html


## Main Functionalities

- Adding Magento 2 cronjob's jobcode to NewRelic application.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Hidro`
 - Enable the module by running `php bin/magento module:enable Hidro_NewrelicCronjob`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - public repository `packagist.org`
    - public github repository as vcs
 - Install the module composer by running `composer require hidro/module-newrelic-cronjob`
 - enable the module by running `php bin/magento module:enable Hidro_NewrelicCronjob`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

## Specifications

## Attributes

## My Website
 - https://www.solutiontutorials.com/
