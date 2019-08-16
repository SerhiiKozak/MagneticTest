<?php

namespace Serhii\Bundle\TestBundle\Controller;

use Serhii\Bundle\TestBundle\Entity\CompanyCrud;
use Serhii\Bundle\TestBundle\Entity\PortraitCrud;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    /**
     * @Route ("/index", name="serhii_test_company")
     * @Template
     */
    public function indexAction()
    {
        return $this->render('SerhiiTestBundle:Company:index.html.twig');
    }

    /**
     * @Route("/create", name="serhii_company_create")
     * @Template("SerhiiTestBundle:Company:update.html.twig")
     */
    public function createAction()
    {
        $formAction = $this->get('oro_entity.routing_helper')
            ->generateUrlByRequest('serhii_company_create', $this->getRequest());
        $companyCrud = new CompanyCrud();
        return $this->update($companyCrud, $formAction);
    }

    /**
     * @Route("/update/{id}", name="serhii_test_update", requirements={"id"="\d+"})
     * @Template
     */
    public function updateAction(CompanyCrud $entity)
    {
        $formAction = $this->get('router')->generate('serhii_company_update', ['id' => $entity->getId()]);

        return $this->update($entity, $formAction);
    }

    /**
     * @Route("/delete/{id}", name="serhii_test_delete", requirements={"id"="\d+"})
     * @Template
     */
    public function deleteAction($id)
    {

    }

    /**
     * @param CompanyCrud   $entity
     * @param string $formAction
     *
     * @return array
     */
    protected function update(CompanyCrud $entity, $formAction)
    {
        $saved = false;

        if ($this->get('serhii_company.form.handler')->process($entity)) {
            if (!$this->getRequest()->get('_widgetContainer')) {
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $this->get('translator')->trans('serhii_company.company_crud.controller.saved.message')
                );

                return $this->get('oro_ui.router')->redirectAfterSave(
                    ['route' => 'serhii_company_update', 'parameters' => ['id' => $entity->getId()]],
                    ['route' => 'serhii_test_index'],
                    $entity
                );
            }
            $saved = true;
        }

        return array(
            'entity'     => $entity,
            'saved'      => $saved,
            'form'       => $this->get('serhii_company.form.handler')->getForm()->createView(),
            'formAction' => $formAction
        );
    }
}