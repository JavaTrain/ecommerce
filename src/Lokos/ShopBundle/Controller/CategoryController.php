<?php

namespace Lokos\ShopBundle\Controller;

use Doctrine\ORM\EntityManager;
use Lokos\ShopBundle\Entity\Category;
use Lokos\ShopBundle\Repositories\CartRepository;
use Lokos\ShopBundle\Repositories\CategoryRepository;
use Lokos\ShopBundle\Repositories\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class ProductController
 *
 * @package Lokos\ShopBundle\Controller
 */
class CategoryController extends BaseController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        /** @var CategoryRepository $repo */
        $repo = $this->container->get('doctrine')->getManager()->getRepository('LokosShopBundle:Category');

        /** @var Router $router */
        $router = $this->container->get('router');

        $options = array(
            'decorate'      => true,
            'rootOpen'      => function ($tree) {
                if (count($tree) && ($tree[0]['lvl'] == 0)) {
                    return '<ul id="main-menu">';
                } else {
                    return '<ul class="sub-menu">';
                }
            },
            'rootClose'     => '</ul>',
            'childOpen'     => function ($tree) {
                if (!empty($tree['__children'])) {
                    return '<li class="parent">';
                }
                return '<li>';
            },
            'childClose'    => '</li>',
            'nodeDecorator' => function ($node) use ($router) {
                if (!empty($node['__children'])) {
                    $res = '<a href="'.$router->generate(
                            'lokos_shop_overview',
                            ['id' => $node['id']]
                        ).'">'.$node['name'].'</a>';
                } else {
                    $res = '<a href="'.$router->generate(
                            'lokos_shop_overview',
                            ['id' => $node['id']]
                        ).'">'.$node['name'].'</a>';
                }
                return $res;
            }
        );

        return $this->render('LokosShopBundle:Category:index.html.twig', ['tree' => $repo->childrenHierarchy(null, false, $options)]);
    }

}