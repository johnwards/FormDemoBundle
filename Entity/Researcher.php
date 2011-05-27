<?php

namespace Acme\FormDemoBundle\Entity;
use Symfony\Component\Validator\Constraints as assert;
class Researcher
{
    /**
     * @assert\NotBlank()
     */
    public $firstName;

    /**
     * @assert\NotBlank()
     */
    public $lastName;

    /**
     * @assert\NotBlank()
     */
    public $email;

    /**
     * @assert\Choice(choices = {"male", "female"}, message = "Choose a valid gender.")
     */
    public $gender;
}
