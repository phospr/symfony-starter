<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Route("/_rest_homepage.{_format}", name="rest_homepage")
     * @View()
     */
    public function indexAction(Request $request)
    {
        return ['Hello' => 'World'];
    }
}
