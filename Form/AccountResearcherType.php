<?php

namespace Acme\FormDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AccountResearcherType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('organizationName')
            ->add('researchers', 'collection', array(
                'label' => 'options',
                "type"=> new ResearcherType(),
                "allow_add"=>true,
                "prototype"=>true,
                "allow_delete"=>true,
                "options" => array(
                   'label' => 'A Researcher',
                ),
            ))
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
        return 'account_researcher';
    }
}
