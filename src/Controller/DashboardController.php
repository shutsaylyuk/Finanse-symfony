<?php

declare(strict_types=1);

/*
 * Dashboard Controller
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller responsible for user dashboard.
 */
class DashboardController extends AbstractController
{
    /**
     * Renders the main dashboard page for authenticated users.
     *
     * @return Response HTTP response
     */
    #[\Symfony\Component\Routing\Attribute\Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('dashboard/index.html.twig');
    }
}
