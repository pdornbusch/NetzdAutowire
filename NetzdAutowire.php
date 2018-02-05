<?php

namespace NetzdAutowire;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Shopware-Plugin NetzdAutowire.
 */
class NetzdAutowire extends Plugin
{

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('netzd_autowire.plugin_dir', $this->getPath());
        parent::build($container);
    }

}
