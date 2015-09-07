# Symfony Empty Edition

A skeleton to help you bootstrap your Symfony Applications, without the fuss of the standard edition.

## Installation

Use [Composer](https://getcomposer.org/) to create a new application:

```
composer create-project gnugat/symfony-empty-edition my-project
```

## Build scripts

3 build scripts are provided out of the box:

* `bin/install.sh` to run in development environment
* `bin/test.sh` to run the test suite
* `bin/update.sh` to run in production

## Differences with the Standard Edition

* Only 2 bundles: `src/AppBundle` and `symfony/framework-bundle`, add the ones you really need
* Only 1 app, change the environment using the `SYMFONY_ENV` environment variable
* No annotations (can be brought back by installing `sensio/framework-extra-bundle`)
* Vendor binaries are in `vendor/bin` instead of `bin`, preventing vendor scripts to be to mixed with yours
* Tests are in `tests` instead of `src/AppBundle/Tests`, preventing to autoload them in production
* Symfony environment is set using `SYMFONY_ENV` environment variable
