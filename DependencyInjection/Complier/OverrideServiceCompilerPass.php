<?php

namespace ExpertCoder\SymapiExtraBundle\DependencyInjection\Complier;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
	public function process(ContainerBuilder $container)
	{
		$definition = $container->getDefinition('form.type_extension.form.validator');
		$definition->setClass('ExpertCoder\SymapiExtraBundle\Other\OverrideFormTypeValidatorExtension');
	}
}