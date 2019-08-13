<?php

namespace App\Controller;

use Happyr\GoogleAnalyticsBundle\Service\Tracker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Tracker $tracker)
    {

        $data=array(
            'dh'=>'mydemo.com',
            'dp'=>'/coucouseb',
            'dt'=>'homepage',
        );
        $tracker->send($data, 'pageview');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
