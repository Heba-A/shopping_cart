<?php

namespace AppBundle\Controller;

use AppBundle\Entity\cart_entries;
use AppBundle\Entity\CartItem;
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
        $db_items = $this->getDoctrine()
            ->getRepository('AppBundle:CartItem')
            ->findAll();

        $cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> '1')
            );

        $wish_cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> '2')
            );

        $cart_count = 0;
        foreach ($cart_items as $item) {
            $cart_count = $cart_count + (int)$item->getQuantity();
        }

        $wish_cart_count = 0;
        foreach ($wish_cart_items as $item) {
            $wish_cart_count = $wish_cart_count + (int)$item->getQuantity();
        }

        $ListItems = [];
        foreach ($db_items as $item) {
            $ListItems[$item->getId()] = array(
                'id' => $item->getId(),
                'name' => $item->getName() ,
                'price' => $item->getPrice() ,
                'is_wished' => false
            );

            foreach ($wish_cart_items as $wishListItem) {
                if ($item->getId() == $wishListItem->getItemId()->getId()) {
                    $ListItems[$item->getId()]['is_wished'] = true;
                }
            }
        }
        return $this->render('default/index.html.twig', array(
			'items_list' => $ListItems ,
            'cart_count' => $cart_count ,
            'wish_count' => $wish_cart_count ,
            'wish_items' => $wish_cart_items
        ));
    }

    /**
     * @Route("/add_to_cart/{id}")
     */
    public function add_to_cart($id){

        $em = $this->getDoctrine()->getManager();
        $selected_item_in_table = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findOneBy(
                array('itemId' => $id , 'cartId'=> '1')
            );
       // dump($selected_item_in_table); dump($selected_item_in_table->getQuantity()+1); die;
        if($selected_item_in_table){
            // update table

            $selected_item_in_table->setQuantity($selected_item_in_table->getQuantity()+1);
            $em->flush();

        }else{
            // insert table
            $inserted_item = new cart_entries();
            $inserted_item->setItemId($id);
            $inserted_item->setCartId(1);
            $inserted_item->setQuantity(1);


            $em->persist($inserted_item);
            $em->flush();
        }
        return $this->redirectToRoute('homepage');
    }

    /**
     *
     * @Route("/add_to_wish_list/{cartId}/{itemId}")
     *
     */
    public function add_to_wish_list($cartId , $itemId){

        $user_selected_item = $this->getDoctrine()
            ->getRepository('AppBundle:CartItem')
            ->findOneBy(
                array('id'=> $itemId)
            );

        $user_wish_cart = $this->getDoctrine()
            ->getRepository('AppBundle:Cart')
            ->findOneBy(
                array('id'=> $cartId)
            );

        $selected_item_in_table = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findOneBy(
                array('itemId' => $user_selected_item , 'cartId'=> $user_wish_cart)
            );

        if($selected_item_in_table){
            // remove from table.
            $em = $this->getDoctrine()->getManager();
            $em->remove($selected_item_in_table);
            $em->flush();
        }else{
            // insert to table
            $inserted_item = new cart_entries();
            $inserted_item->setItemId($user_selected_item);
            $inserted_item->setCartId($user_wish_cart);
            $inserted_item->setQuantity(1);

            $em = $this->getDoctrine()->getManager();

            $em->persist($inserted_item);
            $em->flush();
        }
        return $this->redirectToRoute('homepage');
    }


    /**
     * @Route("/cart_list/{id}")
     */
    public function cart_list($id){
        $em = $this->getDoctrine()->getManager();
        /** @var cart_entries $cart_items */
        $cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> $id)
            );

        return $this->render('default/view_cart.html.twig', array(
            'cart_items' => $cart_items ,
        ));
    }

    /**
     * @Route("/wish_cart_list/{id}")
     */
    public function wish_cart_list($id){
        $em = $this->getDoctrine()->getManager();
        /** @var cart_entries $cart_items */
        $cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> $id)
            );

        return $this->render('default/view_wish_cart.html.twig', array(
            'cart_items' => $cart_items ,
        ));
    }

}



