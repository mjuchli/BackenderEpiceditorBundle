<?php

namespace Backender\EpiceditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{   
    /**
     * @Route("/ooo", name="home")
     * @Template()
     */
    public function indexAction()
    {
	   	return array();
    }
}
