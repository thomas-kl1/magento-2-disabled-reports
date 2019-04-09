## Blackbird Disable Reports Module

[![Latest Stable Version](https://img.shields.io/packagist/v/blackbird/module-disable-reports.svg?style=flat-square)](https://packagist.org/packages/blackbird/module-disable-reports)
[![License: MIT](https://img.shields.io/github/license/blackbird-agency/magento-2-disabled-reports.svg?style=flat-square)](./LICENSE) 

Blackbird_Optimisation module functionality is represented by the following sub-systems:

* Disable Magento_Log saving in database
* Disable Magento_Reports saving in database

This module lets not overloaded the database of reports and log.

***Sometimes it's easier to just disabled the Magento_Reports module...***

## How to use it

You've just to install and enable it !

## Setup

### Get the package

**Zip Package:**

Unzip the package in app/code/Blackbird/DisableReports.

**Composer Package:**

```
composer require blackbird/module-disable-reports
```

### Install the module

Then, run the following magento command:

```
php bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources.**

## Support

Raise a new request:

- [Issues Tracker](https://github.com/blackbird-agency/magento-2-disabled-reports/issues)

## Authors

- **Thomas Klein** - *Initial work* - [It's me!](https://github.com/thomas-kl1)
- **Blackbird Team** - *Contributor* - [They're awesome!](https://github.com/blackbird-agency)

## Contact

For further information, contact us:

- by email: hello@bird.eu
- or by form: [https://black.bird.eu/en/contacts/](https://black.bird.eu/contacts/)

## License

This project is licensed under the MIT License

***That's all folks!***
