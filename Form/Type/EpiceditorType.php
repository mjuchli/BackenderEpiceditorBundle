<?php
namespace Backender\EpiceditorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;


/**
 * EpicEditor type
 *
 */
class EpiceditorType extends AbstractType
{
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