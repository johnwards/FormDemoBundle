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

    /**
     * @assert:Choice(choices = {"male", "female"}, message = "Choose a valid gender.")
     */
    public $gender;
}
