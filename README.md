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

##Developer Notes

Change the composer.json Git version fo push via SSH alias

````
git remote set-url origin git@github-expertcoder:expertcoder/SymapiExtraBundle.git
git remote set-url --push origin git@github-expertcoder:expertcoder/SymapiExtraBundle.git
````