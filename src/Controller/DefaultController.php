<?php

namespace App\Controller;

use App\Github\ApiRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{user}/{repository}/{since}/{until}", name="homepage")
     */
    public function index(ApiRequest $apiRequest, string $user, string $repository, $since = 4, $until = 0): Response
    {
        $apiRequest->getData($user, $repository, $since, $until);
        die();

//        $apiRequest->getData($user, $repository);
//        die();

//        return $this->render('default/index.html.twig', [
//            'controller_name' => 'DefaultController',
//            'searchForm' => $searchForm->createView(),
//        ]);
    }
}
