<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) pei.greet <pei.greet@qq.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

date_default_timezone_set('Asia/Shanghai');

require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config.php';

$console = new Kcloze\MultiProcess\Console($config);
$console->run();
