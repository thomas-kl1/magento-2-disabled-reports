## Synopsis

Blackbird_Optimisation module functionality is represented by the following sub-systems:
    - Disable Magento_Log saving in database
    - Disable Magento_Reports saving in database

This module lets not overloaded the database of reports and log.

## How to use it

You've just to install and enable it !

## Installation

Including this dependency in your Magento project is the more convenient way to integrate optimisation module.

In order to be able to install it, you'll need to be sure that your root composer.json file contains a reference to the bitbucket repository.  To do so you'll need to add the following to `composer.json`:

```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://bitbucket.org/blackbirdagency/magento2-extensions-optimisation/"
        }
    ]
```

The above can also be added via the composer cli with the command: 

    composer config repositories.blackbird_optimisation vcs https://bitbucket.org/blackbirdagency/magento2-extensions-optimisation/


Once the repository added, run the two following commands:

    composer require blackbird/optimisation
    php bin/magento setup:upgrade

## Contributors

Thomas Klein ([Blackbird](http://black.bird.eu) team member)

## License

OSL 3.0
