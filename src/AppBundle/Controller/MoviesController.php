<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 27/11/2018
 * Time: 14:13
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Movie;

use FOS\RestBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
class MoviesController extends AbstractController
{

    use ControllerTrait;





    /*
     * @Rest\View()
     */

    public function getMoviesAction(){
        $movies= $this->getDoctrine()->getRepository('AppBundle:Movie')->findAll();
        return $movies;
    }

    /*
    * @Rest\View(statusCode=201)
    * ParamConverter("movie", converter="fos_rest.request_body")
    * @Rest\NoRoute()
    */

    public function postMoviesAction(Movie $movie ){
        $em=$this->getDoctrine()->getManager();
        $em->persist($movie);
        $em->flush();
    }


}