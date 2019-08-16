<?php

namespace Serhii\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route ("/index", name="serhii_test_index")
     * @Template
     */
    public function indexAction()
    {
        return $this->render('SerhiiTestBundle:Default:index.html.twig');
    }

    /**
     * @Route("/create", name="serhii_test_create")
     * @Template("SerhiiTestBundle:Default:update.html.twig")
     */
    public function createAction()
    {

    }

    /**
     * @Route("/update/{id}", name="serhii_test_update", requirements={"id"="\d+"})
     * @Template
     */
    public function updateAction(SimpleCrud $entity)
    {

    }

    /**
     * @Route("/delete/{id}", name="serhii_test_delete", requirements={"id"="\d+"})
     * @Template
     */
    public function deleteAction($id)
    {

    }
}
