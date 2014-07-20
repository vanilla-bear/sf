<?php

namespace sf\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", host="en.sf.fr",name="my_route")
     * @Route("/bonjour/{name}", host="fr.sf.fr",name="ma_route")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
