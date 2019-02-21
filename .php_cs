<?php

/**
 * Bushbaby's PHP code style fixer.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see       https://bushbaby.nl/
 *
 * @copyright Copyright (c) 2016-2019 prooph software GmbH <contact@prooph.de>
 * @copyright Copyright (c) 2016-2019 Sascha-Oliver Prolic <saschaprolic@googlemail.com>.
 * @copyright Copyright (c) 2010-2019 bushbaby multimedia. (https://bushbaby.nl)
 * @author    Bas Kamer <baskamer@gmail.com>
 * @license   MIT
 *
 * @package   bushbaby/php-cs-fixer-config
 */

declare(strict_types=1);

$config = new \Bsb\CS\Config();
$config->getFinder()->in(__DIR__)->exclude([])->append(['.php_cs']);

$cacheDir = \getenv('TRAVIS') ? \getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
