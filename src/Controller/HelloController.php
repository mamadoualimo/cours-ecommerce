<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Detector;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    /**
     * @Route("/hello/{prenom?World}", name="hello")
     */
    public function hello(
        $prenom = "World",
        LoggerInterface $logger,
        Calculator $calculator,
        Slugify $slugify,
        Environment $twig,
        Detector $detector
    ) {
        dump($detector->detect(101));
        dump($detector->detect(10));

        dump($twig);

        dump($slugify->slugify("Hello World"));

        $logger->error("Mon message de log !");

        $tva = $calculator->calcul(100);

        dump($tva);

        return new Response("Hello $prenom");
    }
}
