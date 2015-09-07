<?php

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$files = $finder->files()->name('*.yml')->in(__DIR__.'/services')->in(__DIR__.'/vendors');
foreach ($files as $file) {
    $loader->import($file->getRealpath());
}
