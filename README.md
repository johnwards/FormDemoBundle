Symfony Form Demo Bundle
========================

Add this bundle to your project as Git submodules:

          $ git submodule add git://github.com/johnwards/FormDemoBundle.git vendor/bundles/Acme/FormDemoBundle

Add the Acme namespace to your autoloader:

          // app/autoload.php
          $loader->registerNamespaces(array(
                'Acme' => __DIR__.'/../vendor/bundles',
                // your other namespaces
          ));

Add this bundle to your application's kernel:

          // app/AppKernel.php
          public function registerBundles()
          {
              return array(
                  // ...
                  new Acme\FormDemoBundle\AcmeFormDemoBundle(),
                  // ...
              );
           }

Add this to your your routing.yml

          _form_demo:
              resource: "@AcmeFormDemoBundle/Resources/config/routing.yml"

Routes:

          /account/register
          /account
          /researcher




