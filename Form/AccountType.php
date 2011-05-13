<?php

namespace Acme\FormDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('organizationName')
            
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\FormDemoBundle\Entity\Account',
        );
    }

    public function getIdentifier()
    {
        return 'account';
    }
}
