<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecuredController extends AbstractController
{
    /**
     * @Route("/api/public", name="public")
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
     * @Route("/api/private", name="private")
     */
    public function privateAction()
    {
        return $this->json([
            [
                'albumId' => "1",
                "id" => 1,
                "title" => "Authoritatively formulate impactful e-services.",
                "description" => "Uniquely architect high-payoff e-services after distributed outsourcing. Globally negotiate process-centric niches with ubiquitous e-tailers. Uniquely re-engineer flexible leadership skills via an expanded array of networks."
            ],
            [
                'albumId' => "2",
                "id" => 2,
                "title" => "Dynamically embrace business process.",
                "description" => "Efficiently target multimedia based process improvements without interoperable e-markets. Intrinsicly network stand-alone synergy without pandemic vortals. Conveniently exploit focused applications before exceptional testing procedures. Collaboratively."
            ],
            [
                'albumId' => "3",
                "id" => 3,
                "title" => "Compellingly evisculate emerging synergy.",
                "description" => "Assertively create excellent markets via user friendly ideas. Authoritatively engineer process-centric opportunities rather than e-business leadership. Uniquely scale clicks-and-mortar methodologies with enterprise total linkage. Dramatically."
            ],
        ]);
    }
}
