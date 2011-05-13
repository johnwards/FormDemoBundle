<?php

namespace Acme\FormDemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ResearcherType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('email')
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\FormDemoBundle\Entity\Researcher',
        );
    }

    public function getIdentifier()
    {
        return 'researcher';
    }
}
