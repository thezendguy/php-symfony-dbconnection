<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $product = new Product();
        $product->setName('iphone');
        $product->setPrice('300.00');
        $product->setDescription('Used, like new');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
        
        return $this->render(
            'default/index.html.twig',
            [
                'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                'product' => $product,
            ]
        );
    }
}
