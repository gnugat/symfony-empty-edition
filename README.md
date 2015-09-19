# Symfony Empty Edition

A skeleton allowing you to create an empty Symfony application: it is provided without
any libraries or bundles (except for Symfony's FrameworkBundle).

You can then start building on it, and install the dependencies you need.

> **Note**: The [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
> provides a big set of libraries and bundles (database, email, templating, etc).
> If you don't feel comfortable with picking your own yet, you should probably use it.

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
