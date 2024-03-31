<?php

declare(strict_types=1);

use function PHPStan\Testing\assertType;

/** @var countable|string $variable */
$variable = random_int(0, 1) !== 0 ? 'string' : [1, 2];
assertType('countable', type($variable)->asArray());

$variable = random_int(0, 1) !== 0 ? 'string' : [1, 2];
assertType('countable', type($variable)->asArray());
