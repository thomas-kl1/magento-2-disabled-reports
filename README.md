## Synopsis

Blackbird_Optimisation module functionality is represented by the following sub-systems:

* Disable Magento_Log saving in database
* Disable Magento_Reports saving in database

This module lets not overloaded the database of reports and log.

## How to use it

You've just to install and enable it !

## Setup

The module is available on packagist, so you can install the module through composer:

```
composer require blackbird/optimisation
```

Then, run the following magento command:

```
php bin/magento setup:upgrade
```

**If you are in production mode, do not forget to recompile and redeploy the static resources.**
## Authors

- **Thomas Klein** - *Initial work* - [It's me!](https://github.com/thomas-blackbird)
- **Blackbird Team** - *Contributor* - [They're awesome!](https://github.com/blackbird-agency)

## License

This project is licensed under the OSL 3.0 License

***That's all folks!***
