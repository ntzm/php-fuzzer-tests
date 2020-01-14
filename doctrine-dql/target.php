<?php

/** @var \PhpFuzzer\Fuzzer $fuzzer */

require __DIR__ . '/vendor/autoload.php';

$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(['/empty'], true);
$em = \Doctrine\ORM\EntityManager::create([
    'driver' => 'pdo_sqlite',
], $config);

$fuzzer->addDictionary('sqlite.dict');

$fuzzer->setTarget(function (string $input) use ($em) {
    $em->createQuery($input)->execute();
});
