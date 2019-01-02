# Drupal extension for Exakat

This is the [Drupal](https://www.Drupal.com/) specific analysis and reports for the Exakat static analysis engine. "Drupal is an open source platform for building amazing digital experiences. It's made by a dedicated community. Anyone can use it, and it will always be free."

This is the development code source of the Drupal extension for Exakat. To run an audit with this code, install the Drupal.phar extension in your copy of exakat. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

To use this set of analysis, you need a working installation of the [Exakat](https://www.exakat.io/) engine. Follow the [Installation instructions](https://exakat.readthedocs.io/en/latest/Installation.html).

To run the tests, you need [PHPunit](https://www.phpunit.de/) installed locally.

### Installing

Clone this repository on your local machine. Check the `config.ini` file, to update the location of the exakat engine.

```
exakat_path = '/path/to/exakat';
```

## Running the tests

To run the tests, 

```
cd tests;
phpunit Tests/Drupal/SomeAnalysis.php
```

## Deployment

To prepare the list of analysis, run the 'scripts/makeIni.php' script. Then, check the analyzers.ini file that was created.

To prepare the extension as a PHAR archive, run the 'scripts/buildPhar.php' script. 

All needed informations are in the `config.ini` file. Once built, the phar is at the root of the folder. 

Drag this phar to the <exakat>/ext/ folder of any installation to make the analysis available.


## Authors

* **Damien Seguy** - *Initial work* - [Exakat](https://www.exakat.io/)

## License

This project is licensed under the  GNU Affero General Public License : see [LICENSE.md](LICENSE.md) file for details.

All product names, logos, and brands are property of their respective owners.