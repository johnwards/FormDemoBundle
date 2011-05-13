<?php

namespace Acme\FormDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AccountRegisterType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('account', new AccountType())
            ->add('researcher', new ResearcherType())
        ;
    }

    public function getIdentifier()
    {
        return 'account_register';
    }
}
