# php-cs-fixer-config

PHP CS Fixer config

It's based on the ideas of [`refinery29/php-cs-fixer-config`](https://github.com/refinery29/php-cs-fixer-config/).

## Installation

Run

```
$ composer require --dev bushbaby/php-cs-fixer-config
```
  
## Usage

### Configuration

Create a configuration file `.php-cs-fixer.php` in the root of your project:

```php
<?php

$config = new Bsb\CS\Config();
$config->getFinder()->in(__DIR__);

$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php-cs-fixer.cache');

return $config;
```

### Git

Add `.php-cs-fixer.cache` (this is the cache file created by `php-cs-fixer`) to `.gitignore`:

```
vendor/
.php-cs-fixer.cache
```

### Travis

Update your `.travis.yml` to cache the `.php-cs-fixer` directory:

```yml
cache:
  directories:
    - $HOME/.php-cs-fixer
```

Then run `php-cs-fixer` in the `script` section:

```yml
script:
  - vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php --verbose --diff --dry-run
```

### GitLab

Update your `.gitlab-ci` to cache the `.php-cs-fixer.cache` file:

```
  script:
    - vendor/bin/php-cs-fixer fix --config=.php_cs --verbose --diff --dry-run
```

## Fixing issues

### Manually

If you need to fix issues locally, just run

```
$ ./vendor/bin/php-cs-fixer fix -v
```

## License

This package is licensed using the MIT License.
