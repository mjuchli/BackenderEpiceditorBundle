<?php

namespace Backender\EpiceditorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class BackenderEpiceditorExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('twig.form.resources', array_merge(
            $container->getParameter('twig.form.resources'),
            array('BackenderEpiceditorBundle:Form:epiceditor_widget.html.twig')
        ));

        $container->setParameter('backender_epiceditor.form.type.class', $config['class']);
        $container->setParameter('backender_epiceditor.epiceditor.container', $config['container']);
        $container->setParameter('backender_epiceditor.epiceditor.basepath', $config['basepath']);
        $container->setParameter('backender_epiceditor.epiceditor.clientSideStorage', $config['clientSideStorage']);
        $container->setParameter('backender_epiceditor.epiceditor.localStorageName', $config['localStorageName']);
        $container->setParameter('backender_epiceditor.epiceditor.parser', $config['parser']);
        $container->setParameter('backender_epiceditor.epiceditor.focusOnLoad', $config['focusOnLoad']);
        $container->setParameter('backender_epiceditor.epiceditor.file', $config['file']);
        $container->setParameter('backender_epiceditor.epiceditor.theme', $config['theme']);
        $container->setParameter('backender_epiceditor.epiceditor.shortcut', $config['shortcut']);
    }
}
