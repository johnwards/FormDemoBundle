Symfony Form Demo Bundle
========================

Add the Acme namespace to your autoloader:

          // app/autoload.php
          $loader->registerNamespaces(array(
                'Acme' => __DIR__.'/../vendor/bundles',
                // your other namespaces
          ));

Add this bundle to your application's kernel:

          // application/ApplicationKernel.php
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




