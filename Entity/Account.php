<?php

namespace Acme\FormDemoBundle\Entity;
use Symfony\Component\Validator\Constraints as assert;
class Account
{
    /**
     * @assert\NotBlank()
     */
    public $organizationName;
}
