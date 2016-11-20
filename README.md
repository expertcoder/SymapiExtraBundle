# SymapiExtraBundle

##Installation

Install with composer

````
composer require expertcoder/symapi-extra-bundle
````

Include in AppKernal.php

````
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            ....
            new ExpertCoder\SymapiExtraBundle\ExpertCoderSymapiExtraBundle(),
            ....
        ];

````