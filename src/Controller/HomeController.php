<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 26/05/2022
 * Time: 14:26
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="base")
     */
    public function base():Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/index", name="index")
     */
    public function index():Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/code promotionnel--B5511--1xbet", name="1xbet")
     */
    public function index_1xbet():Response
    {
        return $this->render('1xbet/1xbet.html.twig');
    }

    /**
     * @Route("/code promotionnel--B5511--1win", name="1win")
     */
    public function index_1win():Response
    {
        return $this->render('1win/1win.html.twig');
    }

    /**
     * @Route("/code promotionnel--B5511--betwinner", name="betwinner")
     */
    public function index_betwinner():Response
    {
        return $this->render('betwinner/betwinner.html.twig');
    }

    /**
     * @Route("/code promotionnel--B5511--linebet", name="linebet")
     */
    public function index_linebet():Response
    {
        return $this->render('linebet/linebet.html.twig');
    }

    /**
     * @Route("/code promotionnel--ml_170670--melbet", name="melbet")
     */
    public function index_melbet():Response
    {
        return $this->render('melbet/melbet.html.twig');
    }
}

