<?php

namespace App\Controller;

use App\Github\ApiRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/{user}/{repository}/{since}/{until}", name="homepage")
     */
    public function index(ApiRequest $apiRequest, string $user, string $repository, $since = 4, $until = 0): Response
    {
        $data = $apiRequest->getData($user, $repository, $since, $until);

        return new JsonResponse($data);
    }
}
