<?php

namespace Samiax\OneSignalApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('one_signal_api');

        $rootNode
            ->children()
                ->scalarNode('app_id')->end()
                ->scalarNode('app_auth_key')->end()
                ->scalarNode('user_auth_key')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
