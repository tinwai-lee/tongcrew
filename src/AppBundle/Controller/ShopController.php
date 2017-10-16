<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class ShopController extends Controller
{
	public function indexAction(Request $request){
		$cookies = $request->cookies;
		$orders = json_decode($cookies->get('tongcrew_orders'));
		$usedCoupons = intval($cookies->get('tongcrew_usedCoupons'));

		$tmp = $this->getDoctrine()->getRepository('AppBundle:Products')->findBy(array('status'=>'A'));
		$products = array();
		$soups = array();
		$coupons = array();
		foreach ($tmp as $product){
			$arr = array();
			$id = $product->getId();
			$arr['id'] = $id;
			$arr['name'] = $product->getName();
			$arr['description'] = $product->getDescription();
			$arr['price'] = $product->getPrice();
			$arr['category'] = $product->getCategory();
			$products[$arr['id']] = $arr;
			if ($arr['category'] == 'soup') $soups[] = $arr;
			if ($arr['category'] == 'coupon') $coupons[] = $arr;
		}
		
		$params = array();
		$params['products'] = $products;
		$params['soups'] = $soups;
		$params['coupons'] = $coupons;
		$params['usedCoupons'] = $usedCoupons;
		$params['orders'] = $orders;
		return $this->render('AppBundle:Shop:index.html.twig', $params);
	}

	public function cartAction(Request $request){
		$cookies = $request->cookies;
		$tmp_orders = json_decode($cookies->get('tongcrew_orders'));
		$usedCoupons = json_decode($cookies->get('tongcrew_usedCoupons'));
		$coupons = $usedCoupons;
		$ids = array();
		foreach ($tmp_orders as $id=>$quantity){
			if ($quantity < 1){
				unset($tmp_orders[$id]);
			} else {
				$ids[] = $id;
			}
		}
		
		$tmp = $this->getDoctrine()->getRepository('AppBundle:Products')->findBy(array('status'=>'A', 'id'=>$ids));
		$orders = array();
		$subtotal = 0;
		$total = 0;
		foreach ($tmp as $product){
			$arr = array();
			$id = $product->getId();
			$arr['id'] = $id;
			$arr['name'] = $product->getName();
			$arr['price'] = $product->getPrice();
			$arr['quantity'] = $tmp_orders[$id];
			$orders[$id] = $arr;

			$subtotal += $arr['price'] * $arr['quantity'];
			if ($coupons > 0 && $arr['price'] == 38){
				$coupons--;
			} else {
				$total += $arr['price'];
			}
		}
		$params = array();
		$params['orders'] = $orders;
		$params['usedCoupons'] = $usedCoupons;
		$params['total'] = $total;
		$params['subtotal'] = $subtotal;

		return $this->render('AppBundle:Shop:cart.html.twig', $params);
	}
}
