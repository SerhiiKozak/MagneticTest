<?php

namespace Serhii\Bundle\TestBundle\Controller;

use Serhii\Bundle\TestBundle\Entity\PortraitCrud;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Serhii\Bundle\TestBundle\Model\PortraitModel;

class PortraitController extends Controller
{

  /**
     * @Route ("/index", name="serhii_test_portrait")
     * @Template
     */
    public function indexAction()
    {
        return $this->render('SerhiiTestBundle:Portrait:index.html.twig');
    }

    /**
     * @Route("/create", name="serhii_test_create")
     * @Template("SerhiiTestBundle:Portrait:update.html.twig")
     */
    public function createAction()
    {
        $formAction = $this->get('oro_entity.routing_helper')
            ->generateUrlByRequest('serhii_test_create', $this->getRequest());
        $portraitCrud = new PortraitCrud();
        return $this->update($portraitCrud, $formAction);
    }

    /**
     * @Route("/update/{id}", name="serhii_test_update", requirements={"id"="\d+"})
     * @Template
     */
    public function updateAction(PortraitCrud $entity)
    {
        $formAction = $this->get('router')->generate('serhii_test_update', ['id' => $entity->getId()]);

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
     * @param PortraitCrud   $entity
     * @param string $formAction
     *
     * @return array
     */
    protected function update(PortraitCrud $entity, $formAction)
    {
        $saved = false;

        if ($this->get('serhii_test.form.handler')->process($entity)) {
            if (!$this->getRequest()->get('_widgetContainer')) {
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $this->get('translator')->trans('serhii_test.portrait_crud.controller.saved.message')
                );

                return $this->get('oro_ui.router')->redirectAfterSave(
                    ['route' => 'serhii_test_update', 'parameters' => ['id' => $entity->getId()]],
                    ['route' => 'serhii_test_index'],
                    $entity
                );
            }
            $saved = true;
        }

        return array(
            'entity'     => $entity,
            'saved'      => $saved,
            'form'       => $this->get('serhii_test.form.handler')->getForm()->createView(),
            'formAction' => $formAction
        );
    }

  /**
   * @Route("/add_field", name="serhii_test_add_field")
   * @Template
   */
    protected function addField(PortraitModel $portraitModel)
    {
      if (!empty($_POST['name']) && !empty($_POST['type']) )
      {
        var_dump($_POST); die;
        $name = '';
        $type = '';
        $portraitModel->addColumn($name, $type);
      }
      echo 'lol';
    }

  /**
   * @Route ("/show_form", name="serhii_test_add_field")
   * @Template
   */
    public function showAddFormAction()
    {
      return $this->render('SerhiiTestBundle:Portrait:add_form.html.twig');
    }

}