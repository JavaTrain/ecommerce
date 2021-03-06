<?php

namespace Lokos\ShopBundle\Controller;

use Doctrine\ORM\EntityManager;
use Lokos\ShopBundle\Entity\Category;
use Lokos\ShopBundle\Repositories\CartRepository;
use Lokos\ShopBundle\Repositories\CategoryRepository;
use Lokos\ShopBundle\Repositories\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class ProductController
 *
 * @package Lokos\ShopBundle\Controller
 */
class ProductController extends BaseController
{

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
//        $cartItems = $this->get('lokos.shop.cart_repository')
//                          ->getCartItems($request->getSession()->get('cart', array()));
        $data      = array(
            'categories' => $this->getDoctrine()->getRepository('LokosShopBundle:Category')->findAll(),
//            'cartResume' => $this->get('lokos.shop.cart_repository')->getCartItemsCountAndPrice($cartItems),
        );

        return $this->render('LokosShopBundle:Product:index.html.twig', $data);
    }

    /**
     * @param Request $request
     * @param         $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function overviewAction(Request $request, $id)
    {
        /** @var CartRepository $cartRepository */
        /** @var CategoryRepository $categoryRepository */
        /** @var ProductRepository $productRepository */
        $cartRepository     = $this->get('lokos.shop.cart_repository');
        $categoryRepository = $this->getDoctrine()->getRepository('LokosShopBundle:Category');
        $productRepository  = $this->getDoctrine()->getRepository('LokosShopBundle:Product');
        $filterBrand        = $request->get('brand', array());
        $filterAttribute    = $request->get('attribute', array());
        $params             = array();

        $params['categoryId'] = $id;
        if (!empty($filterBrand)) {
            $params['filterBrand'] = $filterBrand;
        }
        if (!empty($filterAttribute)) {
            $productIds           = $productRepository->getIdsByFilterAttributes($id, $filterBrand, $filterAttribute);
            $params['productIds'] = $productIds;
        }


        $data = $this->getListData(
            $request,
            'LokosShopBundle:Product',
            $params,
            'id',
            'desc'
        );

        $cartItems               = $cartRepository->getCartItems($request->getSession()->get('cart', array()));
        $data['categories']      = $categoryRepository->findAll();
        $data['cartResume']      = $cartRepository->getCartItemsCountAndPrice($cartItems);
        $data['itemCategory']    = $categoryRepository->reset()->buildQuery(['id' => $id])->getSingle();
        $data['filterBrand']     = $filterBrand;
        $data['filterAttribute'] = $filterAttribute;

        return $this->render('LokosShopBundle:Product:overview.html.twig', $data);
    }

    /**
     * @param Request $request
     * @param         $catId
     * @param         $itemId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailAction(Request $request, $catId, $itemId)
    {
        /** @var ProductRepository $productRepository */
        /** @var CartRepository $cartRepository */
        /** @var CategoryRepository $categoryRepository */
        $productRepository  = $this->getDoctrine()->getRepository('LokosShopBundle:Product');
        $cartRepository     = $this->get('lokos.shop.cart_repository');//repository without entity
        $categoryRepository = $this->getDoctrine()->getRepository('LokosShopBundle:Category');


        $item = $productRepository
                     ->reset()
                     ->buildQuery(array('productId' => $itemId))
                     ->getSingle();
        if (!$item) {
            throw new NotFoundHttpException('Item: "'.$itemId.'" not found');
        }
//        var_dump($request->getSession()->get('cart', array()));die;
//        var_dump($request->getSession()->set('cart', array()));die;
        $cartItems = $cartRepository->getCartItems($request->getSession()->get('cart', array()));

        $data = array(
            'item'             => $item,
            'options'          => $productRepository->getProductOptions($item),
            'cartResume'       => $cartRepository->getCartItemsCountAndPrice($cartItems),
            'categories'       => $categoryRepository->findAll(),
            'availableOptions' => json_encode($productRepository->getAvailableOptions($item)),
        );

        if ($request->isMethod('POST')) {
            $response = $this->render('LokosShopBundle:Product:detail_block.html.twig', $data);
        } else {
            $response = $this->render('LokosShopBundle:Product:detail.html.twig', $data);
        }

        return $response;
    }

}