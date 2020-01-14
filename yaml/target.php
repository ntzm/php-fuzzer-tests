<?php

/** @var \PhpFuzzer\Fuzzer $fuzzer */

require __DIR__ . '/vendor/autoload.php';

$fuzzer->addDictionary('yaml.dict');

$fuzzer->setTarget(function (string $input) {
    \Symfony\Component\Yaml\Yaml::parse($input);
});
