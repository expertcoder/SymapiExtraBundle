<?php

namespace ExpertCoder\SymapiExtraBundle;

use ExpertCoder\SymapiExtraBundle\DependencyInjection\Complier\OverrideServiceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExpertCoderSymapiExtraBundle extends Bundle
{
	public function build(ContainerBuilder $container)
	{
		parent::build($container);

		$container->addCompilerPass(new OverrideServiceCompilerPass());
	}

}
