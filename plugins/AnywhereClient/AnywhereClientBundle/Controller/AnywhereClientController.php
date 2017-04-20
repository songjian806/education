<?php

namespace AnywhereClient\AnywhereClientBundle\Controller;

use Topxia\AdminBundle\Controller\BaseController;

class AnywhereClientController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnywhereClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
