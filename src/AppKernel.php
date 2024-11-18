<?php

namespace App;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    #[\Override]
    public function registerBundles(): iterable
    {
        // Taken from symfony/framework-bundle's MicroKernelTrait
        $contents = require __DIR__.'/../config/bundles.php';
        foreach ($contents as $class => $envs) {
            if ($envs[$this->environment] ?? $envs['all'] ?? false) {
                yield new $class();
            }
        }
    }

    #[\Override]
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        // Configure container
        $configFilename = __DIR__.'/../config/services.yaml';
        $configEnvFilename = __DIR__."/../config/services_{$this->environment}.yaml";
        if (is_file($configEnvFilename)) {
            $configFilename = $configEnvFilename;
        }
        $loader->load($configFilename);
    }

    #[\Override]
    public function getProjectDir(): string
    {
        // Points to the app's path where the `composer.json` is.
        // An implemenation for this is already provided in `Kernel`, but here we provide a solution that's more simple.
        return __DIR__.'/..';
    }
}
