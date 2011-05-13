<?php

namespace Acme\FormDemoBundle\Entity;

class Researcher
{
    /**
     * @assert:NotBlank()
     */
    public $firstName;

    /**
     * @assert:NotBlank()
     */
    public $lastName;

    /**
     * @assert:NotBlank()
     */
    public $email;
}
