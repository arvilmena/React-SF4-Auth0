<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecuredController extends AbstractController
{
    /**
     * @Route("/api/public", name="api/public")
     */
    public function publicAction()
    {
        return $this->json([
            [
                'albumId' => "1",
                "id" => 1,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"
            ],
            [
                'albumId' => "2",
                "id" => 2,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text"
            ],
            [
                'albumId' => "3",
                "id" => 3,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form"
            ],
        ]);
    }

    /**
     * @Route("/api/private", name="api/private")
     *
     * @return JSONResponse
     */
    public function privateAction()
    {
        return $this->json([
            [
                'albumId' => "1",
                "id" => 1,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout"
            ],
            [
                'albumId' => "2",
                "id" => 2,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text"
            ],
            [
                'albumId' => "3",
                "id" => 3,
                "title" => "accusamus beatae ad facilis cum similique qui sunt",
                "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form"
            ],
        ]);
    }
}
