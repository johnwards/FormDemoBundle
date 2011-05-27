<?php

namespace Acme\FormDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\FormDemoBundle\Form\AccountRegisterType;
use Acme\FormDemoBundle\Form\AccountType;
use Acme\FormDemoBundle\Form\ResearcherType;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    
class DemoController extends Controller
{

    /**
     * @Route("/account/register", name="account_register")
     * @Template()
     */
    public function registerAction()
    {
        $formFactory = $this->get('form.factory');
        $form = $formFactory->create(new AccountRegisterType());

        if ('POST' == $this->get('request')->getMethod()) {
            $form->bindRequest($this->get('request'));
            if ($form->isValid()) {
                return new RedirectResponse($this->generateUrl('account_register_done'));
            }
        }
        
        return array('form' => $form->createView());
    }


    /**
     * @Route("/account", name="account")
     * @Template()
     */
    public function accountAction()
    {
        $formFactory = $this->get('form.factory');
        $form = $formFactory->create(new AccountType());

        if ('POST' == $this->get('request')->getMethod()) {
            $form->bindRequest($this->get('request'));
            if ($form->isValid()) {
                return new RedirectResponse($this->generateUrl('account_register_done'));
            }
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/researcher", name="researcher")
     * @Template()
     */
    public function researcherAction()
    {
        $formFactory = $this->get('form.factory');
        $form = $formFactory->create(new ResearcherType());

        if ('POST' == $this->get('request')->getMethod()) {
            $form->bindRequest($this->get('request'));
            if ($form->isValid()) {
                return new RedirectResponse($this->generateUrl('account_register_done'));
            }
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/account/register/done", name="account_register_done")
     * @Template()
     */
    public function registerDoneAction()
    {
        return array();
    }
}
