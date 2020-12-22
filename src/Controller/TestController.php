<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        dd("fonctionne");
    }

    /**
     * @Route("{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
     */

    public function test(Request $request, $age)
    {
        # $age = $request->attributes->get('age');

        return new Response("Vous avez $age ans !");
    }
}
