<?php

namespace Chaplean\Bundle\CookieBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('chaplean_cookie');

        $rootNode
            ->children()
                ->scalarNode('learn_more')->isRequired()->end()
                ->arrayNode('translations')
                ->children()
                    ->scalarNode('message')->defaultValue('chaplean_cookie.message')->end()
                    ->scalarNode('more')->defaultValue('chaplean_cookie.more')->end()
                ->end()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
