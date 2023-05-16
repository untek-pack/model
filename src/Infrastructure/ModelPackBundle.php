<?php

namespace Untek\Pack\Model\Infrastructure;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Untek\Core\Kernel\Bundle\BaseBundle;

class ModelPackBundle extends BaseBundle
{
    public function getName(): string
    {
        return 'model-pack';
    }

    public function build(ContainerBuilder $containerBuilder)
    {
        $this->importServices($containerBuilder, __DIR__ . '/../../../../../vendor/untek-model/entity-manager/src/Resources/config/services/entity-manager.php');
        $this->importServices($containerBuilder, __DIR__ . '/../../../../../vendor/untek-model/validator/src/Resources/config/services/validator.php');
    }
}
