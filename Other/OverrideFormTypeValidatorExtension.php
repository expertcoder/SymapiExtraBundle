<?php

namespace ApiBundle\Other;

use Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OverrideFormTypeValidatorExtension extends FormTypeValidatorExtension
{
	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		parent::configureOptions($resolver);

		$resolver->setDefaults(array(
			'extra_fields_message' => 'Request should not contain extra fields. The extra fields are {{ extra_fields }}',
		));
	}

}