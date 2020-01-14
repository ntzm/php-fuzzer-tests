<?php

/** @var \PhpFuzzer\Fuzzer $fuzzer */

require __DIR__ . '/vendor/autoload.php';

$fuzzer->setTarget(function (string $input) {
    \League\Uri\Uri::createFromString($input);
});
