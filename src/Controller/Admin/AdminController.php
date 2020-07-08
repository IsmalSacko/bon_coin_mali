<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 * @package App\Controller\Admin;
 */
class AdminController extends AbstractController
{
    /**
 * @Route("/", name="admin_", methods={"GET"})
 * @package App\Controller\Admin;
 */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
