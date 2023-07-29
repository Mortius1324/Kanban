<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class LuckyController
{
    #[Route('/')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    #[Route('/browse')]
    public function browse(): Response
    {
        return new Response(
            'Title: PB and JAMES'
        );
    }
}