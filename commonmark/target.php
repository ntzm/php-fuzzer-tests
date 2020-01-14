<?php

/** @var \PhpFuzzer\Fuzzer $fuzzer */

require __DIR__ . '/vendor/autoload.php';

$converter = new \League\CommonMark\CommonMarkConverter();

$fuzzer->addDictionary('md.dict');

$fuzzer->setTarget(function (string $input) use ($converter) {
    $converter->convertToHtml($input);
});
