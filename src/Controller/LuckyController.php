<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function index()
    {           
        return new Response(
            '<html><body>lucky index</body></html>'
        );
    }

    public function number($a)
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky '.$a.' number: '.$number.'</body></html>'
        );
    }

    public function hello()
    {           
        return new Response(
            '<html><body>hello world</body></html>'
        );
    }
}
