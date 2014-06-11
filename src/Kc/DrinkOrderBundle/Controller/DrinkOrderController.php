<?php

namespace Kc\DrinkOrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DrinkOrderController extends Controller
{
    public function productAction()
    {
        return $this->render('KcDrinkOrderBundle:DrinkOrder:product.html.twig');
    }
}
