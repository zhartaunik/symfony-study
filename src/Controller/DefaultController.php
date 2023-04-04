<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    /**
     * @param string|null $name
     * @return Response
     */
    public function index(?string $name): Response
    {
        return new Response('Hello! ' . $name);
    }
}