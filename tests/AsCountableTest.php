<?php

declare(strict_types=1);

test('countable type', function (): void {
    $variable = [];

    $value = type($variable)->asCountable();

    expect($value)->toBeCountable();
});

test('not countable type', function (): void {
    $variable = new stdClass();

    type($variable)->asCountable();
})->throws(TypeError::class, 'Variable is not a countable.');
