<?php
/*
 * This file is part of the Backender\EpiceditorBundle Symfony bundle.
 *
 * (c) Marc Juchli <mail@backender.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Backender\EpiceditorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
	
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('backender_epiceditor');

		$rootNode
			->children()
				->scalarNode('class')->defaultValue('Backender\EpiceditorBundle\Form\Type\EpiceditorType')->end()
                ->scalarNode('container')->defaultValue('epiceditor')->end()
                ->scalarNode('basepath')->defaultValue('/web/bundles/backenderepiceditor')->end()
                ->scalarNode('clientSideStorage')->defaultValue('true')->end()
                ->scalarNode('localStorageName')->defaultValue('epiceditor')->end()
                ->scalarNode('parser')->defaultValue('marked')->end()
                ->scalarNode('focusOnLoad')->defaultValue('false')->end()
                ->arrayNode('file')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('name')->defaultValue('epiceditor')->end()
                        ->scalarNode('defaultContent')->defaultValue('')->end()
                        ->scalarNode('autoSave')->defaultValue('100')->end()
                    ->end()
                ->end()
                ->arrayNode('theme')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('base')->defaultValue('/themes/base/epiceditor.css')->end()
                        ->scalarNode('preview')->defaultValue('/themes/preview/github.css')->end()
                        ->scalarNode('editor')->defaultValue('/themes/editor/epic-dark.css')->end()
                    ->end()
                ->end()
                ->arrayNode('shortcut')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('modifier')->defaultValue('18')->end()
                        ->scalarNode('fullscreen')->defaultValue('70')->end()
                        ->scalarNode('preview')->defaultValue('80')->end()
                        ->scalarNode('edit')->defaultValue('79')->end()
                    ->end()
                ->end()
            ->end()
		;

        return $treeBuilder;
    }
    
}
