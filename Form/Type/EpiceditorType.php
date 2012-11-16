<?php
namespace Backender\EpiceditorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * EpicEditor type
 *
 */
class EpiceditorType extends AbstractType
{
	protected $container;
	protected $transformers;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}


	/**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		
	}

	/**
	 * {@inheritdoc}
	 */
	public function buildView(FormView $view, FormInterface $form, array $options)
	{
		
		
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