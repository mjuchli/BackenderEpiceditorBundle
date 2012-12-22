<?php
namespace Backender\EpiceditorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * EpicEditor type
 *
 */
class EpiceditorType extends AbstractType
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

     /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['container']            = $options['container'];
        $view->vars['basepath']             = $options['basepath'];
        $view->vars['clientSideStorage']    = $options['clientSideStorage'];
        $view->vars['localStorageName']     = $options['localStorageName'];
        $view->vars['parser']               = $options['parser'];
        $view->vars['focusOnLoad']          = $options['focusOnLoad'];
        $view->vars['file']                 = $options['file'];
        $view->vars['theme']                = $options['theme'];
        $view->vars['shortcut']             = $options['shortcut'];
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'container'         => $this->container->getParameter('backender_epiceditor.epiceditor.container'),
            'basepath'          => $this->container->getParameter('backender_epiceditor.epiceditor.basepath'),
            'clientSideStorage' => $this->container->getParameter('backender_epiceditor.epiceditor.clientSideStorage'),
            'localStorageName'  => $this->container->getParameter('backender_epiceditor.epiceditor.localStorageName'),
            'parser'            => $this->container->getParameter('backender_epiceditor.epiceditor.parser'),
            'focusOnLoad'       => $this->container->getParameter('backender_epiceditor.epiceditor.focusOnLoad'),
            'file'              => $this->container->getParameter('backender_epiceditor.epiceditor.file'),
            'theme'             => $this->container->getParameter('backender_epiceditor.epiceditor.theme'),
            'shortcut'          => $this->container->getParameter('backender_epiceditor.epiceditor.shortcut'),
        ));

    }

    /**
	 * {@inheritdoc}
	 */
	public function getParent()
	{
		return 'textarea';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		return 'epiceditor';
	}

}