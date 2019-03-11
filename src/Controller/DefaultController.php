<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Faker;

class DefaultController extends AbstractController
{
    // /**
    //  * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
    //  */
    // public function index()
    // {
    //     return $this->render('default/index.html.twig');
    // }
    /**
     * @Route("/the_layout", name="the_layout")
     */
    public function the_layout()
    {
        $jobs = array();

        $faker = Faker\Factory::create();

        for($i=0; $i<12; $i++) {
            $jobs[$i] = array(
                'city' => $faker->city(),
                'has_image' => $faker->boolean(),
                'image_url' => $faker->imageUrl(295, 185),
                'type' => $faker->numberBetween(1,3),
                'title' => $faker->sentence(5, true),
                'description' => $faker->text(250),
                'posted_at' => $faker->dateTimeBetween('-3 month', 'now'),
                'posted_by' => $faker->name(),
                'contact_number' => $faker->e164PhoneNumber(),

            );
        }
        return $this->render('default/the_layout.html.twig', array('jobs' => $jobs));
    }
}
